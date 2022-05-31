<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaPinatar</title>

    <link rel="shortcut icon" href="./imagenes/Gotita_Aqualita-Recuperado.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap1.min.css"/>
    
   
</head>

<body>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
            <a class="nav-icon" href="./index.php"><img src="./imagenes/logo.png" alt"" > </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="empresa.php">Empresa/Hogar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="administrador/index.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
</body>
</html>