<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Site Layse</title>
  </head>
  <body>
    <div class="recado">
        <p>ATENDIMENTO PERSONALIZADO, COM TODO O CARINHO QUE VOCÊ MERECE. &#128525;&#128151;</p>
    </div>

    <nav class="teal accent-4">
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Site Layse</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="">Início</a></li>
          <li><a href="">Portifólio</a></li>
          <li><a href="">Loja</a></li>
          <li><a href="">Quem somos</a></li>
          <li><a href="">Contato</a></li>
        </ul>
      </div>
    </nav>

    <div class="carousel carousel-slider">
      <a class="carousel-item" href=""><img src="bg_carrousel.png"></a>
      <a class="carousel-item" href=""><img src="bg_carrousel.png"></a>
      <a class="carousel-item" href=""><img src="bg_carrousel.png"></a>
      <a class="carousel-item" href=""><img src="bg_carrousel.png"></a>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
  });
    </script>
  </body>
</html>