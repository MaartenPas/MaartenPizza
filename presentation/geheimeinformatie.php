<?php
require_once("business/GebruikersService.class.php");
$gebruikersSvc = new GebruikersService();
$gebruikersLijst = $gebruikersSvc->getGebruikersOverzicht();
include("presentation/Gebruikerslijst.php");
?>

