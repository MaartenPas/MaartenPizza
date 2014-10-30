<?php

// CREATE TABLE gebruikerspizzashop
// (GebruikersId INT NOT NULL AUTO_INCREMENT,
// Wachtwoord VARCHAR(40) NOT NULL,
// Voornaam VARCHAR(255) NOT NULL,
// Familienaam VARCHAR(255) NOT NULL,
// Straat VARCHAR(255) NOT NULL,
// Huisnummer INT(4) NOT NULL,
// Stad VARCHAR(50) NOT NULL,
// Email CHAR(30) NOT NULL,
// Telefoon CHAR(20) NOT NULL,
// Boodschap VARCHAR(50) NOT NULL,
// Promotie VARCHAR(10) NOT NULL,
// PRIMARY KEY (GebruikersId) )
//ENGINE = INNODB

class Gebruiker {

    private static $idMap = array();
    private $GebruikersId;
    private $Wachtwoord;
    private $Voornaam;
    private $Familienaam;
    private $Straat;
    private $Huisnummer;
    private $Stad;
    private $Email;
    private $Telefoon;
    private $Boodschap;
    private $Promotie;

    public static function create($GebruikersId, $Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie) {
        if (!isset(self::$idMap[$GebruikersId])) {
            self::$idMap[$GebruikersId] = new Gebruiker($GebruikersId, $Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie);
        }
        return self::$idMap[$GebruikersId];
    }

    public function __construct($GebruikersId, $Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie) {

        $this->GebruikersId = $GebruikersId;
        $this->Wachtwoord = $Wachtwoord;
        $this->Voornaam = $Voornaam;
        $this->Familienaam = $Familienaam;
        $this->Straat = $Straat;
        $this->Huisnummer = $Huisnummer;
        $this->Stad = $Stad;
        $this->Email = $Email;
        $this->Telefoon = $Telefoon;
        $this->Boodschap = $Boodschap;
        $this->Promotie = $Promotie;
    }

    public function getGebruikersId() {
        return $this->GebruikersId;
    }

    public function getWachtwoord() {
        return $this->Wachtwoord;
    }

    public function getVoornaam() {
        return $this->Voornaam;
    }

    public function getFamilienaam() {
        return $this->Familienaam;
    }

    public function getStraat() {
        return $this->Straat;
    }

    public function getHuisnummer() {
        return $this->Huisnummer;
    }

    public function getStad() {
        return $this->Stad;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getTelefoon() {
        return $this->Telefoon;
    }

    public function getBoodschap() {
        return $this->Boodschap;
    }

    public function getPromotie() {
        return $this->Promotie;
    }

    public function setWachtwoord($Wachtwoord) {
        $this->Wachtwoord = $Wachtwoord;
    }

    public function setVoornaam($Voornaam) {
        $this->Voornaam = $Voornaam;
    }

    public function setFamilienaam($Familienaam) {
        $this->Familienaam = $Familienaam;
    }

    public function setStraat($Straat) {
        $this->Straat = $Straat;
    }

    public function setHuisnummer($Huisnummer) {
        $this->Huisnummer = $Huisnummer;
    }

    public function setStad($Stad) {
        $this->Stad = $Stad;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function setTelefoon($Telefoon) {
        $this->Telefoon = $Telefoon;
    }

    public function setBoodschap($Boodschap) {
        $this->Boodschap = $Boodschap;
    }

    public function setPromotie($Promotie) {
        $this->Promotie = $Promotie;
    }

}
