<?php
    include('config.php');

?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
    <meta name=description content="Descrição do meu site">
    <meta name="keywords" content='design, broto, design criativo, site, design inteligente, arte'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel='stylesheet' href='<?php echo INITIAL_PATH?>estilo/fontawesome/css/all.min.css'>
    <link rel='stylesheet' href='<?php echo INITIAL_PATH ?>estilo/estilo.css'>

    <title>Broto</title>

    
    
</head>
<body>

    <?php
        /*$logo = INITIAL_PATH . 'imgs/logo_broto.svg';*/
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if($url == 'portfolio' || $url == 'clientes'){
            ?>

                    <style>
        
                    /* header portfolio */
                    .header-dinamico .logo h1 {
                        color: black;
                        margin-top: 8px;
                    }


                    .head {
                        position: fixed;
                        top: 0px;
                        width: 100%;
                        height: 80px;
                        background-color: whitesmoke;
                        overflow-x: hidden;
                    }
                    
                    .head .logo h1 {
                       
                        color: black;
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
                        right: -1%;
                    }
                    .menu-desktop ul li {
                        bottom: -50px !important;
                        color: #101110;

                    }

                    .menu-desktop ul {
                        position: relative;
                        right: 1px;
                    }
                    header .menu-desktop ul li {
                        position: relative;
                        top: -10px; 
                        color: black;
                        font-family: unnaB;
                        font-size: 25px;
            
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
                        margin-left: -25px;
                    }
                    .menu-mobile ul li a{
                        color: black;
                    }

                    header {
                        background-color: whitesmoke;
                    }

                    /*  portfolio  */
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
                        margin-right: 29px;
                    }

                    @media screen and (max-width:580px) {
                        .menu-mobile ul {
                            margin-left: -6%;
                        }
                    }
                    
                </style> 

                <?php
        }

                    switch($url){
                        case 'portfolio':
                            include('pages/portfolio.php');
                         break;
                        
                        
                
        }
        
                

                ?>

        <!--header-dinâmico-->
        <section class='header-dinamico'>
           
            <div class='logo left center'>
            
                <h1>Design</h1>
            </div>

            <div class='menu-desktop right center'>
                <ul>
                    <li> <h3> <a href='<?php echo INITIAL_PATH ?>home'>home</a> </h3></li>
                    <li> <h3> <a href='<?php echo INITIAL_PATH ?>portfolio'> portfólio</a> </h3> </li>
                    <li> <h3> <a href='<?php echo INITIAL_PATH ?>#contato'> contato</a> </h3> </li>
                </ul>

               
            </div>

            
            <div class='clear'></div>
        </section>


    
    <header>
    
        <div class='head'>
         <div class='center'>
                <div class='logo left'>
                    <h1>Design</h1>
                </div><!--logo--><div class='clear'></div>

                <div class='menu-desktop right center'>
                    <div>
                        <ul>
                            <li> <h3> <a href='<?php echo INITIAL_PATH ?>home'>home</a> </h3></li>
                            <li> <h3> <a href='<?php echo INITIAL_PATH ?>portfolio'> portfólio</a> </h3> </li>
                            <li> <h3> <a href='<?php echo INITIAL_PATH ?>#contato'> contato</a> </h3> </li>
                    </ul>
                    </div>
  
                </div>
                <div class='icone-mobile rigth'>
                     <i class="fa fa-bars"></i>
                </div><!--icone-mobile--><div class='clear'></div>
          </div><!--center-->
        </div><!--div head-->

                <div class='menu-mobile'>
                
                    <ul>
                        <li><a  href='<?php echo INITIAL_PATH ?>home'> home </a> </li>
                        <li><a href='<?php echo INITIAL_PATH ?>portfolio'> portfólio </a> </li>
                        <li> <a href="<?php echo INITIAL_PATH ?>#contato"> contato </a></li>
                    </ul>
                
                </div>

        <div class='apresentacao' style='margin: 0 auto'>
        <div class='center'>
              <h1 class='' style='color: whitesmoke; text-align: left;'>Soluções com <br> Design e <br id='br-mobile'> Criatividade</h1>
        </div><!--apresentação-->


        <div class='menu-desktop right center'>
            <ul>
                <li> <h3> <a href="<?php echo INITIAL_PATH ?>home"> home </a>  </h3> </li>
                <li> <h3> <a href="<?php echo INITIAL_PATH ?>portfolio"> portfólio </a></h3></li>
                <li> <h3> <a href="<?php echo INITIAL_PATH ?>#contato"> contato </a></h3></li>

            </ul>

            </div><!--center-->
        </div><!--menu-desktop--><div class='clear'></div>

    
    </header>

        <?php
            if($url == 'home' || $url == 'contato'){
                include_once('pages/portfolio.php');
                include_once('pages/clientes_contato.php');
            } 

            
           
            
        ?>
    

    
    <footer>
        
       
    <div class='logo center'>
        
            
        <div class='midias left center'>
           <a href='https://www.instagram.com/brotocriativo/?hl=pt-br'  target="_blank" rel="noopener noreferrer" style='text-decoration: none'> <img  src='imgs/insta.png'> </a>
           <a href='https://api.whatsapp.com/send?phone=5547992544010&text-OI%C3%A1!%20Estou%20precisando%20de%20um%20servi%C3%A7o%20pra%20minha%20marca' target="_blank" rel="noopener noreferrer" style='text-decoration: none'> <img style='margin-left: 6px;'  src='imgs/whatsapp.png'>  </a> <br>
           <a href='https://www.behance.net/brotocriativo' target="_blank" rel="noopener noreferrer" style='text-decoration: none'> <img style='margin-top: 3px;' src='imgs/behance-1.png'>  </a>
       
        </div><div class='clear'></div>

            <img src='<?php INITIAL_PATH ?>imgs/ICONE-BRANCO-PNG.png' />

            <ul class='right'>
                <li>fulano@design.com</li>
                <li>fulana@design.com</li>
            </ul><div class='clear'></div>
            
    </div> 
            
        
    </footer>



    <script src='<?php INITIAL_PATH ?>js/jquery.js'></script>
    <script src='<?php INITIAL_PATH ?>js/scripts.js'></script>

    <?php if($url != 'home' && $url != 'contato'){
        ?> 
            <script src='<?php INITIAL_PATH ?>js/scroll_header.js'></script>
       <?php
        }
        ?>

        <?php if($url == 'home' || $url == 'contato') { ?>
       
            <script src='<?php INITIAL_PATH ?>js/scroll_header_home.js'></script>


        <?php }

            if($url == 'home'){
        ?>
            <script src='<?php INITIAL_PATH ?>js/center_home.js'></script>

            <?php 
            }
            ?>
          
</body>
</html>