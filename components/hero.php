<?php

    /*
        $hero =[
        'classes' => 'hero',
        'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/our-games-1.mp4',

    ];
    */


?>


<div class=" <?= $hero['classes'] ?>">
    <?php if(isset($hero['video'])):?>
        <video class="hero__video"  alt="Video" height="100%"  muted  loop>
            <source src="<?= $hero['video'] ?>" type="video/mp4">
        </video>
    <?php else:?>
        <img class="hero_image" src="<?= $hero['image']?>" alt="https://stormindgames.com/wp-content/uploads/2021/01/Hero-image-News-scaled.jpg">
    <?php endif ?>    
    <div class="hero__content">
        
        <?= $content ?>
        
    </div>
</div>


