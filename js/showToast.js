// Dodajemy nasłuchiwanie zdarzenia 'DOMContentLoaded', aby skrypt wykonał się po załadowaniu całej zawartości strony
document.addEventListener('DOMContentLoaded', (event) => {
    // Wypisujemy komunikat debugowania do konsoli, informując, że strona została załadowana
    console.debug('Strona załadowana');

    // Próba uruchomienia kodu wewnątrz bloku try-catch, aby obsłużyć ewentualne błędy
    try {
        // Inicjalizujemy i pokazujemy toast za pomocą jQuery i Bootstrap
        $('.toast').toast('show');

        // Sprawdzamy, czy toast jest widoczny po krótkim czasie
        setTimeout(function () {
            // Sprawdzamy, czy element toast ma klasę 'show'
            if ($('.toast').hasClass('show')) {
                // Jeśli tak, wypisujemy komunikat do konsoli, że toast został pokazany pomyślnie
                console.log('Toast pokazany pomyślnie');
            } else {
                // Jeśli nie, wypisujemy komunikat o błędzie do konsoli
                console.error('Toast nie został pokazany pomyślnie');
            }
        }, 500); // Ustawiamy czas na 500 ms, aby dać czas na pokazanie toastu
    } catch (error) {
        // W przypadku błędu, wypisujemy komunikat o błędzie do konsoli
        console.error('Wystąpił błąd przy pokazywaniu toastu:', error);
    }
});
