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
      logo: 'WorldGames',
      logoLink: 'main.php',
      mainTitle: 'Free games for you',
      textWarning: [{
        text1: 'The games offered on the site do not give users a chance to win real money.',
        text2: 'The site does not provide users with any skills that can be used in real gambling. The games are available to users over 18 years of age.',
      }],
      mainLink: 'Play now',
      mainImage: './img/hero.png',
      headerLinks: [{
          text: 'Main',
          src: 'main.php',
        },
        {
          text: 'About us',
          src: 'main.php#about',
        },
        {
          text: 'Benefits',
          src: 'main.php#benefits',
        },
        {
          text: 'Games',
          src: 'main.php#games',
        },
      ],
      headerIcon: './img/18+.svg',
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
          image: './img/game-1.jpg',
          link: 'Aztec gems',
          src: 'game-1.php',
        },
        {
          image: './img/game-2.jpg',
          link: 'Big bass',
          src: 'game-2.php',
        },
        {
          image: './img/game-3.png',
          link: 'Gems Bonanza',
          src: 'game-3.php',
        },
      ],
      aboutTitle: 'About us',
      aboutTexts: [{
          text: 'Do you want free slot machines? Then you are exactly right here. Here you will find all the well-known slot machines, all of which can be tried out free of charge and without registration. We also offer in-depth reviews and ratings of the most popular slots. You will learn everything about the different features of slot machines and you can play free slot machines 24/7 without risk. The best part is that you can get started right away without registering or entering any personal information.',
        },
        {
          text: 'Why should you play slots for free before wagering real money? There are many reasons why it is recommended to use free spins before investing real money for the first time. For example, you might first want to get an overview of different online slot machines. The selection of slot machines is huge and each game provider offers many different features.',
        },
        {
          text: 'Being able to play slot machines for free without registration and risk is definitely one of the biggest advantages. As with everything, the same applies here: practice makes perfect. This is where free spins come into play.',
        },
      ],
      popup: [{
        text: 'Our games are intended for an ADULT audience of 18 years and older. By clicking on the button you confirm your age.',
        link: 'Agree',
        href: 'main.php',
      }],
      footerLinks: [{
          text: 'Terms and Conditions',
          src: 'terms.php',
        },
        {
          text: 'Privacy Policy',
          src: 'policy.php',
        },
        {
          text: 'Cookie Policy',
          src: 'cookie.php',
        },
      ],
      gameTitle1: 'Aztec gems',
      gameSrc1: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs9aztecgemsdx&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      gameTitle2: 'Big bass',
      gameSrc2: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=USD&gameSymbol=vs10bbbonanza&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      gameTitle3: 'Gems Bonanza',
      gameSrc3: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs20goldfever&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      cookie: [{
        mainTitle: 'Cookie Policy for WorldGames',
        title1: 'What Are Cookies',
        title2: 'How We Use Cookies',
        title3: 'Disabling Cookies',
        title4: 'The Cookies We Set',
        title5: 'Third Party Cookies',
        title6: 'More Information',
        text1: 'This is the Cookie Policy for WorldGames, accessible from WorldGames',
        text2: 'As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or break certain elements of the sites functionality.',
        text3: 'We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site.It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use. ',
        text4: 'You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.',
        text5: 'In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.',
        text6: 'Hopefully that has clarified things for you and as was previously mentioned if there is something that you arent sure whether you need or not its usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.',
        text7: '',
        list1: [{
            text: 'Site preferences cookies',
          },
          {
            text: 'In order to provide you with a great experience on this site we provide the functionality to set your preferences for how this site runs when you use it. In order to remember your preferences we need to set cookies so that this information can be called whenever you interact with a page is affected by your preferences.',
          }
        ],
        list2: [{
          text: 'We also use social media buttons and/or plugins on this site that allow you to connect with your social network in various ways. For these to work the following social media sites including; {List the social networks whose features you have integrated with your site?, will set cookies through our site which may be used to enhance your profile on their site or contribute to the data they hold for various purposes outlined in their respective privacy policies.',
        }, ],
      }],
      privacy: [{
        mainTitle: 'Privacy Policy for WorldGames',
        title1: 'Consent',
        title2: 'Information we collect',
        title3: 'How we use your information',
        title4: 'Log Files',
        title5: 'Advertising Partners Privacy Policies',
        title6: 'Third Party Privacy Policies',
        text1: 'At WorldGames, accessible from WorldGames, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by WorldGames and how we use it.',
        text2: 'If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.',
        text3: 'This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in WorldGames. This policy is not applicable to any information collected offline or via channels other than this website.',
        text4: 'By using our website, you hereby consent to our Privacy Policy and agree to its terms.',
        text5: 'The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.',
        text6: 'If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.',
        text7: 'When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.',
        text8: 'We use the information we collect in various ways, including to:',
        text9: 'WorldGames follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date  and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends,  administering the site, tracking users movement on the website,   gathering demographic information.',
        text10: 'You may consult this list to find the Privacy Policy for each of the advertising partners of WorldGames.',
        text11: 'Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are  used in their respective advertisements and links that appear on WorldGames, which are sent directly to users browser. They automatically receive your IP address when this  occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.',
        text12: 'Note that WorldGames has no access to or control over these cookies that are used by third-party advertisers.',
        text13: 'WorldGames Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy  Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.',
        text14: 'You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers respective websites.',
        list1: [{
            text: 'Provide, operate, and maintain our website',
          },
          {
            text: 'Improve, personalize, and expand our website',
          },
          {
            text: 'Understand and analyze how you use our website',
          },
          {
            text: 'Develop new products, services, features, and functionality',
          },
          {
            text: 'Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes',
          },
          {
            text: 'Send you emails',
          },
          {
            text: 'Find and prevent fraud',
          },
        ],
      }],
      terms: [{
        mainTitle: 'Terms and Conditions',
        title1: 'Cookies',
        title2: 'License',
        text1: 'Welcome to WorldGames!',
        text2: 'These terms and conditions outline the rules and regulations for the use of WorldGames Website, located at WorldGames.',
        text3: 'By accessing this website we assume you accept these terms and conditions. Do not continue to use WorldGames if you do not agree to take all of the terms and conditions stated on this page.',
        text4: 'The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.',
        text5: 'We employ the use of cookies. By accessing WorldGames, you agreed to use cookies in agreement with the WorldGames Privacy Policy.',
        text6: 'Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.',
        text7: 'Unless otherwise stated, WorldGames and/or its licensors own the intellectual property rights for all  material on WorldGames. All intellectual property rights are reserved. You may access this from WorldGames for your own personal use subjected to restrictions set in these terms and conditions.',
        text8: 'You must not:',
        text9: 'Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. WorldGames does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of WorldGames,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, WorldGames shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.',
        text10: 'WorldGames reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.',
        text11: 'You warrant and represent that:',
        text12: 'You hereby grant WorldGames a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.',
        list1: [{
            text: 'Republish material from WorldGames',
          },
          {
            text: 'Sell, rent or sub-license material from WorldGames',
          },
          {
            text: 'Reproduce, duplicate or copy material from WorldGames',
          },
          {
            text: 'Redistribute content from WorldGames',
          },
        ],
        list2: [{
            text: 'You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;',
          },
          {
            text: 'The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;',
          },
          {
            text: 'The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy',
          },
          {
            text: 'The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.',
          },
        ],
      }],
    },
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