<?php 

?>

<div class="<?=$content['classes'] ?>" >
    <div class="news-expanded__content">
        <?= $content['content'] ?>
    </div>
    

    <div class="news-expanded__icons-wrapper justify-content-between">
        <div class="d-flex gap-3 align-items-center">
            <div class="news-expanded__icon-block">
                <img src="./assets/icon-calendar.svg" alt="">
                <p class="news-expanded__text"><?=$content['date'] ?></p>
            </div>

            <div class="news-expanded__icon-block">
                <img src="./assets/icon-folder.svg" alt="">
                <p class="news-expanded__text"><?=$content['category'] ?></p>
            </div>

            <div class="news-expanded__icon-block">
                <img src="./assets/icon-tag.svg" alt="">
                <p class="news-expanded__text"><?=$content['tag'] ?></p>
            </div>
        </div>

        <div class="d-flex gap-3">
            <a href="#" class="news-expanded__icon"><img src="./assets/social-Fb.svg" alt=""></a>
            <a href="#" class="news-expanded__icon"><img src="./assets/social-tw.svg" alt=""></a>
            <a href="#" class="news-expanded__icon"><img src="./assets/social-linkdn.svg" alt=""></a>
            <a href="#" class="news-expanded__icon"><img src="./assets/social-share.png" alt=""></a>
        </div>
    </div>

    
</div>
