"use strict"

window.onload = function () {

  document.documentElement.classList.add("loaded");

document.addEventListener("click", function (e) {

  const menu = document.querySelector(".header__menu");

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
    mainTitle: 'Each player can visit the site and enjoy the game',
    mainImage: './img/hero.png',
    mainLink: 'Play',
    textWarning: [
      {
        text1: 'The games offered on the site do not give users a chance to win real money.',
        text2: 'The site does not provide users with any skills that can be used in real gambling. Games are available for users over 18 years of age.',
      },
    ],
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
    logoLink: 'main.php',
    logo: './img/logo.png',
    pluwkiItems: [{
        image: './img/icon.png',
        text: 'We will not bother you with filling out forms so that you can enjoy our slots, you will do it in seconds without any hassle',
      },
      {
        image: './img/icon.png',
        text: 'Having free slots does not mean that you have to sacrifice any aspect of the original experience that you can enjoy',
      },
      {
        image: './img/icon.png',
        text: ' Free spins are spins that are awarded to players so that they can spin the reels without additional bets.',
      },
    ],
    slots: [{
        image: './img/game-1.png',
        src: 'game-1.php',
      },
      {
        image: './img/game-2.png',
        src: 'game-2.php',
      },
      {
        image: './img/game-3.png',
        src: 'game-3.php',
      },
    ],
    aboutTitle: 'About us',
    aboutImage: './img/about.png',
    aboutTexts: [
      {
        text: 'Welcome to our site, the only place that will give you everything related to gaming. It will be your portal to unlimited entertainment and excitement. The main purpose of the website is to provide players from all over the world with a relaxing and smooth gaming experience; thats why weve gathered everything a player might need to enjoy their game under one roof.',
      },
      {
        text: 'Our site features some of the latest games as well as some of the classics, with new ones added as soon as they are released by their respective software developers. We not only offer the game, but we also offer a detailed review that comes with it, which will help you understand the game, its essence, its features and how to play it.',
      },
      {
        text: 'Compared to card and board games, free games are much easier to learn and play. There is no point in looking for a winning method because each spin on the wheel is completely random and independent. But dont forget that any successful playing of freeroll games requires some knowledge of how  they work and bankroll management.',
      },
    ],
    footerLinks: [
      {
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
    popup: [
      {
        text: 'Our games are intended for ADULT viewers aged 18 and over. By clicking on confirm your age by pressing the button.',
        link: 'Agree',
        src: 'main.php',
      },
    ],
    games: [{
      gameTitle1: 'Fishin reels',
      gameSrc1: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=USD&gameSymbol=vs10goldfish&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      gameTitle2: 'Dance party',
      gameSrc2: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs243dancingpar&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      gameTitle3: 'Honey! Honey! Honey!',
      gameSrc3: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs20honey&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
    }, ],

    cookie: [{
      mainTitle: 'Cookies Policy topcasinocanada-ca.com',
      title1: 'What are cookies',
      title2: 'How we use cookies',
      title3: 'Disabling cookies',
      title4: 'Cookies we set',
      title5: 'Third Party Cookies',
      title6: 'More information',
      text1: 'This is the cookie policy for topcasinocanada-ca.com, available from topcasinocanada-ca.com',
      text2: 'As is common practice with almost all professional websites, this website uses cookies, which are small files that are downloaded to your computer, to enhance your experience. This page describes what information they collect, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored, however doing so may degrade or break some of the functionality of the sites. ',
      text3: 'We use cookies for a variety of reasons listed below. Unfortunately, in most cases, there are no industry standard options for disabling cookies without completely disabling the functionality and features added to this site. It is recommended that you leave all cookies if you are unsure whether you need them or not in case they are used to provide the service you are using. ',
      text4: 'You can prevent the setting of cookies by adjusting the settings in your browser (see Browser Help for how to do this). Please note that disabling cookies will affect the functionality of this and many other websites you visit. Disabling cookies usually also disables certain features and functions of this website. Therefore, it is recommended not to disable cookies.',
      text5: 'In some specific cases, we also use cookies provided by trusted third parties. The following section details the third party cookies you may encounter through this website. ',
      text6: 'Hope this cleared it up for you and as mentioned before if theres something youre not sure if you need or not its usually safer to leave cookies enabled in case they interact with one of the features you use on our website.',
      text7: '',
      list1: [{
        text: 'Site preference cookies',
        },
        {
          text: 'To give you a great experience on this site, we provide a feature to set preferences for how this site works when you use it. In order to remember your preferences, we need to set cookies so that this information can be triggered whenever your interaction with the site affects your preferences. ',
        }
      ],
      list2: [{
        text: 'On this website, we also use social media buttons and/or plug-ins that allow you to connect to your social network in various ways. To make it work, the following social networking sites including; {List of social networks whose features you have integrated into your website? will set cookies through our website which may be used to enhance your profile on their website or contribute to the data they hold for various purposes as set out in their respective privacy policies.' ,
      }, ],
    }],
    privacy: [{
      mainTitle: 'Privacy policy of topcasinocanada-ca.com',
      title1: 'Consent',
      title2: 'Information we collect',
      title3: 'How we use your data',
      title4: 'Log files',
      title5: 'Advertising Partners Privacy Policy',
      title6: 'Third Party Privacy Policy',
      text1: 'At topcasinocanada-ca.com, accessible from topcasinocanada-ca.com, one of our top priorities is the privacy of our visitors. This Privacy Policy document describes the types of information collected and stored by topcasinocanada-ca.com and how we use it.',
      text2: 'If you have additional questions or need more information about our Privacy Policy, please dont hesitate to contact us.',
      text3: 'This Privacy Policy applies only to our online activities and is valid for visitors to our website with respect to the information they share and/or collect at topcasinocanada-ca.com. This policy does not apply to any information collected offline or through channels other than this site. ',
      text4: 'By using our site, you agree to our Privacy Policy and agree to its terms.',
      text5: 'The personal data you are asked to provide and the reasons why you are asked to provide them will be explained to you when we ask you to provide personal data.',
      text6: 'If you contact us directly, we may receive additional information about you, such as your name, e-mail address, telephone number, the content of messages and/or attachments you may send us, and any other information that you may you choose to submit.',
      text7: 'When you register for an Account, we may ask you to provide contact details, including items such as your name, company name, address, email address and telephone number.',
      text8: 'We use the collected information in various ways, including:',
      text9: 'topcasinocanada-ca.com follows the standard practice of using log files. These cookies record visitors when they visit websites. All hosting companies and some of the analytics of hosting services do this. The information collected by log files includes Internet Protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time, referring/exit pages, and possibly the number of clicks. They are not linked to any personal information. The purpose of this information is to analyze trends, administer the website, track user traffic on the website, collect demographic data.',
      text10: 'You can browse this list to find the Privacy Policy for each of topcasinocanada-ca.com advertising partners.',
      text11: 'Third-party ad servers or ad networks use technologies such as cookies, JavaScript or web beacons, which are used in relevant advertisements and links appearing on topcasinocanada-ca.com, which are sent directly to the users browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content you see on the websites you visit.',
      text12: 'Please note that topcasinocanada-ca.com has no access or control over these cookies that are used by third party advertisers.',
      text13: 'The topcasinocanada-ca.com privacy policy does not apply to other advertisers or websites. As such, we recommend that you review the relevant Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions on opting out of certain options. ',
      text14: 'You can disable cookies using your individual browser options. For more detailed information on how to manage cookies in each web browser, please refer to the browsers respective websites.',
      list1: [{
        text: 'Providing, operating and maintaining our website',
        },
        {
          text: 'Improve, personalize and expand our website',
        },
        {
          text: 'Understand and analyze how you use our website',
        },
        {
          text: 'Development of new products, services, features and functionalities',
        },
        {
          text: 'Communicate with you directly or through one of our partners, including for customer service purposes, to provide you with updates and other website information, and for marketing and promotional purposes',
        },
        {
          text: 'Send emails',
        },
      ],
    }],
    terms: [{
      mainTitle: 'Regulations',
      title1: 'Cookies',
      title2: 'Licence',
      text1: 'Welcome to topcasinocanada-ca.com!',
      text2: 'These regulations define the rules and regulations for using the website topcasinocanada-ca.com located at topcasinocanada-ca.com.',
      text3: 'By accessing this site, we assume that you accept these terms. Do not continue to use topcasinocanada-ca.com if you do not agree to all the terms and conditions set forth on this site. ',
      text4: 'The following terminology applies to these Terms, Privacy Statement and Disclaimer and all Agreements: Customer, You and Your refers to you, the person logging into this website and complying with the Companys terms and conditions. Company, We, Us, Our and Us refers to our company. Site, Parties or We refers to both the Customer and ourselves. All terms relate to the offer, acceptance and settlement of payments necessary to undertake the process of our assistance to the Client in the most appropriate manner, for the express purpose of satisfying the Clients needs for the provision of certain services of the Company, in accordance with and subject to the laws of the Netherlands. Any use of the above terminology or other words in singular, plural, capitalized and/or he/she or they are taken as interchangeable and therefore refer to the same thing.',
      text5: 'We use cookies. By entering the topcasinocanada-ca.com website, you have consented to the use of cookies in accordance with the topcasinocanada-ca.com Privacy Policy.',
      text6: 'Most interactive websites use cookies to enable us to collect user data on each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for our website visitors. Some of our affiliate/advertising partners may also use cookies. ',
      text7: 'Unless otherwise stated, topcasinocanada-ca.com and/or its licensors own the intellectual property rights to all material on topcasinocanada-ca.com. All intellectual property rights are reserved. You may access them from topcasinocanada-ca.com for your own personal use, subject to the restrictions set forth in these terms. ',
      text8: 'You mustnt:',
      text9: 'Parts of this site offer users the opportunity to post and exchange opinions and information in certain areas of the site. topcasinocanada-ca.com does not filter, edit, publish or review Comments before they appear on the site. Comments do not reflect the views and opinions of topcasinocanada-ca.com, its agents and/or affiliates. Comments reflect the views and opinions of the person posting them. To the extent permitted by applicable law, topcasinocanada-ca.com shall not be liable for the Comments or for any liability, damages or expenses caused and/or incurred as a result of any use and/or posting and/or appearance of the Comments on this website.',
      text10: 'topcasinocanada-ca.com reserves the right to monitor all Comments and remove comments that may be considered inappropriate, offensive or in violation of these Terms and Conditions.',
      text11: 'You warrant and represent that:',
      text12: 'You hereby grant topcasinocanada-ca.com a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any form, format or medium.',
      list1: [{
          text: 'Republish material from topcasinocanada-ca.com',
        },
        {
          text: 'Sell, rent or sublicense materials from topcasinocanada-ca.com',
        },
        {
          text: 'Reproduction, duplication or copying of materials from topcasinocanada-ca.com',
        },
        {
          text: 'Distribute content from topcasinocanada-ca.com',
        },
      ],
      list2: [{
        text: 'You are entitled to post Comments on our website and you have all the necessary licenses and consents to do so;',
        },
        {
          text: 'Comments do not infringe any intellectual property rights, including but not limited to third party copyrights, patents or trademarks;',
        },
        {
          text: 'Comments do not contain defamatory, libellous, offensive, indecent or otherwise unlawful material that is an invasion of privacy',
        },
        {
          text: 'Comments will not be used to solicit or promote business or customary activities or to present commercial or illegal activities.',
        },
      ],
    }],
  },
})

    var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true
});
}