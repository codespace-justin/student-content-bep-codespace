
<?php

# - Challenge 2:
$person1 = [
    'height' => 170, 
    'age'=>24, 
    'shoeSize'=>8
];

print_r($person1);


# - Challenge 3:

$class = [];

    # - person 1
    $person2 = [
        'height' => 170, 
        'age'=>24, 
        'shoeSize'=>6
    ];

    # - person 2
    $person3 = [
        'height' => 177, 
        'age'=>19, 
        'shoeSize'=>9
    ];

# push people into array
array_push($class, [$person1, $person2, $person3]);

echo "<br><br>";

# display array
print_r($class);


echo "<br><br>";


echo $class[$person2];

?>
