<?php

?>

<div class="container-fluid <?= $wrapper['classes'] ?>">
    <p class="wrapper__title">
        <?= $wrapper['title'] ?>
    </p>
    <div class="row <?= $wrapper['row_classes'] ?>">
        <?php foreach($wrapper['elements'] as $element): ?>
            <div class="col">
                <?php 
                    $component = $element['component'];
                    get_template_part("./components/$component", ['content' => $element['content']]);
                ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>