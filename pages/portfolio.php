

<section id='portfolio' class='portfolio'>

<div>
    <div class='center'>
        <h3>Portfólio</h3>
    </div><!--center-->
</div>


<?php

  
?>

<div class='banner-portfolio' style="background-image: url('imgs_portfolio/3.png');">
<a href="<?php echo INITIAL_PATH ?>clientes/Marcal">
    <div class='saiba_mais right' >
        <h1> <a href="<?php echo  INITIAL_PATH . 'clientes/Marcal' ?>" style="color: whitesmoke;">saiba <br> mais </a> </h1>
    </div><!--saiba_mais--><div class='clear'></div>
</a>
</div><!--banner-portfolio-->

<div class='banner-portfolio' style="background-image: url('imgs_portfolio/Book_Mockup_01.png');">
<a href="<?php echo INITIAL_PATH ?>clientes/Tattoo">
    <div class='saiba_mais right' >
        <h1> <a href="<?php echo  INITIAL_PATH . 'clientes/Tattoo'?>" style="color: whitesmoke;">saiba <br> mais </a> </h1>
    </div><!--saiba_mais--><div class='clear'></div>
</a>
</div><!--banner-portfolio-->

<div class='banner-portfolio' style="background-image: url('imgs_portfolio/graphic.jpeg');">
<a href="<?php echo INITIAL_PATH ?>clientes/Graphic">
    <div class='saiba_mais right' >
        <h1> <a href="<?php echo  INITIAL_PATH . 'clientes/Graphic'?>" style="color: whitesmoke;">saiba <br> mais </a> </h1>
    </div><!--saiba_mais--><div class='clear'></div>
</a>
</div><!--banner-portfolio-->



<div class='mais_projetos'>
    
    <?php 
        if($url == 'home'){ ?>
    <h2> <a href="portfolio" style="color: #101101;"> + projetos </a> </h2>
    <?php }else {
        ?>  <h2> <a href="portfolio?id=1" style="color: #101101;"> + projetos </a> </h2>

        <?php
    }
        ?>

    
</div><!--mais_projetos-->
</section>


