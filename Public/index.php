<?php 
require_once __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$maakGebruikerAan     = Controller\Gebruiker::maakGebruiker($_GET); 
$gebruikerController->voegGebruikerToeAanDeSpreadsheet($maakGebruikerAan);

?>
<!DOCTYPE html>
<html>
<head>
	<title>uren registratie</title>
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
<body>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Naam" id="name" />
      </p>

      <p class="name">
        <input name="locatie" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Locatie" id="name" />
      </p>

      <p class="name">
        <input name="datum" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" value=" <?php echo date("j-n-Y")?>" id="name" />
      </p>

      <p class="name">
        <input name="tijd" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" value=" <?php echo date("H:i:s");?>" id="name" />
      </p>

      <p class="name">
        <input name="uren" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Aantal uren gewerkt" id="name" />
      </p>
      
      <p class="text">
        <textarea name="opmerking" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Opmerking"></textarea>
      </p>

      <div class="submit">
        <input name="btnVersturen" type="submit" id="button-blue" value="Invoeren" />
        <div class="ease"></div>
      </div>
    </form>
  </div>
</body>
</html>
</body>
</html>