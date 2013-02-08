<?php

require_once dirname(__FILE__).'/../lib/groupsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/groupsGeneratorHelper.class.php';

/**
 * groups actions.
 *
 * @package    flux_docs
 * @subpackage groups
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class groupsActions extends autoGroupsActions
{
 public function executeDelete(sfWebRequest $request) {
   
   try{
    parent::executeDelete($request);
   } catch (Doctrine_Connection_Exception $dce) {
       $this->getUser()->setFlash('error', 'Cannot delete a user group that is used by documents', false);
       $this->forward('groups','index'); 
   }
 }
  
}
