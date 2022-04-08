<?php 


    /*
    'class'

    'title'=>[
        'class',
        'content'
    ]

    'subtitle' =>[
        'class',
        'content'
    ]
    */


?>

<div class="<?php echo $class ?>" >
    <h4 class="<?php echo $title['class'] ?>">
        <?php echo $title['content'] ?>
    </h4>
    <div></div>
    <p class="<?php echo $subtitle['class'] ?>">
        <?php echo $subtitle['content'] ?>
    </p>

</div>