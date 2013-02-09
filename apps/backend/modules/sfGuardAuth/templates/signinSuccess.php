<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>

    <?php include_javascripts() ?>
    
    <?php use_helper('I18N') ?>
    <title><?php echo sfConfig::get("app_project_name") ?></title>
    <link rel="shortcut icon" href="/img/favicon.ico" />
    
  </head>
  <body>

      <div class="container">

        <form class="form-signin" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
          <h2 class="form-signin-heading"><?php echo __('Please sign in') ?></h2>
          <?php echo $form ?>          
          <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        </form>

      </div>
  </body>
</html>
