<?php

?>

<div class="<?= $accordion['classes'] ?>">
  <div class="accordion__simple">
    <p class="accordion__title"><?= $accordion['title'] ?></p>
    <div class="cross" id="crosse">
      <img src="assets/cross.svg" alt="">
    </div>
    <div id="less" class="less_acc d-none">
      <img src="assets/meno.svg" alt="">
    </div>
  </div>

  <div id="accordion__submenu" class="alt-0 d-none accordion_submenu">
    <p class="accordion__text"><?= $accordion['text-description'] ?></p>

    <?php if(isset($accordion['application'])): ?>
      <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="<?= $accordion['modal-id'] ?>">SEND APPLICATION</button>
      <?php get_template_part('./components/application.php', ['content' => $accordion['application']]); ?>
    <?php endif;?>
  </div>

</div>