<?php
/**
 * The html template file of all method of approve module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     approve
 * @version     $Id: index.html.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/sortable.html.php';?>
<div id='mainMenu' class='clearfix'>
  <div class='btn-toolbar pull-left'>
    <?php foreach($lang->approve->featureBar['all'] as $key => $label):?>
    <?php echo html::a(inlink($curModule ?: "all", "status=$key&projectID=$projectID&orderBy=$orderBy&productID=$productID"), "<span class='text'>{$label}</span>", '', "class='btn btn-link' id='{$key}Tab'");?>
    <?php endforeach;?>
    <?php if($projectID == 0):?>
      <div class='input-control space w-180px'>
        <?php echo html::select('product', $products, $productID, "class='chosen form-control' onchange='groupBy(this.value, \"$type\", $projectID, \"$status\")'");?>
      </div>
      <div class='input-control space w-180px'>
        <?php echo html::select('type', $lang->approve->typeSelectList, $type, "class='chosen form-control' onchange='groupBy($productID, this.value, $projectID, \"$status\")'");?>
      </div>
    <?php endif;?>
  </div>
  <div class='btn-toolbar pull-right'>
    <?php common::printLink('approve', 'export', "status=$status&projectID=$projectID&productID=$productID&type=$type&orderBy=$orderBy", "<i class='icon-export muted'> </i>" . $lang->export, '', "class='btn btn-link export'")?>
    <?php if($projectID != 0):?>
      <?php common::printLink('approve', 'create', "projectId=$projectID", "<i class='icon-plus'></i> " . $lang->approve->create, '', "class='btn btn-primary' $disabledCreate")?>
    <?php endif;?>
  </div>
</div>
<div id='mainContent'>
  <?php $canOrder = (common::hasPriv('approve', 'updateOrder') and strpos($orderBy, 'order') !== false)?>
  <form class='main-table' id='projectsForm' method='post' data-ride='table'>
    <table class='table has-sort-head table-fixed' id='projectList'>
      <?php $vars = "status=$status&projectID=$projectID&orderBy=%s&productID=$productID&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}&pageID={$pager->pageID}";?>
      <thead>
        <tr>
          <th class='c-id'>
            <div class="checkbox-primary check-all" title="<?php echo $lang->selectAll?>">
              <label></label>
            </div>
            <?php common::printOrderLink('id', $orderBy, $vars, $lang->idAB);?>
          </th>
          <th class='w-420px'><?php common::printOrderLink('name', $orderBy, $vars, $lang->approve->name);?></th>
          <th class='w-420px text-center'><?php common::printOrderLink('productName', $orderBy, $vars, $lang->approve->productName);?></th>
          <th><?php common::printOrderLink('type', $orderBy, $vars, $lang->approve->type);?></th>
          <th><?php common::printOrderLink('openedDate', $orderBy, $vars, $lang->approve->openedDate);?></th>
          <th><?php common::printOrderLink('startDate', $orderBy, $vars, $lang->approve->startDate);?></th>
          <th><?php common::printOrderLink('closedDate', $orderBy, $vars, $lang->approve->closedDate);?></th>
          <th><?php common::printOrderLink('openedBy', $orderBy, $vars, $lang->approve->openedBy);?></th>
          <th><?php common::printOrderLink('PO', $orderBy, $vars, $lang->approve->productManager);?></th>
          <th><?php common::printOrderLink('LD', $orderBy, $vars, $lang->approve->LD);?></th>
          <th class='w-60px'><?php common::printOrderLink('status', $orderBy, $vars, $lang->approve->status);?></th>
          <th><?php common::printOrderLink('assignedTo', $orderBy, $vars, $lang->approve->assignedTo);?></th>
          <th class='w-130px'><?php echo $lang->approve->operator?></th>
        </tr>
      </thead>
      <?php $canBatchEdit = common::hasPriv('project', 'batchEdit'); ?>
      <tbody class='sortable' id='projectTableList'>
        <?php foreach($approveStats as $approve):?>
        <tr data-id='<?php echo $approve->id ?>' data-order='<?php echo $approve->order ?>'>
          <td class='c-id'>
            <?php if($canBatchEdit):?>
            <div class="checkbox-primary">
              <input type='checkbox' name='projectIDList[<?php echo $approve->id;?>]' value='<?php echo $approve->id;?>' />
              <label></label>
            </div>
            <?php endif;?>
            <?php printf('%03d', $approve->id);?>
          </td>
          <td class='text-left' title='<?php echo $approve->name?>'>
            <?php
            echo html::a($this->createLink('project', 'view', 'project=' . $approve->project), $approve->projectName);
            ?>
          </td>
          <td class='text-center'><?php echo $approve->productName;?></td>
          <td class='w-110px'><?php echo $lang->approve->typeList[$approve->type];?></td>
          <td><?php echo formatTime($approve->openedDate, 'Y-m-d');?></td>
          <td><?php echo formatTime($approve->startDate, 'Y-m-d');?></td>
          <td><?php echo formatTime($approve->closedDate, 'Y-m-d');?></td>
          <td><?php echo zget($users, $approve->openedBy);?></td>
          <td><?php echo zget($users, $approve->PO);?></td>
          <td><?php echo zget($users, $approve->LD);?></td>
          <?php $projectStatus = $this->processStatus('approve', $approve);?>
          <td class='c-status' title='<?php echo $projectStatus;?>'>
            <span class="status-project status-<?php echo $approve->status?>"><?php echo $projectStatus;?></span>
          </td>
          <td><?php echo zget($users, $approve->assignedTo);?></td>
          <?php if($canOrder):?>
          <td class='datatable-cell c-actions'>
            <?php common::printIcon('approve', 'view',  "id=$approve->id", $approve, 'list', 'eye', '', ''); ?>
            <?php common::printIcon('approve', 'start',  "id=$approve->id", $approve, 'list', 'play', '', 'iframe', true, '', $lang->startAction); ?>
            <?php common::printIcon('approve', 'edit',  "id=$approve->id", $approve, 'list', '', '', ''); ?>
            <?php common::printIcon('approve', 'approve',  "id=$approve->id", $approve, 'list', 'checked', '', 'iframe', true, '', $lang->approveCommon); ?>
          </td>
          <?php endif;?>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <?php if($approveStats):?>
    <div class='table-footer'>
      <?php if($canBatchEdit):?>
      <div class="checkbox-primary check-all"><label><?php echo $lang->selectAll?></label></div>
      <div class="table-actions btn-toolbar"><?php echo html::submitButton($lang->approve->batchEdit, '', 'btn');?></div>
      <?php endif;?>
      <?php if(!$canOrder and common::hasPriv('project', 'updateOrder')) echo html::a(inlink('all', "status=$status&projectID=$projectID&order=order_desc&productID=$productID&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}&pageID={$pager->pageID}"), $lang->approve->updateOrder, '', "class='btn'");?>
      <?php $pager->show('right', 'pagerjs');?>
    </div>
    <?php endif;?>
  </form>
</div>
<script>$("#<?php echo $status;?>Tab").addClass('btn-active-text');</script>
<?php js::set('orderBy', $orderBy)?>
<?php include '../../common/view/footer.html.php';?>
