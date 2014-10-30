<?php

require_once("data/WestVlaamseGemeentendao.class.php");

class WestVlaamseGemeentenService {

    // tonen van alle items (gebruikers)

    public function getWestVlaamseGemeentenOverzicht() {
        $WestVlaamseGemeentenDAO = new WestVlaamseGemeentenDAO();
        $WestVlaamseGemeentenlijst = $WestVlaamseGemeentenDAO->getAll();
        return $WestVlaamseGemeentenlijst;
    }

    // toevoegen van een nieuw item (gebruiker)

    public function voegNieuweGemeenteToe($gemeentenaam) {
        $WestVlaamseGemeentenDAO = new WestVlaamseGemeentenDAO();
        $WestVlaamseGemeentenDAO->create($id, $gemeentenaam);
    }
    
    public function haalGemeentenOp($id) {
        $WestVlaamseGemeentenDAO = new WestVlaamseGemeentenDAO();
        $Wstvl = $WestVlaamseGemeentenDAO->getById($id);
        return $Wstvl;
        }
    

    public function updateGemeente($id, $gemeentenaam) {
        $WestVlaamseGemeentenDAO = new WestVlaamseGemeentenDAO();
        $Wstvl = $WestVlaamseGemeentenDAO->getById($id);
        $Wstvl->setGemeentenaam($gemeentenaam);
        $WestVlaamseGemeentenDAO->update($Wstvl);
    }

    public function verwijderGemeente($id) {
        $WestVlaamseGemeentenDAO = new WestVlaamseGemeentenDAO();
        $WestVlaamseGemeentenDAO->delete($id);
    }

}
