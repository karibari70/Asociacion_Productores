<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link rel="stylesheet" href="navbar.css">
</head>

<body>

  <header class="header">
    <nav class="navbar">
      <a href="index.php">
        <img class="nav-logo" src="media/logo_navbar.png" alt="" >
      </a>
      <h2 class="nav-txt">Asociación de Productores de El Hoyo</h2>
      <ul class="nav-menu">
      <li class="nav-item">
          <a href="index.php" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="quienes_somos.php" class="nav-link">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a href="servicios.php" class="nav-link">Servicios</a>
        </li>
        <li class="nav-item">
          <a href="Contacto.php" class="nav-link">Contacto</a>
        </li>
        <li class="nav-item">
          <a href="foro.php" class="nav-link">Foro de Preguntas</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>





  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }


    // when we click on hamburger icon its close 

    const navLink = document.querySelectorAll(".nav-link");

    navLink.forEach(n => n.addEventListener("click", closeMenu));

    function closeMenu() {
      hamburger.classList.remove("active");
      navMenu.classList.remove("active");
    }
  </script>
</body>

</html>