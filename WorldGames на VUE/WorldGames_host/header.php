<header class="header">
      <div class="header__container container">
        <button class="burger" aria-label="menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="header__menu">
          <a class="header__logo header__logo_menu" v-bind:href="logoLink">
            {{ logo }}
          </a>
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item" v-for="link in headerLinks">
                <a class="nav__link" v-bind:href="link.src">
                  {{ link.text }}
                </a>
              </li>
            </ul>
          </nav>
          <button class="header__exit-menu"></button>
        </div>
        <div class="header__right">
          <a class="header__logo" v-bind:href="logoLink">
            {{ logo }}
          </a>
          <span class="header__icon">
            <img v-bind:src="headerIcon" alt="Icon">
          </span>
        </div>
      </div>
    </header>