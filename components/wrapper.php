<?php

?>

<div class="container-fluid <?= $wrapper['classes'] ?>">
    <p class="wrapper__title">
        <?= $wrapper['title'] ?>
    </p>
    <div class="row <?= $wrapper['row_classes'] ?>">
        <?php foreach($wrapper['elements'] as $element): ?>
            <div class="col <?= $element['classes'] ?>">
            <?= $element['content'] ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>