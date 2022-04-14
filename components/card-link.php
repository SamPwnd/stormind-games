<?php

/* $cardLink = [
    'classes' => 'card-link',
    'image' => './assets/card-link-img.png',
    'link' => '#',
    'title' => 'REMOTHERED: Broken Porcelain',
    'subtitle' => 'UPDATED: Aug 19, 2019',
];
 */
?>

<div class="<?= $classes?> col-4">
    <a href="<?= $link?>">
        <div class="card-link__img-wrapper">
            <img class="w-100" src="<?=$image?>" alt="">
            <img class="card-link__icon" src="<?=$icon?>" alt="">
        </div>
    </a>

    <a href="<?= $link?>"><p class="card-link__title"><?= $title?></p></a>
    <p class="card-link__subtitle"><?= $subtitle?></p>

</div>