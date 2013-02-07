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
    $this->setWidget('user_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)));
    $this->setWidget('group_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardGroup'), 'add_empty' => true)));
    $this->setWidget('document_type_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DocumentType'), 'add_empty' => true)));

    $this->setWidget('description', new sfWidgetFormTextarea(array()));

    $this->setValidator('description', new sfValidatorString(array('required' => true)));

    $this->setValidator('name', new sfValidatorString(array('required' => true)));
//
//    $this->setWidget('filename', new sfWidgetFormInputFileEditable(array(
//                'edit_mode' => false,
//                'with_delete' => false,
//                'file_src' => '',
//                    )
//    ));

//    $this->setValidator('filename', new sfValidatorFile(array(
//                'max_size' => 500000,
//                'path' => '/path/to/directory/where/you/wanna/store/it',
//                'required' => true,
//                'validated_file_class' => 'sfValidatedFileCustom'
//                    )
//    ));

	$this->widgetSchema['filename'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Archivo',
      'file_src'  => '/uploads/'.$this->getObject()->getFileName(),
      'edit_mode' => !$this->isNew(),
      'template'  => ((!$this->isNew()) && (trim($this->getObject()->getFileName()) != '')) ? '<div>%delete% Eliminar Archivo </div>' : '<div>%input%</div>',
    ));

    $this->validatorSchema['filename'] = new sfValidatorFile(array(
      'required'   => true,
      'path'       => sfConfig::get('sf_upload_dir'),
      'max_size'=>'3145728',
      'validated_file_class' => 'sfValidatedFile',
     ),
      array(
        'max_size' => 'Archivo demasiado grande (Máximo 3MB)',
      ));
 
    
    
    
    
  }

}
