<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $recipient = $_POST["to"];
    $message = $_POST["isi"];
    $sender = "vincentve42@gmail.com";

    // Prepare and execute the SQL query
    $sql = "INSERT INTO menfes (dari, ke, isi) VALUES ('$name', '$recipient', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
