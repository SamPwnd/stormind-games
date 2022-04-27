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
    'subtitle' => 'RELEASE DATE: Jan 30, 2018',
    'icons' => [
        './assets/platform-steam-yellow.svg',
        './assets/platform-ps-yellow.svg',
        './assets/platform-xbox-yellow.svg',
        './assets/platform-switch-yellow.svg',
    ],
];

$center_logo_1 =[
    'classes' => 'center-logo',
    'image' => 'assets/center-logo.svg'
];

$side_panel =[
    'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/cover-remothered-TF.png',
    'background-classes' => 'col-12 col-md-5 offset-md-1 p-0',
    'content-classes' => 'col-10 offset-1 col-md-5',
];
$text_panel_side=[
    [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'GAME OVERVIEW',
        'subtitle' => 'We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game.<br><br>Psychology plays a huge role within the game: heroes and enemies are atypical and the line between good and evil is blurred. The plot is rich in unpredictable twists, and it is touching at the same time. The development of the game is similar to that of a film narration, where the player perfectly identifies himself with the character. The soundtrack, composed by Nobuko Toda (Final Fantasy, Halo, Metal Gear Solid) and Luca Balboni, enhances the terrifying atmosphere of the game.<br><br> Remothered: Tormented Fathers, is available for PlayStation®4, Xbox One, PC, and Nintendo Switch™. Furthermore, you can find the retail version of the game for Nintendo Switch™, PlayStation®4, and Xbox One.'
    ],
    [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'PLOT',
        'subtitle' => 'We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video The story revolves around Rosemary Reed, a fascinating 35-year-old woman, who reaches Richard Felton’s house, in order to investigate the disappearance of a girl called Celeste. The woman is greeted by Gloria, the nurse who takes care of the old Richard. When Dr. Felton understands Rosemary’s true intentions, the dread begins.'
    ],
    [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'FEATURES',
        'subtitle' => ''
    ],
];
$accordion_side =[
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'PSYCHOLOGICAL PLOT',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'movie-like cutscenes',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'audio clues',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'no health bars',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'realistic puzzles',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'top-notch soundtrack',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'real-time loading',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
]; 

$wrapper_characters =[
    'classes' => 'wrapper--brown',
    'row_classes' => 'row-cols-1 row-cols-md-2 row-cols-lg-3',
    'title' => 'games',
    'background' => '',
];

$character_elements =[
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Rosemary.png',
        'title' => 'rosemary reed',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Rosemary.png',
        'title' => 'rosemary reed',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Rosemary.png',
        'title' => 'rosemary reed',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Rosemary.png',
        'title' => 'rosemary reed',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Rosemary.png',
        'title' => 'rosemary reed',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Rosemary.png',
        'title' => 'rosemary reed',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    
    
];

$wrapper_trailer =[
    'classes' => '',
    'row_classes' => 'row-cols-1 ',
    'title' => 'trailer',
    'background' => '',
];

$wrapper_other_trailers =[
    'classes' => '',
    'row_classes' => 'row-cols-1  row-cols-md-2 row-cols-xl-3',
    'title' => 'other trailers',
    'background' => '',
];

$trailer_elements =[
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/jdj3YPilUP0',
        'title' => 'physical edition trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/jdj3YPilUP0',
        'title' => 'switch trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/jdj3YPilUP0',
        'title' => 'official trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/jdj3YPilUP0',
        'title' => 'steam early acces trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/jdj3YPilUP0',
        'title' => 'greenlight trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/jdj3YPilUP0',
        'title' => 'announcement trailer',
    ],
];

$wrapper_gallery=[
    'classes' => '',
    'row_classes' => '',
    'title' => 'gallery',
    'background' => '',
];

$gallery =[
    'elements' =>[
        'https://stormindgames.com/wp-content/uploads/2020/12/01-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/02-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/03-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/04-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/05-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/06-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/07-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/08-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/09-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/10-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/11-Remothered-TF.png',
        'https://stormindgames.com/wp-content/uploads/2020/12/12-Remothered-TF.png',
        
    ],
];

$timeline=[
    'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/remote-tf-timeline.png',
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

$wrapper_reviews=[
    'classes' => '',
    'row_classes' => '',
    'title' => 'rewiews',
    'background' => '',
];

$reviews=[
    'elements' =>[
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        [
            'vote' => '8.5',
            'title' => 'MULTIPLAYER.it',
            'description' => '“From what we have seen, the atmosphere is already promising and we are truly curious to see how much these guys have improved.”',

        ],
        
    ],
];

$wrapper_awards=[
    'classes' => '',
    'row_classes' => '',
    'title' => 'awards',
    'background' => "linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('http://stormindgames.com/wp-content/uploads/2021/01/Awards-scaled.jpg')",
];

$awards=[
    [
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
    ],
    [
        'image' => './assets/img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => ''
    ],
    
];

$wrapper_partners=[
    'classes' => '',
    'row_classes' => 'row-cols-1 row-cols-md-3 gy-5',
    'title' => 'partners',
    'background' => "",
];

$partners=[
    './assets/Darril.svg',
    './assets/3000.svg',
    './assets/Soedesco.svg',
    
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

    <main>
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
            <?php ob_start(); ?>
                <?php foreach($text_panel_side as $tps): ?>
                    <div class="bw-mb-72">
                        <?php get_template_part('./components/text-panel.php', ['content' => $tps]); ?>
                    </div>            
                <?php endforeach; ?>    
                <?php foreach($accordion_side as $acc): ?>
                    <div class="bw-mb-72">
                        <?php get_template_part('./components/accordion.php', ['accordion' => $acc]); ?>
                    </div>            
                <?php endforeach; ?>    
                    
            <?php $side_panel_content = ob_get_clean(); ?>
            

            <?php get_template_part(('./components/side-panel.php'), ['content' => $side_panel, 'text' => $side_panel_content]) ?>
        </section>
        <section class="mb-1">
            <?php 
                ob_start(); 
                foreach($character_elements as $element): 
            ?>        
                <div class="col bw-mb-32">
                    <?php get_template_part("./components/card-profile.php", ['content' => $element]); ?>
                </div>
            <?php
                endforeach;
                $wrapper_content = ob_get_clean(); 
            ?>
            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_characters, 'elements' => $wrapper_content]) ?>
        </section>
        <section class="mb-1">
            <?php ob_start(); ?>        
                <div class="col ratio ratio-16x9">
                <iframe  width="" height="" src="https://www.youtube.com/embed/jdj3YPilUP0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php $wrapper_content = ob_get_clean(); ?>

            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_trailer, 'elements' => $wrapper_content]) ?>
        </section>
        <section class="mb-1">
            <?php 
                ob_start(); 
                foreach($trailer_elements as $element): 
            ?>        
                <div class="col">
                    <?php  get_template_part("./components/card-video.php", ['content' => $element]);  ?>
                </div>
            <?php
                endforeach;
                $wrapper_content = ob_get_clean(); 
            ?>

            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_other_trailers, 'elements' => $wrapper_content]) ?>
        </section>
        <section class="mb-1">                            
            <?php   $wrapper_content = get_template_text(('./components/gallery.php'), ['content' => $gallery]); ?> 
            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_gallery, 'elements' => $wrapper_content]) ?>
        </section>
        <section class="mb-1">
            <?php get_template_part('./components/timeline.php',['content' => $timeline]) ;?>
        </section>
        <section class="mb-1">
            <?php $wrapper_content = get_template_text(('./components/slider-simple.php'), ['content' => $reviews]); ?> 
               
            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_reviews, 'elements' => $wrapper_content]) ?>
        </section>
        <section class="mb-1">
                <?php ob_start(); ?>
                    <div class="col-12 mb-5">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                            <?php foreach($awards as $award): ?>
                                <div class="col px-5">
                                    
                                    <?php get_template_part( './components/card-award-mini.php', [ 'content' =>$award])?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12 ratio ratio-16x9">
                        <iframe width="" height="" src="https://www.youtube.com/embed/IRF285u5GxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                <?php    $wrapper_content = ob_get_clean();  ?>
            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_awards, 'elements' => $wrapper_content]) ?>
        </section>
        <section class="mb-1">
            <?php ob_start(); foreach($partners as $part): ?>
                <div class="col d-flex justify-content-center">
                    <img src="<?=$part ?>" alt="<?=$part ?>" >
                </div>

            <?php endforeach; $wrapper_content = ob_get_clean(); ?>

            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper_partners, 'elements' => $wrapper_content]) ?>
        </section>

    </main>

    <footer>
        <?php 
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
        <?php get_template_part('./components/footer.php', $footer);  ?>
    </footer>
    <script src="./script/navbar.js"></script>
    <script src="./script/slider-simple.js"></script>
    <script src="./script/galery.js"></script>
    <script src="./script/accordion.js"></script>
</body>
</html>