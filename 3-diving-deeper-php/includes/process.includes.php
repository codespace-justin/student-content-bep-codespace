    <!-- php processing -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Disply process</title>

        <style>
            .display {

                background-color: black;
                color: #fff;
                padding: 1rem;
                margin: 1px 30vw;
           

            }
        </style>
    </head>

    <body>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores amet, quia repudiandae aliquid, labore adipisci, perspiciatis voluptates ab quam ipsa! 
        <br>
        Cupiditate dolore officiis vitae! Quisquam optio ab exercitationem temporibus.

        <br>
        <br>

        <?php

        /*
            $_GET = ["name", "lastname", "password", "fav_language", "qualified"];
            $_POST = [];
        */

        echo "<li class='display'>" . $_GET['name'] . "</li>";

        echo  "<li class='display'>" . $_GET["lastName"] . "</li>";

        echo  "<li class='display'>" . $_GET["password"] . "</li>";

        echo  "<li class='display'>" . $_GET["fav_language"] . "</li>";

        if ($_GET["qualified"]) {

            echo "<li class='display'>" . "You have a degree" . "</li>";
        }

        ?>


    </body>

    </html>