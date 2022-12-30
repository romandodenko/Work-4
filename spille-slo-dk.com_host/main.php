<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="main">
            <div class="container">
              <div class="main__content">
                <div class="main__body">
                  <span class="main__span">
                    Kom og besøg os og leg
                  </span>
                  <h1 class="main__title">
                    Nyd gratis spil for sjov
                  </h1>
                  <p class="main__text">
                    <span>De spil, der tilbydes på siden, giver ikke brugerne en chance for at vinde rigtige
                      penge.</span>
                    Siden giver ikke brugerne færdigheder, der kan bruges i ægte gambling. Spillene er tilgængelige for
                    brugere over 18 år.
                  </p>
                  <ul class="main__list">
                    <li class="main__item main__item_1">
                      <a class="main__link main__link_1" href="#games">
                        Spil
                      </a>
                    </li>
                    <li class="main__item main__item_2">
                      <a class="main__link main__link_2" href="#about">
                        Om os
                      </a>
                    </li>
                  </ul>
                </div>
                <span class="main__icon">
                  <img src="./img/18+.svg" alt="Image">
                </span>
              </div>
            </div>
          </section>
          <section class="kek" id="benefits">
            <div class="container">
              <ul class="kek__list">
                <li class="kek__item">
                  <div class="kek__wrapper-icon">
                    <span class="kek__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="kek__title">
                    Spil uden investeringer
                  </h3>
                  <p class="kek__text">
                    Stort udvalg af spil samt en god blanding af gamle og nye spil fra forskellige genrer
                  </p>
                </li>
                <li class="kek__item">
                  <div class="kek__wrapper-icon">
                    <span class="kek__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="kek__title">
                    Kvalitetsspil
                  </h3>
                  <p class="kek__text">
                    Spil fra kvalitetsproducenter med den bedste grafik og vurderinger
                  </p>
                </li>
                <li class="kek__item">
                  <div class="kek__wrapper-icon">
                    <span class="kek__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="kek__title">
                    Adaptivt spil
                  </h3>
                  <p class="kek__text">
                    Casino-app, der tillader mobile casinospillere også at få adgang til tilbuddet, adaptivt spil til
                    enhver enhed
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <h2 class="about__title">
                Om os
              </h2>
              <div class="about__content">
                <div class="about__descr">
                  <h3 class="about__subtitle">
                    Den bedste side - find det rigtige sted til gratis spil
                  </h3>
                  <p class="about__text">
                    Leder du efter spil og har allerede browset hele internettet? Men ingen steder tilbydes det at
                    spille gratis spil? Det afslutter din søgning, for vi har nok det bedste spilbibliotek på nettet. At
                    spille spil gratis uden at downloade er vores absolutte speciale, fordi vi altid er opdateret, når
                    det kommer til spil.
                  </p>
                  <p class="about__text">
                    Gratis spil er sjove, sikre og meget nemme at spille. Du behøver ikke at downloade nogen speciel
                    software for at nyde alle aktiviteterne. Alle spil kan nemt tilgås og spilles via din
                    internetbrowser. Vælg dine yndlingsspil og start med det samme!
                  </p>
                  <p class="about__text">
                    Dette kan tage lidt tid, og softwaren fylder selvfølgelig også meget på din enhed.
                  </p>
                  <p class="about__text">
                    I dag, takket være nye teknologier som Flash og HTML5, behøver du ikke længere at downloade software
                    for at spille efter hjertens lyst, hvad enten det er på din pc eller mobile enheder.
                  </p>
                </div>
                <ul class="about__images">
                  <li class="about__image">
                    <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                  </li>
                  <li class="about__image">
                    <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <section class="play" id="games">
            <div class="container">
              <ul class="play__list">
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-1.php">
                    Starz
                  </a>
                  <a class="play__play" href="game-1.php">
                    Spil
                  </a>
                </li>
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-2.php">
                    Star bounty
                  </a>
                  <a class="play__play" href="game-2.php">
                    Spil
                  </a>
                </li>
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-3.php">
                    Wild machine
                  </a>
                  <a class="play__play" href="game-3.php">
                    Spil
                  </a>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>