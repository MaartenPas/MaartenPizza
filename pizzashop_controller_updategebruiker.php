<?php

require_once("business/GebruikersService.class.php");
require_once("business/WestVlaamseGemeentenService.class.php");
if ($_GET["action"] == "process") {
    $gebruikersSvc = new GebruikersService();
    $gebruikersSvc->updateGebruiker($_GET["GebruikersId"], $_GET["Wachtwoord"], $_GET["Voornaam"], $_GET["Familienaam"], $_GET["Straat"], $_GET["Huisnummer"], $_GET["Stad"], $_GET["Email"], $_GET["Telefoon"], $_GET["Boodschap"], $_GET["Promotie"]);
    header("location: pizzashop_controller_menus.php");
    exit(0);
} else {
    $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $Wstvllijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();
$gebruikersSvc = new GebruikersService();
    $gebruikersLijst = $gebruikersSvc->getGebruikersOverzicht();
    $gebruikersSvc = new GebruikersService();
    $gebruiker = $gebruikersSvc->haalGebruikerOp($_GET["GebruikersId"]);
    include("presentation/Admin_updategebruikerform.php");
}



