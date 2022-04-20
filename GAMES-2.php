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
    'video' => 'https://stormindgames.com/wp-content/uploads/2020/12/Remothered-1-Tormented-fathers-2.mp4',
    
];

$text_panel_hero=[
    'classes' => 'text-panel ',
    'title' => 'remothered tormented fathers',
    'subtitle' => 'RELEASE DATE: Jan 30, 2018'
];

$center_logo_1 =[
    'classes' => 'center-logo',
    'image' => 'assets/center-logo.svg'
];

$side_panel =[
    'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/cover-remothered-TF.png',
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

    <body>
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
        <section class="mb-1">
            <?php get_template_part('./components/center-logo.php', ['center_logo' => $center_logo_1]) ?>
        </section>
        <section class="mb-1">
            <?php 
                $text_panel_1=[
                    'classes' => 'text-panel text-panel--dark',
                    'title' => 'GAME OVERVIEW',
                    'subtitle' => 'We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game.<br><br>Psychology plays a huge role within the game: heroes and enemies are atypical and the line between good and evil is blurred. The plot is rich in unpredictable twists, and it is touching at the same time. The development of the game is similar to that of a film narration, where the player perfectly identifies himself with the character. The soundtrack, composed by Nobuko Toda (Final Fantasy, Halo, Metal Gear Solid) and Luca Balboni, enhances the terrifying atmosphere of the game.<br><br> Remothered: Tormented Fathers, is available for PlayStation®4, Xbox One, PC, and Nintendo Switch™. Furthermore, you can find the retail version of the game for Nintendo Switch™, PlayStation®4, and Xbox One.'
                ];
                $text_panel_2=[
                    'classes' => 'text-panel text-panel--dark',
                    'title' => 'PLOT',
                    'subtitle' => 'We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video The story revolves around Rosemary Reed, a fascinating 35-year-old woman, who reaches Richard Felton’s house, in order to investigate the disappearance of a girl called Celeste. The woman is greeted by Gloria, the nurse who takes care of the old Richard. When Dr. Felton understands Rosemary’s true intentions, the dread begins.'
                ];
                $text_panel_3=[
                    'classes' => 'text-panel text-panel--dark',
                    'title' => 'FEATURES',
                    'subtitle' => ''
                ];
                $accordion_1 = [
                    [
                      'classes' => 'accordion',
                      'title' => 'FUNCTIONAL TESTER'
                    ]
                  ];
                ob_start();                
                get_template_part('./components/text-panel.php', ['content' => $text_panel_1]);  
                get_template_part('./components/text-panel.php', ['content' => $text_panel_2]);  
                get_template_part('./components/text-panel.php', ['content' => $text_panel_3]);  
                get_template_part('./components/accordion.php', ['accordion' => $accordion_1]);
                $side_panel_content = ob_get_clean(); 
            ?>

            <?php get_template_part(('./components/side-panel.php'), ['content' => $side_panel, 'text' => $side_panel_content]) ?>
        </section>
    </body>

    <footer>

    </footer>
    <script src="./script/navbar.js"></script>
    <script src="./script/slider-simple.js"></script>
    <script src="./script/galery.js"></script>
    <script src="./script/accordion.js"></script>
</body>
</html>