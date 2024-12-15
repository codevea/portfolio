<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
  <title>Nathalie Vrecq | Portfolio</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="./js/navone.js" defer></script>
  <script src="./js/timeline.js" defer></script>
  <script src="./js/scroll.js" defer></script>
  <script src="https://kit.fontawesome.com/d50e22fcc0.js" crossorigin="anonymous" defer></script>
</head>

<body>
  <header class="header">
    <picture>
      <source media="(min-width:1024px)" srcset="pictures/header-large.webp">
      <source media="(min-width:800px)" srcset="pictures/header-medium.webp">
      <img src="pictures/header-small.webp" alt="Représentant une impression mosaïque du profil d'une femme.">
    </picture>
    <div class="textCenter">
      <img src="pictures/image.webp" class="imageHeader">
      <h1>Nathalie Vrecq | Portfolio</h1>
    </div>
  </header>
  <nav class="nav">
    <a href="#" class="navCompany">Portfolio</a>
    <div class="navContainer">
      <div class="navListContainer" tabindex="0">
        <ul class="navMenu" id="navmenu">
          <li><a href="#aPropos">A propos</a></li>
          <li><a href="#projets">Realisations</a></li>
          <li><a href="#parcours">Parcours</a></li>
          <li><a href="#competences">Compétences</a></li>
          <li><a href="#veille">Veille</a></li>
        </ul>
        <a id="hamburger" href="#!" title="menu" class="navHamburger"><i class="fa-solid fa-bars"></i></a>
      </div>
      <a href="#!" title="close menu" class="navHamburgerclose"><i class="fa fa-2x fa-times-circle"></i></a>
    </div>
  </nav>