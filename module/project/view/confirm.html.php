<?php
/**
 * The start file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang<wwccss@gmail.com>
 * @package     project 
 * @version     $Id: start.html.php 935 2013-01-16 07:49:24Z wwccss@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<div id='mainContent' class='main-content'>
  <div class='main-header'>
    <h2>
      <span class='prefix label-id'><strong><?php echo $project->id;?></strong></span>
      <?php echo isonlybody() ? ("<span title='$project->name'>" . $project->name . '</span>') : html::a($this->createLink('project', 'view', 'project=' . $project->id), $project->name, '_blank');?>
      <?php if(!isonlybody()):?>
      <small><?php echo $lang->arrow . $lang->project->confirm;?></small>
      <?php endif;?>
    </h2>
  </div>
  <form class='load-indicator main-form' method='post' target='hiddenwin'>
    <table class='table table-form'>
      <tbody>
        <?php $this->printExtendFields($project, 'table', 'columns=2');?>
        <tr>
          <th><?php echo $lang->project->teamname;?></th>
          <td colspan='2'><?php echo html::input('team', '', "class='form-control' required");?></td>
        </tr>
   <tr>
          <th><?php echo $lang->project->PO;?></th>
          <td colspan='2'><?php echo html::select('PO', $poUsers, $project->PO, "class='form-control chosen' required");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->project->PM;?></th>
          <td colspan='2'><?php echo html::select('PM', $pmUsers, $project->PM, "class='form-control chosen' required");?></td>
        </tr>
<?php
/**       
	  <tr>
         <th><?php echo $lang->project->QD;?></th>
          <td colspan='2'>
            <?php echo html::select('QD', $qdUsers, $project->QD, "class='form-control chosen'");?>
          </td>
       </tr>
 */
?>
        <tr>
          <th><?php echo $lang->project->RD;?></th>
          <td colspan='2'>
            <?php echo html::select('RD', $rdUsers, $project->RD, "class='form-control chosen' required");?>
          </td>
        </tr>
        <tr>
          <th><?php echo $lang->comment;?></th>
          <td colspan='2'><?php echo html::textarea('comment', '', "rows='6' class='form-control kindeditor' hidefocus='true' required");?></td>
        </tr>
        <tr>
          <td colspan='3' class='text-center form-actions'><?php echo html::submitButton($lang->project->confirm) . ' ' .  html::linkButton($lang->goback, $this->session->taskList, 'self', '', 'btn btn-wide'); ?></td>
        </tr>
      </tbody>
    </table>
  </form>
  <hr class='small' />
  <div class='main'>
    <?php include '../../common/view/action.html.php';?>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
