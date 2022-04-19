<?php

?>

<div class="<?= $article['classes'] ?>">
  <div class="title-box">
    <h3><?= $article['title'] ?></h3>
    <p><?= $article['subtitle'] ?></p>
  </div>
  <div class="line" id="article_less"></div>
  <div class="plus d-none" id="article_more">
    <img src="assets/plus-article.svg" alt="">
  </div>
  <div id="description" class="container-fluid description-container">
    <div class="row">
      <div class="col-5">
        <img src="<?= $article['image'] ?>" alt="">
      </div>
      <div class="col-7"><?= $article['content-up'] ?></div>
      <div class="col-12"><?= $article['content-down'] ?></div>
    </div>
  </div>
  <div class="linkedin" id="linked">
    <img src="assets/linkedin.svg" alt="">
  </div>
  <div class="line-down" id="line-down-id"></div>
</div>