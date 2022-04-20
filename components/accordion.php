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
    <p><?= $accordion['text-description'] ?></p>

    <button class="btn btn-outline-primary">SEND APPLICATION</button>
  </div>

</div>