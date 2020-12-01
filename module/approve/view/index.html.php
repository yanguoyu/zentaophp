<?php
/**
 * The html template file of index method of index module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: index.html.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php if(empty($projects)):?>
<div class="table-empty-tip">
  <p>
    <span class="text-muted"><?php echo $lang->approve->noApprove;?></span>
  </p>
</div>
<?php else:?>
<?php echo $this->fetch('block', 'dashboard', 'module=approve');?>
<?php endif;?>
<?php include '../../common/view/footer.html.php';?>
