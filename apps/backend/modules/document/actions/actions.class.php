<?php

require_once dirname(__FILE__).'/../lib/documentGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/documentGeneratorHelper.class.php';

/**
 * document actions.
 *
 * @package    flux_docs
 * @subpackage document
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class documentActions extends autoDocumentActions
{
  public function executeDelete(sfWebRequest $request) {

    $document = $this->getRoute()->getObject();
    if (file_exists(sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . $document->getFileName()))
      unlink(sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . $document->getFileName());

    parent::executeDelete($request);
  }
  
//  public function executeShow(sfWebRequest $request){
//    
//  }

}
