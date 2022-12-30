<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <h1 class="gero__title">
                I migliori <span>giochi</span>!
              </h1>
              <p class="gero__text">
                I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri. Il sito non
                fornisce agli utenti abilità che possono essere utilizzate nel gioco d'azzardo reale. I giochi sono
                disponibili per gli utenti dai 18 anni in su.
              </p>
              <a class="gero__link" href="#games">
                Guarda le partite
                <img src="./img/arrow.svg" alt="Image">
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="sero" id="benefits">
        <div class="container">
          <ul class="sero__list">
            <li class="sero__item">
              <h3 class="sero__title">
                Tutti i giochi disponibili
              </h3>
              <p class="sero__text">
                Puoi scegliere qualsiasi gioco e iniziare subito a giocare. Tutti i giochi sul nostro sito sono
                gratuiti, gioca solo con monete virtuali.
              </p>
            </li>
            <li class="sero__item">
              <h3 class="sero__title">
                Gioca senza registrazione
              </h3>
              <p class="sero__text">
                Quando giochi ai nostri giochi sul nostro sito, non è necessario registrarsi, tutto ciò di cui hai
                bisogno è una connessione Internet stabile.
              </p>
            </li>
            <li class="sero__item">
              <h3 class="sero__title">
                Giochi che non si scaricano
              </h3>
              <p class="sero__text">
                Non è necessario scaricare il gioco, tutti i giochi sono disponibili sul nostro sito Web, puoi testare
                qui e ora.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="dero" id="about">
        <div class="container">
          <h2 class="dero__title">
            Chi siamo
          </h2>
          <div class="dero__content">
            <div class="dero__descr">
              <p class="dero__text">
                Per iniziare il gioco, non è necessario pagare denaro. Non appena avvii il gioco che preferisci, sul tuo
                conto verranno accreditati mille crediti, e in alcuni casi anche di più. I crediti sono la valuta
                virtuale del gioco e vengono conteggiati per i tuoi interessi. In qualsiasi momento puoi riavviare la
                macchina da gioco e il tuo account avrà nuovamente l'importo iniziale di denaro virtuale. Non importa
                per quanto tempo o quali giochi giochi, non è richiesto alcun pagamento da parte tua. Puoi giocare
                gratuitamente da solo o invitare amici, sederti con loro su computer diversi e competere nel numero di
                combinazioni vincenti.
              </p>
              <p class="dero__text">
                Qualsiasi sito al momento del prelievo di denaro richiederà di fornire i dati del passaporto e altre
                informazioni personali. Non giochiamo per soldi, quindi non è richiesta alcuna registrazione. Vieni da
                noi e gioca gratuitamente ai migliori giochi per il tuo piacere. Non ti chiederemo nemmeno un indirizzo
                e-mail o altre informazioni di contatto. Dall'accesso al sito all'inizio del gioco passano solo pochi
                secondi: il giocatore non compila moduli o questionari, seleziona semplicemente una gioco gratis e
                inizia a giocare gratuitamente senza registrazione.
              </p>
            </div>
            <div class="dero__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="fero" id="games">
        <div class="container">
          <ul class="fero__list">
            <li class="fero__item">
              <div class="fero__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="fero__link" href="game-1.php">
                Giocare
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </li>
            <li class="fero__item">
              <div class="fero__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="fero__link" href="game-2.php">
                Giocare
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </li>
            <li class="fero__item">
              <div class="fero__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="fero__link" href="game-3.php">
                Giocare
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </li>
          </ul>
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