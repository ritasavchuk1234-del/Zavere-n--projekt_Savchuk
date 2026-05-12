<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Japonsko">
    <meta name="keywords" content="Japonsko, Tokio, kultúra, tradície, jedlo">
    <meta name="author" content="Marharyta Savchuk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japonsko</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Vlastné štýly -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--  Navigácia -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">Japonsko</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Domov</a></li>
                <li class="nav-item"><a class="nav-link" href="o_nas.html">O Japonsku</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria.html">Galeria</a></li>
                <li class="nav-item"><a class="nav-link" href="kontakt.html">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--  Obsah stránky -->
<div class="container mt-5 pt-5">

    <!--  Sekcia: základné info -->
    <section class="mb-5">
        <h1 class="text-center mb-4">O Japonsku</h1>
        <p>Japonsko je východoázijský ostrovný štát ležiaci v Tichom oceáne. Je známe svojou bohatou kultúrou, kuchyňou a pokročilou technológiou.</p>
        <p>Jediným úradným jazykom v Japonsku je japončina. Japonsko má štyri hlavné ostrovy, ktoré sú Hokkaido, Honšú, Šikoku a Kjúšu.</p>
        <p>Hlavným mestom Japonska je Tokio a je to najväčšia metropolitná oblasť na svete.</p>

        <div class="text-center mb-4">
            <!--  Uloženie obrázku -->
            <img src="img/tokio.jpeg"
                 class="img-fluid rounded" alt="Tokio - hlávne mesto Japonska">
        </div>
    </section>

    <!--  Sekcia: obyvateľstvo Japonska -->
    <section class="mb-5">
        <h2>Obyvateľstvo Japonska</h2>
        <p>Japonsko má od roku 2021 približne 126,2 milióna obyvateľov, čo z neho robí desiatu najľudnatejšiu krajinu na svete.</p>
        <p>Napriek tomu, že Japonsko je malým ostrovným štátom, má pomerne vysokú hustotu obyvateľstva. Väčšina obyvateľov sa sústreďuje v mestských oblastiach, ako sú Tokio, Osaka a Nagoja.</p>
        <p>Japonci sú veľmi milí a pohostinní ľudia, ktorí si dávajú záležať na slušnosti nielen k sebe, ale najmä k ostatným. Preto aj turistov zvyknú zahrnúť priateľskosťou a ústretovosťou.</p>
       
        <table class="table table-bordered mt-3">
            <tr><th>Hlavné mesto</th><td>Tokio</td></tr>
            <tr><th>Počet obyvateľov</th><td>126,2 milióna</td></tr>
            <tr><th>Úradný jazyk</th><td>Japončina</td></tr>
            <tr><th>Najväčšie mestá</th><td>Tokio, Osaka, Nagoja</td></tr>
        </table>
    </section>

    <!--  Sekcia: Japonská kultúra -->
    <section class="mb-5">
        <h3>Japonská kultúra</h3>
        <p>Japonská kultúra spája hlboké tradície s moderným životom. Dôležité sú rituály a estetika, napríklad v čajových obradoch, ikebane (aranžovanie kvetov) alebo kaligrafii.</p>
        <p>Veľký význam má aj úcta, disciplína a harmónia v spoločnosti. Festivaly, ako Hanami alebo Obon, ukazujú tradície a zároveň radosť zo života.</p>
        <p>Moderná popkultúra, vrátane mangy, anime a J-popu, demonštruje spojenie tradície s inováciami a kreativitou.</p>

        <!--  Zoznam -->
        <h4 class="mt-4">Príklady tradičných prvkov japonskej kultúry</h4>
        <ul>
            <li>Čajový obrad (sádo)</li>
            <li>Ikebana - aranžovanie kvetov</li>
            <li>Kaligrafia (šodó)</li>
            <li>Kimono a tradičné odevy</li>
            <li>Festival Hanami – obdivovanie sakúr</li>
            <li>Anime – významná súčasť modernej japosnkej kultúry</li>
        </ul>

        <!--  Obrázky kultúry -->
        <div class="row text-center mb-4">
            <div class="col-md-6 mb-3">
                <figure>
                    <!--  Uloženie obrázku -->
                    <img src="img/ikebana.jpeg" 
                        class="img-fluid rounded" alt="Ikebana">
                    <figcaption class="mt-2 text-muted">Ikebana – tradičné japonské aranžovanie kvetov</figcaption>
                </figure>
            </div>

            <div class="col-md-6"> 
                <figure>
                    <!--  Uloženie obrázku -->
                    <img src="img/anime.jpeg" 
                         class="img-fluid rounded" alt="Anime">
                    <figcaption class="mt-2 text-muted">Anime – neoddeliteľná súčasť modernej japonskej popkultúry</figcaption>
                </figure>
            </div>
        </div>
        
        <!--  Kreatívny bod: akordeón -->
        <div class="accordion mb-4" id="accordionKultura">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        Tradície
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionKultura">
                    <div class="accordion-body">
                        Čajový obrad, ikebana, kaligrafia, sakrálny minimalizmus, festivaly Hanami a Obon.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        Moderná kultúra
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionKultura">
                    <div class="accordion-body">
                        Anime, manga, popkultúra, J-pop, elektronika a moderné umenie.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--  Sekcia: Japonské jedlo -->
    <section class="mb-5">
        <h4>Japonské jedlo</h4>
        <p>Japonská kuchyňa je známa čerstvosťou, jednoduchosťou a vyváženou chuťou. Medzi najtypickejšie jedlá patrí sushi – ryža s rybou alebo morskými plodmi, ramen – polievka s rezancami, tempura – vyprážaná zelenina a morské plody, alebo miso polievka.</p>
        <p>Jedlá sa často podávajú esteticky, kladie sa dôraz na farby, tvary a sezónnosť surovín. V kuchyni sa cení harmónia chutí a vyvážené kombinácie.</p>
        
        <div class="row text-center mb-4">
            <div class="col-md-6">
                <figure>
                    <!--  Uloženie obrázku -->
                    <img src="img/ramen.jpeg" 
                         class="img-fluid rounded" alt="Ramen">
                    <figcaption class="mt-2 text-muted">Ramen – japonská rezancová polievka</figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <figure>
                    <!--  Uloženie obrázku -->
                    <img src="img/Tempura.jpeg" 
                         class="img-fluid rounded" alt="Tempura">
                    <figcaption class="mt-2 text-muted">Tempura – vyprážaná zelenina a morské plody</figcaption>
                </figure>
            </div>
        </div>
    </section>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">&copy; 2025 Japonsko – študentský projekt | Marharyta Savchuk</p>
</footer>

<!--  Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>