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
  <title>Ca for Fun - Privacy Policy for CaForFun</title>
</head>
<body>
  <div class="page" id="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="terms">
        <div class="container" v-for="privacy in privacy">
          <h1>{{ privacy.mainTitle }}</h1>

          <p>{{ privacy.text1 }}</p>

          <p>{{ privacy.text2 }}</p>

          <p>{{ privacy.text3 }}
          </p>

          <h2>{{ privacy.title1 }}</h2>

          <p>{{ privacy.text4 }}</p>

          <h2>{{ privacy.title2 }}</h2>

          <p>{{ privacy.text5 }}</p>
          <p>{{ privacy.text6 }}</p>
          <p>{{ privacy.text7 }}</p>

          <h2>{{ privacy.title3 }}</h2>

          <p>{{ privacy.text8 }}</p>

          <ul>
            <li v-for="list1 in privacy.list1">{{ list1.text }}</li>
          </ul>

          <h2>{{ privacy.title4 }}</h2>

          <p>{{ privacy.text9 }}</p>

          <h2>{{ privacy.title5 }}</h2>

          <p>{{ privacy.text10 }}</p>

          <p>{{ privacy.text11 }}</p>

          <p>{{ privacy.text12 }}</p>

          <h2>{{ privacy.title6 }}</h2>

          <p>{{ privacy.text13 }}</p>

          <p>{{ privacy.text14 }}</p>

        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>