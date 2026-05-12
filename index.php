<?php require 'includes/header.php'; ?>
<?php require 'includes/nav.php'; ?>

<!-- Banner -->
<header class="banner d-flex align-items-center justify-content-center text-center">
    <div class="banner-content text-white">
        <h1 class="display-4 fw-bold">Vitajte v Japonsku</h1>
        <p class="lead">Objavte krásy krajiny vychádzajúceho slnka.</p>
        <a href="o_nas.html" class="btn btn-light btn-lg mt-3">Zisti viac</a>
    </div>
</header>

<!-- Obsah -->
<div class="container mt-5 pt-4">

    <!-- Sekcia o Japonsku -->
    <section class="mb-5">
        <h2 class="text-center mb-4">Japonsko – tradičné aj moderné</h2>
        <p class="text-center">
            Japonsko je fascinujúcou kombináciou starodávnych tradícií a modernej technológie.
            Nájdete tu prekrásne chrámy, futuristické mestá, unikátnu kuchyňu a prírodu,
            ktorá berie dych.
        </p>

        <div class="row text-center mt-4">
            <div class="col-md-4 mb-3">
                <!--  Uloženie obrázku -->
                <img src="img/pexels-nien-tran-dinh-788736-1654748.jpg" class="img-fluid rounded shadow" alt="Hrad Himedži">
                <h5 class="mt-3">Tradičná architektúra</h5>
                <p>Hrady, svätyne a chrámy vytvárajú jedinečnú atmosféru Japonska.</p>
            </div>

            <div class="col-md-4 mb-3">
                <!--  Uloženie obrázku -->
                <img src="img/pexels-satoshi-2070033.jpg" class="img-fluid rounded shadow" alt="Osaka">
                <h5 class="mt-3">Moderné mestá</h5>
                <p>Osaka je moderná metropola známa svojou živou atmosférou a výbornou kuchyňou.</p>
            </div>

            <div class="col-md-4 mb-3">
                <!--  Uloženie obrázku -->
                <img src="img/Sakúry.jpeg" class="img-fluid rounded shadow" alt="Sakury">
                <h5 class="mt-3">Krása prírody</h5>
                <p>Sakura je symbolom jari a nových začiatkov.</p>
            </div>
        </div>
    </section>

    <!-- Sekcia tlačidla -->
    <section class="text-center mt-5 mb-5">
        <a href="galeria.html" class="btn btn-dark btn-lg">Pozrieť galériu</a>
    </section>

</div>

<?php require 'includes/footer.php'; ?>
