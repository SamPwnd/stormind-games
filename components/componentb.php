

<div class="<?php echo $class; ?>">
    
    <?php  

        foreach($subparams as $subp){
            get_template_part('components/componenta.php', $subp);
            echo $subp; 
            echo '<h4>component b</h4>';
        }
    ?>    

    <?php echo $subp; ?>
</div>