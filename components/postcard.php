<?php

?>
    
    <div class="post-card post-card<?php echo $postcard['class'] ?>" style="<?= $postcard['background-img'] ?>">
        <h3 class="post-card__title">
            <?= $postcard['title'] ?>
        </h3>
        <div class="post-card__description">
            <?= $postcard['description'] ?>
        </div>
        <div class="post-card__caption">
            <?= $postcard['caption'] ?>
        </div>
        <div class="post-card__bottom">
            <div class="post-card__box">
                <img class="post-card__icons" src="<?= $postcard['icons'][0] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard['icons'][1] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard['icons'][2] ?>" alt="">
                <img class="post-card__icons" src="<?= $postcard['icons'][3] ?>" alt="">
            </div>
            <div class="post-card__boxhidden">
                <img class="post-card__icons" src="./assets/platform-pc-whitesvg.svg" alt="">
                <img class="post-card__icons" src="./assets/platform-ps-white.svg" alt="">
                <img class="post-card__icons" src="./assets/platform-xbox-white.svg" alt="">
                <img class="post-card__icons" src="./assets/platform-switch-white.svg" alt="">
            </div>
            <div class="post-card__button">
                <div class="btn btn-outline-primary">
                    <?= $postcard['contentbutton'] ?>
                </div>
            </div>
            <div class="post-card__buttonhidden">
                <div class="btn btn-outline-light">
                    +
                </div>
            </div>
        </div>
    </div>

    







