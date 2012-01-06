<?php

/**
* Login form
*/
class LoginForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'class' => new sfWidgetFormInput
    ));

    $this->setValidators(array(
      'class' => new ValidatorClass
    ));

    $this->widgetSchema->setNameFormat('class[%s]');
  }
}