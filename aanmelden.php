<?php

session_start();
require_once("business/GebruikersService.class.php");
if ($_GET["action"] == "login") {
    $toegelaten = GebruikersService::controleerGebruiker($_POST["Gebruikersnaam"], $_POST["Wachtwoord"]);
    if ($toegelaten) {
        $_SESSION["aangemeld"] = true;

        header("location: toongeheim.php");
        exit(0);
    } else {
// hier code voor toevoegen nieuwe gebruiker (niet admin)
        $gebruikersSvc = new GebruikersService();
        $gebruikersSvc->voegNieuweGebruikerToe($_POST["Gebruikersnaam"], $_POST["Wachtwoord"], $_POST["Voornaam"], $_POST["Familienaam"], $_POST["Adres"], $_POST["Stad"], $_POST["Email"], $_POST["Telefoon"], $_POST["Boodschap"]);
        header("location: aanmelden.php");
        exit(0);
    }
} elseif (($_GET["action"]) == "verwerk") {
    if (isset($_GET["id"])) {
        $gebruiker = new Gebruiker($_GET["id"], $_GET["Gebruikersnaam"], $_GET["wachtwoord"]);
        $gebruikersSvc = new GebruikersService();
        $gebruikersSvc->updateGebruiker($gebruiker);
    }
    include("presentation/updategebruiker.php");
} else {
    if (isset($_GET["id"])) {
        $gebruiker = new Gebruiker($_GET["id"], $_GET["gebruikersnaam"], $_GET["wachtwoord"]);
        $gebruikersSvc = new GebruikersService();
        $gebruikersSvc->updateGebruiker($gebruiker);
        header("location: toongeheim.php");
        exit(0);
    }

    $updated = false;
    include("presentation/loginform.php");
}


    