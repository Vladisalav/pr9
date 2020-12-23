<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_base1"; //повинна бути створена в субд

// Встановлення з'єднання 
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"."<br />";

$sql = mysqli_query($conn, "SELECT * FROM tab1");
$myrow = mysqli_fetch_array($sql);

while($row=mysqli_fetch_array($sql))
{
echo $row['row0'],' ', $row['row1'],' ', $row['row2'],' ', $row['row3']."<br />";
}


?>