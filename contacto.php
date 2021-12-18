<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto
    </title>
    
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="Imagenes/Azteca.png">
    <script src="js/jquery-3.2.1.js">
    </script>

    <script src="js/script.js">
    </script>
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
                    <a href="contacto.php" class="menu__link menu__link--select">Contacto
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
                <a href="eventos.php" class="menu__link">Eventos
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
        <div class="banner__content"> Dejános un Mensaje
            </div>
            </section>

    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle">
                </span>
                
                <h2>CONTACTO</h2>
            </section>

            <section class="info_items">
                <p>
                    <span class="fa fa-envelope">
                </span>
                
                azt3ca.m3rcado@gmail.com
            </p>

                <p>
                    <span class="fa fa-mobile">
                    </span> 
                    
                    443 312 5364
                </p>
            </section>
        </section>

        <form action="enviar.php" method="post" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombre: *</label>
                <input type="text" id="names" name="nombre" required>

                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="telefono">

                <label for="email">Correo Electrónico: *</label>
                <input type="text" id="email" name="correo" required>

                <label for="mensaje">Mensaje: *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>
    </section>

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

                <p class="column__txt">Mail: azt3ca.m3rcado@gmail.com
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