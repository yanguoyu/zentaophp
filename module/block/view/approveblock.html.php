<?php
/**
 * The project block view file of block module of ZenTaoPMS.
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
<div class='empty-tip'><?php common::printLink('project', 'index', '', "<i class='icon-plus'></i> " . $lang->approve->create, '', "class='btn btn-primary'")?></div>
<?php else:?>
<div class="panel-body has-table scrollbar-hover">
  <table class='table table-borderless table-hover table-fixed table-fixed-head tablesorter block-projects tablesorter'>
    <thead>
      <tr class='text-center'>
        <th class='c-name text-left'><?php echo $lang->approve->name;?></th>
        <th><?php echo $lang->approve->type;?></th>
        <th class="c-date"><?php echo $lang->approve->begin;?></th>
        <th class="c-date"><?php echo $lang->approve->end;?></th>
        <th><?php echo $lang->approve->status;?></th>
        <th><?php echo $lang->approve->PO;?></th>
        <th><?php echo $lang->approve->LD;?></th>
      </tr>
    </thead>
    <tbody class="text-center">
     <?php $id = 0; ?>
     <?php foreach($approveStats as $approve):?>
      <?php
      $appid    = isset($_GET['entry']) ? "class='app-btn text-center' data-id='{$this->get->entry}'" : "class='text-center'";
      $viewLink = $this->createLink('project', 'view', 'project=' . $approve->project);
      ?>
      <tr data-url='<?php echo empty($sso) ? $viewLink : $sso . $sign . 'referer=' . base64_encode($viewLink); ?>' <?php echo $appid?>>
        <td class='c-name text-left' title='<?php echo $approve->projectName;?>'>
          <nobr>
            <?php echo html::a($this->createLink('project', 'view', 'project=' . $approve->project), $approve->projectName, '', "title='$approve->projectName'");?>
          </nobr>
        </td>
        <td><?php echo $lang->approve->typeList[$approve->type];?></td>
        <td class="c-date"><?php echo $approve->begin;?></td>
        <td class="c-date"><?php echo $approve->end;?></td>
        <td><?php echo $lang->approve->statusList[$approve->status]?></td>
        <th><?php echo zget($users, $approve->PO);?></th>
        <th><?php echo zget($users, $approve->LD);?></th>
     </tr>
     <?php endforeach;?>
    </tbody>
  </table>
</div>
<?php endif;?>
