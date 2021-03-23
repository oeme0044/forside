<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>




<div class="hedline-wrapper">
    <div class="headline">
        <h1>Bestyrelse</h1>
    </div>

</div>


<div class="container">
    <div class="center">
    <div class="row">
        <div class="col-12 col-md-6 col-xl-4 mb-5">
<div class="card border-primary" style="width: 18rem;">
    <img class="card-img-top" src="img/rone.png" alt="bestyrelse">
    <div class="card-body">
        <h5 class="card-title mb-0">Rone Chortzen</h5>
        <div class="line bg-secondary"></div>
        <p class="card-text">Præsident<br>
            Vestensborg Allé 55<br>
            4800 Nykøbing F.<br>
            Tlf 20531177</p>
    </div>
</div>
        </div>

        <div class="col-12 col-md-6 col-xl-4 mb-5">
    <div class="card border-primary" style="width: 18rem;">
        <img class="card-img-top" src="img/rone.png" alt="bestyrelse">
        <div class="card-body">
            <h5 class="card-title mb-0">Jens Hansen</h5>
            <div class="line bg-secondary"></div>
            <p class="card-text">Vicepræsident<br>
                Bispegade 26<br>
                4800 Nykøbing F.<br>
                Tlf 26788435</p>
        </div>
    </div>
        </div>

        <div class="col-12 col-md-6 col-xl-4 mb-5">
    <div class="card border-primary" style="width: 18rem;">
        <img class="card-img-top" src="img/rone.png" alt="bestyrelse">
        <div class="card-body">
            <h5 class="card-title mb-0">Peter Dall</h5>
            <div class="line bg-secondary"></div>
            <p class="card-text">Sekretær og Kasserer<br>
                Kystvej 2<br>
                4800 Nykøbing F.<br>
                Tlf 20240128</p>
        </div>
    </div>
        </div>

    </div>
    </div>
</div>


<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>

                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- Her skal sidens indhold ligge -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>