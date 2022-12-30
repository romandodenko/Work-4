<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ca for Fun - Free games">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script defer src="./resources/vue/vue.js"></script>
  <script defer src="./resources/vue/vue.min.js"></script>
  <script defer src="./js/main.js"></script>
  <title>Ca for Fun - Free games</title>
</head>

<body>
  <div class="page" id="page">
   <?php
   include 'header.php';
   ?>
    <main>
      <section class="main">
        <div class="container">
       <div class="main__content" v-for="main in main">
        <div class="main__descr">
          <h1 class="main__title">
          {{ main.mainTitle }}
          </h1>
          <p class="main__text" v-for="text in textWarning">
            <span>{{text.text1}}</span>
            {{text.text2}}
          </p>
          <a class="main__link" href="#games">
            {{main.mainLink}}
          </a>
        </div>
       </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container" v-for="about in about">
          <h2 class="about__title">
            {{about.title}}
          </h2>
          <p class="about__text">
            {{about.text1}}
          </p>
          <p class="about__text">
          {{about.text2}}
          </p>
        </div>
      </section>
      <section class="pluwki" id="benefits">
        <div class="container">
          <ul class="pluwki__list">
            <li class="pluwki__item" v-for="pluwki in pluwkiItems">
              <h3 class="pluwki__title">
                {{pluwki.title}}
              </h3>
              <p class="pluwki__text">
              {{pluwki.text}}
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item" v-for="slots in slots">
              <div class="slots__image">
                <a v-bind:href="slots.src">
                  <img v-bind:src="slots.image" alt="Image">
                </a>
              </div>
              <a class="slots__link" v-bind:href="slots.src">
               {{slots.link}}
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
<?php
include 'footer.php';
?>
  </div>
</body>

</html>