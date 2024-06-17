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
    <script src="js/czytaj_wiecej.js"></script>
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

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/park_yellowstone.jpg" class="card-img-top"
                        alt="Park Narodowy Yellowstone, Stany Zjednoczone">
                    <div class="card-body">
                        <h5 class="card-title">Park Narodowy Yellowstone, Stany Zjednoczone</h5>
                        <p class="card-text">
                            Yellowstone został założony 1 marca 1872 roku i jest pierwszym parkiem narodowym na świecie.
                            W 1978
                            roku park został wpisany na Listę Światowego Dziedzictwa UNESCO. Park znajduje się w
                            północno-zachodnich Stanach Zjednoczonych, głównie w stanie Wyoming, ale rozciąga się
                            również na
                            stany Montana i Idaho.
                            <span class="full-text">
                                Park jest usytuowany na szczycie jednej z największych aktywnych
                                kalder
                                wulkanicznych na świecie.
                                Kaldera Yellowstone powstała w wyniku potężnych erupcji
                                wulkanicznych,
                                które miały miejsce około 640,000 lat temu. Yellowstone jest domem dla około połowy
                                gejzerów
                                na
                                świecie, w tym słynnego gejzeru Old Faithful, który wybucha regularnie co 60-110 minut.
                                Inne
                                znane
                                gejzery to Castle, Riverside i Steamboat, największy aktywny gejzer na świecie. Park
                                oferuje
                                również
                                spektakularne widoki na kolorowe baseny termalne, takie jak Grand Prismatic Spring,
                                największe
                                gorące źródło w Stanach Zjednoczonych, znane ze swoich intensywnych kolorów
                                spowodowanych
                                przez
                                termofilne bakterie. Yellowstone jest jednym z najważniejszych obszarów dzikiej przyrody
                                w
                                USA.
                                Można tu spotkać różnorodne gatunki zwierząt, w tym bizonów, wilków, niedźwiedzi
                                grizzly,
                                niedźwiedzi czarnych, łosi, wapiti, kojotów i rysi. Park jest również domem dla wielu
                                gatunków
                                ptaków, ryb i owadów. Park obejmuje różnorodne siedliska, w tym lasy, łąki, tereny wodne
                                i
                                geotermalne. Rzeka Yellowstone przepływa przez park i tworzy imponujący Yellowstone
                                Grand
                                Canyon,
                                który ma głębokość do 366 metrów i długość około 32 kilometrów. W kanionie znajdują się
                                dwa
                                znane
                                wodospady: Lower Falls i Upper Falls. Jest to największe jezioro słodkowodne na dużej
                                wysokości w
                                Ameryce Północnej, leżące na wysokości 2,357 metrów n.p.m. Jezioro ma powierzchnię około
                                350
                                km².
                                Jedna z najpopularniejszych atrakcji parku. Gejzer ten wybucha regularnie, a jego
                                erupcje
                                przyciągają tysiące turystów. Największe gorące źródło w parku, znane ze swoich
                                intensywnych
                                kolorów. Znane jako jedno z najlepszych miejsc do obserwacji dzikiej przyrody, w tym
                                wilków
                                i
                                bizonów. Tarasy wapienne utworzone przez gorące źródła, które wytrącają węglan wapnia.
                                Park
                                Narodowy
                                Yellowstone jest zarządzany przez National Park Service, agencję federalną Stanów
                                Zjednoczonych.
                                Yellowstone jest ważnym miejscem badań naukowych w dziedzinie geologii, ekologii,
                                biologii i
                                innych
                                nauk przyrodniczych. Wiele uniwersytetów i instytucji badawczych prowadzi projekty
                                badawcze
                                na
                                terenie parku. Yellowstone to zatem nie tylko pierwszym park narodowy na świecie, ale
                                także
                                jedno z
                                najważniejszych miejsc przyrodniczych, oferujące niesamowite krajobrazy, bogatą
                                różnorodność
                                biologiczną i unikalne zjawiska geotermalne.

                            </span>
                        </p>
                        <button class="btn btn-success btn-read-more" onclick="toggleText(this)">czytaj więcej</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/kolorado.jpg" class="card-img-top" alt="Wielki Kanion Kolorado, Stany Zjednoczone">
                    <div class="card-body">
                        <h5 class="card-title">Wielki Kanion Kolorado, Stany Zjednoczone</h5>
                        <p class="card-text">
                            Wielki Kanion znajduje się w północnej Arizonie, w Stanach Zjednoczonych. Przepływa przez
                            niego
                            rzeka Kolorado. Wielki Kanion znajduje się w północnej Arizonie, w Stanach Zjednoczonych.
                            Przepływa
                            przez niego rzeka Kolorado. Kanion ma około 446 km długości, do 29 km szerokości i osiąga
                            głębokość
                            do 1,6 km. Jest to jeden z największych kanionów na świecie pod względem objętości.


                            <span class="full-text">
                                Wielki
                                Kanion
                                powstał głównie na skutek erozji przez rzekę Kolorado, która rozpoczęła swoje dzieło
                                około
                                5-6
                                milionów lat temu. Warstwy skalne w kanionie ukazują około 2 miliardów lat historii
                                geologicznej. W
                                kanionie można zobaczyć różnorodne warstwy skalne, w tym wapień, piaskowiec, łupki i
                                bazalt.
                                Każda
                                warstwa reprezentuje różne okresy geologiczne i warunki środowiskowe, w jakich się
                                tworzyły.
                                Wielki
                                Kanion jest domem dla wielu gatunków roślin i zwierząt. Można tu spotkać rośliny
                                pustynne,
                                takie jak
                                kaktusy i agawy, a także lasy sosnowe i jałowcowe. Fauna kanionu obejmuje kojoty, pumy,
                                jelenie,
                                owce kanadyjskie, różne gatunki nietoperzy i liczne gatunki ptaków, w tym kondory
                                kalifornijskie,
                                które są jednym z najrzadszych ptaków na świecie. Jest to najbardziej popularna część
                                kanionu,
                                dostępna przez cały rok. Znajdują się tu liczne punkty widokowe, szlaki turystyczne oraz
                                infrastruktura turystyczna, w tym muzea, centra dla odwiedzających i hotele. Wielki
                                Kanion
                                oferuje
                                liczne szlaki turystyczne o różnym stopniu trudności. Najpopularniejsze szlaki to Bright
                                Angel Trail
                                i South Kaibab Trail, które prowadzą w dół kanionu do rzeki Kolorado. Spływy pontonowe
                                po
                                rzece
                                Kolorado są niezwykle popularne i oferują unikalne perspektywy na kanion oraz
                                emocjonujące
                                przeżycia
                                na dzikich wodach. Wielki Kanion ma głębokie znaczenie kulturowe dla wielu rdzennych
                                plemion, w tym
                                Hualapai, Havasupai, Hopi, Navajo i Paiute. Te plemiona mają długą historię związaną z
                                tym
                                obszarem,
                                zarówno jako miejsce zamieszkania, jak i jako święte miejsce. W 1919 roku Wielki Kanion
                                został
                                uznany za park narodowy, co przyczyniło się do jego ochrony i zachowania. W 1979 roku
                                został
                                wpisany
                                na Listę Światowego Dziedzictwa UNESCO. Kanion jest znany ze swoich spektakularnych
                                kolorów,
                                które
                                zmieniają się w zależności od pory dnia i warunków pogodowych. Światło słoneczne
                                oświetla
                                różne
                                warstwy skalne, tworząc niesamowite efekty wizualne. W kanionie znaleziono liczne
                                skamieniałości, w
                                tym trylobity, amonity i rośliny morskie, a także artefakty archeologiczne, które
                                świadczą o
                                obecności ludzkiej na tym obszarze przez tysiące lat. Wielki Kanion Kolorado to nie
                                tylko
                                cud
                                natury, ale również miejsce o ogromnym znaczeniu kulturowym, historycznym i naukowym.
                                Jest
                                to
                                obowiązkowy punkt programu dla każdego miłośnika przyrody i podróżnika.

                            </span>
                        </p>
                        <button class="btn btn-success btn-read-more" onclick="toggleText(this)">czytaj więcej</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img/banff.jpg" class="card-img-top" alt="Park Narodowy Banff, Kanada">
                    <div class="card-body">
                        <h5 class="card-title">Park Narodowy Banff, Kanada</h5>
                        <p class="card-text">
                            Banff został założony w 1885 roku jako trzeci najstarszy park narodowy na świecie, po
                            Yellowstone i
                            Royal National Park w Australii. Park jest częścią grupy parków górskich Canadian Rocky
                            Mountain
                            Parks, które zostały wpisane na Listę Światowego Dziedzictwa UNESCO w 1984 roku. Park
                            Narodowy Banff
                            znajduje się w prowincji Alberta, w kanadyjskich Górach Skalistych.

                            <span class="full-text">
                                Jego powierzchnia wynosi
                                około
                                6,641 km².
                                Park oferuje spektakularne krajobrazy, w tym wysokie szczyty górskie, lodowce,
                                krystalicznie czyste jeziora, bujne lasy i doliny rzeczne. Jedno z najbardziej znanych i
                                fotografowanych jezior na świecie, słynące z turkusowej wody i otaczających go wysokich
                                gór.
                                Nad
                                jeziorem znajduje się luksusowy hotel Fairmont Chateau Lake Louise. Położone w dolinie
                                Ten
                                Peaks,
                                jezioro to jest równie piękne jak Lake Louise i znane ze swojej intensywnie niebieskiej
                                wody.
                                Malownicza trasa drogowa łącząca Banff z Jasper National Park, oferująca niesamowite
                                widoki
                                na
                                lodowce, góry i doliny. W parku dominują lasy iglaste, w tym sosny, świerki i jodły. W
                                wyższych
                                partiach gór występują alpejskie łąki i tundra. Banff jest domem dla wielu gatunków
                                dzikich
                                zwierząt, w tym grizzly i czarnych niedźwiedzi, wilków, łosi, wapiti, muflonów
                                kanadyjskich,
                                kozic
                                śnieżnych i rysi. Jest to również ważny obszar dla ptaków, ryb i innych małych zwierząt.
                                Park
                                oferuje liczne szlaki turystyczne o różnym stopniu trudności, od krótkich spacerów po
                                długie,
                                wielodniowe trekkingi. Banff jest popularnym miejscem dla miłośników sportów zimowych,
                                oferującym
                                światowej klasy ośrodki narciarskie, takie jak Sunshine Village, Lake Louise Ski Resort
                                i
                                Mt.
                                Norquay. Park Narodowy Banff jest zarządzany przez Parks Canada, agencję odpowiedzialną
                                za
                                ochronę
                                parków narodowych i miejsc historycznych w Kanadzie. W parku prowadzone są liczne
                                programy
                                ochrony
                                przyrody, mające na celu zachowanie unikalnych ekosystemów, ochrona dzikiej fauny i
                                flory
                                oraz
                                minimalizowanie wpływu działalności turystycznej na środowisko. Park leży na
                                tradycyjnych
                                terenach
                                zamieszkałych przez Pierwsze Narody, takie jak Stoney Nakoda, Blackfoot i Tsuut'ina. Ich
                                dziedzictwo
                                kulturowe jest integralną częścią historii i zarządzania parkiem. Historyczny hotel,
                                często
                                nazywany
                                "Zamkiem w Górach", oferujący luksusowe zakwaterowanie i znany ze swojej architektury
                                oraz
                                położenia. Miejsce odkrycia gorących źródeł, które przyczyniły się do założenia parku
                                narodowego.
                                Park Narodowy Banff to nie tylko przyrodniczy skarb Kanady, ale także miejsce o ogromnym
                                znaczeniu
                                historycznym, kulturowym i rekreacyjnym. Jest to idealne miejsce dla miłośników
                                przyrody,
                                przygód i
                                relaksu w pięknych górskich krajobrazach.
                            </span>
                        </p>
                        <button class="btn btn-success btn-read-more" onclick="toggleText(this)">czytaj więcej</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-3">
                    <h6 class="text-uppercase font-weight-bold">Oliwier Nowak strona</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto line-footer">
                    <p><i class="fas fa-building mr-3"></i>&nbsp;ul.&nbsp;Andrzeja&nbsp;Michalskiego&nbsp;17
                    </p>
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