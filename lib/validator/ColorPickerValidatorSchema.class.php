<?php

/**
 * ColorPickerValidatorSchema validates the value generated by widgetFormColorPicker
 *
 * @package    symfony
 * @subpackage validator
 * @author     DarWIN2 team <darwin-ict@naturalsciences.be>
 */

class ColorPickerValidatorSchema extends sfValidatorBase
{
  /**
   * @see sfValidatorBase
   */
  protected function doClean($value)
  {
    if (strlen($value) != 7)
      throw new sfValidatorError($this, 'too short'); 
    elseif (!preg_match('/^#(?:(?:[a-f\d]{3}){1,2})$/i', $value)) {
      throw new sfValidatorError($this, 'invalid');
    }    

    return $value;
  }
}
