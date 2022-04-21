<?php

require_once('./functions.php');

$navbar =[
    'classes' => 'navbar',
    'id' => 'navbar1',
    'logo' => './assets/logo.svg',
    'navContainer' => 'container',
    'button' =>[
        'id' => 'navbar__button-1',
        'icon1' => './assets/icon-hamburger.svg',
        'icon2' => './assets/icon-Close.svg'
    ],
    'socials'=>[
        'classes' => 'navbar__socials',
        'icons' =>[
            './assets/social-linkdn.svg',
            './assets/social-Fb.svg',
            './assets/social-tw.svg',
            './assets/social-Ig.svg',
            './assets/social-yt.svg',
        ]
    ],
];

$hero =[
    'classes' => 'hero',
    'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/our-games-1.mp4',
    
];

$text_panel_hero=[
    'classes' => 'text-panel ',
    'title' => 'OUR GAMES',
    'subtitle' => 'Learn more about video games we developed and<br> projects in our pipeline.'
];

$postcard = [[
    'background-img' => 'height: 480px; background-image: url(../stormind-games/assets/img/postcard.jpg)',
    'class'  => '--medium',
    'title' => 'BATORA: LOST HAVEN',
    'description' => 'After her expulsion from an all-girls boarding school, the rebellious Jen begins to observe strange occurrences happening at the Ashmann Inn, the hotel where she was sent to serve as one of its maids. As the past comes back to haunt her, will she be able to escape?',
    'caption' => 'COOMING SOON',
    'icons' => [
            '../stormind-games/img/pc.svg',
            '../stormind-games/img/ps.svg',
            '../stormind-games/img/xbox.svg',
            '../stormind-games/img/nintendo.svg',
        ],
    'contentbutton' => '+ SHOW MORE',
    ],
    [
    'background-img' => 'height: 480px; background-image: url(../stormind-games/assets/img/postcard.jpg)',
    'class'  => '--medium',
    'title' => 'REMOTHERED:Broken Porcelain',
    'description' => 'After her expulsion from an all-girls boarding school, the rebellious Jen begins to observe strange occurrences happening at the Ashmann Inn, the hotel where she was sent to serve as one of its maids. As the past comes back to haunt her, will she be able to escape?',
    'caption' => 'WILL BE RELEASED IN SUMMER 2020',
    'icons' => [
            '../stormind-games/img/pc.svg',
            '../stormind-games/img/ps.svg',
            '../stormind-games/img/xbox.svg',
            '../stormind-games/img/nintendo.svg',
        ],
    'contentbutton' => '+ SHOW MORE',
    ],
    [
        'background-img' => 'height: 480px; background-image: url(../stormind-games/assets/img/postcard.jpg)',
        'class'  => '--medium',
        'title' => 'REMOTHERED:Tormented Fathers',
        'description' => 'A beautiful and mysterious lady is smoking while seated in a white van, contemplating the entrance of a big dismal mansion. She is looking for Celeste Felton, a girl gone missing years before and to find her, she gets caught into a web of lies where murders and obsessions come to life.',
        'caption' => 'RELEASE DATE: Jan 30, 2018',
        'icons' => [
                '../stormind-games/img/pc.svg',
                '../stormind-games/img/ps.svg',
                '../stormind-games/img/xbox.svg',
                '../stormind-games/img/nintendo.svg',
            ],
        'contentbutton' => '+ SHOW MORE',
        ]
];
$footer = [
    'classes' => 'footer',
    'credits' => '© 2020  STORMIND S.R.L - P.IVA 05415340875     |     Via Sclafani 40/B - traversa, 95024 Acireale (CT) - ITALY     |     All Rights Reserved.',
    'img_bw' => './assets/byBiscuitWay.svg',

    'socials' => [
        'classes' => 'navbar__socials',
        'icons' =>[
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
    <title>Remothered: Tormented Fathers</title>
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


        <?php  get_template_part('./components/navbar.php', ['navbar' => $navbar , 'content' => $navbarContent]); ?>
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
    <div class="mb-1">
        <div class="mt"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard[0]])?>
                </div>
            </div>
            <div class="row">
                <div class="mt1"></div>
                <div class="col">
                    <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard[1]])?>
                </div>
            </div>
            <div class="row">
                <div class="mt1"></div>
                <div class="col">
                    <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard[2]])?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt">
        <?php get_template_part('./components/footer.php', $footer); ?>
    </div>
</body>
</html>