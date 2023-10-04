<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <h1> Jelisha Mae Banaria </h1>
    <form action="jel.php" method="get">
        section: <input type="text" name="section">
        <br>
        <input type="submit">
    </form>
    <br>
    Your Section: 
    <?php echo $_GET["section"] ?>
    </body>
</html>