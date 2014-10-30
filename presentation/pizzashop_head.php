<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <!-- breedte volgens device breedte (voor mobiel,pc,...) -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Pizzashop home</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  <!-- bootstrap koppelen en basis template -->
        <link rel="stylesheet" href="css/style.css"> <!-- eigen stylesheet (achter bootstrap te plaatsen!!!) -->

        <!-- Google web fonts API -->
        <link href="http://fonts.googleapis.com/css?family=Tangerine" 
              rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery.js"></script>  <!-- bootstrap koppelen en basis template -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="bootstrap/js/modernizr.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>  <!-- bootstrap koppelen en basis template -->
        <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#carousel-example-generic1').carousel({
                    interval: 5000
                });
                $('#carousel-example-generic2').carousel({
                    interval: 4000
                });
                $('#carousel-example-generic3').carousel({
                    interval: 400
                })

            });
        </script>
                <!--[if lt IE 9]> <script src="html5shiv.js"></script>
                        <![endif]-->
        <style>
            table { border-collapse: collapse;
                    min-width:300px;}
            td, th { border: 1px solid black; padding: 3px; }
            th { background-color: #ddd}
        </style>
        <script>
            $('#hm li').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
            })
        </script>
    </head>
