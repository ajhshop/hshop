<?php
include ('ValidationFunctions.php');
// Instantiet Class ValidateFunctions.php som er inkluderet ovenfor^
$validate_functions = new ValidateFunctions();
$errors = array();
$allow_dropdown = array ('Choose one', 'Python', 'Cobra', 'Why all the snakes?');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){
  if (isset($_POST['name']))
  {
    $name = $_POST['name'];

    //Validate navn er mindst 2 bogstaver lang
    if ($validate_functions->check_string_length($name, 2)) {
      $errors['name'] = "Come on dude..";
    }
    //
    if(!$validate_functions->contains_only_letters($name)){
      $errors['name'] = ValidateFunctions::ERROR_NAME_NOT_ALPHA;
    }
  }
  if (isset($_POST['email']))
  {
    $email = $_POST['email'];

    //Validate om det er en mail via @
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = "Missing @";
    }
  }
  // TODO: Check i databasen om email er unik

  if (isset($_POST['phone']))
  {
    //Validate for kun tal
    $phone = $_POST['phone'];
    if (!is_numeric($phone)){
      $errors['phone'] = "only numbers";
    }
    // TODO: Gøre så den er præcis 8 tal lang
  }
  if (isset($_POST['password']))
  {
    $password = $_POST['password'];
  }

  if (isset($_POST['password2']))
  {
    $password2 = $_POST['password2'];
  }

  //Checker om password matcher og at den er mindst 4
  if(isset($password, $password2)) {
    if($password != $password2){
      $errors['password'] = "Password dont match";
    } else if(strlen($password) <4) {
     $errors['password'] = "Password needs atleast 4";
    }
  }

  if (isset($_POST['dropdown']))
  {
    //Validater om den er udfyldt - Kan kun gøres hvis man hacker koden
    $dropdown = $_POST['dropdown'];
    if(!in_array($dropdown, $allow_dropdown)){
      $errors["dropdown"] = "hacker!";
    }
  }

  if (isset($_POST['textarea']))
  {
    $textarea = $_POST['textarea'];
  }
//Tjekker om der er fejl og bruger foreach til at printe nøglerne der er fejl ved og gør det til uppercase
  if(!empty($errors)){
    foreach ($errors as $key => $error){
      echo "<strong>" . strtoupper($key)  . "</strong>" . $error . "<br/>";
    }
  }

}

?>