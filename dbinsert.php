<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "INSERT INTO privat (name, kraftstoff, farbe, bauart)
VALUES ('Ferrari', 'Butter', '#cc00cc', 'Kombi');";

$sql = "INSERT INTO privat (name, kraftstoff, farbe, bauart)
VALUES ('Audi', 'Kerosin', '#cc00cc', 'Limousine');";

$sql = "INSERT INTO privat (name, kraftstoff, farbe, bauart)
VALUES ('Mercedes', 'Kerosin', '#cc00cc', 'Kombi');";


// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
