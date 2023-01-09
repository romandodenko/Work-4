<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Unterhaltungs-Slots">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script defer src="./js/main.js"></script>
  <title>Slotu10top - Unterhaltungs-Slots</title>
</head>

<body>
  <div class="page">
<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Spielen Sie absolut kostenlos auf unserer Seite
              </span>
              <h1 class="hero__title">
                Unterhaltungs-Slots
              </h1>
              <p class="hero__text">
                Weź udział w najlepszych grach na naszej stronie i spędź z nami czas! Tutaj możesz poczuć przyjemność z
                różnorodnych gier i bardzo łatwo zabić czas
              </p>
              <a class="hero__link" href="#games">
                Spielen
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Game"></picture>
                </a>
              </div>
              <div class="games__links">
                <a class="games__link" href="game-1.php">
                  Aztec gems
                </a>
                <a class="games__play" href="game-1.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                </a>
              </div>
              <div class="games__links">
                <a class="games__link" href="game-2.php">
                  Fishin reels
                </a>
                <a class="games__play" href="game-2.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Game"></picture>
                </a>
              </div>
              <div class="games__links">
                <a class="games__link" href="game-3.php">
                  Lazy monkey
                </a>
                <a class="games__play" href="game-3.php">
                  Spielen
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="benq" id="benefits">
        <div class="container">
          <ul class="benq__list">
            <li class="benq__item">
              <span class="benq__icon">
                <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <h3 class="benq__title">
                Anonymität
              </h3>
              <p class="benq__text">
                Sie müssen sich nicht auf unserer Website registrieren, Sie müssen keine zusätzlichen Formulare
                ausfüllen
              </p>
            </li>
            <li class="benq__item">
              <span class="benq__icon">
                <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <h3 class="benq__title">
                Eine große Auswahl an Spielen
              </h3>
              <p class="benq__text">
                Es gibt unzählige Vorteile, zu spielen, und einer davon ist eine große Auswahl an Spielen.
              </p>
            </li>
            <li class="benq__item">
              <span class="benq__icon">
                <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <h3 class="benq__title">
                Graj przez całą dobę
              </h3>
              <p class="benq__text">
                Strona jest dostępna w dogodnym dla Ciebie czasie, do gry potrzebujesz tylko Internetu.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="say" id="about">
        <div class="container">
          <h2 class="say__title">
            Über unsere Slots
          </h2>
          <p class="say__text">
            Lieber Besucher unseres Portals! Spielst du auch so gerne Spiele wie wir? Wenn ja, dann würden wir uns
            freuen, Sie auf unserer Seite begrüßen zu dürfen! Möchten Sie Ihre Freizeit mit Spielen verbringen? Hier
            finden Sie viele spannende Spielautomaten für Sie und Ihre Freunde. Hier finden Sie Slots namhafter
            Hersteller! Diese und andere spannende Spiele finden Sie auf unserer Website. Tauchen Sie mit uns in die
            Welt der Slots ein!
          </p>
          <p class="say__text">
            Wenn Sie ein Spieler sind und Ihr Glück versuchen möchten, sind Sie vielleicht mit Spielautomaten und Slots
            vertraut. Heute werden wir darüber sprechen, wie sich Spielautomaten befinden, wie sie sich voneinander
            unterscheiden und mit welchen Strategien sie am besten gespielt werden.
          </p>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Unsere Spiele sind für ein ERWACHSENES Publikum ab 18 Jahren bestimmt. Durch Klicken
            auf die
            bestätigen Sie Ihr Alter.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" href="main.php">Zustimmen</a>
        </form>
      </div>
    </div>
   <?php
   include 'footer.php';
   ?>
  </div>
</body>

</html>