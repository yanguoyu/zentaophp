<?php
/**
 * The project module zh-cn file of ZenTaoMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: zh-cn.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* 字段列表。*/
$lang->approve->common        = $lang->approveCommon . '视图';
$lang->approve->allProjects   = '所有' . $lang->approveCommon;
$lang->approve->id            = $lang->approveCommon . '编号';
$lang->approve->type          = $lang->approveCommon . '类型';
$lang->approve->name          = '任务名称';
$lang->approve->relatedName   = '关联项目名称';
$lang->approve->productName   = '业务方向';
$lang->approve->code          = $lang->approveCommon . '代号';
$lang->approve->statge        = '阶段';
$lang->approve->pri           = '优先级';
$lang->approve->openedBy      = '由谁创建';
$lang->approve->openedDate    = '发起日期';
$lang->approve->closedBy      = '由谁关闭';
$lang->approve->closedDate    = '关闭日期';
$lang->approve->canceledBy    = '由谁取消';
$lang->approve->canceledDate  = '取消日期';
$lang->approve->begin         = '开始日期';
$lang->approve->end           = '结束日期';
$lang->approve->dateRange     = '起始日期';
$lang->approve->to            = '至';
$lang->approve->days          = '可用工作日';
$lang->approve->day           = '天';
$lang->approve->workHour      = '工时';
$lang->approve->totalHours    = '可用工时';
$lang->approve->totalDays     = '可用工日';
$lang->approve->status        = $lang->approveCommon . '状态';
$lang->approve->subStatus     = '子状态';
$lang->approve->desc          = $lang->approveCommon . '描述';
$lang->approve->owner         = '负责人';
$lang->approve->PO            = '业务负责人';
$lang->approve->PM            = $lang->projectCommon . '负责人';
$lang->approve->LD            = '业务分管领导';
$lang->approve->QD            = '测试负责人';
$lang->approve->RD            = '发布负责人';
$lang->approve->qa            = '测试';
$lang->approve->release       = '发布';
$lang->approve->acl           = '访问控制';
$lang->approve->teamname      = '团队名称';
$lang->approve->order         = $lang->approveCommon . '排序';
$lang->approve->orderAB       = '排序';
$lang->approve->products      = '相关' . $lang->productCommon;
$lang->approve->whitelist     = '分组白名单';
$lang->approve->totalEstimate = '预计';
$lang->approve->totalConsumed = '消耗';
$lang->approve->totalLeft     = '剩余';
$lang->approve->progress      = '进度';
$lang->approve->hours         = '预计 %s 消耗 %s 剩余 %s';
$lang->approve->viewBug       = '查看bug';
$lang->approve->noProduct     = "无{$lang->productCommon}{$lang->approveCommon}";
$lang->approve->createStory   = "添加{$lang->storyCommon}";
$lang->approve->all           = '所有';
$lang->approve->noconfirm     = '待沟通';
$lang->approve->willEnd       = '预计完成';
$lang->approve->undone        = '未完成';
$lang->approve->unclosed      = '未关闭';
$lang->approve->typeDesc      = "运维{$lang->approveCommon}没有{$lang->storyCommon}、bug、版本、测试功能，同时禁用燃尽图。";
$lang->approve->mine          = '我负责：';
$lang->approve->other         = '其他：';
$lang->approve->deleted       = '已删除';
$lang->approve->delayed       = '已延期';
$lang->approve->product       = $lang->approve->products;
$lang->approve->readjustTime  = "调整{$lang->approveCommon}起止时间";
$lang->approve->readjustTask  = '顺延任务的起止时间';
$lang->approve->effort        = '日志';
$lang->approve->relatedMember = '相关成员';
$lang->approve->watermark     = '由禅道导出';
$lang->approve->viewByUser    = '按用户查看';

$lang->approve->start    = "发起{$lang->approveCommon}";
$lang->approve->confirm  = "确认沟通";
$lang->approve->changewillend  = "预计完成";
$lang->approve->activate = "激活";
$lang->approve->putoff   = "延期";
$lang->approve->suspend  = "挂起";
$lang->approve->close    = "关闭";
$lang->approve->export   = "导出";

$lang->approve->typeList['start']    = "任务立项";
$lang->approve->typeList['suspend']  = "任务调整";
$lang->approve->typeList['close']    = "内部验收";

$lang->approve->endList[7]   = '一星期';
$lang->approve->endList[14]  = '两星期';
$lang->approve->endList[31]  = '一个月';
$lang->approve->endList[62]  = '两个月';
$lang->approve->endList[93]  = '三个月';
$lang->approve->endList[186] = '半年';
$lang->approve->endList[365] = '一年';

$lang->team = new stdclass();
$lang->team->account    = '用户';
$lang->team->role       = '角色';
$lang->team->join       = '加盟日';
$lang->team->hours      = '可用工时/天';
$lang->team->days       = '可用工日';
$lang->team->totalHours = '总计';

$lang->team->limited            = '受限用户';
$lang->team->limitedList['yes'] = '是';
$lang->team->limitedList['no']  = '否';

$lang->approve->basicInfo = '基本信息';
$lang->approve->otherInfo = '其他信息';

/* 字段取值列表。*/
$lang->approve->statusList['wait']      = '未发起';
$lang->approve->statusList['back']      = '审批驳回';
$lang->approve->statusList['doing']     = '审批中';
$lang->approve->statusList['finish']    = '审批完成';

$lang->approve->aclList['open']    = "默认设置(有{$lang->approveCommon}视图权限，即可访问)";
$lang->approve->aclList['private'] = "私有{$lang->approveCommon}(只有{$lang->approveCommon}团队成员才能访问)";
$lang->approve->aclList['custom']  = "自定义白名单(团队成员和白名单的成员可以访问)";

/* 方法列表。*/
$lang->approve->index             = "{$lang->approveCommon}主页";
$lang->approve->task              = '任务列表';
$lang->approve->groupTask         = '分组浏览任务';
$lang->approve->story             = "{$lang->storyCommon}列表";
$lang->approve->bug               = 'Bug列表';
$lang->approve->dynamic           = '动态';
$lang->approve->latestDynamic     = '最新动态';
$lang->approve->build             = '所有版本';
$lang->approve->testtask          = '测试单';
$lang->approve->burn              = '燃尽图';
$lang->approve->computeBurn       = '更新燃尽图';
$lang->approve->burnData          = '燃尽图数据';
$lang->approve->fixFirst          = '修改首天工时';
$lang->approve->team              = '团队成员';
$lang->approve->doc               = '文档列表';
$lang->approve->doclib            = '文档库列表';
$lang->approve->manageProducts    = '关联' . $lang->productCommon;
$lang->approve->linkStory         = "关联{$lang->storyCommon}";
$lang->approve->linkStoryByPlan   = '按照计划关联';
$lang->approve->linkPlan          = '关联计划';
$lang->approve->unlinkStoryTasks  = "未关联{$lang->storyCommon}任务";
$lang->approve->linkedProducts    = '已关联';
$lang->approve->unlinkedProducts  = '未关联';
$lang->approve->view              = "{$lang->approveCommon}详情";
$lang->approve->confirmAction     = "确认{$lang->approveCommon}";
$lang->approve->changewillendAction     = "预计完成{$lang->approveCommon}";
$lang->approve->startAction       = "发起{$lang->approveCommon}";
$lang->approve->activateAction    = "激活{$lang->approveCommon}";
$lang->approve->delayAction       = "延期{$lang->approveCommon}";
$lang->approve->suspendAction     = "挂起{$lang->approveCommon}";
$lang->approve->closeAction       = "关闭{$lang->approveCommon}";
$lang->approve->testtaskAction    = "{$lang->approveCommon}测试单";
$lang->approve->teamAction        = "{$lang->approveCommon}团队";
$lang->approve->kanbanAction      = "{$lang->approveCommon}看板";
$lang->approve->printKanbanAction = "打印看板";
$lang->approve->treeAction        = "{$lang->approveCommon}树状图";
$lang->approve->exportAction      = "导出{$lang->approveCommon}";
$lang->approve->computeBurnAction = "计算燃尽图";
$lang->approve->create            = "添加{$lang->approveCommon}";
$lang->approve->copy              = "复制{$lang->approveCommon}";
$lang->approve->delete            = "删除{$lang->approveCommon}";
$lang->approve->browse            = "浏览{$lang->approveCommon}";
$lang->approve->edit              = "编辑{$lang->approveCommon}";
$lang->approve->batchEdit         = "批量编辑";
$lang->approve->manageMembers     = '团队管理';
$lang->approve->unlinkMember      = '移除成员';
$lang->approve->unlinkStory       = "移除{$lang->storyCommon}";
$lang->approve->unlinkStoryAB     = "移除{$lang->storyCommon}";
$lang->approve->batchUnlinkStory  = "批量移除{$lang->storyCommon}";
$lang->approve->importTask        = '转入任务';
$lang->approve->importPlanStories = "按计划关联{$lang->storyCommon}";
$lang->approve->importBug         = '导入Bug';
$lang->approve->updateOrder       = "{$lang->approveCommon}排序";
$lang->approve->tree              = '树状图';
$lang->approve->treeTask          = '只看任务';
$lang->approve->treeStory         = "只看{$lang->storyCommon}";
$lang->approve->treeOnlyTask      = '树状图只看任务';
$lang->approve->treeOnlyStory     = "树状图只看{$lang->storyCommon}";
$lang->approve->storyKanban       = "{$lang->storyCommon}看板";
$lang->approve->storySort         = "{$lang->storyCommon}排序";
$lang->approve->importPlanStory   = '创建' . $lang->approveCommon . '成功！\n是否导入计划关联的相关' . $lang->storyCommon . '？';
$lang->approve->iteration         = '版本迭代';
$lang->approve->iterationInfo     = '迭代%s次';
$lang->approve->viewAll           = '查看所有';

/* 分组浏览。*/
$lang->approve->allTasks     = '所有';
$lang->approve->assignedToMe = '指派给我';
$lang->approve->myInvolved   = '由我参与';

$lang->approve->statusSelects['']             = '更多';
$lang->approve->statusSelects['wait']         = '未开始';
$lang->approve->statusSelects['doing']        = '进行中';
$lang->approve->statusSelects['undone']       = '未完成';
$lang->approve->statusSelects['finishedbyme'] = '我完成';
$lang->approve->statusSelects['done']         = '已完成';
$lang->approve->statusSelects['closed']       = '已关闭';
$lang->approve->statusSelects['cancel']       = '已取消';

$lang->approve->groups['']           = '分组查看';
$lang->approve->groups['story']      = "{$lang->storyCommon}分组";
$lang->approve->groups['status']     = '状态分组';
$lang->approve->groups['pri']        = '优先级分组';
$lang->approve->groups['assignedTo'] = '指派给分组';
$lang->approve->groups['finishedBy'] = '完成者分组';
$lang->approve->groups['closedBy']   = '关闭者分组';
$lang->approve->groups['type']       = '类型分组';

$lang->approve->groupFilter['story']['all']         = '所有';
$lang->approve->groupFilter['story']['linked']      = "已关联{$lang->storyCommon}的任务";
$lang->approve->groupFilter['pri']['all']           = '所有';
$lang->approve->groupFilter['pri']['noset']         = '未设置';
$lang->approve->groupFilter['assignedTo']['undone'] = '未完成';
$lang->approve->groupFilter['assignedTo']['all']    = '所有';

$lang->approve->byQuery = '搜索';

/* 查询条件列表。*/
$lang->approve->allProject      = "所有{$lang->approveCommon}";
$lang->approve->aboveAllProduct = "以上所有{$lang->productCommon}";
$lang->approve->aboveAllProject = "以上所有{$lang->approveCommon}";

/* 页面提示。*/
$lang->approve->linkStoryByPlanTips = "此操作会将所选计划下面的{$lang->storyCommon}全部关联到此{$lang->approveCommon}中";
$lang->approve->selectProject       = "请选择{$lang->approveCommon}";
$lang->approve->beginAndEnd         = '起止时间';
$lang->approve->begin               = '开始日期';
$lang->approve->end                 = '截止日期';
$lang->approve->lblStats            = '工时统计';
$lang->approve->stats               = '可用工时 <strong>%s</strong> 工时，总共预计 <strong>%s</strong> 工时，已经消耗 <strong>%s</strong> 工时，预计剩余 <strong>%s</strong> 工时';
$lang->approve->taskSummary         = "本页共 <strong>%s</strong> 个任务，未开始 <strong>%s</strong>，进行中 <strong>%s</strong>，总预计 <strong>%s</strong> 工时，已消耗 <strong>%s</strong> 工时，剩余 <strong>%s</strong> 工时。";
$lang->approve->checkedSummary      = "选中 <strong>%total%</strong> 个任务，未开始 <strong>%wait%</strong>，进行中 <strong>%doing%</strong>，总预计 <strong>%estimate%</strong> 工时，已消耗 <strong>%consumed%</strong> 工时，剩余 <strong>%left%</strong> 工时。";
$lang->approve->memberHoursAB       = "<div>%s有 <strong>%s</strong> 工时</div>";
$lang->approve->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s可用工时</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">总任务</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">进行中</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">未开始</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->approve->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">总预计</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">已消耗</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">剩余</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->groupSummaryAB      = "<div>总任务 <strong>%s : </strong><span class='text-muted'>未开始</span> %s &nbsp; <span class='text-muted'>进行中</span> %s</div><div>总预计 <strong>%s : </strong><span class='text-muted'>已消耗</span> %s &nbsp; <span class='text-muted'>剩余</span> %s</div>";
$lang->approve->wbs                 = "分解任务";
$lang->approve->batchWBS            = "批量分解";
$lang->approve->howToUpdateBurn     = "<a href='https://api.zentao.net/goto.php?item=burndown&lang=zh-cn' target='_blank' title='如何更新燃尽图？' class='btn btn-link'>帮助 <i class='icon icon-help'></i></a>";
$lang->approve->whyNoStories        = "看起来没有{$lang->storyCommon}可以关联。请检查下{$lang->approveCommon}关联的{$lang->productCommon}中有没有{$lang->storyCommon}，而且要确保它们已经审核通过。";
$lang->approve->productStories      = "{$lang->approveCommon}关联的{$lang->storyCommon}是{$lang->productCommon}{$lang->storyCommon}的子集，并且只有评审通过的{$lang->storyCommon}才能关联。请<a href='%s'>关联{$lang->storyCommon}</a>。";
$lang->approve->haveDraft           = "有%s条草稿状态的{$lang->storyCommon}无法关联到该{$lang->approveCommon}";
$lang->approve->doneProjects        = '已结束';
$lang->approve->selectDept          = '选择部门';
$lang->approve->selectDeptTitle     = '选择一个部门的成员';
$lang->approve->copyTeam            = '复制团队';
$lang->approve->copyFromTeam        = "复制自{$lang->approveCommon}团队： <strong>%s</strong>";
$lang->approve->noMatched           = "找不到包含'%s'的$lang->approveCommon";
$lang->approve->copyTitle           = "请选择一个{$lang->approveCommon}来复制";
$lang->approve->copyTeamTitle       = "选择一个{$lang->approveCommon}团队来复制";
$lang->approve->copyNoProject       = "没有可用的{$lang->approveCommon}来复制";
$lang->approve->copyFromProject     = "复制自{$lang->approveCommon} <strong>%s</strong>";
$lang->approve->cancelCopy          = '取消复制';
$lang->approve->byPeriod            = '按时间段';
$lang->approve->byUser              = '按用户';
$lang->approve->noApprove           = "暂时没有{$lang->approveCommon}。";
$lang->approve->noMembers           = '暂时没有团队成员。';

/* 交互提示。*/
$lang->approve->confirmDelete         = "您确定删除{$lang->approveCommon}[%s]吗？";
$lang->approve->confirmUnlinkMember   = "您确定从该{$lang->approveCommon}中移除该用户吗？";
$lang->approve->confirmUnlinkStory    = "您确定从该{$lang->approveCommon}中移除该{$lang->storyCommon}吗？";
$lang->approve->errorNoLinkedProducts = "该{$lang->approveCommon}没有关联的{$lang->productCommon}，系统将转到{$lang->productCommon}关联页面";
$lang->approve->errorSameProducts     = "{$lang->approveCommon}不能关联多个相同的{$lang->productCommon}。";
$lang->approve->accessDenied          = "您无权访问该{$lang->approveCommon}！";
$lang->approve->tips                  = '提示';
$lang->approve->afterInfo             = "{$lang->approveCommon}添加成功，您现在可以进行以下操作：";
$lang->approve->setTeam               = '设置团队';
$lang->approve->linkStory             = "关联{$lang->storyCommon}";
$lang->approve->createTask            = '创建任务';
$lang->approve->goback                = "返回任务列表";
$lang->approve->noweekend             = '去除周末';
$lang->approve->withweekend           = '显示周末';
$lang->approve->interval              = '间隔';
$lang->approve->fixFirstWithLeft      = '修改剩余工时';

$lang->approve->action = new stdclass();
$lang->approve->action->opened  = '$date, 由 <strong>$actor</strong> 创建。$extra' . "\n";
$lang->approve->action->managed = '$date, 由 <strong>$actor</strong> 维护。$extra' . "\n";
$lang->approve->action->extra   = '相关产品为 %s。';

/* 统计。*/
$lang->approve->charts = new stdclass();
$lang->approve->charts->burn = new stdclass();
$lang->approve->charts->burn->graph = new stdclass();
$lang->approve->charts->burn->graph->caption      = "燃尽图";
$lang->approve->charts->burn->graph->xAxisName    = "日期";
$lang->approve->charts->burn->graph->yAxisName    = "HOUR";
$lang->approve->charts->burn->graph->baseFontSize = 12;
$lang->approve->charts->burn->graph->formatNumber = 0;
$lang->approve->charts->burn->graph->animation    = 0;
$lang->approve->charts->burn->graph->rotateNames  = 1;
$lang->approve->charts->burn->graph->showValues   = 0;
$lang->approve->charts->burn->graph->reference    = '参考';
$lang->approve->charts->burn->graph->actuality    = '实际';

$lang->approve->placeholder = new stdclass();
$lang->approve->placeholder->code      = '团队内部的简称';
$lang->approve->placeholder->totalLeft = "{$lang->approveCommon}开始时的总预计工时";

$lang->approve->selectGroup = new stdclass();
$lang->approve->selectGroup->done = '(已结束)';

$lang->approve->orderList['order_asc']  = "{$lang->storyCommon}排序正序";
$lang->approve->orderList['order_desc'] = "{$lang->storyCommon}排序倒序";
$lang->approve->orderList['pri_asc']    = "{$lang->storyCommon}优先级正序";
$lang->approve->orderList['pri_desc']   = "{$lang->storyCommon}优先级倒序";
$lang->approve->orderList['stage_asc']  = "{$lang->storyCommon}阶段正序";
$lang->approve->orderList['stage_desc'] = "{$lang->storyCommon}阶段倒序";

$lang->approve->kanban        = "看板";
$lang->approve->kanbanSetting = "看板设置";
$lang->approve->resetKanban   = "恢复默认";
$lang->approve->printKanban   = "打印看板";
$lang->approve->bugList       = "Bug列表";

$lang->approve->kanbanHideCols   = '看板隐藏已关闭、已取消列';
$lang->approve->kanbanShowOption = '显示折叠信息';
$lang->approve->kanbanColsColor  = '看板列自定义颜色';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = '是否恢复看板默认设置？';
$lang->kanbanSetting->optionList['0'] = '隐藏';
$lang->kanbanSetting->optionList['1'] = '显示';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = '看板打印';
$lang->printKanban->content = '内容';
$lang->printKanban->print   = '打印';

$lang->printKanban->taskStatus = '状态';

$lang->printKanban->typeList['all']       = '全部';
$lang->printKanban->typeList['increment'] = '增量';

$lang->approve->featureBar['task']['all']          = $lang->approve->allTasks;
$lang->approve->featureBar['task']['unclosed']     = $lang->approve->unclosed;
$lang->approve->featureBar['task']['assignedtome'] = $lang->approve->assignedToMe;
$lang->approve->featureBar['task']['myinvolved']   = $lang->approve->myInvolved;
$lang->approve->featureBar['task']['delayed']      = '已延期';
$lang->approve->featureBar['task']['needconfirm']  = "{$lang->storyCommon}变更";
$lang->approve->featureBar['task']['status']       = $lang->approve->statusSelects[''];

$lang->approve->featureBar['all']['all']       = $lang->approve->all;
$lang->approve->featureBar['all']['wait']      = $lang->approve->statusList['wait'];
$lang->approve->featureBar['all']['back']      = $lang->approve->statusList['back'];
$lang->approve->featureBar['all']['doing']     = $lang->approve->statusList['doing'];
$lang->approve->featureBar['all']['finish']    = $lang->approve->statusList['finish'];

$lang->approve->treeLevel = array();
$lang->approve->treeLevel['all']   = '全部展开';
$lang->approve->treeLevel['root']  = '全部折叠';
$lang->approve->treeLevel['task']  = '全部显示';
$lang->approve->treeLevel['story'] = "只看{$lang->storyCommon}";

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->approve->groups['story']);
    unset($lang->approve->featureBar['task']['needconfirm']);
}


$lang->approve->projectManager = '任务承接人';
$lang->approve->productManager = '业务负责人';
$lang->approve->leader = '业务分管领导';
$lang->approve->operator = '操作';
$lang->approve->openedBy       = '审批发起人';
$lang->approve->assignedTo       = '当前指派人';
$lang->approve->approve = $lang->approveCommon;
$lang->approve->result = $lang->approveCommon . '结果   ';
$lang->approve->resultTypes['pass']    = $lang->approveCommon . "通过";
$lang->approve->resultTypes['back']  = $lang->approveCommon . "驳回";
$lang->approve->comment       = $lang->approveCommon . "意见";
$lang->approve->startApprove = '自动发起审批';
$lang->approve->list         = '任务审批列表';
$lang->approve->save         = '保存';
