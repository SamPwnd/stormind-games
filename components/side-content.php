<?php 

?>

<div class="side-content container-fluid ">
    <div class="row ">
        <div class="<?= $side_content['left-classes'] ?>">
            <?= $content ?>
        </div>
        <div class="<?= $side_content['right-classes'] ?>" style="background-image: url('<?= $side_content['background'] ?>');">        
        </div>
    </div>
</div>