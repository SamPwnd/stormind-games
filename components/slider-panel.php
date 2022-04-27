

<div class="container-fluid slider-panel">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 ">
            <p class="slider-panel__title"><?= $content['title']?></p>
            <p class="slider-panel__description"><?= $content['description'] ?></p>
        </div>
    </div>
    <div class=" col-12 col-md-10 offset-md-1 slider-panel__wrapper">
        <div class="slider-panel__slider">
            <?php foreach($content['elements'] as $elements ): ?>
                <div class="slider-panel__element">
                    <p><?= $elements['index'] ?></p>
                    <p><?= $elements['title'] ?></p>
                    <span><?= $elements['description'] ?></span>
                </div>

            <?php endforeach;?>
            
        </div>
    </div>
</div>