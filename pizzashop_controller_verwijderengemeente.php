<?php

require_once("business/WestVlaamseGemeentenservice.class.php");
$WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
$WestVlaamseGemeentenSvc->verwijderGemeente($_GET["id"]);
header("location: pizzashop_controller_menus.php");
exit(0);


