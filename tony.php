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

$article = [
  [
    'classes' => 'article article-accordion',
    'image' => 'assets/antonio-cannata.jpg',
    'title' => 'ANTONIO CANNATA',
    'subtitle' => 'Co-Founder & CEO',
    'content-up' => 'CEO and Co-Founder of the company, is in charge of the company marketing strategies and business development, with a focus on brand building and deal-making with publishers and investors.
    <br><br> After graduating in Computer Engineering, he devoted his full time work to combine business',
    'content-down' => 'and video games, his two passions. Following a professional training abroad, that paved the way for bringing his own company to life with the right conditions, he started operating in the entertainment industry, and after two years, together with Federico Laudani, he founded Stormind Games.<br><br>In the last 8 years, Antonio has specialized in the videogame industry for PC and Consoles. His enthusiastic leadership and his contribution in managing the company with the aim to always raise the bar have been awarded with the “Management Star” Award from DStars in 2020, the award dedicated to Italian excellences in the game development industry, for his outstanding contribution in managing a game studio.'
  ],
  [
    'classes' => 'article article-accordion',
    'image' => 'assets/federico-laudani.jpg',
    'title' => 'FEDERICO LAUDANI',
    'subtitle' => 'Co-Founder & Art Director',
    'content-up' => 'Co-Founder and Art Director of Stormind Games, is in charge of art direction, lighting, look development and post-production.
    <br><br>After earning a master’s degree in 3D and Graphic Design, he kick-started his career as Art Director,  specializing in CGI.',
    'content-down' => 'In 2010, he opened a small CGI studio, working mainly on commercials, short films, and 4D movies for the entertainment industry. This experience got him ready for focusing his effort on creating his own company together with Antonio Cannata, in the entertainment industry first, and then in the video game industry, giving birth to Stormind Games.<br><br> In the last 11 years, Federico has worked on 30+ productions and now supervises the production department of the company to ensure everything goes off without a hitch.'

  ]
];

$accordion = [
  [
    'classes' => 'accordion accordion-accordion',
    'title' => 'FUNCTIONAL TESTER',
    'text-description' => '<span>Job Description:</span><br>
      The functional tester is a very important member of the production team. He executes tests to ensure the user of the application will have an optimal experience. The tester helps the development team to find bugs, refine the user experience and support the development process.<br><br>

      <span>Responsibilities:</span> <br>
      Execute specific tests as required by the production team and the lead tester;
      Perform tests against the established procedures;
      Discover bugs, find clear reproductions steps and enter this information in the bug database;
      <br><br>
      <span>Qualifications Requirements:</span>
      1 year of experience in quality assurance, preferably on applications
      Possess a good knowledge of computer software and software development;
      <br><br>
      <span>Detail oriented:</span><br>
      Be articulate and a team player<br>
      Have a good understanding of spoken and written English.'
  ],
  [
    'classes' => 'accordion accordion-accordion',
    'title' => 'FUNCTIONAL TESTER',
    'text-description' => '<span>Job Description:</span><br>
      The functional tester is a very important member of the production team. He executes tests to ensure the user of the application will have an optimal experience. The tester helps the development team to find bugs, refine the user experience and support the development process.<br><br>

      <span>Responsibilities:</span> <br>
      Execute specific tests as required by the production team and the lead tester;
      Perform tests against the established procedures;
      Discover bugs, find clear reproductions steps and enter this information in the bug database;
      <br><br>
      <span>Qualifications Requirements:</span>
      1 year of experience in quality assurance, preferably on applications
      Possess a good knowledge of computer software and software development;
      <br><br>
      <span>Detail oriented:</span><br>
      Be articulate and a team player<br>
      Have a good understanding of spoken and written English.'
  ],
  [
    'classes' => 'accordion accordion-accordion',
    'title' => 'FUNCTIONAL TESTER',
    'text-description' => '<span>Job Description:</span><br>
      The functional tester is a very important member of the production team. He executes tests to ensure the user of the application will have an optimal experience. The tester helps the development team to find bugs, refine the user experience and support the development process.<br><br>

      <span>Responsibilities:</span> <br>
      Execute specific tests as required by the production team and the lead tester;
      Perform tests against the established procedures;
      Discover bugs, find clear reproductions steps and enter this information in the bug database;
      <br><br>
      <span>Qualifications Requirements:</span>
      1 year of experience in quality assurance, preferably on applications
      Possess a good knowledge of computer software and software development;
      <br><br>
      <span>Detail oriented:</span><br>
      Be articulate and a team player<br>
      Have a good understanding of spoken and written English.'
  ]
];

$side_panel_2 = [
  'classes' => 'side_panel_2',
  'image' => 'assets/Dev-Company.jpg'
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
  <?php for ($i = 0; $i < count($text_panel); $i++) get_template_part('./components/text-panel.php', ['content' => $text_panel[$i]]) ?>


  <?php for ($i = 0; $i < count($center_logo); $i++) get_template_part('./components/center-logo.php', ['center_logo' => $center_logo[$i]]) ?>

  <div class="container">
    <?php for ($i = 0; $i < count($article); $i++) get_template_part('./components/article.php', ['article' => $article[$i]]) ?>
  </div>
  <div class="container">
    <?php for ($i = 0; $i < count($accordion); $i++) get_template_part('./components/accordion.php', ['accordion' => $accordion[$i]]) ?>
  </div>

  <?php get_template_part('./components/side-panel-2.php', ['side_panel_2' => $side_panel_2]) ?>
  <script src="./script/accordion.js"></script>
  <!-- <script src="./script/article.js"></script> -->

</body>

</html>