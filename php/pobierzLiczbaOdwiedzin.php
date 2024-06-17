<?php
// Rozpoczęcie sesji
session_start();

// Import pliku z ustawieniami połączenia
require_once "connectionSettings.php";

// Nawiązanie połączenia z bazą danych MySQL
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

// Sprawdzenie czy udało się połączyć z bazą danych
if (!$conn) {
    exit('Nie można połączyć z bazą danych' . mysqli_connect_error());
}

// Sprawdzenie czy zmienna sesyjna 'odwiedzony' jest ustawiona
if (!isset($_SESSION['odwiedzony'])) {
    // Inicjalizacja zmiennej sesyjnej 'liczbaOdwiedzin' na 0
    $_SESSION['liczbaOdwiedzin'] = 0;

    // Pobranie aktualnej liczby odwiedzin z bazy danych
    $sql = "SELECT liczba FROM odwiedziny WHERE id=1";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    }

    // Sprawdzenie czy wynik zapytania zawiera jakiekolwiek rekordy
    if (mysqli_num_rows($result) > 0) {
        // Jeśli tak, pętla while pobiera pierwszy rekord i przypisuje wartość pola 'liczba' do zmiennej $liczbaOdwiedzin
        while ($row = mysqli_fetch_assoc($result)) {
            $liczbaOdwiedzin = $row['liczba'];
            // Przerwanie pętli po pobraniu pierwszego rekordu
            break;
        }
    } else {
        // Jeśli nie znaleziono żadnych rekordów, wyświetl komunikat o błędzie i przerwij działanie skryptu
        exit("Nie znaleziono rekordów");
    }


    $liczbaOdwiedzin++;
    // Aktualizacja liczby odwiedzin w bazie danych
    $sql = "UPDATE odwiedziny SET liczba = $liczbaOdwiedzin WHERE id=1";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    }

    // Ustawienie zmiennej sesyjnej 'liczbaOdwiedzin' na aktualną wartość
    $_SESSION['liczbaOdwiedzin'] = $liczbaOdwiedzin;
    $_SESSION['odwiedzony'] = true;
} else {
    // Pobranie aktualnej liczby odwiedzin z bazy danych
    $sql = "SELECT liczba FROM odwiedziny WHERE id=1";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    }

    // Sprawdzenie czy wynik zapytania zawiera jakiekolwiek rekordy
    if (mysqli_num_rows($result) > 0) {
        // Jeśli tak, pobierz pierwszy rekord i przypisz wartość pola 'liczba' do zmiennej sesyjnej $_SESSION['liczbaOdwiedzin']
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['liczbaOdwiedzin'] = $row['liczba'];
            break;
        }
    } else {
        // Jeśli nie znaleziono rekordów, wyświetl komunikat o błędzie i przerwij działanie skryptu
        exit("Nie znaleziono rekordów");
    }
}



// Zamknięcie połączenia z bazą danych
mysqli_close($conn);
?>