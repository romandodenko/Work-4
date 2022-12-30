<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="top">
            <div class="container">
              <a class="top__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logo">
              </a>
            </div>
          </section>
          <section class="main">
            <div class="container">
              <div class="main__content">
                <div class="main__body">
                  <span class="main__span">
                    Hry zdarma
                  </span>
                  <h1 class="main__title">
                    Zahrajte si hry zdarma
                  </h1>
                  <p class="main__descleimer">
                    <span>Hry nabízené na webu nedávají uživatelům šanci vyhrát skutečné peníze.</span>
                    Stránka neposkytuje uživatelům dovednosti, které lze využít v reálném hazardu. Hry jsou dostupné
                    uživatelům starším 18 let.
                  </p>
                  <a class="main__link" href="#games">
                    Hrát si
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="hry" id="games">
            <div class="container">
              <h2 class="hry__title">
                Hry
              </h2>
              <ul class="hry__list">
                <li class="hry__item">
                  <a href="game-1.php">
                    <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                  </a>
                </li>
                <li class="hry__item">
                  <a href="game-2.php">
                    <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                  </a>
                </li>
                <li class="hry__item">
                  <a href="game-3.php">
                    <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="nas" id="about">
            <div class="container">
              <h2 class="nas__title">
                O nás
              </h2>
              <div class="nas__content">
                <div class="nas__image" data-da=".nas__item, 991, 0">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
                <div class="nas__descr">
                  <div class="nas__item">
                    <div class="nas__texts">
                      <p class="nas__text">
                        Vítejte na našich stránkách, kde najdete převážnou většinu bezplatných her nabízených moderními
                        vývojáři. Vyberte si buď z navrhovaných her zde na stránce, nebo v nabídce na pravé straně
                        stránky.
                      </p>
                      <p class="nas__text">
                        Děláme, co je v našich silách, abychom vytvořili ty nejlepší webové stránky, na kterých jsou
                        dnes na internetu dostupné všechny hry zdarma. Každý týden přidáváme nové hry, takže jsme si
                        jisti, že najdete hru, která bude vyhovovat vaší náladě a vkusu.
                      </p>
                      <p class="nas__text">
                        Zveme vás na naše stránky a přejeme vám příjemné chvíle, zapojte se do komunity, ale hlavně se
                        mějte dobře. Hrajte a vyhrajte ještě dnes!
                      </p>
                    </div>
                  </div>
                  <p class="nas__text">
                    Mnoho webů vyžaduje, abyste si před hraním bezplatných her stáhli do počítače nebo mobilního
                    telefonu objemný software. V naší velké sbírce her najdete pouze verze, které nevyžadují stahování.
                    Stačí použít váš internetový prohlížeč a můžete hrát hned teď!
                  </p>
                  <p class="nas__text">
                    Na rozdíl od většiny stránek, kde musíte před hraním projít zdlouhavým registračním procesem, zde u
                    nás registrace není nutná. Stačí otevřít prohlížeč, vybrat si z nabídky svou oblíbenou hru a začít
                    hrát. Bez jakýchkoli formulářů a bez poskytnutí osobních údajů. Nebudeme se vás ptát na vaši
                    e-mailovou adresu a zahlcovat ji nekonečným spamem nebo nevyžádanými nabídkami. Nemusíte se bát, že
                    zapomenete své uživatelské jméno nebo heslo – nepotřebujete je!
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="vihodi" id="benefits">
            <div class="container">
              <h2 class="vihodi__title">
                Výhody
              </h2>
              <ul class="vihodi__list">
                <li class="vihodi__item">
                  <div class="vihodi__wrapper-logo">
                    <span class="vihodi__icon">
                      <img src="./img/icon-1.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="vihodi__subtitle">
                    Nehrozí ztráta peněz.
                  </h3>
                  <p class="vihodi__text">
                    Uživatel sází na virtuální kredity, které lze upgradovat.
                  </p>
                </li>
                <li class="vihodi__item">
                  <div class="vihodi__wrapper-logo">
                    <span class="vihodi__icon">
                      <img src="./img/icon-2.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="vihodi__subtitle">
                    Úvod do herních funkcí
                  </h3>
                  <p class="vihodi__text">
                    Zkušený uživatel potřebuje informace o frekvenci bonusových kol, počtu řádků ve hře a o tom, zda se
                    dá změnit.
                  </p>
                </li>
                <li class="vihodi__item">
                  <div class="vihodi__wrapper-logo">
                    <span class="vihodi__icon">
                      <img src="./img/icon-3.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="vihodi__subtitle">
                    Výzdoba a děj.
                  </h3>
                  <p class="vihodi__text">
                    Pro mnoho hráčů je důležitá vizuální složka zábavy. Spuštěním video slotu zdarma může uživatel
                    hodnotit děj, témata a symboly.
                  </p>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>