<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<div id='mainContent' class='main-row'>
  <div class='side-col col-lg'>
    <?php include 'blockreportlist.html.php';?>
    <div class='panel panel-body' style='padding: 10px 6px'>
      <div class='text proversion'>
        <strong class='text-danger small text-latin'>PRO</strong> &nbsp;<span class='text-important'><?php echo (isset($config->isINT) and $config->isINT) ? $lang->report->proVersionEn : $lang->report->proVersion; ?></span>
      </div>
    </div>
  </div>
  <div class='main-col'>
    <div class='cell'>
      <form method='post'>
        <div class="row" id='conditions'>
          <div class='col-sm-2'>
            <div class='input-group'>
              <span class='input-group-addon'><?php echo $lang->report->dept;?></span>
              <?php echo html::select('dept', $depts, $dept, "class='form-control chosen' onchange='changeParams(this)'");?>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class='input-group input-group-sm'>
              <span class='input-group-addon'><?php echo $lang->report->beginAndEnd;?></span>
              <div class='datepicker-wrapper datepicker-date'><?php echo html::input('begin', $begin, "class='form-control' style='padding-right:10px' onchange='changeParams(this)'");?></div>
              <span class='input-group-addon fix-border'><?php echo $lang->report->to;?></span>
              <div class='datepicker-wrapper datepicker-date'><?php echo html::input('end', $end, "class='form-control' style='padding-right:10px' onchange='changeParams(this)'");?></div>
            </div>
          </div>
          <div class='col-sm-4'>
            <div class="row">
              <div class="col-sm-3">
                <?php echo html::submitButton($lang->report->query, '', 'btn btn-primary btn-block');?>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <?php if(empty($workload)):?>
    <div class="cell">
      <div class="table-empty-tip">
        <p><span class="text-muted"><?php echo $lang->error->noData;?></span></p>
      </div>
    </div>
    <?php else:?>
    <div class='cell'>
      <div class='panel'>
        <div class="panel-heading">
          <!-- <div class="panel-title"><?php echo json_encode($workload);?></div> -->
          <div class="panel-title"><?php echo $title;?></div>
          <nav class="panel-actions btn-toolbar"></nav>
        </div>
        <div data-ride='table'>
          <table class='table table-condensed table-striped table-bordered table-fixed no-margin' id='workload'>
            <thead>
              <tr class='colhead text-center'>
                <th class="w-100px"><?php echo $lang->report->user;?></th>
                <th><?php echo $lang->report->project;?></th>
                <th class="w-100px"><?php echo $lang->report->upReportHour;?></th>
                <th class="w-100px"><?php echo $lang->report->manhourTotal;?></th>
              </tr>
            </thead>
            <tbody>
              <?php $color = false;?>
                <?php foreach($workload as $account => $load):?>
                <?php if(!isset($users[$account])) continue;?>
                <tr class="text-center">
                  <td rowspan="<?php echo count($load['projects']);?>"><?php echo $users[$account];?></td>
                  <?php $id = 1;?>
                  <?php foreach($load['projects'] as $project => $info):?>
                  <?php $class = $color ? 'rowcolor' : '';?>
                  <?php if($id != 1) echo '<tr class="text-center">';?>
                  <td title='<?php echo $info['projectName']?>' class="<?php echo $class;?> text-left">
                    <?php if($project == 'no_project'):?>
                      <?php echo $info['projectName'];?>
                    <?php endif;?>
                    <?php if($project != 'no_project'):?>
                      <?php echo html::a($this->createLink('project', 'view', "projectID={$project}"), $info['projectName']);?>
                    <?php endif;?>
                  </td>
                  <td class="<?php echo $class;?>"><?php echo $info['consumed'];?></td>
                  <?php if($id == 1):?>
                  <td rowspan="<?php echo count($load['projects']);?>"><?php echo $load['totalConsumed'];?></td>
                  <?php endif;?>
                  <?php if($id != 1) echo '</tr>'; $id ++;?>
                  <?php $color = !$color;?>
                  <?php endforeach;?>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php endif;?>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
