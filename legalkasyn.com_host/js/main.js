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
    mainTitle: 'Darmowe gry dla Ciebie',
    mainImage: './img/hero.png',
    mainLink: 'Zagraj teraz',
    textWarning: [
      {
        text1: 'Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.',
        text2: 'Witryna nie zapewnia użytkownikom żadnych umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są dostępne użytkownikom powyżej 18 roku życia.',
      },
    ],
    headerLinks: [{
        text: 'Główny',
        src: 'main.php',
      },
      {
        text: 'O nas',
        src: 'main.php#about',
      },
      {
        text: 'Korzyści',
        src: 'main.php#benefits',
      },
      {
        text: 'Gry',
        src: 'main.php#games',
      },
    ],
    headerIcon: './img/18+.svg',
    logoLink: 'main.php',
    logo: './img/logo.png',
    pluwkiItems: [{
        title: 'Graj bez depozytu',
        text: 'Nowoczesne automaty nie pozwalają na uzupełnienie salda i wpłatę pieniędzy, masz konto wirtualne z wirtualnymi pieniędzmi',
      },
      {
        title: 'Nowoczesne gry',
        text: 'Jeśli masz dość przestarzałej grafiki i klasycznych automatów, nasza strona jest tym, czego potrzebujesz',
      },
      {
        title: 'Automat do gry bez pobierania',
        text: 'Gra nie wymaga żadnego dodatkowego oprogramowania, wystarczy dobre łącze internetowe.',
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
    aboutTitle: 'O nas',
    aboutImage: './img/about.png',
    aboutTexts: [
      {
        text: 'Chcesz darmowe automaty? Więc jesteś dokładnie tutaj. Tutaj znajdziesz wszystkie znane automaty maszyny, z których wszystkie można wypróbować bezpłatnie i bez rejestracji. Oferujemy również dogłębne recenzje i oceny najpopularniejszych automatów. Dowiesz się wszystkiego o różnych funkcjach automaty do gier i możesz grać w darmowe automaty 24/7 bez ryzyka. Najlepsze jest to, że możesz dostać rozpoczęło się od razu, bez rejestracji lub podawania jakichkolwiek danych osobowych.',
      },
      {
        text: 'Dlaczego warto grać na automatach za darmo przed obstawieniem prawdziwych pieniędzy? Jest wiele powodów, dla których jest to zalecane wykorzystać darmowe spiny przed pierwszą inwestycją prawdziwych pieniędzy. Na przykład możesz najpierw chcieć uzyskać przegląd różnych automatów online.  Wybór automatów jest ogromny i każdy dostawca gier oferuje wiele różnych funkcji.',
      },
      {
        text: 'Możliwość gry na automatach za darmo bez rejestracji i ryzyka jest zdecydowanie jedną z największych Zalety. Jak ze wszystkim, tutaj obowiązuje zasada: praktyka czyni mistrza. Tutaj pojawiają się darmowe spiny do gry.',
      },
    ],
    footerLinks: [
      {
        text: 'Zasady i warunki',
        src: 'terms.php',
      },
      {
        text: 'Polityka prywatności',
        src: 'policy.php',
      },
      {
        text: 'Polityka Cookie',
        src: 'cookie.php',
      },
    ],
    popup: [
      {
        text: 'Nasze gry są przeznaczone dla DOROSŁYCH widzów w wieku 18 lat i starszych. Klikając na przyciskiem potwierdzasz swój wiek.',
        link: 'Zgodzić się',
        src: 'main.php',
      },
    ],
    games: [{
      gameTitle1: 'Aztec gems',
      gameSrc1: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs9aztecgemsdx&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      gameTitle2: 'Big bass',
      gameSrc2: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=USD&gameSymbol=vs10bbbonanza&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
      gameTitle3: 'Gems Bonanza',
      gameSrc3: 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs20goldfever&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com',
    }, ],

    cookie: [{
      mainTitle: 'Polityka Cookies legalkasyn.com',
      title1: 'Czym są pliki cookie',
      title2: 'Jak używamy plików cookie',
      title3: 'Wyłączanie plików cookie',
      title4: 'Pliki cookie, które ustawiamy',
      title5: 'Pliki cookie stron trzecich',
      title6: 'Więcej informacji',
      text1: 'To jest Polityka plików cookie dla legalkasyn.com, dostępna z legalkasyn.com',
      text2: 'Zgodnie z powszechną praktyką w przypadku prawie wszystkich profesjonalnych witryn internetowych, ta witryna wykorzystuje pliki cookie, czyli małe pliki pobierane na Twój komputer, aby poprawić Twoje wrażenia. Na tej stronie opisano, jakie informacje zbierają, jak je wykorzystujemy i dlaczego czasami musimy przechowywać te pliki cookie. Podzielimy się również tym, jak możesz zapobiec przechowywaniu tych plików cookie, jednak może to spowodować obniżenie lub uszkodzenie niektórych elementów funkcjonalności witryn. ',
      text3: 'Używamy plików cookie z różnych powodów wyszczególnionych poniżej. Niestety w większości przypadków nie ma standardowych w branży opcji wyłączania plików cookie bez całkowitego wyłączenia funkcjonalności i funkcji dodawanych do tej witryny. Zaleca się pozostawienie wszystkich plików cookie, jeśli nie masz pewności, czy ich potrzebujesz, czy nie na wypadek, gdyby były wykorzystywane do świadczenia usługi, z której korzystasz. ',
      text4: 'Możesz zapobiec ustawianiu plików cookie, dostosowując ustawienia w swojej przeglądarce (zobacz Pomoc przeglądarki, jak to zrobić). Pamiętaj, że wyłączenie plików cookie wpłynie na funkcjonalność tej i wielu innych witryn, które odwiedzasz. Wyłączenie plików cookie zwykle skutkuje również wyłączeniem niektórych funkcji i funkcji tej witryny. Dlatego zaleca się niewyłączanie obsługi plików cookie.',
      text5: 'W niektórych szczególnych przypadkach używamy również plików cookie dostarczanych przez zaufane strony trzecie. Poniższa sekcja zawiera szczegółowe informacje na temat plików cookie stron trzecich, które możesz napotkać za pośrednictwem tej witryny. ',
      text6: 'Mam nadzieję, że to ci wyjaśniło i jak wspomniano wcześniej, jeśli jest coś, czego nie jesteś pewien, czy potrzebujesz, czy nie, zwykle bezpieczniej jest pozostawić włączone pliki cookie na wypadek, gdyby wchodziły one w interakcje z jedną z funkcji używanych w naszej witrynie .',
      text7: '',
      list1: [{
        text: 'Pliki cookie preferencji witryny',
        },
        {
          text: 'Aby zapewnić Ci doskonałe wrażenia z korzystania z tej witryny, udostępniamy funkcję ustawiania preferencji dotyczących sposobu działania tej witryny podczas korzystania z niej. Aby zapamiętać Twoje preferencje, musimy ustawić pliki cookie, aby te informacje mogły zostać wywołane za każdym razem, gdy Twoja interakcja ze stroną ma wpływ na Twoje preferencje. ',
        }
      ],
      list2: [{
        text: 'Na tej stronie używamy również przycisków i/lub wtyczek mediów społecznościowych, które umożliwiają łączenie się z siecią społecznościową na różne sposoby. Aby działały, następujące serwisy społecznościowe, w tym; {Lista sieci społecznościowych, których funkcje zintegrowałeś ze swoją witryną?, ustawi pliki cookie za pośrednictwem naszej witryny, które mogą zostać wykorzystane do ulepszenia Twojego profilu na ich stronie lub wniesienia wkładu w dane, które przechowują w różnych celach określonych w odpowiednich politykach prywatności.' ,
      }, ],
    }],
    privacy: [{
      mainTitle: 'Polityka prywatności serwisu legalkasyn.com',
      title1: 'Zgoda',
      title2: 'Informacje, które zbieramy',
      title3: 'Jak wykorzystujemy Twoje dane',
      title4: 'Pliki dziennika',
      title5: 'Polityka prywatności partnerów reklamowych',
      title6: 'Polityka prywatności stron trzecich',
      text1: 'Na stronie legalkasyn.com, dostępnej z legalkasyn.com, jednym z naszych głównych priorytetów jest prywatność naszych gości. Niniejszy dokument dotyczący Polityki Prywatności zawiera rodzaje informacji gromadzonych i zapisywanych przez legalkasyn.com oraz sposób, w jaki je wykorzystujemy.',
      text2: 'Jeśli masz dodatkowe pytania lub potrzebujesz więcej informacji na temat naszej Polityki prywatności, nie wahaj się z nami skontaktować.',
      text3: 'Niniejsza Polityka Prywatności dotyczy wyłącznie naszej działalności online i jest ważna dla osób odwiedzających naszą stronę internetową w odniesieniu do informacji, które udostępniają i/lub gromadzą w legalkasyn.com. Ta polityka nie ma zastosowania do żadnych informacji gromadzonych offline lub za pośrednictwem kanałów innych niż ta witryna. ',
      text4: 'Korzystając z naszej strony, wyrażasz zgodę na naszą Politykę Prywatności i zgadzasz się na jej warunki.',
      text5: 'Dane osobowe, o podanie których jesteś proszony, oraz powody, dla których jesteś proszony o ich podanie, zostaną Ci wyjaśnione w momencie, gdy poprosimy Cię o podanie danych osobowych.',
      text6: 'Jeśli skontaktujesz się z nami bezpośrednio, możemy otrzymać dodatkowe informacje na Twój temat, takie jak imię i nazwisko, adres e-mail, numer telefonu, treść wiadomości i/lub załączników, które możesz nam wysłać, oraz wszelkie inne informacje, które zdecydujesz się podać .',
      text7: 'Kiedy rejestrujesz się w celu założenia Konta, możemy poprosić Cię o podanie danych kontaktowych, w tym takich elementów, jak imię i nazwisko, nazwa firmy, adres, adres e-mail i numer telefonu.',
      text8: 'Wykorzystujemy zebrane informacje na różne sposoby, w tym do:',
      text9: 'legalkasyn.com stosuje standardową procedurę korzystania z plików dziennika. Pliki te rejestrują odwiedzających, gdy odwiedzają oni strony internetowe. Robią to wszystkie firmy hostingowe i część analityki usług hostingowych. Informacje gromadzone przez pliki dziennika obejmują adresy protokołu internetowego (IP), typ przeglądarki, dostawcę usług internetowych (ISP), datę i godzinę, strony odsyłające/wyjściowe i ewentualnie liczbę kliknięć. Nie są one powiązane z żadnymi danymi osobowymi. Celem tych informacji jest analiza trendów, administrowanie serwisem, śledzenie ruchu użytkowników w serwisie, zbieranie danych demograficznych.',
      text10: 'Możesz przejrzeć tę listę, aby znaleźć Politykę prywatności dla każdego z partnerów reklamowych legalkasyn.com.',
      text11: 'Zewnętrzne serwery reklamowe lub sieci reklamowe wykorzystują technologie takie jak pliki cookie, JavaScript lub sygnały nawigacyjne w sieci Web, które są wykorzystywane w odpowiednich reklamach i linkach pojawiających się na stronie legalkasyn.com, które są wysyłane bezpośrednio do przeglądarki użytkownika. Automatycznie otrzymują Twój adres IP, gdy to nastąpi. Technologie te są wykorzystywane do mierzenia skuteczności ich kampanii reklamowych i/lub do personalizowania treści reklamowych, które widzisz na odwiedzanych stronach internetowych.',
      text12: 'Pamiętaj, że legalkasyn.com nie ma dostępu ani kontroli nad tymi plikami cookie, które są używane przez zewnętrznych reklamodawców.',
      text13: 'Polityka prywatności legalkasyn.com nie dotyczy innych reklamodawców ani stron internetowych. W związku z tym zalecamy zapoznanie się z odpowiednimi Zasadami ochrony prywatności tych zewnętrznych serwerów reklamowych w celu uzyskania bardziej szczegółowych informacji. Może obejmować ich praktyki i instrukcje dotyczące rezygnacji z niektórych opcji. ',
      text14: 'Możesz wyłączyć pliki cookie za pomocą indywidualnych opcji przeglądarki. Aby poznać bardziej szczegółowe informacje na temat zarządzania plikami cookie w poszczególnych przeglądarkach internetowych, można je znaleźć na odpowiednich stronach internetowych przeglądarek.',
      list1: [{
        text: 'Dostarczanie, obsługa i utrzymywanie naszej witryny internetowej',
        },
        {
          text: 'Ulepsz, spersonalizuj i rozbuduj naszą witrynę internetową',
        },
        {
          text: 'Zrozum i przeanalizuj, w jaki sposób korzystasz z naszej strony internetowej',
        },
        {
          text: 'Opracowywanie nowych produktów, usług, cech i funkcjonalności',
        },
        {
          text: 'Komunikować się z Tobą bezpośrednio lub za pośrednictwem jednego z naszych partnerów, w tym w celu obsługi klienta, aby dostarczać Ci aktualizacje i inne informacje dotyczące strony internetowej oraz w celach marketingowych i promocyjnych',
        },
        {
          text: 'Wysyłaj e-maile',
        },
      ],
    }],
    terms: [{
      mainTitle: 'Regulamin',
      title1: 'Ciasteczka',
      title2: 'Licencja',
      text1: 'Witamy na legalkasyn.com!',
      text2: 'Niniejszy regulamin określa zasady i regulamin korzystania z Serwisu legalkasyn.com znajdującego się pod adresem legalkasyn.com.',
      text3: 'Uzyskując dostęp do tej witryny, zakładamy, że akceptujesz te warunki. Nie korzystaj dalej z legalkasyn.com, jeśli nie zgadzasz się na wszystkie warunki określone na tej stronie. ',
      text4: 'Następująca terminologia odnosi się do niniejszych Warunków, Oświadczenia o ochronie prywatności i Zastrzeżenia odpowiedzialności oraz wszystkich Umów: Klient, Ty i Twój odnosi się do Ciebie, osoby logującej się na tej stronie internetowej i zgodnej z warunkami Firmy i warunki. Firma, My, My, Nasz i Nas odnosi się do naszej firmy. Strona, Strony lub My odnosi się zarówno do Klienta, jak i do nas samych. Wszystkie warunki odnoszą się do oferty, przyjęcia i rozliczenia płatności niezbędnych do podjęcia procesu naszej pomocy Klientowi w najbardziej odpowiedni sposób, w wyraźnym celu zaspokojenia potrzeb Klienta w zakresie świadczenia określonych usług Spółki, zgodnie z i podlega prawu obowiązującemu w Holandii. Jakiekolwiek użycie powyższej terminologii lub innych słów pisanych w liczbie pojedynczej, mnogiej, pisanych wielką literą i/lub on/ona lub oni są traktowane jako wymienne, a zatem odnoszące się do tego samego.',
      text5: 'Wykorzystujemy pliki cookie. Wchodząc na stronę legalkasyn.com, wyraziłeś zgodę na używanie plików cookie zgodnie z Polityką prywatności legalkasyn.com.',
      text6: 'Większość interaktywnych stron internetowych używa plików cookie, aby umożliwić nam pobieranie danych użytkownika podczas każdej wizyty. Pliki cookie są używane przez naszą stronę internetową, aby umożliwić funkcjonalność niektórych obszarów, aby ułatwić osobom odwiedzającym naszą stronę internetową. Niektórzy z naszych partnerów stowarzyszonych/reklamowych mogą również używać plików cookie. ',
      text7: 'O ile nie określono inaczej, legalkasyn.com i/lub jej licencjodawcy są właścicielami praw własności intelektualnej do wszystkich materiałów na legalkasyn.com. Wszelkie prawa własności intelektualnej są zastrzeżone. Możesz uzyskać do nich dostęp z legalkasyn.com do własnego użytku osobistego, z zastrzeżeniem ograniczeń określonych w niniejszych warunkach. ',
      text8: 'Nie wolno:',
      text9: 'Części tej witryny oferują użytkownikom możliwość publikowania i wymiany opinii oraz informacji w określonych obszarach witryny. legalkasyn.com nie filtruje, nie edytuje, nie publikuje ani nie przegląda Komentarzy przed ich pojawieniem się na stronie. Komentarze nie odzwierciedlają poglądów i opinii strony legalkasyn.com, jej agentów i/lub podmiotów stowarzyszonych. Komentarze odzwierciedlają poglądy i opinie osoby, która je publikuje. W zakresie dozwolonym przez obowiązujące prawo legalkasyn.com nie ponosi odpowiedzialności za Komentarze ani za jakąkolwiek odpowiedzialność, szkody lub wydatki spowodowane i/lub poniesione w wyniku jakiegokolwiek wykorzystania i/lub zamieszczania i/lub pojawiania się Komentarzy na tej stronie internetowej.',
      text10: 'legalkasyn.com zastrzega sobie prawo do monitorowania wszystkich Komentarzy oraz usuwania komentarzy, które mogą zostać uznane za nieodpowiednie, obraźliwe lub naruszające niniejszy Regulamin.',
      text11: 'Gwarantujesz i oświadczasz, że:',
      text12: 'Niniejszym udzielasz legalkasyn.com niewyłącznej licencji na używanie, powielanie, edytowanie i upoważnianie innych osób do używania, powielania i edytowania dowolnych Twoich Komentarzy we wszystkich formach, formatach lub mediach.',
      list1: [{
          tekst: 'Ponownie opublikuj materiał z legalkasyn.com',
        },
        {
          tekst: 'Sprzedawaj, wypożyczaj lub sublicencjonuj materiały z legalkasyn.com',
        },
        {
          tekst: 'Powielanie, powielanie lub kopiowanie materiałów z legalkasyn.com',
        },
        {
          tekst: 'Rozpowszechniaj treści z legalkasyn.com',
        },
      ],
      list2: [{
          tekst: 'Jesteś uprawniony do zamieszczania Komentarzy na naszej stronie internetowej i posiadasz do tego wszelkie niezbędne licencje i zgody;',
        },
        {
          tekst: 'Komentarze nie naruszają żadnych praw własności intelektualnej, w tym między innymi praw autorskich, patentów ani znaków towarowych osób trzecich;',
        },
        {
          tekst: 'Komentarze nie zawierają zniesławiających, oszczerczych, obraźliwych, nieprzyzwoitych lub w inny sposób niezgodnych z prawem materiałów, które stanowią naruszenie prywatności',
        },
        {
          tekst: 'Komentarze nie będą wykorzystywane do pozyskiwania ani promowania działalności biznesowej lub zwyczajowej ani prezentowania działań handlowych lub działań niezgodnych z prawem.',
        },
      ],
    }],
  },
})


}