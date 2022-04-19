<?php

?>

<div class="row">
  <?php foreach($content['elements'] as $element): ?>

    <div class="gallery__card col-12 col-md-4 col-lg-3 px-md-3 py-3">
      <div class="gallery__container ratio ratio-1x1">
      <img src="<?= $element?>" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="">
      </div>
    </div>
  <?php endforeach; ?> 
</div>




<div id="modal01" class="modal" onclick="this.style.display='none'">
  <div class="modal__nav">
    <img class="modal__close" src="./assets/icon-Close.svg"></img>
  </div>
  <div class="modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>