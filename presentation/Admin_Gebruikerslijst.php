<h1>Gebruikerslijst Admin</h1>
<table>
    <?php
    foreach ($gebruikerslijst as $gebruiker) {
        ?>
        <tr>
            <th>Voornaam</th>
            <th>Familienaam</th>
            <th>Wachtwoord</th>         
            <th>Straat</th>
            <th>Huisnummer</th>
        </tr>
        <tr>
            <td>
                <a href="pizzashop_controller_updategebruiker.php?action=&GebruikersId=<?php print($gebruiker->getGebruikersId()); ?>">
                    <?php
                    print($gebruiker->getVoornaam());
                    ?></a>
            </td>
            <td>
                <?php
                print($gebruiker->getFamilienaam());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getWachtwoord());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getStraat());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getHuisnummer());
                ?>
            </td>
        </tr>
        <tr>
            <th>Stad/Gemeente</th>
            <th>Emailadres</th>
            <th>Telefoon</th>
            <th>Boodschap</th>
            <th>Promotie</th>
        </tr>
        <tr>
            <td>
                <?php
                print($gebruiker->getStad());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getEmail());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getTelefoon());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getBoodschap());
                ?>
            </td>
            <td>
                <?php
                print($gebruiker->getPromotie());
                ?>
            </td>
            <td>
                <a href="pizzashop_controller_verwijderengebruiker.php?GebruikersId=
                   <?php print($gebruiker->getGebruikersId()); ?>">
                    Verwijder</a>
            </td>


        </tr>
        <?php
    }
    ?>
</table>
<a href="pizzashop_controller_toevoegengebruiker.php?action=form">Een nieuwe gebruiker toevoegen</a>