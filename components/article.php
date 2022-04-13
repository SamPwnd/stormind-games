<?php

?>

<div class="<?= $article['classes'] ?>">
  <div class="title-box">
    <h3><?= $article['title'] ?></h3>
    <p><?= $article['subtitle'] ?></p>
  </div>
  <div class="line"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-5">
        <img src="<?= $article['image'] ?>" alt="">
      </div>
      <div class="col-7"><?= $article['content-up'] ?></div>
      <div class="col-12"><?= $article['content-down'] ?></div>
    </div>
  </div>
  <div class="linkedin">
    <img src="assets/linkedin.svg" alt="">
  </div>
</div>