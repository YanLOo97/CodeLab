<?php
    echo "<h1 style=\"text-align: center;\">This is php </h1>";

    $name="Yan Lin Oo";                     //variable declaration
    var_dump( $name );
    print($name);
    print_r($name);

    $array = ['one','two','three'];         //array

    $assoArray = [                          //associated arrray
        'name'=> 'mgmg',
        'role'=> 'developer'
    ];    

    echo "<pre>";
    var_dump( $assoArray );                 //output

    $result = $name == "Yan Lin Oo" ? "Yes" : "no";             //ternary operator
    echo "$result";
    
    $car = ['bmw','toyota','honda'];

    for ($i = 0; $i < count($car); $i++) {              //loops
        echo $car[$i] .'<br>';
    }

    foreach ($car as $item) {
        echo $item .'<br>';
    }

    function outputmessage($num1, $num2) {              //function
        echo"The result is " . $num1 + $num2;
    }

    outputmessage(10,14);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h3>Methods</h3>

    <p style="margin-left: 50px;">
    <!-- string methods -->
    strlen() <br>
    str_word_count() <br>
    strrev() <br>
    str_shuffle() <br>
    strpos(str,search) <br>
    substr(str, start, end) <br>
    strtoupper() <br>
    strtolower() <br>
    strip_tags() <br>
    str_replace(find,new,string) <br>
    trim() <br> <!-- delete spaces left and right -->
    str_split(string,arg) <br>
    explode(arg,string) <br>
    <!-- math methods -->
    pow(x,y) <br>
    sqrt(x) <br>
    abs(x) <br> 
    round(x) <br> 
    ceil(x) <br>
    floor(x) <br>
    rand(start,end) <br>
    max() <br>
    min() <br>
    <!-- array methods -->
    count() <br>
    current() <br>
    end() <br>
    array_rand() <br>
    array_sum() <br>
    range(start,end) <br>
    in_array(string,$array) <br>
    array_key_exists() <br>
    array_keys() <br>
    array_values() <br>
    inplode() <br> join() <br>
    array_push()pop() unshift()shift() <br>
    sort() <br>
    shuffle() <br>
    </p>

    <hr>

    <?php

    define("NAME","yanlinoo");
    $name = "Yan lin Oo";
    function showMsg(){
        global $name;
        echo $name;
    }
    showMsg();

    ?>
</body>
</html>
