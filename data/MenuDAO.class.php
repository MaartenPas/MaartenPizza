<?php

require_once("data/dbconfig.class.php");
require_once("entities/Menu.class.php");

class MenuDAO {

    public function getAll() {
        $lijstmenu = array();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select id, product, prijs, categorie, omschrijving from pizzashopmenus";
        $resultSet = $dbh->query($sql);
        foreach ($resultSet as $rij) {
            $menu = Menu::create($rij["id"], $rij["product"], $rij["prijs"], $rij["categorie"], $rij["omschrijving"]);
            array_push($lijstmenu, $menu);
        }
        $dbh = null;
        return $lijstmenu;
    }

    public function getById($id) {
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select id, product,prijs, categorie, omschrijving from pizzashopmenus where
               id = " . $id;
        $resultSet = $dbh->query($sql);
        $rij = $resultSet->fetch();
        $menu = Menu::create($rij["id"], $rij["product"], $rij["prijs"], $rij["categorie"], $rij["omschrijving"]);
        $dbh = null;
        return $menu;
    }

    // toevoegen van een nieuw item (menu)

    public function create($id, $product, $prijs, $categorie, $omschrijving) {
        $sql = "insert into pizzashopmenus (id, product, prijs, categorie, omschrijving)
               values ('" . $id . "','" . $product . "','" . $prijs . "','" . $categorie . "','" . $omschrijving . "')";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $menuId = $dbh->lastInsertId();
        $dbh = null;
        $menu = Menu::create($id, $product, $prijs, $categorie, $omschrijving);
        return $menu;
    }

    // verwijderen van een item (menu)

    public function delete($id) {
        $sql = "delete from pizzashopmenus where id = " . $id;
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

    // updaten van een item (menu)

    public function update($menu) {
        $sql = "update pizzashopmenus set product='" . $menu->getProduct() .
                "', prijs='" . $menu->getPrijs() .
                "', categorie='" . $menu->getCategorie() .
                "', omschrijving='" . $menu->getOmschrijving() .
                "' where id = " . $menu->getId();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

}
