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
  [
    'classes' => 'text-panel text-panel--center',
    'title' => 'What we do',
    'subtitle' => 'We develop premium video games with intense stories and distinctive visual style for PC and consoles.
    Our team consists of experienced professionals specialized in the production of video games and marketing experts.
    We publish our games in full autonomy or by collaborating with top publishers.'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'INTENSE STORIES',
    'subtitle' => 'All of our games are based on intense stories to open the doors to franchises and sequels.'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'DISTINCTIVE VISUAL STYLE ',
    'subtitle' => 'The visual style of the video games we develop must be distinctive and make them immediately recognizable.'
  ],
  [
    'classes' => 'text-panel text-panel--center',
    'title' => 'PREMIUM GAMES FOR PC & CONSOLES ',
    'subtitle' => 'We focus on the development of premium titles for PC and consoles because they fit perfectly with our core skills..'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'POWERFUL GAME ENGINE ',
    'subtitle' => 'All of our titles are developed on Unreal Engine.'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'MARKETING-FIRST APPROACH',
    'subtitle' => 'Before we start working on a new video game, we always study the market to create games that can be considered unique compared to competitors. They must be suitable to be positioned as distinctive in the players’ minds.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'DEVELOPERS OF INTENSE STORIES',
    'subtitle' => 'We developed and promoted Remothered: Tormented Fathers. We are currently working on the second title, Remothered: Broken Porcelain, and on a new unannounced project.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'WE ARE STORMIND GAMES',
    'subtitle' => 'The video game studio focused on the development of premium games with intense stories and distinctive visual style.'
  ],

  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'OUR STORY',
    'subtitle' => 'Stormind Games was founded in 2016 by Antonio Cannata and Federico Laudani, simultaneously to the announcement of award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game, which is the first title of the Remothered saga.'
  ],
  [
    'classes' => 'text-panel text-panel--center text-panel--dark',
    'title' => 'SERVICES',
    'subtitle' => 'Do you need support for your video game? We can help you with the following development services:'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'OUR GAMES',
    'subtitle' => 'Learn more about video games we developed and projects in our pipeline.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'REMOTHERED Tormented Fathers',
    'subtitle' => 'RELEASE DATE: Jan 30, 2018'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'GAME OVERVIEW',
    'subtitle' => 'We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game.Psychology plays a huge role within the game: heroes and enemies are atypical and the line between good and evil is blurred. The plot is rich in unpredictable twists, and it is touching at the same time. The development of the game is similar to that of a film narration, where the player perfectly identifies himself with the character. The soundtrack, composed by Nobuko Toda (Final Fantasy, Halo, Metal Gear Solid) and Luca Balboni, enhances the terrifying atmosphere of the game. Remothered: Tormented Fathers, is available for PlayStation®4, Xbox One, PC, and Nintendo Switch™. Furthermore, you can find the retail version of the game for Nintendo Switch™, PlayStation®4, and Xbox One.'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'PLOT',
    'subtitle' => 'We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video The story revolves around Rosemary Reed, a fascinating 35-year-old woman, who reaches Richard Felton’s house, in order to investigate the disappearance of a girl called Celeste. The woman is greeted by Gloria, the nurse who takes care of the old Richard. When Dr. Felton understands Rosemary’s true intentions, the dread begins.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'REMOTHERED Broken Porcelain',
    'subtitle' => 'WILL BE RELEASED IN SUMMER 2020'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'BATORA Lost Haven',
    'subtitle' => 'COOMING SOON'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'NEWS',
    'subtitle' => 'H2 copy.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'PRESS KIT',
    'subtitle' => 'Read the press releases, interviews, descriptions and biographies, watch the demos, videos and images from our games.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'BUILD YOUR CAREER AT STORMIND GAMES',
    'subtitle' => 'Explore our latest job openings'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'WORK WITH US',
    'subtitle' => 'Are you interested in working with us or have any inquiries about our services or games?'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'PUBLISHER',
    'subtitle' => 'If you are a publisher willing to know more about our upcoming, unannounced projects or interested in developing a new video game.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'DEVELOPMENT COMPANY',
    'subtitle' => 'If you are a game development company interested in outsourcing or looking for development services.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'PUBLISHER',
    'subtitle' => 'Are you a publisher focused on Premium Games for PC and consoles?'
  ],
  [
    'classes' => 'text-panel text-panel--dark',
    'title' => 'GET IN TOUCH',
    'subtitle' => 'Get in touch with us, one of Stormind Games’ upcoming projects may be your next milestone! We developed and promoted the award-winning Remothered: Tormented Fathers, the pure and realistic survival horror video game, and the second title, Remothered: Broken Porcelain. Now, following the successful model used for the saga, we are working on unannounced titles. We are looking for Publishers who can distribute the game worldwide on PC, PS, XBOX, and Switch, both digital and retail, with a track record in the creation of a fanbase for a new IP and willing to invest in marketing and PR to promote our upcoming video games, and we are also open to co-development opportunities and collaborations.Please fill out the form specifying your request and we’ll get back to you as soon as possible.'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'DEVELOPMENT COMPANY',
    'subtitle' => 'Need help with your video game?'
  ],
  [
    'classes' => 'text-panel',
    'title' => 'GET IN TOUCH',
    'subtitle' => 'Get in touch with us, our game development services could be right up your alley! We can help you with developing a sequel, a remake or an expansion of your video game, porting from PC to PlayStation, Xbox, and Switch and the other way around, creating and designing trailers and cinematics, as well as building your remaster from the ground up or enhancing and updating it to new platforms. Please fill out the form specifying your request and we’ll get back to you as soon as possible.'
  ],
];

$center_logo = [
  [
    'classes' => 'center-logo',
    'image' => 'assets/center-logo.svg'
  ],
  [
    'classes' => 'center-logo',
    'image' => 'assets/batora.svg'
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
  <title>Tony</title>
</head>

<body>
    <?php for ($i = 0; $i < count($text_panel); $i++) get_template_part('./components/text-panel.php', ['text_panel' => $text_panel[$i]]) ?>
    <?php for ($i = 0; $i < count($center_logo); $i++) get_template_part('./components/center-logo.php', ['center_logo' => $center_logo[$i]]) ?>
</body>

</html>