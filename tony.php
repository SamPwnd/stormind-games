<?php

function get_template_part($file, $params)
{
  ob_start();
  extract($params);
  require $file;
  $text = ob_get_clean();
  echo $text;
}

$text_panel = [
  'classes' => 'text-panel',
  'title' => 'What we do',
  'subtitle' => 'We develop premium video games with intense stories and distinctive visual style for PC and consoles.
  Our team consists of experienced professionals specialized in the production of video games and marketing experts.
  We publish our games in full autonomy or by collaborating with top publishers.'
];

$center_logo = [
  'classes' => 'center-logo',
  'image' => 'assets/center-logo.svg'
]


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/bootstrap.min.css">
  <link rel="stylesheet" href="./style/tony.css">
  <title>Tony</title>
</head>

<body>
  <?php get_template_part('./components/text-panel.php', ['text_panel' => $text_panel]) ?>
  <?php get_template_part('./components/center-logo.php', ['center_logo' => $center_logo]) ?>
</body>

</html>