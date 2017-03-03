<?php

class ValidateFunctions
{
  const ERROR_NAME_NOT_ALPHA ="Only letters";

//Validate navn kun består af bogstaver
  public function contains_only_letters($name) {
    if(is_string($name)){
      if (!preg_match('/^[A-Za-z\s]+$/', $name)) {
        return false;
      } else {
        return true;
      }

    } else {
      return false;
    }

  }
  /*
   * Dette er en shorthand if else statement som checker om den givne strengs $string længde
   * er mindre eller lign. den givne længde $lenght
   */
  public function check_string_length($string, $length)
  {
    if (is_string($string) && is_int($length)) {
     $result = (strlen($string) <= $length) ? true : false;
    }
    return $result;
  }
}
