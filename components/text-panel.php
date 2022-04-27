<?php

?>

<div class="<?= $content['classes'] ?>">
  <p class="text-panel__title"><?= $content['title'] ?></p>
  <div class="text-panel__line"></div>
  <p class="text-panel__subtitle"><?= $content['subtitle'] ?></p>
  <?php if(isset($content['icons'])): ?>
    <div class="text-panel__icons bw-mt-72">
      <?php foreach($content['icons'] as $icon): ?>
        <img src="<?= $icon ?>" alt="<?= $icon ?>" class="text-panel__icon">
      <?php endforeach;?>  
    </div>
  <?php endif;?>

</div>