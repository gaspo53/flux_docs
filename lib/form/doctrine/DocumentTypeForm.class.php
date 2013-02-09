<?php

/**
 * DocumentType form.
 *
 * @package    flux_docs
 * @subpackage form
 * @author     Gaspar Rajoy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DocumentTypeForm extends BaseDocumentTypeForm
{
  public function configure()
  {
    $this->setValidator('name', new sfValidatorString(array('required' => true)));        
  }
}
