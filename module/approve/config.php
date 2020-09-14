<?php
$config->approve = new stdclass();
$config->approve->defaultWorkhours = '7.0';
$config->approve->orderBy          = 'isDone,status,order_desc';
$config->approve->maxBurnDay       = '31';
$config->approve->weekend          = '2';

$config->approve->list = new stdclass();
$config->approve->list->exportFields = 'id,name,code,PM,end,status,totalEstimate,totalConsumed,totalLeft,progress';

global $lang, $app;
$app->loadLang('task');
$config->approve->create = new stdclass();
$config->approve->edit   = new stdclass();
$config->approve->create->requiredFields = 'begin,end,PM,LD';
$config->approve->edit->requiredFields   = 'begin,end,PM,LD';

$config->approve->customBatchEditFields = 'days,type,teamname,status,desc,PO,QD,PM,RD';

$config->approve->custom = new stdclass();
$config->approve->custom->batchEditFields = 'days,status,PM';

$config->approve->editor = new stdclass();
$config->approve->editor->confirm  = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->changewillend  = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->create   = array('id' => 'desc',    'tools' => 'simpleTools');
$config->approve->editor->edit     = array('id' => 'desc',    'tools' => 'simpleTools');
$config->approve->editor->putoff   = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->activate = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->close    = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->start    = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->suspend  = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->tree     = array('id' => 'comment', 'tools' => 'simpleTools');
$config->approve->editor->view     = array('id' => 'desc,comment,lastComment', 'tools' => 'simpleTools');
$config->approve->editor->approve  = array('id' => 'comment', 'tools' => 'simpleTools');

$config->approve->search['module']                   = 'task';
$config->approve->search['fields']['name']           = $lang->task->name;
$config->approve->search['fields']['id']             = $lang->task->id;
$config->approve->search['fields']['status']         = $lang->task->status;
$config->approve->search['fields']['desc']           = $lang->task->desc;
$config->approve->search['fields']['assignedTo']     = $lang->task->assignedTo;
$config->approve->search['fields']['pri']            = $lang->task->pri;

$config->approve->search['fields']['project']        = $lang->task->project;
$config->approve->search['fields']['module']         = $lang->task->module;
$config->approve->search['fields']['estimate']       = $lang->task->estimate;      
$config->approve->search['fields']['left']           = $lang->task->left; 
$config->approve->search['fields']['consumed']       = $lang->task->consumed;
$config->approve->search['fields']['type']           = $lang->task->type;
$config->approve->search['fields']['fromBug']        = $lang->task->fromBug;
$config->approve->search['fields']['closedReason']   = $lang->task->closedReason;

$config->approve->search['fields']['openedBy']       = $lang->task->openedBy;
$config->approve->search['fields']['finishedBy']     = $lang->task->finishedBy;
$config->approve->search['fields']['closedBy']       = $lang->task->closedBy;
$config->approve->search['fields']['canceledBy']     = $lang->task->canceledBy;  
$config->approve->search['fields']['lastEditedBy']   = $lang->task->lastEditedBy;

$config->approve->search['fields']['mailto']         = $lang->task->mailto;
$config->approve->search['fields']['finishedList']   = $lang->task->finishedList;

$config->approve->search['fields']['openedDate']     = $lang->task->openedDate;
$config->approve->search['fields']['deadline']       = $lang->task->deadline;
$config->approve->search['fields']['estStarted']     = $lang->task->estStarted;
$config->approve->search['fields']['realStarted']    = $lang->task->realStarted;
$config->approve->search['fields']['assignedDate']   = $lang->task->assignedDate;
$config->approve->search['fields']['finishedDate']   = $lang->task->finishedDate;
$config->approve->search['fields']['closedDate']     = $lang->task->closedDate;
$config->approve->search['fields']['canceledDate']   = $lang->task->canceledDate;
$config->approve->search['fields']['lastEditedDate'] = $lang->task->lastEditedDate;

$config->approve->search['params']['name']           = array('operator' => 'include', 'control' => 'input',  'values' => '');
$config->approve->search['params']['status']         = array('operator' => '=',       'control' => 'select', 'values' => $lang->task->statusList);
$config->approve->search['params']['desc']           = array('operator' => 'include', 'control' => 'input',  'values' => '');
$config->approve->search['params']['assignedTo']     = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->approve->search['params']['pri']            = array('operator' => '=',       'control' => 'select', 'values' => $lang->task->priList);

$config->approve->search['params']['project']        = array('operator' => '=',       'control' => 'select', 'values' => '');
$config->approve->search['params']['module']         = array('operator' => 'belong',  'control' => 'select', 'values' => '');
$config->approve->search['params']['estimate']       = array('operator' => '=',       'control' => 'input',  'values' => '');
$config->approve->search['params']['left']           = array('operator' => '=',       'control' => 'input',  'values' => '');
$config->approve->search['params']['consumed']       = array('operator' => '=',       'control' => 'input',  'values' => '');
$config->approve->search['params']['type']           = array('operator' => '=',       'control' => 'select', 'values' => $lang->task->typeList);
$config->approve->search['params']['fromBug']        = array('operator' => '=',       'control' => 'input', 'values' => $lang->task->typeList);
$config->approve->search['params']['closedReason']   = array('operator' => '=',       'control' => 'select', 'values' => $lang->task->reasonList);

$config->approve->search['params']['openedBy']       = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->approve->search['params']['finishedBy']     = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->approve->search['params']['closedBy']       = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->approve->search['params']['cancelBy']       = array('operator' => '=',       'control' => 'select', 'values' => 'users');
$config->approve->search['params']['lastEditedBy']   = array('operator' => '=',       'control' => 'select', 'values' => 'users');

$config->approve->search['params']['mailto']         = array('operator' => 'include', 'control' => 'select', 'values' => 'users');
$config->approve->search['params']['finishedList']   = array('operator' => 'include', 'control' => 'select', 'values' => 'users');

$config->approve->search['params']['openedDate']     = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['deadline']       = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['estStarted']     = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['realStarted']    = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['assignedDate']   = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['finishedDate']   = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['closedDate']     = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['canceledDate']   = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');
$config->approve->search['params']['lastEditedDate'] = array('operator' => '=',      'control' => 'input',  'values' => '', 'class' => 'date');

$config->printKanban = new stdClass();
$config->printKanban->col['story']  = 1;
$config->printKanban->col['wait']   = 2;
$config->printKanban->col['doing']  = 3;
$config->printKanban->col['done']   = 4;
$config->printKanban->col['closed'] = 5;

$config->approve->kanbanSetting = new stdclass();
$config->approve->kanbanSetting->colorList['wait']   = '#7EC5FF';
$config->approve->kanbanSetting->colorList['doing']  = '#0991FF';
$config->approve->kanbanSetting->colorList['pause']  = '#fdc137';
$config->approve->kanbanSetting->colorList['done']   = '#0BD986';
$config->approve->kanbanSetting->colorList['cancel'] = '#CBD0DB';
$config->approve->kanbanSetting->colorList['closed'] = '#838A9D';
