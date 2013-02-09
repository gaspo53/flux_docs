<?php

/**
 * DocumentType form.
 *
 * @package    flux_docs
 * @subpackage form
 * @author     Gaspar Rajoy
 *@version    1.0 2013-02-08 Gaspar.Rajoy $
 */
class DocumentTypeForm extends BaseDocumentTypeForm
{
  public function configure()
  {
    $this->setValidator('name', new sfValidatorString(array('required' => true)));        
  }
}
