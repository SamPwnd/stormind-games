<?php
/* $news = [
    'classes' => 'news',
    'image' => './assets/news.png',
    'link' => '#',
    'date' => 'AUG 19, 2019',
    'category' => 'NEWS',
    'tag' => 'Remothered | Broken Porcelain',
    'text_panel' => [
        'classes' => 'text-panel text-panel--small-title text-panel--dark',
        'title' => 'DEVELOPERS OF INTENSE STORIES',
        'subtitle' => 'We developed and promoted Remothered: Tormented Fathers. We are currently working on the second title, Remothered: Broken Porcelain, and on a new unannounced project.'
    ],
]; */

?>

<div class="<?=$content['classes'] ?> col-8">
    <img src="<?=$content['image'] ?>" alt="">
    <div class="news__icons-wrapper">
        <div class="news__icon-block">
            <img src="./assets/icon-calendar.svg" alt="">
            <p class="news__icon-block__text"><?=$content['date'] ?></p>
        </div>

        <div class="news__icon-block">
            <img src="./assets/icon-folder.svg" alt="">
            <p class="news__icon-block__text"><?=$content['category'] ?></p>
        </div>

        <div class="news__icon-block">
            <img src="./assets/icon-tag.svg" alt="">
            <p class="news__icon-block__text"><?=$content['tag'] ?></p>
        </div>
    </div>

    <?php get_template_part('./components/text-panel.php',['content' => $content['text_panel']]); ?>
</div>

