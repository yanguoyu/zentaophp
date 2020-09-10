<div style='margin: 0 auto; max-width: 400px'>
  <p><strong><?php echo $lang->approve->afterInfo;?></strong></p>
  <div>
    <?php echo html::a($this->createLink('project', 'team', "projectID=$projectID"), $lang->approve->setTeam, '', "class='btn'");?>
    <?php if($config->global->flow != 'onlyTask' && $project->type != 'ops') echo html::a($this->createLink('project', 'linkstory', "projectID=$projectID"), $lang->approve->linkStory, '', "class='btn'");?>
    <?php echo html::a($this->createLink('task', 'create', "project=$projectID"), $lang->approve->createTask, '', "class='btn'");?>
    <?php echo html::a($this->createLink('project', 'task', "projectID=$projectID"), $lang->approve->goback, '', "class='btn'");?>
  </div>
</div>
