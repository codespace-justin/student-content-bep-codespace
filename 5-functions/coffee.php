
<form action="#" method="get">
    <input type="number" name="sugar" placeholder="spoons of suger">
    <input type="number" name="milk" placeholder="ml of milk">
    <input type="number" name="coffee" required placeholder="mg of coffee">
    <input type="submit" name="submit">
</form>



<?php

    function makeCoffee($coffee, $sugar = 0, $milk = 0) {

        return "Your cup of coffee contains $sugar teaspon(s) of suger,"
            . " $milk ml of milk"
            . ", and $coffee mg of coffee";

    }

    if(isset($_GET['submit'])) {

        // Use GET superglobal to get data stored in get request
        $sugarInput = $_GET['sugar'];
        $milkInput = $_GET['milk'];
        $coffeeInput = $_GET['coffee'];


        if ($milkInput == null || $sugarInput == null) {
            
           echo makeCoffee($coffeeInput);   

        } else {

           echo makeCoffee($coffeeInput, $milkInput, $sugarInput);
        }

    }
 
?>