<?php

/**
 * sfGuardGroup form.
 *
 * @package    flux_docs
 * @subpackage form
 * @author     Gaspar Rajoy
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardGroupForm extends PluginsfGuardGroupForm
{
  public function configure()
  {
    $this->setValidator('name', new sfValidatorString(array('required' => true)));    
  }
}
