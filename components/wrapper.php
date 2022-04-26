<?php

?>

<div class="container-fluid wrapper <?= $content['classes'] ?>"  style="background-image: <?= $content['background'] ?>">
    <p class="wrapper__title">
        <?= $content['title'] ?>
    </p>
    <div class="row <?= $content['row_classes'] ?>">
        <?= $elements?>
    </div>
</div>