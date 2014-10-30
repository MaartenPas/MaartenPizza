<h1>Menulijst Admin</h1>
<table>
    <tr>
        <th>Product</th>
        <th>Prijs</th>
        <th>Categorie</th>
        <th>Omschrijving</th>
        <th></th>
    </tr>
    <?php
    foreach ($menulijst as $menu) {
        ?>
        <tr>
            <td>
                <a href="pizzashop_controller_updatemenu.php?action=&id=<?php print($menu->getId()); ?>">
                    <?php print($menu->getProduct()); ?>
                </a>
            </td>
            <td>
                <?php
                print(
                        $menu->getPrijs());
                ?>
            </td>
            <td>
                <?php
                print(
                        $menu->getCategorie());
                ?>
            </td>
            <td>
                <?php
                print(
                        $menu->getOmschrijving());
                ?>
            </td>
            <td>
                <a href="pizzashop_controller_verwijderenmenu.php?id=
                   <?php print($menu->getId()); ?>">
                    Verwijder</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<a href="pizzashop_controller_toevoegenmenu.php?action=form">Een nieuw menu toevoegen</a>
