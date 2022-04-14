<?php

?>


    <div class="post-card">
        <h3 class="post-card__title"><?= $postcard['title'] ?></h3>
        <div class="post-card__description"><?= $postcard['description'] ?></div>
        <div class="post-card__caption"><?= $postcard['caption'] ?></div>
        <img class="post-card__icons" src="<?= $postcard['icons'][0] ?>" alt="">
        <img class="post-card__icons" src="<?= $postcard['icons'][1] ?>" alt="">
        <img class="post-card__icons" src="<?= $postcard['icons'][2] ?>" alt="">
        <img class="post-card__icons" src="<?= $postcard['icons'][3] ?>" alt="">
    </div>