

<?php
    /*  per  ora è messa qui per non cancellare l'esempio navbar */

    /*
    $navbar =[
        'classes' => 'navbar',
        'logo' => './assets/logo.svg',  il link andrà cambiato quando si cambierà la posizione del componente
        'navwrapper' => 'navbar__wrapper',
        'navlogo' => 'navbar__logo',
        
    ];

    */

?>

<div class="<?= $navbar['classes'] ?>">
    <div class="<?= $navbar['navwrapper'] ?>">
        <img class="<?= $navbar['navlogo'] ?>" src="<?= $navbar['logo'] ?>" alt="<?= $navbar['logo'] ?>" >

        <?= $content ?>
    </div>
</div>