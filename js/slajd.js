// Dodajemy nasłuchiwanie zdarzenia 'DOMContentLoaded', aby skrypt wykonał się po załadowaniu całej zawartości strony
document.addEventListener('DOMContentLoaded', function () {
    // Pobieramy przyciski 'Poprzedni' i 'Następny' oraz przechowujemy je w zmiennych
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    // Pobieramy wszystkie miniaturki i przechowujemy je w zmiennej
    const thumbnails = document.querySelectorAll('.thumbnail');
    // Pobieramy wszystkie slajdy karuzeli i przechowujemy je w zmiennej
    const slides = document.querySelectorAll('.carousel-item');
    // Ustawiamy indeks aktualnie wyświetlanego slajdu na 0 (pierwszy slajd)
    let currentIndex = 0;

    // Funkcja do pokazywania slajdu na podstawie indeksu
    function showSlide(index) {
        // Przełączamy klasy 'active' dla każdego slajdu i miniaturki w zależności od tego, czy odpowiadają aktualnemu indeksowi
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
            thumbnails[i].classList.toggle('active', i === index);
        });
        // Aktualizujemy indeks aktualnie wyświetlanego slajdu
        currentIndex = index;
    }

    // Dodajemy nasłuchiwanie zdarzenia 'click' na przycisk 'Poprzedni'
    prevBtn.addEventListener('click', () => {
        // Obliczamy nowy indeks (przesunięcie wstecz) z uwzględnieniem liczby slajdów (pętla)
        const newIndex = (currentIndex - 1 + slides.length) % slides.length;
        //dodajemy + slides.length żeby w przypadku indexu 0 nie mieć indexu na minusie 
        // Wywołujemy funkcję do pokazania nowego slajdu
        showSlide(newIndex);
    });

    // Dodajemy nasłuchiwanie zdarzenia 'click' na przycisk 'Następny'
    nextBtn.addEventListener('click', () => {
        // Obliczamy nowy indeks (przesunięcie naprzód) z uwzględnieniem liczby slajdów (pętla)
        const newIndex = (currentIndex + 1) % slides.length;
        // Wywołujemy funkcję do pokazania nowego slajdu
        showSlide(newIndex);
    });

    // Dodajemy nasłuchiwanie zdarzenia 'click' na każdą miniaturkę
    thumbnails.forEach((thumbnail, i) => {
        thumbnail.addEventListener('click', () => {
            // Pokazujemy slajd odpowiadający klikniętej miniaturce
            showSlide(i);
        });
    });
});
