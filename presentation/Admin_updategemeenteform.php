<?php
include_once("pizzashop_head.php");

include_once("pizzashop_header.php");
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron"><img src="img/php_code.jpg" class="img-thumbnail pull-right hidden-xs" />  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->


            <h1>Gemeenten bijwerken</h1>
            <form method="get" action="pizzashop_controller_updategemeente.php">
                <table>
                    <input type="hidden" name="action" value="process">
                    <input type="hidden" name="id" value="<?php print($Wstvl->getId()); ?>">
                    <tr>
                        <td>Gemeente:</td>
                        <td>
                            <input type="text" name="gemeentenaam"
                                   value="<?php print($Wstvl->getGemeentenaam()); ?>">
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

