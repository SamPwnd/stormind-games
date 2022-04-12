<?php
    require_once('./functions.php');

    $cardProfile = [
        'classes' => [
            'card-profile' => 'card-profile col-4'
        ],
        'image' => './assets/card-profile1.png',
        'title' => 'JENNIFER',
        'icon' => './assets/icon-more.svg',
        'icon_hover' => './assets/icon-less.svg',
        'description' => 'Linn is a timid and insecure sixteen-year-old girl with a stutter who works at the Ashmann Inn as a maid. 
            She is definitely not happy with it but she feels somehow attached to the people who live in there.

            Upon Jennifer’s arrival, they became friends right away. 
            However, their budding friendship will be put to test as they navigate the dangers within their new home.'
    ];

    $footer = [
        'classes' => 'footer',
        'credits' => '© 2020  STORMIND S.R.L - P.IVA 05415340875     |     Via Sclafani 40/B - traversa, 95024 Acireale (CT) - ITALY     |     All Rights Reserved.',
        'img_bw' => './assets/byBiscuitWay.svg',

        'socials' => [
            'classes' => 'navbar__socials',
            'icons' =>[
                './assets/social-linkdn.svg',
                './assets/social-Fb.svg',
                './assets/social-tw.svg',
                './assets/social-Ig.svg',
                './assets/social-yt.svg',
            ]
        ],
    ];

    

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/main.css">
    <title>Document</title>
</head>
<body>

    <?php get_template_part('./components/card-profile.php', $cardProfile); ?>

    <?php get_template_part('./components/footer.php', $footer); ?>
    
    <script src="./script/navbar.js"></script>
</body>
</html>