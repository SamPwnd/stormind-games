<?php 
?>

<div class="container-fluid bullettin">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
            <div class="col-12 col-md-8 px-3 mb-5">
                <?= $elements ?>
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
                    <?php if(isset($content['latest'])): ?>
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
                    <?php endif;?>    
                </div>
                <div>
                    <?php if(isset($content['related'])): ?>
                        <div class="bullettin__title">
                            related articles
                        </div>
                        <?php foreach($content['related'] as $latest): ?>
                            
                            <div class="bullettin__li">
                                <img src="<?= $latest['image'] ?>" alt="<?= $latest['image'] ?>">
                                <div>
                                    <?= $latest['text'] ?>
                                    <p> <img src="./assets/icon-calendar.svg" alt=""> <?= $latest['date'] ?></p>
                                </div>
                            </div>
                        <?php endforeach;  ?>
                    <?php endif;?>    
                </div>
            </div>
        </div>
        </div>
    </div>

</div>