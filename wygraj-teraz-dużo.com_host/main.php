<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Jeśli lubisz grać w gry dla zabawy
              </span>
              <h1 class="hero__title">
                Zapraszamy do odwiedzenia nas
              </h1>
              <p class="hero__text">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="hero__link" href="#games">
                Gry
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Nasze gry
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-1.php">
                  Yummy Wilds
                </a>
                <a class="games__play" href="game-1.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-2.php">
                  Gems Bonanza
                </a>
                <a class="games__play" href="game-2.php">
                  Bawić się
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
                  Honey Honey Honey!
                </a>
                <a class="games__play" href="game-3.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            O nas
          </h2>
          <p class="about__text">
            Istnieje wiele sposobów, na jakie gracze mogą korzystać z darmowych gier, a coraz więcej witryn na całym
            świecie oferuje możliwość grania w swoje gry za darmo i bez żadnego ryzyka. Do gry i zabawy wystarczy dostęp
            do Internetu i nie ma znaczenia, czy dostęp ten pochodzi z sieci lokalnej, czy przez sieć komórkową.
          </p>
          <p class="about__text">
            Staramy się zaskoczyć Cię nie tylko grami, ale także niesamowitym interfejsem użytkownika, który nie ma
            sobie równych. Odwiedź nas i weź udział w naszej podróży, aby skorzystać z naszych usług. Jak każda inna
            platforma do gier, również mamy cel. Naszym celem jest dostarczanie wyjątkowych gier, a co za tym idzie
            osiągnięcie satysfakcji klienta. Krótko mówiąc, dokładamy wszelkich starań, aby zapewnić Ci jak najlepsze
            wrażenia za każdym razem, gdy wchodzisz do naszego głównego świata hazardu. Przygotuj się więc na
            oszałamiające doświadczenie, które czeka na Ciebie po drodze.
          </p>
          <ul class="about__images">
            <li class="about__image about__image_1">
              <picture><source srcset="./img/about-1.webp"type="image/webp"><img src="./img/about-1.png" alt="Image"></picture>
            </li>
            <li class="about__image about__image_2">
              <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
            </li>
            <li class="about__image about__image_3">
              <picture><source srcset="./img/about-3.webp"type="image/webp"><img src="./img/about-3.png" alt="Image"></picture>
            </li>
          </ul>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__span">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="benefits__title">
                Zabawne i darmowe
              </h3>
              <p class="benefits__text">
                Gdy zostaniesz członkiem, możesz wypróbować setki gier dla zabawy - bez żadnych zobowiązań finansowych.
                Możesz więc skupić się na zabawie.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="benefits__title">
                Więcej zabawy i lepsza rozgrywka
              </h3>
              <p class="benefits__text">
                Ciesz się jeszcze większą frajdą bez wydawania ani grosza, czerpiesz te same emocje z gry, ale nie
                płacisz absolutnie nic
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__span">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="benefits__title">
                Szeroki wybór gier
              </h3>
              <p class="benefits__text">
                Gra w Internecie niesie ze sobą niezliczone korzyści, a jedną z nich jest duży wybór gier.
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>