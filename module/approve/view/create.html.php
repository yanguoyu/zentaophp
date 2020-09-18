<?php
/**
 * The create view of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: create.html.php 4728 2013-05-03 06:14:34Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php if(isset($tips)):?>
<?php $defaultURL = $this-> createLink('project', 'task', 'projectID=' . $projectID);?>
<?php include '../../common/view/header.lite.html.php';?>
<body>
  <div class='modal-dialog mw-500px' id='tipsModal'>
    <div class='modal-header'>
      <a href='<?php echo $defaultURL;?>' class='close'><i class="icon icon-close"></i></a>
      <h4 class='modal-title' id='myModalLabel'><?php echo $lang->approve->tips;?></h4>
    </div>
    <div class='modal-body'>
    <?php echo $tips;?>
    </div>
  </div>
</body>
</html>
<?php exit;?>
<?php endif;?>

<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::import($jsRoot . 'misc/date.js');?>
<?php js::set('weekend', $config->approve->weekend);?>
<?php js::set('holders', $lang->approve->placeholder);?>
<?php js::set('errorSameProducts', $lang->approve->errorSameProducts);?>
<div id='mainContent' class='main-content'>
  <div class='center-block'>
    <div class='main-header'>
      <h2><?php echo $lang->approve->create;?></h2>
    </div>
    <form class='form-indicator main-form form-ajax' method='post' target='hiddenwin' id='dataform'>
      <table class='table table-form'>
        <tr>
          <th class='w-120px'><?php echo $lang->approve->name;?></th>
          <td class="col-main"><?php echo html::input('name', $project->name, "class='form-control' required disabled");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->type;?></th>
          <td><?php echo html::select('type', $lang->approve->typeList, $type, "class='form-control' disabled");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->dateRange;?></th>
          <td>
            <div class='input-group'>
              <?php echo html::input('begin', (isset($plan) && !empty($plan->begin) ? $plan->begin : date('Y-m-d')), "class='form-control form-date' onchange='computeWorkDays()' placeholder='" . $lang->approve->begin . "' required");?>
              <span class='input-group-addon'><?php echo $lang->approve->to;?></span>
              <?php echo html::input('end', (isset($plan) && !empty($plan->end) ? $plan->end : ''), "class='form-control form-date' onchange='computeWorkDays()' placeholder='" . $lang->approve->end . "' required");?>
            </div>
          </td>
          <td colspan='2'><?php echo html::radio('delta', $lang->approve->endList , '', "onclick='computeEndDate(this.value)'");?></td>
        </tr>
        <?php $this->printExtendFields('', 'table');?>
        <tr>
          <th><?php echo $lang->approve->projectManager;?></th>
          <td colspan='1'><?php echo html::select('PM', $pmUsers, $project->PM, "class='form-control chosen' disabled");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->productManager;?></th>
          <td colspan='1'><?php echo html::select('PO', $pmUsers, $project->PO, "class='form-control chosen' required");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->leader;?></th>
          <td colspan='1'><?php echo html::select('LD', $pmUsers, '', "class='form-control chosen'");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->desc;?></th>
          <td colspan='3'>
            <?php echo $this->fetch('user', 'ajaxPrintTemplates', 'type=approve&link=desc');?>
            <?php echo html::textarea('desc', '', "rows='6' class='form-control kindeditor' hidefocus='true' required");?>
          </td>
        </tr>
        <tr>
          <td colspan='4' class='text-center form-actions'>
            <?php echo html::submitButton($lang->approve->save, "name='save'");?>
            <?php echo html::submitButton($lang->approve->startAction, "name='startAction'");?>
            <?php echo html::backButton();?>
            <?php if($isSprint) echo html::hidden('type', 'sprint');?>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<div class='modal fade modal-scroll-inside' id='copyProjectModal'>
  <div class='modal-dialog mw-900px'>
    <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal'><i class="icon icon-close"></i></button>
      <h4 class='modal-title' id='myModalLabel'><?php echo $lang->approve->copyTitle;?></h4>
    </div>
    <div class='modal-body'>
      <?php if(count($projects) == 1):?>
      <div class='alert with-icon'>
        <i class='icon-exclamation-sign'></i>
        <div class='content'><?php echo $lang->approve->copyNoProject;?></div>
      </div>
      <?php else:?>
      <div id='copyProjects' class='row'>
      <?php foreach ($projects as $id => $name):?>
      <?php if(empty($id)):?>
      <?php if($copyProjectID != 0):?>
      <div class='col-md-4 col-sm-6'><a href='javascript:;' data-id='' class='cancel'><?php echo html::icon($lang->icons['cancel']) . ' ' . $lang->approve->cancelCopy;?></a></div>
      <?php endif;?>
      <?php else: ?>
      <div class='col-md-4 col-sm-6'><a href='javascript:;' data-id='<?php echo $id;?>' class='nobr <?php echo ($copyProjectID == $id) ? ' active' : '';?>'><?php echo html::icon($lang->icons['project'], 'text-muted') . ' ' . $name;?></a></div>
      <?php endif; ?>
      <?php endforeach;?>
      </div>
      <?php endif;?>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
