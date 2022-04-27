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
        'row_classes' => 'row-cols-1 row-cols-sm-2 row-cols-lg-3',
        'title' => 'AWARDS',
        'background' => './assets/img/placeholder-filter.jpg',
    ];

    $wrapper_elements =[
        [
            'classes' => 'col offset-lg-1',
            'component' => 'cardsaward.php',
            'content' => [
                'image' => './assets/img/awards1.png',
                'title' => 'OUTSTANDING ITALIAN COMPANY <br> 2020',
                'subtitle' => 'Awarded to the company whose contribution have proved outstanding for the whole game development scene in Italy and in the International landscape.'
            ],
        ],
        [
            'classes' => 'col offset-lg-2 mt-5 mt-sm-0',
            'component' => 'cardsaward.php',
            'content' => [
                'image' => './assets/img/awards2.png',
                'title' => 'BEST NEW STUDIO <br> 2018',
                'subtitle' => 'Awarded to the new Italian studio with the best debut game released on the market in 2018.'
            ],
        ],
    ];

    $text_panel_postcard = [
        'classes' => 'text-panel text-panel--center text-panel--dark col-12 col-lg-6',
        'title' => 'GAMES',
        'subtitle' => 'Check our games.'
    ];

    $postcard_biggest = [
        'background-img' => 'height: 742px; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./assets/img/postcard1.jpg)',
        'class'  => '--biggest',
        'title' => 'BATORA:<br> LOST HAVEN',
        'icons' => [
            './assets/img/pc.svg',
            './assets/img/ps.svg',
            './assets/img/xbox.svg',
            './assets/img/nintendo.svg',
            ],
            'contentbutton' => '+',
    ];

    $postcard__little1 = [
        'background-img' => 'height: 360px; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./assets/img/postcard2.jpg)',
        'class'  => '--little',
        'title' => 'REMOTHERED:<br> BROKEN PORCELAIN',
        'icons' => [
                './assets/img/pc.svg',
                './assets/img/ps.svg',
                './assets/img/xbox.svg',
                './assets/img/nintendo.svg',
            ],
            'contentbutton' => '+',
    ];

    $postcard__little2 = [
        'background-img' => 'height: 360px; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./assets/img/postcard3.jpg); background-position-y: 40%',
        'class'  => '--little',
        'title' => 'REMOTHERED:<br> BROKEN PORCELAIN',
        'icons' => [
            './assets/img/pc.svg',
            './assets/img/ps.svg',
            './assets/img/xbox.svg',
            './assets/img/nintendo.svg',
            ],
            'contentbutton' => '+',
    ];

    $text_panel_prefooter = [
        'classes' => 'text-panel text-panel--center text-panel--black col-12 col-lg-8',
        'title' => 'Join Batora: Lost Haven Newsletter',
        'subtitle' => 'Sign up to gain exclusive access to subscriber-only content, game updates, wallpapers, and more!'
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

        <section class="mb-5">
            <?php 
                ob_start(); 
                foreach($wrapper_elements as $element): 
            ?>        
            <div class="<?= $element['classes'] ?>">
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

        <section class="pt-5 mb-5">
            <?php get_template_part('./components/text-panel.php',['content' => $text_panel_postcard]); ?>
        </section>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard_biggest])?>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard__little1])?>
                    </div>
                    <div class="col-md-6 mt-4">
                        <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard__little2])?>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-outline-primary ms-auto me-auto d-block">ALL GAMES</button>

        <section class=" home__newsletter bg-primary pt-5">
            <div class="container pt-5 pb-md-3 mb-5">
                <?php get_template_part('./components/text-panel.php',['content' => $text_panel_prefooter]) ;?>  
                <div class="home__newsletter-list row mt-5">
                    <div class="col-12 col-md-6">
                        <ul>
                            <li>Stay on top of all the latest news on the game</li>
                            <li>Gain access to behind-the-scenes content before anyone else</li>
                            <li>Listen to “Will of the Keeper” from Batora: Lost Haven soundtrack composed by Ron Fish (God of War, Batman Arkham Asylum, and Batman Arkham City)</li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6">
                        <ul>
                            <li>Get the official game wallpaper</li>
                            <li>Have your name appear in Batora: Lost Haven closing credits</li>
                            <li>Get the illustrated storyboard created for the game announcement trailer only accessible to subscribers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <button class="btn btn-outline-black ms-auto me-auto d-block">SUBSCRIBE</button>
            
        </section>

        <footer class="mt-1">
          <?php get_template_part('./components/footer.php', $footer); ?>  
        </footer>
        
    </main>
    
    <script src="./script/navbar.js"></script>
</body>
</html>