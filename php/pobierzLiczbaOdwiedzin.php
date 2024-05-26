<?php
session_start();

if (!isset($_SESSION['odwiedzony'])) {
    $_SESSION['liczbaOdwiedzin'] = 0;

    //połączenie z bazą danych- najwygodniej wstawić za pomocą require("plik.php");
    require_once "connectionSettings.php";

    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

    if (!$conn) {
        echo ('Nie można połączyć z bazą danych' . mysqli_connect_error());
        exit;
    }

    //wysłanie zapytania--------------------------------------------
    $sql = "SELECT liczba FROM odwiedziny WHERE id=1"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if (!$result) {
        echo "Błąd zapytania: " . mysqli_error($conn);
    }

    $liczbaOdwiedzin = 0;
    //wyświetlenie wyników, w zapytaniu select można pobrać wyniki
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $liczbaOdwiedzin = $row['liczba'];
            break;
        }
    } else {
        echo "Nie znaleziono rekordów";
    }

    $liczbaOdwiedzin++;
    $sql = "UPDATE odwiedziny SET liczba = $liczbaOdwiedzin WHERE id=1"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if (!$result) {
        echo "Błąd zapytania: " . mysqli_error($conn);
    }

    //zamknięcie połączenia---------------------------------------------
    mysqli_close($conn);


    $_SESSION['liczbaOdwiedzin'] = $liczbaOdwiedzin;
    $_SESSION['odwiedzony'] = true;
}
?>