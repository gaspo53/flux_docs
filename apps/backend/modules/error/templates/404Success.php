    <?php use_helper('I18N') ?>

  <div id="wrap">

      <div class="container">
        <div class="page-header">
          <h1 class="alert alert-error">404! Where did you want to go?</h1>
        </div>
        <p class="lead"><?php echo __('You have provided a malformed url') ?>.</p>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit"><?php echo sfConfig::get('app_project_name') ?> <a href="<?php echo sfConfig::get('app_author_site') ?>"><?php echo sfConfig::get('app_author_name') ?></a>.</p>
      </div>
    </div>
