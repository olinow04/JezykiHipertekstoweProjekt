// Funkcja wywoływana po załadowaniu całej zawartości strony
document.addEventListener("DOMContentLoaded", function () {
    // Pobierz i wyświetl istniejące wpisy podczas ładowania strony
    pobierzWpisy();
});

// Funkcja obsługująca przesyłanie formularza
function wyslijFormularz() {
    // Pobierz dane z formularza
    var daneFormularza = new FormData(document.getElementById("ksiega-wpis"));
    // Utwórz nowe żądanie HTTP POST
    var xhr = new XMLHttpRequest();
    // Otwórz połączenie z plikiem process_form.php
    xhr.open("POST", "php/process_form.php", true);
    // Obsługa odpowiedzi z serwera
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Jeśli odpowiedź jest sukcesem, wyświetl komunikat i odśwież wpisy
            if (xhr.responseText === "success") {
                wyswietlKomunikat("success", "Przyjęto wpis!");
                pobierzWpisy();
            } else {
                // W przeciwnym razie wyświetl komunikat o błędzie
                wyswietlKomunikat("danger", "Błąd! Coś poszło nie tak.");
            }
        }
    };
    // Obsługa błędu podczas wysyłania żądania
    xhr.onerror = function () {
        console.error("Wystąpił błąd podczas wysyłania żądania.");
    };
    // Wyślij dane formularza do serwera
    xhr.send(daneFormularza);
    // Zresetuj formularz
    document.getElementById("ksiega-wpis").reset();
    // Zwróć false, aby uniemożliwić domyślne zachowanie formularza
    return false;
}

// Funkcja wyświetlająca komunikaty na stronie
function wyswietlKomunikat(typ, tresc) {
    // Utwórz nowy element div dla komunikatu
    var komunikatDiv = document.createElement("div");
    // Dodaj klasy Bootstrap do komunikatu
    komunikatDiv.className = "alert alert-" + typ;
    // Ustaw treść komunikatu
    komunikatDiv.innerHTML = tresc;
    // Pobierz kontener komunikatów na stronie
    var kontener = document.getElementById("komunikaty");
    // Wyczyść zawartość kontenera
    kontener.innerHTML = "";
    // Dodaj komunikat do kontenera
    kontener.appendChild(komunikatDiv);
}

// Funkcja pobierająca wpisy z serwera
function pobierzWpisy() {
    // Utwórz nowe żądanie HTTP GET
    var xhr = new XMLHttpRequest();
    // Otwórz połączenie z plikiem getEntries.php
    xhr.open("GET", "php/getEntries.php", true);
    // Obsługa odpowiedzi z serwera
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Parsowanie odpowiedzi JSON
            var wpisy = JSON.parse(xhr.responseText);
            // Pobierz ciało tabeli na stronie
            var tabelaBody = document.getElementById("tabela-wpisow-body");
            // Wyczyść zawartość ciała tabeli
            tabelaBody.innerHTML = "";

            // Iteracja przez wszystkie wpisy i dodanie ich do tabeli
            wpisy.forEach(function (wpis) {
                var wiersz = "<tr><td>" + wpis.first_name + "</td><td>" + wpis.last_name + "</td><td>" + wpis.entry_date + "</td><td>" + wpis.message + "</td></tr>";
                tabelaBody.innerHTML += wiersz;
            });
        }
    };
    // Obsługa błędu podczas pobierania wpisów
    xhr.onerror = function () {
        console.error("Wystąpił błąd podczas pobierania wpisów.");
    };
    // Wyślij żądanie GET do serwera
    xhr.send();
}
