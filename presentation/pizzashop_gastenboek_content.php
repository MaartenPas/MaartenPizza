<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron">  <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->
            <h1>Gastenboek</h1>
            <!-- <div style="margin: 0 1em; padding: 0.5em; background-color:lightgreen; width:35%; height:auto;">
            -->

            <div id="gastenboek1" class="gastenboek">
                <div id="content1">
                    <div class="form-group" style="margin: 0 1em; padding: 0.5em; background-color:lightgreen; height:auto;">
                        <h3>Chatbericht toevoegen</h3>
                        <form class="form-horizontal" action="pizzashop_controller_gastenboek.php?action=new" method="post">
                            <?php
                            if (isset($_POST["nickname"])) {
                                print ("<h4><strong>Nickname:</strong>" . $_SESSION["nickname"] . "</h4>");
                            } else {
                                print("<p><strong>Nickname: </strong> <input class='links form-control'
                            type='text' size='37' name='nickname' value=" . $_SESSION["nickname"] . "
                    <br></p>");
                            }
                            ?>
                            <p><strong>Boodschap: </strong></p>
                            <p><textarea class="form-control" id="text" name="boodschap" cols="50" rows="4"></textarea><br></p> 
                            <input type="submit" value="Toevoegen">
                        </form>
                    </div>
                </div>
            </div>
            <div id="gastenboek2" class="contact">
                <div id="content2" style="margin: 0 1em; padding: 0.5em; height:auto; background-color:lightgrey;">
                    <h3>Chatberichten</h3>
                    <?php
                    $i = 1;
                    foreach ($tab as $chat) {
                        ?>
                        <div style="border-bottom: 5px solid red;">

                            <p><strong>Nickname: </strong> <?php print($chat->getNickname()); ?> <br>
                            <p><strong>Boodschap <?php print($i++); ?> : </strong>
                                <?php print($chat->getBoodschap()); ?> <br>
                            <p><strong>Datum: </strong> <?php print($chat->getDatum()); ?><br>
                            <form method="get" action="pizzashop_controller_gastenboek.php">
                                <input type="hidden" name="action" value="verwijder">
                                <input type="hidden" name="id" value="<?php print($chat->getId()); ?>"> 
                                <?php
                                if (isset($_COOKIE["email"]) && ($_COOKIE["email"] == "admin@admin.com")) {
                                    print("<input type='submit' value='verwijder bericht'>");
                                }
                                ?>
                            </form>
                        </div>
                        <?php
                    }
                    ?> 
                </div>
            </div> <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->
        </div> <!--div om breedte te beperken -->
    </div>
</div>
</section>  <!-- structuur aanbrengen -->


