<?php

session_start();

if (!$_POST['submit']) { 

    echo '<form action="#" method="post">
            <label for="name">First Name</label>
            <input type="text" name="name">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName">
            <input type="submit" name="submit">
    </form>';
}

else {

    $_SESSION['submit'] = $_POST['submit'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['lastname'] = $_POST['lastname'];

    var_dump($_SESSION);

} 

?>