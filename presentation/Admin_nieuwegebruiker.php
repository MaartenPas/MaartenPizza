<?php
include_once("pizzashop_head.php");

include_once("pizzashop_header.php");
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron">  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->

            <h1>Nieuwe gebruiker toevoegen</h1>
            <form method="post" action="pizzashop_controller_toevoegengebruiker.php?action=process">
                <table>
                    <tr>
                        <td>Voornaam:</td>
                        <td>
                            <input type="text" name="Voornaam">
                        </td>
                    </tr>
                    <tr>
                        <td>Familienaam:</td>
                        <td>
                            <input type="text" name="Familienaam">
                        </td>
                    </tr>
                    <tr>
                        <td>Wachtwoord:</td>
                        <td>
                            <input type="text" name="Wachtwoord">
                        </td>
                    </tr>
                    <tr>
                        <td>Straat:</td>
                        <td>
                            <input type="text" name="Straat">
                        </td>
                    </tr>
                     <tr>
                        <td>Huisnummer:</td>
                        <td>
                            <input type="number" name="Huisnummer">
                        </td>
                    </tr>
                    <tr>
                        <td>Stad/Gemeente:</td>
                        <td>
                         <!--<input type="text" name="categorie"> -->
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
                        <td>Emailadres:</td>
                        <td>
                            <input type="email" name="Email">
                        </td>
                    </tr>
                    <tr>
                        <td>Telefoon:</td>
                        <td>
                            <input type="text" name="Telefoon">
                        </td>
                    </tr>

                    <tr>
                        <td>Boodschap:</td>
                        <td>
                            <input type="text" name="Boodschap">
                        </td>
                    </tr>
                    <tr>
                        <td>Promotie:</td>
                        <td>
                            <input type="text" name="Promotie">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Toevoegen">
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