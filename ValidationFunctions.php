<?php

class ValidateFunctions
{
  const ERROR_NAME_NOT_ALPHA ="Only letters";

//Validate navn kun består af bogstaver
  public function contains_only_letters($name)
  {
    if (!preg_match('/^[A-Za-z\s]+$/', $name)) {
      return false;
    } else {
      return true;
    }
  }
}
