<?php
    /* $cardProfile = [
        'classes' => [
            'card-profile' => 'card-profile col-4',
            'image' => 'card-profile__img',
            'title' => 'card-profile__title',
            'description-div' => 'card-profile__description-container',
            'title-div' => 'card-profile__title-container',
            'description' => 'card-profile__description',
            'body' => 'card-profile__body',
        ],
        'image' => './assets/card-profile1.png',
        'title' => 'JENNIFER',
        'icon' => './assets/icon-more.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ]; */
?>

<div class="<?=$classes['card-profile'] ?>">
    <img class="card-profile__img" src="<?=$image ?>" alt="">
    <div class="card-profile__body">
        <div class="card-profile__title-container">
            <p class="card-profile__title"><?=$title ?></p>
            <img src="<?=$icon ?>" class="card-profile__icon card-profile__icon--initial" alt="">
            <img src="<?=$icon_hover ?>" class="card-profile__icon card-profile__icon--hover" alt="">
        </div>
        <div class="card-profile__description-container">
            <p class="card-profile__description"><?=$description ?></p>
        </div>
    </div>
    
</div>