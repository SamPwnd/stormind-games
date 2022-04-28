

<?php
    /*  per  ora è messa qui per non cancellare l'esempio navbar */

    /*
    $navbar =[
        'classes' => 'navbar',
        'id' => 'navbar1',
        'logo' => './assets/logo.svg',
        'navContainer' => 'container',
        'navWrapper' => ' navbar__wrapper ',
        'navLogo' => 'navbar__logo',
        'button' =>[
            'classes' => 'navbar__button ',
            'id' => 'navbar__button-1',
            'icon1' => './assets/icon-hamburger.svg',
            'icon2' => './assets/icon-Close.svg'
        ]
    ];

    */

?>

<div class="<?= $navbar['classes'] ?>" id="<?= $navbar['id'] ?>">
    <div class="<?= $navbar['navContainer'] ?>">
        <div class="navbar__wrapper">
            <a href="#"><img class="navbar__logo" src="<?= $navbar['logo'] ?>" alt="<?= $navbar['logo'] ?>" ></a>
            
            <?php if(isset($navbar['button']['id'])): ?>
                <button class="navbar__button" id="<?= $navbar['button']['id'] ?>">
                    <img src="<?= $navbar['button']['icon1'] ?>" alt="<?= $navbar['button']['icon1'] ?>">
                    <img src="<?= $navbar['button']['icon2'] ?>" alt="<?= $navbar['button']['icon2'] ?>">
                </button>
            <?php endif; ?>

            <?= $content ?>
            <?php if($navbar['classes'] === 'navbar navbar--footer navbar--opened'): ?>
                <div class="navbar__up">
                    <a class="navbar__up-inner" href="#">
                        <img src="./assets/icon-top.svg" alt="icon-top">
                    </a>
                </div>
            <?php endif;?>
            <div class="navbar__socials">
                <?php foreach($navbar['socials']['icons'] as $icon):?>
                    <img src="<?= $icon ?>" alt="<?= $icon ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>