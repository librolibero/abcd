<?php
$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "cw";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ksiazka (nazwisko, imie, telefon, miasto) VALUES ('Malinowski', 'Janusz', '345456567', 'Chojnice')"; //tu wstawiamy kod(zapytanie) jesli dobrze=wstawiono 

if ($conn->query($sql) === TRUE) {
    echo "Wstawiono.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="druga.php">Listowanie rekordow</a>