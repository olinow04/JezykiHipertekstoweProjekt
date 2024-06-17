<?php
// Import pliku z ustawieniami połączenia
require_once "connectionSettings.php";

// Nawiązanie połączenia z bazą danych MySQL
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

// Sprawdzenie czy udało się połączyć z bazą danych
if (!$conn) {
    exit('Nie można połączyć z bazą danych' . mysqli_connect_error());
}

// Zapytanie SQL do pobrania wpisów z tabeli 'goscie'
$query = "SELECT * FROM goscie";

// Wykonanie zapytania do bazy danych
$result = mysqli_query($conn, $query);
if (!$result) {
    // Wyjście z programu w przypadku błędu zapytania
    exit("Błąd zapytania: " . mysqli_error($conn));
}

// Sprawdzenie czy zapytanie zwróciło wyniki
if (mysqli_num_rows($result) > 0) {
    // Przygotowanie tablicy na wpisy
    $wpisy = array();

    // Pobranie danych z wyników zapytania i zapisanie ich do tablicy
    while ($row = mysqli_fetch_assoc($result)) {
        $wpisy[] = $row;
    }

    // Zamknięcie połączenia z bazą danych
    mysqli_close($conn);

    // Zwrócenie wyników jako dane w formacie JSON
    echo json_encode($wpisy);
} else {
    // Wyjście z programu w przypadku braku wyników zapytania
    exit("Brak wpisów");
}
?>