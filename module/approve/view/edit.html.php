<?php
/**
 * The edit view of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: edit.html.php 4728 2013-05-03 06:14:34Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::import($jsRoot . 'misc/date.js');?>
<div id='mainContent' class='main-content'>
  <div class='center-block'>
    <div class='main-header'>
      <h2>
        <span class='prefix label-id'><strong><?php echo $project->id;?></strong></span>
        <?php echo html::a($this->createLink('project', 'view', 'project=' . $project->id), $project->name, '_blank');?>
        <small><?php echo $lang->arrow . ' ' . $lang->approve->edit;?></small>
      </h2>
    </div>
    <form class='load-indicator main-form form-ajax' method='post' target='hiddenwin' id='dataform'>
      <table class='table table-form'>
        <tr>
          <th class='w-120px'><?php echo $lang->approve->name;?></th>
          <td><?php echo html::input('name', $project->name, "class='form-control' required disabled");?></td><td></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->type;?></th>
          <td><?php echo html::select('type', $lang->approve->typeList, $approve->type, "class='form-control' disabled");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->dateRange;?></th>
          <td>
            <div class='input-group'>
              <?php echo html::input('begin', $approve->begin, "class='form-control form-date' onchange='computeWorkDays()' required placeholder='" . $lang->approve->begin . "'");?>
              <span class='input-group-addon fix-border'><?php echo $lang->approve->to;?></span>
              <?php echo html::input('end', $approve->end, "class='form-control form-date' onchange='computeWorkDays()' required placeholder='" . $lang->approve->end . "'");?>
              <div class='input-group-btn'>
                <button type='button' class='btn dropdown-toggle' data-toggle='dropdown'><?php echo $lang->approve->byPeriod;?> <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <?php foreach ($lang->approve->endList as $key => $name):?>
                  <li><a href='javascript:computeEndDate("<?php echo $key;?>")'><?php echo $name;?></a></li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->projectManager;?></th>
          <td colspan='1'><?php echo html::select('PM', $pmUsers, $project->PM, "class='form-control chosen' required");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->productManager;?></th>
          <td colspan='1'><?php echo html::select('PO', $pmUsers, $approve->PO, "class='form-control chosen'");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->leader;?></th>
          <td colspan='1'><?php echo html::select('LD', $pmUsers, $approve->LD, "class='form-control chosen'");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->approve->desc;?></th>
          <td colspan='3'>
            <?php echo $this->fetch('user', 'ajaxPrintTemplates', 'type=approve&link=desc');?>
            <?php echo html::textarea('desc', htmlspecialchars($approve->desc), "rows='6' class='form-control kindeditor' hidefocus='true'");?>
          </td>
        </tr>
        <tr>
          <td colspan='4' class='text-center form-actions'>
            <?php echo html::submitButton($lang->approve->save, "name='save'") . ' ' . html::submitButton($lang->approve->startAction, "name='startAction'") . ' ' . html::backButton();?>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php js::set('weekend', $config->approve->weekend);?>
<?php js::set('errorSameProducts', $lang->approve->errorSameProducts);?>
<?php include '../../common/view/footer.html.php';?>
