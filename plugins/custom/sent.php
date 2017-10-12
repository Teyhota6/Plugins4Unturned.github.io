<?php $ToEmail = 'teyhota@4unturned.tk'; $EmailSubject = 'Custom Plugin'; $body = "Name: ".$_POST["name"]."\r\n"; $body .= "Email: ".$_POST["email"]."\r\n"; $body .= "Plugin Name: ".$_POST["pluginname"]."\r\n"; $body .= "Description: ".$_POST["description"]."\r\n"; $body .= "Commands: ".$_POST["commands"]."\r\n"; $body .= "Permissions: ".$_POST["permissions"]."\r\n"; $body .= "Extra Info: ".$_POST["message"]."\r\n"; mail($ToEmail, $EmailSubject, $body); ?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Success - Plugins 4Unturned</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<style>
@font-face
{
font-family: N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY;
src: url('http://plugins.4unturned.tk/N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY.ttf');
}

h6
{
font-family: 'N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY', Times, serif;
}

h7
{
font-family: 'N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY', Times, serif;
}

h2
{
font-family: 'N0c8y_dasvG2CzM7uYqPLn06qf9KHRHwsVx7iw5MXmY', Times, serif;
}

.modal.in {
   display:block;
}
</style>
</head>
<body>

<div w3-include-html="http://plugins.4unturned.tk/header.htm"></div> 
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>
w3.includeHTML();
</script>

  <!-- stuff here -->
<br><br><br><br><br><br><br><br><br><br><br>

  <div id="modal" class="modal in">
    <div class="modal-content">
      <h4>Success!</h4>
      <p>Your form has been submitted! Please wait up to 72 hours for a response.</p>
      <a href="/plugins/custom" class="modal-action modal-close waves-effect btn-flat" style="float:right;">OK</a>
    </div>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div w3-include-html="http://plugins.4unturned.tk/footer.htm"></div> 
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>
w3.includeHTML();
</script>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>

  </body>