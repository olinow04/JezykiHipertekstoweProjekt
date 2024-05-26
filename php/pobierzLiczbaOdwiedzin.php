<?php
session_start();

//połączenie z bazą danych- najwygodniej wstawić za pomocą require("plik.php");
require_once "connectionSettings.php";

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$conn) {
    exit('Nie można połączyć z bazą danych' . mysqli_connect_error());
}

if (!isset($_SESSION['odwiedzony'])) {
    $_SESSION['liczbaOdwiedzin'] = 0;

    //wysłanie zapytania--------------------------------------------
    $sql = "SELECT liczba FROM odwiedziny WHERE id=1"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    }

    $liczbaOdwiedzin = 0;
    //wyświetlenie wyników, w zapytaniu select można pobrać wyniki
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $liczbaOdwiedzin = $row['liczba'];
            break;
        }
    } else {
        exit("Nie znaleziono rekordów");
    }

    $liczbaOdwiedzin++;
    $sql = "UPDATE odwiedziny SET liczba = $liczbaOdwiedzin WHERE id=1"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    }

    $_SESSION['liczbaOdwiedzin'] = $liczbaOdwiedzin;
    $_SESSION['odwiedzony'] = true;
} else {
    //wysłanie zapytania--------------------------------------------
    $sql = "SELECT liczba FROM odwiedziny WHERE id=1"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if (!$result) {
        exit("Błąd zapytania: " . mysqli_error($conn));
    }

    //wyświetlenie wyników, w zapytaniu select można pobrać wyniki
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['liczbaOdwiedzin'] = $row['liczba'];
            break;
        }
    } else {
        exit("Nie znaleziono rekordów");
    }
}

//zamknięcie połączenia---------------------------------------------
mysqli_close($conn);
?>