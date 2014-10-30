<?php

require_once("business/MenuService.class.php");
if ($_GET["action"] == "process") {
    $menuSvc = new MenuService();
    $menuSvc->voegNieuwMenuToe($_POST["product"], $_POST["prijs"], $_POST["categorie"], $_POST["omschrijving"]);
    header("location: pizzashop_controller_menus.php");
    exit(0);
} else {
    $menuSvc = new MenuService();
    $menuLijst = $menuSvc->getMenusOverzicht();
    include("presentation/Admin_nieuwmenu.php");
}