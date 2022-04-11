<?php
    function get_template_part($file, $params) {
        ob_start();
        extract($params);
        require $file;
        $text = ob_get_clean();
        echo $text;
    }



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
    </div>

    <?php echo get_template_part('nabar', ['ciao' => 'ciao']) ?>
    

    
</body>
</html>