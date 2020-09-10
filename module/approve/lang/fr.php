<?php
/**
 * The project module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.pm
 */
/* Fields. */
$lang->approve->common        = $lang->approveCommon;
$lang->approve->allProjects   = 'Tous les ' . $lang->approveCommon . 's';
$lang->approve->id            = $lang->approveCommon . ' ID';
$lang->approve->type          = 'Type';
$lang->approve->name          = "Nom du {$lang->approveCommon}";
$lang->approve->code          = 'Code';
$lang->approve->statge        = 'Stage';
$lang->approve->pri           = 'Priority';
$lang->approve->openedBy      = 'OpenedBy';
$lang->approve->openedDate    = 'OpenedDate';
$lang->approve->closedBy      = 'ClosedBy';
$lang->approve->closedDate    = 'ClosedDate';
$lang->approve->canceledBy    = 'CanceledBy';
$lang->approve->canceledDate  = 'CanceledDate';
$lang->approve->begin         = 'Début';
$lang->approve->end           = 'Fin';
$lang->approve->dateRange     = 'Durée';
$lang->approve->to            = 'à';
$lang->approve->days          = 'Budget Jours';
$lang->approve->day           = ' Jours';
$lang->approve->workHour      = ' Heures';
$lang->approve->totalHours    = 'Budget (Heure)';
$lang->approve->totalDays     = 'Budget (Jour)';
$lang->approve->status        = 'Statut';
$lang->approve->subStatus     = 'Sub Status';
$lang->approve->desc          = 'Description';
$lang->approve->owner         = 'Propriétaire';
$lang->approve->PO            = "Propriétaire {$lang->approveCommon}";
$lang->approve->PM            = "Directeur {$lang->approveCommon}";
$lang->approve->QD            = 'Quality Manager';
$lang->approve->RD            = 'Release Manager';
$lang->approve->qa            = 'QA';
$lang->approve->release       = 'Release';
$lang->approve->acl           = "Contrôle d'accès";
$lang->approve->teamname      = "Nom de l'équipe";
$lang->approve->order         = "Rang du {$lang->approveCommon}";
$lang->approve->orderAB       = "Rang";
$lang->approve->products      = "{$lang->productCommon} liés";
$lang->approve->whitelist     = 'Liste Blanche';
$lang->approve->totalEstimate = 'Estimé';
$lang->approve->totalConsumed = 'Coût';
$lang->approve->totalLeft     = 'Reste';
$lang->approve->progress      = ' Progrès';
$lang->approve->hours         = 'Estimé: %s, Coût: %s, Reste: %s.';
$lang->approve->viewBug       = 'Bugs';
$lang->approve->noProduct     = "Aucun {$lang->productCommon} pour l'instant.";
$lang->approve->createStory   = "Créer une Story";
$lang->approve->all           = "Tous les {$lang->approveCommon}s";
$lang->approve->undone        = 'Non Terminé';
$lang->approve->unclosed      = 'Non Fermées';
$lang->approve->typeDesc      = "Aucune story, bug, build, test, ou graph d'atterrissage n'est disponible";
$lang->approve->mine          = 'A Moi: ';
$lang->approve->other         = 'Autres:';
$lang->approve->deleted       = 'Supprimé';
$lang->approve->delayed       = 'Ajourné';
$lang->approve->product       = $lang->approve->products;
$lang->approve->readjustTime  = "Adjuster Début et Fin du {$lang->approveCommon}";
$lang->approve->readjustTask  = 'Adjuster Début et Fin de la Tâche';
$lang->approve->effort        = 'Effort';
$lang->approve->relatedMember = 'Equipe';
$lang->approve->watermark     = 'Exporté par ZenTao';
$lang->approve->viewByUser    = 'Par Utilisateur';

$lang->approve->start    = 'Démarrer';
$lang->approve->activate = 'Activer';
$lang->approve->putoff   = 'Ajourner';
$lang->approve->suspend  = 'Suspendre';
$lang->approve->close    = 'Fermer';
$lang->approve->export   = 'Exporter';

$lang->approve->typeList['sprint']    = 'Sprint';
$lang->approve->typeList['waterfall'] = 'En Cascade';
$lang->approve->typeList['ops']       = 'OPS';

$lang->approve->endList[7]   = '1 Semaine';
$lang->approve->endList[14]  = '2 Semaines';
$lang->approve->endList[31]  = '1 Mois';
$lang->approve->endList[62]  = '2 Mois';
$lang->approve->endList[93]  = '3 Mois';
$lang->approve->endList[186] = '6 Mois';
$lang->approve->endList[365] = '1 Année';

$lang->team = new stdclass();
$lang->team->account    = 'Utilisateur';
$lang->team->role       = 'Rôle';
$lang->team->join       = 'Ajouté';
$lang->team->hours      = 'Heure/jour';
$lang->team->days       = 'Jour';
$lang->team->totalHours = 'Total Heures';

$lang->team->limited            = 'Restrictions';
$lang->team->limitedList['yes'] = 'Oui';
$lang->team->limitedList['no']  = 'Non';

$lang->approve->basicInfo = 'Informations de base';
$lang->approve->otherInfo = 'Autres Informations';

/* 字段取值列表。*/
$lang->approve->statusList['wait']      = 'En attente';
$lang->approve->statusList['doing']     = 'En cours';
$lang->approve->statusList['suspended'] = 'Suspendu';
$lang->approve->statusList['closed']    = 'Fermé';

$lang->approve->aclList['open']    = "Défaut (les utilisateurs qui peuvent consulter l'onglet {$lang->approveCommon} peuvent y accéder.)";
$lang->approve->aclList['private'] = "Privé (réservé aux membres de l'équipe.)";
$lang->approve->aclList['custom']  = "Liste blanche (seuls les membres de l'équipe et de la Liste Blanche peuvent y accéder.)";

/* 方法列表。 Méthode List */
$lang->approve->index             = "Accueil {$lang->approveCommon}";
$lang->approve->task              = 'Liste Tâches';
$lang->approve->groupTask         = 'Vision Groupée';
$lang->approve->story             = 'Liste Stories';
$lang->approve->bug               = 'Liste Bugs';
$lang->approve->dynamic           = 'Historique';
$lang->approve->latestDynamic     = 'Historique';
$lang->approve->build             = 'Liste Builds';
$lang->approve->testtask          = 'Recette';
$lang->approve->burn              = ' Atterrissage';
$lang->approve->computeBurn       = 'Calculer';
$lang->approve->burnData          = "Données d'atterrissage";
$lang->approve->fixFirst          = 'Fixer 1er-Jour Estimation';
$lang->approve->team              = 'Membres';
$lang->approve->doc               = 'Documents';
$lang->approve->doclib            = 'Répertoire de Documents';
$lang->approve->manageProducts    = 'Liaisons du ' . $lang->approveCommon . ' avec les ' . $lang->productCommon . 's';
$lang->approve->linkStory         = 'Stories liées';
$lang->approve->linkStoryByPlan   = 'Stories liées par Plan';
$lang->approve->linkPlan          = 'Plans liés';
$lang->approve->unlinkStoryTasks  = 'Dissocier';
$lang->approve->linkedProducts    = "{$lang->productCommon}s liés à ce {$lang->approveCommon}";
$lang->approve->unlinkedProducts  = "{$lang->productCommon}s dissociés de ce {$lang->approveCommon}";
$lang->approve->view              = "Détail du {$lang->approveCommon}";
$lang->approve->startAction       = "Commencer le {$lang->approveCommon}";
$lang->approve->activateAction    = "Activer le {$lang->approveCommon}";
$lang->approve->delayAction       = "Ajourner le {$lang->approveCommon}";
$lang->approve->suspendAction     = "Suspendre le {$lang->approveCommon}";
$lang->approve->closeAction       = "Fermer le {$lang->approveCommon}";
$lang->approve->testtaskAction    = "Recettes du {$lang->approveCommon}";
$lang->approve->teamAction        = "Membres du {$lang->approveCommon}";
$lang->approve->kanbanAction      = "Kaban {$lang->approveCommon}";
$lang->approve->printKanbanAction = "Imprimer le Kanban";
$lang->approve->treeAction        = "Arborescence {$lang->approveCommon}";
$lang->approve->exportAction      = "Exporter {$lang->approveCommon}";
$lang->approve->computeBurnAction = "Calculer Atterrissage";
$lang->approve->create            = "Créer {$lang->approveCommon}";
$lang->approve->copy              = "Copier {$lang->approveCommon}";
$lang->approve->delete            = "Supprimer {$lang->approveCommon}";
$lang->approve->browse            = "Liste du {$lang->approveCommon}";
$lang->approve->edit              = "Editer {$lang->approveCommon}";
$lang->approve->batchEdit         = "Edition par lot";
$lang->approve->manageMembers     = 'Organiser Equipe';
$lang->approve->unlinkMember      = 'Retirer le membre';
$lang->approve->unlinkStory       = 'Dissocier Story';
$lang->approve->unlinkStoryAB     = 'Dissocier';
$lang->approve->batchUnlinkStory  = 'Dissocier Stories par lot';
$lang->approve->importTask        = 'Transfert Tâche';
$lang->approve->importPlanStories = 'Lier Stories Par Plan';
$lang->approve->importBug         = 'Importer Bug';
$lang->approve->updateOrder       = "Rang {$lang->approveCommon}";
$lang->approve->tree              = 'Arboressence';
$lang->approve->treeTask          = 'Seulement les Tâches';
$lang->approve->treeStory         = 'Seulement les Stories';
$lang->approve->treeOnlyTask      = 'Seulement les Tâches';
$lang->approve->treeOnlyStory     = 'Seulement les Stories';
$lang->approve->storyKanban       = 'Story Kanban';
$lang->approve->storySort         = 'Rang Story';
$lang->approve->importPlanStory   = $lang->approveCommon . ' est créé!\nVoulez-vous importer des stories qui ont été ajoutées au Plan ?';
$lang->approve->iteration         = 'Itérations';
$lang->approve->iterationInfo     = '%s Itérations';
$lang->approve->viewAll           = 'Voir Tout';

/* 分组浏览。*/
$lang->approve->allTasks     = 'Voir Toutes';
$lang->approve->assignedToMe = 'à Moi';
$lang->approve->myInvolved   = "Où j'ai participé";

$lang->approve->statusSelects['']             = 'Plus...';
$lang->approve->statusSelects['wait']         = 'En Attente';
$lang->approve->statusSelects['doing']        = 'En Cours';
$lang->approve->statusSelects['undone']       = 'Unfinished';
$lang->approve->statusSelects['finishedbyme'] = 'Terminées par moi';
$lang->approve->statusSelects['done']         = 'Faites';
$lang->approve->statusSelects['closed']       = 'Fermées';
$lang->approve->statusSelects['cancel']       = 'Annulées';

$lang->approve->groups['']           = 'Vision groupée';
$lang->approve->groups['story']      = 'Grouper par Story';
$lang->approve->groups['status']     = 'Grouper par Statut';
$lang->approve->groups['pri']        = 'Grouper par Priorité';
$lang->approve->groups['assignedTo'] = 'Grouper par Assignation';
$lang->approve->groups['finishedBy'] = 'Grouper par Finisseur';
$lang->approve->groups['closedBy']   = 'Grouper par Clôtureur';
$lang->approve->groups['type']       = 'Grouper par Type';

$lang->approve->groupFilter['story']['all']         = 'Toutes';
$lang->approve->groupFilter['story']['linked']      = 'Tâches lies à des stories';
$lang->approve->groupFilter['pri']['all']           = 'Toutes';
$lang->approve->groupFilter['pri']['noset']         = 'Non Spécifiée';
$lang->approve->groupFilter['assignedTo']['undone'] = 'Non Terminées';
$lang->approve->groupFilter['assignedTo']['all']    = 'Toutes';

$lang->approve->byQuery = 'Recherche';

/* 查询条件列表。*/
$lang->approve->allProject      = "Tous les {$lang->approveCommon}s";
$lang->approve->aboveAllProduct = "Tous les {$lang->productCommon}s dépendants";
$lang->approve->aboveAllProject = "Tous les {$lang->approveCommon}s dépendants";

/* 页面提示。*/
$lang->approve->linkStoryByPlanTips = "Cette action va lier toutes les stories incluses dans le plan à ce {$lang->approveCommon}.";
$lang->approve->selectProject       = "Sélectionner {$lang->approveCommon}";
$lang->approve->beginAndEnd         = 'Durée';
$lang->approve->begin               = 'Début';
$lang->approve->end                 = 'Fin';
$lang->approve->lblStats            = 'Efforts';
$lang->approve->stats               = 'Disponible: <strong>%s</strong>(h). Estimé: <strong>%s</strong>(h). Coût: <strong>%s</strong>(h). Reste: <strong>%s</strong>(h).';
$lang->approve->taskSummary         = "Total des tâches de cette page :<strong>%s</strong>. A Faire: <strong>%s</strong>. En cours: <strong>%s</strong>. &nbsp;&nbsp;&nbsp; Estimé: <strong>%s</strong>(h). Coût: <strong>%s</strong>(h). Reste: <strong>%s</strong>(h).";
$lang->approve->checkedSummary      = "Sélectionné: <strong>%total%</strong>. A Faire: <strong>%wait%</strong>. En cours: <strong>%doing%</strong>. &nbsp;&nbsp;&nbsp; Estimé: <strong>%estimate%</strong>(h). Coût: <strong>%consumed%</strong>(h). Reste: <strong>%left%</strong>(h).";
$lang->approve->memberHoursAB       = "%s a <strong>%s</ strong> heures.";
$lang->approve->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Heures Disponibles</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tâches</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">En Cours</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">A Faire</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->approve->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Estimé</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Coût</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Reste</div><div class="segment-value">%s</div></div></div></div>';
$lang->approve->groupSummaryAB      = "<div>Tâches <strong>%s ：</strong><span class='text-muted'>A Faire</span> %s &nbsp; <span class='text-muted'>En Cours</span> %s</div><div>Estimé <strong>%s ：</strong><span class='text-muted'>Coût</span> %s &nbsp; <span class='text-muted'>Reste</span> %s</div>";
$lang->approve->wbs                 = "Créer Tâche";
$lang->approve->batchWBS            = "Créer Tâche en lot";
$lang->approve->howToUpdateBurn     = "<a href='https://api.zentao.pm/goto.php?item=burndown' target='_blank' title='Comment mettre à jour le Graphe d´atterrissage ?' class='btn btn-link'>Mise à jour <i class='icon icon-help'></i></a>";
$lang->approve->whyNoStories        = "Aucune story ne peut être associée. Vérifiez s'il existe des stories dans {$lang->approveCommon} qui sont associées à {$lang->productCommon} et vérifiez qu'elles ont bien été validées.";
$lang->approve->productStories      = "Les stories associées au {$lang->approveCommon} sont une portion des stories associées au {$lang->productCommon}. Les stories ne peuvent être associées à un {$lang->approveCommon} qu'après avoir été validées. <a href='%s'> Associer Stories</a> maintenant.";
$lang->approve->haveDraft           = "%s stories sont encore en conception, elles ne peuvent pas être associées au {$lang->approveCommon} actuellement.";
$lang->approve->doneProjects        = 'Terminé';
$lang->approve->selectDept          = 'Sélection Compartiment';
$lang->approve->selectDeptTitle     = 'Sélection Utilisateur';
$lang->approve->copyTeam            = 'Copier Equipe';
$lang->approve->copyFromTeam        = "Copié de l'Equipe {$lang->approveCommon} : <strong>%s</strong>";
$lang->approve->noMatched           = "Aucun $lang->approveCommon inclus '%s' ne peut être trouvé.";
$lang->approve->copyTitle           = "Choisissez un {$lang->approveCommon} à copier.";
$lang->approve->copyTeamTitle       = "Choisissez une Equipe {$lang->approveCommon} à copier.";
$lang->approve->copyNoProject       = "Aucun {$lang->approveCommon} ne peut être copié.";
$lang->approve->copyFromProject     = "Copié du {$lang->approveCommon} <strong>%s</strong>";
$lang->approve->cancelCopy          = 'Annuler la copie';
$lang->approve->byPeriod            = 'Par Temps';
$lang->approve->byUser              = 'Par Utilisateur';
$lang->approve->noApprove           = "Aucun {$lang->approveCommon}. ";
$lang->approve->noMembers           = "Actuellement il n'y a aucun membre dans l'équipe. On ne va pas aller loin... ";

/* 交互提示。*/
$lang->approve->confirmDelete         = "Voulez-vous réellement supprimer le {$lang->approveCommon}[%s] ?";
$lang->approve->confirmUnlinkMember   = "Voulez-vous retirer cet utilisateur du {$lang->approveCommon} ?";
$lang->approve->confirmUnlinkStory    = "Voulez-vous retirer cette Story du {$lang->approveCommon} ?";
$lang->approve->errorNoLinkedProducts = "Aucun {$lang->productCommon} n'est associé à ce {$lang->approveCommon}. Vous allez être redirigé vers la page {$lang->productCommon} pour en associer un.";
$lang->approve->errorSameProducts     = "Ce {$lang->approveCommon} ne peut pas être associé deux fois au même {$lang->productCommon}. Imaginez un peu les résultats !";
$lang->approve->accessDenied          = "Votre accès au {$lang->approveCommon} est refusé ! Désolé.";
$lang->approve->tips                  = 'Note';
$lang->approve->afterInfo             = "Le {$lang->approveCommon} a été créé avec succès ! Ensuite vous pouvez ";
$lang->approve->setTeam               = "Composer l'Equipe";
$lang->approve->linkStory             = 'Associer Story';
$lang->approve->createTask            = 'Créer des Tâches';
$lang->approve->goback                = "Revenir en arrière";
$lang->approve->noweekend             = 'Exclure les Weekends';
$lang->approve->withweekend           = 'Inclure les Weekends';
$lang->approve->interval              = 'Intervals';
$lang->approve->fixFirstWithLeft      = 'Mettre à jour les heures également';

$lang->approve->action = new stdclass();
$lang->approve->action->opened  = '$date, créée par <strong>$actor</strong> .' . "\n";
$lang->approve->action->managed = '$date, gérée par <strong>$actor</strong> .' . "\n";
$lang->approve->action->extra   = "Les {$lang->productCommon}s associés sont %s.";

/* 统计。*/
$lang->approve->charts = new stdclass();
$lang->approve->charts->burn = new stdclass();
$lang->approve->charts->burn->graph = new stdclass();
$lang->approve->charts->burn->graph->caption      = " Graph d'atterrissage";
$lang->approve->charts->burn->graph->xAxisName    = "Date";
$lang->approve->charts->burn->graph->yAxisName    = "Heure";
$lang->approve->charts->burn->graph->baseFontSize = 12;
$lang->approve->charts->burn->graph->formatNumber = 0;
$lang->approve->charts->burn->graph->animation    = 0;
$lang->approve->charts->burn->graph->rotateNames  = 1;
$lang->approve->charts->burn->graph->showValues   = 0;
$lang->approve->charts->burn->graph->reference    = 'Idéal';
$lang->approve->charts->burn->graph->actuality    = 'Actuel';

$lang->approve->placeholder = new stdclass();
$lang->approve->placeholder->code      = "Abréviation du nom du {$lang->approveCommon}";
$lang->approve->placeholder->totalLeft = "Heures estimées le premier jour du {$lang->approveCommon}.";

$lang->approve->selectGroup = new stdclass();
$lang->approve->selectGroup->done = '(Fait)';

$lang->approve->orderList['order_asc']  = "Story Rang Ascendant";
$lang->approve->orderList['order_desc'] = "Story Rang Descendant";
$lang->approve->orderList['pri_asc']    = "Story Priorité Ascendante";
$lang->approve->orderList['pri_desc']   = "Story Priorité Descendante";
$lang->approve->orderList['stage_asc']  = "Story Phase Ascendante";
$lang->approve->orderList['stage_desc'] = "Story Phase Descendante";

$lang->approve->kanban        = "Kanban";
$lang->approve->kanbanSetting = "Paramétrage";
$lang->approve->resetKanban   = "Réinitialiser";
$lang->approve->printKanban   = "Impression";
$lang->approve->bugList       = "Bugs";

$lang->approve->kanbanHideCols   = 'Colomnes masquées';
$lang->approve->kanbanShowOption = 'Unfold';
$lang->approve->kanbanColsColor  = 'Personnalisation Couleurs';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Voulez-vous réinitialiser le tableau Kanban ?';
$lang->kanbanSetting->optionList['0'] = 'Masquer';
$lang->kanbanSetting->optionList['1'] = 'Montrer';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Imprimer Kanban';
$lang->printKanban->content = 'Contenu';
$lang->printKanban->print   = 'Imprimer';

$lang->printKanban->taskStatus = 'Statut';

$lang->printKanban->typeList['all']       = 'Tout';
$lang->printKanban->typeList['increment'] = 'Incrément';

$lang->approve->featureBar['task']['all']          = $lang->approve->allTasks;
$lang->approve->featureBar['task']['unclosed']     = $lang->approve->unclosed;
$lang->approve->featureBar['task']['assignedtome'] = $lang->approve->assignedToMe;
$lang->approve->featureBar['task']['myinvolved']   = $lang->approve->myInvolved;
$lang->approve->featureBar['task']['delayed']      = 'Ajournées';
$lang->approve->featureBar['task']['needconfirm']  = 'A confirmer';
$lang->approve->featureBar['task']['status']       = $lang->approve->statusSelects[''];

$lang->approve->featureBar['all']['all']       = $lang->approve->all;
$lang->approve->featureBar['all']['undone']    = $lang->approve->undone;
$lang->approve->featureBar['all']['wait']      = $lang->approve->statusList['wait'];
$lang->approve->featureBar['all']['doing']     = $lang->approve->statusList['doing'];
$lang->approve->featureBar['all']['suspended'] = $lang->approve->statusList['suspended'];
$lang->approve->featureBar['all']['closed']    = $lang->approve->statusList['closed'];

$lang->approve->treeLevel = array();
$lang->approve->treeLevel['all']   = 'Déplier Tout';
$lang->approve->treeLevel['root']  = 'Masquer Tout';
$lang->approve->treeLevel['task']  = 'Stories&Tâches';
$lang->approve->treeLevel['story'] = 'Seulement Stories';

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->approve->groups['story']);
    unset($lang->approve->featureBar['task']['needconfirm']);
}
