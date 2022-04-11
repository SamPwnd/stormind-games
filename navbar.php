

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
        <div class="<?= $navbar['navWrapper'] ?>">
            <a href="#"><img class="<?= $navbar['navLogo'] ?>" src="<?= $navbar['logo'] ?>" alt="<?= $navbar['logo'] ?>" ></a>
            <button class="<?= $navbar['button']['classes'] ?>" id="<?= $navbar['button']['id'] ?>">
                <img src="<?= $navbar['button']['icon1'] ?>" alt="<?= $navbar['button']['icon1'] ?>">
                <img src="<?= $navbar['button']['icon2'] ?>" alt="<?= $navbar['button']['icon2'] ?>">
            </button>
            <?= $content ?>

            <div class="<?= $navbar['socials']['classes'] ?>">
                <?php foreach($navbar['socials']['icons'] as $icon):?>
                    <img src="<?= $icon ?>" alt="<?= $icon ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>