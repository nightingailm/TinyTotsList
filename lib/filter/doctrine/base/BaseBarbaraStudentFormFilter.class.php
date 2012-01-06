<?php

/**
 * BarbaraStudent filter form base class.
 *
 * @package    barbara
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBarbaraStudentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'list_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BarbaraList'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'list_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('BarbaraList'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('barbara_student_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BarbaraStudent';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'name'    => 'Text',
      'list_id' => 'ForeignKey',
    );
  }
}
