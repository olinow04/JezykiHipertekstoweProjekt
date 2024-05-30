<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Niezwykłe miejsca przyrodnicze</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Oliwier Nowak">
    <meta name="description" content="Tu zakupisz wszystkie licencje programów" />
    <meta name="keywords" content="html5, strony, internetowe" />

    <link rel="icon" type="image/x-icon" href="img\favicon.png">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/c1354519af.js" crossorigin="anonymous"></script>
    <script src="js\showToast.js"></script>
    <script src="js\setCurrentSubpage.js"></script>
    <?php include 'php\pobierzLiczbaOdwiedzin.php'; ?>
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
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="index.php">Europa</a>
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="azja.php">Azja</a>
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="afryka.php">Afryka</a>
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="australia.php">Australia</a>
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="ameryka_polnocna.php">Ameryka
                        Północna</a>
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="ameryka_poludniowa.php">Ameryka
                        Południowa</a>
                    <a type="nav-link" class="btn btn-success me-2 my-2" href="ksiega_gosci.php">Księga gości</a>
                </div>
            </div>
    </nav>

    <main class="example-background">
        <h1>Niezwykłe miejsca przyrodnicze</h1>
    </main>

    <article class="welcome-article container">
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="picture" data-bs-toggle="modal" data-bs-target="#wodospadyModal">
                    <img src="img/wodospad.webp" class="img-fluid img-thumbnail" alt="Wodospady Wiktorii">
                </div>
                <div class="picture-text">
                    <h4>Wodospady Wiktorii, Zimbabwe i Zambia</h4>
                    <hr>
                    <p>
                        Tekst dla Wodospadów Wiktorii.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="picture" data-bs-toggle="modal" data-bs-target="#saharaModal">
                    <img src="img/sahara.jpg" class="img-fluid img-thumbnail" alt="Sahara">
                </div>
                <div class="picture-text">
                    <h4>Sahara, Sahara Zachodnia</h4>
                    <hr>
                    <p>
                        Tekst dla Sahary.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="picture" data-bs-toggle="modal" data-bs-target="#okawangoModal">
                    <img src="img/okawango.jpg" class="img-fluid img-thumbnail" alt="Delta Okawango">
                </div>
                <div class="picture-text">
                    <h4>Delta Okawango, Botswana</h4>
                    <hr>
                    <p>
                        Tekst dla Delty Okawango.
                    </p>
                </div>
            </div>
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

    <!-- Modal for Wodospady Wiktorii -->
    <div class="modal fade" id="wodospadyModal" tabindex="-1" aria-labelledby="wodospadyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/wodospad.webp" class="img-fluid" alt="Wodospady Wiktorii">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Sahara -->
    <div class="modal fade" id="saharaModal" tabindex="-1" aria-labelledby="saharaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/sahara.jpg" class="img-fluid" alt="Sahara">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Delta Okawango -->
    <div class="modal fade" id="okawangoModal" tabindex="-1" aria-labelledby="okawangoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/okawango.jpg" class="img-fluid" alt="Delta Okawango">
                </div>
            </div>
        </div>
    </div>
</body>

</html>