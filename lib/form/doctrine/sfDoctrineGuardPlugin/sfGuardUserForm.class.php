<?php

/**
 * sfGuardUser form.
 *
 * @package    flux_docs
 * @subpackage form
 * @author     Gaspar Rajoy
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
    unset($this['created_at'],$this['updated_at']);
    
    $this->setWidget('password', new sfWidgetFormInputPassword(array()));

  }
}
