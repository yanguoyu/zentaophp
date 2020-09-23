<?php
/**
 * The control file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: control.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
class approve extends control
{
    public $projects;

    /**
     * Construct function, Set projects.
     *
     * @access public
     * @return void
     */
    public function __construct($moduleName = '', $methodName = '')
    {
        parent::__construct($moduleName, $methodName);
        if($this->methodName != 'computeburn')
        {
            $this->projects = $this->approve->getPairs('nocode');
            if(!$this->projects and $this->methodName != 'index' and $this->methodName != 'create' and $this->app->getViewType() != 'mhtml') $this->locate($this->createLink('approve', 'create'));
            if(!$this->projects and $this->methodName != 'index' and $this->methodName != 'create' and $this->app->getViewType() == 'mhtml') $this->locate($this->createLink('approve', 'index'));
        }
    }

    /**
     * The index page.
     *
     * @access public
     * @return void
     */
    public function index()
    {
        if($this->app->viewType != 'mhtml') unset($this->lang->approve->menu->index);
        $this->commonAction();
        $this->view->title  =   $this->lang->approve->index;
        $this->display();
    }

    /**
     * Common actions.
     *
     * @param  int    $projectID
     * @access public
     * @return object current object
     */
    public function commonAction($projectID = 0, $extra = '')
    {
        $this->loadModel('product');

        /* Get projects and products info. */
        $projectID     = $this->approve->saveState($projectID, $this->projects);
        $project       = $this->approve->getById($projectID);
        $products      = $this->approve->getProducts($projectID);
        $teamMembers   = $this->approve->getTeamMembers($projectID);

        /* Set menu. */
        $this->approve->setMenu($this->projects, $projectID, $buildID = 0, $extra);

        /* Assign. */
        $this->view->projects      = $this->projects;
        $this->view->project       = $project;
        $this->view->products      = $products;
        $this->view->teamMembers   = $teamMembers;

        return $project;
    }

    /**
     * Create a approve. 创建一个审批
     *
     * @param string $projectID
     * @param string $copyProjectID
     * @param int    $planID
     *
     * @access public
     * @return void
     */
    public function create($projectID = '', $type = 'start')
    {
        $project = $this->approve->getById($projectID, true);
        if ($project->status == 'noconfirm' or $project->status == 'wait' ) {
            $type = 'start';
        } else if ($project->noLeftHour) {
            $type = 'close';
        } else {
            $type = 'suspend';
        }
        if(!empty($_POST))
        {
            $approveId = '';
            if (isset($_POST['save'])) {
                // 保存审批
                $approveId = $this->approve->create($projectID, $type, FALSE);
            }else if (isset($_POST['startAction'])) {
                // 发起审批
                $approveId = $this->approve->create($projectID, $type, TRUE);
            }
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            if($approveId == '') $this->send(array('result' => 'fail', 'message' => '保存失败'));

            $this->loadModel('action')->create('approve', $approveId, 'opened', '', join(',', $_POST['products']));

            $this->executeHooks($approveId);

            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('view', "approveId=$approveId")));
        }

        $projectID = key($this->projects);
        if($this->session->project) $projectID = $this->session->project;
        $this->approve->setMenu($this->projects, $projectID);

        $this->view->title         = $this->lang->approve->create;
        $this->view->projects      = array('' => '') + $this->projects;
        $this->view->groups        = $this->loadModel('group')->getPairs();
        $this->view->allProducts   = array(0 => '') + $this->loadModel('product')->getPairs('noclosed|nocode');
        $this->view->projectID     = $projectID;
        $this->view->project       = $project;
        $this->view->type          = $type;
        $this->view->pmUsers       = $this->loadModel('user')->getPairs('noclosed|nodeleted|pmfirst',  $project->PM);
        $this->display();
    }

    /**
     * Edit a approve. 编辑审批
     *
     * @param  int    $approveId
     * @param  string $action
     * @param  string $extra
     *
     * @access public
     * @return void
     */
    public function edit($approveId, $action = 'edit', $extra = '')
    {
        $approve   = $this->approve->getApproveById($approveId);
        $projectID = $approveId->project;
        $project  = $this->approve->getById($projectID);
        $browseProjectLink = $this->createLink('project', 'browse', "projectID=$projectID");
        if(!empty($_POST))
        {
            $changes = $this->approve->edit($approveId);
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            if($changes)
            {
                $actionID = $this->loadModel('action')->create('approve', $approveId, 'edited');
                $this->action->logHistory($actionID, $changes);
            }
            $this->executeHooks($projectID);
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('view', "approveId=$approveId&projectId=$projectID")));
        }

        /* Set menu. */
        $this->approve->setMenu($this->projects, $projectID);

        $this->view->title          = $this->lang->approve->edit . $this->lang->colon . $project->name;;
        $this->view->project        = $project;
        $this->view->pmUsers        = $this->loadModel('user')->getPairs('noclosed|nodeleted|pmfirst',  $project->PM);
        $this->view->approve        = $approve;

        $this->display();
    }

    /**
     * 审批发起的审批
     *
     * @param  int    $approveId
     * @param  string $action
     * @param  string $extra
     *
     * @access public
     * @return void
     */
    public function approve($approveId)
    {
        $approve  = $this->approve->getApproveById($approveId);
        $projectID = $approveId->project;
        $browseProjectLink = $this->createLink('project', 'browse', "projectID=$projectID");
        if(!empty($_POST))
        {
            $postResult = $_POST["result"];
            $changes = $this->approve->update($approveId);
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            if($this->post->comment != '' or !empty($changes))
            {
                $actionID = $this->loadModel('action')->create('approve', $approveId, "approve$postResult", $this->post->comment);
                $this->action->logHistory($actionID, $changes);
            }
            $this->executeHooks($approveId);
            die(js::reload('parent.parent'));
        }

        $project  = $this->approve->getById($projectID);
        $this->view->title          = $this->lang->approve->edit . $this->lang->colon . $project->name;;
        $this->view->project        = $project;
        $this->view->approve        = $approve;

        $this->display();
    }

    /**
     * Start approve. 发起审批
     *
     * @param  int    $approveId
     * @access public
     * @return void
     */
    public function start($approveId)
    {
        $approve = $this->approve->getApproveById($approveId);
        $projectId = $approve->project;
        $project   = $this->commonAction($projectID);

        if(!empty($_POST))
        {
            $this->loadModel('action');
            $changes = $this->approve->start($approveId);
            if(dao::isError()) die(js::error(dao::getError()));

            if($this->post->comment != '' or !empty($changes))
            {
                $actionID = $this->action->create('approve', $approveId, 'startedapprove', $this->post->comment);
                $this->action->logHistory($actionID, $changes);
            }
            $this->executeHooks($approveId);
            die(js::reload('parent.parent'));
        }

        $this->view->project    = $project;
        $this->view->approve    = $approve;
        $this->view->title      = $this->view->project->name . $this->lang->colon .$this->lang->approve->start;
        $this->view->users      = $this->loadModel('user')->getPairs('noletter');
        $this->view->actions    = $this->loadModel('action')->getList('approve', $approveId);
        $this->display();
    }

    /**
     * View a approve. 查看审批详情
     *
     * @param  int    $projectID
     * @access public
     * @return void
     */
    public function view($approveId)
    {
        $approve = $this->approve->getApproveById($approveId, true);
        if(!$approve) die(js::error($this->lang->notFound) . js::locate('back'));
        $projectID = $approve->project;
        $project = $this->approve->getById($projectID, true);
        $approve->user = $this->app->user;
        $products = $this->approve->getProducts($project->id);

        /* Set menu. */
        $this->approve->setMenu($this->projects, $project->id);

        /* Load pager. */
        $this->view->title      = $this->lang->approve->view;
        $this->view->project      = $project;
        $this->view->approve      = $approve;
        $this->view->products     = $products;
        $this->view->actions      = $this->loadModel('action')->getList('approve', $approveId);
        $this->view->users        = $this->loadModel('user')->getPairs('noletter');
        $this->view->teamMembers  = $this->approve->getTeamMembers($projectID);
        $this->view->pmUsers      = $this->user->getPairs('noclosed|nodeleted|pmfirst',  $project->PM);
        
        $this->display();
    }

    /**
     * Drop menu page.
     *
     * @param  int    $projectID
     * @param  int    $module
     * @param  int    $method
     * @param  int    $extra
     * @access public
     * @return void
     */
    public function ajaxGetDropMenu($projectID, $module, $method, $extra)
    {
        $this->view->link      = $this->approve->getProjectLink($module, $method, $extra);
        $this->view->projectID = $projectID;
        $this->view->module    = $module;
        $this->view->method    = $method;
        $this->view->extra     = $extra;

        $projects = $this->dao->select('*')->from(TABLE_PROJECT)->where('id')->in(array_keys($this->projects))->orderBy('order desc')->fetchAll();
        $projectPairs = array();
        foreach($projects as $project) $projectPairs[$project->id] = $project->name;
        $this->view->projects = $projects;
        $this->display();
    }

    /**
     * All approve.
     *
     * @param  string $status
     * @param  int    $projectID
     * @param  string $orderBy
     * @param  int    $productID
     * @param  int    $recTotal
     * @param  int    $recPerPage
     * @param  int    $pageID
     * @access public
     * @return void
     */
    public function all($status = 'all', $projectID = 0, $orderBy = 'order_desc', $productID = 0, $type = 'all', $recTotal = 0, $recPerPage = 10, $pageID = 1)
    {
        if($this->projects)
        {
            $project   = $this->commonAction($projectID);
        }
        $this->session->set('projectList', $this->app->getURI(true));

        /* Load pager and get tasks. */
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $this->app->loadLang('my');
        $this->view->title         = $this->lang->approve->allProject;
        $this->view->position[]    = $this->lang->approve->allProject;
        $this->view->approveStats  = $this->approve->getApproveStats($status, $projectID, $productID, $type, 0, 30, $orderBy, $pager);
        $this->view->products      = array(0 => $this->lang->product->select) + $this->loadModel('product')->getPairs();
        $this->view->productID     = $productID;
        $this->view->projectID     = $projectID;
        $this->view->pager         = $pager;
        $this->view->orderBy       = $orderBy;
        $this->view->users         = $this->loadModel('user')->getPairs('noletter');
        $this->view->status        = $status;
        $this->view->type          = $type;
        foreach($this->view->approveStats as $id => $approve) {
            if ($approve->status != 'finish') {
                $this->view->disabledCreate = "disabled";
                break;
            }
        }
        if($project->status=='noconfirm'  )
        {
         $this->view->disabledCreate = "disabled";
        }
        $this->display();
    }

    /**
     * project All approve. 当前项目下的所有审批列表
     *
     * @param  string $status
     * @param  int    $projectID
     * @param  string $orderBy
     * @param  int    $productID
     * @param  int    $recTotal
     * @param  int    $recPerPage
     * @param  int    $pageID
     * @access public
     * @return void
     */
    public function list($status = 'all', $projectID = 0, $orderBy = 'order_desc', $productID = 0, $recTotal = 0, $recPerPage = 10, $pageID = 1) {
        self::all($status, $projectID, $orderBy, $productID, $recTotal, $recPerPage, $pageID);
    }


    /**
     * Export project.
     *
     * @param  string $status
     * @param  int    $productID
     * @param  string $orderBy
     * @access public
     * @return void
     */
    public function export($status, $projectID = 0, $productID, $type, $orderBy)
    {
        if($_POST)
        {
            $approveLang   = $this->lang->approve;
            $approveConfig = $this->config->approve;

            /* Create field lists. */
            $fields = $this->post->exportFields ? $this->post->exportFields : explode(',', $approveConfig->list->exportFields);
            foreach($fields as $key => $fieldName)
            {
                $fieldName = trim($fieldName);
                $fields[$fieldName] = zget($approveLang, $fieldName);
                unset($fields[$key]);
            }

            $approveStats = $this->approve->getApproveStats($status == 'byproduct' ? 'all' : $status, $projectID, $productID, $type, 0, 30, $orderBy, null);
            $users        = $this->loadModel('user')->getPairs('noletter');
            foreach($approveStats as $i => $approve)
            {
                $approve->openedBy      = zget($users, $approve->openedBy);
                $approve->assignedTo    = zget($users, $approve->assignedTo);
                $approve->PO            = zget($users, $approve->PO);
                $approve->LD            = zget($users, $approve->LD);
                $approve->status        = zget($approveLang->statusList, $approve->status);
                $approve->type          = zget($approveLang->typeList, $approve->type);
                $approve->openedDate    = formatTime($approve->openedDate, 'Y-m-d');
                $approve->startDate     = formatTime($approve->startDate, 'Y-m-d');
                $approve->closedDate    = formatTime($approve->closedDate, 'Y-m-d');
                if($this->post->exportType == 'selected')
                {
                    $checkedItem = $this->cookie->checkedItem;
                    if(strpos(",$checkedItem,", ",{$approve->id},") === false) unset($approveStats[$i]);
                }
            }
            if(isset($this->config->bizVersion)) list($fields, $approveStats) = $this->loadModel('workflowfield')->appendDataFromFlow($fields, $approveStats);
            $this->post->set('fields', $fields);
            $this->post->set('rows', $approveStats);
            $this->post->set('kind', 'approve');
            $this->fetch('file', 'export2' . $this->post->fileType, $_POST);
        }

        $this->display();
    }

    /**
     * Doc for compatible.
     *
     * @param  int    $projectID
     * @access public
     * @return void
     */
    public function doc($projectID)
    {
        $this->locate($this->createLink('doc', 'objectLibs', "type=project&objectID=$projectID&from=project"));
    }
}
