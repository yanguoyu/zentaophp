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
$lang->approve->allProjects   = 'Alle';
$lang->approve->id            = $lang->approveCommon . ' ID';
$lang->approve->type          = 'Typ';
$lang->approve->name          = 'Name';
$lang->approve->code          = 'Alias';
$lang->approve->statge        = 'Stage';
$lang->approve->pri           = 'Priorität';
$lang->approve->openedBy      = 'OpenedBy';
$lang->approve->openedDate    = 'OpenedDate';
$lang->approve->closedBy      = 'ClosedBy';
$lang->approve->closedDate    = 'ClosedDate';
$lang->approve->canceledBy    = 'CanceledBy';
$lang->approve->canceledDate  = 'CanceledDate';
$lang->approve->begin         = 'Start';
$lang->approve->end           = 'Ende';
$lang->approve->dateRange     = 'Dauer';
$lang->approve->to            = 'An';
$lang->approve->days          = 'Manntage';
$lang->approve->day           = 'Tag';
$lang->approve->workHour      = 'Stunden';
$lang->approve->totalHours    = 'Arbeitsstunden';
$lang->approve->totalDays     = 'Arbeitstage';
$lang->approve->status        = 'Status';
$lang->approve->subStatus     = 'Sub Status';
$lang->approve->desc          = 'Beschreibung';
$lang->approve->owner         = 'Besitzer';
$lang->approve->PO            = 'PO';
$lang->approve->PM            = 'PM';
$lang->approve->QD            = 'QS Manager';
$lang->approve->RD            = 'Release Manager';
$lang->approve->qa            = 'Test';
$lang->approve->release       = 'Release';
$lang->approve->acl           = 'Zugriffskontrolle';
$lang->approve->teamname      = 'Team Name';
$lang->approve->order         = "Sortierung {$lang->approveCommon}";
$lang->approve->orderAB       = "Rank";
$lang->approve->products      = "Verknüpfung {$lang->productCommon}";
$lang->approve->whitelist     = 'Whitelist';
$lang->approve->totalEstimate = 'Geplant';
$lang->approve->totalConsumed = 'Genutzt';
$lang->approve->totalLeft     = 'Rest';
$lang->approve->progress      = 'Fortschritt';
$lang->approve->hours         = '%s geplant, %s verbraucht, %s Rest.';
$lang->approve->viewBug       = 'Bugs';
$lang->approve->noProduct     = "Kein {$lang->productCommon}";
$lang->approve->createStory   = "Story erstellen";
$lang->approve->all           = 'Alle';
$lang->approve->undone        = 'Unabgeschlossen ';
$lang->approve->unclosed      = 'Geschlossen';
$lang->approve->typeDesc      = 'Keine Story, Bug, Build, Testaufgabe oder Burndown ist bei OPS erlaubt';
$lang->approve->mine          = 'Meine Zuständigkeit: ';
$lang->approve->other         = 'Andere:';
$lang->approve->deleted       = 'Gelöscht';
$lang->approve->delayed       = 'Verspätet';
$lang->approve->product       = $lang->approve->products;
$lang->approve->readjustTime  = 'Start und Ende anpassen';
$lang->approve->readjustTask  = 'Fälligkeit der Aufgabe anpassen';
$lang->approve->effort        = 'Aufwand';
$lang->approve->relatedMember = 'Teammitglieder';
$lang->approve->watermark     = 'Exported by ZenTao';
$lang->approve->viewByUser    = 'By User';

$lang->approve->start    = 'Start';
$lang->approve->activate = 'Aktivieren';
$lang->approve->putoff   = 'Zurückstellen';
$lang->approve->suspend  = 'Aussetzen';
$lang->approve->close    = 'Schließen';
$lang->approve->export   = 'Export';

$lang->approve->typeList['sprint']    = 'Sprint';
$lang->approve->typeList['waterfall'] = 'Waterfall';
$lang->approve->typeList['ops']       = 'OPS';

$lang->approve->endList[7]   = '1 Woche';
$lang->approve->endList[14]  = '2 Wochen';
$lang->approve->endList[31]  = '1 Monat';
$lang->approve->endList[62]  = '2 Monate';
$lang->approve->endList[93]  = '3 Monate';
$lang->approve->endList[186] = '6 Monate';
$lang->approve->endList[365] = '1 Jahr';

$lang->team = new stdclass();
$lang->team->account    = 'Konto';
$lang->team->role       = 'Rolle';
$lang->team->join       = 'Beigetreten';
$lang->team->hours      = 'Stunde/Tag';
$lang->team->days       = 'Arbeitstage';
$lang->team->totalHours = 'Summe';

$lang->team->limited            = 'Eingeschränkte Benutzer';
$lang->team->limitedList['yes'] = 'Ja';
$lang->team->limitedList['no']  = 'Nein';

$lang->approve->basicInfo = 'Basis Info';
$lang->approve->otherInfo = 'Andere Info';

/* 字段取值列表。*/
$lang->approve->statusList['wait']      = 'Wartend';
$lang->approve->statusList['doing']     = 'In Arbeit';
$lang->approve->statusList['suspended'] = 'Ausgesetzt';
$lang->approve->statusList['closed']    = 'Geschlossen';

$lang->approve->aclList['open']    = "Standard (Benutzer mit Rechten für Projekte können zugreifen.)";
$lang->approve->aclList['private'] = "Privat (Nur Teammitglieder)";
$lang->approve->aclList['custom']  = 'Benutzerdefiniert (Teammitglieder und Whitelist Benutzer haben Zugriff.)';

/* 方法列表。*/
$lang->approve->index             = "Home";
$lang->approve->task              = 'Aufgaben';
$lang->approve->groupTask         = 'Nach Gruppen';
$lang->approve->story             = 'Storys';
$lang->approve->bug               = 'Bugs';
$lang->approve->dynamic           = 'Verlauf';
$lang->approve->latestDynamic     = 'Letzter Verlauf';
$lang->approve->build             = 'Builds';
$lang->approve->testtask          = 'Testaufgaben';
$lang->approve->burn              = 'Burndown';
$lang->approve->computeBurn       = 'Aktualisieren';
$lang->approve->burnData          = 'Burndown Daten';
$lang->approve->fixFirst          = 'Bearbeite Mannstunden des ersten Tags';
$lang->approve->team              = 'Teammitglieder';
$lang->approve->doc               = 'Dok';
$lang->approve->doclib            = 'Dok Bibliothek';
$lang->approve->manageProducts    = 'Verküpfe ' . $lang->productCommon;
$lang->approve->linkStory         = 'Link Stories';
$lang->approve->linkStoryByPlan   = 'Verküpfe Story aus Plan';
$lang->approve->linkPlan          = 'Verküpfe Plan';
$lang->approve->unlinkStoryTasks  = 'Verknüpfung aufheben';
$lang->approve->linkedProducts    = 'Verküpfte Produkte';
$lang->approve->unlinkedProducts  = 'Produkt verknüpfung aufheben';
$lang->approve->view              = "Übersicht";
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
$lang->approve->create            = "Erstelle Projekt";
$lang->approve->copy              = "Kopiere {$lang->approveCommon}";
$lang->approve->delete            = "Lösche";
$lang->approve->browse            = "Durchsuchen";
$lang->approve->edit              = "Bearbeiten";
$lang->approve->batchEdit         = "Mehere bearbeiten";
$lang->approve->manageMembers     = 'Teams verwalten';
$lang->approve->unlinkMember      = 'Mitgliefer entfernen';
$lang->approve->unlinkStory       = 'Story entfernen';
$lang->approve->unlinkStoryAB     = 'Unlink';
$lang->approve->batchUnlinkStory  = 'Mehere Storys entfernen';
$lang->approve->importTask        = 'Importiere Aufgaben';
$lang->approve->importPlanStories = 'Verknüpfe Story aus Plan';
$lang->approve->importBug         = 'Importiere Bugs';
$lang->approve->updateOrder       = 'Sortierung';
$lang->approve->tree              = 'Baum';
$lang->approve->treeTask          = 'Aufgabe anzeigen';
$lang->approve->treeStory         = 'Story anzeigen';
$lang->approve->treeOnlyTask      = 'Show Task Only';
$lang->approve->treeOnlyStory     = 'Show Story Only';
$lang->approve->storyKanban       = 'Story Kanban';
$lang->approve->storySort         = 'Story sortieren';
$lang->approve->importPlanStory   = '' . $lang->approveCommon . ' wurde erstellt!\nMöchten Sie Storys aus dem Plan importieren?';
$lang->approve->iteration         = 'Iteration';
$lang->approve->iterationInfo     = '%s Iterationen';
$lang->approve->viewAll           = 'Alle anzeigen';

/* 分组浏览。*/
$lang->approve->allTasks     = 'Alle';
$lang->approve->assignedToMe = 'Meine';
$lang->approve->myInvolved   = 'Beteiligt';

$lang->approve->statusSelects['']             = 'Mehr';
$lang->approve->statusSelects['wait']         = 'Wartend';
$lang->approve->statusSelects['doing']        = 'In Arbeit';
$lang->approve->statusSelects['undone']       = 'Undone';
$lang->approve->statusSelects['finishedbyme'] = 'Von mir abgeschlossen';
$lang->approve->statusSelects['done']         = 'Erledigt';
$lang->approve->statusSelects['closed']       = 'Geschlossen';
$lang->approve->statusSelects['cancel']       = 'Abgebrochen';

$lang->approve->groups['']           = 'Gruppen';
$lang->approve->groups['story']      = 'Nach Story';
$lang->approve->groups['status']     = 'Nach Status';
$lang->approve->groups['pri']        = 'Nach Priorität';
$lang->approve->groups['assignedTo'] = 'Nach Zuweisung an';
$lang->approve->groups['finishedBy'] = 'Nach abgeschlossen von';
$lang->approve->groups['closedBy']   = 'Nach geschlossen von';
$lang->approve->groups['type']       = 'Nach Typ';

$lang->approve->groupFilter['story']['all']         = $lang->approve->all;
$lang->approve->groupFilter['story']['linked']      = 'Aufgaben verknüpft mit Story';
$lang->approve->groupFilter['pri']['all']           = $lang->approve->all;
$lang->approve->groupFilter['pri']['noset']         = 'Not gesetzt';
$lang->approve->groupFilter['assignedTo']['undone'] = 'Unabgeschlossen';
$lang->approve->groupFilter['assignedTo']['all']    = $lang->approve->all;

$lang->approve->byQuery = 'Suche';

/* 查询条件列表。*/
$lang->approve->allProject      = "Alle {$lang->approveCommon}";
$lang->approve->aboveAllProduct = "Alle oberen {$lang->productCommon}";
$lang->approve->aboveAllProject = "Alle oberen {$lang->approveCommon}";

/* 页面提示。*/
$lang->approve->linkStoryByPlanTips = "This action will link all stories in this plan to the {$lang->approveCommon}.";
$lang->approve->selectProject       = "Auswahl {$lang->approveCommon}";
$lang->approve->beginAndEnd         = 'Dauer';
$lang->approve->begin               = 'Start';
$lang->approve->end                 = 'Ende';
$lang->approve->lblStats            = 'Mannstunden Summe(h) : ';
$lang->approve->stats               = '<strong>%s</strong> Verfügbar, <strong>%s</strong> geplant, <strong>%s</strong> genutzt, <strong>%s</strong> Rest.';
$lang->approve->taskSummary         = "Aufgaben auf dieser Seite: <strong>%s</strong> Total, <strong>%s</strong> Wartend, <strong>%s</strong> In Arbeit;  &nbsp;&nbsp;&nbsp;  Stunden : <strong>%s</strong> geplant., <strong>%s</strong> genutzt, <strong>%s</strong> Rest.";
$lang->approve->checkedSummary      = " <strong>%total%</strong> Geprüft, <strong>%wait%</strong> Wartend, <strong>%doing%</strong> In Arbeit;    Stunden: <strong>%estimate%</strong>  geplant, <strong>%consumed%</strong> genutzt, <strong>%left%</strong> Rest.";
$lang->approve->memberHoursAB       = "%s hat <strong>%s</strong> Stunden";
$lang->approve->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Arbeitsstunden</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Aufgaben</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">In Arbeit</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Wait</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->approve->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Geplant</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Genutzt</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Rest</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->groupSummaryAB      = "<div>Aufgaben <strong>%s</strong></div><div><span class='text-muted'>Wartend</span> %s &nbsp; <span class='text-muted'>In Arbeit</span> %s</div><div>Geplant <strong>%s</strong></div><div><span class='text-muted'>Genutzt</span> %s &nbsp; <span class='text-muted'>Rest</span> %s</div>";
$lang->approve->wbs                 = "Aufgaben aufteilen";
$lang->approve->batchWBS            = "Mehrere aufteilen";
$lang->approve->howToUpdateBurn     = "<a href='http://api.zentao.net/goto.php?item=burndown&lang=zh-cn' target='_blank' title='Wie wird der Burndown Chart aktualisiert?' class='btn btn-link'>Hilfe <i class='icon icon-help'></i></a>";
$lang->approve->whyNoStories        = "Keine Story kann verknüpft werden. Bitte prüfen Sie ob ein Story mit {$lang->approveCommon} verknüpft ist {$lang->productCommon} und stellen Sie sicher das diese geprüft ist.";
$lang->approve->productStories      = "{$lang->approveCommon} verknüpfte Story ist ein Subset von {$lang->productCommon}, welche nur nach überprüfung verknüpft werden kann. Bitte <a href='%s'> Story verknüpfen</a>。";
$lang->approve->haveDraft           = "There are %s draft stories can't be linked.";
$lang->approve->doneProjects        = 'Erledigt';
$lang->approve->selectDept          = 'Abteilung wählen';
$lang->approve->selectDeptTitle     = 'Abteilung wählen';
$lang->approve->copyTeam            = 'Team kopieren';
$lang->approve->copyFromTeam        = "Kopieren von {$lang->approveCommon} Team: <strong>%s</strong>";
$lang->approve->noMatched           = "$lang->approveCommon mit '%s' konnte nicht gefunden werden.";
$lang->approve->copyTitle           = "Wählen Sie ein {$lang->approveCommon} zum Kopieren.";
$lang->approve->copyTeamTitle       = "Wählen Sie ein {$lang->approveCommon} Team zum Kopieren.";
$lang->approve->copyNoProject       = "{$lang->approveCommon} kann nicht kopiert werden.";
$lang->approve->copyFromProject     = "Kopie von {$lang->approveCommon} <strong>%s</strong>";
$lang->approve->cancelCopy          = 'Kopieren abbrechen';
$lang->approve->byPeriod            = 'Nach Zeit';
$lang->approve->byUser              = 'Nach Benutzer';
$lang->approve->noApprove           = 'Keine Projekte. ';
$lang->approve->noMembers           = 'Keine Mitglieder. ';

/* 交互提示。*/
$lang->approve->confirmDelete         = "Möchten Sie {$lang->approveCommon}[%s] löschen?";
$lang->approve->confirmUnlinkMember   = "Möchten Sie den Benutzer vom {$lang->approveCommon} entfernen?";
$lang->approve->confirmUnlinkStory    = "Möchten Sie die Story vom {$lang->approveCommon} entfernen?";
$lang->approve->errorNoLinkedProducts = "Kein verknüpftes {$lang->productCommon} in {$lang->approveCommon} gefunden. Sie werden auf die {$lang->productCommon} Seite geleitet.";
$lang->approve->errorSameProducts     = "{$lang->approveCommon} Kann nicht mit mehreren identischen {$lang->productCommon} verknüpft werden";
$lang->approve->accessDenied          = "Zugriff zu {$lang->approveCommon} verweigert!";
$lang->approve->tips                  = 'Hinweis';
$lang->approve->afterInfo             = "{$lang->approveCommon} wurde erstellt. Als nächstes können Sie ";
$lang->approve->setTeam               = 'Team setzen';
$lang->approve->linkStory             = 'Storys verküpfen';
$lang->approve->createTask            = 'Aufgaben erstellen';
$lang->approve->goback                = "Zurückkehren";
$lang->approve->noweekend             = 'Ohne Wochenende';
$lang->approve->withweekend           = 'Mit Wochenende';
$lang->approve->interval              = 'Intervale ';
$lang->approve->fixFirstWithLeft      = 'Modify the left';

$lang->approve->action = new stdclass();
$lang->approve->action->opened  = '$date, created by <strong>$actor</strong> .' . "\n";
$lang->approve->action->managed = '$date, managed by <strong>$actor</strong> .' . "\n";
$lang->approve->action->extra   = "The linked {$lang->productCommon}s are %s.";

/* 统计。*/
$lang->approve->charts = new stdclass();
$lang->approve->charts->burn = new stdclass();
$lang->approve->charts->burn->graph = new stdclass();
$lang->approve->charts->burn->graph->caption      = "Burndown";
$lang->approve->charts->burn->graph->xAxisName    = "Datum";
$lang->approve->charts->burn->graph->yAxisName    = "Stunde";
$lang->approve->charts->burn->graph->baseFontSize = 12;
$lang->approve->charts->burn->graph->formatNumber = 0;
$lang->approve->charts->burn->graph->animation    = 0;
$lang->approve->charts->burn->graph->rotateNames  = 1;
$lang->approve->charts->burn->graph->showValues   = 0;
$lang->approve->charts->burn->graph->reference    = 'Referenz';
$lang->approve->charts->burn->graph->actuality    = 'Aktualität';

$lang->approve->placeholder = new stdclass();
$lang->approve->placeholder->code      = 'Abkurzung des Projektnamens';
$lang->approve->placeholder->totalLeft = 'Schätzungen zu Beginn des Projekts.';

$lang->approve->selectGroup = new stdclass();
$lang->approve->selectGroup->done = '(Erledigt)';

$lang->approve->orderList['order_asc']  = "Aufsteigend";
$lang->approve->orderList['order_desc'] = "Absteigend";
$lang->approve->orderList['pri_asc']    = "Priorität Auf.";
$lang->approve->orderList['pri_desc']   = "Priorität Ab.";
$lang->approve->orderList['stage_asc']  = "Phase Auf.";
$lang->approve->orderList['stage_desc'] = "Phase Ab.";

$lang->approve->kanban        = "Kanban";
$lang->approve->kanbanSetting = "Kanban Einstellung";
$lang->approve->resetKanban   = "Einstellungen zurücksetzen";
$lang->approve->printKanban   = "Kanban drucken";
$lang->approve->bugList       = "Bugs";

$lang->approve->kanbanHideCols   = 'Geschlossene und abgebrochene Spalten in Kanban verstecken';
$lang->approve->kanbanShowOption = 'Aufklappen';
$lang->approve->kanbanColsColor  = 'Spaltenfarben';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Möchten Sie die Einstellungen des Kanbans zurücksetzen?';
$lang->kanbanSetting->optionList['0'] = 'Verstecken';
$lang->kanbanSetting->optionList['1'] = 'Anzeigen';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Kanban drucken';
$lang->printKanban->content = 'Inhanlt';
$lang->printKanban->print   = 'Drucken';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'Alle';
$lang->printKanban->typeList['increment'] = 'Erhöhen';

$lang->approve->featureBar['task']['all']          = $lang->approve->allTasks;
$lang->approve->featureBar['task']['unclosed']     = $lang->approve->unclosed;
$lang->approve->featureBar['task']['assignedtome'] = $lang->approve->assignedToMe;
$lang->approve->featureBar['task']['myinvolved']   = $lang->approve->myInvolved;
$lang->approve->featureBar['task']['delayed']      = 'Verspätet';
$lang->approve->featureBar['task']['needconfirm']  = 'Story geändert';
$lang->approve->featureBar['task']['status']       = $lang->approve->statusSelects[''];

$lang->approve->featureBar['all']['all']       = $lang->approve->all;
$lang->approve->featureBar['all']['undone']    = $lang->approve->undone;
$lang->approve->featureBar['all']['wait']      = $lang->approve->statusList['wait'];
$lang->approve->featureBar['all']['doing']     = $lang->approve->statusList['doing'];
$lang->approve->featureBar['all']['suspended'] = $lang->approve->statusList['suspended'];
$lang->approve->featureBar['all']['closed']    = $lang->approve->statusList['closed'];

$lang->approve->treeLevel = array();
$lang->approve->treeLevel['all']   = 'Alle aufklappen';
$lang->approve->treeLevel['root']  = 'Alle zuklappen';
$lang->approve->treeLevel['task']  = 'Aufgabe anzeigen';
$lang->approve->treeLevel['story'] = 'Story anzeigen';

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->approve->groups['story']);
    unset($lang->approve->featureBar['task']['needconfirm']);
}
