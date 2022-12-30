<?php
include 'header.php';
?>
    <main>
      <section class="geo">
        <div class="container">
          <div class="geo__content">
            <div class="geo__body">
              <span class="geo__span">
                Jeśli chcesz grać za darmo, nasza strona jest tym, czego potrzebujesz
              </span>
              <h1 class="geo__title">
                Najlepsze darmowe gry tylko na naszej stronie
              </h1>
              <p class="geo__text">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="geo__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="benefits" id="benefits">
          <div class="container">
            <h2 class="benefits__title title">
              Nasze atuty
            </h2>
            <ul class="benefits__list">
              <li class="benefits__item">
                <span class="benefits__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </span>
                <h3 class="benefits__subtitle">
                  Różne gry
                </h3>
                <p class="benefits__text">
                  Mamy gry o różnych i ekscytujących tematach. Ciesz się najnowocześniejszymi i najciekawszymi grami z
                  dobrą grafiką i efektami dźwiękowymi
                </p>
              </li>
              <li class="benefits__item">
                <span class="benefits__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
                <h3 class="benefits__subtitle">
                  Dostępne na wszystkich urządzeniach
                </h3>
                <p class="benefits__text">
                  Możesz grać w nasze gry swobodnie na dowolnym urządzeniu iz dowolnego miejsca na świecie, jedyne czego
                  potrzebujesz to internet.
                </p>
              </li>
            </ul>
          </div>
          </div>
          <div class="games" id="games">
            <div class="container">
              <h2 class="games__title title">
                Gry
              </h2>
              <ul class="games__list">
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="games__link" href="game-1.php">
                    Thor
                  </a>
                  <a class="games__play" href="game-1.php">
                    Bawić się
                  </a>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="games__link" href="game-2.php">
                    Dance party
                  </a>
                  <a class="games__play" href="game-2.php">
                    Bawić się
                  </a>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="games__link" href="game-3.php">
                    Viking
                  </a>
                  <a class="games__play" href="game-3.php">
                    Bawić się
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="about" id="about">
            <div class="container">
              <h2 class="about__title title">
                O nas
              </h2>
              <p class="about__text about__text_1">
                Darmowe gry są dokładnymi replikami tych, które można znaleźć w prawdziwym świecie. Główną różnicą
                między nimi jest tabela wypłat, która może mieć znaczenie w przypadku wersji demonstracyjnej gry.
              </p>
              <div class="about__content">
                <div class="about__image" data-da=".about__item, 991, 0">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
                <div class="about__descr">
                  <div class="about__item">
                    <p class="about__text">
                      Jak widać, gry stają się coraz bardziej popularne. Gracze wybierają gry, ponieważ są bardzo łatwe
                      w obsłudze i nie wymagają specjalnej wiedzy. Po prostu naucz się podstawowych zasad i zacznij
                      grać. Wiemy jednak, że każda gra kosztuje, a gracze nie chcą płacić za coś, czego nie znają. Na
                      szczęście wiele witryn hazardowych oferuje darmowe gry, w które można grać bez wydawania ani
                      grosza.
                    </p>
                  </div>
                  <p class="about__text">
                    Darmowe gry są często wybierane nie tylko dlatego, że są darmowe. Te gry zawdzięczają swoją
                    popularność temu, że można je znaleźć w szerokiej gamie motywów i grafik, każdy gracz powinien
                    znaleźć automat, który odpowiada jego stylowi gry, pasji lub z jakiegokolwiek innego powodu.
                  </p>
                  <p class="about__text">
                    Gry gwarantują bardzo dużą dawkę rozrywki. Gry wyposażone są w wiele ciekawych bonusów, możliwość
                    otrzymania darmowych spinów oraz mnożnik wygranej. Wiele gier ma bardzo ciekawe projekty, których
                    nie ma w tradycyjnych grach. Nie można też zaprzeczyć, że wiele z tych gier pozwala graczom na
                    wygranie całkiem sporych jackpotów i innych nagród. Jest to również aspekt, który sprawia, że ​​gry
                    są tak popularne.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>