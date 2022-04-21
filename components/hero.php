<?php

    /*
        $hero =[
        'classes' => 'hero',
        'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/our-games-1.mp4',

    ];
    */


?>


<div class="hero">
    <video  alt="Video" height="100%"  muted  loop>
        <source src="<?= $hero['video'] ?>" type="video/mp4">
    </video>

    <div class="hero__content">
        
        <?= $content ?>
        
    </div>
</div>


