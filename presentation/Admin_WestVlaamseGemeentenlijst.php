<h1>Menulijst Admin</h1>
<a href="pizzashop_controller_toevoegengemeente.php?action=form">Een nieuwe gemeente toevoegen</a>

<table>
    <tr>
        <th>Gemeentenaam</th>
        <th></th>
    </tr>
    <?php
    foreach ($Wstvllijst as $wstvl) {
        ?>
        <tr>
            <td>
                <a href="pizzashop_controller_updategemeente.php?action=&id=<?php print($wstvl->getId()); ?>">
                    <?php print($wstvl->getGemeentenaam()); ?>
                </a>
            </td>
            
            <td>
                <a href="pizzashop_controller_verwijderengemeente.php?id=
                   <?php print($wstvl->getId()); ?>">
                    Verwijder</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
