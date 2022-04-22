<?php
require_once('./functions.php');


$navbar = [
  'classes' => 'navbar',
  'id' => 'navbar1',
  'logo' => './assets/logo.svg',
  'navContainer' => 'container',
  'button' => [
    'id' => 'navbar__button-1',
    'icon1' => './assets/icon-hamburger.svg',
    'icon2' => './assets/icon-Close.svg'
  ],
  'socials' => [
    'classes' => 'navbar__socials',
    'icons' => [
      './assets/social-linkdn.svg',
      './assets/social-Fb.svg',
      './assets/social-tw.svg',
      './assets/social-Ig.svg',
      './assets/social-yt.svg',
    ]
  ],
];

$hero = [
  'classes' => 'hero',
  'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/COMPANY-1.mp4',
];

$text_panel_hero = [
  'classes' => 'text-panel',
  'title' => 'WE ARE STORMIND GAMES',
  'subtitle' => 'The video game studio focused on the development of premium games with intense stories and distinctive visual style.'
];

$side_panel = [
  'background-classes' => 'col-12 col-md-5  p-0 order-1',
  'content-classes' => 'col-10 offset-1 col-md-5 order-2',
  'background' => 'http://stormindgames.com/wp-content/uploads/2021/01/Our-Story.jpg',
];

$cardsaward = [
  [
    'image' => 'assets/img/awards1.png',
    'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
    'subtitle' => 'Awarded to the company whose contribution have proved outstanding for the whole game development scene in Italy and in the International landscape.'
  ],
  [
    'image' => 'assets/img/awards2.png',
    'title' => 'BEST NEW STUDIO 2018',
    'subtitle' => 'Awarded to the new Italian studio with the best debut game released on the market in 2018.'
  ]

];

$cardsimple = [
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/180.png',
    'title' => 'DEVELOPMENT',
    'subtitle' => 'We can help you with developing a sequel or an expansion of your video game and  converting the player mode you’ve set to the one of your choice.'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/181.png',
    'title' => 'GAME’S CINEMATICS & TRAILER',
    'subtitle' => 'Thanks to the experience gained by the professionals in our team, who have had the chance to prove their skills in the production of CGI films, we can design and create trailers and cinematics for your video game.'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/182.png',
    'title' => 'PORTING',
    'subtitle' => 'If you have a finished game for PC, we can port it from PC to PlayStation, Xbox, and Switch, thus making it compatible for consoles.'
  ]
];

$timeline = [
  'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/remote-tf-timeline.png',
  'title' => 'timeline',
  'elements' => [
    [
      'date' => 'Mar 19, 2020',
      'subtitle' => 'NINTENDO SWITCH AND PS4 RELEASE IN ASIA',
      'description' => 'The game became available in the Asian market, as "Remothered: Tormented Fathers Remastered" on the Nintendo e-Shop, and as “Remothered: Tormented Fathers" on the PlayStation™Store, published by the renowned Japanese company 3goo (Dead by Daylight, Victor Vran: Overkill Edition).',
    ],
    [
      'date' => 'Oct 31, 2019',
      'subtitle' => 'PHYSICAL RELEASE',
      'description' => 'Thanks to a collaboration with video game publisher SOEDESCO, the physical edition of the pure and realistic survival horror game comes out for Nintendo Switch, PS4 and Xbox One.',
    ],
    [
      'date' => 'Sep 6, 2019',
      'subtitle' => 'NINTENDO SWITCH™ RELEASE',
      'description' => 'The game became available for the Nintendo portable console.',
    ],
    [
      'date' => 'Jul 25, 2018',
      'subtitle' => 'PS4 AND XBOX ONE RELEASE',
      'description' => 'Remothered: Tormented Fathers just made its appearance in the consoles world.',
    ],
    [
      'date' => 'Jan 30, 2018',
      'subtitle' => 'PC FULL RELEASE',
      'description' => 'The full version of the game was available to PC players.',
    ],
    [
      'date' => 'Oct 31, 2017',
      'subtitle' => 'STEAM EARLY ACCESS RELEASE',
      'description' => 'Remothered: Tormented Fathers hit the largest digital distribution platform for PC gaming in Early Access.',
    ],
    [
      'date' => 'Jun, 2017',
      'subtitle' => 'BETA VERSION',
      'description' => 'We gave voice to the game characters as we finished the soundtrack with all the activities related to dubbing and subtitles. A near-final release was ready - the beta version was provided to testers.',
    ],
    [
      'date' => 'Dec, 2016',
      'subtitle' => 'ALMOST THERE',
      'description' => 'We delivered cinematic vibes to the game as we produced all the cutscenes. Artificial intelligence and sound effects were also developed and implemented. The alpha version was ready.',
    ],
    [
      'date' => 'Jun, 2016',
      'subtitle' => 'TAKING SHAPE',
      'description' => 'Motion capture technology was used to create animations. By taking advantage of professional actors, we focused on replicating natural movements to make the action utterly realistic. At the end of this process, characters were able to interact with objects and we got a first playable version of the game with preliminary graphics. Furthermore, we developed the first version of the GUI.',
    ],
    [
      'date' => 'Mar, 2016',
      'subtitle' => 'EARLY STEPS',
      'description' => 'March 2016 - At this stage, our 3D artists had finished the preliminary modeling and texturing activities concerning characters and environments. Developers set up the input methods and environment exploration systems that would have been used subsequently in the final product.',
    ],
    [
      'date' => 'Dec, 2015',
      'subtitle' => 'THE BEGINNING',
      'description' => 'The start of our journey together with Darril Arts. The production of Remothered: Tormented Fathers began here.',
    ],
  ],

];

$text_panel_prefooter = [
  'classes' => 'text-panel text-panel--center text-panel--black col-12 col-lg-8',
  'title' => 'NEED HELP OR HAVE INQUIRIES ON THE SERVICES OFFERED?',
  'subtitle' => 'Click the button below and fill in the form to get in touch!'
];

$footer = [
  'classes' => 'footer',
  'credits' => '© 2020  STORMIND S.R.L - P.IVA 05415340875     |     Via Sclafani 40/B - traversa, 95024 Acireale (CT) - ITALY     |     All Rights Reserved.',
  'img_bw' => './assets/byBiscuitWay.svg',

  'socials' => [
    'classes' => 'navbar__socials',
    'icons' => [
      './assets/social-linkdn.svg',
      './assets/social-Fb.svg',
      './assets/social-tw.svg',
      './assets/social-Ig.svg',
      './assets/social-yt.svg',
    ]
  ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>COMPANY</title>
</head>

<body>
  <header>
    <?php ob_start(); ?>
    <ul class="navbar__links " id="navbarNavDropdown">
      <li class="navbar__link"><a href="#">company</a></li>
      <li class="navbar__link"><a href="#">games</a></li>
      <li class="navbar__link"><a href="#">news</a></li>
      <li class="navbar__link"><a href="#">press kit</a></li>
      <li class="navbar__link"><a href="#">careers</a></li>
      <li class="navbar__link">
        <a href="#">
          <img src="./assets/icon-Coop.svg" alt="">
          work with us
        </a>
      </li>
    </ul>
    <?php $navbarContent = ob_get_clean(); ?>

    <?php get_template_part('./components/navbar.php', ['navbar' => $navbar, 'content' => $navbarContent]); ?>
  </header>

  <section class="mb-1">
    <?php ob_start(); ?>
    <div class="container">
      <?php get_template_part('./components/text-panel.php', ['content' => $text_panel_hero]); ?>
      <p class="hero__bottom">
        <img src="./assets/scroll-down-arrow.svg" alt="down">
        <a href="#">Scroll Down</a>
      </p>
    </div>
    <?php $heroContent = ob_get_clean(); ?>

    <?php get_template_part('./components/hero.php', ['hero' => $hero, 'content' => $heroContent]); ?>
  </section>

  <div class="developers mb-1">
    <img src="assets/developers-of-intense-stories.jpg" alt="">
  </div>

  <section class="mb-1">
    <?php
    $text_panel_1 = [
      'classes' => 'text-panel text-panel--dark mb-5',
      'title' => 'OUR STORY',
      'subtitle' => 'Stormind Games was founded in 2016 by Antonio Cannata and Federico Laudani, simultaneously to the announcement of award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game, which is the first title of the Remothered saga.'
    ];
    $article_1 = [
      'classes' => 'article article-accordion',
      'image' => 'assets/antonio-cannata.jpg',
      'title' => 'ANTONIO CANNATA',
      'subtitle' => 'Co-Founder & CEO',
      'content-up' => 'CEO and Co-Founder of the company, is in charge of the company marketing strategies and business development, with a focus on brand building and deal-making with publishers and investors.
    <br><br> After graduating in Computer Engineering, he devoted his full time work to combine business',
      'content-down' => 'and video games, his two passions. Following a professional training abroad, that paved the way for bringing his own company to life with the right conditions, he started operating in the entertainment industry, and after two years, together with Federico Laudani, he founded Stormind Games.<br><br>In the last 8 years, Antonio has specialized in the videogame industry for PC and Consoles. His enthusiastic leadership and his contribution in managing the company with the aim to always raise the bar have been awarded with the “Management Star” Award from DStars in 2020, the award dedicated to Italian excellences in the game development industry, for his outstanding contribution in managing a game studio.'

    ];

    $article_2 = [
      'classes' => 'article article-accordion',
      'image' => 'assets/federico-laudani.jpg',
      'title' => 'FEDERICO LAUDANI',
      'subtitle' => 'Co-Founder & Art Director',
      'content-up' => 'Co-Founder and Art Director of Stormind Games, is in charge of art direction, lighting, look development and post-production.
    <br><br>After earning a master’s degree in 3D and Graphic Design, he kick-started his career as Art Director,  specializing in CGI.',
      'content-down' => 'In 2010, he opened a small CGI studio, working mainly on commercials, short films, and 4D movies for the entertainment industry. This experience got him ready for focusing his effort on creating his own company together with Antonio Cannata, in the entertainment industry first, and then in the video game industry, giving birth to Stormind Games.<br><br> In the last 11 years, Federico has worked on 30+ productions and now supervises the production department of the company to ensure everything goes off without a hitch.'

    ];


    ob_start();
    get_template_part('./components/text-panel.php', ['content' => $text_panel_1]);
    get_template_part('./components/article.php', ['article' => $article_1]);
    get_template_part('./components/article.php', ['article' => $article_2]);
    get_template_part('./components/text-company.php', ['text_company' => '']);
    $side_panel_content = ob_get_clean();
    ?>

    <?php get_template_part(('./components/side-panel.php'), ['content' => $side_panel, 'text' => $side_panel_content]) ?>

  </section>

  <section class="awards">
    <?php
    $text_panel_1 = [
      'classes' => 'text-panel text-panel--center mb-5',
      'title' => 'AWARDS',
      'subtitle' => ''
    ];
    ob_start();
    get_template_part('./components/text-panel.php', ['content' => $text_panel_1]);
    $text_panel_content = ob_get_clean();
    ?>

    <?php get_template_part(('./components/text-panel.php'), ['content' => $text_panel_1, 'text' => $text_panel_content]) ?>

    <?php
    ob_start();
    get_template_part('./components/cardsaward.php', ['content' => $cardsaward]);
    $cardsaward_content = ob_get_clean();
    ?>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <?php get_template_part('./components/cardsaward.php', ['content' => $cardsaward[0]],) ?>
        </div>

        <div class="col-6">
          <?php get_template_part('./components/cardsaward.php', ['content' => $cardsaward[1]]) ?>
        </div>

        <div class="col-12 mt-5" style="height: 624px;">

          <div class="section-video">
            <iframe width="100%" class="single-video" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/HaUZ6Zfjsvs">
            </iframe>
          </div>

        </div>
      </div>



    </div>

  </section>

  <section class="services">
    <?php
    $text_panel_1 = [
      'classes' => 'text-panel text-panel--center text-panel--dark',
      'title' => 'SERVICES',
      'subtitle' => 'Do you need support for your video game? We can help you with the following development services:'
    ];
    ob_start();
    get_template_part('./components/text-panel.php', ['content' => $text_panel_1]);
    $text_panel_content = ob_get_clean();
    ?>

    <?php get_template_part(('./components/text-panel.php'), ['content' => $text_panel_1, 'text' => $text_panel_content]) ?>
    <div class="container">


      <?php
      ob_start();
      get_template_part(('./components/cardsimple.php'), ['content' => $cardsimple]);
      $cardsimple_content = ob_get_clean(); ?>

      <div class="row">
        <div class="col col-md-3 offset-md-1 col-sm-12">
          <?php get_template_part(('./components/cardsimple.php'), ['content' => $cardsimple[0], 'text' => $cardsimple_content]) ?>
        </div>


        <div class="col col-md-3 col-sm-12 ">
          <?php get_template_part(('./components/cardsimple.php'), ['content' => $cardsimple[1], 'text' => $cardsimple_content]) ?>
        </div>


        <div class="col col-md-3 col-sm-12">
          <?php get_template_part(('./components/cardsimple.php'), ['content' => $cardsimple[2], 'text' => $cardsimple_content]) ?>
        </div>
      </div>
    </div>
    <!-- <?php for ($i = 0; $i < count($cardsimple); $i++) get_template_part(('./components/cardsimple.php'), ['content' => $cardsimple[$i], 'text' => $cardsimple_content]) ?> -->


  </section>

  <section class="mb-1">
    <?php get_template_part('./components/timeline.php', ['content' => $timeline]); ?>
  </section>

  <section class="news-letter">
    <section class="home__newsletter bg-primary pt-5">
      <div class="container pt-5 pb-md-3 mb-5">
        <?php get_template_part('./components/text-panel.php', ['content' => $text_panel_prefooter]); ?>

      </div>

      <button class="btn btn-outline-black ms-auto me-auto d-block">CONTACT US</button>

    </section>
  </section>

  <footer class="mt-1">
    <?php get_template_part('./components/footer.php', $footer); ?>
  </footer>

  <script src="script/accordion.js"></script>
</body>

</html>