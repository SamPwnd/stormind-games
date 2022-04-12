<?php

require_once('./functions.php');

/* $footer = [
    'classes' => 'footer',
    'credits' => '© 2020  STORMIND S.R.L - P.IVA 05415340875     |     Via Sclafani 40/B - traversa, 95024 Acireale (CT) - ITALY     |     All Rights Reserved.',
    'img-src' => [
        'img-linkdn' => './assets/social-linkdn.svg',
        'img-fb' => './assets/social-Fb.svg',
        'img-tw' => './assets/social-tw.svg',
        'img-ig' => './assets/social-Ig.svg',
        'img-yt' => './assets/social-yt.svg',
    ],
    'img-bw' => './assets/byBiscuitWay.svg',
    'navbar-src' => './components/navbar.php',

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
 */

$navbar =[
    'classes' => 'navbar navbar--open',
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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="<?=$classes ?>">
        <?php ob_start(); ?>
            <ul class="navbar__links " id="navbarNavDropdown">
                <li class="navbar__link"><a href="#">company</a></li>
                <li class="navbar__link"><a href="#">games</a></li>
                <li class="navbar__link"><a href="#">news</a></li>
                <li class="navbar__link"><a href="#">press kit</a></li>
                <li class="navbar__link"><a href="#">careers</a></li>
                <li class="navbar__link"><a href="#">work with us</a></li>
            </ul>
        <?php $navbarContent = ob_get_clean(); ?>

        <?php  get_template_part('./components/navbar.php', ['navbar' => $navbar , 'content' => $navbarContent]); ?>

        <div class="footer-bottom">
            <div class="container">
                <p class="footer__credits"><?=$credits ?></p>
                <div class="footer__socials">
                    <?php foreach($navbar['socials']['icons'] as $icon):?>
                        <img src="<?= $icon ?>" alt="<?= $icon ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="devby">
            <p class="devby__txt">Cooked By</p>
            <img src="<?=$img_bw ?>" alt="">
        </div>
    </div>
    
</body>
</html>