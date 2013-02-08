<?php use_helper('I18N'); ?>

<div class="fRight">
            <?php echo $helper->linkToNew(array(  'params' =>   array(  ),  'class_suffix' => 'new',  'label' => 'New',)) ?>
        </div>

  <div id="modal-more-filters" class="modal hide fade modal-filters">

    <?php if ($filters->hasGlobalErrors()): ?>
      <?php echo $filters->renderGlobalErrors() ?>
    <?php endif; ?>

    <form action="<?php echo url_for('document_collection', array('action' => 'filter')) ?>" method="post">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3><?php echo __('More filters') ?></h3>
      </div>
      <div class="modal-body">
        <table class="table" cellspacing="0">
          <tbody>
            <?php foreach ($configuration->getFormFilterFields($filters) as $name => $field): ?>
            <?php if ((isset($filters[$name]) && $filters[$name]->isHidden()) || (!isset($filters[$name]) && $field->isReal())) continue ?>
              <?php include_partial('document/filters_field_modal', array(
                'name'       => $name,
                'attributes' => $field->getConfig('attributes', array('class' => sfTwitterBootstrap::guessLengthFromType($field->getType()))),
                'label'      => $field->getConfig('label'),
                'help'       => $field->getConfig('help'),
                'form'       => $filters,
                'field'      => $field,
              )) ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <?php echo $filters->renderHiddenFields() ?>
        <a id="close-modal-filters" href="#" class="btn btn-info"><?php echo __('Close window') ?></a>
        <?php echo link_to(__('Reset', array(), 'sf_admin'), 'document_collection', array('action' => 'filter'), array('class' => 'btn', 'query_string' => '_reset', 'method' => 'post')) ?>
        <input type="submit" class="btn btn-primary" value="<?php echo __('Filter', array(), 'sf_admin') ?>" />
      </div>
    </form>
  </div>

  <?php
    $icon = '';
    if(sfTwitterBootstrap::getProperty('use_icons_in_button', false))
    {
      $icon = '<i class="icon-plus-sign icon-white"></i> ';
    }
  ?>

  <div class="fRight" style="margin-right: 4px">
    <a id="more-filters" href="#more-filters" class="btn btn-info"><?php echo $icon . __('More filters') ?></a>
  </div>

<div class="modal hide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><?php echo __('Document') ?></h3>
      </div>
      <div class="modal-body">
        <!-- content will be loaded here -->
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo __('Close') ?></button>
      </div>
    </div>

