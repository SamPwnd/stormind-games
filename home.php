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

    $text_panel_hero = [
        'classes' => 'text-panel',
        'title' => 'DEVELOPERS OF INTENSE STORIES',
        'subtitle' => 'We developed and promoted Remothered: Tormented Fathers. We are currently working on the second title, Remothered: Broken Porcelain, and on a new unannounced project.'
    ];

    $text_panel_wrapper = [
        'classes' => 'text-panel text-panel--center col-12 col-lg-6',
        'title' => 'What we do',
        'subtitle' => 'We develop premium video games with intense stories and distinctive visual style for PC and consoles. 

        Our team consists of experienced professionals specialized in the production of video games and marketing experts.
         We publish our games in full autonomy or by collaborating with top publishers.'
    ];

    $text_panel_wrapper2 = [
        'classes' => 'text-panel text-panel--center col-12 col-lg-6',
        'title' => 'PREMIUM GAMES FOR PC & CONSOLES',
        'subtitle' => 'We focus on the development of premium titles for PC and consoles because they fit perfectly with our core skills.'
    ];

    $sideContentLeft =[
        'background' => './assets/img/side-content-image-1.png',
        'left-classes' => 'col-10 offset-sm-1 col-md-5 d-flex align-items-center ',
        'right-classes' => 'col-12 col-md-5 offset-md-1',
    ];
    $sideContentRight =[
        'background' => './assets/img/side-content-image-2.png',
        'left-classes' => 'col-10 offset-sm-1 col-md-5 d-flex align-items-center order-0 order-md-2',
        'right-classes' => 'col-12 col-md-5  order-1 ',
    ];

    $textPanelSideL = [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'INTENSE STORIES',
        'subtitle' => 'All of our games are based on intense stories to open the doors to franchises and sequels.'
    ];

    $textPanelSideR = [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'DISTINCTIVE VISUAL STYLE',
        'subtitle' => 'The visual style of the video games we develop must be distinctive and make them immediately recognizable.'
    ];

    $sideContentLeft2 =[
        'background' => './assets/img/182.png',
        'left-classes' => 'col-10 offset-sm-1 col-md-5 d-flex align-items-center ',
        'right-classes' => 'col-12 col-md-5 offset-md-1',
    ];
    $sideContentRight2 =[
        'background' => './assets/img/side-content-image-4.png',
        'left-classes' => 'col-10 offset-sm-1 col-md-5 d-flex align-items-center order-0 order-md-2',
        'right-classes' => 'col-12 col-md-5  order-1 ',
    ];

    $textPanelSideL2 = [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'POWERFUL GAME ENGINE',
        'subtitle' => 'All of our titles are developed on Unreal Engine.'
    ];

    $textPanelSideR2 = [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'MARKETING-FIRST APPROACH',
        'subtitle' => 'Before we start working on a new video game, we always study the market to create games that can be considered unique compared to competitors. 

        They must be suitable to be positioned as distinctive in the players’ minds.'
    ];

    $wrapper =[
        'classes' => ' ',
        'row_classes' => 'row-cols-1 row-cols-md-3',
        'title' => 'AWARDS',
        'background' => './assets/img/placeholder-filtered.jpg',
    ];

    $wrapper_elements =[
        [
            'classes' => 'col',
            'component' => 'cardsimple.php',
            'content' => [
                'image' => './assets/img/awards1.png',
                'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
                'subtitle' => 'Awarded to the company whose contribution have proved outstanding for the whole game development scene in Italy and in the International landscape.'
            ],
        ],
        [
            'classes' => 'col',
            'component' => 'cardsimple.php',
            'content' => [
                'image' => './assets/img/awards2.png',
                'title' => 'BEST NEW STUDIO 2018',
                'subtitle' => 'Awarded to the new Italian studio with the best debut game released on the market in 2018.'
            ],
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
    <title>STORMIND GAMES</title>
</head>
<body>
    <main class="home">
        <section class="mb-1">

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



        <?php ob_start(); ?>
            <div class="container">
            <?php get_template_part('./components/text-panel.php',['content' => $text_panel_hero]); ?>
                <p class="hero__bottom">
                    <img src="./assets/scroll-down-arrow.svg" alt="down">
                    <a href="#">Scroll Down</a>
                </p>
            </div>
        <?php $heroContent = ob_get_clean(); ?>

        <?php get_template_part('./components/hero.php', ['hero' => $hero, 'content' => $heroContent]); ?>

        </section>

        <section class="mb-1">

        <div class="home__wrapper">
            <?php get_template_part('./components/text-panel.php',['content' => $text_panel_wrapper]); ?>
        </div>

        </section>

        <section class="mb-1">

        <?php ob_start(); ?>

            <?php get_template_part('./components/text-panel.php',['content' => $textPanelSideL]) ;?>

        <?php $sideContentElement = ob_get_clean(); ?>

        <?php get_template_part(('./components/side-content.php'), ['side_content' => $sideContentLeft, 'content' => $sideContentElement]) ?>

        </section>

        <section class="mb-1">

        <?php ob_start(); ?>

            <?php get_template_part('./components/text-panel.php',['content' => $textPanelSideR]) ;?>

        <?php $sideContentElement = ob_get_clean(); ?>

        <?php get_template_part(('./components/side-content.php'), ['side_content' => $sideContentRight, 'content' => $sideContentElement]) ?>

        </section>

        <section class="mb-1">
            <div class="home__wrapper">
                <?php get_template_part('./components/text-panel.php',['content' => $text_panel_wrapper2]); ?>
                <ul class="white-icon-list">
                    <img src="./assets/platform-pc-whitesvg.svg" alt="pc">
                    <img src="./assets/platform-ps-white.svg" alt="ps">
                    <img src="./assets/platform-xbox-white.svg" alt="xbox">
                    <img src="./assets/platform-switch-white.svg" alt="switch">
                </ul>
            </div>
        </section>

        <section class="mb-1">

        <?php ob_start(); ?>

            <?php get_template_part('./components/text-panel.php',['content' => $textPanelSideL2]) ;?>

        <?php $sideContentElement = ob_get_clean(); ?>

        <?php get_template_part(('./components/side-content.php'), ['side_content' => $sideContentLeft2, 'content' => $sideContentElement]) ?>

        </section>

        <section class="mb-1">

        <?php ob_start(); ?>

            <?php get_template_part('./components/text-panel.php',['content' => $textPanelSideR2]) ;?>

        <?php $sideContentElement = ob_get_clean(); ?>

        <?php get_template_part(('./components/side-content.php'), ['side_content' => $sideContentRight2, 'content' => $sideContentElement]) ?>

        </section>

        <section class="mb-1">
            <?php 
                ob_start(); 
                foreach($wrapper_elements as $element): 
            ?>        
            <div class="<?= $element['class'] ?>">
                <?php
                    $component = $element['component'];
                    get_template_part("./components/$component", ['content' => $element['content']]);
                ?>
            </div>
            <?php
                endforeach;
                $wrapper_content = ob_get_clean(); 
            ?>

            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper, 'elements' => $wrapper_content]) ?>
        </section>

    </main>
    
    <script src="./script/navbar.js"></script>
</body>
</html>