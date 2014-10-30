<?php

require_once("business/menuservice.class.php");
$menuSvc = new MenuService();
$menuSvc->verwijderMenu($_GET["id"]);
header("location: pizzashop_controller_menus.php");
exit(0);


