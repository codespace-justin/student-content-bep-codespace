<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals-Age</title>
</head>

<body>

    <?php
        session_start();

        # form redirects here, captures data in GET superglobal and stores it in Session superglobal
        # $_SESSION['firstname'] = $_GET['firstname'];

        echo $_SESSION['firstname'];

    ?>

    <h2>Superglobals</h2>

    <br>
    <hr><br>

    how old are you?
    <form action="./inc/age.php" method="get">
        <input type="text" name="firstname">
        <input type="submit" value="nameSubmit">
    </form>

</body>

</html>