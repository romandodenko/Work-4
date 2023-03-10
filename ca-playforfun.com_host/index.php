<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="The best free games">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./resources/smooth-scroll/smooth-scroll.js"></script>
  <script defer src="./js/main.js"></script>
  <title>Ca playforfun - The best free games</title>
</head>

<body>
  <div class="page">
    <div class="page__body">
      <?php
        include 'header.php';
      ?>
      <div class="page__bottom">
        <main>
          <section class="oops">
            <div class="oops__container container">
              <div class="oops__content">
                <div class="oops__body">
                  <h1 class="oops__title">
                    The best free games
                  </h1>
                  <p class="oops__text">
                    <span>The games offered on the site do not give users a chance to win real money.</span>
                    The site does not provide users with any skills that can be used in real gambling. The games are
                    available to users over 18 years of age.
                  </p>
                  <ul class="oops__links">
                    <li class="oops__item oops__item_1">
                      <a class="oops__link" href="#games">
                        Play
                      </a>
                    </li>
                    <li class="oops__item oops__item_2">
                      <a class="oops__link" href="#about">
                        About Us
                      </a>
                    </li>
                  </ul>
                </div>
                <span class="oops__icon">
                  <img src="./img/18+.svg" alt="Icon">
                </span>
              </div>
            </div>
          </section>
          <section class="benefits" id="benefits">
            <div class="container">
              <ul class="benefits__list">
                <li class="benefits__item">
                  <h3 class="benefits__title">
                    Games without queues
                  </h3>
                  <p class="benefits__text">
                    There are no queues in the games and no one interrupts your winning streak because the game closes.
                  </p>
                </li>
                <li class="benefits__item">
                  <h3 class="benefits__title">
                    No time frame
                  </h3>
                  <p class="benefits__text">
                    You also don't have to stick to set hours. Just play whenever you like because the internet is
                    always open, whether it's Sunday, holiday or weekday evening.
                  </p>
                </li>
                <li class="benefits__item">
                  <h3 class="benefits__title">
                    Gry nie wymagaj?? rejestracji
                  </h3>
                  <p class="benefits__text">
                    Games have a limited space for gadgets, but not on the Internet - here you can choose between a
                    variety of themes, as well as play several games at the same time.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <h2 class="about__title">
                About Us
              </h2>
              <p class="about__text">
                Here you can play games from the comfort of your own home. Discover new games and familiar classics for
                free. You can try them from the comfort of your home, on your computer or on your mobile phone, without
                the risk of getting acquainted with free spins, bonus features and other features.
              </p>
              <p class="about__text">
                Are you interested in games and don't want to go to your local gaming parlor? We will help you sort
                through the diverse offer and introduce you to many ways to play games for free. If you want to try
                games for free, you don't press buttons or move levers like you would in an arcade. You can play from
                the comfort of your home or on the go and control your games easily with a mouse or using your
                smartphone's touch screen. Behind every game here is a Random Number Generator instead of a mechanical
                roller. To test strategies and get an idea of specific game features, you can test games for free with
                many providers. It does not bring real profit and often does not require registration. Of course, you
                can play with real bets and use them to make a profit. However, many providers also allow you to sign in
                for free.
              </p>
            </div>
          </section>
          <section class="slots" id="games">
            <div class="container">
              <ul class="slots__list">
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-1.php">
                      <picture>
                        <source srcset="./img/game-1.webp" type="image/webp"><img src="./img/game-1.png" alt="Image">
                      </picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-1.php">
                    Gems Bonanza
                  </a>
                  <a class="slots__play" href="game-1.php">
                    Play
                  </a>
                </li>
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-2.php">
                      <picture>
                        <source srcset="./img/game-2.webp" type="image/webp"><img src="./img/game-2.png" alt="Image">
                      </picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-2.php">
                    Grand fruits
                  </a>
                  <a class="slots__play" href="game-2.php">
                    Play
                  </a>
                </li>
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-3.php">
                      <picture>
                        <source srcset="./img/game-3.webp" type="image/webp"><img src="./img/game-3.png" alt="Image">
                      </picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-3.php">
                    Fruits fury
                  </a>
                  <a class="slots__play" href="game-3.php">
                    Play
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
              <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on
                the
                button you confirm your age.</p>
              <label>
                <input type="checkbox" name="number">
              </label>
              <label>
                <input type="text" name="years-old">
              </label>
              <a class="popup__button" href="main.php">Agree</a>
            </form>
          </div>
        </div>
        <?php
        include 'footer.php';
        ?>
      </div>
    </div>
  </div>
</body>

</html>