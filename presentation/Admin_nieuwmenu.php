<?php
include_once("pizzashop_head.php");

include_once("pizzashop_header.php");
?>
<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron">  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->

            <h1>Nieuw menu toevoegen</h1>
            <form method="post" action="pizzashop_controller_toevoegenmenu.php?action=process">
                <table>
                    <tr>
                        <td>Product:</td>
                        <td>
                            <input type="text" name="product">
                        </td>
                    </tr>
                    <tr>
                        <td>Prijs:</td>
                        <td>
                            <input type="number" step="any" name="prijs">
                        </td>
                    </tr>
                    <tr>
                        <td>Categorie:</td>
                        <td>
                            <!--<input type="text" name="categorie"> -->
                            <select name="categorie">
                                    <option value="pizza">Pizza</option>
                                    <option value="pasta">Pasta</option>
                                    <option value="broodje">Broodje</option>
                                    <option value="snack">Snack</option>
                                     
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Omschrijving:</td>
                        <td>
                            <input type="text" name="omschrijving">
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