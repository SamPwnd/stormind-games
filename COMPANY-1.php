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


</body>

</html>