
<?php

function get_template_part($file, $params) {
    ob_start();
    extract($params);
    require $file;
    $text = ob_get_clean();
    echo $text;
}


$params = [
   'title' => [
    'class' => 'title',
    'content' => 'lorem ipsum sinet dolor',
   ],

   'subtitle' =>[
       'class' => 'subtitle',
       'content' => 'cammelo mangia la mela',
   ],
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/main.css">
    <title>Document</title>
</head>
<body>
    <button class="btn btn-outline-primary">SUBSCRIBE</button>
    <button class="btn btn-outline-black">SUBSCRIBE</button>

    <p class="title">DEVELOPERS OF INTENSE STORIES</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum non eius in aspernatur suscipit ducimus quae amet nam accusantium consequuntur numquam a tempora quia praesentium, laudantium sint distinctio qui quibusdam?</p>
    <img src="./Vector.svg" alt="">

    <p class="title">ciao </p>

    <div >
        <?php get_template_part('components/componenta.php', $params) ?>
    </div>
</body>
</html>