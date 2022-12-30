<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="ponch">
            <div class="container">
              <div class="ponch__content">
                <div class="ponch__body">
                  <span class="ponch__span">
                    Wolne gniazda
                  </span>
                  <h1 class="ponch__title">
                    Na naszej stronie znajdziesz wiele zabawnych gier
                  </h1>
                  <p class="ponch__descleimer">
                    <span>Gry oferowane na stronie nie dają użytkownikom możliwości wygrania prawdziwych
                      pieniędzy.</span>
                    Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry
                    są dostępne dla użytkowników powyżej 18 roku życia.
                  </p>
                  <a class="ponch__link" href="#games">
                    Gry
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="playning" id="games">
            <div class="container">
              <h2 class="playning__title title">
                <span>Gry</span>
              </h2>
              <ul class="playning__list">
                <li class="playning__item playning__item_1">
                  <div class="playning__descr">
                    <a class="playning__link" href="game-1.php">
                      Greek Gods
                    </a>
                    <a class="playning__play" href="game-1.php">
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                  </div>
                </li>
                <li class="playning__item playning__item_2">
                  <div class="playning__descr">
                    <a class="playning__link" href="game-2.php">
                      Take Olympus
                    </a>
                    <a class="playning__play" href="game-2.php">
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                  </div>
                </li>
                <li class="playning__item playning__item_3">
                  <div class="playning__descr">
                    <a class="playning__link" href="game-3.php">
                      The Hand of Midas
                    </a>
                    <a class="playning__play" href="game-3.php">
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <div class="about__content">
                <h2 class="about__title title">
                  <span>O nas</span>
                </h2>
                <p class="about__text">
                  Warto rozpocząć swoją przygodę z grami, które oferują wersję demonstracyjną gry. Darmowe gry to bardzo
                  dobre rozwiązanie zarówno dla początkujących, jak i bardziej doświadczonych graczy.
                </p>
                <p class="about__text">
                  Gry dostępne na naszej stronie są wersjami demonstracyjnymi, jednak w pełni odzwierciedlają mechanikę
                  prawdziwej gry. Pozwala to na dobrą zabawę, a także umożliwia wcześniejsze poznanie funkcji gier.
                  Darmowe gry bez rejestracji dają możliwość przetestowania najbardziej kultowych wersji gier, poznania
                  symboli, szans na wygraną oraz oprawy audiowizualnej każdej konkretnej gry. Wystarczy wejść na naszą
                  stronę internetową, wybrać grę i kliknąć przycisk „Graj za darmo”. Nie wymagamy żadnych depozytów,
                  więc
                  nie ryzykujesz utraty środków.
                  Gry mają jeden z najmniej złożonych systemów gier. Typowa rozgrywka polega na uzyskaniu tych samych
                  symboli na wybranych liniach, bębnach. W przypadku klasycznych gier są to zazwyczaj trzy bębny i kilka
                  różnych linii wygrywających (przynajmniej jedna). Z drugiej strony gry są bardziej złożone, a
                  większość
                  z nich ma co najmniej pięć bębnów. W takim przypadku istnieje więcej sposobów na wygraną niż tylko
                  umieszczenie tych samych symboli na tej samej linii.
                </p>
              </div>
            </div>
          </section>
          <section class="advantages" id="benefits">
            <div class="container">
              <h2 class="advantages__title title">
                <span>Advantages</span>
              </h2>
              <ul class="advantages__list">
                <li class="advantages__item">
                  <span class="advantages__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="advantages__subtitle">
                    Różne gry
                  </h3>
                  <p class="advantages__text">
                    W naszej kolekcji znajdziesz różnorodne gry i możesz wybrać najbardziej odpowiednią
                  </p>
                </li>
                <li class="advantages__item">
                  <span class="advantages__icon">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </span>
                  <h3 class="advantages__subtitle">
                    Graj w dowolnym momencie
                  </h3>
                  <p class="advantages__text">
                    Nie ograniczaj się w wyborze urządzenia. Gry dostępne na każdym urządzeniu
                  </p>
                </li>
                <li class="advantages__item">
                  <span class="advantages__icon">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </span>
                  <h3 class="advantages__subtitle">
                    Łatwość dostępu
                  </h3>
                  <p class="advantages__text">
                    Rozpocznij grę już teraz, mając dobre połączenie internetowe.
                  </p>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>