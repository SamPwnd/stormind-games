<?php

?>


<div class="post-card" style="">
        <h3 class="post-card__title"><?= $postcard['title'] ?></h3>
        <div class="post-card__description"><?= $postcard['description'] ?></div>
        <div class="post-card__caption"><?= $postcard['caption'] ?></div>
        <div class="post-card__bottom">
            <div class="post-card__box">
                <img class="post-card__icons" src="<?= $postcard['icons'][0] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard['icons'][1] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard['icons'][2] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard['icons'][3] ?>" alt="">
            </div>
            <div class="post-card__button">
                <div class="btn btn-outline-primary">
                <?= $postcard['contentbutton'] ?>
                </div>
            </div>
        </div>

    </div>
    <div class="post-card" style="">
        <h3 class="post-card__title"><?= $postcard2['title'] ?></h3>
        <div class="post-card__description"><?= $postcard2['description'] ?></div>
        <div class="post-card__caption"><?= $postcard2['caption'] ?></div>
        <div class="post-card__bottom">
            <div class="post-card__box">
                <img class="post-card__icons" src="<?= $postcard2['icons'][0] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard2['icons'][1] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard2['icons'][2] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard2['icons'][3] ?>" alt="">
            </div>
            <div class="post-card__button">
                <div class="btn btn-outline-primary">
                <?= $postcard2['contentbutton'] ?>
                </div>
            </div>
        </div>

    </div>