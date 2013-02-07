<td>
  <ul class="table-action">
    <a data-toggle="modal" href="<?php echo url_for("document/show?id=".$document->getId()) ?>" data-target="#myModal"><i class="icon icon-search"></i><? echo __('Show') ?></a> 
    <?php echo $helper->linkToEdit($document, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($document, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>


