<?php
include 'header.php';
?>
    <main>
      <section class="glop">
        <div class="container">
          <div class="glop__content">
            <div class="glop__body">
              <span class="glop__span">
                Zanurz się w świecie emocji dzięki naszym grom
              </span>
              <h1 class="glop__title">
                Graj w darmowe gry dla zabawy
              </h1>
              <p class="glop__descleimer">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="glop__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="zalety" id="benefits">
        <div class="container">
          <h2 class="zalety__title title">
            Zalety
          </h2>
          <div class="zalety__content">
            <ul class="zalety__list">
              <li class="zalety__item">
                <span class="zalety__circle"></span>
                <div class="zalety__descr">
                  <h3 class="zalety__subtitle">
                    Nie wymaga pobierania
                  </h3>
                  <p class="zalety__text">
                    W naszym przypadku wystarczy, że wejdziesz na naszą stronę internetową, gdzie po prostu znajdziesz
                    interesującą Cię grę i zagrasz. Gry bez rejestracji, bez logowania i bez problemów.
                  </p>
                </div>
              </li>
              <li class="zalety__item">
                <span class="zalety__circle"></span>
                <div class="zalety__descr">
                  <h3 class="zalety__subtitle">
                    Rejestracja nie jest wymagana
                  </h3>
                  <p class="zalety__text">
                    Ponadto na naszej stronie, ponieważ nie musisz się rejestrować, jesteś anonimowy. Nie musisz
                    korzystać z poczty elektronicznej, ponieważ nie musisz rejestrować u nas konta!
                  </p>
                </div>
              </li>
              <li class="zalety__item">
                <span class="zalety__circle"></span>
                <div class="zalety__descr">
                  <h3 class="zalety__subtitle">
                    Anonimowość
                  </h3>
                  <p class="zalety__text">
                    Nie wymagamy od Ciebie weryfikacji tożsamości ani przesłania nam dowodu, że rzeczywiście jesteś
                    osobą, za którą się podajesz. Bez rejestracji, bez konieczności weryfikacji tożsamości.
                  </p>
                </div>
              </li>
            </ul>
            <div class="zalety__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Imabe"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <h2 class="slots__title title">
            Gry
          </h2>
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt=""></picture>
                </a>
              </div>
              <a class="slots__link" href="game-1.php">
                Zagraj teraz
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt=""></picture>
                </a>
              </div>
              <a class="slots__link" href="game-2.php">
                Zagraj teraz
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt=""></picture>
                </a>
              </div>
              <a class="slots__link" href="game-3.php">
                Zagraj teraz
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="info" id="about">
        <div class="container">
          <h2 class="info__title title">
            Informacje o naszych darmowych grach
          </h2>
          <div class="info__content">
            <div class="info__image" data-da=".info__item, 991, first">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
            <div class="info__descr">
              <div class="info__item">
                <div class="info__texts">
                  <p class="info__text">
                    Warto rozpocząć swoją przygodę z grami kasynowymi, które oferują wersję demonstracyjną gry. Darmowe
                    automaty do gier to bardzo dobre rozwiązanie zarówno dla początkujących, jak i bardziej
                    doświadczonych graczy.
                  </p>
                  <p class="info__text">
                    Automaty dostępne na naszej stronie są wersjami demonstracyjnymi, jednak w pełni wiernie
                    odzwierciedlają mechanikę prawdziwej gry na automatach. Pozwala to na dobrą zabawę, a także
                    umożliwia wcześniejsze poznanie funkcji automatów.
                  </p>
                </div>
              </div>
              <p class="info__text">
                Darmowe gry bez rejestracji dają możliwość przetestowania najbardziej kultowych wersji automatów
                kasynowych, poznania symboli, szans na wygraną oraz oprawy audiowizualnej każdej z gier. Wystarczy wejść
                na naszą stronę internetową, wybrać grę i kliknąć przycisk „Graj za darmo”. Nie wymagamy żadnych
                depozytów, więc nie ryzykujesz utraty środków.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Nasze gry są przeznaczone dla DOROSŁYCH widzów w wieku 18 lat i starszych. Klikając na
            przycisk potwierdzasz swój wiek.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" href="main.php">Zgodzić się</a>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>