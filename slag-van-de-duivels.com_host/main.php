<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <h1 class="main__title">
                Willkommen auf unserer Webseite
              </h1>
              <p class="main__descleimer">
                <span>Die auf der Website angebotenen Spiele geben den Benutzern nicht die Möglichkeit, echtes Geld zu
                  gewinnen.
                </span>
                Die Website bietet Benutzern keine Fähigkeiten, die beim echten Glücksspiel verwendet werden können. DAS
                Spiele stehen Benutzern ab 18 Jahren zur Verfügung.
              </p>
              <a class="main__link" href="#games">
                Abspielen
              </a>
            </div>
            <div class="main__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="clen" id="about">
        <div class="container">
          <h2 class="clen__title">
            Wer wir sind
          </h2>
          <p class="clen__text">
            Wir wissen, was die ideale Dienstleistung aus Sicht des Kunden sein sollte, und wir bemühen uns, sie Ihnen
            zu bieten. Unsere kostenlosen Spiele erfüllen alle Anforderungen an moderne Spiele. Wir bieten die
            größtmögliche Auswahl an kostenlosen Spieleanbietern. Unsere Website ist keine Wettplattform, daher ist kein
            echtes Geld erforderlich, um eine Einzahlung zu tätigen. Spieler sollten auch verstehen, dass sich die
            Algorithmen für kostenlose Spiele stark von ihren realen Alternativen unterscheiden. Daher sollte die
            Gewinnwahrscheinlichkeit in Freispielen nicht mit Gewinnen in ihren Gegenstücken gleichgesetzt werden.
          </p>
          <p class="clen__text">
            Neben dem Spielen am Computer gibt es auch eine mobile Version. Unsere Seite eignet sich für ein bequemes
            Spiel auf Handys und Tablets. Spieler können überall mit einer Internetverbindung spielen. Neben einer
            identischen Auswahl an Spielautomaten stehen dem Spieler alle Aktionen und Boni auf dem Gadget zur
            Verfügung.
          </p>
        </div>
      </section>
      <section class="second" id="games">
        <div class="container">
          <h2 class="second__title">
            Spiele
          </h2>
          <ul class="second__list">
            <li class="second__item">
              <div class="second__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="second__link" href="game-1.php">
                Spielen
              </a>
            </li>
            <li class="second__item">
              <div class="second__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="second__link" href="game-2.php">
                Spielen
              </a>
            </li>
            <li class="second__item">
              <div class="second__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="second__link" href="game-3.php">
                Spielen
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="ulus" id="benefits">
        <div class="container">
          <h2 class="ulus__title">
            Vorteile
          </h2>
          <ul class="ulus__list">
            <li class="ulus__item">
              <span class="ulus__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="ulus__subtitle">
                Thematische Spiele
              </h3>
              <p class="ulus__text">
                Spannende und interessante Spiele mit unterschiedlichen Handlungssträngen und erstaunlicher Grafik warten auf Sie.
              </p>
            </li>
            <li class="ulus__item">
              <span class="ulus__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="ulus__subtitle">
                Spiel ohne Investition
              </h3>
              <p class="ulus__text">
                Gratisspiele sind Spiele ohne Investitionen und Chancen, echtes Geld oder Preise zu gewinnen.
              </p>
            </li>
            <li class="ulus__item">
              <span class="ulus__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="ulus__subtitle">
                Eine Registrierung ist nicht erforderlich
              </h3>
              <p class="ulus__text">
                Es gibt keine Hindernisse vor dem Spiel, drücken Sie einfach die Taste und genießen Sie das Spiel
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>