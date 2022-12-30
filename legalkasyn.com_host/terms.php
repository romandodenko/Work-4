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
  <title>Legalkasyn - Zasady i warunki</title>
</head>

<body>
  <div class="page" id="page">
    <?php
   include 'header.php';
   ?>
    <main>
      <section class="terms">
        <div class="container" v-for="terms in terms">
          <h1><strong>{{terms.mainTitle}}</strong></h1>

          <p>{{terms.text1}}</p>

          <p>{{terms.text2}}</p>

          <p>{{terms.text3}}</p>

          <p>{{terms.text4}}</p>

          <h2><strong>{{terms.title1}}</strong></h2>

          <p>{{terms.text5}}</p>

          <p>{{terms.text6}}</p>

          <h2><strong>{{terms.title2}}</strong></h2>

          <p>{{terms.text7}}</p>

          <p>{{terms.text8}}</p>
          <ul v-for="list1 in terms.list1">
            <li>{{list1.text}}</li>
          </ul>

          <p>{{terms.text9}}</p>

          <p>{{terms.text10}}</p>

          <p>{{terms.text11}}</p>

          <ul v-for="list2 in terms.list2">
            <li> {{list2.text}}</li>
          </ul>

          <p>{{terms.text12}}</p>

        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>