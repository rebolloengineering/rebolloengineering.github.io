<?php
include "webresources/web_custom_.php";

function printhtmlheader()
{
    
    $fecha = new DateTime();
    $timestamp=$fecha->getTimestamp();

    $config = new reConfig();

    echo  <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{$config->name}</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Slab">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/grid.css?{$timestamp}">
</head>

<body class="grid-container">
HTML;
}

function printnavbar()
{
    echo  <<<HTML
<header class="header">
<div class="subheader">
    <div class="logo">
        <a class="logo" style="text-decoration: none;" href="/">Rebollo<br>Engineering</a>
    </div>
    <div style="width: 100%;">
    </div>
    <div class="contactbutton" >
        <a class="btn btn-secondary" role="button" style="color: yellow;" href="mailto:dani@danirebollo.es?subject=contacto">Contacto</a>
    </div>
</div>
</header>
HTML;
}
function printcarousel_2()
{

    $config = new reConfig();
    $carouselarray = array();
    foreach ($config->slidearray as $key => $slideelement) {
        $carray = array();
        $carray['arialabel'] = "arialabel";
        $carray['imgsrc'] = $slideelement['imgsource'];
        $carray['imgalt'] = "imgalt";
        $carray['label'] = "emptylabel";
        $carray['text'] = $slideelement['text'];

        $carouselarray[] = $carray;
    }

    echo  <<<HTML
    <article class="main bk">
        <h1 class="cover-heading" style="color: white;">INGENIERÍA.</h1>
        <p class="lead label" style="color: white; font-style: italic; font-size: 30px;">Prototipo, pequeña producción y producción masiva</p>

        <div id="carouselExampleIndicators" data-interval="5000" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
HTML;

    for ($key = 0; $key < sizeof($carouselarray); $key++) {
        $active = "";
        if ($key == 0)
            $active = "class='active'";
        echo  <<<HTML
                <li data-target="#carouselExampleIndicators" data-slide-to="{$key}" {$active}></li>
HTML;
    }



    echo  <<<HTML
            </ol>
            <div class="carousel-inner">
HTML;

    for ($key = 0; $key < sizeof($carouselarray); $key++) {
        $citem = $carouselarray[$key];

        $active = "";
        if ($key == 0)
            $active = "active";
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
    $config = new reConfig();
    echo <<<HTML
    <article class="services">
    <h2>SERVICIOS</h2>
    <div class="row service-items">
    HTML;

    foreach ($config->servicesarray as $key => $serviceelement) {
        echo <<<HTML
        <div class="col-sm-6 col-md-4 service-item">
            <div class="landing-img ">
                <img src="{$serviceelement['imgsource']}" class="services-img" style=" width: 100%;">
            </div>
            <h4>{$serviceelement['title']}</h4>
            <p class="sectiontext">{$serviceelement['subtitle']}</p>
        </div>
    HTML;
    }

    echo <<<HTML
</div>
</article>
HTML;
}

function printlatestprojects()
{
    $config = new reConfig();
    echo <<<HTML
    <article class="latestprojects">
        <div class="container">
            <div class="row" >
                <div class="col-sm-12 ">
                        <h2>ÚLTIMOS PROYECTOS</h2>
                </div>
                <div class="col-sm-6 text-right">
                    <div style="margin-right: 2rem;">
                                            </div>
                </div>
            </div>

            <div class="row portfolio-items">
    HTML;

    foreach ($config->productsarray as $key => $productelement) {
        echo <<<HTML
                <div class="col-sm-6 col-md-4 projectcards align-self-stretch">
                    <div class="card" style="height: 100%;">
                        <img class="services-img" src="{$productelement['imgsource']}" href="{$productelement['link']}" alt="{$productelement['imgtxt']}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" style="pointer-events: none">{$productelement['title']}</a>
                            </h5>
                            <p class="sectiontext">{$productelement['subtitle']}</p>
                        </div>
                    </div>
                </div>
    HTML;
    }
    echo <<<HTML
            </div>
        </div>
    </article>
    HTML;
}

function printclients()
{
    $config = new reConfig();

    echo <<<HTML
    <article class="clients">
    <div class="subheader" style="display: inline-block;">
    
        <h2>CLIENTES</h2>
        <div class="grid-gallery">
    HTML;

    foreach ($config->clientsarray as $key => $clientelement) {
        echo <<<HTML
            <div class="grid-gallery__item ">
                <img src="{$clientelement['imgsource']}" class="grid-gallery__image" alt="{$clientelement['text']}">
            </div>
    HTML;
    }

    echo <<<HTML
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
function printhtmlend()
{
    echo <<<HTML
        </body>
    </html>
    HTML;
}

?>