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

    $timeline=[
        'background' => 'http://stormindgames.com/wp-content/uploads/2021/01/Timeline-scaled.jpg',
        'title' => 'timeline',
        'elements'=>[
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    
    <title>Document</title>
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
            <!-- qui si chiama il componente textpanel -->
            <p class="hero__bottom">
                <img src="./assets/scroll-down-arrow.svg" alt="down">
                <a href="#">Scroll Down</a>
            </p>
        </div>
    <?php $heroContent = ob_get_clean(); ?>

    <?php get_template_part('./components/hero.php', ['hero' => $hero, 'content' => $heroContent]); ?>
    
    <div>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum quos ducimus blanditiis dolores possimus, ex ipsam nostrum! Eius porro modi eaque nisi atque nemo! Mollitia rerum quis eius! Laudantium, nulla?
    </div>

    <?php get_template_part('./components/timeline.php',['timeline' => $timeline]) ;?>
    
    <div>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum quos ducimus blanditiis dolores possimus, ex ipsam nostrum! Eius porro modi eaque nisi atque nemo! Mollitia rerum quis eius! Laudantium, nulla?
    </div>


    <script src="./script/navbar.js"></script>
</body>
</html>