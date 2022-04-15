<?php

?>

<div class="slider-simple">
    <div class="slider-simple__wrapper">
        <div class="slider-simple__slider">
            <?php foreach($content['elements'] as $element) :?>
                <div class="slider-simple__element">
                    <p class="slider-simple__title">
                        <span><?= $element['vote']?></span>
                        <?= $element['title']?>
                    </p>
                    <p class="slider-simple__description">
                        <?= $element['description']?>
                    </p>
                </div>
            <?php endforeach; ?>    
        </div>
    </div>
    <div class="slider-simple__selectors">
        <div class="slider-simple__dot slider-simple__dot--pressed" ></div>
        <div class="slider-simple__dot" ></div>
        <div class="slider-simple__dot" ></div>
        <div class="slider-simple__dot" ></div>
        <div class="slider-simple__dot" ></div>

    </div>
    
</div>