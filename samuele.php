<?php
    require_once('./functions.php');

    $cardProfile = [
        'classes' => 'card-profile col-4',
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

    $cardLink = [
        'classes' => 'card-link',
        'image' => './assets/card-link-img.png',
        'link' => '#',
        'title' => 'REMOTHERED: Broken Porcelain',
        'subtitle' => 'UPDATED: Aug 19, 2019',
        'icon' => './assets/icon-download.svg',
    ];

    $news = [
        'classes' => 'news',
        'image' => './assets/news.png',
        'link' => '#',
        'date' => 'AUG 19, 2019',
        'category' => 'NEWS',
        'tag' => 'Remothered | Broken Porcelain',
        'text_panel' => [
            'classes' => 'text-panel text-panel--small-title text-panel--dark',
            'title' => 'DEVELOPERS OF INTENSE STORIES',
            'subtitle' => 'We developed and promoted Remothered: Tormented Fathers. We are currently working on the second title, Remothered: Broken Porcelain, and on a new unannounced project.'
        ],
    ];

    $application = [
        'classes' => 'application',
        'text_panel' => [
            'classes' => 'text-panel text-panel--small-title text-panel--black',
            'title' => 'FUNCTIONAL TESTER',
        ],

    ]
    

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

    <?php get_template_part('./components/card-profile.php', ['content' => $cardProfile]); ?>

    <?php get_template_part('./components/footer.php', $footer); ?>

    <?php get_template_part('./components/card-link.php', ['content' => $cardLink]); ?>
    
    <?php get_template_part('./components/news.php', ['content' => $news]); ?>

    <?php get_template_part('./components/application.php', ['content' => $application]); ?>

    <script src="./script/navbar.js"></script>
    <script src="./script/bootstrap.min.js"></script>
</body>
</html>