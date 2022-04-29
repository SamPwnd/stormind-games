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
  'classes' => 'text-panel',
  'title' => 'PRESS KIT',
  'subtitle' => 'Read the press releases, interviews, descriptions and biographies, watch the demos, videos and images from our games.'
];


$card_link = [
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/180.png',
    'link' => '#',
    'title' => 'Batora: Lost Haven',
    'subtitle' => 'UPDATED: Aug 19, 2019',
    'icon' => './assets/icon-download.svg'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/remothered.png',
    'link' => '#',
    'title' => 'REMOTHERED: Broken Porcelain',
    'subtitle' =>
    'UPDATED: Aug 19, 2019',
    'icon' => './assets/icon-download.svg'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/remothered2.png',
    'link' => '#',
    'title' => 'REMOTHERED: Tormented Fathers',
    'subtitle' =>
    'UPDATED: Mar 19, 2020',
    'icon' => './assets/icon-download.svg'
  ],
  [
    'classes' => 'cards-simple',
    'image' => './assets/img/180.png',
    'link' => '#',
    'title' => 'STORMIND GAMES',
    'subtitle' =>
    'UPDATED: Aug 19, 2019',
    'icon' => './assets/icon-download.svg'
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>PRESS KIT</title>
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

  <section class="under-hero">
    <div class="container">
      <?php
      ob_start();
      get_template_part(('./components/card-link.php'), ['content' => $card_link]);
      $card_link_content = ob_get_clean(); ?>

      <div class="row">
        <div class="col-lg-4 col-md-12">
          <?php get_template_part(('./components/card-link.php'), ['content' => $card_link[0], 'text' => $card_link_content]) ?>
        </div>


        <div class="col-lg-4 col-md-12">
          <?php get_template_part(('./components/card-link.php'), ['content' => $card_link[1], 'text' => $card_link_content]) ?>
        </div>


        <div class="col-lg-4 col-md-12">
          <?php get_template_part(('./components/card-link.php'), ['content' => $card_link[2], 'text' => $card_link_content]) ?>
        </div>

        <div class="col-lg-4 col-md-12">
          <?php get_template_part(('./components/card-link.php'), ['content' => $card_link[3], 'text' => $card_link_content]) ?>
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