<?php
require_once("business/MenuService.class.php");
$menuSvc = new MenuService();
$menulijst = $menuSvc->getMenusOverzicht();
require_once("business/GebruikersService.class.php");
$GebruikersSvc = new GebruikersService();
$gebruikerslijst = $GebruikersSvc->getGebruikersOverzicht();
require_once("business/WestVlaamseGemeentenService.class.php");
$WestVlaamseGemeentenSvc = new WestVlaamseGemeentenService();
$Wstvllijst = $WestVlaamseGemeentenSvc->getWestVlaamseGemeentenOverzicht();
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron"> <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->
            <?php
            if (isset($_COOKIE["email"]) && ($_COOKIE["email"] == "admin@admin.com")) {

                include("presentation/Admin_Menulijst.php");
                include("presentation/Admin_Gebruikerslijst.php");
                include("presentation/Admin_WestVlaamseGemeentenlijst.php");
            } else {
                include("presentation/Gebruikers_Menulijst.php");
            }
            ?>
        </div> <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->
    </div> <!--div om breedte te beperken -->
</section>  <!-- structuur aanbrengen -->

