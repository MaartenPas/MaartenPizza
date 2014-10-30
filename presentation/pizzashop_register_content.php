<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div class="container"> <!-- div om breedte te beperken -->     
        <!--inhoud--> 
        <div class="jumbotron">


            <div id="content" class="contact container">
                <div id="content">
                    <form class="form-horizontal" action="pizzashop_controller_register.php?action=new" method="POST">
                        <div class="form-group">
                            <label for="Voornaam" class="control-label">Voornaam</label>
                            <input type="text" name="Voornaam" class="form-control" id="Voornaam" 
                                   value="<?php
                                   if (isset($_POST["Voornaam"])) {
                                       print($_POST["Voornaam"]);
                                   } else {
                                       print("Voornaam");
                                   }
                                   ?>" 
                                   required="required">
                        </div>
                        <div class="form-group">
                            <label for="Familienaam" class="control-label">Familienaam</label>
                            <input type="text" name="Familienaam" class="form-control" id="Familienaam" 
                                   value="<?php
                                   if (isset($_POST["Familienaam"])) {
                                       print($_POST["Familienaam"]);
                                   } else {
                                       print("Familienaam");
                                   }
                                   ?>" 
                                   required="required">
                        </div>
                        <div class="form-group">
                            <label for="Wachtwoord" class="control-label">Wachtwoord</label>
                            <input type="text" name="Wachtwoord" class="form-control" id="Voornaam" 
                                   value="<?php
                                   if (isset($_POST["Wachtwoord"])) {
                                       print($_POST["Wachtwoord"]);
                                   } else {
                                       print("Wachtwoord");
                                   }
                                   ?>" 
                                   required="required">
                        </div>

                        <div class="form-group">
                            <label for="Straat" class="control-label">Straat</label>
                            <input type="text" name="Straat" class="form-control" id="Straat" 
                                   value="<?php
                                   if (isset($_POST["Straat"])) {
                                       print($_POST["Straat"]);
                                   } else {
                                       print("Straat");
                                   }
                                   ?>" 
                                   required="required">
                        </div>
                        <div class="form-group">
                            <label for="Huisnummer" class="control-label">Huisnummer</label>
                            <input type="number" name="Huisnummer" class="form-control" id="Huisnummer" 
                                   value="<?php
                                   if (isset($_POST["Huisnummer"])) {
                                       print($_POST["Huisnummer"]);
                                   } else {
                                       print("Huisnummer");
                                   }
                                   ?>" 
                                   required="required">
                        </div>
                        <div class="form-group">
                            <label for="Stad" class="control-label">Gemeente/Stad</label>
                            <select name="Stad" class="form-control" id="Stad">
                                <?php
                                foreach ($Wstvllijst as $Wstvl) {
                                    ?>
                                    <option value="<?php print($Wstvl->getGemeentenaam()); ?>">
                                        <?php print($Wstvl->getGemeentenaam()); ?></option>
                                    <?php
                                }
                                ?>
                            </select>    
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label">Email</label>
                            <input type="email" name="Email" class="form-control" id="Email" 
                                   placeholder="<?php
                                   if (isset($_POST["Email"])) {
                                       print($_POST["Email"]);
                                   } else {
                                       print("Email");
                                   }
                                   ?>" 
                                   required="required">
                        </div>
                        <div class="form-group">
                            <label for="Telefoon" class="control-label">Telefoon</label>
                            <input type="text" name="Telefoon" class="form-control" id="Telefoon" 
                                   value="<?php
                                   if (isset($_POST["Telefoon"])) {
                                       print($_POST["Telefoon"]);
                                   } else {
                                       print("Telefoon");
                                   }
                                   ?>" 
                                   required="required">
                        </div>
                        <div class="form-group">
                            <label for="Boodschap" class="control-label">Boodschap</label>
                            <textarea id="message" class="form-control" name="Boodschap"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Promotie" class="control-label">Promotie</label>
                            <input type="text" name="Promotie" class="form-control" id="Promotie" 
                                   value="<?php
                                   if (isset($_POST["Promotie"])) {
                                       print($_POST["Promotie"]);
                                   } else {
                                       print("Promotie");
                                   }
                                   ?>" 
                                   required="required">
                        </div>

                    </form>
                </div>
            </div>
            <!--einde inhoud-->


        </div> <!-- om rechts te floaten werd een extra div met class 'Jumbotron' toegevoegd -->
    </div> <!--div om breedte te beperken -->
</section>  <!-- structuur aanbrengen -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
