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
        'classes' => 'text-panel text-panel--center',
        'title' => 'What we do',
        'subtitle' => 'We develop premium video games with intense stories and distinctive visual style for PC and consoles. 

        Our team consists of experienced professionals specialized in the production of video games and marketing experts.
         We publish our games in full autonomy or by collaborating with top publishers.'
    ];

    $sideContentLeft =[
        'background' => './img/side-content-image-1.png',
        'left-classes' => 'col-10 offset-1 col-md-5 d-flex align-items-center ',
        'right-classes' => 'col-12 col-md-5 offset-md-1',
    ];
    $sideContentRight =[
        'background' => './img/side-content-image-2.png',
        'left-classes' => 'col-10 offset-1 col-md-5 d-flex align-items-center order-0 order-md-2',
        'right-classes' => 'col-12 col-md-5  oreder-1 ',
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

    <div class="home__wrapper">
        <?php get_template_part('./components/text-panel.php',['content' => $text_panel_wrapper]); ?>
    </div>

    <?php ob_start(); ?>

        <?php get_template_part('./components/text-panel.php',['content' => $textPanelSideL]) ;?>

    <?php $sideContentElement = ob_get_clean(); ?>

    <?php get_template_part(('./components/side-content.php'), ['side_content' => $sideContentLeft, 'content' => $sideContentElement]) ?>

    <?php ob_start(); ?>

        <?php get_template_part('./components/text-panel.php',['content' => $textPanelSideR]) ;?>

    <?php $sideContentElement = ob_get_clean(); ?>

    <?php get_template_part(('./components/side-content.php'), ['side_content' => $sideContentRight, 'content' => $sideContentElement]) ?>

    <script src="./script/navbar.js"></script>

</body>
</html>