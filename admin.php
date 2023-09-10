<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}


$sql = "SELECT * FROM menfes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nama</th><th>Pengirim</th><th>Isi</th><th></th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["dari"] . "</td>";
        echo "<td>" . $row["ke"] . "</td>";
        echo "<td>" . $row["isi"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found in the database.";
}
// Close the database connection
$conn->close();
?>

