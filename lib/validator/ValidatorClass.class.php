<?php

/**
* Checks if an entered class is valid
*/
class ValidatorClass extends sfValidatorString
{
  protected function configure($options = array(), $messages = array())
  {
    $this->addMessage('class', '"%value%" is an invalid class');
  }

  /**
   * Checks that this is a valid class.
   */
  protected function doClean($value)
  {
    $clean = parent::doClean($value);

    $match = BarbaraClassTable::getInstance()->
      findOneByTitle($clean);
    
    if (!$match)
    {
      throw new sfValidatorError($this, 'class', array('value' => $value));
    }

    return $clean;
  }
}