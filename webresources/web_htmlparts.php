<?php
include "web_custom.php";
include "web_custom_.php";


function printheader()
{
    $config = new reConfig();
    echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>'.$config->name.'</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link rel="shortcut icon" type="image/x-icon" href="assets/pics/resources/refav.png">
<!--        
    <link rel="stylesheet" media="all" href="assets/style1.css?13" data-turbolinks-track="reload">
 
    <link rel="stylesheet" media="screen" href="assets/css.css">
-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans JP">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Slab">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body data-action="home" data-controller="pages">
    ';
}

function printnavbar()
{
    $config = new reConfig();
    $enablebutton=0;
    
    echo '

    <!--
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>
    -->
    <header class="site-header sticky-top " > <!-- py-1 -->
    <nav class="container navbar navbar-expand-sm navbar-dark bg-faded fixed-top">
      <a class="navbar-brand" href="/">'.$config->namewrapped.'</a>
      ';

      if($enablebutton)
      echo '<button class="navbar-toggler" data-target="#menus" data-toggle="collapse" type="button">
      <span class="navbar-toggler-icon"></span>
      </button>';
      
      echo '<div class="collapse navbar-collapse" id="menus">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">
            <!-- <li class="nav-item active"><a class="nav-link" href="0-landing.html">Inicio</a></li> -->';
            if($config->enableservicespage)
            {
            echo '<li class="nav-item"><a class="nav-link" href="6-services.html">Servicios</a></li>';
            }
            echo '<!-- <li class="nav-item"><a class="nav-link" href="7-portfolio.html">Portfolio</a></li> -->';

            if($config->enableproductspage)
            {
            echo '<li class="nav-item"><a class="nav-link" href="1-store.html">Productos</a></li>';
            }
            if($config->enableblog)
            {
              echo '<li class="nav-item "><a class="nav-link" href="2-blog.html">Blog</a></li>';
            }
            echo '
            <!-- <li class="nav-item "><a class="nav-link" href="3-0-login.html">My panel</a></li>
            <li class="nav-item"><a class="nav-link" href="0-landing.html">Logout</a></li> -->
            
        </ul>
      </div>
      <a class="btn btn-secondary " role="button" style="color: yellow;" href="mailto:dani@danirebollo.es?subject=contacto">Contacto</a>
    </nav>
    </header>
<!-- END HEADING -->
    ';
}



function printfoother()
{
    $config = new reConfig();

    echo '
    <div class="footer-section endbar copyright" style="margin: 0rem;background-color: #004677; color: white;"> <!-- height: 4rem; -->
    <span class="copyright">
    <h3><b>Clientes</b></h3>

    <div class="CSSgal0">

        <div class="gallery">
          <img src="assets/pics/clients/logo_medux.png" class="gallery__img" alt="Image 1">
          <img src="assets/pics/clients/logo-ringo.png" class="gallery__img" alt="Image 2">
          <img src="assets/pics/clients/electrodrives.png" class="gallery__img" alt="Image 3">
          <img src="assets/pics/clients/zooo.png" class="gallery__img" alt="Image 4">
          <img src="assets/pics/clients/ioon.png" class="gallery__img" alt="Image 4">
        </div>
        <div class="gallery">
        <img src="assets/pics/clients/watchmandoor.png" class="gallery__img" alt="Image 1">
        <img src="assets/pics/clients/bestseller.png" class="gallery__img" alt="Image 2">
        <img src="assets/pics/clients/lasiesta.png" class="gallery__img" alt="Image 3">
        <img src="assets/pics/clients/looper.png" class="gallery__img" alt="Image 4">
        <img src="assets/pics/clients/lastbasic.png" class="gallery__img" alt="Image 4">
        </div>
        <div class="gallery">
        <img src="assets/pics/clients/raixer.png" class="gallery__img" alt="Image 4">
        <img src="assets/pics/clients/mit.png" class="gallery__img" alt="Image 4">
        <img src="assets/pics/clients/sandialabs.png" class="gallery__img" alt="Image 4">
        <img src="assets/pics/clients/hsr.png" class="gallery__img" alt="Image 4">
        <img src="assets/pics/clients/bhb-1.png" class="gallery__img" alt="Image 4">
      </div>
  
</div>

    </span>
    </div>
    <div class="footer-section" style="margin: 0rem;background-color: black;color: white; height: 4rem;">

    <span class="copyright"><!-- Copyright &#169;--> '.$config->year.' | '.$config->name.' | <a href="mailto:dani@danirebollo.es?subject=contacto"><img src="assets/pics/resources/mail.png" style="height: 1em;"/></a> | Madrid, España</span>
</div>
    ';
}

function printwebend()
{
    echo '
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    </html>
    ';
}

function printslider()
{
    global $slides;

    $config = new reConfig();
    
foreach($config->slidearray as $key => $slideelement)
{
    echo '
    <div class="row" id="myslide'.($key+1).'"  style="padding: 10px 10px 10px;">

                                <div id="slideimg" class="col-sm-6 text-left" style="
                                background-image: url('.$slideelement['imgsource'].'); 
                                background-size: 100%;
                                background-repeat: no-repeat;
                                background-position: center;

                                display:table;
                                height:300px;
                                width:auto;
                                max-width:500px;
                                ">
                                    <div> </div>
                                </div>   
                                <div id="slidetext" class="col-6" style="color: white; padding: 0px 100px 0px;">
                                        '.$slideelement['text'].'
                                </div>

                            </div>
                            ';
}
}

function printcarousel_1()
{
    $config = new reConfig();
    $carouselarray=array();
    foreach($config->slidearray as $key => $slideelement)
    {
        $carray=array();
        $carray['arialabel']="arialabel";
        $carray['imgsrc']=$slideelement['imgsource'];
        $carray['imgalt']="imgalt";
        $carray['label']="emptylabel";
        $carray['text']=$slideelement['text'];

        $carouselarray[]=$carray;
    }

    printcarousel($carouselarray);
}
//$item['target'], $item['arialabel'], $item['imgsrc'], $item['imgalt'], $item['label'], $item['text']
function printcarousel($carousel_items)
{
    $id="carouselExampleCaptions";
    echo '
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <div id="'.$id.'" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
    ';

    $key=0;
    foreach ($carousel_items as $item)
    {
        $activetext='';
        if($key==0)
            $activetext='class="active" aria-current="true"';
        echo '<button type="button" data-bs-target="'.$id.'" data-bs-slide-to="'.$key.'" '.$activetext.' aria-label="'.$item['arialabel'].'"></button>';
            $key++;
    }
    echo '
        </div>
        <div class="carousel-inner">
    ';
    $key=0;
    foreach ($carousel_items as $item)
    {
        $activetext='';
        if($key==0)
            $activetext='active';
        echo '<div class="carousel-item "'.$activetext.'>
                <img src="'.$item['imgsrc'].'" class="d-block w-100" alt="'.$item['imgalt'].'">
                <div class="carousel-caption d-none d-md-block">
                  <h5>'.$item['label'].'</h5>
                  <p>'.$item['text'].'</p>
                </div>
            </div>
        ';
            $key++;
    }
echo '
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#'.$id.'" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#'.$id.'" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
';

}
?>