<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos
    </title>

    <link rel="stylesheet" href="css/eventos.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="Imagenes/Azteca.png">

    <style type="text/css">

    .mapWrapper {
    position: relative;
    padding-bottom: 66.6666667%;
    height: 0;
    margin: 15px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px #f76a0b;
}

.mapWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.overlay {
   background:transparent;
   position:relative;
   width:100%;
   height:100%;
   z-index: 1;
}

@media screen and (min-width:1024px){
    .mapWrapper {
    margin: 30px;
    padding-bottom: 35%;
    margin: 50px auto;
    width: 1050px;
    height: 100px;
    box-shadow: 0px 0px 20px rgba(84, 97, 248, .90);
    }
}
    </style>
</head>

<body>
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <img src="Imagenes/Azteca.png" height="85px">
            </div>

            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone">4433125364
                    </span>
                </p>

                <p class="main-header__contactInfo__address">
                    <span class="icon-location">Miguel Arriaga #396 Colonia Obrera, 58130 Morelia, Mich.
                    </span>
                </p>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu">
            </span>

            <ul class="menu" id="menu">
                <li class="menu__item">
                    <a href="index.php" class="menu__link">Inicio
                </a>
            </li>

                <li class="menu__item">
                    <a href="nosotros.php" class="menu__link">Nosotros
                </a>
            </li>

                <li class="menu__item">
                    <a href="contacto.php" class="menu__link">Contacto
                </a>
            </li>

            <li class="menu__item">
                <a href="empleos.php" class="menu__link">Bolsa Trabajo
            </a>
        </li>

        <li class="menu__item">
                <a href="rentalocales.php" class="menu__link">Locales
            </a>
        </li>

        <li class="menu__item">
                <a href="eventos.php" class="menu__link menu__link--select">Eventos
            </a>
        </li>
            </ul>

            <div class="social-icon">
                <a href="https://es-la.facebook.com/pages/Abarrotes-Azteca-Colonia-Obrera/873278702752067" class="social-icon__link">
                    <span class="icon-facebook">
                </span>
            </a>

                <a href="https://twitter.com/AbarrotesO" class="social-icon__link">
                    <span class="icon-twitter">
                </span>
            </a>

            <a href="https://www.instagram.com/abarrotesazteca6/" class="social-icon__link">
                <span class="icon-instagram">
            </span>
        </a>

                <a href="https://accounts.google.com/ServiceLogin/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social-icon__link">
                    <span class="icon-mail">
                </span>
            </a>
            </div>
        </div>
    </nav>

     <section class="banner">
        <img src="Imagenes/Azteca2.PNG" class="banner__img">
        <div class="banner__content">Eventos
            </div>
            </section>


       <main class="main">
                <section class="group">
                <div class="container">
                    <center>
                        <br>
                        <br>
                    <h2 class="main__title" style="color: #3e45cb">Conoce nuestros eventos
                    </h2>
                    </center>
                </div>
                </section>
      </main>

        <div class="mapWrapper">
             <center>
            <iframe src="https://www.youtube.com/embed/dxLNcXX8M5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>
</div>

      <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
                <h2 class="column__title">¿Por qué visitarnos?
                </h2>

                <p class="column__txt">Nosotros somo tu mejor opción ya que encuentras lo que buscas en la tienda Abarrotes Azteca y además contamos con mejores precios bajos de nuestros productos.
                </p>
            </div>

            <div class="column column--33">
                <h2 class="column__title">Contáctanos
                </h2>

                <p class="column__txt">Dirección: Miguel Arriaga #396 Colonia Obrera, 58130 Morelia, Mich.
                </p>

                <p class="column__txt">Teléfono: 4433125364
                </p>

                <p class="column__txt">Mail: azteca_mercado@hotmail.com
                </p>
            </div>

            <div class="column column--33">
                <h2 class="column__title">Síguenos en nuestras redes sociales
                </h2>

                <p class="column__txt">
                    <a href="https://es-la.facebook.com/pages/Abarrotes-Azteca-Colonia-Obrera/873278702752067" class="icon-facebook">Facebook
                </a>
                </p>

                <p class="column__txt">
                    <a href="https://twitter.com/AbarrotesO" class="icon-twitter">Twitter
                </a>
                </p>

                <p class="column__txt">
                    <a href="https://www.instagram.com/abarrotesazteca6/" class="icon-instagram">Instagram
                </a>
                </p>
            </div>

            <p class="copy">Derechos Reservados: Abarrotes Azteca Colonia Obrera &copy 2020
            </p>
        </div>
    </footer>

    <script src="js/menu.js">
    </script>
</body>
</html>