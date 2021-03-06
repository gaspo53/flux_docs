<?php

/**
 * BaseDocument
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $name
 * @property text $description
 * @property varchar $filename
 * @property integer $user_id
 * @property integer $group_id
 * @property integer $document_type_id
 * @property sfGuardUser $sfGuardUser
 * @property sfGuardGroup $sfGuardGroup
 * @property DocumentType $DocumentType
 * 
 * @method varchar      getName()             Returns the current record's "name" value
 * @method text         getDescription()      Returns the current record's "description" value
 * @method varchar      getFilename()         Returns the current record's "filename" value
 * @method integer      getUserId()           Returns the current record's "user_id" value
 * @method integer      getGroupId()          Returns the current record's "group_id" value
 * @method integer      getDocumentTypeId()   Returns the current record's "document_type_id" value
 * @method sfGuardUser  getSfGuardUser()      Returns the current record's "sfGuardUser" value
 * @method sfGuardGroup getSfGuardGroup()     Returns the current record's "sfGuardGroup" value
 * @method DocumentType getDocumentType()     Returns the current record's "DocumentType" value
 * @method Document     setName()             Sets the current record's "name" value
 * @method Document     setDescription()      Sets the current record's "description" value
 * @method Document     setFilename()         Sets the current record's "filename" value
 * @method Document     setUserId()           Sets the current record's "user_id" value
 * @method Document     setGroupId()          Sets the current record's "group_id" value
 * @method Document     setDocumentTypeId()   Sets the current record's "document_type_id" value
 * @method Document     setSfGuardUser()      Sets the current record's "sfGuardUser" value
 * @method Document     setSfGuardGroup()     Sets the current record's "sfGuardGroup" value
 * @method Document     setDocumentType()     Sets the current record's "DocumentType" value
 * 
 * @package    flux_docs
 * @subpackage model
 * @author     Gaspar Rajoy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDocument extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('document');
        $this->hasColumn('name', 'varchar', 255, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'text', null, array(
             'type' => 'text',
             'notnull' => false,
             ));
        $this->hasColumn('filename', 'varchar', 255, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('document_type_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('sfGuardGroup', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('DocumentType', array(
             'local' => 'document_type_id',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}