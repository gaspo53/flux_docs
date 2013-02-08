<?php

require_once dirname(__FILE__).'/../lib/document_typeGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/document_typeGeneratorHelper.class.php';

/**
 * document_type actions.
 *
 * @package    flux_docs
 * @subpackage document_type
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class document_typeActions extends autoDocument_typeActions
{
 public function executeDelete(sfWebRequest $request) {
   try{
    parent::executeDelete($request);
   } catch (Doctrine_Connection_Exception $dce) {
       $this->getUser()->setFlash('error', 'Cannot delete a document type that is used by documents', false);
       $this->forward('document_type','index'); 
   }
 }
  
}
