<!-- dit bestand in de root zetten = controle servicelaag -->
<?php
// bedoeling is om de entities en de datalaag te testen
// vooraleer de presentatielaag aangemaakt wordt
// de bestanden voor deze presentatielaag zijn dus niet 
// required of included, enkel de service (die zelf de entities en data required)
// een eenvoudige print geeft de opdracht in de servicelaag weer
require_once("business/WestVlaamseGemeentenService.class.php");
$WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
$wstvllijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();
print("<pre>");
print_r($wstvllijst);
print("</pre>");
?>


