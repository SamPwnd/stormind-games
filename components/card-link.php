<?php

/* $cardLink = [
    'classes' => 'card-link',
    'image' => './assets/card-link-img.png',
    'link' => '#',
    'title' => 'REMOTHERED: Broken Porcelain',
    'subtitle' => 'UPDATED: Aug 19, 2019',
    'icon' => './assets/icon-download.svg',
];
 */
?>

<div class="<?= $content['classes']?>">
    <a href="<?= $content['link']?>">
        <div class="card-link__img-wrapper">
            <img class="w-100" src="<?=$content['image']?>" alt="">
            <img class="card-link__icon" src="<?=$content['icon']?>" alt="">
        </div>
    </a>

    <a href="<?= $content['link']?>"><p class="card-link__title"><?= $content['title']?></p></a>
    <p class="card-link__subtitle"><?= $content['subtitle']?></p>

</div>