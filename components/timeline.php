<?php

    /*
        $timeline=[
        'background' => 'http://stormindgames.com/wp-content/uploads/2021/01/Timeline-scaled.jpg',
        'title' => 'timeline',
        'elements'=>[
            [
                'date' => 'Mar 19, 2020',
                'subtitle' => 'NINTENDO SWITCH AND PS4 RELEASE IN ASIA',
                'description' => 'The game became available in the Asian market, as "Remothered: Tormented Fathers Remastered" on the Nintendo e-Shop, and as “Remothered: Tormented Fathers" on the PlayStation™Store, published by the renowned Japanese company 3goo (Dead by Daylight, Victor Vran: Overkill Edition).',
            ],
            [
                'date' => 'Oct 31, 2019',
                'subtitle' => 'PHYSICAL RELEASE',
                'description' => 'Thanks to a collaboration with video game publisher SOEDESCO, the physical edition of the pure and realistic survival horror game comes out for Nintendo Switch, PS4 and Xbox One.',
            ],
            [
                'date' => 'Sep 6, 2019',
                'subtitle' => 'NINTENDO SWITCH™ RELEASE',
                'description' => 'The game became available for the Nintendo portable console.',
            ],
            [
                'date' => 'Jul 25, 2018',
                'subtitle' => 'PS4 AND XBOX ONE RELEASE',
                'description' => 'Remothered: Tormented Fathers just made its appearance in the consoles world.',
            ],
            [
                'date' => 'Jan 30, 2018',
                'subtitle' => 'PC FULL RELEASE',
                'description' => 'The full version of the game was available to PC players.',
            ],
            [
                'date' => 'Oct 31, 2017',
                'subtitle' => 'STEAM EARLY ACCESS RELEASE',
                'description' => 'Remothered: Tormented Fathers hit the largest digital distribution platform for PC gaming in Early Access.',
            ],
            [
                'date' => 'Jun, 2017',
                'subtitle' => 'BETA VERSION',
                'description' => 'We gave voice to the game characters as we finished the soundtrack with all the activities related to dubbing and subtitles. A near-final release was ready - the beta version was provided to testers.',
            ],
            [
                'date' => 'Dec, 2016',
                'subtitle' => 'ALMOST THERE',
                'description' => 'We delivered cinematic vibes to the game as we produced all the cutscenes. Artificial intelligence and sound effects were also developed and implemented. The alpha version was ready.',
            ],
            [
                'date' => 'Jun, 2016',
                'subtitle' => 'TAKING SHAPE',
                'description' => 'Motion capture technology was used to create animations. By taking advantage of professional actors, we focused on replicating natural movements to make the action utterly realistic. At the end of this process, characters were able to interact with objects and we got a first playable version of the game with preliminary graphics. Furthermore, we developed the first version of the GUI.',
            ],
            [
                'date' => 'Mar, 2016',
                'subtitle' => 'EARLY STEPS',
                'description' => 'March 2016 - At this stage, our 3D artists had finished the preliminary modeling and texturing activities concerning characters and environments. Developers set up the input methods and environment exploration systems that would have been used subsequently in the final product.',
            ],
            [
                'date' => 'Dec, 2015',
                'subtitle' => 'THE BEGINNING',
                'description' => 'The start of our journey together with Darril Arts. The production of Remothered: Tormented Fathers began here.',
            ],
        ],

    ];
    */

?>

<div class="timeline">
   
    <div class="row m-0">
        <div class="col-12 col-md-5 p-0" >
            <div class="timeline__background" style="background-image: url('<?= $timeline['background'] ?>');">

            </div>
        </div>
        <div class="col-10 offset-1 col-md-7 offset-md-0 ">
            <div class="timeline__content">
                <div class="timeline__title">
                    <?= $timeline['title'] ?>
                </div>
                <?php foreach($timeline['elements'] as $element):  ?>
                    <div class="timeline__element">                    
                        <div class="timeline__dot"></div>
                        <div class="timeline__date"><?= $element['date']?></div>
                        <div class="timeline__subtitle"><?= $element['subtitle'] ?></div>
                        <div class="timeline__description"><?= $element['description'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>