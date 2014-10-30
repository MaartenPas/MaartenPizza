<?php

require_once("data/dbconfig.class.php");
require_once("entities/Gebruiker.class.php");

class GebruikerDAO {

    public static function getLoginByEmail($Email, $Wachtwoord) {
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select GebruikersId, Wachtwoord, Voornaam, Familienaam, Straat, Huisnummer, Stad, Email, Telefoon, Boodschap, Promotie from gebruikerspizzashop where Email = '" .
                $Email . "' and Wachtwoord = '" .$Wachtwoord . "'";
        $resultSet = $dbh->query($sql);
        if ($resultSet) {
            $rij = $resultSet->fetch();
            if ($rij) {
                $gebruiker = Gebruiker::create($rij["GebruikersId"], $rij["Wachtwoord"], $rij["Voornaam"], $rij["Familienaam"], $rij["Straat"], $rij["Huisnummer"], $rij["Stad"], $rij["Email"], $rij["Telefoon"], $rij["Boodschap"], $rij["Promotie"]);
                $dbh = null;
                return $gebruiker;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    public static function getRegisterByEmail($Email, $Wachtwoord) {
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select GebruikersId, Wachtwoord, Voornaam, Familienaam, Straat, Huisnummer, Stad, Email, Telefoon, Boodschap, Promotie from gebruikerspizzashop where Email = '" .
                $Email . "' and Wachtwoord = '" .$Wachtwoord . "'";
        $resultSet = $dbh->query($sql);
        if ($resultSet) {
            $rij = $resultSet->fetch();
            if ($rij) {
                $gebruiker = Gebruiker::create($rij["GebruikersId"], $rij["Wachtwoord"], $rij["Voornaam"], $rij["Familienaam"], $rij["Straat"], $rij["Huisnummer"], $rij["Stad"], $rij["Email"], $rij["Telefoon"], $rij["Boodschap"], $rij["Promotie"]);
                $dbh = null;
                return $gebruiker;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    // toont gegevens gebruiker bestelling

    public function getDAOGebruikerBestelling() {
        $lijst = array();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select GebruikersId, Wachtwoord, Voornaam, Familienaam, Straat, Huisnummer, Stad, Email, Telefoon, Boodschap, Promotie from gebruikerspizzashop WHERE Email = 'admin@admin.com' and Wachtwoord = 'admin'";
        $resultSet = $dbh->query($sql);
        if ($resultSet) {
            $rij = $resultSet->fetch();
            if ($rij) {
                $gebruiker = new Gebruiker($rij["GebruikersId"], $rij["Wachtwoord"], $rij["Voornaam"], $rij["Familienaam"], $rij["Straat"], $rij["Huisnummer"], $rij["Stad"], $rij["Email"], $rij["Telefoon"], $rij["Boodschap"], $rij["Promotie"]);
                $dbh = null;
                return $gebruiker;
            } else
                return false;
        } else
            return false;
    }

    // toont alle gebruikers

    public function getAll() {
        $lijst = array();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select GebruikersId, Wachtwoord, Voornaam, Familienaam, Straat, Huisnummer, Stad, Email, Telefoon, Boodschap, Promotie from gebruikerspizzashop";
        $resultSet = $dbh->query($sql);
        foreach ($resultSet as $rij) {
            $gebruiker = new Gebruiker($rij["GebruikersId"], $rij["Wachtwoord"], $rij["Voornaam"], $rij["Familienaam"], $rij["Straat"], $rij["Huisnummer"], $rij["Stad"], $rij["Email"], $rij["Telefoon"], $rij["Boodschap"], $rij["Promotie"]);
            array_push($lijst, $gebruiker);
        }
        $dbh = null;
        return $lijst;
    }

    // toevoegen van een nieuw item (gebruiker)

    public function create($Wachtwoord, $Voornaam, $Familienaam, $Straat, $Huisnummer, $Stad, $Email, $Telefoon, $Boodschap, $Promotie) {
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "insert into gebruikerspizzashop (Wachtwoord, Voornaam, Familienaam, Straat, Huisnummer, Stad, Email, Telefoon, Boodschap, Promotie) values ('" . $Wachtwoord . "','" . $Voornaam . "','" . $Familienaam . "','" . $Straat . "','" . $Huisnummer . "','" . $Stad . "','" . $Email . "','" . $Telefoon . "','" . $Boodschap . "','" . $Promotie . "')";
        $dbh->exec($sql);
        $dbh = null;
    }

    public function getByGebruikersId($GebruikersId) {
        $sql = "select GebruikersId, Wachtwoord, Voornaam, Familienaam, Straat, Huisnummer, Stad, Email, Telefoon, Boodschap, Promotie from gebruikerspizzashop where GebruikersId = " . $GebruikersId;
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        if ($resultSet) {
            $rij = $resultSet->fetch();
            if ($rij) {
                $gebruiker = new Gebruiker($rij["GebruikersId"], $rij["Wachtwoord"], $rij["Voornaam"], $rij["Familienaam"], $rij["Straat"], $rij["Huisnummer"], $rij["Stad"], $rij["Email"], $rij["Telefoon"], $rij["Boodschap"], $rij["Promotie"]);
                $dbh = null;
                return $gebruiker;
            } else
                return false;
        } else
            return false;
    }

    public function update($gebruiker) {
        $sql = "update gebruikerspizzashop set Wachtwoord ='" . $gebruiker->getWachtwoord() .
                "', Voornaam ='" . $gebruiker->getVoornaam() .
                "', Familienaam ='" . $gebruiker->getFamilienaam() .
                "', Straat ='" . $gebruiker->getStraat() .
                "', Huisnummer ='" . $gebruiker->getHuisnummer() .
                "', Stad ='" . $gebruiker->getStad() .
                "', Email ='" . $gebruiker->getEmail() .
                "', Telefoon ='" . $gebruiker->getTelefoon() .
                "', Boodschap ='" . $gebruiker->getBoodschap() .
                "', Promotie ='" . $gebruiker->getPromotie() .
                "' where GebruikersId = " . $gebruiker->getGebruikersId();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

    public function delete($GebruikersId) {
        $sql = "delete from gebruikerspizzashop where GebruikersId = " . $GebruikersId;
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

}
