<?php

include "webresources/web_custom_.php";

function printhtmlheader()
{
echo  <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grid</title>
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Slab">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="grid.css?10">
</head>

<body class="grid-container">
HTML;
}

function printnavbar()
{
echo  <<<HTML
<header class="header">
<div class="logo">
    <a class="logo" style="text-decoration: none;" href="/">Rebollo<br>Engineering</a>
</div>
<div style="
    width: 100%;
">
<div class="contactbutton" >
    <a class="btn btn-secondary" role="button" style="color: yellow;" href="mailto:dani@danirebollo.es?subject=contacto">Contacto</a>
</div>
</header>
HTML;
}
function printcarousel_2()
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

echo  <<<HTML
    <article class="main bk">
        <h1 class="cover-heading" style="color: white;">INGENIERÍA.</h1>
        <p class="lead label" style="color: white; font-style: italic; font-size: 30px;">Prototipo, pequeña producción y producción masiva</p>

        <div id="carouselExampleIndicators" data-interval="5000" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
HTML;

for ($key=0; $key<sizeof($carouselarray);$key++)
{
    $active="";
    if($key==0)
        $active="class='active'";
echo  <<<HTML
                <li data-target="#carouselExampleIndicators" data-slide-to="{$key}" {$active}></li>
HTML;          
}



echo  <<<HTML
            </ol>
            <div class="carousel-inner">
HTML;  

for ($key=0; $key<sizeof($carouselarray);$key++)
{
    $citem=$carouselarray[$key];

    $active="";
    if($key==0)
        $active="active";
    echo  <<<HTML
                <div class="carousel-item {$active}">
                    <img class="d-block w-100" src="{$citem['imgsrc']}" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        {$citem['text']}
                    </div>
                </div>
HTML;  
}
echo  <<<HTML
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </article>
HTML;
}
function printservices()
{
echo <<<HTML
<article class="services">
<h2>SERVICIOS</h2>
<div class="row service-items">
<div class="col-sm-6 col-md-4 service-item">
    <div class="landing-img ">
    <img src="assets/pics/service/sch-1.png" class="services-img" style=" width: 100%;">
    </div>
    <h4>Sólo diseño</h4>
    <p class="sectiontext">Sólo se realiza el diseño de hardware (selección de componentes, diseño de esquemas, PCB, gerber, step, pick and place...). La producción 
        la realiza el cliente.
    </p>
</div>

<div class="col-sm-6 col-md-4 service-item">
    <div class="landing-img ">
    <img src="assets/pics/service/pcba-2.png" class="services-img" style=" width: 100%;">
    </div>
    <h4>MVP</h4>
    <p class="sectiontext">Diseño y fabricación de prototipos con los que validar tu idea. Desde 24h.</p>
</div>
<div class="col-sm-6 col-md-4 service-item">
    <div class="landing-img " >
    <img src="assets/pics/service/haas-1.png" class="services-img" style=" width: 100%;">
    </div>
    <h4>HaaS</h4>
    <p class="sectiontext">Hardware como servicio. <br>Tanto si hemos diseñado todo desde el principio como si partimos de un diseño previo dado, podemos encargarnos
        de todo lo relativo con el hardware y la fabricación para que tú te centres en tu negocio.</p>
</div>
</div>
<!-- <p class="lead"><a class="btn btn-lg btn-secondary" href="mailto:dani@danirebollo.es?subject=contacto">Contáctanos y pide un presupuesto</a></p> -->
</div>
</article>
HTML;
}

function printlatestprojects()
{
    echo <<<HTML
    <article class="latestprojects">
        <div class="container">
            <div class="row" >
                <!-- <h2>PRODUCTS</h2> -->
                <div class="col-sm-12 ">
                        <h2>ÚLTIMOS PROYECTOS</h2>
                </div>
                <div class="col-sm-6 text-right">
                    <div style="margin-right: 2rem;">
                                            </div>
                </div>
            </div>

            <div class="row portfolio-items">
                <div class="col-sm-6 col-md-4 projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                                                <img class="services-img" src="assets/pics/service/egpu-1.png" href="#" alt="Card image cap">
                                                <div class="card-body">
                            <h5 class="card-title">
                                                                <a href="#" style="pointer-events: none">eGPU</a>
                            </h5>
                            <p class="sectiontext">Pantalla tactil a color para sistemas embebidos</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                                                <img class="services-img" src="assets/pics/service/parking-2.png" href="#" alt="Card image cap">
                                                <div class="card-body">
                            <h5 class="card-title">
                                                                <a href="#" style="pointer-events: none">Lector de matrículas</a>
                            </h5>
                            <p class="sectiontext">Abre tu garaje o parking a los vehículos autorizados.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                                                <img class="services-img" src="assets/pics/service/bikelock-1.png" href="#" alt="Card image cap">
                                                <div class="card-body">
                            <h5 class="card-title">
                                                                <a href="#" style="pointer-events: none">Cerradura electrónica de bicis</a>
                            </h5>
                            <p class="sectiontext">Abre el candado de la bici de manera remota</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                        <a href="https://danirebollo.es/Home_files/openlock/index.html">                        <img class="services-img" src="assets/pics/service/openlock01.png" href="#" alt="Card image cap">
                        </a>                        <div class="card-body">
                            <h5 class="card-title">
                                                                <a href="https://danirebollo.es/Home_files/openlock/index.html">Cerradura electrónica 'openlock'</a>
                            </h5>
                            <p class="sectiontext">Controla el acceso a tu vivienda remotamente</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4  projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                                                <img class="services-img" src="assets/pics/service/tas-1.png" href="#" alt="Card image cap">
                                                <div class="card-body">
                            <h5 class="card-title">
                                                                <a href="#" style="pointer-events: none">rDSP</a>
                            </h5>
                            <p class="sectiontext">Mesa de mezclas con control inalámbrico</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                                                <img class="services-img" src="assets/pics/service/nvr.png" href="#" alt="Card image cap">
                                                <div class="card-body">
                            <h5 class="card-title">
                                                                <a href="#" style="pointer-events: none">Home Automation</a>
                            </h5>
                            <p class="sectiontext">Sistema de control domótico y seguridad.<br>Grabación de videocámaras, control de acceso con huella dactilar, balizas bluetooth</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    HTML;
}

function printclients()
{
    echo <<<HTML
    <article class="clients">
        <h2>CLIENTES</h2>
        <div class="grid-gallery">
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/logo_medux.png" class="grid-gallery__image" alt="Image 1">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/logo-ringo.png" class="grid-gallery__image" alt="Image 2">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/electrodrives.png" class="grid-gallery__image" alt="Image 3">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/zooo.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/ioon.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/watchmandoor.png" class="grid-gallery__image" alt="Image 1">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/bestseller.png" class="grid-gallery__image" alt="Image 2">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/lasiesta.png" class="grid-gallery__image" alt="Image 3">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/looper.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/lastbasic.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/raixer.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/mit.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/sandialabs.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/hsr.png" class="grid-gallery__image" alt="Image 4">
            </div>
            <div class="grid-gallery__item ">
                <img src="assets/pics/clients/bhb-1.png" class="grid-gallery__image" alt="Image 4">
            </div> 
        </div>
    </article>
    HTML;
}

function printfoother()
{
    echo <<<HTML
    <footer class="footer">
        <span class="copyright"><!-- Copyright &#169;--> 2017-2022 | Rebollo Engineering | <a href="mailto:dani@danirebollo.es?subject=contacto"><img src="assets/pics/resources/mail.png" style="height: 1em;"></a> | Madrid, España</span>
    </footer>
    HTML;
}
function printwebend()
{
    echo <<<HTML
        </body>
    </html>
    HTML;
}
/* ************************************************************* */
printhtmlheader();
printnavbar();
printcarousel_2();
printservices();
printlatestprojects();
printclients();
printfoother();
printwebend();
?>

