<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron" style="overflow:hidden;">


            <div id="products-wrapper">
                <h1>Producten</h1>
                <div class="products">
                    <?php
                    //current URL of the Page. cart_update.php redirects back to this URL
                    $current_url = base64_encode($url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

                    $results = $mysqli->query("SELECT * FROM pizzashopmenus ORDER BY id ASC");
                    if ($results) {

                        //fetch results set as object and output HTML
                        while ($obj = $results->fetch_object()) {
                            print('<div class="product">');
                            print('<form method="post" action="pizzashop_controller_cart_update.php">');
                            //print('<div class="product-thumb"><img src="images/' . $obj->product_img_name . '"></div>');
                            print('<div class="product-content"><h3>' . $obj->product . '</h3>');
                            print('<div class="product-desc">' . $obj->omschrijving . '</div>');
                            print('<div class="product-info">');
                            print('Prijs ' . $currency . $obj->prijs . ' | ');
                            print('Aantal <input type="text" name="product_qty" value="1" size="3" />');
                            print('<button class="add_to_cart">Voeg toe</button>');
                            print('</div></div>');
                            print('<input type="hidden" name="product_code" value="' . $obj->product_code . '" />');
                            print('<input type="hidden" name="type" value="add" />');
                            print('<input type="hidden" name="return_url" value="' . $current_url . '" />');
                            print('</form>');
                            print('</div>');
                        }
                    }
                    ?>
                </div>

                <div class="shopping-cart">
                    <h2>Uw winkelkarretje</h2>
                    <?php
                    if (isset($_SESSION["products"])) {
                        $total = 0;
                        echo '<ol>';
                        foreach ($_SESSION["products"] as $cart_itm) {
                            print('<li class="cart-itm">');
                            print('<span class="remove-itm"><a href="pizzashop_controller_cart_update.php?removep=' . $cart_itm["code"] . '&return_url=' . $current_url . '">&times;</a></span>');
                            print('<h3>' . $cart_itm["name"] . '</h3>');
                            print('<div class="p-code">Productcode : ' . $cart_itm["code"] . '</div>');
                            print('<div class="p-qty">Aantal : ' . $cart_itm["qty"] . '</div>');
                            print('<div class="p-price">Prijs :' . $currency . $cart_itm["price"] . '</div>');
                            print('</li>');
                            $subtotal = ($cart_itm["price"] * $cart_itm["qty"]);
                            $total = ($total + $subtotal);
                        }
                        print('</ol>');
                        print('<span class="empty-cart"><a class="pull-right" href="pizzashop_controller_cart_update.php?emptycart=1&return_url=' . $current_url . '">Ledig karretje</a></span><br>');
                        print('<span class="check-out-txt"><a class="pull-left" href="pizzashop_controller_afrekenen.php">Controleer!</a><strong></span><span>Total : ' . $currency . $total . '</strong> </span><br>');
                    } else {
                        print('Uw winkelkarretje is leeg');
                    }
                    ?>
                </div>

            </div>

        </div> <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->
    </div> <!--div om breedte te beperken -->
</section>  <!-- structuur aanbrengen -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
