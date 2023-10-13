<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
    // single comment
    /* multiple comment */
    // Syntax only for PHP.
    ?>

    <p> This is a <?php echo "Jelisha"; ?> paragraph </p>
    <?php echo "This is ALSO a paragraph <br><br>"; ?>

    <?php 
    // Scalar Types (contain one variable)
    $string = "Jelisha Mae";
    $int = 23;
    $float = 23.23333;
    $bool = true;

    //Array type (Multiple variable)
    $name = array("Jelisha" , "Banaria");
    $array = ["Jelisha" , "Banaria"];

    echo " The string Value is $string <br> The integer value is $int <br> The float value is $float <br>"; 
    echo $array[0];
    ?>

    <p> I am <?php echo $string; ?> and my age is <?php echo $int; ?> </p>    

</body>
</html>