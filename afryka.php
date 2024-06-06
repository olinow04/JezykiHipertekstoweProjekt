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
    <script src="js/showToast.js"></script>
    <script src="js/setCurrentSubpage.js"></script>
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

    <div class="modal fade" id="wodospadyModal" tabindex="-1" aria-labelledby="wodospadyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/wodospad.webp" class="img-fluid" alt="Wodospady Wiktorii">
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="saharaModal" tabindex="-1" aria-labelledby="saharaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/sahara.jpg" class="img-fluid" alt="Sahara">
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="okawangoModal" tabindex="-1" aria-labelledby="okawangoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/okawango.jpg" class="img-fluid" alt="Delta Okawango">
                </div>
            </div>
        </div>
    </div>

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
                        Wodospady Wiktorii są jednym z najbardziej spektakularnych cudów natury na świecie. Wodospady
                        Wiktorii znajdują się na granicy między Zambią i Zimbabwe, w południowej Afryce. W
                        rzeczywistości są one częścią rzeki Zambezi, jednej z najdłuższych rzek w Afryce. Wodospady
                        Wiktorii zostały nazwane na cześć królowej Wielkiej Brytanii, Wiktorii, przez Davida
                        Livingstone'a, szkockiego misjonarza i badacza, który odkrył je w 1855 roku. Wodospady Wiktorii
                        mają imponujące wymiary. Są około 108 metrów wysokie i 1708 metrów szerokie, co sprawia, że są
                        jednymi z największych wodospadów na świecie pod względem szerokości. Wodospady Wiktorii znane
                        są również jako "Mosi-oa-Tunya", co w języku lokalnych ludów Tonga oznacza "dym, który grzmi".
                        Ta nazwa odnosi się do ogromnej chmury mgły, która unosząc się nad wodospadami, jest widoczna z
                        odległości nawet kilkudziesięciu kilometrów. Wodospady Wiktorii przyciągają turystów z całego
                        świata. Oprócz podziwiania imponującego widoku wodospadów, odwiedzający mogą również skorzystać
                        z różnorodnych atrakcji, takich jak loty helikopterem nad wodospadami, spływy kajakowe po rzece
                        Zambezi, bungee jumping z mostu nad wodospadami, czy też spacer po Mostach Widokowych. Wodospady
                        Wiktorii i ich okolica stanowią ważny obszar dla różnorodnych gatunków flory i fauny. Obszar
                        wodospadów Wiktorii jest chroniony przez park narodowy, co ma na celu ochronę bogactwa
                        przyrodniczego tego obszaru. W ostatnich latach coraz większą uwagę poświęca się turystyce
                        zrównoważonej w regionie Wodospadów Wiktorii, aby chronić środowisko naturalne i zapewnić
                        długoterminowe korzyści dla lokalnych społeczności. Wodospady Wiktorii to zatem nie tylko
                        imponujące dzieło natury, ale także ważne źródło przyjemności i fascynacji dla turystów z całego
                        świata.
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
                        Sahara to największa gorąca pustynia na świecie i jedna z najbardziej fascynujących i
                        ekstremalnych stref klimatycznych na Ziemi. Sahara zajmuje ogromny obszar w północnej Afryce,
                        obejmując części wielu krajów, w tym Algierii, Czadu, Egiptu, Libii, Mali, Mauretanii, Maroka,
                        Nigru, Sudanu i Tunezji. Jej powierzchnia wynosi około 9,2 miliona km², co czyni ją prawie tak
                        dużą jak Stany Zjednoczone. Sahara jest znana z ekstremalnych warunków pogodowych.
                        Charakteryzuje się bardzo wysokimi temperaturami w ciągu dnia, które mogą przekraczać 50°C, oraz
                        bardzo niskimi temperaturami nocą, które mogą spaść poniżej zera. Opady deszczu są niezwykle
                        rzadkie i nieregularne, z roczną sumą opadów wynoszącą zaledwie kilka centymetrów. Sahara jest
                        zróżnicowana geograficznie. Obejmuje rozległe piaszczyste wydmy (ergi), skaliste płaskowyże
                        (hamady), doliny (wadi) i oazy. Wydmy mogą osiągać wysokość nawet 180 metrów, tworząc imponujące
                        krajobrazy. Mimo surowych warunków, Sahara jest domem dla wielu gatunków zwierząt i roślin,
                        które przystosowały się do ekstremalnych warunków pustynnych. Można tu spotkać takie zwierzęta
                        jak fenek (lis pustynny), gazela dorkas, czy adaks (gatunek antylopy). Roślinność jest rzadka,
                        ale w oazach i wokół źródeł wody można znaleźć palmy daktylowe, tamaryszki i akacje. Sahara ma
                        bogatą historię zamieszkania przez różne kultury i ludy, w tym Berberów, Tuaregów i Beduinów. W
                        przeszłości była ważnym szlakiem handlowym, łączącym Afrykę Subsaharyjską z regionem Morza
                        Śródziemnego. Karawany wielbłądów przewoziły sól, złoto, niewolników i inne towary przez
                        pustynię. Sahara przyciąga turystów szukających przygody i wyjątkowych krajobrazów.
                        Sahara to zatem fascynujący region, który łączy w sobie piękno natury, bogactwo
                        kulturowe i historyczne, a także wyzwania związane z ekstremalnym klimatem.
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
                        Delta Okawango w Botswanie to jedno z najbardziej unikalnych i spektakularnych miejsc na
                        świecie, znane z bogatej różnorodności biologicznej i malowniczych krajobrazów. Delta Okawango
                        znajduje się w północno-zachodniej części Botswany. Rzeka Okawango przepływa przez Angolę i
                        Namibię, zanim wpłynie do pustynnego regionu Kalahari w Botswanie, gdzie tworzy rozległą deltę
                        śródlądową. Delta Okawango jest deltą śródlądową, co oznacza, że nie wpada do morza ani oceanu.
                        Powoduje to znaczne zmiany w poziomie wód, a
                        delta może zwiększyć swoją powierzchnię nawet trzykrotnie w porze deszczowej. Delta Okawango
                        jest domem dla ogromnej różnorodności gatunków roślin i zwierząt. Delta jest
                        uznawana za jedno z najważniejszych miejsc na świecie pod względem ochrony przyrody. W 2014 roku
                        Delta Okawango została wpisana na Listę Światowego Dziedzictwa UNESCO. Delta Okawango ma duże
                        znaczenie dla lokalnych społeczności, które polegają na jej zasobach naturalnych do rybołówstwa,
                        rolnictwa oraz zbierania materiałów budowlanych i leczniczych. Delta jest popularnym celem
                        turystycznym, przyciągającym miłośników przyrody, fotografów, ornitologów i poszukiwaczy
                        przygód. Turystyka ekoturystyczna, oferująca safarii łodziami mokoro i luksusowe obozy safari,
                        jest głównym źródłem dochodów dla regionu.
                        Pozwalają one na ciche i bliskie spotkania z dziką przyrodą. Loty helikopterem
                        lub małym samolotem nad deltą oferują spektakularne widoki na złożony system wodny i dziką
                        przyrodę. Delta Okawango to
                        wyjątkowy ekosystem, który łączy w sobie niesamowitą różnorodność biologiczną, zjawiskowe
                        krajobrazy i bogate dziedzictwo kulturowe. To miejsce, które zachwyca zarówno naukowców, jak i
                        turystów, oferując niezapomniane doświadczenia przyrodnicze.
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

</body>

</html>