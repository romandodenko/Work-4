<footer class="footer">
      <div class="footer__container container">
     <div class="footer__left">
      <a class="footer__logo" v-bind:href="logoLink">
        <img v-bind:src="logo" alt="Logo">
      </a>
      <p class="footer__text" v-for='text in textWarning'>
        <span>{{text.text1}}</span>
        {{text.text2}}
      </p>
     </div>
        <ul class="footer__list">
          <li class="footer__item" v-for="link in footerLinks">
            <a class="footer__link" v-bind:href="link.src">
              {{link.text}}
            </a>
          </li>
        </ul>
      </div>
    </footer>