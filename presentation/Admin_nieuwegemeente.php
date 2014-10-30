<?php
include_once("pizzashop_head.php");

include_once("pizzashop_header.php");
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron">  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->

            <h1>Nieuwe gemeente toevoegen</h1>
            <form method="post" action="pizzashop_controller_toevoegengemeente.php?action=process">
                <table>
                    <tr>
                        <td>Gemeente:</td>
                        <td>
                            <input type="text" name="gemeentenaam">
                        </td>
                    </tr>
                    
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