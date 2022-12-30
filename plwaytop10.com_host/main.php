<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <span class="main__span">
                <span>Spędź z nami zabawny czas</span>
              </span>
              <h1 class="main__title">
                Oferujemy najlepsze gry!
              </h1>
              <p class="main__descleimer">
                <span>Gry oferowane na stronie nie dają użytkownikom możliwości wygrania prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="main__link" href="#games">
                Bawić się
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="eleres" id="benefits">
        <div class="container">
          <ul class="eleres__list">
            <li class="eleres__item">
              <span class="eleres__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h3 class="eleres__subtitle">
                Tematyczne darmowe gry
              </h3>
              <p class="eleres__text">
                Tutaj znajdziesz grę na każdy nastrój iz dowolną atmosferą. Różnorodni bohaterowie i klimatyczna grafika
                czekają na Ciebie.
              </p>
            </li>
            <li class="eleres__item">
              <span class="eleres__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h3 class="eleres__subtitle">
                Gry dla zabawy
              </h3>
              <p class="eleres__text">
                Darmowe i wysokiej jakości gry czekają na Ciebie. Nie musisz płacić żadnych pieniędzy, Twoje konto jest
                całkowicie wirtualne
              </p>
            </li>
            <li class="eleres__item">
              <span class="eleres__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h3 class="eleres__subtitle">
                Nie musisz niczego pobierać
              </h3>
              <p class="eleres__text">
                Nie musisz niczego pobierać, wystarczy internet i dowolna wygodna gazeta. Wystarczy wejść na naszą
                stronę i zagrać w dowolną grę
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="zabawy" id="about">
        <div class="container">
          <h2 class="zabawy__title">
            Gry dla zabawy
          </h2>
          <div class="zabawy__content">
            <div class="zabawy__descr">
              <p class="zabawy__text">
                Jeśli chodzi o najpopularniejsze gry na naszej stronie, na tej liście znajdziesz mieszankę studiów
                iGaming. Dlaczego więc nie wypróbować naszego wyboru najlepszych darmowych gier dla siebie i sprawdzić,
                czy lubisz w nie grać tak samo, jak inni odwiedzający.
              </p>
              <p class="zabawy__text">
                Jeśli chodzi o rozrywkowe gry, niewielu może dorównać ekscytacji, jaką może przynieść silnik. Wiemy, jak
                popularne są te gry, dlatego przygotowaliśmy dla nich kompletną sekcję free to play. Sprawdź naszą listę
                gier, które wykorzystują mechanikę modyfikacji bębnów i ciesz się darmową grą na wszystkich swoich
                urządzeniach.
              </p>
              <p class="zabawy__text">
                Być może zastanawiasz się, jakie korzyści uzyskasz grając w gry dla zabawy. Cóż, oprócz możliwości
                grania w setki darmowych gier demonstracyjnych z kuszącymi motywami i ekscytującą mechaniką gry,
                najlepszym sposobem na poznanie dowolnego dostawcy gier lub nowego stylu gier jest granie w nie za
                darmo.
              </p>
              <p class="zabawy__text">
                Graj, kiedy masz gust i czas. Grasz w zaciszu własnego domu. Zaoszczędzisz po drodze, gdzie i tak nie
                będziesz miał takiego wyboru gier. Games oferuje kilkaset darmowych gier od najlepszych twórców
                oprogramowania.
              </p>
            </div>
            <div class="zabawy__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="gry" id="games">
        <div class="container">
          <h2 class="gry__title">
            Gry
          </h2>
          <ul class="gry__list">
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-1.php">
                Sun of Egypt Hold and Win
              </a>
              <a class="gry__play" href="game-1.php">
                Bawić się
              </a>
            </li>
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-2.php">
                Doom of Egypt
              </a>
              <a class="gry__play" href="game-2.php">
                Bawić się
              </a>
            </li>
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-3.php">
                Dawn of Egypt
              </a>
              <a class="gry__play" href="game-3.php">
                Bawić się
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>