<?php
    function get_template_part($file, $params) {
        ob_start();
        extract($params);
        require $file;
        $text = ob_get_clean();
        echo $text;
    }

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

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <?php
        get_template_part('./components/card-profile.php', $cardProfile);
    ?>
    
</body>
</html>