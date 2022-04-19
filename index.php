
<?php

function get_template_part($file, $params) {
    ob_start();
    extract($params);
    require $file;
    $text = ob_get_clean();
    echo $text;
}

$navbar = [
    'classes' => 'classes',
    'logo' => 'logo'
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
    <script src="./script/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="input-group mb-3 bg-primary">
  <input type="text" class="form-control" placeholder="label" aria-describedby="button-addon2">
  <button class="btn btn-outline-black" type="button" id="button-addon2">SHOW MORE</button>
</div>

<?php ob_start(); ?>
    <ul>
        <li>home</li>
        <li>chi siamo</li>
        <li>cosa facciamo</li>
        <li>contatti</li>
    </ul>
<?php $navbar_content = ob_get_clean(); ?>
    
<?php get_template_part( './components/navbar.php' ,[ 'navbar' =>$navbar ,'content' => $navbar_content]) ?>   
<button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">SEND APPLICATION</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>  
</body>
</html>