<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Topcasinocanada - Each player can visit the site and enjoy the game">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script defer src="./resources/vue/vue.js"></script>
  <script defer src="./resources/vue/vue.min.js"></script>
  <script defer src="./js/main.js"></script>
  <title>Topcasinocanada - Each player can visit the site and enjoy the game</title>
</head>

<body>
  <div class="page" id="page">
<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__image">
            <img src="./img/hero.png" alt="Image">
          </div>
          <div class="hero__descr">
            <h1 class="hero__title">
              {{mainTitle}}
            </h1>
            <p class="hero__text" v-for='text in textWarning'>
              <span>{{text.text1}}</span>
              {{text.text2}}
            </p>
            <a class="hero__link" href="#games">
            {{mainLink}}
            </a>
          </div>
        </div>
      </section>
      <section class="qwert" id="benefits">
        <div class="container">
          <ul class="qwert__list">
            <li class="qwert__item" v-for="qwert in pluwkiItems">
              <span class="qwert__icon">
                <img v-bind:src='qwert.image' alt="Icon">
              </span>
              <p class="qwert__text">
                {{qwert.text}}
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="say" id="about">
        <div class="container">
          <h2 class="say__title">
            {{aboutTitle}}
          </h2>
          <div class="say__content">
            <div class="say__descr">
              <p class="say__text" v-for="say in aboutTexts">
                {{say.text}}
              </p>
            </div>
            <div class="say__image">
              <img v-bind:src="aboutImage" alt="Image">
            </div>
          </div>
        </div>
      </section>
      <section class="gaes" id="games">
        <div class="container">
          <ul class="gaes__list">
            <li class="gaes__item" v-for="games in slots">
              <div class="gaes__image">
                <a v-bind:href="games.src">
                  <img v-bind:src="games.image" alt="Image">
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/" v-for="popup in popup">
          <p class="popup__text">{{popup.text}} </p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" v-bind:href="popup.src">{{popup.link}}</a>
        </form>
      </div>
    </div>
 <?php
 include 'footer.php';
 ?>
  </div>
</body>

</html>