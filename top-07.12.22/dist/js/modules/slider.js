let popupTimer, timeOut = 4000;

function displayPopup() {
  console.log('pop-up');
  document.querySelector(".popup").classList.add("popup-active")
}

popupTimer = setTimeout(displayPopup, timeOut);

window.addEventListener("scroll", function (e) {
  clearTimeout(popupTimer);
  popupTimer = setTimeout(displayPopup, timeOut);
})

// ======================================================================================================================================================

// Слайдер

const initHeaderSwiper = document.querySelector(".header-slider");
if (initHeaderSwiper) {
  const headerSwiper = new Swiper('.header-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    direction: 'horizontal',
    breakpoints: {
      320: {
        spaceBetween: 8,
      },
      601: {
        spaceBetween: 16,
      },
      992: {
        spaceBetween: 24,
      }
    },
  });
}

// ======================================================================================================================================================

// Открытие в карточке элемента

document.addEventListener("click", function (e) {

  const elementTarget = e.target;

  if (elementTarget.closest(".cards-list__button")) {
    document.querySelectorAll(".cards-list__bottom").forEach(function (e) {
      e.querySelector(".cards-list__content-hidden").style.height = 0;
      e.classList.remove("cards-list-bottom-active");
    })

    function addedClass() {
      elementTarget.closest(".cards-list__button").classList.add("cards-list-button-active")
    }

    if (!elementTarget.closest(".cards-list-button-active")) {
      setTimeout(addedClass, 100)
    }

    elementTarget.closest(".cards-list__bottom").classList.add("cards-list-bottom-active");

    document.querySelector(".cards-list-bottom-active").querySelector(".cards-list__content-hidden").style.height = document.querySelector(".cards-list-bottom-active").querySelector(".cards-list__content-hidden").scrollHeight + 'px';

  }


  if (elementTarget.closest(".cards-list-button-active")) {

    if (elementTarget.closest(".cards-list-bottom-active") && elementTarget.closest(".cards-list-button-active")) {

      document.querySelector(".cards-list-bottom-active").querySelector(".cards-list__content-hidden").style.height = 0;

      document.querySelector(".cards-list-bottom-active").classList.remove("cards-list-bottom-active");

      document.querySelectorAll(".cards-list__button").forEach(function (e) {
        e.classList.remove("cards-list-button-active")
      })
    }
  }


  if (document.querySelector(".cards-list-bottom-active")) {
    if (!elementTarget.closest(".cards-list-bottom-active")) {

      document.querySelector(".cards-list-bottom-active").querySelector(".cards-list__content-hidden").style.height = 0;

      document.querySelector(".cards-list-bottom-active").classList.remove("cards-list-bottom-active");
    }
  }

  if (elementTarget.closest(".popup__close") || elementTarget.closest(".popup__exit")) {
    clearTimeout(popupTimer);
    document.querySelector(".popup").classList.remove("popup-active")
  }

  if (elementTarget) {
    clearTimeout(popupTimer);
  }

})

document.addEventListener("mouseover", function () {
  clearTimeout(popupTimer);
})

// ======================================================================================================================================================

// В карточке номер карточки

const cardsItem = document.querySelectorAll(".cards-list__item");

cardsItem.forEach(function (numCard, i) {
  numCard.querySelector(".cards-list-part__num").innerHTML = i + 1
})

// ======================================================================================================================================================

// Анимация блика, одновременная

const headerSlider = document.querySelectorAll(".header-slider__slide");

headerSlider.forEach(function (s, i) {
  s.querySelector(".header-slider__link span").style.animationDelay = i / 2 + 0.05 + "s";
})

// ======================================================================================================================================================