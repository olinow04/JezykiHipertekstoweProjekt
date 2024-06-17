<?php
// Import pliku z ustawieniami połączenia
require_once "connectionSettings.php";

// Nawiązanie połączenia z bazą danych MySQL
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

// Sprawdzenie czy udało się połączyć z bazą danych
if (!$conn) {
    exit('Nie można połączyć z bazą danych' . mysqli_connect_error());
}

// Dodanie wpisu do bazy danych po otrzymaniu żądania POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie i przetworzenie danych z formularza
    //te linie kodu pobierają dane z formularza, przetwarzają je w celu zabezpieczenia przed atakami oraz usuwają niepotrzebne znaki
    $first_name = test_input($_POST['first_name']);
    $last_name = test_input($_POST['last_name']);
    $message = test_input($_POST['message']);

    // Zapytanie SQL do dodania wpisu do tabeli 'goscie'
    $sql = "INSERT INTO goscie (first_name, last_name, message) VALUES ('$first_name', '$last_name', '$message')";

    // Wykonanie zapytania i sprawdzenie rezultatu
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    } else {
        echo "success"; // Wyświetlenie komunikatu sukcesu
    }
}

// Funkcja pomocnicza do przetwarzania danych z formularza (usuwa niepotrzebne znaki)
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Zamknięcie połączenia z bazą danych
mysqli_close($conn);
?>