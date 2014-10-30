<section id="inhoud">  <!-- structuur aanbrengen --> 
    <div id="contact" class="container">
        <div class="jumbotron">
            <!-- TEL nog derbij -->
            <form class="form-horizontal" action="#" method="get">
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Emailadres" required="required">
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label">Onderwerp</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Onderwerp" required="required">
                </div>
                <div class="form-group">
                    <label for="message" class="control-label">Boodschap</label>
                    <textarea id="message" class="form-control" name="message"></textarea>
                </div>
                <div class="form-group col-md-12 button">
                    <button type="submit" class="btn btn-primary" name="verzend">verzend</button><br>
                    <?php
                    if (isset($_GET["email"])) {

                        echo "<h2>Uw invoer :</h2>";
                        print("Email: " . $email);
                        echo "<br>";
                        print("Onderwerp: " . $subject);
                        echo "<br>";
                        print("Boodschap: " . $message);
                        echo "<br>";
                    }
                    ?>        
                </div>
            </form>
        </div>
    </div>
    <!--einde inhoud-->
</section>  <!-- structuur aanbrengen -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" </script>
