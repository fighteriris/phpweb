<?php
$servername = "localhost";
$username = "root";
$password = "000000";
$db       = "phptest";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

$sql_query = "SELECT * FROM user_information";
$result = $conn->query($sql_query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["user_name"]. " " . $row["user_token"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
