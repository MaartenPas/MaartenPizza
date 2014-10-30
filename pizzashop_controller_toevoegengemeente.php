<?php

require_once("business/WestVlaamseGemeentenService.class.php");
if ($_GET["action"] == "process") {
    $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $WestVlaamseGemeentenSvc->voegNieuweGemeenteToe($_POST["gemeentenaam"]);
    header("location: pizzashop_controller_menus.php");
    exit(0);
} else {
    $WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
    $WestVllijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();
    include("presentation/Admin_nieuwegemeente.php");
}