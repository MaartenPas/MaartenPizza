<!-- dit bestand in de root zetten = controle datalaag -->
<?php
// bedoeling is om de entities en de datalaag te testen
// vooraleer de businesslaag (servicelaag) aangemaakt wordt
// de bestanden voor deze laag en de presentatielaag zijn dus niet 
// required of included, enkel de data (die zelf de entities required)
// een eenvoudige print geeft de opdracht in de datalaag weer
require_once("data/WestVlaamseGemeentenDAO.class.php");
$dao = new WestVlaamseGemeentenDAO();
$wstvllijst = $dao->getAll();
print("<pre>");
print_r($wstvllijst);
print("</pre>");
?>


