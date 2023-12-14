<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Banaria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $studentID = $_POST['studentID'];
  $firstName = $_POST['firstName'];

  if (empty($studentID)) { 
    $sql = "INSERT INTO Student (FirstName) VALUES ('$firstName')";
  } else { 
    $sql = "UPDATE Student SET FirstName='$firstName' WHERE StudentID=$studentID";
  }

  if ($conn->query($sql) === TRUE) {
    header("Location: student.html"); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["StudentID"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
