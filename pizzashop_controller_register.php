<?php
require_once("business/GebruikersService.class.php");
$gebruikersSvc = new GebruikersService();
if (isset($_GET["action"]) && ($_GET["action"] == "new")) {
    $ToegelatenRegister = GebruikersService::controleerRegisterGebruiker($_POST["Email"], $_POST["Wachtwoord"]);
    if ($ToegelatenRegister) {
        print("<h3>Uw registratiegegevens zijn reeds in gebruik</h3>");
    } else {
        print("<div class='container'><div class='jumbotron'> <h3>U bent succesvol geregistreerd, bovenaan uw scherm kan u nu met uw registratiegegevens aanmelden</h3></div></div>");
        $gebruikersSvc = new GebruikersService();
        $gebruikersSvc->voegNieuweGebruikerToe($_POST["Wachtwoord"], $_POST["Voornaam"], $_POST["Familienaam"], $_POST["Straat"], $_POST["Huisnummer"], $_POST["Stad"], $_POST["Email"], $_POST["Telefoon"], $_POST["Boodschap"], $_POST["Promotie"]);
    }
}
require_once("business/WestVlaamseGemeentenService.class.php");
$WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
$Wstvllijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();
include_once("/presentation/pizzashop_head.php");
include_once("/presentation/pizzashop_header.php");

//elseif (($_GET["action"]) == "verwerk") {
//    if (isset($_GET["GebruikersId"])) {
//       $gebruiker = new Gebruiker($_POST["GebruikersId"], $_POST["Wachtwoord"], $_POST["Voornaam"], $_POST["Familienaam"], $_POST["Straat"], $_POST["Huisnummer"], $_POST["Stad"], $_POST["Email"], $_POST["Telefoon"], $_POST["Boodschap"], $_POST["Promotie"]);
//       $gebruikersSvc = new GebruikersService();
//       $gebruikersSvc->updateGebruiker($gebruiker);
//   }
//   include("presentation/updategebruiker.php");
//} else {
//  if (isset($_GET["GebruikersId"])) {
//     $gebruiker = new Gebruiker($_POST["GebruikersId"], $_POST["Wachtwoord"], $_POST["Voornaam"], $_POST["Familienaam"], $_POST["Straat"], $_POST["Huisnummer"], $_POST["Stad"], $_POST["Email"], $_POST["Telefoon"], $_POST["Boodschap"], $_POST["Promotie"]);
//       $gebruikersSvc = new GebruikersService();
//       $gebruikersSvc->updateGebruiker($gebruiker);
//      header("location: toongeheim.php");
//      exit(0);
//  }
//   $updated = false;
//}

include_once("/presentation/pizzashop_register_content.php");
include_once("/presentation/pizzashop_footer.php");
?>

