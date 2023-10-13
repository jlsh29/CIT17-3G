<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variables</title>
</head>
<body>
    <?php
    echo "SUPER GLOBAL <br><br>";

    echo $_SERVER["DOCUMENT_ROOT"]; // IDENTIFY THE ROOT OF THE FILE.
    echo "<br>";
    echo $_SERVER["PHP_SELF"]; // IDENTIFY THE FOLDER AND THE FILE NAME.
    echo "<br>";
    echo $_SERVER["SERVER_NAME"]; // IDENTIFY THE HOST.
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"]; //IDENTIFY IF USING GET OR POST.
    

    //echo $_GET[""]; //GET is use to display the data.

    //echo $_POST[""]; //POST is use to display the data.

    //echo $_REQUEST[""]; // if user want to access a data. 

    //echo $_FILES[""]; //FILES is to access the files you uploaded.

    //$_SESSION[""]; //Session is temporary memory

    //$_COOKIE[]; //

    //$_ENV[];
    ?>
</body>
</html>