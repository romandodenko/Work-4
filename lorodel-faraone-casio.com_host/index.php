<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <span class="main__span">
                Giochi gratis senza registrazione
              </span>
              <h1 class="main__title">
                Giochi gratuiti per i giocatori d'azzardo
              </h1>
              <p class="main__text">
                <span>I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.</span>
                Il sito non fornisce agli utenti abilità che possono essere utilizzate nel gioco d'azzardo reale. I
                giochi sono disponibili per gli utenti di età superiore ai 18 anni.
              </p>
              <a class="main__link" href="#games">
                Riproduci ora
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="ampia" id="benefits">
        <div class="container">
          <div class="ampia__content">
            <ul class="ampia__list">
              <li class="ampia__item">
                <span class="ampia__span">
                  <img src="./img/icon.svg" alt="Icon">
                </span>
                <div class="ampia__descr">
                  <h3 class="ampia__title">
                    Ampia selezione di giochi
                  </h3>
                  <p class="ampia__text">
                    Il nostro club ha una vasta selezione di giochi dei produttori più noti
                  </p>
                </div>
              </li>
              <li class="ampia__item">
                <span class="ampia__span">
                  <img src="./img/icon.svg" alt="Icon">
                </span>
                <div class="ampia__descr">
                  <h3 class="ampia__title">
                    Gioca su qualsiasi dispositivo
                  </h3>
                  <p class="ampia__text">
                    Comoda versione mobile e versione desktop, gioca ovunque da qualsiasi dispositivo
                  </p>
                </div>
              </li>
              <li class="ampia__item">
                <span class="ampia__span">
                  <img src="./img/icon.svg" alt="Icon">
                </span>
                <div class="ampia__descr">
                  <h3 class="ampia__title">
                    Non è necessario scaricare nulla
                  </h3>
                  <p class="ampia__text">
                    Gioca con Internet stabile, non è necessario scaricare nulla. Vieni sul nostro sito e divertiti.
                  </p>
                </div>
              </li>
            </ul>
            <div class="ampia__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="moneus" id="games">
        <div class="container">
          <ul class="moneus__list">
            <li class="moneus__item">
              <div class="moneus__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="moneus__descr">
                <a class="moneus__link" href="game-1.php">
                  Fishin Reels
                </a>
                <a class="moneus__play" href="game-1.php">
                  Riproduci ora
                </a>
              </div>
            </li>
            <li class="moneus__item">
              <div class="moneus__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="moneus__descr">
                <a class="moneus__link" href="game-2.php">
                  Big Bass Bonanza
                </a>
                <a class="moneus__play" href="game-2.php">
                  Riproduci ora
                </a>
              </div>
            </li>
            <li class="moneus__item">
              <div class="moneus__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="moneus__descr">
                <a class="moneus__link" href="game-3.php">
                  Wild Catch
                </a>
                <a class="moneus__play" href="game-3.php">
                  Riproduci ora
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="info" id="about">
        <div class="container">
          <h2 class="info__title">
            Informazioni sui nostri giochi gratuiti
          </h2>
          <div class="info__content">
            <div class="info__descr">
              <p class="info__text">
                I giochi gratuiti sono un passatempo apprezzato da molti giocatori in tutto il mondo. Grazie a questo
                tipo di giochi, infatti, ci si può divertire senza effettuare alcun pagamento o scaricare alcun software
                sul computer. I giochi gratuiti sono compatibili sia con i computer desktop che con i dispositivi mobili
                con Android e iOS e, secondo le leggi sulle armi di distruzione di massa, ti consentono di giocare senza
                addebitare denaro reale, in quanto non richiedono la registrazione sul sito Web del rivenditore.
              </p>
              <p class="info__text">
                Per accedere ai giochi gratuiti, basta fare clic sul pulsante di avvio del software e attendere il
                download. : una volta caricato il gioco, ci si può divertire senza limiti di tempo. Inoltre, se il
                credito virtuale pagato in un gioco gratuito termina, è sufficiente ricaricare la pagina per resettare
                la sessione di gioco e recuperare tutti i soldi originari.
              </p>
              <p class="info__text">
                In questa pagina puoi trovare tutti i giochi gratuiti senza download disponibili sul sito. In ogni
                pagina del gioco, oltre al gioco stesso, troverai regole, caratteristiche e offerte di benvenuto
              </p>
            </div>
            <div class="info__image">
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
          <p class="popup__text">I nostri giochi sono destinati a un pubblico ADULTO dai 18 anni in su. Cliccando sul
      pulsante confermi la tua età.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" href="main.php">Concordare</a>
        </form>
      </div>
      </div>
<?php
include 'footer.php';
?>