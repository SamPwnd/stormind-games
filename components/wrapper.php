<?php

?>

<div class="container-fluid <?= $content['classes'] ?>">
    <p class="wrapper__title">
        <?= $content['title'] ?>
    </p>
    <div class="row <?= $content['row_classes'] ?>">
        <?php foreach($content['elements'] as $element): ?>
            <div class="<?= $element['classes'] ?>">
                <?php 
                    $component = $element['component'];
                    get_template_part("./components/$component", ['content' => $element['content']]);
                ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>