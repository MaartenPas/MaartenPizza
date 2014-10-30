<?php
include_once("pizzashop_head.php");

include_once("pizzashop_header.php");
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron"><img src="img/php_code.jpg" class="img-thumbnail pull-right hidden-xs" />  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->


            <h1>Menus bijwerken</h1>
            <form method="get" action="pizzashop_controller_updatemenu.php">
                <table>
                    <input type="hidden" name="action" value="process">
                    <input type="hidden" name="id" value="<?php print($menu->getId()); ?>">
                    <tr>
                        <td>Product:</td>
                        <td>
                            <input type="text" name="product"
                                   value="<?php print($menu->getProduct()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Prijs:</td>
                        <td>
                            <input type="number" name="prijs"
                                   value="<?php print($menu->getPrijs()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Omschrijving:</td>
                        <td>
                            <input type="text" name="omschrijving"
                                   value="<?php print($menu->getOmschrijving()); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Categorie:</td>
                        <td>
                            <!--<input type="text" name="categorie"> -->
                            <select name="categorie">
                                    <option value="pizza" <?php if (($menu->getCategorie() == "pizza") ? print('selected="selected"') : '')?>> Pizza</option>
                                    <option value="pasta" <?php if (($menu->getCategorie() == "pasta") ? print('selected="selected"') : '')?>> Pasta</option>
                                    <option value="broodje" <?php if (($menu->getCategorie() == "broodje") ? print('selected="selected"') : '')?>> Broodje</option>
                                    <option value="snack" <?php if (($menu->getCategorie() == "snack") ? print('selected="selected"') : '')?>> Snack</option>      
                            </select>


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

