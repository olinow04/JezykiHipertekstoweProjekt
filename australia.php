<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Niezwykłe miejsca przyrodnicze</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Oliwier Nowak">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/c1354519af.js" crossorigin="anonymous"></script>
    <script src="js/showToast.js"></script>
    <script src="js/setCurrentSubpage.js"></script>
    <script src="js/slajd.js"></script> <!-- skrypt do slajdera w galerii zdjec !-->
    <?php include 'php/pobierzLiczbaOdwiedzin.php'; ?>
</head>

<body>
    <header class="navbar mynav">
        <div class="container text-center">
            <div class="row contact-info">
                <div class="col-md-4">
                    <span><i class="fas fa-mobile-alt mr-3"></i>800&nbsp;726&nbsp;932</span>
                </div>

                <div class="col-md-4">
                    <span><i class="fas fa-fax mr-3"></i>945&nbsp;723&nbsp;415</span>
                </div>

                <div class="col-md-4">
                    <span><i
                            class="fas fa-envelope-open-text mr-3"></i>najciekawsze.miejsca.przyrodnicze@outlook.com</span>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img id="logo-conf" src="img/logo_icon.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-conf">
                    <a class="btn btn-success me-2 my-2 nav-link" href="index.php">Europa</a>
                    <a class="btn btn-success me-2 my-2 nav-link" href="azja.php">Azja</a>
                    <a class="btn btn-success me-2 my-2 nav-link" href="afryka.php">Afryka</a>
                    <a class="btn btn-success me-2 my-2 nav-link" href="australia.php">Australia</a>
                    <a class="btn btn-success me-2 my-2 nav-link" href="ameryka_polnocna.php">Ameryka
                        Północna</a>
                    <a class="btn btn-success me-2 my-2 nav-link" href="ameryka_poludniowa.php">Ameryka
                        Południowa</a>
                    <a class="btn btn-success me-2 my-2 nav-link" href="ksiega_gosci.php">Księga gości</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="example-background">
        <h1>Niezwykłe miejsca przyrodnicze</h1>
    </main>

    <article class="container my-5">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/jezioro_hillier.jpg" class="d-block w-100 rounded border"
                        alt="Jezioro Hillier, Wyspa Middle">
                    <div class="carousel-caption">
                        <h4>Jezioro Hillier, Wyspa Middle</h4>
                        <hr>
                        <p class="picture-text"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/rafa_koralowa.jpg" class="d-block w-100 rounded border"
                        alt="Wielka Rafa Koralowa, Morze Koralowe">
                    <div class="carousel-caption">
                        <h4>Wielka Rafa Koralowa, Morze Koralowe</h4>
                        <hr>
                        <p class="picture-text"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/whitsunday_wyspa.jpg" class="d-block w-100 rounded border"
                        alt="Wyspa Whitsunday,  Morze Koralowe">
                    <div class="carousel-caption">
                        <h4>Wyspa Whitsunday, Morze Koralowe</h4>
                        <hr>
                        <p class="picture-text"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/rzeka_margaret.webp" class="d-block w-100 rounded border"
                        alt="Rzeka Margaret, Australia Zachodnia">
                    <div class="carousel-caption">
                        <h4>Rzeka Margaret, Australia Zachodnia</h4>
                        <hr>
                        <p class="picture-text"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/orpheus.jpg" class="d-block w-100 rounded border"
                        alt="Wyspa Orpheus, Wielka Rafa Koralowa">
                    <div class="carousel-caption">
                        <h4>Wyspa Orpheus, Wielka Rafa Koralowa</h4>
                        <hr>
                        <p class="picture-text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-controls">
            <button id="prevBtn" class="carousel-control" aria-label="Poprzedni">
                <!-- Przycisk do przewijania do poprzedniego elementu !-->
                <span class="carousel-control-icon" aria-hidden="true">&lsaquo;</span>
                <!-- Ikona przycisku !-->
            </button>
            <button id="nextBtn" class="carousel-control" aria-label="Następny">
                <!-- Przycisk do przewijania do następnego elementu !-->
                <span class="carousel-control-icon" aria-hidden="true">&rsaquo;</span>
                <!-- Ikona przycisku !-->
            </button>
        </div>
        <div class="carousel-thumbnails">
            <!-- Kontener dla miniaturek, które umożliwiają bezpośrednie przejście do wybranego elementu karuzeli. !-->
            <img src="img/jezioro_hillier.jpg" class="thumbnail active" data-slide-to="0"
                alt="Jezioro Hillier, Wyspa Middle">
            <img src="img/rafa_koralowa.jpg" class="thumbnail" data-slide-to="1"
                alt="Wielka Rafa Koralowa, Morze Koralowe">
            <img src="img/whitsunday_wyspa.jpg" class="thumbnail" data-slide-to="2"
                alt="Wyspa Whitsunday,  Morze Koralowe">
            <img src="img/rzeka_margaret.webp" class="thumbnail" data-slide-to="3"
                alt="Rzeka Margaret, Australia Zachodnia">
            <img src="img/orpheus.jpg" class="thumbnail" data-slide-to="4" alt="Wyspa Orpheus, Wielka Rafa Koralowa">

        </div>
    </article>


    <footer class="bg-dark">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-3">
                    <h6 class="text-uppercase font-weight-bold">Oliwier Nowak strona</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto line-footer">
                    <p><i class="fas fa-building mr-3"></i>&nbsp;ul.&nbsp;Andrzeja&nbsp;Michalskiego&nbsp;17</p>
                    <p><i class="fas fa-city mr-3"></i>&nbsp;31-123&nbsp;Kraków</p>
                </div>
                <div
                    class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-3 d-flex justify-content-center align-items-center">
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="toast-header">
                            <strong>Licznik odwiedzin strony:</strong>
                        </div>
                        <div class="toast-body">
                            <?php echo $_SESSION['liczbaOdwiedzin']; ?> odwiedzin<br>
                            <button type="button" class="btn btn-success me-2 my-2" data-bs-dismiss="toast"
                                aria-label="Close">Zamknij</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-3">
                    <h6 class="text-uppercase font-weight-bold">Skontaktuj się z nami</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto line-footer">
                    <p><i class="fas fa-mobile-alt mr-3"></i>&nbsp;800&nbsp;726&nbsp;932</p>
                    <p><i class="fas fa-fax mr-3"></i>&nbsp;945&nbsp;723&nbsp;415</p>
                    <p><i class="fas fa-envelope-open-text mr-3"></i>&nbsp;najciekawsze.miejsca.przyrodnicze@outlook.com
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>