<?php
require_once "connectionSettings.php";

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$conn) {
    exit('Nie można połączyć z bazą danych' . mysqli_connect_error());
}

// Zapytanie SQL do pobrania wpisów
$query = "SELECT * FROM goscie";

// Wykonanie zapytania
$result = mysqli_query($conn, $query);
if (!$result) {
    exit("Błąd zapytania: " . mysqli_error($conn));
}

// Sprawdzenie czy są wyniki
if (mysqli_num_rows($result) > 0) {
    // Przygotowanie tablicy na wpisy
    $wpisy = array();

    // Pobranie danych i zapisanie ich do tablicy
    while ($row = mysqli_fetch_assoc($result)) {
        $wpisy[] = $row;
    }

    mysqli_close($conn);

    // Zwrócenie wyników jako JSON
    echo json_encode($wpisy);
} else {
    exit("Brak wpisów");
}
?>