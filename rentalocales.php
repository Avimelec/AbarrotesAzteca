<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <title>Locales
    </title>

    <link rel="stylesheet" href="css/rentalocales.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="Imagenes/Azteca.png">

    <style>
#myImg {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg2 {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg3 {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg4 {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg5 {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg6 {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg7 {
  cursor: pointer;
  transition: 0.3s;
  border-radius: 50%;
}

#myImg:hover {opacity: 0.7;}
#myImg2:hover {opacity: 0.7;}
#myImg3:hover {opacity: 0.7;}
#myImg4:hover {opacity: 0.7;}
#myImg5:hover {opacity: 0.7;}
#myImg6:hover {opacity: 0.7;}
#myImg7:hover {opacity: 0.7;}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(84, 97, 248, .90); 
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 490px;
}


#caption2 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

#caption3 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

#caption4 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

#caption5 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

#caption6 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

#caption7 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close2 {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close3 {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close4 {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close5 {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close6 {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close7 {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f76a0b;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.close2:hover,
.close2:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.close3:hover,
.close3:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.close4:hover,
.close4:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.close5:hover,
.close5:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.close6:hover,
.close6:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.close7:hover,
.close7:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
        @media screen and (min-width: 220px){
        .out-team__txt{
        color: #f76a0b;
        font-size: 20px;
    }
}

    @media screen and (min-width: 1024px){
        .out-team__txt{
        color: #f76a0b;
        font-size: 30px;
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
                <a href="rentalocales.php" class="menu__link menu__link--select">Locales
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
        <div class="banner__content"> No Olvides Visitar Nuestros Locales
            </div>
            </section>

    <br>
    <br>
    <section class="group our-team">
    <div class="container container--flex">
        <div class="column column--33">
            <h3 class="our-team__title">Bocinas</h3>
            <img id="myImg" src="img/38.jpg" alt="Snow" class="our-team__img">
            <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            </div>

            <script>
                var modal = document.getElementById("myModal");
                var img = document.getElementById("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                  modal.style.display = "block";
                  modalImg.src = this.src;
                  captionText.innerHTML = this.alt;
                }

                var span = document.getElementsByClassName("close")[0];
                span.onclick = function() { 
                  modal.style.display = "none";
                }
                </script>

            <p class="out-team__txt">Bocinas, Baterias, Cables USB, Audifonos, Cosmeticos y Más...</p>
        </div>

        <div class="column column--33">
            <h3 class="our-team__title">Perfumes</h3>
            <img id="myImg2" src="img/41.jpg" alt="Snow" class="our-team__img">
            <div id="myModal2" class="modal">
                <span class="close2">&times;</span>
                <img class="modal-content" id="img02">
                <div id="caption2"></div>
                </div>

                <script>
                    var modal = document.getElementById("myModal2");
                    var img = document.getElementById("myImg2");
                    var modalImg = document.getElementById("img02");
                    var captionText = document.getElementById("caption2");
                    img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    var span = document.getElementsByClassName("close2")[0];
                    span.onclick = function() { 
                      modal.style.display = "none";
                    }
                    </script>

            <p class="out-team__txt">Toda variedad de perfumes y también variedad de relojes.</p>
        </div>

        <div class="column column--33">
            <h3 class="our-team__title">Pan</h3>
            <img id="myImg3" src="img/42.jpg" alt="Snow" class="our-team__img">
            <div id="myModal3" class="modal">
                <span class="close3">&times;</span>
                <img class="modal-content" id="img03">
                <div id="caption"></div>
                </div>

                <script>
                    var modal = document.getElementById("myModal3");
                    var img = document.getElementById("myImg3");
                    var modalImg = document.getElementById("img03");
                    var captionText = document.getElementById("caption3");
                    img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }
 
                    var span = document.getElementsByClassName("close3")[0];
                    span.onclick = function() { 
                      modal.style.display = "none";
                    }
                    </script>

            <p class="out-team__txt">Encontraras pan desde $1 peso y también de galletas de toda variedad.</p>
        </div>
    </div>

    <br>
    <br>
    <div class="container container--flex">
        <div class="abarrotes-azteca__photo column column--50">
            <h3 class="our-team__title">Inciensos</h3>
            <img id="myImg4" src="img/43.jpg" alt="Snow" class="our-team__img">
            <div id="myModal4" class="modal">
                <span class="close4">&times;</span>
                <img class="modal-content" id="img04">
                <div id="caption4"></div>
                </div>

                <script>
                    var modal = document.getElementById("myModal4");
                    var img = document.getElementById("myImg4");
                    var modalImg = document.getElementById("img04");
                    var captionText = document.getElementById("caption4");
                    img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    var span = document.getElementsByClassName("close4")[0];
                    span.onclick = function() { 
                      modal.style.display = "none";
                    }
                    </script>

            <p class="out-team__txt">Veladoras, inciensos de todos olores y demás variedad.</p>
        </div>

        <div class="abarrotes-azteca__photo column column--50">
            <h3 class="our-team__title">Telcel</h3>
            <img id="myImg5" src="img/44.jpg" alt="Snow" class="our-team__img">
            <div id="myModal5" class="modal">
                <span class="close5">&times;</span>
                <img class="modal-content" id="img05">
                <div id="caption5"></div>
                </div>

                <script>
                    var modal = document.getElementById("myModal5");
                    var img = document.getElementById("myImg5");
                    var modalImg = document.getElementById("img05");
                    var captionText = document.getElementById("caption5");
                    img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    var span = document.getElementsByClassName("close5")[0];
                    span.onclick = function() { 
                      modal.style.display = "none";
                    }
                    </script>

            <p class="out-team__txt">Accesorios para teléfonos y más...</p>
        </div>
    </div>

    <br>
    <br>
    <div class="container container--flex">
        <div class="abarrotes-azteca__photo column column--50">
            <h3 class="our-team__title">Peluches</h3>
            <img id="myImg6" src="img/47.jpg" alt="Snow" class="our-team__img">
            <div id="myModal6" class="modal">
                <span class="close6">&times;</span>
                <img class="modal-content" id="img06">
                <div id="caption6"></div>
                </div>

                <script>
                    var modal = document.getElementById("myModal6");
                    var img = document.getElementById("myImg6");
                    var modalImg = document.getElementById("img06");
                    var captionText = document.getElementById("caption6");
                    img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    var span = document.getElementsByClassName("close6")[0];
                    span.onclick = function() { 
                      modal.style.display = "none";
                    }
                    </script>

            <p class="out-team__txt">Encuentra todo para un buen presente.</p>
        </div>

        <div class="abarrotes-azteca__photo column column--50">
            <h3 class="our-team__title">Quiropráctico y Masajes</h3>
            <img id="myImg7" src="img/46.jpg" alt="Snow" class="our-team__img">
            <div id="myModal7" class="modal">
                <span class="close7">&times;</span>
                <img class="modal-content" id="img07">
                <div id="caption7"></div>
                </div>

                <script>
                    var modal = document.getElementById("myModal7");
                    var img = document.getElementById("myImg7");
                    var modalImg = document.getElementById("img07");
                    var captionText = document.getElementById("caption7");
                    img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                      captionText.innerHTML = this.alt;
                    }

                    var span = document.getElementsByClassName("close7")[0];
                    span.onclick = function() { 
                      modal.style.display = "none";
                    }
                    </script>

            <p class="out-team__txt">Clinica de bienestar.</p>
        </div>
        </div>    
</section>

            <br>
            <br>
                <p class="main__txt"> 
                    <h1 style="color: #3e45cb;"> 
                    <center>Si también requiere una renta de locales comuníquese para preguntar por los requisitos. </center>
                    </h1>
                </p>

                <br>
                <br>
    <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
                <h2 class="column__title">¿Por qué visitarnos?
                </h2>

                <p class="column__txt">Nosotros somo tu mejor opción ya que encuentras lo que buscas en la tienda Abarrotes Azteca y además 
                  contamos con mejores precios bajos de nuestros productos.
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