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
    'title' => 'REMOTHERED <br>BROKEN<br> PORCELAIN',
    'subtitle' => 'WILL BE RELEASED IN SUMMER 2020',
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
    'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/Cover-remothered-BP.jpg',
    'background-classes' => 'col-12 col-md-5 offset-md-1 p-0',
    'content-classes' => 'col-10 offset-1 col-md-5',
];
$text_panel_side=[
    [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'GAME OVERVIEW',
        'subtitle' => 'We are developing the second title of the saga: Remothered: Broken Porcelain. <br><br>

        Broken Porcelain brings an abundance of welcome changes to the series, introducing new gameplay and storytelling elements that breathe new life into the characters and an unprecedented level of immersion in this haunting adventure – perfect for both new and returning fans to the series.
        The truths buried in the Ashmann Inn will not be discovered easily - its many mysteries are intertwined and guarded by the looming threat of the stalkers, powerful hunters trapped in time and the confines of its walls. Survival will take more than just quick reactions as a strategic and resourceful approach will quickly become critical in this haunting adventure. Be smart - knowing the best time to sneak, flee or fight imminent dangers can quickly make the hunters become the hunted.<br><br>
        
        The retail and digital versions will be released worldwide on Xbox One, PC, Nintendo Switch, and PlayStation 4 on October 20, 2020.'
    ],
    [
        'classes' => 'text-panel text-panel--dark',
        'title' => 'PLOT',
        'subtitle' => 'After her expulsion from an all-girls’ boarding school, the rebellious Jen suffers an injury attempting to escape from the Ashmann Inn, where she was sent to serve as one of its maids. Together with her new friend and fellow maid, the timid violinist named Linn, they slowly become aware of the manor’s unsettling history. As they begin to observe strange occurrences involving the Inn’s residents, a haunting figure lurking its halls, and sensing an ominous presence from inside the hotel, the duo must escape from their prison with the truth… and their lives.'
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
        'title' => 'THRILLING PSYCHOLOGICAL PLOT',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'REALISTIC SURVIVAL HORROR',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'INTENSE STEALTH GAMEPLAY',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'INVESTIGATE AND ESCAPE',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'CAPTIVATING CHARACTERS',
        'text-description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",             
    ],
    [                    
        'classes' => 'accordion accordion-accordion',
        'title' => 'REAL-TIME CINEMATICS',
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
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
    ],  
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
    ],
    [
        'classes' => 'card-profile ',
        'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/RedNun.png',
        'title' => 'RED NUN',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Belonging to a very small group of cloistered nuns, the Red Nun appears as a threatening figure in red covered by moths and armed with a dangerous spear.

        She is probably the only survivor of a terrifying fire, which destroyed the cloister Cristo Morente.'
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
        'https://stormindgames.com/wp-content/uploads/2021/01/01-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/02-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/08-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/09-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/01-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/02-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/08-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/09-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/01-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/02-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/08-Remothered-BP.png',
        'https://stormindgames.com/wp-content/uploads/2021/01/09-Remothered-BP.png',
        
    ],
];

$timeline=[
    'background' => 'https://stormindgames.com/wp-content/uploads/2021/01/timeline-rbp.png',
    'title' => 'timeline',
    'elements'=>[
        [
            'date' => 'Mar 19, 2020',
            'subtitle' => 'GLOBAL PRESS PREVIEW BETA VERSION',
            'description' => 'A beta version of the gameplay has been shown during a press preview in which the team introduced new abilities and movement options through crafting techniques and anticipated the new Moth Eye ability.',
        ],
        [
            'date' => 'Oct 31, 2019',
            'subtitle' => 'OFFICIAL ANNOUNCEMENT AT GAMESCOM',
            'description' => 'We officially announced the release of Remothered: Broken Porcelain at the Gamescom, organized a closed door hands-off of the Alpha version for the press and launched the Announcement trailer during Gamescom’s press conference.',
        ],
        [
            'date' => 'Sep 6, 2019',
            'subtitle' => 'COLLABORATION WITH MODUS GAMES AND GAME ANNOUNCEMENT AT IVGA',
            'description' => 'During the Italian Video Games Awards, Christina Seelye, Founder & CEO of Maximum Games, officially announced the new episode of Remothered and the collaboration with Modus Games through video.',
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
    'background' => "linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('https://stormindgames.com/wp-content/themes/storemind/storemind/assets/images/placeholder.jpg')",
];

$awards=[
        'image' => './assets/img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => ''
];

$wrapper_partners=[
    'classes' => '',
    'row_classes' => 'row-cols-1 row-cols-md-2 gy-5',
    'title' => 'partners',
    'background' => "",
];

$partners=[
    './assets/Darril.svg',
    './assets/Vector.svg',
    
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
    <title>Remothered: Broken Porcelain - Stormind Games | Developers of Intense Stories</title>
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
                    <div class="col-10 offset-1 col-sm-6 offset-sm-3 col-lg-2 offset-lg-5">
                        <?php get_template_part( './components/card-award-mini.php', [ 'content' =>$awards])?>
                    </div>
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
    <script src="./script/script.js"></script>
</body>
</html>