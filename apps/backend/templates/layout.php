<!DOCTYPE html>
<html lang="en">  
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    
    <?php use_helper('I18N') ?>
    
    <meta name="author" content="<?php echo sfConfig::get("app_author_name") ?>">

    <link rel="shortcut icon" href="/img/favicon.ico" />
    
  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo url_for("default/index") ?>"><?php echo sfConfig::get("app_project_name") ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo url_for("document/index") ?>"><?php echo __("Documents") ?></a></li>
              <li><a href="<?php echo url_for("users/index") ?>"><?php echo __("Users") ?></a></li>
              <li><a href="<?php echo url_for("groups/index") ?>"><?php echo __("User Groups") ?></a></li>
              <li><a href="<?php echo url_for("document_type/index") ?>"><?php echo __("Document Types") ?></a></li>
            </ul>
            <?php if ($sf_user->isAuthenticated()): ?>
                    <p class="logout pull-right">
                      <?php echo link_to('<i class="icon-off icon-white"></i>', sfTwitterBootstrap::getProperty('logout_route'), array('title' => __('Logout'))) ?>
                    </p>
                    <p class="logged pull-right">
                      <i class="icon-user icon-white"></i>&nbsp;
                      <?php echo __('Logged in as') ?> <a href="#"><?php echo $sf_user->__toString(); ?></a>
                    </p>
            <?php endif; // if user is authenticated ?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <?php echo $sf_content ?>
    </div>

  </body>
</html>
