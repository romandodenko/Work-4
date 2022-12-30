<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Legalkasyn - Darmowe gry dla Ciebie">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script defer src="./resources/vue/vue.js"></script>
  <script defer src="./resources/vue/vue.min.js"></script>
  <script defer src="./js/main.js"></script>
  <title>Legalkasyn - Darmowe gry dla Ciebie</title>
</head>

<body>
  <div class="page" id="page">
<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="main__container container">
          <div class="main__descr">
            <h1 class="main__title">
              {{mainTitle}}
            </h1>
            <p class="main__text" v-for="text in textWarning">
              <span>{{text.text1}}</span>
              {{text.text2}}
            </p>
            <a class="main__link" href="#games">
              {{mainLink}}
            </a>
          </div>
          <div class="main__image">
          <img v-bind:src="mainImage" alt="Image">
          </div>
        </div>
      </section>
      <section class="ben" id="benefits">
        <div class="container">
          <ul class="ben__list">
            <li class="ben__item" v-for="ben in pluwkiItems">
              <h3 class="ben__title">
                {{ben.title}}
              </h3>
              <p class="ben__text">
              {{ben.text}}
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="gaes" id="games">
        <div class="container">
          <ul class="gaes__list">
            <li class="gaes__item" v-for="gaes in slots">
              <div class="gaes__image">
                <a v-bind:href="gaes.src">
                <img v-bind:src="gaes.image" alt="Image">
                </a>
              </div>
              <a class="gaes__link" v-bind:href="gaes.src">
                {{gaes.link}}
              </a>
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
              <p class="say__text" v-for="text in aboutTexts">
                {{text.text}}
              </p>
            </div>
            <div class="say__image">
            <img v-bind:src="aboutImage" alt="Image">
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
include 'footer.php';
?>
  </div>
</body>

</html>