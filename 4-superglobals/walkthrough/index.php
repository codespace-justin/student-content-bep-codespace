<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals-Name</title>
</head>

<body>

    <?php
        session_start();
    ?>

    <h2>Superglobals</h2>

    <br>
    <hr><br>

    Hi, what is your name?
    <form action="./inc/age.php" method="get">
        <input type="text" name="firstname">
        <input type="submit" value="nameSubmit">
    </form>

    
    <?php
        if (isset($_GET['nameSubmit'])) {
            $_SESSION['firstname'] = $_GET['nameSubmit'];
        }
    ?>

</body>

</html>