<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <h1> Enter Your Full Name </h1>
    <form action="jel.php" method="get">
        Full Name: <input type="text" name="section">
        <br>
        <input type="submit">
    </form>
    <br>
    Your Full Name: 
    <?php echo $_GET["section"] ?>
    </body>
</html>