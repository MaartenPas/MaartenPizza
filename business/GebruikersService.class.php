<?php

require_once("data/Gebruikerdao.class.php");

class GebruikersService {

    // tonen van alle items (gebruikers)

    public function getGebruikersOverzicht() {
        $gebruikerDAO = new GebruikerDAO();
        $gebruikerslijst = $gebruikerDAO->getAll();
        return $gebruikerslijst;
    }

    // toont gebruiker bestelling

    public function getGebruikerBestelling() {
        $gebruikerDAO = new GebruikerDAO();
        $gebruikerbestelling = $gebruikerDAO->getDAOGebruikerBestelling();
        return $gebruikerbestelling;
    }

    // toevoegen van een nieuw item (gebruiker)

    public function voegNieuweGebruikerToe($Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie) {
        $gebruikerDAO = new GebruikerDAO();
        $gebruikerDAO->create($Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie);
    }

    public static function controleerLoginGebruiker($Email, $Wachtwoord) {
        $gebruiker = GebruikerDAO::getLoginByEmail($Email, $Wachtwoord);
        if (isset($gebruiker) && $gebruiker->getWachtwoord() == $Wachtwoord && $gebruiker->getEmail() == $Email)
            return true;
        else
            return false;
    }

    public static function controleerRegisterGebruiker($Email, $Wachtwoord) {
        $gebruiker = GebruikerDAO::getRegisterByEmail($Email, $Wachtwoord);
        if (isset($gebruiker) && $gebruiker->getWachtwoord() == $Wachtwoord && $gebruiker->getEmail() == $Email)
            return true;
        else
            return false;
    }

    public function haalGebruikerOp($GebruikersId) {
        $gebruikerDAO = new GebruikerDAO();
        $gebruiker = $gebruikerDAO->getByGebruikersId($GebruikersId);
        return $gebruiker;
    }

    public function updateGebruiker($GebruikersId, $Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie) {
        $gebruikerDAO = new GebruikerDAO();
        $gebruiker = $gebruikerDAO->getByGebruikersId($GebruikersId);
        $gebruiker->setWachtwoord($Wachtwoord);
        $gebruiker->setVoornaam($Voornaam);
        $gebruiker->setFamilienaam($Familienaam);
        $gebruiker->setStraat($Straat);
        $gebruiker->setHuisnummer($Huisnummer);
        $gebruiker->setStad($Stad);
        $gebruiker->setEmail($Email);
        $gebruiker->setTelefoon($Telefoon);
        $gebruiker->setBoodschap($Boodschap);
        $gebruiker->setPromotie($Promotie);
        $gebruikerDAO->update($gebruiker);
    }

    public function verwijderGebruiker($GebruikersId) {
        $gebruikerDAO = new GebruikerDAO();
        $gebruikerDAO->delete($GebruikersId);
    }

}
