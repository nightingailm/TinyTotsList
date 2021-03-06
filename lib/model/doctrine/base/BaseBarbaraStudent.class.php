<?php

/**
 * BaseBarbaraStudent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $list_id
 * @property BarbaraList $BarbaraList
 * 
 * @method string         getName()        Returns the current record's "name" value
 * @method integer        getListId()      Returns the current record's "list_id" value
 * @method BarbaraList    getBarbaraList() Returns the current record's "BarbaraList" value
 * @method BarbaraStudent setName()        Sets the current record's "name" value
 * @method BarbaraStudent setListId()      Sets the current record's "list_id" value
 * @method BarbaraStudent setBarbaraList() Sets the current record's "BarbaraList" value
 * 
 * @package    barbara
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBarbaraStudent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('barbara_student');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('list_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BarbaraList', array(
             'local' => 'list_id',
             'foreign' => 'id'));
    }
}