<?php

class ValidateFunctions
{
  const ERROR_NAME_LENGTH             ="Name not long enough";
  const ERROR_NAME_NOT_ALPHA          ="Only letters";
  const ERROR_PHONE_CONTAINS_NUMBERS  ="8 numbers only";
  const ERROR_PASSWORD_DONT_MATCH     ="Password dont match";
  const ERROR_PASSWORD_LENGTH         ="Password needs atleast 4";
  const ERROR_DROPDOWN                ="Pick a pet";

  /**
   * @param $name
   * @return bool
   */

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

  /**
   * @param $string
   * @param $length
   * @return bool
  /*
   * Dette er en shorthand if else statement som checker om den givne strengs $string længde
   * er mindre eller lign. den givne længde $lenght
   */

  public function check_string_length($string, $length)
  {
    if (is_string($string) && is_int($length)) {
     return $result = (strlen($string) <= $length) ? true : false;
    }
  }

  /**
   * @param $number
   * @param $length
   * @return bool
   */

  public function check_number_length($number, $length)
  {
    if(strlen((string)$number) == (int)$length) {
      return true;
  } else{
      return false;
    }
  }

  /**
   * @param array $errors
   */

  //Tjekker om der er fejl og bruger foreach til at printe nøglerne der er fejl ved og gør det til uppercase
  public function error_handling(array $errors){
      if(!empty($errors)){
        foreach ($errors as $key => $error){
          $_SESSION[$key] = "<strong>" . strtoupper($key)  . "</strong>" . $error . "<br/>";
        }
      }
    }

}
