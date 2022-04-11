<?php
    function get_template_part($file, $params) {
        ob_start();
        extract($params);
        require $file;
        $text = ob_get_clean();
        echo $text;
    }

    $navbar =[
        'classes' => 'navbar',
        'logo' => './assets/logo.svg',
        'navwrapper' => 'navbar__wrapper',
        'navlogo' => 'navbar__logo',
        
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
    <div class="mp-body">
        <h1>ciao</h1>
        <img src="./assets/logo.svg" alt="">
    </div>

    <?php ob_start(); ?>
        <ul class="navbar__links">
            <li class="navbar__link"><a href="#">company</a></li>
            <li class="navbar__link"><a href="#">games</a></li>
            <li class="navbar__link"><a href="#">news</a></li>
            <li class="navbar__link"><a href="#">press kit</a></li>
            <li class="navbar__link"><a href="#">careers</a></li>
            <li class="navbar__link">
                <a href="#">
                    <img src="./assets/icon-Coop.svg" alt="">
                    work with us
                </a>
            </li>
        </ul>
    <?php $navbar_content = ob_get_clean(); ?>


    <?php  get_template_part('./navbar.php', ['navbar' => $navbar , 'content' => $navbar_content]); ?>
    

    
</body>
</html>