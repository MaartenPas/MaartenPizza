<?php

require_once("business/WestVlaamseGemeentenService.class.php");
if ($_GET["action"] == "process") {
    $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $WestVlaamseGemeentenSvc->updateGemeente($_GET["id"], $_GET["gemeentenaam"]);
    header("location: pizzashop_controller_menus.php");
    exit(0);
} else {
    $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $WstvlLijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();
    $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $Wstvl = $WestVlaamseGemeentenSvc->haalGemeentenOp($_GET["id"]);
    include("presentation/Admin_updategemeenteform.php");
}

