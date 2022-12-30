"use strict"

window.onload = function () {

  document.documentElement.classList.add("loaded");

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".burger")) {
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
})

var app = new Vue({
  el: '#page',
  data: {
    mainTitle: 'Free games for you',
    textWarning: 'The games offered on the site do not give users a chance to win real money. The site does not provide users with any skills that can be used in real gambling. The games are available to users over 18 years of age.',
    mainLink: 'Play now',
    // placeholder: 'Введите задачу.',
    // type: 'button',
    // dis: 'disabled',
    headerLinks: [{
        text: 'Main',
        src: 'main.html',
      },
      {
        text: 'About us',
        src: 'main.html#about',
      },
      {
        text: 'Benefits',
        src: 'main.html#benefits',
      },
      {
        text: 'Games',
        src: 'main.html#games',
      },
    ],
    pluwkiItems: [{
        title: 'Play without deposit',
        text: 'Modern slots do not allow you to replenish the balance and deposit money, you have a virtual account with virtual money',
      },
      {
        title: 'Modern Spiele',
        text: 'If you are tired of outdated graphics and classic slots, our site is what you need',
      },
      {
        title: 'Slot game no download',
        text: 'The game does not require any additional software, all you need is a good internet connection.',
      },
    ],
    slots: [{
        image: 'game-1.jpg',
        link: 'Aztec gems',
        src: 'game-1.html',
      },
      {
        image: 'game-2.jpg',
        link: 'Big bass2',
        src: 'game-2.html',
      },
      {
        image: 'game-3.png',
        link: 'Gems Bonanza',
        src: 'game-3.html',
      },
    ],
  },
  // methods: {
  //   addTask: function () {
  //     this.tasks.push({
  //       text: this.message,
  //       done: false
  //     });
  //     this.message = '';
  //   },
  //   counter: function () {
  //     return this.tasks.filter(task => !task.done).length;
  //   }
  // },
})

    function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});

    var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true
});
}