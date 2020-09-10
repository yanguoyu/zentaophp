<?php
/**
 * The project module zh-tw file of ZenTaoMS.
 *
 * @copyright   Copyright 2009-2015 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: zh-tw.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* 欄位列表。*/
$lang->approve->common        = $lang->approveCommon . '視圖';
$lang->approve->allProjects   = '所有' . $lang->approveCommon;
$lang->approve->id            = $lang->approveCommon . '編號';
$lang->approve->type          = $lang->approveCommon . '類型';
$lang->approve->name          = $lang->approveCommon . '名稱';
$lang->approve->code          = $lang->approveCommon . '代號';
$lang->approve->statge        = '階段';
$lang->approve->pri           = '優先順序';
$lang->approve->openedBy      = '由誰創建';
$lang->approve->openedDate    = '創建日期';
$lang->approve->closedBy      = '由誰關閉';
$lang->approve->closedDate    = '關閉日期';
$lang->approve->canceledBy    = '由誰取消';
$lang->approve->canceledDate  = '取消日期';
$lang->approve->begin         = '開始日期';
$lang->approve->end           = '結束日期';
$lang->approve->dateRange     = '起始日期';
$lang->approve->to            = '至';
$lang->approve->days          = '可用工作日';
$lang->approve->day           = '天';
$lang->approve->workHour      = '工時';
$lang->approve->totalHours    = '可用工時';
$lang->approve->totalDays     = '可用工日';
$lang->approve->status        = $lang->approveCommon . '狀態';
$lang->approve->subStatus     = '子狀態';
$lang->approve->desc          = $lang->approveCommon . '描述';
$lang->approve->owner         = '負責人';
$lang->approve->PO            = $lang->productCommon . '負責人';
$lang->approve->PM            = $lang->approveCommon . '負責人';
$lang->approve->QD            = '測試負責人';
$lang->approve->RD            = '發佈負責人';
$lang->approve->qa            = '測試';
$lang->approve->release       = '發佈';
$lang->approve->acl           = '訪問控制';
$lang->approve->teamname      = '團隊名稱';
$lang->approve->order         = $lang->approveCommon . '排序';
$lang->approve->orderAB       = '排序';
$lang->approve->products      = '相關' . $lang->productCommon;
$lang->approve->whitelist     = '分組白名單';
$lang->approve->totalEstimate = '預計';
$lang->approve->totalConsumed = '消耗';
$lang->approve->totalLeft     = '剩餘';
$lang->approve->progress      = '進度';
$lang->approve->hours         = '預計 %s 消耗 %s 剩餘 %s';
$lang->approve->viewBug       = '查看bug';
$lang->approve->noProduct     = "無{$lang->productCommon}{$lang->approveCommon}";
$lang->approve->createStory   = "添加{$lang->storyCommon}";
$lang->approve->all           = '所有';
$lang->approve->undone        = '未完成';
$lang->approve->unclosed      = '未關閉';
$lang->approve->typeDesc      = "運維{$lang->approveCommon}沒有{$lang->storyCommon}、bug、版本、測試功能，同時禁用燃盡圖。";
$lang->approve->mine          = '我負責：';
$lang->approve->other         = '其他：';
$lang->approve->deleted       = '已刪除';
$lang->approve->delayed       = '已延期';
$lang->approve->product       = $lang->approve->products;
$lang->approve->readjustTime  = "調整{$lang->approveCommon}起止時間";
$lang->approve->readjustTask  = '順延任務的起止時間';
$lang->approve->effort        = '日誌';
$lang->approve->relatedMember = '相關成員';
$lang->approve->watermark     = '由禪道導出';
$lang->approve->viewByUser    = '按用戶查看';

$lang->approve->start    = "開始";
$lang->approve->activate = "激活";
$lang->approve->putoff   = "延期";
$lang->approve->suspend  = "掛起";
$lang->approve->close    = "關閉";
$lang->approve->export   = "導出";

$lang->approve->typeList['sprint']    = "短期$lang->approveCommon";
$lang->approve->typeList['waterfall'] = "長期$lang->approveCommon";
$lang->approve->typeList['ops']       = "運維$lang->approveCommon";

$lang->approve->endList[7]   = '一星期';
$lang->approve->endList[14]  = '兩星期';
$lang->approve->endList[31]  = '一個月';
$lang->approve->endList[62]  = '兩個月';
$lang->approve->endList[93]  = '三個月';
$lang->approve->endList[186] = '半年';
$lang->approve->endList[365] = '一年';

$lang->team = new stdclass();
$lang->team->account    = '用戶';
$lang->team->role       = '角色';
$lang->team->join       = '加盟日';
$lang->team->hours      = '可用工時/天';
$lang->team->days       = '可用工日';
$lang->team->totalHours = '總計';

$lang->team->limited            = '受限用戶';
$lang->team->limitedList['yes'] = '是';
$lang->team->limitedList['no']  = '否';

$lang->approve->basicInfo = '基本信息';
$lang->approve->otherInfo = '其他信息';

/* 欄位取值列表。*/
$lang->approve->statusList['wait']      = '未開始';
$lang->approve->statusList['doing']     = '進行中';
$lang->approve->statusList['suspended'] = '已掛起';
$lang->approve->statusList['closed']    = '已關閉';

$lang->approve->aclList['open']    = "預設設置(有{$lang->approveCommon}視圖權限，即可訪問)";
$lang->approve->aclList['private'] = "私有{$lang->approveCommon}(只有{$lang->approveCommon}團隊成員才能訪問)";
$lang->approve->aclList['custom']  = "自定義白名單(團隊成員和白名單的成員可以訪問)";

/* 方法列表。*/
$lang->approve->index             = "{$lang->approveCommon}主頁";
$lang->approve->task              = '任務列表';
$lang->approve->groupTask         = '分組瀏覽任務';
$lang->approve->story             = "{$lang->storyCommon}列表";
$lang->approve->bug               = 'Bug列表';
$lang->approve->dynamic           = '動態';
$lang->approve->latestDynamic     = '最新動態';
$lang->approve->build             = '所有版本';
$lang->approve->testtask          = '測試單';
$lang->approve->burn              = '燃盡圖';
$lang->approve->computeBurn       = '更新燃盡圖';
$lang->approve->burnData          = '燃盡圖數據';
$lang->approve->fixFirst          = '修改首天工時';
$lang->approve->team              = '團隊成員';
$lang->approve->doc               = '文檔列表';
$lang->approve->doclib            = '文檔庫列表';
$lang->approve->manageProducts    = '關聯' . $lang->productCommon;
$lang->approve->linkStory         = "關聯{$lang->storyCommon}";
$lang->approve->linkStoryByPlan   = '按照計劃關聯';
$lang->approve->linkPlan          = '關聯計劃';
$lang->approve->unlinkStoryTasks  = "未關聯{$lang->storyCommon}任務";
$lang->approve->linkedProducts    = '已關聯';
$lang->approve->unlinkedProducts  = '未關聯';
$lang->approve->view              = "{$lang->approveCommon}概況";
$lang->approve->startAction       = "開始{$lang->approveCommon}";
$lang->approve->activateAction    = "計劃{$lang->approveCommon}";
$lang->approve->delayAction       = "延期{$lang->approveCommon}";
$lang->approve->suspendAction     = "掛起{$lang->approveCommon}";
$lang->approve->closeAction       = "關閉{$lang->approveCommon}";
$lang->approve->testtaskAction    = "{$lang->approveCommon}測試單";
$lang->approve->teamAction        = "{$lang->approveCommon}團隊";
$lang->approve->kanbanAction      = "{$lang->approveCommon}看板";
$lang->approve->printKanbanAction = "打印看板";
$lang->approve->treeAction        = "{$lang->approveCommon}樹狀圖";
$lang->approve->exportAction      = "導出{$lang->approveCommon}";
$lang->approve->computeBurnAction = "計算燃盡圖";
$lang->approve->create            = "添加{$lang->approveCommon}";
$lang->approve->copy              = "複製{$lang->approveCommon}";
$lang->approve->delete            = "刪除{$lang->approveCommon}";
$lang->approve->browse            = "瀏覽{$lang->approveCommon}";
$lang->approve->edit              = "編輯{$lang->approveCommon}";
$lang->approve->batchEdit         = "批量編輯";
$lang->approve->manageMembers     = '團隊管理';
$lang->approve->unlinkMember      = '移除成員';
$lang->approve->unlinkStory       = "移除{$lang->storyCommon}";
$lang->approve->unlinkStoryAB     = "移除{$lang->storyCommon}";
$lang->approve->batchUnlinkStory  = "批量移除{$lang->storyCommon}";
$lang->approve->importTask        = '轉入任務';
$lang->approve->importPlanStories = "按計劃關聯{$lang->storyCommon}";
$lang->approve->importBug         = '導入Bug';
$lang->approve->updateOrder       = "{$lang->approveCommon}排序";
$lang->approve->tree              = '樹狀圖';
$lang->approve->treeTask          = '只看任務';
$lang->approve->treeStory         = "只看{$lang->storyCommon}";
$lang->approve->treeOnlyTask      = '樹狀圖只看任務';
$lang->approve->treeOnlyStory     = "樹狀圖只看{$lang->storyCommon}";
$lang->approve->storyKanban       = "{$lang->storyCommon}看板";
$lang->approve->storySort         = "{$lang->storyCommon}排序";
$lang->approve->importPlanStory   = "創建" . $lang->approveCommon . "成功！\n是否導入計劃關聯的相關{$lang->storyCommon}？";
$lang->approve->iteration         = '版本迭代';
$lang->approve->iterationInfo     = '迭代%s次';
$lang->approve->viewAll           = '查看所有';

/* 分組瀏覽。*/
$lang->approve->allTasks     = '所有';
$lang->approve->assignedToMe = '指派給我';
$lang->approve->myInvolved   = '由我參與';

$lang->approve->statusSelects['']             = '更多';
$lang->approve->statusSelects['wait']         = '未開始';
$lang->approve->statusSelects['doing']        = '進行中';
$lang->approve->statusSelects['undone']       = '未完成';
$lang->approve->statusSelects['finishedbyme'] = '我完成';
$lang->approve->statusSelects['done']         = '已完成';
$lang->approve->statusSelects['closed']       = '已關閉';
$lang->approve->statusSelects['cancel']       = '已取消';

$lang->approve->groups['']           = '分組查看';
$lang->approve->groups['story']      = "{$lang->storyCommon}分組";
$lang->approve->groups['status']     = '狀態分組';
$lang->approve->groups['pri']        = '優先順序分組';
$lang->approve->groups['assignedTo'] = '指派給分組';
$lang->approve->groups['finishedBy'] = '完成者分組';
$lang->approve->groups['closedBy']   = '關閉者分組';
$lang->approve->groups['type']       = '類型分組';

$lang->approve->groupFilter['story']['all']         = '所有';
$lang->approve->groupFilter['story']['linked']      = "已關聯{$lang->storyCommon}的任務";
$lang->approve->groupFilter['pri']['all']           = '所有';
$lang->approve->groupFilter['pri']['noset']         = '未設置';
$lang->approve->groupFilter['assignedTo']['undone'] = '未完成';
$lang->approve->groupFilter['assignedTo']['all']    = '所有';

$lang->approve->byQuery = '搜索';

/* 查詢條件列表。*/
$lang->approve->allProject      = "所有{$lang->approveCommon}";
$lang->approve->aboveAllProduct = "以上所有{$lang->productCommon}";
$lang->approve->aboveAllProject = "以上所有{$lang->approveCommon}";

/* 頁面提示。*/
$lang->approve->linkStoryByPlanTips = "此操作會將所選計划下面的{$lang->storyCommon}全部關聯到此{$lang->approveCommon}中";
$lang->approve->selectProject       = "請選擇{$lang->approveCommon}";
$lang->approve->beginAndEnd         = '起止時間';
$lang->approve->begin               = '開始日期';
$lang->approve->end                 = '截止日期';
$lang->approve->lblStats            = '工時統計';
$lang->approve->stats               = '可用工時 <strong>%s</strong> 工時，總共預計 <strong>%s</strong> 工時，已經消耗 <strong>%s</strong> 工時，預計剩餘 <strong>%s</strong> 工時';
$lang->approve->taskSummary         = "本頁共 <strong>%s</strong> 個任務，未開始 <strong>%s</strong>，進行中 <strong>%s</strong>，總預計 <strong>%s</strong> 工時，已消耗 <strong>%s</strong> 工時，剩餘 <strong>%s</strong> 工時。";
$lang->approve->checkedSummary      = "選中 <strong>%total%</strong> 個任務，未開始 <strong>%wait%</strong>，進行中 <strong>%doing%</strong>，總預計 <strong>%estimate%</strong> 工時，已消耗 <strong>%consumed%</strong> 工時，剩餘 <strong>%left%</strong> 工時。";
$lang->approve->memberHoursAB       = "<div>%s有 <strong>%s</strong> 工時</div>";
$lang->approve->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s可用工時</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">總任務</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">進行中</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">未開始</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->approve->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">總預計</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">已消耗</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">剩餘</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->groupSummaryAB      = "<div>總任務 <strong>%s : </strong><span class='text-muted'>未開始</span> %s &nbsp; <span class='text-muted'>進行中</span> %s</div><div>總預計 <strong>%s : </strong><span class='text-muted'>已消耗</span> %s &nbsp; <span class='text-muted'>剩餘</span> %s</div>";
$lang->approve->wbs                 = "分解任務";
$lang->approve->batchWBS            = "批量分解";
$lang->approve->howToUpdateBurn     = "<a href='https://api.zentao.net/goto.php?item=burndown&lang=zh-tw' target='_blank' title='如何更新燃盡圖？' class='btn btn-link'>幫助 <i class='icon icon-help'></i></a>";
$lang->approve->whyNoStories        = "看起來沒有{$lang->storyCommon}可以關聯。請檢查下{$lang->approveCommon}關聯的{$lang->productCommon}中有沒有{$lang->storyCommon}，而且要確保它們已經審核通過。";
$lang->approve->productStories      = "{$lang->approveCommon}關聯的{$lang->storyCommon}是{$lang->productCommon}{$lang->storyCommon}的子集，並且只有評審通過的{$lang->storyCommon}才能關聯。請<a href='%s'>關聯{$lang->storyCommon}</a>。";
$lang->approve->haveDraft           = "有%s條草稿狀態的{$lang->storyCommon}無法關聯到該{$lang->approveCommon}";
$lang->approve->doneProjects        = '已結束';
$lang->approve->selectDept          = '選擇部門';
$lang->approve->selectDeptTitle     = '選擇一個部門的成員';
$lang->approve->copyTeam            = '複製團隊';
$lang->approve->copyFromTeam        = "複製自{$lang->approveCommon}團隊： <strong>%s</strong>";
$lang->approve->noMatched           = "找不到包含'%s'的$lang->approveCommon";
$lang->approve->copyTitle           = "請選擇一個{$lang->approveCommon}來複制";
$lang->approve->copyTeamTitle       = "選擇一個{$lang->approveCommon}團隊來複制";
$lang->approve->copyNoProject       = "沒有可用的{$lang->approveCommon}來複制";
$lang->approve->copyFromProject     = "複製自{$lang->approveCommon} <strong>%s</strong>";
$lang->approve->cancelCopy          = '取消複製';
$lang->approve->byPeriod            = '按時間段';
$lang->approve->byUser              = '按用戶';
$lang->approve->noApprove           = "暫時沒有{$lang->approveCommon}。";
$lang->approve->noMembers           = '暫時沒有團隊成員。';

/* 交互提示。*/
$lang->approve->confirmDelete         = "您確定刪除{$lang->approveCommon}[%s]嗎？";
$lang->approve->confirmUnlinkMember   = "您確定從該{$lang->approveCommon}中移除該用戶嗎？";
$lang->approve->confirmUnlinkStory    = "您確定從該{$lang->approveCommon}中移除該{$lang->storyCommon}嗎？";
$lang->approve->errorNoLinkedProducts = "該{$lang->approveCommon}沒有關聯的{$lang->productCommon}，系統將轉到{$lang->productCommon}關聯頁面";
$lang->approve->errorSameProducts     = "{$lang->approveCommon}不能關聯多個相同的{$lang->productCommon}。";
$lang->approve->accessDenied          = "您無權訪問該{$lang->approveCommon}！";
$lang->approve->tips                  = '提示';
$lang->approve->afterInfo             = "{$lang->approveCommon}添加成功，您現在可以進行以下操作：";
$lang->approve->setTeam               = '設置團隊';
$lang->approve->linkStory             = "關聯{$lang->storyCommon}";
$lang->approve->createTask            = '創建任務';
$lang->approve->goback                = "返回任務列表";
$lang->approve->noweekend             = '去除周末';
$lang->approve->withweekend           = '顯示周末';
$lang->approve->interval              = '間隔';
$lang->approve->fixFirstWithLeft      = '修改剩餘工時';

$lang->approve->action = new stdclass();
$lang->approve->action->opened  = '$date, 由 <strong>$actor</strong> 創建。$extra' . "\n";
$lang->approve->action->managed = '$date, 由 <strong>$actor</strong> 維護。$extra' . "\n";
$lang->approve->action->extra   = '相關產品為 %s。';

/* 統計。*/
$lang->approve->charts = new stdclass();
$lang->approve->charts->burn = new stdclass();
$lang->approve->charts->burn->graph = new stdclass();
$lang->approve->charts->burn->graph->caption      = "燃盡圖";
$lang->approve->charts->burn->graph->xAxisName    = "日期";
$lang->approve->charts->burn->graph->yAxisName    = "HOUR";
$lang->approve->charts->burn->graph->baseFontSize = 12;
$lang->approve->charts->burn->graph->formatNumber = 0;
$lang->approve->charts->burn->graph->animation    = 0;
$lang->approve->charts->burn->graph->rotateNames  = 1;
$lang->approve->charts->burn->graph->showValues   = 0;
$lang->approve->charts->burn->graph->reference    = '參考';
$lang->approve->charts->burn->graph->actuality    = '實際';

$lang->approve->placeholder = new stdclass();
$lang->approve->placeholder->code      = '團隊內部的簡稱';
$lang->approve->placeholder->totalLeft = "{$lang->approveCommon}開始時的總預計工時";

$lang->approve->selectGroup = new stdclass();
$lang->approve->selectGroup->done = '(已結束)';

$lang->approve->orderList['order_asc']  = "{$lang->storyCommon}排序正序";
$lang->approve->orderList['order_desc'] = "{$lang->storyCommon}排序倒序";
$lang->approve->orderList['pri_asc']    = "{$lang->storyCommon}優先順序正序";
$lang->approve->orderList['pri_desc']   = "{$lang->storyCommon}優先順序倒序";
$lang->approve->orderList['stage_asc']  = "{$lang->storyCommon}階段正序";
$lang->approve->orderList['stage_desc'] = "{$lang->storyCommon}階段倒序";

$lang->approve->kanban        = "看板";
$lang->approve->kanbanSetting = "看板設置";
$lang->approve->resetKanban   = "恢復預設";
$lang->approve->printKanban   = "打印看板";
$lang->approve->bugList       = "Bug列表";

$lang->approve->kanbanHideCols   = '看板隱藏已關閉、已取消列';
$lang->approve->kanbanShowOption = '顯示摺疊信息';
$lang->approve->kanbanColsColor  = '看板列自定義顏色';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = '是否恢復看板預設設置？';
$lang->kanbanSetting->optionList['0'] = '隱藏';
$lang->kanbanSetting->optionList['1'] = '顯示';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = '看板打印';
$lang->printKanban->content = '內容';
$lang->printKanban->print   = '打印';

$lang->printKanban->taskStatus = '狀態';

$lang->printKanban->typeList['all']       = '全部';
$lang->printKanban->typeList['increment'] = '增量';

$lang->approve->featureBar['task']['all']          = $lang->approve->allTasks;
$lang->approve->featureBar['task']['unclosed']     = $lang->approve->unclosed;
$lang->approve->featureBar['task']['assignedtome'] = $lang->approve->assignedToMe;
$lang->approve->featureBar['task']['myinvolved']   = $lang->approve->myInvolved;
$lang->approve->featureBar['task']['delayed']      = '已延期';
$lang->approve->featureBar['task']['needconfirm']  = "{$lang->storyCommon}變更";
$lang->approve->featureBar['task']['status']       = $lang->approve->statusSelects[''];

$lang->approve->featureBar['all']['all']       = $lang->approve->all;
$lang->approve->featureBar['all']['undone']    = $lang->approve->undone;
$lang->approve->featureBar['all']['wait']      = $lang->approve->statusList['wait'];
$lang->approve->featureBar['all']['doing']     = $lang->approve->statusList['doing'];
$lang->approve->featureBar['all']['suspended'] = $lang->approve->statusList['suspended'];
$lang->approve->featureBar['all']['closed']    = $lang->approve->statusList['closed'];

$lang->approve->treeLevel = array();
$lang->approve->treeLevel['all']   = '全部展開';
$lang->approve->treeLevel['root']  = '全部摺疊';
$lang->approve->treeLevel['task']  = '全部顯示';
$lang->approve->treeLevel['story'] = "只看{$lang->storyCommon}";

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->approve->groups['story']);
    unset($lang->approve->featureBar['task']['needconfirm']);
}
