document.addEventListener("DOMContentLoaded", function () {
    pobierzWpisy();
});


function wyslijFormularz() {
    var daneFormularza = new FormData(document.getElementById("ksiega-wpis"));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/process_form.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            // Sprawdź odpowiedź z serwera i wyświetl komunikat
            if (xhr.responseText === "success") {
                wyswietlKomunikat("success", "Przyjęto wpis!");
                pobierzWpisy();
            } else {
                wyswietlKomunikat("danger", "Błąd! Coś poszło nie tak.");
            }
        }
    };
    xhr.onerror = function () {
        console.error("Wystąpił błąd podczas wysyłania żądania.");
    };
    xhr.send(daneFormularza);
    return false;
}

function wyswietlKomunikat(typ, tresc) {
    var komunikatDiv = document.createElement("div");
    komunikatDiv.className = "alert alert-" + typ;
    komunikatDiv.innerHTML = tresc;
    var kontener = document.getElementById("komunikaty");
    kontener.innerHTML = "";
    kontener.appendChild(komunikatDiv);
}

function pobierzWpisy() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "php/getEntries.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var wpisy = JSON.parse(xhr.responseText);
            var tabelaBody = document.getElementById("tabela-wpisow-body");
            tabelaBody.innerHTML = "";

            wpisy.forEach(function (wpis) {
                var wiersz = "<tr><td>" + wpis.first_name + "</td><td>" + wpis.last_name + "</td><td>" + wpis.entry_date + "</td><td>" + wpis.message + "</td></tr>";
                tabelaBody.innerHTML += wiersz;
            });
        }
    };
    xhr.onerror = function () {
        console.error("Wystąpił błąd podczas pobierania wpisów.");
    };
    xhr.send();
}