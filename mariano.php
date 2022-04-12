<?php
    function get_template_part($file, $params) {
        ob_start();
        extract($params);
        require $file;
        $text = ob_get_clean();
        echo $text;
    }

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
            <-- qui si chiama il componente textpanel -->


            <p class="hero__bottom">
                <img src="./assets/scroll-down-arrow.svg" alt="down">
                <a href="#">Scroll Down</a>
            </p>
        </div>
    <?php $heroContent = ob_get_clean(); ?>

    <?php get_template_part('./components/hero.php', ['hero' => $hero, 'content' => $heroContent]) ?>
    
    <div>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum quos ducimus blanditiis dolores possimus, ex ipsam nostrum! Eius porro modi eaque nisi atque nemo! Mollitia rerum quis eius! Laudantium, nulla?
    </div>
    
    <script src="./script/navbar.js"></script>
</body>
</html>