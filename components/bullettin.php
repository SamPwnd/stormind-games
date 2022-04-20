<?php 
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 px-3">
            <?= $elements ?>
            ciao
        </div>
        <div class="col-12 col-md-4 px-3 bullettin__nav">
            <form action="" >
                <input type="text" placeholder="Search article">
                <button></button>
            </form>
            <div>
                <div class="bullettin__title">
                    categories
                </div>
                <?php foreach($content['categories'] as $cat): ?>
                    <div class="bullettin__li"><?= $cat ?></div>
                <?php endforeach; ?>
                
            </div>
            <div>
                <div class="bullettin__title">
                    tags
                </div>
                <?php foreach($content['tags'] as $tag): ?>
                    <div class="bullettin__li"><?= $tag ?> </div>
                <?php endforeach; ?>
            </div>
            <div>
                <div class="bullettin__title">
                    latest articles
                </div>
                <?php foreach($content['latest'] as $latest): ?>
                    
                    <div class="bullettin__li">
                        <img src="<?= $latest['image'] ?>" alt="<?= $latest['image'] ?>">
                        <div>
                            <?= $latest['text'] ?>
                            <p> <img src="./assets/icon-calendar.svg" alt=""> <?= $latest['date'] ?></p>
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>

</div>