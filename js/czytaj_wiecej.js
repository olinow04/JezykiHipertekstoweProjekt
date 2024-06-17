document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll('.btn-read-more');
    buttons.forEach(function (button) {
        var fullText = button.previousElementSibling.querySelector('.full-text');
        fullText.style.display = 'none'; // Początkowo ukrywamy pełny tekst

        button.addEventListener('click', function () {
            if (fullText.style.display === 'none' || fullText.style.display === '') {
                fullText.style.display = 'block';
                button.innerText = 'czytaj mniej';
            } else {
                fullText.style.display = 'none';
                button.innerText = 'czytaj więcej';
            }
        });
    });
});
