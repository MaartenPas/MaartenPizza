<?php
include_once("pizzashop_head.php");

include_once("pizzashop_header.php");
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron">  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->


            <h1>Gebruiker bijwerken</h1>
            <form method="get" action="pizzashop_controller_updategebruiker.php">
                <table>
                    <input type="hidden" name="action" value="process">
                    <input type="hidden" name="GebruikersId" value="<?php print($gebruiker->getGebruikersId()); ?>">
                    <tr>
                        <td>Voornaam:</td>
                        <td>
                            <input type="text" name="Voornaam"
                                   value="<?php print($gebruiker->getVoornaam()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Familienaam:</td>
                        <td>
                            <input type="text" name="Familienaam"
                                   value="<?php print($gebruiker->getFamilienaam()); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Wachtwoord:</td>
                        <td>
                            <input type="text" name="Wachtwoord"
                                   value="<?php print($gebruiker->getWachtwoord()); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Straat:</td>
                        <td>
                            <input type="text" name="Straat"
                                   value="<?php print($gebruiker->getStraat()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Huisnummer:</td>
                        <td>
                            <input type="number" name="Huisnummer"
                                   value="<?php print($gebruiker->getHuisnummer()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Stad:</td>
                        <td>
                            <select name="Stad">
                                <?php
                                foreach ($Wstvllijst as $Wstvl) {
                                    ?>
                                    <option value="<?php print($Wstvl->getGemeentenaam()); ?>">
                                        <?php print($Wstvl->getGemeentenaam()); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="Email"
                                   value="<?php print($gebruiker->getEmail()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Telefoon:</td>
                        <td>
                            <input type="text" name="Telefoon"
                                   value="<?php print($gebruiker->getTelefoon()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Boodschap:</td>
                        <td>
                            <input type="text" name="Boodschap"
                                   value="<?php print($gebruiker->getBoodschap()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Promotie:</td>
                        <td>
                            <input type="text" name="Promotie"
                                   value="<?php print($gebruiker->getPromotie()); ?>">
                        </td>
                    </tr>


                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Bijwerken">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
<?php
include_once("pizzashop_footer.php");
?>       

