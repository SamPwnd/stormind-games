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
  'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/CAREERS-1.mp4',
];

$text_panel_hero = [
  'classes' => 'text-panel col-12 col-lg-6',
  'title' => 'WORK WITH US',
  'subtitle' => 'Are you interested in working with us or have any inquiries about our services or games?'
];

$cardsimple = [
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/180.png',
    'title' => 'Batora: Lost Haven',
    'subtitle' => 'UPDATED: Aug 19, 2019'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/remothered.png',
    'title' => 'REMOTHERED: Broken Porcelain',
    'subtitle' => 'UPDATED: Aug 19, 2019'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/remothered2.png',
    'title' => 'REMOTHERED: Tormented Fathers',
    'subtitle' => 'UPDATED: Mar 19, 2020'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/180.png',
    'title' => 'STORMIND GAMES',
    'subtitle' => 'UPDATED: Aug 19, 2019'
  ]
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



$text_panel = [
  'classes' => 'text-panel text-panel--dark col-12 col-lg-6',
  'title' => 'PUBLISHER',
  'subtitle' => 'If you are a publisher willing to know more about our upcoming, unannounced projects or interested in developing a new video game.'
];

$text_panel_side = [
  'classes' => 'text-panel',
  'title' => 'DEVELOPMENT COMPANY',
  'subtitle' => 'If you are a game development company interested in outsourcing or looking for development services.'
];

$side_panel_2 = [
  'classes' => 'side_panel_2',
  'title' => 'fff',
  'subtitle' => 'ccc'
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>WORK WITH US</title>
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

  <section class="publisher-development">
    <div class="container">
      <?php get_template_part('./components/text-panel.php', ['content' => $text_panel]); ?>
    </div>
    <?php get_template_part('./components/side-panel-2.php', ['content' => $text_panel_side]); ?>
  </section>

  <footer class="mt-1">
    <?php get_template_part('./components/footer.php', $footer); ?>
  </footer>

</body>

</html>