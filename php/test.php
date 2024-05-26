<?php
session_start();

if (!isset($_SESSION['odwiedzony'])) {
    //połączenie z bazą danych- najwygodniej wstawić za pomocą require("plik.php");
    require_once "connect.php";

    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    //$conn = mysqli_connect('localhost', 'a.kowalska', 'myhaslosql ', 'a.kowalska');

    if (!$conn) {
        echo ('Nie można połączyć z bazą danych' . mysqli_connect_error());
        exit;
    }

    //wysłanie zapytania--------------------------------------------
    $sql = "SELECT liczba FROM odwiedziny WHERE id=1"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
    $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
    if ($result) {
        echo "Zapytanie wysłane poprawnie";
    } else {
        echo "Błąd zapytania: " . mysqli_error($conn);
    }

    //wyświetlenie wyników--------------------------------------------------
// w zapytaniu select można pobrać wyniki

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['liczbaOdwiedzin'] = $row['liczba'];
        }
    } else
        echo "Nie znaleziono rekordów";

    //zamknięcie połączenia---------------------------------------------
    mysqli_close($conn);

    $_SESSION['odwiedzony'] = true;
}
?>