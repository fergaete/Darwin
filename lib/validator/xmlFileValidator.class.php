<?php

class xmlFileValidator extends sfValidatorFile
{
  protected function configure($options = array(), $messages = array())
  {
    $this->addMessage('invalid_format', 'Invalid Xml file format <br /><u>Detail :</u>');
    $this->addMessage('invalid_line', '- %error%');
    $this->addMessage('unreadable_file', 'This file is unreadable.');    
    parent::configure($options, $messages);    
  }
  
  protected function doClean($value)
  {
    libxml_use_internal_errors(true) ;
    $xml = new DOMDocument();
    $errorSchema = new sfValidatorErrorSchema($this);
    $errorSchemaLocal = new sfValidatorErrorSchema($this);    
    if(!$xml->load($value['tmp_name']))
      throw new sfValidatorError($this, 'unreadable_file');                
    if(!$xml->schemaValidate(sfConfig::get('sf_data_dir').'/import/import.xsd'))
    {
      $errorSchemaLocal->addError(new sfValidatorError($this, 'invalid_format'), 'invalid_format');      
      $errors = libxml_get_errors();

      foreach ($errors as $error) {
          $error_msg = $this->display_xml_error($error);
          $errorSchemaLocal->addError(new sfValidatorError($this, $error_msg), 'invalid_line'); 
      }
      libxml_clear_errors();
      if (count($errorSchemaLocal))
      {
        $errorSchema->addError($errorSchemaLocal);
      }

      if (count($errorSchema))
      {
        throw new sfValidatorErrorSchema($this, $errorSchema);
      }     
    }
    $class = $this->getOption('validated_file_class');    
    return new $class($value['name'], 'text/xml', $value['tmp_name'], $value['size'], $this->getOption('path'));
  }
  
  function display_xml_error($error)
  {
    $error_list  = ""; 
    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $error_list .= "Warning $error->code: ";
            break;
         case LIBXML_ERR_ERROR:
            $error_list .= "Error $error->code: ";
            break;
        case LIBXML_ERR_FATAL:
            $error_list .= "Fatal Error $error->code: ";
            break;
    }
    $error_list .= trim($error->message)."\n  Line: $error->line \n";
    return($error_list);
  }  
}
