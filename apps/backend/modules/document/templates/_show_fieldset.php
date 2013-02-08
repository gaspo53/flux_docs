
<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Name', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo get_partial('document/name_path_link', array('type' => 'list', 'document' => $document)) ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Upload date', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo false !== strtotime($document->getCreatedAt()) ? format_date($document->getCreatedAt(), "f") : '&nbsp;' ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Owner', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $document->getSfGuardUser() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Description', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $document->getDescription() ?></div>
  </div>
</div>

<div class="control-group sf_admin_row">
  <label class="control-label"><?php echo __('Group', array(),'messages') ?></label>
  <div class="controls">
    <div class="input-plain"><?php echo $document->getSfGuardGroup() ?></div>
  </div>
</div>
