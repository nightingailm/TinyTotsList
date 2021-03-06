<?php

/**
 * BaseBarbaraClass
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * 
 * @method string       getTitle() Returns the current record's "title" value
 * @method BarbaraClass setTitle() Sets the current record's "title" value
 * 
 * @package    barbara
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBarbaraClass extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('barbara_class');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}