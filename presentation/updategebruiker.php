<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Update gebruiker</title>
    </head>
    <body>
        <h1>Gebruiker bewerken</h1>
        <?php
        $gebruikerDAO = new GebruikerDAO();
        $gebruiker = $gebruikerDAO->getGebruikerById($_GET["id"]);
        $id = $_GET["id"];
        ?>
        <form action="aanmelden.php" method="get">
            <input type="hidden" name="id" value="<?php print($gebruiker->getId()); ?>">
            Gebruikersnaam:
            <input type="text" name="gebruikersnaam" value="<?php print($gebruiker->getGebruikersnaam()); ?>">
            <br><br>
            Wachtwoord:
            <input type="text" name="wachtwoord" value="
                   <?php print($gebruiker->getWachtwoord()); ?>"><br>
            <input type="submit" value="Opslaan">
        </form>
        <br>
        <a href="aanmelden.php">Terug naar overzicht</a>
    </body>
</html>

