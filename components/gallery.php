<?php

?>

<div class="gallery row">
  <div class="col-12 d-flex justify-content-center">
    <div class="gallery__selectors">
      <a href="#">all</a>
      <a href="#">screenshot</a>
      <a href="#">making of</a>
    </div>
  </div>

  <?php foreach($content['elements'] as $element): ?>
    <div class="gallery__card col-12 col-md-4 col-lg-3 px-md-3 py-3">
      <div class="gallery__container ratio ratio-1x1">
      <img src="<?= $element?>" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="">
      </div>
    </div>
  <?php endforeach; ?> 

  <div class="col-12 d-flex justify-content-center">
    <button class="btn btn-outline-primary gallery__btn">
      <img src="./assets/icon-more.svg" alt="icon-more.svg">  
      show more
    </button>
  </div>
</div>
  





<div id="modal01" class="bw-modal" onclick="this.style.display='none'">
  <div class="bw-modal__nav">
    <img class="bw-modal__close" src="./assets/icon-Close.svg"></img>
  </div>
  <div class="bw-modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>