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
      <section class="terms">
      <div class="container" v-for="cookie in cookie">
          <h1> {{ cookie.mainTitle }}</h1>

          <p>{{ cookie.text1 }}</p>

          <h2><strong>{{ cookie.title1 }}</strong></h2>

          <p>{{ cookie.text2 }}</p>

          <h2><strong>{{ cookie.title2 }}</strong></h2>

          <p>{{ cookie.text3 }}</p>

          <h2><strong>{{ cookie.title3 }}</strong></h2>

          <p>{{ cookie.text4 }}</p>

          <h2><strong>{{ cookie.title4 }}</strong></h2>

          <ul>
            <li>
              <p v-for="text in cookie.list1">{{ text.text }}</p>
            </li>

          </ul>

          <h2><strong>{{ cookie.title5 }}</strong></h2>

          <p>{{ cookie.text5 }}</p>

          <ul>

            <li>
              <p v-for="text in cookie.list2">{{ text.text }}</p>
            </li>

          </ul>

          <h2><strong>{{ cookie.title6 }}</strong></h2>

          <p>{{ cookie.text6 }}</p>

        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>