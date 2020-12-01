<?php
/**
 * The task block view file of block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php if(empty($approveStats)): ?>
<div class='empty-tip'><?php echo $lang->block->emptyTip;?></div>
<?php else:?>
<style>
.block-tasks .c-id {width: 55px;}
.block-tasks .c-pri {width: 45px;text-align: center;}
.block-tasks .c-estimate {width: 60px;}
.block-tasks .c-deadline {width: 95px;}
.block-tasks .c-status {width: 80px;}
.block-tasks.block-sm .c-status {text-align: center;}
</style>
<div class='panel-body has-table scrollbar-hover'>
  <table class='table table-borderless table-hover table-fixed table-fixed-head tablesorter block-tasks <?php if(!$longBlock) echo 'block-sm';?>'>
    <thead>
      <tr>
        <th class='c-id'><?php echo $lang->idAB;?></th>
        <th class='c-name'> <?php echo $lang->approve->name;?></th>
        <th class='c-status text-center'><?php echo $lang->statusAB;?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($approveStats as $approve):?>
      <?php
      $appid    = isset($_GET['entry']) ? "class='app-btn' data-id='{$this->get->entry}'" : '';
      $viewLink = $this->createLink('approve', 'view', "approveId={$approve->id}&projectId={$approve->project}");
      ?>
      <tr data-url='<?php echo empty($sso) ? $viewLink : $sso . $sign . 'referer=' . base64_encode($viewLink); ?>' <?php echo $appid?>>
        <td class='c-id-xs'><?php echo sprintf('%03d', $approve->id);?></td>
        <td class='c-name' style='color: <?php echo $approve->color?>' title='<?php echo $approve->projectName?>'><?php echo $approve->projectName?></td>
        <?php $status = $this->processStatus('task', $task);?>
        <td class='c-status' title='<?php echo $approve->status;?>'>
          <span class="status-task status-<?php echo $lang->approve->statusList[$approve->status]?>">
            <?php echo $lang->approve->statusList[$approve->status];?>
          </span>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
<?php endif;?>
