<?php
require_once "connectionSettings.php";

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$conn) {
    exit('Nie można połączyć z bazą danych' . mysqli_connect_error());
}

// Dodanie wpisu do bazy danych
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = test_input($_POST['first_name']);
    $last_name = test_input($_POST['last_name']);
    $message = test_input($_POST['message']);

    $sql = "INSERT INTO goscie (first_name, last_name, message) VALUES ('$first_name', '$last_name', '$message')";
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    } else {
        echo "success";
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);
?>