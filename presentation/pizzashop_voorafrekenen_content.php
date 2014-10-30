<section id="winkelkarretje">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron" style="overflow:hidden;">

            <h2>U bent nog niet ingelogd</h2>
            <h3>Opties</h3>
            <a href='pizzashop_controller_inlogform.php'><h4>Ik heb een account</h4></a>
            <a href='pizzashop_controller_register.php'><h4>Ik heb geen account</h4></a>

            <h2>Uw bestelling</h2>
            <div class="view-cart">
                <?php
                $current_url = base64_encode($url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                if (isset($_SESSION["products"])) {
                    $total = 0;
                    print('<form method="post" action="paypal-express-checkout/process.php">');
                    print('<ul>');
                    $cart_items = 0;
                    foreach ($_SESSION["products"] as $cart_itm) {
                        $product_code = $cart_itm["code"];
                        $results = $mysqli->query("SELECT product,omschrijving, prijs FROM pizzashopmenus WHERE product_code='$product_code' LIMIT 1");
                        $obj = $results->fetch_object();

                        print('<li class="cart-itm">');
                        print('<span class="remove-itm"><a href="pizzashop_controller_cart_update.php?removep=' . $cart_itm["code"] . '&return_url=' . $current_url . '">&times;</a></span>');
                        print('<div class="p-price">' . $currency . $obj->prijs . '</div>');
                        print('<div class="product-info">');
                        print('<h3>' . $obj->product . ' (Code :' . $product_code . ')</h3> ');
                        print('<div class="p-qty">Aantal : ' . $cart_itm["qty"] . '</div>');
                        print('<div>' . $obj->omschrijving . '</div>');
                        print('</div>');
                        print('</li>');
                        $subtotal = ($cart_itm["price"] * $cart_itm["qty"]);
                        $total = ($total + $subtotal);

                        print('<input type="hidden" name="item_name[' . $cart_items . ']" value="' . $obj->product . '" />');
                        print('<input type="hidden" name="item_code[' . $cart_items . ']" value="' . $product_code . '" />');
                        print('<input type="hidden" name="item_desc[' . $cart_items . ']" value="' . $obj->omschrijving . '" />');
                        print('<input type="hidden" name="item_qty[' . $cart_items . ']" value="' . $cart_itm["qty"] . '" />');
                        $cart_items ++;
                    }
                    print('</ul>');
                    print('<input class="pull-left" type="submit" value="Afrekenen">');

                    print('<span class="check-out-txt">');
                    print('<strong>Totaal : ' . $currency . $total . '</strong>  ');
                    print('</span>');
                    print('</form>');
                    print('<form method="get" action="pizzashop_controller_bestellen.php">');
                    print('<input class="pull-left" type="submit" value="Terugkeren">');
                    print('</form>');
                } else {
                    print('Uw winkelkarretje is leeg.');
                }
                ?>
            </div>
            <h3></h3><br>
            <h3>U kan uw online bestelde pizza's niet persoonlijk afhalen.</h3>
        </div>
    </div>
</div>
</section>




