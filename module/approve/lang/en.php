<?php
/**
 * The project module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* Fields. */
$lang->approve->common        = $lang->approveCommon;
$lang->approve->allProjects   = 'All ' . $lang->approveCommon . 's';
$lang->approve->id            = $lang->approveCommon . ' ID';
$lang->approve->type          = 'Type';
$lang->approve->name          = "{$lang->approveCommon} Name";
$lang->approve->code          = 'Code';
$lang->approve->statge        = 'Stage';
$lang->approve->pri           = 'Priority';
$lang->approve->openedBy      = 'OpenedBy';
$lang->approve->openedDate    = 'OpenedDate';
$lang->approve->closedBy      = 'ClosedBy';
$lang->approve->closedDate    = 'ClosedDate';
$lang->approve->canceledBy    = 'CanceledBy';
$lang->approve->canceledDate  = 'CanceledDate';
$lang->approve->begin         = 'Begin';
$lang->approve->end           = 'End';
$lang->approve->dateRange     = 'Duration';
$lang->approve->to            = 'To';
$lang->approve->days          = 'Available Days';
$lang->approve->day           = ' Days';
$lang->approve->workHour      = ' Hours';
$lang->approve->totalHours    = 'Available Hours';
$lang->approve->totalDays     = 'Available Days';
$lang->approve->status        = 'Status';
$lang->approve->subStatus     = 'Sub Status';
$lang->approve->desc          = 'Description';
$lang->approve->owner         = 'Owner';
$lang->approve->PO            = "{$lang->approveCommon} Owner";
$lang->approve->PM            = "{$lang->approveCommon} Manager";
$lang->approve->QD            = 'QA Manager';
$lang->approve->RD            = 'Release Manager';
$lang->approve->qa            = 'QA';
$lang->approve->release       = 'Release';
$lang->approve->acl           = 'Access Control';
$lang->approve->teamname      = 'Team Name';
$lang->approve->order         = "Rank {$lang->approveCommon}";
$lang->approve->orderAB       = "Rank";
$lang->approve->products      = "Link {$lang->productCommon}";
$lang->approve->whitelist     = 'Whitelist';
$lang->approve->totalEstimate = 'Estimates';
$lang->approve->totalConsumed = 'Cost';
$lang->approve->totalLeft     = 'Left';
$lang->approve->progress      = ' Progress';
$lang->approve->hours         = 'Estimates: %s, Cost: %s, Left: %s.';
$lang->approve->viewBug       = 'Bugs';
$lang->approve->noProduct     = "No {$lang->productCommon} yet.";
$lang->approve->createStory   = "Create Story";
$lang->approve->all           = "All {$lang->approveCommon}s";
$lang->approve->undone        = 'Unfinished ';
$lang->approve->unclosed      = 'Unclosed';
$lang->approve->typeDesc      = 'No story, bug, build, test, or burndown chart is allowed in OPS';
$lang->approve->mine          = 'Mine: ';
$lang->approve->other         = 'Others:';
$lang->approve->deleted       = 'Deleted';
$lang->approve->delayed       = 'Delayed';
$lang->approve->product       = $lang->approve->products;
$lang->approve->readjustTime  = "Adjust {$lang->approveCommon} Begin and End";
$lang->approve->readjustTask  = 'Adjust Task Begin and End';
$lang->approve->effort        = 'Effort';
$lang->approve->relatedMember = 'Team';
$lang->approve->watermark     = 'Exported by ZenTao';
$lang->approve->viewByUser    = 'By User';

$lang->approve->start    = 'Start';
$lang->approve->activate = 'Activate';
$lang->approve->putoff   = 'Delay';
$lang->approve->suspend  = 'Suspend';
$lang->approve->close    = 'Close';
$lang->approve->export   = 'Export';

$lang->approve->typeList['sprint']    = 'Sprint';
$lang->approve->typeList['waterfall'] = 'Waterfall';
$lang->approve->typeList['ops']       = 'OPS';

$lang->approve->endList[7]   = '1 Week';
$lang->approve->endList[14]  = '2 Weeks';
$lang->approve->endList[31]  = '1 Month';
$lang->approve->endList[62]  = '2 Months';
$lang->approve->endList[93]  = '3 Months';
$lang->approve->endList[186] = '6 Months';
$lang->approve->endList[365] = '1 Year';

$lang->team = new stdclass();
$lang->team->account    = 'User';
$lang->team->role       = 'Role';
$lang->team->join       = 'Joined';
$lang->team->hours      = 'Hours/day';
$lang->team->days       = 'Day';
$lang->team->totalHours = 'Total Hours';

$lang->team->limited            = 'Limited User';
$lang->team->limitedList['yes'] = 'Yes';
$lang->team->limitedList['no']  = 'No';

$lang->approve->basicInfo = 'Basic Information';
$lang->approve->otherInfo = 'Other Information';

/* Field value list. */
$lang->approve->statusList['wait']      = 'Waiting';
$lang->approve->statusList['doing']     = 'Doing';
$lang->approve->statusList['suspended'] = 'Suspended';
$lang->approve->statusList['closed']    = 'Closed';

$lang->approve->aclList['open']    = "Default (Users who can visit {$lang->approveCommon} can access it.)";
$lang->approve->aclList['private'] = 'Private (For team members only.)';
$lang->approve->aclList['custom']  = 'Custom (Team members and the whitelist users can access it.)';

/* Method list. */
$lang->approve->index             = "{$lang->approveCommon} Home";
$lang->approve->task              = 'Task List';
$lang->approve->groupTask         = 'Group View';
$lang->approve->story             = 'Story List';
$lang->approve->bug               = 'Bug List';
$lang->approve->dynamic           = 'Dynamics';
$lang->approve->latestDynamic     = 'Dynamics';
$lang->approve->build             = 'Build List';
$lang->approve->testtask          = 'Request';
$lang->approve->burn              = 'Burndown';
$lang->approve->computeBurn       = 'Update';
$lang->approve->burnData          = 'Burndown Data';
$lang->approve->fixFirst          = 'Edit 1st-Day Estimates';
$lang->approve->team              = 'Members';
$lang->approve->doc               = 'Document';
$lang->approve->doclib            = 'Docoment Library';
$lang->approve->manageProducts    = 'Linked ' . $lang->productCommon . 's';
$lang->approve->linkStory         = 'Link Stories';
$lang->approve->linkStoryByPlan   = 'Link Stories By Plan';
$lang->approve->linkPlan          = 'Linked Plans';
$lang->approve->unlinkStoryTasks  = 'Unlink';
$lang->approve->linkedProducts    = "Linked {$lang->productCommon}s";
$lang->approve->unlinkedProducts  = "Unlinked {$lang->productCommon}s";
$lang->approve->view              = "{$lang->approveCommon} Detail";
$lang->approve->startAction       = "Start {$lang->approveCommon}";
$lang->approve->activateAction    = "Activate {$lang->approveCommon}";
$lang->approve->delayAction       = "Delay {$lang->approveCommon}";
$lang->approve->suspendAction     = "Suspend {$lang->approveCommon}";
$lang->approve->closeAction       = "Close {$lang->approveCommon}";
$lang->approve->testtaskAction    = "{$lang->approveCommon} Request";
$lang->approve->teamAction        = "{$lang->approveCommon} Members";
$lang->approve->kanbanAction      = "{$lang->approveCommon} Kanban";
$lang->approve->printKanbanAction = "Print Kanban";
$lang->approve->treeAction        = "{$lang->approveCommon} Tree View";
$lang->approve->exportAction      = "Export {$lang->approveCommon}";
$lang->approve->computeBurnAction = "Compute Burn";
$lang->approve->create            = "Create {$lang->approveCommon}";
$lang->approve->copy              = "Copy {$lang->approveCommon}";
$lang->approve->delete            = "Delete {$lang->approveCommon}";
$lang->approve->browse            = "{$lang->approveCommon} List";
$lang->approve->edit              = "Edit {$lang->approveCommon}";
$lang->approve->batchEdit         = "Batch Edit";
$lang->approve->manageMembers     = 'Manage Team';
$lang->approve->unlinkMember      = 'Remove Member';
$lang->approve->unlinkStory       = 'Unlink Story';
$lang->approve->unlinkStoryAB     = 'Unlink';
$lang->approve->batchUnlinkStory  = 'Batch Unlink Stories';
$lang->approve->importTask        = 'Transfer Task';
$lang->approve->importPlanStories = 'Link Stories By Plan';
$lang->approve->importBug         = 'Import Bug';
$lang->approve->updateOrder       = "Rank {$lang->approveCommon}";
$lang->approve->tree              = 'Tree';
$lang->approve->treeTask          = 'Show Task Only';
$lang->approve->treeStory         = 'Show Story Only';
$lang->approve->treeOnlyTask      = 'Show Task Only';
$lang->approve->treeOnlyStory     = 'Show Story Only';
$lang->approve->storyKanban       = 'Story Kanban';
$lang->approve->storySort         = 'Rank Story';
$lang->approve->importPlanStory   = $lang->approveCommon . ' is created!\nDo you want to import stories that have been linked to the plan?';
$lang->approve->iteration         = 'Iterations';
$lang->approve->iterationInfo     = '%s Iterations';
$lang->approve->viewAll           = 'View All';

/* Group browsing. */
$lang->approve->allTasks     = 'All';
$lang->approve->assignedToMe = 'My';
$lang->approve->myInvolved   = 'Involved';

$lang->approve->statusSelects['']             = 'More';
$lang->approve->statusSelects['wait']         = 'Waiting';
$lang->approve->statusSelects['doing']        = 'Doing';
$lang->approve->statusSelects['undone']       = 'Unfinished';
$lang->approve->statusSelects['finishedbyme'] = 'FinishedByMe';
$lang->approve->statusSelects['done']         = 'Done';
$lang->approve->statusSelects['closed']       = 'Closed';
$lang->approve->statusSelects['cancel']       = 'Cancelled';

$lang->approve->groups['']           = 'View by Groups';
$lang->approve->groups['story']      = 'Group by Story';
$lang->approve->groups['status']     = 'Group by Status';
$lang->approve->groups['pri']        = 'Group by Priority';
$lang->approve->groups['assignedTo'] = 'Group by AssignedTo';
$lang->approve->groups['finishedBy'] = 'Group by FinishedBy';
$lang->approve->groups['closedBy']   = 'Group by ClosedBy';
$lang->approve->groups['type']       = 'Group by Type';

$lang->approve->groupFilter['story']['all']         = 'All';
$lang->approve->groupFilter['story']['linked']      = 'Tasks linked to stories';
$lang->approve->groupFilter['pri']['all']           = 'All';
$lang->approve->groupFilter['pri']['noset']         = 'Not Set';
$lang->approve->groupFilter['assignedTo']['undone'] = 'Unfinished';
$lang->approve->groupFilter['assignedTo']['all']    = 'All';

$lang->approve->byQuery = 'Search';

/* Query condition list. */
$lang->approve->allProject      = "All {$lang->approveCommon}s";
$lang->approve->aboveAllProduct = "All the above {$lang->productCommon}s";
$lang->approve->aboveAllProject = "All the above {$lang->approveCommon}s";

/* Page prompt. */
$lang->approve->linkStoryByPlanTips = "This action will link all stories in this plan to the {$lang->approveCommon}.";
$lang->approve->selectProject       = "Select {$lang->approveCommon}";
$lang->approve->beginAndEnd         = 'Duration';
$lang->approve->begin               = 'Begin';
$lang->approve->end                 = 'End';
$lang->approve->lblStats            = 'Efforts';
$lang->approve->stats               = 'Available: <strong>%s</strong>(h). Estimates: <strong>%s</strong>(h). Cost: <strong>%s</strong>(h). Left: <strong>%s</strong>(h).';
$lang->approve->taskSummary         = "Total tasks on this page:<strong>%s</strong>. Waiting: <strong>%s</strong>. Doing: <strong>%s</strong>.  &nbsp;&nbsp;&nbsp;  Estimates: <strong>%s</strong>(h). Cost: <strong>%s</strong>(h). Left: <strong>%s</strong>(h).";
$lang->approve->checkedSummary      = "Selected: <strong>%total%</strong>. Waiting: <strong>%wait%</strong>. Doing: <strong>%doing%</strong>.    Estimates: <strong>%estimate%</strong>(h). Cost: <strong>%consumed%</strong>(h). Left: <strong>%left%</strong>(h).";
$lang->approve->memberHoursAB       = "%s has <strong>%s</ strong> hours.";
$lang->approve->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Available Hours</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tasks</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Doing</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Waiting</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->approve->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Estimates</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Cost</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Left</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->groupSummaryAB      = "<div>Tasks <strong>%s ：</strong><span class='text-muted'>Waiting</span> %s &nbsp; <span class='text-muted'>Doing</span> %s</div><div>Estimates <strong>%s ：</strong><span class='text-muted'>Cost</span> %s &nbsp; <span class='text-muted'>Left</span> %s</div>";
$lang->approve->wbs                 = "Create Task";
$lang->approve->batchWBS            = "Batch Create Tasks";
$lang->approve->howToUpdateBurn     = "<a href='https://api.zentao.pm/goto.php?item=burndown' target='_blank' title='How to update the Burndown Chart?' class='btn btn-link'>Help <i class='icon icon-help'></i></a>";
$lang->approve->whyNoStories        = "No story can be linked. Please check whether there is any story in {$lang->approveCommon} which is linked to {$lang->productCommon} and make sure it has been reviewed.";
$lang->approve->productStories      = "Stories linked to {$lang->approveCommon} are the subeset of stories linked to {$lang->productCommon}. Stories can only be linked after they pass the review. <a href='%s'> Link Stories</a> now.";
$lang->approve->haveDraft           = "%s stories in draft, so they can't be linked.";
$lang->approve->doneProjects        = 'Finished';
$lang->approve->selectDept          = 'Select Department';
$lang->approve->selectDeptTitle     = 'Select User';
$lang->approve->copyTeam            = 'Copy Team';
$lang->approve->copyFromTeam        = "Copy from {$lang->approveCommon} Team: <strong>%s</strong>";
$lang->approve->noMatched           = "No $lang->approveCommon including '%s'can be found.";
$lang->approve->copyTitle           = "Choose a {$lang->approveCommon} to copy.";
$lang->approve->copyTeamTitle       = "Choose a {$lang->approveCommon} Team to copy.";
$lang->approve->copyNoProject       = "No {$lang->approveCommon} can be copied.";
$lang->approve->copyFromProject     = "Copy from {$lang->approveCommon} <strong>%s</strong>";
$lang->approve->cancelCopy          = 'Cancel Copy';
$lang->approve->byPeriod            = 'By Time';
$lang->approve->byUser              = 'By User';
$lang->approve->noApprove           = "No {$lang->approveCommon}. ";
$lang->approve->noMembers           = 'No team members yet. ';

/* Interactive prompts. */
$lang->approve->confirmDelete         = "Do you want to delete the {$lang->approveCommon}[%s]?";
$lang->approve->confirmUnlinkMember   = "Do you want to unlink this User from {$lang->approveCommon}?";
$lang->approve->confirmUnlinkStory    = "Do you want to unlink this Story from {$lang->approveCommon}?";
$lang->approve->errorNoLinkedProducts = "No {$lang->productCommon} is linked to {$lang->approveCommon}. You will be directed to {$lang->productCommon} page to link one.";
$lang->approve->errorSameProducts     = "{$lang->approveCommon} cannot be linked to the same {$lang->productCommon} twice.";
$lang->approve->accessDenied          = "Your access to {$lang->approveCommon} is denied!";
$lang->approve->tips                  = 'Note';
$lang->approve->afterInfo             = "{$lang->approveCommon} is created. Next you can ";
$lang->approve->setTeam               = 'Set Team';
$lang->approve->linkStory             = 'Link Story';
$lang->approve->createTask            = 'Create Task';
$lang->approve->goback                = "Go Back";
$lang->approve->noweekend             = 'Exclude Weekend';
$lang->approve->withweekend           = 'Include Weekend';
$lang->approve->interval              = 'Intervals ';
$lang->approve->fixFirstWithLeft      = 'Update hours left too';

$lang->approve->action = new stdclass();
$lang->approve->action->opened  = '$date, created by <strong>$actor</strong> .' . "\n";
$lang->approve->action->managed = '$date, managed by <strong>$actor</strong> .' . "\n";
$lang->approve->action->extra   = "The linked {$lang->productCommon}s are %s.";

/* Statistics. */
$lang->approve->charts = new stdclass();
$lang->approve->charts->burn = new stdclass();
$lang->approve->charts->burn->graph = new stdclass();
$lang->approve->charts->burn->graph->caption      = " Burndown Chart";
$lang->approve->charts->burn->graph->xAxisName    = "Date";
$lang->approve->charts->burn->graph->yAxisName    = "Hour";
$lang->approve->charts->burn->graph->baseFontSize = 12;
$lang->approve->charts->burn->graph->formatNumber = 0;
$lang->approve->charts->burn->graph->animation    = 0;
$lang->approve->charts->burn->graph->rotateNames  = 1;
$lang->approve->charts->burn->graph->showValues   = 0;
$lang->approve->charts->burn->graph->reference    = 'Ideal';
$lang->approve->charts->burn->graph->actuality    = 'Actual';

$lang->approve->placeholder = new stdclass();
$lang->approve->placeholder->code      = "Abbreviation of {$lang->approveCommon} name";
$lang->approve->placeholder->totalLeft = "Hours estimated on the first day of the {$lang->approveCommon}.";

$lang->approve->selectGroup = new stdclass();
$lang->approve->selectGroup->done = '(Done)';

$lang->approve->orderList['order_asc']  = "Story Rank Ascending";
$lang->approve->orderList['order_desc'] = "Story Rank Descending";
$lang->approve->orderList['pri_asc']    = "Story Priority Ascending";
$lang->approve->orderList['pri_desc']   = "Story Priority Descending";
$lang->approve->orderList['stage_asc']  = "Story Phase Ascending";
$lang->approve->orderList['stage_desc'] = "Story Phase Descending";

$lang->approve->kanban        = "Kanban";
$lang->approve->kanbanSetting = "Settings";
$lang->approve->resetKanban   = "Reset";
$lang->approve->printKanban   = "Print";
$lang->approve->bugList       = "Bugs";

$lang->approve->kanbanHideCols   = 'Closed & Cancelled Columns';
$lang->approve->kanbanShowOption = 'Unfold';
$lang->approve->kanbanColsColor  = 'Customize Column Color';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Do you want to reset Kanban?';
$lang->kanbanSetting->optionList['0'] = 'Hide';
$lang->kanbanSetting->optionList['1'] = 'Show';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Print Kanban';
$lang->printKanban->content = 'Content';
$lang->printKanban->print   = 'Print';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'All';
$lang->printKanban->typeList['increment'] = 'Increment';

$lang->approve->featureBar['task']['all']          = $lang->approve->allTasks;
$lang->approve->featureBar['task']['unclosed']     = $lang->approve->unclosed;
$lang->approve->featureBar['task']['assignedtome'] = $lang->approve->assignedToMe;
$lang->approve->featureBar['task']['myinvolved']   = $lang->approve->myInvolved;
$lang->approve->featureBar['task']['delayed']      = 'Delayed';
$lang->approve->featureBar['task']['needconfirm']  = 'Changed';
$lang->approve->featureBar['task']['status']       = $lang->approve->statusSelects[''];

$lang->approve->featureBar['all']['all']       = $lang->approve->all;
$lang->approve->featureBar['all']['undone']    = $lang->approve->undone;
$lang->approve->featureBar['all']['wait']      = $lang->approve->statusList['wait'];
$lang->approve->featureBar['all']['doing']     = $lang->approve->statusList['doing'];
$lang->approve->featureBar['all']['suspended'] = $lang->approve->statusList['suspended'];
$lang->approve->featureBar['all']['closed']    = $lang->approve->statusList['closed'];

$lang->approve->treeLevel = array();
$lang->approve->treeLevel['all']   = 'Expand All';
$lang->approve->treeLevel['root']  = 'Collapse All';
$lang->approve->treeLevel['task']  = 'Stories&Tasks';
$lang->approve->treeLevel['story'] = 'Only Stories';

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->approve->groups['story']);
    unset($lang->approve->featureBar['task']['needconfirm']);
}
