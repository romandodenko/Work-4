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
  <title>Topcasinocanada - Dance party</title>
</head>

<body>
  <div class="page" id="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="slot">
        <div class="container" v-for="games in games">
          <h1 class="slot__title">
            {{games.gameTitle2}}
          </h1>
          <div class="slot__content">
            <iframe v-bind:src="games.gameSrc2" frameborder="0"></iframe>
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