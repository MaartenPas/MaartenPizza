<?php

require_once("data/dbconfig.class.php");
require_once("entities/WestVlaamseGemeenten.class.php");

class WestVlaamseGemeentenDAO {

    public function getAll() {
        $lijstWstVl = array();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select id, gemeentenaam from westvlaamsegemeenten";
        $resultSet = $dbh->query($sql);
        foreach ($resultSet as $rij) {
            $WstVl = WestVlaamseGemeenten::create($rij["id"], $rij["gemeentenaam"]);
            array_push($lijstWstVl, $WstVl);
        }
        $dbh = null;
        return $lijstWstVl;
    }

    public function getById($id) {
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select id, gemeentenaam from westvlaamsegemeenten where
               id = " . $id;
        $resultSet = $dbh->query($sql);
        $rij = $resultSet->fetch();
        $Wstvl = WestVlaamseGemeenten::create($rij["id"], $rij["gemeentenaam"]);
        $dbh = null;
        return $Wstvl;
    }

    // toevoegen van een nieuw item (gemeente)

    public function create($id, $gemeentenaam) {
        $sql = "insert into westvlaamsegemeenten (id, gemeentenaam)
               values ('" . $id . "','" . $gemeentenaam . "')";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $WestVlId = $dbh->lastInsertId();
        $dbh = null;
        $WstVl = WestVlaamseGemeenten::create($id, $gemeentenaam);
    }

    // verwijderen van een item (gemeente)

    public function delete($id) {
        $sql = "delete from westvlaamsegemeenten where id = " . $id;
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

    // updaten van een item (menu)

    public function update($Wstvl) {
        $sql = "update westvlaamsegemeenten set gemeentenaam='" . $Wstvl->getGemeentenaam() .
                "' where id = " . $Wstvl->getId();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

}