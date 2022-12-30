<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Social world games - Free games for you">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script defer src="./resources/vue/vue.js"></script>
  <script defer src="./resources/vue/vue.min.js"></script>
  <script defer src="./js/main.js"></script>
  <title>Social world games - Free games for you</title>
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
              {{ mainTitle }}
            </h1>
            <p class="main__text" v-for="text in textWarning">
              <span>{{ text.text1 }}</span>
              {{ text.text2 }}
            </p>
            <a class="main__link" href="#games">
              {{ mainLink }}
            </a>
          </div>
          <div class="main__image">
            <img v-bind:src="mainImage" alt="Image">
          </div>
        </div>
      </section>
      <section class="pluwki" id="benefits">
        <div class="container">
          <ul class="pluwki__list">
            <li class="pluwki__item" v-for="pluwka in pluwkiItems">
              <h3 class="pluwki__title">
                {{ pluwka.title }}
              </h3>
              <p class="pluwki__text">
                {{ pluwka.text }}
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item" v-for="slotsItem in slots">
              <div class="slots__image">
                <a v-bind:href="slotsItem.src">
                  <img v-bind:src="slotsItem.image" alt="Image">
                </a>
              </div>
              <a class="slots__link" v-bind:href="slotsItem.src">
                {{ slotsItem.link }}
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            {{ aboutTitle }}
          </h2>
          <p class="about__text" v-for="aboutText in aboutTexts">
            {{ aboutText.text }}
          </p>
        </div>
      </section>
    </main>
<?php
include 'footer.php';
?>