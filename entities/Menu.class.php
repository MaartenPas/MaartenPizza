<?php

// CREATE TABLE pizzashopmenus (
// id INT NOT NULL AUTO_INCREMENT,
// product VARCHAR(40) NOT NULL,
// prijs DECIMAL(4,2) NOT NULL,
// categorie VARCHAR(40) NOT NULL,
// omschrijving VARCHAR(200) NOT NULL,
// PRIMARY KEY (id)
//) ENGINE=INNODB;

class Menu {
 
    private static $idMap = array();
    private $id;
    private $product;
    private $prijs;
    private $categorie;
    private $omschrijving;

    private function __construct($id, $product, $prijs, $categorie, $omschrijving) {
        $this->id = $id;
        $this->product = $product;
        $this->prijs = $prijs;
        $this->categorie= $categorie;
        $this->omschrijving = $omschrijving;
    }

    public static function create($id, $product, $prijs, $categorie, $omschrijving) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Menu($id, $product, $prijs, $categorie, $omschrijving);
        }
        return self::$idMap[$id];
    }

    public function getId() {
        return $this->id;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getPrijs() {
        return $this->prijs;
    }
    
    public function getCategorie() {
        return $this->categorie;
    }
    
    public function getOmschrijving() {
        return $this->omschrijving;
    }

    public function setProduct($product) {
        $this->product = $product;
    }

    public function setPrijs($prijs) {
        $this->prijs = $prijs;
    }
    
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }
    
    public function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }

}
