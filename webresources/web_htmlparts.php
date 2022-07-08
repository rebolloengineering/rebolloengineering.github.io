<?php
include "web_custom.php";
include "web_custom_.php";

global $webdetails; 

$myname=$webdetails->name;


function printheader()
{
    $config = new reConfig();
    echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>'.$config->name.'</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link rel="shortcut icon" type="image/x-icon" href="assets/refav.png">
    <link rel="stylesheet" media="all" href="assets/style1.css?10" data-turbolinks-track="reload">
    <link rel="stylesheet" media="screen" href="assets/css.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto Sans JP">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Slab">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body data-action="home" data-controller="pages">
    ';
}

function printnavbar()
{
    $config = new reConfig();

    global $webdetails;
    global $enableblog;
    global $enableproductspage;
    global $enableservicespage;
    global $namewr;

    $enablebutton=0;
    $titlee=":".$webdetails->namewrapped;
    
    echo '

    <!--
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>
    -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-faded fixed-top">
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
            if($enableservicespage)
            {
            echo '<li class="nav-item"><a class="nav-link" href="6-services.html">Servicios</a></li>';
            }
            echo '<!-- <li class="nav-item"><a class="nav-link" href="7-portfolio.html">Portfolio</a></li> -->';

            if($enableproductspage)
            {
            echo '<li class="nav-item"><a class="nav-link" href="1-store.html">Productos</a></li>';
            }
            if($enableblog)
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
<!-- END HEADING -->
    ';
}

function printfoother()
{
    global $webdetails;
    echo '
    <div class="footer-section endbar copyright" style="margin: 0rem;background-color: #004677; color: white;"> <!-- height: 4rem; -->
    <span class="copyright">
    <h3><b>Clientes</b></h3>

    <div class="CSSgal0">

        <div class="gallery" >
          <img src="assets/logo_medux.png" class="gallery__img" alt="Image 1">
          <img src="assets/logo-ringo.png" class="gallery__img" alt="Image 2">
          <img src="assets/electrodrives.png" class="gallery__img" alt="Image 3">
          <img src="assets/zooo.png" class="gallery__img" alt="Image 4">
          <img src="assets/ioon.png" class="gallery__img" alt="Image 4">
        </div>
        <div class="gallery" >
        <img src="assets/watchmandoor.png" class="gallery__img" alt="Image 1">
        <img src="assets/bestseller.png" class="gallery__img" alt="Image 2">
        <img src="assets/lasiesta.png" class="gallery__img" alt="Image 3">
        <img src="assets/looper.png" class="gallery__img" alt="Image 4">
        <img src="assets/lastbasic.png" class="gallery__img" alt="Image 4">
        </div>
        <div class="gallery" >
        <img src="assets/raixer.png" class="gallery__img" alt="Image 4">
        <img src="assets/mit.png" class="gallery__img" alt="Image 4">
        <img src="assets/sandialabs.png" class="gallery__img" alt="Image 4">
        <img src="assets/hsr.png" class="gallery__img" alt="Image 4">
        <img src="assets/bhb-1.png" class="gallery__img" alt="Image 4">
      </div>
  
</div>

    </span>
    </div>
    <div class="footer-section" style="margin: 0rem;background-color: black;color: white; height: 4rem;">

    <span class="copyright"><!-- Copyright &#169;--> '.$webdetails->year.' | '.$webdetails->name.' | <a href="mailto:dani@danirebollo.es?subject=contacto"><img src="assets/mail.png" style="height: 1em;"/></a> | Madrid, España</span>
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

foreach($slides->elements as $key => $slideelement)
{
    echo '
    <div class="row" id="myslide'.($key+1).'"  style="padding: 10px 10px 10px;">

                                <div id="slideimg" class="col-sm-6 text-left" style="
                                background-image: url('.$slideelement->imgsource.'); 
                                background-size: 100%;
                                background-repeat: no-repeat;
                                background-position: center;

                                display:table;
                                height:300px;
                                width:auto;
                                max-width:500px;
                                ">
                                    <div > </div>
                                </div>   
                                <div id="slidetext" class="col-6" style="color: white; padding: 0px 100px 0px;">
                                        '.$slideelement->text.'
                                </div>

                            </div>
                            ';
}
}
?>