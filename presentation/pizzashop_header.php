<!--start login-->
<body>
    <section id="banner" >   
        <div class="container">     

            <div style="margin: 0; padding: 0;" > 
                <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img style="margin: 0 auto; width:100%;" src="images/banner_slide1.jpg" alt="slide1">
                            <div class="carousel-caption">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img style="margin: 0 auto; width:100%;" src="images/banner_slide2.jpg" alt="slide2">
                            <div class="carousel-caption">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img style="margin: 0 auto; width:100%;" src="images/banner_slide3.jpg" alt="slide3">
                            <div class="carousel-caption">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="item">
                            <img style="margin: 0 auto; width:100%;" src="images/banner_slide4.jpg" alt="slide4">
                            <div class="carousel-caption">
                                <h3></h3>
                            </div>
                        </div>
                    </div>


                </div>
            </div> 
        </div> 
    </section> 

    <section id="inlogform">  <!-- structuur aanbrengen -->

        <div class="container"> <!-- div om breedte te beperken -->
            <header class="clearfix"> <!-- structuur aanbrengen -->
                <?php
                require_once("business/GebruikersService.class.php");
                if (isset($_GET["Email"])) {
                    if ($_GET["action"] == "Login") {
                        if (($_GET["Email"] == "admin@admin.com") && (isset($_GET["Wachtwoord"])) && ($_GET["Wachtwoord"] == "admin")) {
                            setcookie("email", "admin@admin.com", time() + 3600);
                            setcookie("wachtwoord", "admin", time() + 3600);
                        } else {
                            unset($_COOKIE["email"]);
                            unset($_COOKIE["wachtwoord"]);
                        }
                        $ToegelatenLogin = GebruikersService::controleerLoginGebruiker($_GET["Email"], $_GET["Wachtwoord"]);
                        if ($ToegelatenLogin) {
                            unset($_COOKIE["email"]);
                            unset($_COOKIE["wachtwoord"]);
                            setcookie("email", $_GET["Email"], time() + 3600);
                            setcookie("wachtwoord", $_GET["Wachtwoord"], time() + 3600);
                            setcookie("inlog", "ja", time() + 3600);
                            $stijlaanmeldform = "display:none";
                            $stijlafmeldform = "display:visible";
                            print("keuzeblok 1");
                        } else {
                            $stijlaanmeldform = "display:visible";
                            $stijlafmeldform = "display:none";
                            print("keuzeblok 2");
                        }
                    }
                } elseif (isset($_GET["uitloggen"])) {
                    unset($_COOKIE["email"]);
                    unset($_COOKIE["wachtwoord"]);
                    setcookie("inlog", "nee", time() + 3600);
                    $stijlaanmeldform = "display:visible";
                    $stijlafmeldform = "display:none";
                    print("keuzeblok 3");
                } elseif (!isset($_COOKIE["inlog"])) {
                    $stijlaanmeldform = "display:visible";
                    $stijlafmeldform = "display:none";
                    print("keuzeblok 4");
                } elseif ($_COOKIE["inlog"] == "nee") {
                    unset($_COOKIE["email"]);
                    unset($_COOKIE["wachtwoord"]);
                    $stijlaanmeldform = "display:visible";
                    $stijlafmeldform = "display:none";
                    print("keuzeblok 5");
                } elseif ($_COOKIE["inlog"] == "ja") {
                    $stijlaanmeldform = "display:none";
                    $stijlafmeldform = "display:visible";
                    print("keuzeblok 6");
                } else {
                    $stijlaanmeldform = "display:visible";
                    $stijlafmeldform = "display:none";
                    print("keuzeblok 7");
                }
                ?>
                <form method="get" action="#" 
                      class = "navbar-form navbar-right" role = "search" 
                      style = " <?php
                print("$stijlafmeldform");
                ?>">
                    <div class = "form-group"> <!--label en input in 1 groep -->
                        <h4 class = "pull-left" style="margin:auto 10px">
                            <?php
                            if (isset($_COOKIE["email"])) {
                                print("Welkom email: " . $_COOKIE["email"] . "Welkom wachtwoord: " . $_COOKIE["wachtwoord"]);
                            }
                            ?></h4>
                        <input type = "hidden"  class = "form-control"
                               name = "uitloggen" id = "username" placeholder = "Email">
                        <input type = "submit"  class = "btn btn-default" value = "uitloggen">
                    </div>
                </form>
                <form method="get" action="pizzashop_controller_register.php" 
                      class = "navbar-form navbar-right" role = "search" style = "<?php
                            print("$stijlaanmeldform");
                            ?>">
                    <input type = "hidden"  class = "form-control"
                           name = "action" id = "action" value = "Registreren">
                    <input type = "submit"  class = "btn btn-default" value = "Registreren">
                </form>
                <form method="get" action="pizzashop_controller_home.php" 
                      class = "navbar-form navbar-right" role = "search" style = "<?php
                      print("$stijlaanmeldform");
                            ?>">

                    <div class = "form-group"> <!--label en input in 1 groep -->
                        <input type = "hidden"  class = "form-control"
                               name = "action" id = "action" value = "Login">
                        <label for = "Email"  class = "sr-only">Email</label>
                        <input type = "text"  class = "form-control"
                               name = "Email" id = "Email" placeholder = "Email">
                    </div> <!--label en input in 1 groep -->
                    <div class = "form-group"> <!--label en input in 1 groep -->
                        <label for = "Wachtwoord"  class = "sr-only">Wachtwoord</label>
                        <input type = "password"  class = "form-control"
                               name = "Wachtwoord" id = "Wachtwoord" placeholder = "Wachtwoord">
                    </div> <!--label en input in 1 groep -->
                    <input type = "submit"  class = "btn btn-default" value = "aanmelden">

                </form>

            </header> <!--structuur aanbrengen -->
        </div> <!--div om breedte te beperken -->

    </section>



    <section id = "intro"> <!--structuur aanbrengen -->
        <div class = "container" id="navigation"> <!--div om breedte te beperken -->
            <!--<div id = "logo" class = "sr-only"><a href = "pizzashop_controller_home.php"><img src = "#"></a>
            </div>  --> 
            <!--hoofdmenu-->
            <nav id="navbar" class = "navbar navbar-default" role = "navigation">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle"
                            data-toggle = "collapse"
                            data-target = "#hoofdmenu"> <!--collapse button -->
                        <span class = "sr-only">Toggle navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <!--<a class = "navbar-brand" href = "#"> <img src = "#"></a>-->
                </div>
                <div class = "collapse navbar-collapse" id = "hoofdmenu"> <!--een div mbt navigatie voor mobile -->
                    <ul class = "nav navbar-nav" id = "hm"> <!--navigeren doorheen keuzemenu -->
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_home.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_home.php">Home</a></li> <!--actief linkelement -->
                        <li class = "dropdown <?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_menus.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_menus.php" >Menus</a></li>
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_geschiedenis.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_geschiedenis.php">Geschiedenis</a></li>
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_contact.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_contact.php">Contact</a></li>
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_fotogalerij.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_fotogalerij.php">Fotogalerij</a></li>
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_gastenboek.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_gastenboek.php">Gastenboek</a></li>
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_register.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_register.php">Registreer</a></li>
                        <li class = "<?php echo ($_SERVER['PHP_SELF'] == "/PizzashopM/pizzashop_controller_bestellen.php" ? "active" : ""); ?>"> <a href = "pizzashop_controller_bestellen.php">Bestellen</a></li>
                    </ul>
                </div> <!--een div mbt navigatie voor mobile -->
            </nav>
            <!--einde hoofdmenu-->
        </div> <!--div om breedte te beperken -->
    </section> <!--structuur aanbrengen -->     