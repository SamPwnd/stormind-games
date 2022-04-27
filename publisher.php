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
  'title' => 'PUBLISHER',
  'subtitle' => 'If you are a publisher willing to know more about our upcoming, unannounced projects or interested in developing a new video game.'
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
  'classes' => 'text-panel text-panel--dark',
  'title' => 'GET IN TOUCH',
  'subtitle' => 'Get in touch with us, one of Stormind Games’ upcoming projects may be your next milestone! <br><br>

We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game, and the second title, Remothered: Broken Porcelain.<br><br>

Now, following the successful model used for the saga, we are working on unannounced titles.<br><br>

We are looking for Publishers who can distribute the game worldwide on PC, PS, XBOX, and Switch, both digital and retail, with a track record in the creation of a fanbase for a new IP and willing to invest in marketing and PR to promote our upcoming video games, and we are also open to co-development opportunities and collaborations.<br><br>

Please fill out the form specifying your request and we’ll get back to you as soon as possible.'
];

$text_panel_side = [
  'classes' => 'text-panel',
  'title' => 'GET IN TOUCH',
  'subtitle' => 'Get in touch with us, one of Stormind Games’ upcoming projects may be your next milestone!

We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game, and the second title, Remothered: Broken Porcelain.

Now, following the successful model used for the saga, we are working on unannounced titles.

We are looking for Publishers who can distribute the game worldwide on PC, PS, XBOX, and Switch, both digital and retail, with a track record in the creation of a fanbase for a new IP and willing to invest in marketing and PR to promote our upcoming video games, and we are also open to co-development opportunities and collaborations.

Please fill out the form specifying your request and we’ll get back to you as soon as possible.'
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
  <title>PUBLISHER</title>
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

  <section class="get-in-touch">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <?php get_template_part('./components/text-panel.php', ['content' => $text_panel]); ?>

        </div>
        <div class="col-lg-6 col-md-12" style="max-height: 620px;">
          <?php get_template_part('./components/contact.php', ['content' => $text_panel_side]); ?>
        </div>
      </div>

    </div>

  </section>

  <footer class="mt-1">
    <?php get_template_part('./components/footer.php', $footer); ?>
  </footer>
  <script src="./script/script.js"></script>
</body>

</html>