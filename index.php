<!doctype html>
<html lang="de" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSC Land Hadeln</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo/Motorsport Club Land Hadeln.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="d-flex h-100 text-center">
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo/Motorsport Club Land Hadeln.svg" alt="MSC Land Hadeln" height="55"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dokumente
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="jugendkart.html" style="color: rgb(255, 49, 49);">Endlauf Jugendkart</a></li>
                  <li><a class="dropdown-item" href="#" style="color: rgb(255, 49, 49);">Endlauf Superkart</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Starterliste</a></li>
                  <li><a class="dropdown-item" href="#">Ausschreibung</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Speisekarte</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="camping.html">Camping</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <div class="px-3" id="cover-text">
        <p class="lead">DM - Endlauf im Superkart & Jugendkart vom 03. bis 06. Oktober 2024</p>
        <h1 id="cover-texth1">MSC LAND HADELN</h1>
      </div>
    </main>

    <div class="main-content">
      <div class="siteselection d-flex justify-content-center" style="gap: 50px;">
        <div class="card" style="width: 18rem;">
          <img src="images/Cards/catering.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text"><button type="button" class="btn btn-custom2">Ansehen</button></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images/Cards/camping.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text"><button type="button" class="btn btn-custom2" onclick="window.location.href='camping.html'">Ansehen</button></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images/Cards/superkart.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text"><button type="button" class="btn btn-custom2">Ansehen</button></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images/Cards/jugendkart.png" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text"><button type="button" class="btn btn-custom2" onclick="window.location.href='jugendkart.html'">Ansehen</button></p>
          </div>
        </div>
      </div>
      <br><br>

    </div>

    <footer class="mt-auto text-black-50">
      <p style="color: black; font-weight: bold;">&copy; Copyright 2024 MSC Land Hadeln e. V. <a href="impressum.html" class="impressum">Impressum</a> <a href="https://www.instagram.com/msc_landhadeln/" style="margin-left: 60px;"><i class="bi bi-instagram"></i></a> <a href="https://www.msc-land-hadeln.de" style="margin-left: 10px;"><i class="bi bi-link-45deg"></i></a>    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.js"></script>
  </body>
</html>
