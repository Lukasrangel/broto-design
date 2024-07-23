<?php

include('../config.php');


$url = ltrim($_GET['cliente']);

if($url == 'Marcal'){
    $img = '../imgs_portfolio/3.png';
}

if($url == 'Tattoo'){
    $img = '../imgs_portfolio/Book_Mockup_01.png';
}

if($url == 'Graphic'){
    $img = '../imgs_portfolio/graphic.jpeg';
}

if(!isset($_GET['cliente'])){
    header('Location:'.INITIAL_PATH);
    die();
}

echo $url;


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name=description content="Descrição do meu site">
    <meta name="keywords" content='design, broto, design criativo, site, design inteligente, arte'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel='stylesheet' href='http://luksdev.tech/estilo/fontawesome/css/all.min.css'>
    <link rel='stylesheet' href='<?php echo INITIAL_PATH ?>estilo/estilo.css'>
    <title>Clientes</title>

    <style>
        /* header portfolio */
                    .head {
                        position: fixed;
                        top: 0px;
                        width: 100%;
                        height: 80px;
                        background-color: whitesmoke;
                        overflow-x: hidden;
                        z-index: 999;
                    }

                    .head .menu-desktop{
                        display: block;
                    }
                
                    .apresentacao {
                        display: none;
                    }

                    .menu-desktop {
                        position: fixed;
                        top: 5px;
                        
                    }
                    .menu-desktop ul li {
                        bottom: -50px !important;
                        color: #101110;

                    }

                    .menu-desktop ul li {
                        position: relative;
                        top: -10px; 
                        color: black;
                        font-family: unnaB;
                        font-size: 25px !important;
            
                    }

                    .head .logo h1 {
                        color: black;
                    }
                    
                    header .menu-desktop ul li h3 a {
                        color: black;
                    }

                    .head .icone-mobile .fas.fa-bars {
                        color: black;
                        font-size: 38px;
                    }

                    .head .icone-mobile .fas.fa-times {
                        color: black;
                        font-size: 38px;
                    }
        
                    .menu-mobile {
                        background-color: whitesmoke;
                        position: fixed;
                        top: -8px;
                        width: 100%;
                        height: 100%;
                        z-index: 5000;
                        color: black;
                        margin-top: 90px;
                        display: none;
                    }

                    .menu-mobile ul {
                        margin-left: -4%;
                    }
                    .menu-mobile ul li a{
                        color: black;
                    }

                    header {
                        background-color: whitesmoke;
                    }

                    /*  portfolio  */

                    section.projeto {
                        margin-top: -250px; 
                                        }
                    section.portfolio {
                        margin-top: 220px;
                    
                    }
                    .banner-portfolio.p2 {
                        width: 130%;
                        height: 390px;
                        background-position: center;
                        background-size: 100%;
                    }
                    

                    section.portfolio .banner-portfolio a {
                        width: 100%;
                        height: 100%;
                        display: block;
                        cursor: pointer;
                    }
                    .saiba_mais {
                        display: none;
                    }


                    /* footer */
                    footer {
                        margin-top: -220px;
                        
                    }

                    footer .logo ul {
                        margin-right: 2%; 
                    }

                    @media screen and (max-width: 1086px) {
                        .nome_cliente h1 {
                            font-size: 60px;
                        }
                    }

                    @media screen and (max-width:580px) {
                        .menu-mobile ul {
                            margin-left: -6%;
                        }

                    }
                    




    </style>
</head>
<body>


<header>
    
    <div class='head'>
     <div class='center'>
            <div class='logo left'>
                <h1>Design</h1>
            </div><!--logo--><div class='clear'></div>

            <div class='menu-desktop clientex center'>
                <div class="center">
                <div>
                    <ul>
                        <li> <h3> <a href='<?php echo INITIAL_PATH ?>home'>home</a> </h3></li>
                        <li> <h3> <a href='<?php echo INITIAL_PATH ?>portfolio'> portfólio</a> </h3> </li>
                        <li> <h3> <a href='<?php echo INITIAL_PATH ?>contato'> contato</a> </h3> </li>
                </ul>
                </div>
                </div><!--center-->

            </div>
            <div class='icone-mobile rigth'>
                 <i class="fas fa-bars"></i>
            </div><!--icone-mobile--><div class='clear'></div>
      </div><!--center-->
    </div><!--div head-->

            <div class='menu-mobile'>
            
                <ul>
                    <li><a  href='<?php echo INITIAL_PATH ?>home'> home </a> </li>
                    <li><a href='<?php echo INITIAL_PATH ?>portfolio'> portfólio </a> </li>
                    <li> <a href="<?php echo INITIAL_PATH ?>contato"> contato </a></li>
                </ul>
            
            </div>

</header>

<div class='fotos'>

<i class='fas fa-times'></i>
<div class='janela'>


    <div class='slide' style="background-image: url('<?php echo $img ?>')"></div>
    


    <div class='setas'>
        <i class="fas fa-angle-left left"></i><div class='clear'></div>
        <i class="fas fa-angle-right right" ></i><div class='clear'></div>
    </div>
</div><!--janela--> 

</div><!--fotos--> 


<section class='projeto' style='margin-top: -480px;'>


<div class='nome_cliente w50 left'>
    <div class='center'>
    

        <h1><?php echo $url; ?></h1>
    </div><!--center-->
</div><!--nome_cliente--><div class='clear'></div>

<div class='textinho w50 right center'>
<div class='center'>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Nullam ullamcorper, lacus a faucibus lacinia, lectus ipsum tempor purus, 
        nec dictum risus mi accumsan risus. Nulla nulla risus, cursus vitae ornare sed, 
        faucibus pharetra nisl. Donec enim diam, pellentesque at ultricies non, 
        rutrum vel mi. Donec auctor ipsum ut lacus maximus faucibus. 
        Nunc fringilla et arcu quis tristique. Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Phasellus sem lacus, pharetra maximus scelerisque 
        vitae, gravida nec magna. Vestibulum vel placerat purus. Aliquam quis auctor eros. 
        Donec ac dolor accumsan, efficitur ligula nec, aliquam nisl. 
    </p>
    </div><!--center-->

</div><!--textinho--><div class='clear'></div>


<div class='banner-portfolio' style='background-image: url(<?php echo $img ?>)'>

</div>





</section>

<section class='outros_projetos'>
<div>
    <div class='center'>
        <h3>Outros projetos</h3>
    </div><!--center-->
</div>
    <br><br><br>

    <i class="fa fa-chevron-left left" aria-hidden="true"></i>
    <i class="fa fa-chevron-right right" aria-hidden="true"></i>
    <div class='clear'></div>
<div class='slider'>
    
   
    <a href='<?php echo INITIAL_PATH . 'clientes/Marcal'?>'>
    <img src='../imgs_portfolio/3.png'>
    </a>

    <a href='<?php echo INITIAL_PATH . 'clientes/Tattoo'?>'>
    <img src='../imgs_portfolio/Book_Mockup_01.png'>
    </a>

    <a href='<?php echo INITIAL_PATH . 'clientes/Graphic'?>'>
    <img src='../imgs_portfolio/graphic.jpeg'>
    </a>
   
   
    
    
</div><!--slider-->
</section>
    


<footer style='margin-top: 150px;'>
        
       
        <div class='logo'>
            <div class='center'>
                
            <div class='midias left center'>
               <a href='' style='text-decoration: none'> <img  src='../imgs/insta.png'> </a>
               <a href='' style='text-decoration: none'> <img style='margin-left: 6px;'  src='../imgs/whatsapp.png'>  </a> <br>
               <a href='' style='text-decoration: none'> <img style='margin-top: 3px;' src='../imgs/behance-1.png'>  </a>
           
            </div><div class='clear'></div>
    
                <img src='<?php echo INITIAL_PATH ?>imgs/ICONE-BRANCO-PNG.png' />
    
                <ul class='right'>
                    <li>fulano@broto.cc</li>
                    <li>fulana@broto.cc</li>
                </ul><div class='clear'></div>
                </div><!--center-->
        </div> 
                
            
        </footer>

        <script src='../js/jquery.js'> </script>
        <script src='../js/scroll_header.js'> </script>
        <script src='../js/scripts.js'> </script>
</body>
</html>