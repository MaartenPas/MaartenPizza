<!-- dit bestand in de root zetten = controle datalaag -->
<?php
// bedoeling is om de entities en de datalaag te testen
// vooraleer de businesslaag (servicelaag) aangemaakt wordt
// de bestanden voor deze laag en de presentatielaag zijn dus niet 
// required of included, enkel de data (die zelf de entities required)
// een eenvoudige print geeft de opdracht in de datalaag weer
require_once("data/MenuDAO.class.php");
$dao = new MenuDAO();
$lijst = $dao->getById(1);
print("<pre>");
print_r($lijst);
print("</pre>");
?>


