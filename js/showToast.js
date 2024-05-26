document.addEventListener('DOMContentLoaded', (event) => {
    console.debug('Strona zaladowana');
    try {
        $('.toast').toast('show');

        // Sprawdzanie, czy toast jest widoczny
        setTimeout(function () {
            if ($('.toast').hasClass('show')) {
                console.log('Toast pokazany pomyślnie');
            } else {
                console.error('Toast nie został pokazany pomyślnie');
            }
        }, 500); // Czas na pokazanie toastu
    } catch (error) {
        console.error('Wystąpił błąd przy pokazywaniu toastu:', error);
    }

});
