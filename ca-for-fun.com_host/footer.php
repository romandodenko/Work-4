<footer class="footer">
      <div class="footer__container container">
        <a class="footer__logo" v-bind:href="logoLink">
          {{ logo }}
        </a>
        <p class="footer__text" v-for="text in textWarning">
          <span>{{ text.text1 }}</span>
          {{ text.text2 }}
        </p>
        <ul class="footer__list">
          <li class="footer__item" v-for="link in footerLinks">
            <a class="footer__link" v-bind:href="link.src">
              {{ link.text }}
            </a>
          </li>
        </ul>
      </div>
    </footer>