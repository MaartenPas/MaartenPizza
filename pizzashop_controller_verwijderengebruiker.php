<?php

require_once("business/gebruikersservice.class.php");
$gebruikerSvc = new GebruikersService();
$gebruikerSvc->verwijderGebruiker($_GET["GebruikersId"]);
header("location: pizzashop_controller_menus.php");
exit(0);



