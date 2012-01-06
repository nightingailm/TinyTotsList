<?php

/**
* Class List Form - for saving student lists
*/
class ClassListForm extends BaseForm
{
  public $students;

  public function configure()
  {
    $this->setWidgets(array(
      'students' => new sfWidgetFormTextarea(array(), array('rows'=>20, 'cols'=>35)),
      'list' => new sfWidgetFormInputHidden
    ));
    
    $this->setValidators(array(
      'students' => new sfValidatorString,
      'list' => new sfValidatorInteger(array('required'=>false))
    ));

    $this->widgetSchema->setNameFormat('list[%s]');
  }

  public function isValid()
  {
    if (parent::isValid())
    {
      // Clean the students field
      $students = $this->getValue('students');
      $students = str_replace(array("\r\n", "\r"), "\n", $students);
      $students = trim($students);
      $this->students = explode("\n", $students);
      return true;
    }
    else
    {
      return false;
    }
  }
}