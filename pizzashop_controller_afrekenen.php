<?php

session_start();
require_once("business/GebruikersService.class.php");
$GebruikersSvc = new GebruikersService();
$gebruiker = $GebruikersSvc->getGebruikerBestelling();
include_once("config.php");
include_once("/presentation/pizzashop_head.php");
include_once("/presentation/pizzashop_header.php");
if ((isset($_COOKIE["email"]) && (isset($_COOKIE["wachtwoord"])))) {
    include_once("/presentation/pizzashop_afrekenen_content.php");
}
else
{include_once("/presentation/pizzashop_voorafrekenen_content.php");
}
include_once("/presentation/pizzashop_footer.php");



