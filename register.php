<?php
session_start();
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<!-- TODO: Gem data selvom der er errors i formen så brugeren ikke skal gentaste information -->

<div class="container">
    <div class="errors">

    </div>
  <form id="contact" action="RegisterClass.php" method="post">
    <h3>Welcome to this shit</h3>
    <h4>Create a user here</h4>
    <fieldset>
      <input name="name" placeholder="Your name" type="text" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="text" tabindex="2">
    </fieldset>
    <fieldset>
      <input name="phone" placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
    </fieldset>
    <fieldset>
      <input name="password" placeholder="Password" type="password" tabindex="4">
    </fieldset>
    <fieldset>
      <input name="password2" placeholder="Re-enter Password" type="password" tabindex="4">
    </fieldset>
    <fieldset>
      <label for="dropdown">&nbsp Favorit Pet</label>
      <select name="dropdown">
        <option value="Choose" selected>Choose one</option>
        <option value="Python">Python</option>
        <option value="Cobra">Cobra</option>
        <option value="Why">Why all the snakes?</option>
      </select>
    </fieldset>
    <fieldset>
      <textarea name="textarea" placeholder="Type your message here.... (optional)" tabindex="6"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
</body>
</html>