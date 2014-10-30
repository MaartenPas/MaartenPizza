<?php

require_once("business/GebruikersService.class.php");
require_once("business/WestVlaamseGemeentenService.class.php");
if ($_GET["action"] == "process") {
    $gebruikersSvc = new GebruikersService();
    $gebruikersSvc->voegNieuweGebruikerToe($_POST["Wachtwoord"], $_POST["Voornaam"], $_POST["Familienaam"], $_POST["Straat"], $_POST["Huisnummer"], $_POST["Stad"], $_POST["Email"], $_POST["Telefoon"], $_POST["Boodschap"], $_POST["Promotie"]);
    header("location: pizzashop_controller_menus.php");
    exit(0);
} else {
      $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $Wstvllijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();

    $gebruikersSvc = new GebruikersService();
    $gebruikersLijst = $gebruikersSvc->getGebruikersOverzicht();
    include("presentation/Admin_nieuwegebruiker.php");
}