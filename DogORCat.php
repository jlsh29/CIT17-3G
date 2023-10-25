<!DOCTYPE html>
<html>
<head>
    <title>Pet Lover Detector</title>
</head>
<body>
    <h2>Are You a Cat Lover or a Dog Lover?</h2>
    <form method="post" action="">
        <label for="name">Enter Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="age">Enter Age:</label>
        <input type="number" name="age" required><br><br>
        
        <label for="favorite_pet">Enter Favorite Pet:</label>
        <select name="favorite_pet" required>
            <option value="DOG">DOG</option>
            <option value="CAT">CAT</option>
        </select><br><br>

        <?php
        if (isset($_POST['favorite_pet'])) {
            $favorite_pet = $_POST['favorite_pet'];

            if ($favorite_pet == "DOG") {
                echo 'You are a Dog Lover';
            } elseif ($favorite_pet == "CAT") {
                echo 'You are a Cat Lover';
            }
        }
        
        ?>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>