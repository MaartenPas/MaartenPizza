<?php

// CREATE TABLE WestVlaamseGemeenten
//  (id INT(4) auto_increment not null,
//   gemeentenaam varchar(30) not null,
//    primary key(id) )
//     ENGINE=INNODB

class WestVlaamseGemeenten {

    private static $idMap = array();
    private $id;
    private $gemeentenaam;


    public static function create($id, $gemeentenaam) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new WestVlaamseGemeenten($id, $gemeentenaam);
        }
        return self::$idMap[$id];
    }

    public function __construct($id, $gemeentenaam) {

        $this->id = $id;
        $this->gemeentenaam = $gemeentenaam;

    }

    public function getid() {
        return $this->id;
    }

    public function getGemeentenaam() {
        return $this->gemeentenaam;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

    public function setGemeentenaam($gemeentenaam) {
        $this->gemeentenaam = $gemeentenaam;
    }

}
