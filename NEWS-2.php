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
    'classes' => 'hero hero--mini',
    'image' => 'https://stormindgames.com/wp-content/uploads/2021/01/Hero-image-News-scaled.jpg',

];
$text_panel_hero=[
    'classes' => 'text-panel ',
    'title' => 'News',
    'subtitle' => 'Read to see what we have been up to!'
];

$bullettin = [
    'categories' =>[
        'news',
        'video',
    ],
    'tags' =>[
        '#REMOTHERED #BROKEN PORCELAIN #BROKEN PORCELAIN #REMOTHERED ',
    ],
    'latest' =>[
        [
            'image' => './assets/img/bullettin_1.png',
            'text' => 'Developers of Intense Stories.',
            'date' => 'Aug 19, 2019',
        ],
        [
            'image' => './assets/img/bullettin_1.png',
            'text' => 'Developers of Intense Stories.',
            'date' => 'Aug 19, 2019',
        ],
        [
            'image' => './assets/img/bullettin_1.png',
            'text' => 'Developers of Intense Stories.',
            'date' => 'Aug 19, 2019',
        ],
        
    ],
    'related' =>[
        [
            'image' => './assets/img/bullettin_1.png',
            'text' => 'Developers of Intense Stories.',
            'date' => 'Aug 19, 2019',
        ],
        [
            'image' => './assets/img/bullettin_1.png',
            'text' => 'Developers of Intense Stories.',
            'date' => 'Aug 19, 2019',
        ],
        [
            'image' => './assets/img/bullettin_1.png',
            'text' => 'Developers of Intense Stories.',
            'date' => 'Aug 19, 2019',
        ],
        
    ]
    
];

$news = [
    'classes' => 'news-expanded',
    'image' => './assets/news.png',
    'link' => '#',
    'date' => 'AUG 19, 2019',
    'category' => 'NEWS',
    'tag' => 'Remothered | Broken Porcelain',
    'content' => 'ciao',
    
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
    <title>News-2</title>
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
            <?php ob_start() ?>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <img src="./assets/news-1.png" alt="news-1">
                <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img src="./assets/news.png" alt="news">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <?php $news['content'] = ob_get_clean() ?>
            
            <?php ob_start()?>
                <?php get_template_part(('./components/news-expanded.php'), ['content' => $news]) ?>
            <?php $bullettin_elements = ob_get_clean() ?>

            
            <?php get_template_part(('./components/bullettin.php'), ['content' => $bullettin,  'elements' => $bullettin_elements]) ?>
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
<script src="./script/navbar.js"></script>
<script src="./script/slider-simple.js"></script>
<script src="./script/galery.js"></script>
<script src="./script/accordion.js"></script>
</body>
</html>