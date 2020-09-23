<?php
/**
 * The view method view file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: view.html.php 4594 2013-03-13 06:16:02Z wyd621@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
  <div id='mainContent' class="main-row">
    <div class="col-8 main-col">
      <div class="row">
        <div class="col-sm-12">
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
                    <?php echo html::input('begin', $approve->begin, "class='form-control form-date' disabled onchange='computeWorkDays()' required placeholder='" . $lang->approve->begin . "'");?>
                    <span class='input-group-addon fix-border'><?php echo $lang->approve->to;?></span>
                    <?php echo html::input('end', $approve->end, "class='form-control form-date' disabled onchange='computeWorkDays()' required placeholder='" . $lang->approve->end . "'");?>
                  </div>
                </td>
              </tr>
              <tr>
                <th><?php echo $lang->approve->status;?></th>
                <td><?php echo html::input('status', $lang->approve->statusList[$approve->status], "class='form-control' disabled");?></td>
              </tr>
              <tr>
                <th><?php echo $lang->approve->projectManager;?></th>
                <td colspan='1'><?php echo html::select('PM', $pmUsers, $project->PM, "class='form-control chosen' disabled");?></td>
              </tr>
              <tr>
                <th><?php echo $lang->approve->productManager;?></th>
                <td colspan='1'><?php echo html::select('PO', $pmUsers, $approve->PO, "class='form-control chosen' disabled");?></td>
              </tr>
              <tr>
                <th><?php echo $lang->approve->leader;?></th>
                <td colspan='1'><?php echo html::select('LD', $pmUsers, $approve->LD, "class='form-control chosen' disabled");?></td>
              </tr>
              <tr>
                <th><?php echo $lang->approve->desc;?></th>
                <td colspan='3' class='kindeditor-disabled'>
                  <?php echo html::textarea('desc', $approve->desc, "rows='6' class='form-control kindeditor' hidefocus='true' disabled");?>
                </td>
              </tr>
            </table>
          </form>
        </div>
        <?php $this->printExtendFields($project, 'div', "position=left&inForm=0");?>
        <div class="col-sm-12">
          <?php $blockHistory = true;?>
          <?php $actionFormLink = $this->createLink('action', 'comment', "objectType=approve&objectID=$approve->id");?>
          <?php include '../../common/view/action.html.php';?>
        </div>
      </div>
      <div class='main-actions'>
        <div class="btn-toolbar">
          <?php
          $params = "approveId=$approve->id&projectId=$project->id";
          $browseLink = $this->session->projectList ? $this->session->projectList : inlink('browse', "projectID=$project->id");
          common::printBack($browseLink);
          if(!$approve->deleted)
          {
              echo "<div class='divider'></div>";
              common::printIcon('approve', 'start', "id=$approve->id", $approve, 'button', 'play', '', 'iframe', true, '', $lang->approve->startAction);
              common::printIcon('approve', 'approve', "id=$approve->id", $approve, 'button', 'checked', '', 'iframe', true, '', $lang->approve->approve);
              echo "<div class='divider'></div>";
              common::printIcon('approve', 'edit',  "id=$approve->id", $approve, 'list', '', '', '');
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="mainActions" class='main-actions'>
  <nav class="container"></nav>
<script>
$(function()
{
    var data =
    {
        labels: <?php echo json_encode($chartData['labels'])?>,
        datasets: [
        {
            label: "<?php echo $lang->approve->charts->burn->graph->reference;?>",
            color: "#F1F1F1",
            pointColor: '#D8D8D8',
            pointStrokeColor: '#D8D8D8',
            pointHighlightStroke: '#D8D8D8',
            fillColor: 'transparent',
            pointHighlightFill: '#fff',
            data: <?php echo $chartData['baseLine']?>
        },
        {
            label: "<?php echo $lang->approve->charts->burn->graph->actuality;?>",
            color: "#006AF1",
            pointStrokeColor: '#006AF1',
            pointHighlightStroke: '#006AF1',
            pointColor: '#006AF1',
            fillColor: 'rgba(0,106,241, .07)',
            pointHighlightFill: '#fff',
            data: <?php echo $chartData['burnLine']?>
        }]
    };

    var burnChart = $("#burnCanvas").lineChart(data,
    {
        pointDotStrokeWidth: 2,
        pointDotRadius: 2,
        datasetStrokeWidth: 2,
        datasetFill: true,
        datasetStroke: true,
        scaleShowBeyondLine: false,
        responsive: true,
        bezierCurve: false,
        scaleFontColor: '#838A9D',
        tooltipXPadding: 10,
        tooltipYPadding: 10,
        multiTooltipTitleTemplate: '<%= label %> <?php echo $lang->approve->workHour;?> /h',
        multiTooltipTemplate: "<%if (datasetLabel){%><%=datasetLabel%>: <%}%><%= value %>",
    });
});
</script>
<?php include '../../common/view/footer.html.php';?>
