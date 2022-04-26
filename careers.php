<?php 
    require_once('./functions.php');

    $navbar =[
        'classes' => 'navbar',
        'id' => 'navbar1',
        'logo' => './assets/logo.svg',
        'navContainer' => 'container',
        'button' =>[
            'id' => 'navbar__button-1',
            'icon1' => './assets/icon-hamburger.svg',
            'icon2' => './assets/icon-Close.svg'
        ],
        'socials'=>[
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

    $hero =[
        'classes' => 'hero',
        'video' => 'https://stormindgames.com/wp-content/uploads/2021/01/CAREERS-1.mp4',
        
    ];

    $text_panel_hero = [
        'classes' => 'text-panel',
        'title' => 'BUILD YOUR CAREER AT STORMIND GAMES',
        'subtitle' => 'Explore our latest job openings'
    ];

    $wrapper =[
        'classes' => 'mt-md-0 mt-4',
        'row_classes' => 'mt-n4 row-cols-1 row-cols-lg-2',
        'title' => 'JOIN THE TEAM',
        'background' => '',
    ];

    $slider_panel =[

    ];

   /*  $sideContent =[
        'background' => './assets/img/side-content-long.png',
        'left-classes' => 'col-10 offset-1 col-md-5 d-flex align-items-center ',
        'right-classes' => 'col-12 col-md-5 offset-md-1',
    ]; */

    $side_panel =[
        'background' => './assets/img/side-content-long.png',
        'background-classes' => 'col-12 col-md-5 offset-md-1 p-0',
        'content-classes' => 'col-10 offset-1 col-md-5',
    ];
    $text_panel_side=[
        [
            'classes' => 'text-panel text-panel--dark',
            'title' => 'DISCOVER OUR JOB OPPORTUNITIES',            
        ],
    ];
    $accordion_side =[
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
    
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <title>STORMIND GAMES</title>
</head>
<body>
    <main class="careers">
        <section class="mb-1">

        <?php ob_start(); ?>
            <ul class="navbar__links " id="navbarNavDropdown">
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
        <?php $navbarContent = ob_get_clean(); ?>

        <?php  get_template_part('./components/navbar.php', ['navbar' => $navbar , 'content' => $navbarContent]); ?>

        <?php ob_start(); ?>
            <div class="container">
            <?php get_template_part('./components/text-panel.php',['content' => $text_panel_hero]); ?>
                <p class="hero__bottom">
                    <img src="./assets/scroll-down-arrow.svg" alt="down">
                    <a href="#">Scroll Down</a>
                </p>
            </div>
        <?php $heroContent = ob_get_clean(); ?>

        <?php get_template_part('./components/hero.php', ['hero' => $hero, 'content' => $heroContent]); ?>

        </section>

        <section class="careers__description">
            <?php 
                ob_start();  
            ?>        
            <p class="col bw-white-space-preline ">Stormind Games is a fast-growing and award-winning game development studio based in Italy. As of today, Stormind Games has a development team consisting of both internal and external resources whose role spans from the concept to the post-production phase of the game,  and also has an internal marketing team.
 
 Stormind Games offers an innovative environment where people are encouraged to develop their skills so they can perform to the best of their abilities and work towards achieving the goals of the company.</p>
            <p class="col bw-white-space-preline ">Our employees are aware of their own roles: every time a new one is hired and has to be trained, this person is able to quickly learn each step.

Being part of Stormind Games means living within a dynamic, international environment, where you will actively contribute to providing valuable and innovative games that stand out from the rest.

Check out this section to see if there are job openings that match your profile. Otherwise, you can send your spontaneous application.</p>

            <?php
                $wrapper_content = ob_get_clean(); 
            ?>

            <?php get_template_part(('./components/wrapper.php'), ['content' => $wrapper, 'elements' => $wrapper_content]) ?>
        </section>

        <section class="mb-1">
            <?php get_template_part(('./components/slider-panel.php'), ['content' => $slider_panel]) ?>
        </section>

        <section class="mb-1">
            <img class="w-100" src="./assets/img/career-img.png" alt="">
        </section>

        <section class="mb-1">
        <?php ob_start(); ?>
                <?php foreach($text_panel_side as $tps): ?>
                    <div class="bw-mb-72">
                        <?php get_template_part('./components/text-panel.php', ['content' => $tps]); ?>
                    </div>            
                <?php endforeach; ?>    
                <?php foreach($accordion_side as $acc): ?>
                    <div class="bw-mb-72">
                        <?php get_template_part('./components/accordion.php', ['accordion' => $acc]); ?>
                    </div>            
                <?php endforeach; ?> 
                
                <?php foreach($accordion_side as $acc): ?>
                    <div class="bw-mb-72">
                        <?php get_template_part('./components/accordion.php', ['accordion' => $acc]); ?>
                    </div>            
                <?php endforeach; ?> 
                    
            <?php $side_panel_content = ob_get_clean(); ?>
            

            <?php get_template_part(('./components/side-panel.php'), ['content' => $side_panel, 'text' => $side_panel_content]) ?>
        </section>
        </section>
    </main>

    <script src="./script/accordion.js"></script>
</body>
</html>