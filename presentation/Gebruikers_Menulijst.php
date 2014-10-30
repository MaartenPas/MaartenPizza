
<h1>Menulijst Gebruikers</h1>
<table>
    <tr>
        <th>Product</th>
        <th>Prijs</th>
        <th>Categorie</th>
        <th>Omschrijving</th>
    </tr>
    <?php
    foreach ($menulijst as $menu) {
        ?>
        <tr>
            <td>
                
                    <?php print($menu->getProduct()); ?>
                
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
           
        </tr>
        <?php
    }
    ?>
</table>
<a href="pizzashop_controller_toevoegenmenu.php?action=form">Een nieuw menu toevoegen</a>
