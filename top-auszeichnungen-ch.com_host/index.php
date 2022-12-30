<?php
include 'header.php';
?>
    <main>
      <section class="orig">
        <div class="container">
          <div class="orig__content">
            <div class="orig__body">
              <span class="orig__span">
                Unglaubliche Spiele zum Spaß, spielen Sie die besten Spiele kostenlos auf unserer Website
              </span>
              <h1 class="orig__title">
                Originelle kostenlose Spiele
              </h1>
              <p class="orig__text">
                <span>Die auf der Website angebotenen Spiele geben den Benutzern keine Chance, echtes Geld zu
                  gewinnen.</span>
                Die Website bietet Benutzern keine Fähigkeiten, die beim echten Glücksspiel verwendet werden können. Die
                Spiele stehen Benutzern über 18 Jahren zur Verfügung.
              </p>
              <a class="orig__link" href="#games">
                Jetzt spielen
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="vortiele" id="benefits">
        <div class="container">
          <h2 class="vortiele__title">
            Vorteile
          </h2>
          <ul class="vortiele__list">
            <li class="vortiele__item">
              <span class="vortiele__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h3 class="vortiele__subtitle">
                Spiel ohne Anmeldung
              </h3>
              <p class="vortiele__text">
                Wir benötigen keine Daten von Ihnen, Sie können vollkommen anonym spielen
              </p>
            </li>
            <li class="vortiele__item">
              <span class="vortiele__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h3 class="vortiele__subtitle">
                Kein Risiko aus dem Spiel
              </h3>
              <p class="vortiele__text">
                Spielen Sie völlig kostenlos, ohne Risiko und Sie haben nichts zu verlieren.
              </p>
            </li>
            <li class="vortiele__item">
              <span class="vortiele__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h3 class="vortiele__subtitle">
                Die besten Dinge im Leben sind kostenlos
              </h3>
              <p class="vortiele__text">
                Wir sprechen von kostenlosen Spielen zum Spaß.
              </p>
            </li>
            <li class="vortiele__item">
              <div class="vortiele__image">
                <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="uber" id="about">
        <div class="uber__container container">
          <div class="uber__descr">
            <h2 class="uber__title">
              Über unsere Seite
            </h2>
            <p class="uber__text">
              Hier können Sie Spiele bequem von zu Hause aus spielen. Entdecke kostenlos neue Spiele und bekannte
              Klassiker. Sie können sie bequem von zu Hause aus, auf Ihrem Computer oder auf Ihrem Mobiltelefon
              ausprobieren, ohne das Risiko einzugehen, sich mit Freispielen, Bonusfunktionen und anderen Funktionen
              vertraut zu machen.
            </p>
            <p class="uber__text">
              Wir helfen Ihnen, das vielfältige Angebot zu sortieren und stellen Ihnen viele Möglichkeiten vor, Spiele
              kostenlos zu spielen. Wenn Sie Spiele kostenlos ausprobieren möchten, müssen Sie keine Knöpfe drücken oder
              Hebel bewegen, wie Sie es in einer Spielhalle tun würden. Sie können bequem von zu Hause oder unterwegs
              spielen und Ihre Spiele einfach mit einer Maus oder über den Touchscreen Ihres Smartphones steuern.
            </p>
          </div>
          <div class="uber__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-1.php">
                  Frozen gems
                </a>
                <a class="games__play" href="game-1.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-2.php">
                  Frost queen
                </a>
                <a class="games__play" href="game-2.php">
                  Spielen
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-3.php">
                  Icy gems
                </a>
                <a class="games__play" href="game-3.php">
                  Spielen
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <div class="popup__descr">
          <div class="popup__image">
            <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
          </div>
          <p class="popup__text">Unsere Spiele sind für ein ERWACHSENES Publikum ab 18 Jahren bestimmt. Durch Klicken
            auf die
            bestätigen Sie Ihr Alter.</p>
        </div>
        <form class="popup__form" action="/">
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