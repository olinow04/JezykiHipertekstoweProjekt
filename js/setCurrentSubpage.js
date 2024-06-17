// Nasłuchiwanie zdarzenia 'DOMContentLoaded', które jest wyzwalane, gdy cała zawartość strony została załadowana
document.addEventListener("DOMContentLoaded", function () {
    // Pobieramy wszystkie linki w nawigacji (elementy a wewnątrz .navbar-nav) i przechowujemy je w tablicy navLinks
    const navLinks = document.querySelectorAll('.navbar-nav a');
    // Pobieramy bieżącą ścieżkę (URL) strony
    const currentLocation = location.pathname;

    // Iterujemy przez wszystkie linki w nawigacji
    for (const link of navLinks) {
        // Pobieramy wartość atrybutu 'href' każdego linku, czyli ścieżkę docelową
        const linkPath = link.getAttribute('href');

        // Sprawdzamy, czy bieżąca ścieżka kończy się wartością linkPath
        if (currentLocation.endsWith(linkPath)) {
            // Jeśli tak, oznacza to, że bieżąca strona odpowiada linkowi w nawigacji
            // Dodajemy klasę 'active', aby wizualnie wyróżnić aktywny link
            link.classList.add('active');
            // Przerywamy pętlę, gdyż znaleźliśmy aktywny link
            break;
        }
        // Jeśli bieżąca ścieżka nie kończy się na '.php', co sugeruje, że jest to link do strony głównej lub innej bez rozszerzenia
        else if (!currentLocation.endsWith('.php')) {
            // Dodajemy klasę 'active', aby wizualnie wyróżnić link, który nie kończy się na '.php'
            link.classList.add('active');
            // Przerywamy pętlę, gdyż znaleźliśmy aktywny link
            break;
        }
    }
});
