<?php

require_once("business/MenuService.class.php");
if ($_GET["action"] == "process") {
    $menuSvc = new MenuService();
    $menuSvc->updateMenu($_GET["id"], $_GET["product"], $_GET["prijs"], $_GET["categorie"], $_GET["omschrijving"]);
    header("location: pizzashop_controller_menus.php");
    exit(0);
} else {
    $menuSvc = new MenuService();
    $menuLijst = $menuSvc->getMenusOverzicht();
    $menuSvc = new MenuService();
    $menu = $menuSvc->haalMenuOp($_GET["id"]);
    include("presentation/Admin_updatemenuform.php");
}

