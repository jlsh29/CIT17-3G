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
                echo '<label for="dog_breed">Choose a Dog Breed:</label>
                <select name="dog_breed">
                    <option value="Labrador">Labrador</option>
                    <option value="Golden Retriever">Golden Retriever</option>
                    <option value="German Shepherd">German Shepherd</option>
                </select><br><br>';
                
                echo 'You are a Dog Lover';
            } elseif ($favorite_pet == "CAT") {
                echo '<label for="cat_breed">Choose a Cat Breed:</label>
                <select name="cat_breed">
                    <option value="Siamese">Siamese</option>
                    <option value="Persian">Persian</option>
                    <option value="Maine Coon">Maine Coon</option>
                </select><br><br>';
                
                echo 'You are a Cat Lover';
            }
        }
        ?>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>