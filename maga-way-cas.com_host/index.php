<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__image">
            <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
          </div>
          <div class="hero__body">
            <h1 class="hero__title">
              Spil til din fritid
              <span>og fornøjelse</span>
            </h1>
            <a class="hero__link" href="#games">
              Spil nu
            </a>
            <p class="hero__text">
              <span>De spil, der tilbydes på siden, giver ikke brugerne chancen for at vinde rigtige penge.</span>
              Siden giver ikke brugerne færdigheder, der kan bruges i ægte gambling. Spillene er tilgængelige for
              brugere over 18 år.
            </p>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="benefits__container container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <p class="benefits__text">
                Vi vil ikke genere dig med at udfylde formularer, så du kan nyde vores slots, du vil gøre det på få
                sekunder uden besvær.
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__text">
                At have gratis slots betyder ikke, at du skal ofre noget som helst aspekt af den originale oplevelse,
                som du kan nyde.
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__text">
                Gratis spins er spins, der tildeles spillere, så de kan dreje hjulene uden yderligere indsatser.
              </p>
            </li>
          </ul>
          <div class="benefits__image">
            <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="os" id="about">
        <div class="container">
          <h2 class="os__title">
            Om os
          </h2>
          <div class="os__content">
            <div class="os__column">
              <p class="os__text">
                Velkommen til vores side, det eneste sted, der vil give dig alt relateret til spil. Det vil være din
                portal til ubegrænset underholdning og spænding. Hovedformålet med hjemmesiden er at give spillere fra
                hele verden en afslappende og smidig spiloplevelse; det er derfor, vi har samlet alt, hvad en spiller
                kan have brug for for at nyde deres spil under ét tag.
              </p>
              <p class="os__text">
                Vores side indeholder nogle af de nyeste spil såvel som nogle af klassikerne, med nye tilføjet, så snart
                de er udgivet af deres respektive softwareudviklere. Vi tilbyder ikke kun spillet, men vi tilbyder også
                en detaljeret anmeldelse, der følger med det, som vil hjælpe dig med at forstå spillet, dets essens,
                dets funktioner og hvordan man spiller det.
              </p>
            </div>
            <div class="os__column">
              <p class="os__text">
                Sammenlignet med kort- og brætspil er gratis spil meget nemmere at lære og spille. Der er ingen mening i
                at lede efter en vindermetode, fordi hvert spin på hjulet er fuldstændig tilfældigt og uafhængigt. Men
                glem ikke, at enhver succesfuld afspilning af freeroll-spil kræver en vis viden om, hvordan de fungerer,
                og bankroll-styring.
              </p>
              <p class="os__text">
                Moderne teknologi giver os mulighed for at nyde vores yndlingsspil og slots gratis, uanset pc, når som
                helst, hvor som helst, hvor end vi spiller. Det er bare vigtigt at have en god internetforbindelse og
                lidt held. Mobilspil som en af ​​de bedste opfindelser i gambling-industrien er en applikation, der
                passer til moderne styresystemer, hvor du kan spille spil gratis.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__play" href="game-1.php">
                  Spil
                </a>
                <a class="slots__link" href="game-1.php">
                  Paying piano club
                </a>
              </div>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__play" href="game-2.php">
                  Spil
                </a>
                <a class="slots__link" href="game-2.php">
                  Thunderscreech
                </a>
              </div>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__play" href="game-3.php">
                  Spil
                </a>
                <a class="slots__link" href="game-3.php">
                  Dragon kingdom
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
        <form class="popup__form" action="/">
          <p class="popup__text">Vores spil er beregnet til et VOKSEN publikum på 18 år og ældre. Ved at klikke på
            knappen bekræfter du din alder.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" href="main.php">Enig</a>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>