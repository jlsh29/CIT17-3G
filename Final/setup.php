<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Banaria";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection Failed: " . $conn->connect_error);
} else {
echo "Connected Succesfully" . "<br>" ;
}



$sql = "SELECT * FROM student";
$result = $conn->query("$sql");

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            echo    "Student ID: " . $row["studentID"] . "<br>" .
                    "First Name: " . $row["firstName"] . "<br>" .
                    "Last Name: " . $row["lastName"] . "<br>";
            }
    } else {
    echo "Error: " . $sql . "<br>" . $conn->connect_error;
    }
    $conn->close();
?>