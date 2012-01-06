<?php

/**
 * BarbaraStudent form base class.
 *
 * @method BarbaraStudent getObject() Returns the current form's model object
 *
 * @package    barbara
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBarbaraStudentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
      'list_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BarbaraList'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 255)),
      'list_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BarbaraList'))),
    ));

    $this->widgetSchema->setNameFormat('barbara_student[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BarbaraStudent';
  }

}
