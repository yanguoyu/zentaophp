<?php
/**
 * The model file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: model.php 5118 2013-07-12 07:41:41Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php
class approveModel extends model
{
    /* The members every linking. */
    const LINK_MEMBERS_ONE_TIME = 20;

    /**
     * Check the privilege.
     *
     * @param  object    $project
     * @access public
     * @return bool
     */
    public function checkPriv($projectID)
    {
        if(empty($projectID)) return false;

        /* If is admin, return true. */
        if($this->app->user->admin) return true;
        return (strpos(",{$this->app->user->view->projects},", ",{$projectID},") !== false);
    }

    /**
     * Set menu.
     *
     * @param  array  $projects
     * @param  int    $projectID
     * @param  int    $buildID
     * @param  string $extra
     * @access public
     * @return void
     */
    public function setMenu($projects, $projectID, $buildID = 0, $extra = '')
    {
        /* Check the privilege. */
        $project = $this->getById($projectID);
        $project->user = $this->app->user;

        /* Unset story, bug, build and testtask if type is ops. */
        if($project and $project->type == 'ops')
        {
            unset($this->lang->approve->menu->story);
            unset($this->lang->approve->menu->qa);
            unset($this->lang->approve->subMenu->qa->bug);
            unset($this->lang->approve->subMenu->qa->build);
            unset($this->lang->approve->subMenu->qa->testtask);
        }

        if($projects and !isset($projects[$projectID]) and !$this->checkPriv($projectID))
        {
            echo(js::alert($this->lang->approve->accessDenied));
            $loginLink = $this->config->requestType == 'GET' ? "?{$this->config->moduleVar}=user&{$this->config->methodVar}=login" : "user{$this->config->requestFix}login";
            if(strpos($this->server->http_referer, $loginLink) !== false) die(js::locate(inlink('index')));
            die(js::locate('back'));
        }

        $moduleName = $this->app->getModuleName();
        $methodName = $this->app->getMethodName();

        if($this->cookie->projectMode == 'noclosed' and ($project->status == 'done' or $project->status == 'closed'))
        {
            setcookie('projectMode', 'all', 0, $this->config->webRoot, '', false, false);
            $this->cookie->projectMode = 'all';
        }

        $selectHtml = $this->select($projects, $projectID, $buildID, $moduleName, $methodName, $extra);

        $label = $this->lang->approve->index;
        if($moduleName == 'project' && $methodName == 'all')    $label = $this->lang->approve->allProjects;
        if($moduleName == 'project' && $methodName == 'create') $label = $this->lang->approve->create;

        $projectIndex = '';
        $isMobile     = $this->app->viewType == 'mhtml';
        if($isMobile)
        {
            $projectIndex  = html::a(helper::createLink('project', 'index'), $this->lang->approve->index) . $this->lang->colon;
            $projectIndex .= $selectHtml;
        }
        else
        {
            $projectIndex  = '<div class="btn-group angle-btn' . ($methodName == 'index' ? ' active' : '') . '"><div class="btn-group"><button data-toggle="dropdown" type="button" class="btn">' . $label . ' <span class="caret"></span></button>';
            $projectIndex .= '<ul class="dropdown-menu">';
            if(common::hasPriv('approve', 'index'))  $projectIndex .= '<li>' . html::a(helper::createLink('approve', 'index', 'locate=no'), '<i class="icon icon-home"></i> ' . $this->lang->approve->index) . '</li>';
            if(common::hasPriv('approve', 'all'))    $projectIndex .= '<li>' . html::a(helper::createLink('approve', 'all', 'status=all'), '<i class="icon icon-cards-view"></i> ' . $this->lang->approve->allProjects) . '</li>';

            if(common::isTutorialMode())
            {
                $wizardParams = helper::safe64Encode('');
                $link = helper::createLink('tutorial', 'wizard', "module=project&method=create&params=$wizardParams");
                $projectIndex .= '<li>' . html::a($link, "<i class='icon icon-plus'></i> {$this->lang->approve->create}", '', "class='create-project-btn'") . '</li>';
            }
            $projectIndex .= '</ul></div></div>';
            $projectIndex .= $selectHtml;
        }

        $this->lang->modulePageNav = $projectIndex;
        if($moduleName != 'project') $this->lang->$moduleName->dividerMenu = $this->lang->approve->dividerMenu;

        foreach($this->lang->approve->menu as $key => $menu)
        {
            common::setMenuVars($this->lang->approve->menu, $key, $projectID);

            /* Replace for dropdown submenu. */
            if(isset($this->lang->approve->subMenu->$key))
            {
                $projectSubMenu = $this->lang->approve->subMenu->$key;
                $subMenu = common::createSubMenu($this->lang->approve->subMenu->$key, $projectID);

                if(!empty($subMenu))
                {
                    foreach($subMenu as $menuKey => $menu)
                    {
                        $itemMenu = zget($projectSubMenu, $menuKey, '');
                        $isActive['method']    = ($moduleName == strtolower($menu->link['module']) and $methodName == strtolower($menu->link['method']));
                        $isActive['alias']     = ($moduleName == strtolower($menu->link['module']) and (is_array($itemMenu) and isset($itemMenu['alias']) and strpos($itemMenu['alias'], $methodName) !== false));
                        $isActive['subModule'] = (is_array($itemMenu) and isset($itemMenu['subModule']) and strpos($itemMenu['subModule'], $moduleName) !== false);
                        if($isActive['method'] or $isActive['alias'] or $isActive['subModule'])
                        {
                            $this->lang->approve->menu->{$key}['link'] = $menu->text . "|" . join('|', $menu->link);
                            break;
                        }
                    }
                    $this->lang->approve->menu->{$key}['subMenu'] = $subMenu;
                }
            }
        }
    }

    /**
     * Create the select code of projects.
     *
     * @param  array     $projects
     * @param  int       $projectID
     * @param  int       $buildID
     * @param  string    $currentModule
     * @param  string    $currentMethod
     * @param  string    $extra
     * @access public
     * @return string
     */
    public function select($projects, $projectID, $buildID, $currentModule, $currentMethod, $extra = '')
    {
        if(!$projectID) return;

        $isMobile = $this->app->viewType == 'mhtml';

        setCookie("lastProject", $projectID, $this->config->cookieLife, $this->config->webRoot, '', false, true);
        $currentProject = $this->getById($projectID);

        $dropMenuLink = helper::createLink('approve', 'ajaxGetDropMenu', "objectID=$projectID&module=$currentModule&method=$currentMethod&extra=$extra");
        $output  = "<div class='btn-group angle-btn'><div class='btn-group'><button data-toggle='dropdown' type='button' class='btn btn-limit' id='currentItem' title='{$currentProject->name}'>{$currentProject->name} <span class='caret'></span></button><div id='dropMenu' class='dropdown-menu search-list' data-ride='searchList' data-url='$dropMenuLink'>";
        $output .= '<div class="input-control search-box has-icon-left has-icon-right search-example"><input type="search" class="form-control search-input" /><label class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label><a class="input-control-icon-right search-clear-btn"><i class="icon icon-close icon-sm"></i></a></div>';
        $output .= "</div></div></div>";
        if($isMobile) $output  = "<a id='currentItem' href=\"javascript:showSearchMenu('project', '$projectID', '$currentModule', '$currentMethod', '$extra')\">{$currentProject->name} <span class='icon-caret-down'></span></a><div id='currentItemDropMenu' class='hidden affix enter-from-bottom layer'></div>";

        return $output;
    }

    /**
     * Save the project id user last visited to session.
     *
     * @param  int   $projectID
     * @param  array $projects
     * @access public
     * @return int
     */
    public function saveState($projectID, $projects)
    {
        if($projectID > 0) $this->session->set('project', (int)$projectID);
        if($projectID == 0 and $this->cookie->lastProject) $this->session->set('project', (int)$this->cookie->lastProject);
        if($projectID == 0 and $this->session->project == '') $this->session->set('project', key($projects));
        if(!isset($projects[$this->session->project]))
        {
            $this->session->set('project', key($projects));
            if($projectID > 0)
            {
                echo(js::alert($this->lang->approve->accessDenied));
                $loginLink = $this->config->requestType == 'GET' ? "?{$this->config->moduleVar}=user&{$this->config->methodVar}=login" : "user{$this->config->requestFix}login";
                if(strpos($this->server->http_referer, $loginLink) !== false) die(js::locate(inlink('index')));
                die(js::locate('back'));
            }
        }
        return $this->session->project;
    }

    /**
     * Create a approve.
     * @param  string $projectID 审批关联的projectId
     * @param  string $type
     * @param  bool   $startApprove True 为发起审批 False 为保存
     * @access public
     * @return void
     */
    public function create($projectID, $type, $startApprove)
    {
        $this->lang->approve->team = $this->lang->approve->teamname;
        $approve = fixer::input('post')
            ->setDefault('status', $startApprove ? 'doing' : 'wait')
            ->setIF($this->post->acl != 'custom', 'whitelist', '')
            ->setIF($startApprove, 'startDate', helper::now())
            ->setDefault('openedBy', $this->app->user->account)
            ->setDefault('openedDate', helper::now())
            ->setDefault('assignedTo', $startApprove ? $this->post->PO : $this->app->user->account)
            ->setDefault('approveStep', 'PO')
            ->setDefault('assignedDate', helper::now())
            ->setDefault('openedVersion', $this->config->version)
            ->setDefault('team', substr($this->post->name,0, 30))
            ->join('whitelist', ',')
            ->stripTags($this->config->approve->editor->create['id'], $this->config->allowedTags)
            ->remove('save,delta,startAction')
            ->get();
        $approve->project = $projectID;
        $approve->type = $type;
        $approve = $this->loadModel('file')->processImgURL($approve, $this->config->approve->editor->create['id'], $this->post->uid);
        $this->dao->insert(TABLE_APPROVE)->data($approve)
            ->autoCheck($skipFields = 'begin,end')
            ->batchcheck($this->config->approve->create->requiredFields, 'notempty')
            ->checkIF($approve->begin != '', 'begin', 'date')
            ->checkIF($approve->end != '', 'end', 'date')
            ->checkIF($approve->end != '', 'end', 'gt', $approve->begin)
            ->exec();

        /* Add the creater to the team. */
        if(!dao::isError())
        {
            $approveId     = $this->dao->lastInsertId();
            $today         = helper::today();
            $creatorExists = false;

            /* Save order. */
            $this->dao->update(TABLE_APPROVE)->set('`order`')->eq($approveId * 5)->where('id')->eq($approveId)->exec();
            $this->file->updateObjectID($this->post->uid, $approveId, 'approve');
            return $approveId;
        }
    }

    /**
     * Edit a approve.
     *
     * @param  int    $approveId
     * @param  bool   $startApprove True 为发起审批 False 为保存
     * @access public
     * @return array
     */
    public function edit($approveId, $startApprove)
    {
        $approveId  = (int)$approveId;
        $oldApprove = $this->dao->findById($approveId)->from(TABLE_APPROVE)->fetch();
        $approve = fixer::input('post')
            ->setIF($startApprove, 'startDate', helper::now())
            ->setDefault('status', $startApprove ? 'doing' : 'wait')
            ->setDefault('assignedTo', $startApprove ? $this->post->PO : $this->app->user->account)
            ->setDefault('assignedDate', helper::now())
            ->stripTags($this->config->approve->editor->edit['id'], $this->config->allowedTags)
            ->remove('save,delta,startAction')
            ->get();
        $approve = $this->loadModel('file')->processImgURL($approve, $this->config->approve->editor->edit['id'], $this->post->uid);
        $this->dao->update(TABLE_APPROVE)->data($approve)
            ->autoCheck()
            ->batchcheck($this->config->approve->create->requiredFields, 'notempty')
            ->where('id')->eq($approveId)
            ->exec();
        if(!dao::isError())
        {
            $this->file->updateObjectID($this->post->uid, $approveId, 'approve');
            return common::createChanges($oldApprove, $approve);
        }
    }

    /**
     * Update a approve.
     *
     * @param  int    $approveId
     * @access public
     * @return array
     */
    public function update($approveId)
    {
        $approveId  = (int)$approveId;
        $oldApprove = $this->dao->findById($approveId)->from(TABLE_APPROVE)->fetch();
        $status = $oldApprove->status;
        $assignedTo = $oldApprove->assignedTo;
        $approveStep = $oldApprove->approveStep;
        // 驳回
        if ($this->post->result == 'back') {
            $status = 'back';
            $assignedTo = $oldApprove->openedBy;
        // 分管领导审批
        } else if ('LD' == $oldApprove->approveStep) {
            $status = 'finish';
            $assignedTo = null;
            $closedDate = $oldApprove->closedDate;

        } else {
            $status = 'doing';
            $approveStep = 'LD';
            $assignedTo = $oldApprove->LD;
        }
        $approve = fixer::input('post')
            ->setForce('status', $status)
            ->setForce('assignedTo', $assignedTo)
            ->setForce('approveStep', $approveStep)
            ->setDefault('assignedDate', helper::now())
            ->remove('result,comment')
            ->get();
        $approve = $this->loadModel('file')->processImgURL($approve, $this->config->approve->editor->edit['id'], $this->post->uid);
        $this->dao->update(TABLE_APPROVE)->data($approve)
            ->autoCheck()
            ->where('id')->eq($approveId)
            ->exec();
        if(!dao::isError())
        {
            $this->file->updateObjectID($this->post->uid, $approveId, 'approve');
            return common::createChanges($oldApprove, $approve);
        }
    }

    /**
     * Start approve.
     *
     * @param  int    $approveId
     * @access public
     * @return void
     */
    public function start($approveId)
    {
        $oldApprove = $this->getApproveById($approveId);
        $approve = fixer::input('post')
            ->setDefault('startDate', helper::now())
            ->setDefault('assignedTo', $oldApprove->PO)
            ->setDefault('assignedDate', helper::now())
            ->setDefault('status', 'doing')
            ->remove('comment')->get();

        $this->dao->update(TABLE_APPROVE)->data($approve)
            ->autoCheck()
            ->where('id')->eq((int)$approveId)
            ->exec();

        if(!dao::isError()) return common::createChanges($oldApprove, $approve);
    }

    /**
     * Get project pairs.
     *
     * @param  string $mode     all|noclosed or empty
     * @access public
     * @return array
     */
    public function getPairs($mode = '')
    {
        if(defined('TUTORIAL')) return $this->loadModel('tutorial')->getProjectPairs();

        $orderBy  = !empty($this->config->project->orderBy) ? $this->config->project->orderBy : 'isDone, status';
        $mode    .= $this->cookie->projectMode;
        /* Order by status's content whether or not done */
        $projects = $this->dao->select('*, IF(INSTR(" done,closed", status) < 2, 0, 1) AS isDone')->from(TABLE_PROJECT)
            ->where('iscat')->eq(0)
            ->beginIF(strpos($mode, 'withdelete') === false)->andWhere('deleted')->eq(0)->fi()
            ->beginIF(!$this->app->user->admin)->andWhere('id')->in($this->app->user->view->projects)->fi()
            ->orderBy($orderBy)
            ->fetchAll();
        $pairs = array();
        foreach($projects as $project)
        {
            if(strpos($mode, 'noclosed') !== false and ($project->status == 'done' or $project->status == 'closed')) continue;
            $pairs[$project->id] = $project->name;
        }
        if(strpos($mode, 'empty') !== false) $pairs[0] = '';

        /* If the pairs is empty, to make sure there's an project in the pairs. */
        if(empty($pairs) and isset($projects[0]))
        {
            $firstProject = $projects[0];
            $pairs[$firstProject->id] = $firstProject->name;
        }

        return $pairs;
    }

    /**
     * Get project lists.
     *
     * @param  string $status  all|undone|wait|running
     * @param  int    $limit
     * @param  int    $productID
     * @access public
     * @return array
     */
    public function getList($status = 'all', $limit = 0, $projectID, $productID = 0, $branch = 0, $isSprint = null)
    {
        if($productID != 0)
        {
           return $this->dao->select('t2.*,t3.name AS productName')->from(TABLE_PROJECTPRODUCT)->alias('t1')
                ->leftJoin(TABLE_APPROVE)->alias('t2')->on('t2.project = t1.project')
                ->leftjoin(TABLE_PRODUCT)->alias('t3')->on('t1.product = t3.id')
                ->where('t1.product')->eq($productID)
                ->beginIf($projectID != 0)->andWhere('t1.project')->eq($projectID)->fi()
                ->andWhere('t2.deleted')->eq(0)
                ->andWhere('t2.iscat')->eq(0)
                ->beginIf($status == 'assignedTo')->andWhere('t2.assignedTo')->eq($this->app->user->account)->fi()
                ->beginIf($status != 'all' and $status != 'assignedTo')->andWhere('t2.status')->eq($status)->fi()
                ->beginIF($branch)->andWhere('t1.branch')->eq($branch)->fi()
                ->beginIF(!$this->app->user->admin)->andWhere('t2.id')->in($this->app->user->view->projects)->fi()
                ->orderBy('order_desc')
                ->beginIF($limit)->limit($limit)->fi()
                ->fetchAll('id');
        }
        else
        {
            return $this->dao->select('*')->from(TABLE_APPROVE)
                ->where('iscat')->eq(0)
                ->beginIf($projectID != 0)->andWhere('project')->eq($projectID)->fi()
                ->beginIf($status == 'assignedTo')->andWhere('assignedTo')->eq($this->app->user->account)->fi()
                ->beginIf($status != 'all' and  $status != 'assignedTo')->andWhere('status')->eq($status)->fi()
                ->beginIF(!$this->app->user->admin)->andWhere('id')->in($this->app->user->view->projects)->fi()
                ->andWhere('deleted')->eq(0)
                ->orderBy('order_desc')
                ->beginIF($limit)->limit($limit)->fi()
                ->fetchAll('id');
        }
    }

    /**
     * Get projects lists grouped by product.
     *
     * @access public
     * @return array
     */
    public function getProductGroupList()
    {
        $list = $this->dao->select('t1.id, t1.name,t1.status, t2.product')->from(TABLE_APPROVE)->alias('t1')
            ->leftJoin(TABLE_PROJECTPRODUCT)->alias('t2')->on('t1.id = t2.project')
            ->where('t1.deleted')->eq(0)
            ->beginIF(!$this->app->user->admin)->andWhere('t1.id')->in($this->app->user->view->projects)->fi()
            ->fetchGroup('product');

        $noProducts = array();
        foreach($list as $id => $product)
        {
            foreach($product as $ID => $project)
            {
                if(!$project->product)
                {
                    if($this->checkPriv($project->id)) $noProducts[] = $project;
                    unset($list[$id][$ID]);
                }
            }
        }
        unset($list['']);
        $list[''] = $noProducts;

        return $list;
    }

    /**
     * Get approve stats.
     *
     * @param  string $status
     * @param  int    $projectID
     * @param  int    $productID
     * @param  int    $itemCounts
     * @param  string $orderBy
     * @param  int    $pager
     * @access public
     * @return void
     */
    public function getApproveStats($status = 'all', $projectID = 0, $productID = 0, $branch = 0, $itemCounts = 30, $orderBy = 'order_desc', $pager = null)
    {
        /* Init vars. */
        $approves = $this->getList($status, 0, $projectID, $productID, $branch);
        $approves = $this->dao->select('t1.*, t2.name as projectName,t4.name as productName')->from(TABLE_APPROVE)->alias('t1')
            ->leftJoin(TABLE_PROJECT)->alias('t2')->on('t1.project = t2.id')
            ->leftjoin(TABLE_PROJECTPRODUCT)->alias('t3')->on('t2.id = t3.project')
            ->leftjoin(TABLE_PRODUCT)->alias('t4')->on('t4.id = t3.product')
            ->where('t1.id')->in(array_keys($approves))
            ->orderBy($orderBy)
            ->page($pager)
            ->fetchAll('id');

        $this->app->loadClass('date');
        foreach($approves as $id => $approve) {
            $approve->user = $this->app->user;
        }

        return $approves;
    }

    /**
     * Get project by id.
     *
     * @param  int    $projectID
     * @param  bool   $setImgSize
     * @access public
     * @return void
     */
    public function getById($projectID, $setImgSize = false)
    {
        if(defined('TUTORIAL')) return $this->loadModel('tutorial')->getProject();

        $project = $this->dao->findById((int)$projectID)->from(TABLE_PROJECT)->fetch();
        if(!$project) return false;
        $project = $this->loadModel('file')->replaceImgURL($project, 'desc');
        if($setImgSize) $project->desc = $this->file->setImgSize($project->desc);

        $tasks = $this->dao->select('id, project, estimate, consumed, `left`, status, closedReason')
                    ->from(TABLE_TASK)
                    ->where('project')->eq($projectID)
                    ->andWhere('parent')->lt(1)
                    ->andWhere('deleted')->eq(0)
                    ->fetchAll();
        /* Compute totalEstimate, totalConsumed, totalLeft. */
        $totalLeft = 0;
        foreach($tasks as $task)
        {
            if($task->status != 'cancel' and $task->status != 'closed') $totalLeft += $task->left;
        }
        $totalLeft     = round($totalLeft, 1);
        $project->tasks      = $tasks;
        $project->totalLeft  = $totalLeft;
        // noLeftHour 表示剩余时间为0，进度100%
        $project->noLeftHour = $totalLeft <= 0;
        return $project;
    }

    /**
     * Get approveId by id.
     *
     * @param  int    $approveId
     * @param  bool   $setImgSize
     * @access public
     * @return void
     */
    public function getApproveById($approveId, $setImgSize = false)
    {

        $approve = $this->dao->findById((int)$approveId)->from(TABLE_APPROVE)->fetch();
        if(!$approve) return false;
        $approve = $this->loadModel('file')->replaceImgURL($approve, 'desc');
        if($setImgSize) $approve->desc = $this->file->setImgSize($approve->desc);

        return $approve;
    }

    /**
     * Get products of a project.
     *
     * @param  int    $projectID
     * @access public
     * @return array
     */
    public function getProducts($projectID, $withBranch = true)
    {
        if($this->config->global->flow == 'onlyTask') return array();

        if(defined('TUTORIAL'))
        {
            if(!$withBranch) return $this->loadModel('tutorial')->getProductPairs();
            return $this->loadModel('tutorial')->getProjectProducts();
        }
        $query = $this->dao->select('t2.id, t2.name, t2.type, t1.branch, t1.plan')->from(TABLE_PROJECTPRODUCT)->alias('t1')
            ->leftJoin(TABLE_PRODUCT)->alias('t2')
            ->on('t1.product = t2.id')
            ->where('t1.project')->eq((int)$projectID)
            ->andWhere('t2.deleted')->eq(0);
        if(!$withBranch) return $query->fetchPairs('id', 'name');
        return $query->fetchAll('id');
    }

    /**
     * Get team members.
     *
     * @param  int    $projectID
     * @access public
     * @return array
     */
    public function getTeamMembers($projectID)
    {
        if(defined('TUTORIAL')) return $this->loadModel('tutorial')->getTeamMembers();
        return $this->dao->select("t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname")->from(TABLE_TEAM)->alias('t1')
            ->leftJoin(TABLE_USER)->alias('t2')->on('t1.account = t2.account')
            ->where('t1.root')->eq((int)$projectID)
            ->andWhere('t1.type')->eq('project')
            ->andWhere('t2.deleted')->eq('0')
            ->fetchAll('account');
    }
    /**
     * Judge an action is clickable or not.
     *
     * @param  object    $project
     * @param  string    $action
     * @access public
     * @return bool
     */
    public static function isClickable($project, $action)
    {
        $action = strtolower($action);

        $isAssignToUser = $project->user->account == $project->assignedTo;
        if($action == 'start' or $action == 'edit')    return ($project->status == 'wait' or $project->status == 'back') and $isAssignToUser;
        if($action == 'approve') return $project->status == 'doing' and $isAssignToUser;

        return true;
    }

    /**
     * Create the link from module,method,extra
     *
     * @param  string  $module
     * @param  string  $method
     * @param  mix     $extra
     * @access public
     * @return void
     */
    public function getProjectLink($module, $method, $extra)
    {
        $link = helper::createLink($module, $method, "status=all&projectID=%s");
        if ($method == 'index') {
            $link = helper::createLink($module, 'all', "status=all&projectID=%s");
        } elseif ($method == 'all' or $method == 'view' or $method == 'create') {
            $link = helper::createLink($module, 'list', "status=all&projectID=%s");
        }
        if($extra != '')
        {
            $link = helper::createLink($module, $method, "status=all&projectID=%s&type=$extra");
        }
        return $link;
    }

    /**
     * Print html for tree.
     *
     * @param object $trees
     * @access pubic
     * @return string
     */
    public function printTree($trees)
    {
        $html = '';
        foreach($trees as $tree)
        {
            if(is_array($tree)) $tree = (object)$tree;
            switch($tree->type)
            {
                case 'module':
                    $this->app->loadLang('tree');
                    $html .= "<li class='item-module'>";
                    $html .= "<a class='tree-toggle'><span class='title' title='{$tree->name}'>" . $tree->name . '</span></a>';
                    break;
                case 'task':
                    $link = helper::createLink('project', 'treeTask', "taskID={$tree->id}");
                    $html .= '<li class="item-task">';
                    $html .= '<a class="tree-link" href="' . $link . '"><span class="label label-type">' . ($tree->parent > 0 ? $this->lang->task->children : $this->lang->task->common) . "</span><span class='title' title='{$tree->title}'>" . $tree->title . '</span> <span class="user"><i class="icon icon-person"></i> ' . (empty($tree->assignedTo) ? $tree->openedBy : $tree->assignedTo) . '</span><span class="label label-id">' . $tree->id . '</span></a>';
                    break;
                case 'product':
                    $this->app->loadLang('product');
                    $html .= '<li class="item-product">';
                    $html .= '<a class="tree-toggle"><span class="label label-type">' . $this->lang->productCommon . "</span><span class='title' title='{$tree->name}'>" . $tree->name . '</span></a>';
                    break;
                case 'story':
                    $this->app->loadLang('story');
                    $link = helper::createLink('project', 'treeStory', "storyID={$tree->storyId}");
                    $html .= '<li class="item-story">';
                    $html .= '<a class="tree-link" href="' . $link . '"><span class="label label-type">' . $this->lang->story->common . "</span><span class='title' title='{$tree->title}'>" . $tree->title . '</span> <span class="user"><i class="icon icon-person"></i> ' . (empty($tree->assignedTo) ? $tree->openedBy : $tree->assignedTo) . '</span><span class="label label-id">' . $tree->storyId . '</span></a>';
                    break;
                case 'branch':
                    $this->app->loadLang('branch');
                    $html .= "<li class='item-module'>";
                    $html .= "<a class='tree-toggle'><span class='label label-type'>{$this->lang->branch->common}</span><span class='title' title='{$tree->name}'>{$tree->name}</span></a>";
                    break;
            }
            if(isset($tree->children))
            {
                $html .= '<ul>';
                $html .= $this->printTree($tree->children);
                $html .= '</ul>';
            }
            $html .= '</li>';
        }
        return $html;
    }
}
