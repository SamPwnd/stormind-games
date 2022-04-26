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
    'video' => 'https://stormindgames.com/wp-content/uploads/2020/11/Batora-1.mp4',

];
$text_panel_hero=[
    'classes' => 'text-panel ',
    'title' => 'batora: lost heaven',
    'subtitle' => 'Coming 2022'
];

$center_logo_1 =[
    'classes' => 'center-logo',
    'image' => 'https://stormindgames.com/wp-content/uploads/2020/11/Logo-batora-sito-storm-2-1.svg'
];

$side_panel =[
    'background' => 'https://stormindgames.com/wp-content/uploads/2020/11/Batora-Lost-Haven-Cover-Central.jpg',
    'background-classes' => 'col-12 col-md-5 offset-md-1 p-0',
    'content-classes' => 'col-10 offset-1 col-md-5',
];

$text_panel_side=[
    [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'OVERVIEW',
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
        'title' => 'Physical/mental dualism',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'defender or conqueror',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'responsive non-linear narration',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'fast-paced multi-layered combat system',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'retri sci-fi visuals',
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
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/avril.png',
        'title' => 'avril',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/avril.png',
        'title' => 'avril',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/avril.png',
        'title' => 'avril',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/avril.png',
        'title' => 'avril',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/avril.png',
        'title' => 'avril',
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
        'video' => 'https://www.youtube.com/embed/G8xNwyjzMRU',
        'title' => 'physical edition trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/G8xNwyjzMRU',
        'title' => 'switch trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/G8xNwyjzMRU',
        'title' => 'official trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/G8xNwyjzMRU',
        'title' => 'steam early access trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/G8xNwyjzMRU',
        'title' => 'greenlight trailer',
    ],
    [
        'classes' => 'cards-video',
        'video' => 'https://www.youtube.com/embed/G8xNwyjzMRU',
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
        'https://stormindgames.com/wp-content/uploads/2020/11/01-Batora-Lost-Haven-2.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/02-Batora-Lost-Haven-2.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/03-Batora-Lost-Haven-1.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/04-Batora-Lost-Haven-1.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/05-Batora-Lost-Haven-1.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/06-Batora-Lost-Haven-1.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/07-Batora-Lost-Haven.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/08-Batora-Lost-Haven.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/09-Batora-Lost-Haven.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/10-Batora-Lost-Haven.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/11-Batora-Lost-Haven.png',
        'https://stormindgames.com/wp-content/uploads/2020/11/12-Batora-Lost-Haven.png',   
        
    ],
];

$timeline=[
    'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/batora-timeline.png',
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
    <title>Batora</title>
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
                <iframe  width="" height="" src="https://www.youtube.com/embed/G8xNwyjzMRU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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