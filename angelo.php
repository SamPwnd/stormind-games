<?php

function get_template_part($file, $params) {
    ob_start();
    extract($params);
    require $file;
    $text = ob_get_clean();
    echo $text;
}

$cardsimple = [
[
    'classes' => 'cards-simple',
    'image' => './img/180.png',
    'title' => 'DEVELOPMENT',
    'subtitle' => 'We can help you with developing a sequel or an expansion of your video game and  converting the player mode you’ve set to the one of your choice.'
],
[
    'classes' => 'cards-simple',
    'image' => './img/181.png',
    'title' => 'GAME’S CINEMATICS & TRAILER',
    'subtitle' => 'Thanks to the experience gained by the professionals in our team, who have had the chance to prove their skills in the production of CGI films, we can design and create trailers and cinematics for your video game.'
],
[
    'classes' => 'cards-simple',
    'image' => './img/182.png',
    'title' => 'PORTING',
    'subtitle' => 'If you have a finished game for PC, we can port it from PC to PlayStation, Xbox, and Switch, thus making it compatible for consoles.'
]];

$cardsaward = [
    [
        'image' => './img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => 'Awarded to the company whose contribution have proved outstanding for the whole game development scene in Italy and in the International landscape.'
    ],
    [
        'image' => './img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => 'Awarded to the new Italian studio with the best debut game released on the market in 2018.'
    ]

    ];


/**/$postcard = [
    'background-img' => 'height: 480px; background-image: url(../stormind-games/img/postcard.jpg)',
    'class'  => 'post-card--medium',
    'title' => 'BATORA: LOST HAVEN',
    'description' => 'After her expulsion from an all-girls boarding school, the rebellious Jen begins to observe strange occurrences happening at the Ashmann Inn, the hotel where she was sent to serve as one of its maids. As the past comes back to haunt her, will she be able to escape?',
    'caption' => 'COOMING SOON',
    'icons' => [
            '../stormind-games/img/pc.svg',
            '../stormind-games/img/ps.svg',
            '../stormind-games/img/xbox.svg',
            '../stormind-games/img/nintendo.svg',
        ],
    'contentbutton' => '+ SHOW MORE',
];

/*$postcard = [
    'background-img' => 'height: 742px; background-image: url(../stormind-games/img/sfondo2.jpg)',
    'class'  => 'post-card--biggest',
    'title' => 'BATORA:<br> LOST HAVEN',
    'icons' => [
            '../stormind-games/img/pc.svg',
            '../stormind-games/img/ps.svg',
            '../stormind-games/img/xbox.svg',
            '../stormind-games/img/nintendo.svg',
        ],
        'contentbutton' => '+',
];

$postcard = [
    'background-img' => 'height: 360px; background-image: url(../stormind-games/img/littlepostcard.jpg)',
    'class'  => 'post-card--little',
    'title' => 'REMOTHERED:<br> BROKEN PORCELAIN',
    'icons' => [
            '../stormind-games/img/pc.svg',
            '../stormind-games/img/ps.svg',
            '../stormind-games/img/xbox.svg',
            '../stormind-games/img/nintendo.svg',
        ],
        'contentbutton' => '+',
];*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/cardsimple.css">
    <link rel="stylesheet" href="./style/cardsaward.css">
    <link rel="stylesheet" href="./style/postcard.css">
    <title>Document</title>
</head>
<body>

<!--<div class="container">
    <div class="row">
     <div class="col">
     <?php get_template_part( './components/cardsimple.php', [ 'cardsimple' =>$cardsimple[0]])?>
     </div>
     <div class="col">
        <?php get_template_part( './components/cardsimple.php', [ 'cardsimple' =>$cardsimple[1]])?>
     </div>
     <div class="col">
        <?php get_template_part( './components/cardsimple.php', [ 'cardsimple' =>$cardsimple[2]])?>
     </div>
    </div>
</div>
<div class="container">
    <div class="row">
     <div class="col offset-lg-1">
       <?php get_template_part( './components/cardsaward.php', [ 'cardsaward' =>$cardsaward[0]])?>
     </div>
     <div class="col offset-lg-2">
       <?php get_template_part( './components/cardsaward.php', [ 'cardsaward' =>$cardsaward[1]])?>
     </div>
    </div>
</div>
-->
<!-- Little
<div class="container">
    <div class="row">
      <div class="col-6">
        <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard])?>
      </div>
      <div class="col-6">
        <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard])?>
      </div>
    </div>
</div>-->

<!-- Medium
-->
<div class="container">
    <div class="row">
      <div class="col">
        <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard])?>
      </div>
    </div>
</div>
<!-- BIGGEST
<div class="container">
    <div class="row">
      <div class="col">
      <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard])?>
      </div>
    </div>
</div>
-->
</body>
</html>