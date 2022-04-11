<?php

    /*
        $hero =[
        'classes' => 'hero',
        'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/our-games-1.mp4',

    ];
    */


?>


<div class="<?= $hero['classes'] ?>">
    <video  alt="Video" height="100%"  muted autoplay loop>
        <source src="<?= $hero['video'] ?>" type="video/mp4">
    </video>

    <div class="<?= $hero['heroContent'] ?>">
        <?= $content ?>
        
    </div>
</div>


