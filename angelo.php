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
    'classbootstrap' => 'col',
    'classes' => 'cardsimple',
    'classtitle' => 'cardssimple__title',
    'classsubtitle' => 'cardssimple__subtitle',
    'image' => './img/180.png',
    'title' => 'DEVELOPMENT',
    'subtitle' => 'We can help you with developing a sequel or an expansion of your video game and  converting the player mode you’ve set to the one of your choice.'
],
[
    'classbootstrap' => 'col',
    'classes' => 'cardsimple',
    'classtitle' => 'cardssimple__title',
    'classsubtitle' => 'cardssimple__subtitle',
    'image' => './img/181.png',
    'title' => 'GAME’S CINEMATICS & TRAILER',
    'subtitle' => 'Thanks to the experience gained by the professionals in our team, who have had the chance to prove their skills in the production of CGI films, we can design and create trailers and cinematics for your video game.'
],
[
    'classbootstrap' => 'col',
    'classes' => 'cardsimple',
    'classtitle' => 'cardssimple__title',
    'classsubtitle' => 'cardssimple__subtitle',
    'image' => './img/182.png',
    'title' => 'PORTING',
    'subtitle' => 'If you have a finished game for PC, we can port it from PC to PlayStation, Xbox, and Switch, thus making it compatible for consoles.'
]];

$cardsaward = [
    [
        'classbootstrap' => 'col offset-lg-1',
        'classes' => 'cardsaward',
        'classtitle' => 'cardsaward__title',
        'classsubtitle' => 'cardsaward__subtitle',
        'image' => './img/awards1.png',
        'title' => 'OUTSTANDING ITALIAN COMPANY 2020',
        'subtitle' => 'Awarded to the company whose contribution have proved outstanding for the whole game development scene in Italy and in the International landscape.'
    ],
    [
        'classbootstrap' => 'col offset-lg-2',
        'classes' => 'cardsaward',
        'classtitle' => 'cardsaward__title',
        'classsubtitle' => 'cardsaward__subtitle',
        'image' => './img/awards2.png',
        'title' => 'BEST NEW STUDIO 2018',
        'subtitle' => 'Awarded to the new Italian studio with the best debut game released on the market in 2018.'
    ]

]



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
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
     <?php for($i=0; $i<3; $i++) get_template_part( './components/cardsimple.php', [ 'cardsimple' =>$cardsimple[$i]])?>
    </div>
</div>
<div class="container">
    <div class="row">
     <?php for($i=0; $i<2; $i++) get_template_part( './components/cardsaward.php', [ 'cardsaward' =>$cardsaward[$i]])?>
    </div>
</div>
<div class="container">
    <div class="row">
     <?php get_template_part( './components/postcard.php', [ 'postcard' =>$postcard])?>
    </div>
</div>
</body>
</html>