<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da" xmlns="http://www.w3.org/1999/html">

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


<div class="headline-wrapper-kontakt">
    <div class="headline-kontakt">
        <h1>Kontakt</h1>
    </div>
</div>

<div class="container-wrapper">

<div class="container-label">
<form>
    <div class="mb-3">
        <label for="inputname" class="form-label mb-0">Fulde navn</label>
        <input type="navn" class="form-control" id="exampleInputname">

    </div>
    <div class="mb-3">
        <label for="inputEmail1 " class="form-label mb-0">Email adresse</label>
        <input type="email" class="form-control" id="exampleInputEmail1" >
    </div>
    <div class="mb-3">
        <label for="inputemne" class="form-label mb-0">Emne</label>
        <input type="emne" class="form-control" id="exampleInputEmne" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Din besked</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Send</button>
</form>
</div>


    <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.75321204575!2d11.871808451271209!3d54.76672567497608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad30576e5d9771%3A0x8dbdf3fb08d81791!2sTv%C3%A6rgade%2C%204800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sda!2sdk!4v1616453604438!5m2!1sda!2sdk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


<div class="contact-wrapper">
    <div class="contact-text">
        <p>Lions Nykøbing Falster</p>
        <p>Email:<br>
            nykoebingfalster@lions.dk</p>
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