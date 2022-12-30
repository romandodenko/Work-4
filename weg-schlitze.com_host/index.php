<?php
include 'header.php';
?>
    <main>
      <section class="kostellen">
        <div class="container">
          <div class="kostellen__content">
            <div class="kostellen__body">
              <h1 class="kostellen__title">
                Kostenlose Spiele für Sie
              </h1>
              <p class="kostellen__text">
                <span>Die auf der Website angebotenen Spiele geben den Benutzern keine Chance, echtes Geld zu
                  gewinnen.</span>
                Die Website bietet Benutzern keine Fähigkeiten, die beim echten Glücksspiel verwendet werden können. Die
                Spiele stehen Benutzern über 18 Jahren zur Verfügung.
              </p>
              <a class="kostellen__link" href="#games">
                Jetzt spielen
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="spielen" id="benefits">
        <div class="container">
          <ul class="spielen__list">
            <li class="spielen__item">
              <h3 class="spielen__title">
                Spielen Sie ohne Einzahlung
              </h3>
              <p class="spielen__text">
                Moderne Slots erlauben es Ihnen, das Guthaben nicht aufzufüllen und kein Geld einzuzahlen, Sie haben ein
                virtuelles Konto mit virtuellem Geld.
              </p>
            </li>
            <li class="spielen__item">
              <h3 class="spielen__title">
                Moderne Spiele
              </h3>
              <p class="spielen__text">
                Jeśli masz dość przestarzałej grafiki i klasycznych automatów, nasza strona jest tym, czego potrzebujesz
              </p>
            </li>
            <li class="spielen__item">
              <h3 class="spielen__title">
                Slot-Spiel kein Download
              </h3>
              <p class="spielen__text">
                Das Spiel benötigt keine zusätzliche Software, alles, was Sie brauchen, ist eine gute
                Internetverbindung.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="spielens" id="games">
        <div class="container">
          <ul class="spielens__list">
            <li class="spielens__item">
              <div class="spielens__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="spielens__play" href="game-1.php">
                Spielen
              </a>
            </li>
            <li class="spielens__item">
              <div class="spielens__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="spielens__play" href="game-2.php">
                Spielen
              </a>
            </li>
            <li class="spielens__item">
              <div class="spielens__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="spielens__play" href="game-3.php">
                Spielen
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="dann" id="about">
        <div class="container">
          <h2 class="dann__title">
            Dann als
          </h2>
          <h3 class="dann__subtitle">
            Kostenloses Glücksspiel
          </h3>
          <div class="dann__content">
            <div class="dann__descr">
              <p class="dann__text">
                Wollen Sie kostenlose Spielautomaten? Dann sind Sie hier genau richtig. Hier finden Sie alle bekannten
                Spielautomaten, die alle kostenlos und ohne Anmeldung ausprobiert werden können. Außerdem bieten wir
                ausführliche Testberichte und Bewertungen zu den beliebtesten Slots. Sie erfahren alles über die
                verschiedenen Funktionen von Spielautomaten und können rund um die Uhr ohne Risiko kostenlose
                Spielautomaten spielen. Das Beste daran ist, dass Sie sofort loslegen können, ohne sich zu registrieren
                oder persönliche Daten einzugeben.
              </p>
              <p class="dann__text">
                Warum sollten Sie Slots kostenlos spielen, bevor Sie mit echtem Geld wetten? Es gibt viele Gründe, warum
                es empfehlenswert ist, Freispiele zu nutzen, bevor Sie zum ersten Mal echtes Geld investieren.
                Beispielsweise möchten Sie sich zunächst einen Überblick über verschiedene Online-Spielautomaten
                verschaffen. Die Auswahl an Spielautomaten ist riesig und jeder Spieleanbieter bietet viele verschiedene
                Features.
              </p>
              <p class="dann__text">
                Die Möglichkeit, Spielautomaten kostenlos ohne Registrierung und ohne Risiko zu spielen, ist definitiv
                einer der größten Vorteile. Wie bei allem gilt auch hier: Übung macht den Meister. Hier kommen
                Freispiele ins Spiel.
              </p>
            </div>
            <div class="dann__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Unsere Spiele sind für ein ERWACHSENES Publikum ab 18 Jahren bestimmt. Durch Klicken
            auf die
            Button bestätigst du dein Alter.</p>
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