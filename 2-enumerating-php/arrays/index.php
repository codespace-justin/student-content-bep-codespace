<?php

    function brake() {
        echo "<br><hr><br>";
    }


/* --------------------------------
    Concatenation
--------------------------------- */

echo "<h2> Concatenation Example </h2>"; 

    $one = "Justin";
    $two = "Jenecke";
    $three = 2;

    echo "My name is " . $one. " " . $two;



    brake();
/* --------------------------------
    Array
--------------------------------- */

    echo "<h2> Single Array Examples </h2>"; 

    $cars = ["honda", 'audi', 'ford'];

    echo $cars[2];



    brake();
/* --------------------------------
    2D Array
--------------------------------- */

    echo "<h2> Multidemensional Array Examples </h2>"; 

    $exampleArray = [ 
        ["Justin", "Jordan", "Don"], 
        [54, 546, 87]
    ];
                   //row  //col
    echo $exampleArray[0][2] . "<br>";
    echo $exampleArray[1][2];



    brake();
/* --------------------------------
    ADM
--------------------------------- */

    // add - 1D 
    echo "Standard Array<br>";
    var_dump($cars);
    echo "<br>";

    array_push($cars, "nissan");
    // display after adding elements
    var_dump($cars);

    echo "<br>";echo "<br>";echo "<br>";

    //----------

    // add - mD 
    echo "Mulit-D Array<br>";
    var_dump($exampleArray);
    echo "<br>";   echo "<br>";

    array_push($exampleArray[0], "Leandro");
    array_push($exampleArray[1], 22);

    // display after adding elements
    var_dump($exampleArray);



?>