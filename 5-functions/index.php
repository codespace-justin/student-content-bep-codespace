
<form action="#" method="get">
    <input type="number" name="sugar">
    <input type="number" name="milk">
    <input type="number" name="coffee">
    <input type="submit" name="submit">
</form>


<?php

    function makeCoffee($sugar, $milk, $coffee) {

        echo "Your cup of coffee contains $sugar teaspon(s) of suger,"
            . " $milk ml of milk"
            . ", and $coffee mg of coffee";

    }

    if(isset($_GET['submit'])) {

        $sugarInput = $_GET['sugar'];
        $milkInput = $_GET['milk'];
        $coffeeInput = $_GET['coffee'];

        // pass by value
        makeCoffee(2, 100, 80);

        // pass by reference:
        makeCoffee($sugarInput, $milkInput, $coffeeInput);
    }
 
?>