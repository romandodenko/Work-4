<?php
include 'header.php';
?>
    <main>
      <section class="quetli">
        <div class="container">
          <div class="quetli__content">
            <div class="quetli__body">
              <h1 class="quetli__title">
                Benvenuto sul nostro sito
              </h1>
              <p class="quetli__descleimer">
                <span>I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.
                </span>
                Il sito non fornisce agli utenti abilità che possono essere utilizzate nel gioco d'azzardo reale. I
                giochi sono disponibili per gli utenti di età pari o superiore a 18 anni.
              </p>
              <a class="quetli__link" href="#games">
                giocare
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="siamo" id="about">
        <div class="container">
          <h2 class="siamo__title">
            Chi siamo
          </h2>
          <div class="siamo__content">
            <div class="siamo__descr">
              <p class="siamo__text">
                Il gioco d'azzardo moderno dei migliori fornitori è disponibile per tutti gli ospiti del nostro sito. Ti invitiamo a giocare a giochi gratuiti virtuali gratuitamente. Per attivare il gioco selezionato, non è necessario eseguire la procedura di registrazione, ricaricare il proprio account o rischiare le proprie finanze. Internet stabile è tutto ciò di cui hai bisogno per divertirti. Questo sito contiene giochi gratuiti scritti da noti sviluppatori. Scegli i tuoi giochi preferiti dall'ampio elenco, avvia il processo e divertiti.
              </p>
              <p class="siamo__text">
                Per giocare ai giochi gratuiti senza registrazione, fai clic sull'icona che ti piace. Poiché non è richiesto alcun deposito, non vi è alcun rischio di perdita: ogni vincita aumenta il saldo, una perdita porta a una diminuzione del numero di punti. Il gioco gratuito non differisce dalla versione principale in termini di funzionalità, regole e principi di vincita.
              </p>
            </div>
            <div class="siamo__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="gioch" id="games">
        <div class="container">
          <h2 class="gioch__title">
            Giochi
          </h2>
          <ul class="gioch__list">
            <li class="gioch__item">
              <div class="gioch__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
            </li>
            <li class="gioch__item">
              <div class="gioch__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
            </li>
            <li class="gioch__item">
              <div class="gioch__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="benefici" id="benefits">
        <div class="container">
          <h2 class="benefici__title">
            Benefici
          </h2>
          <ul class="benefici__list">
            <li class="benefici__item">
              <span class="benefici__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="benefici__subtitle">
                Nessun rischio
              </h3>
              <p class="benefici__text">
                Giocando ai giochi gratuiti non rischi i tuoi soldi, hai l'opportunità di giocare assolutamente senza rischi per il tuo portafoglio.
              </p>
            </li>
            <li class="benefici__item">
              <span class="benefici__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="benefici__subtitle">
                Anonimato
              </h3>
              <p class="benefici__text">
                L'anonimato è un vantaggio chiave dell'intrattenimento senza fornire informazioni personali.
              </p>
            </li>
            <li class="benefici__item">
              <span class="benefici__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="benefici__subtitle">
               Varietà di giochi gratuiti
              </h3>
              <p class="benefici__text">
                Una varietà di giochi gratuiti ti consente di conoscere nuovi giochi ogni giorno. Puoi star certo che non ti stancherai della varietà.
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>