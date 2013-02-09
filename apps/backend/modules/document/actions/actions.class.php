<?php

require_once dirname(__FILE__).'/../lib/documentGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/documentGeneratorHelper.class.php';

/**
 * document actions.
 *
 * @package    flux_docs
 * @subpackage document
 * @author     Gaspar Rajoy
 * @version    1.0 2013-02-08 Gaspar.Rajoy $
 */
class documentActions extends autoDocumentActions
{
  public function executeDelete(sfWebRequest $request) {

    $document = $this->getRoute()->getObject();
    if (file_exists(sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . $document->getFileName()))
      unlink(sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . $document->getFileName());

    parent::executeDelete($request);
  }
  
  public function executeDownload(sfWebRequest $request)
  {
    
    $document = Document::getDocumentById($request->getParameter('id'));
    
    $filename = $document->getFilename();
    
    $file_path = sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . $filename;
    
    $file_type = mime_content_type($file_path);
    
    $extension = explode(".",$filename);
    
    $final_name = $document->getName().".".$extension[1];
    
    header('Content-disposition: attachment; filename='.$final_name);
    header('Content-type: '.$file_type);
    readfile($file_path);
  }

}
