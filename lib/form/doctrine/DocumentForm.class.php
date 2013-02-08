<?php

/**
 * Document form.
 *
 * @package    flux_docs
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DocumentForm extends BaseDocumentForm {

  public function configure() {
    
    unset($this['created_at'],$this['updated_at']);
    $this->setWidget('user_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)));
    $this->setWidget('group_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardGroup'), 'add_empty' => true)));
    $this->setWidget('document_type_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DocumentType'), 'add_empty' => true)));

    $this->setWidget('description', new sfWidgetFormTextarea(array()));

    $this->setValidator('description', new sfValidatorString(array('required' => false)));

    $this->setValidator('name', new sfValidatorString(array('required' => true)));

    $this->widgetSchema['filename'] = new sfWidgetFormInputFileEditable(array(
        'label'     => 'Archivo',
        'file_src'  => '/uploads/'.$this->getObject()->getFileName(),
        'with_delete' => false,
        'edit_mode' => true,
        'template'  => ((!$this->isNew()) && (trim($this->getObject()->getFileName()) != '')) ? '<div>%file%</div><div>%input%</div>' : '<div>%input%</div>',
      ));

    $this->validatorSchema['filename'] = new sfValidatorFile(array(
      'required'   => $this->isNew(),
      'path'       => sfConfig::get('sf_upload_dir'),
      'max_size'=>'3145728',
      'validated_file_class' => 'sfValidatedFileCustom',
     ),
      array(
        'max_size' => 'File too big (Max 3MB)',
      ));
 }

}
