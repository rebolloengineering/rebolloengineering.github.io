<?php 
include "webresources/web_htmlparts.php"; 
include "webresources/web_custom.php";
include_once "webresources/web_custom_.php";

$config = new reConfig();

printheader();
printnavbar();
?>    

    <div class="header-section"> <!-- style="mask-image: linear-gradient(to left, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%);
  -webkit-mask-image: linear-gradient(to left, rgba(0,0,0,0) 0%,rgb(255 255 255) 70%);" -->
        <div class="header-section-inner">
            <div class="container">
                <div class="cover-container">
                    <div class="cover">
                        <h1 class="cover-heading" style="color: white;">INGENIERÍA.</h1>
                        <p class="lead label" style="color: white;">Prototipo, pequeña producción y producción masiva</p>
                        <!-- <h1 class="cover-heading" style="color: white;">
                        CONVIRTIENDO BUENAS IDEAS EN PRODUCTOS FÍSICOS
                        </h1> -->
                    </div>
                </div>
                <div>
                    <div>
                        <div class="container" style="height: 100%">
                        <?php
                        printslider();
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-section">
        <div class="container">
            <div class="row">
                <h2>SERVICIOS</h2>
            </div>
            <div class="row service-items">
                <div class="col-sm-6 col-md-4 service-item">
                    <div class="landing-img">
                    <img src="assets/pics/service/sch-1.png" style=" width: 100%;"/>
                    </div>
                    <h4>Sólo diseño</h4>
                    <p>Sólo se realiza el diseño de hardware (selección de componentes, diseño de esquemas, PCB, gerber, step, pick and place...). La producción 
                        la realiza el cliente.
                    </p>
                </div>

                <div class="col-sm-6 col-md-4 service-item">
                    <div class="landing-img">
                    <img src="assets/pics/service/pcba-2.png" style=" width: 100%;"/>
                    </div>
                    <h4>MVP</h4>
                    <p>Diseño y fabricación de prototipos con los que validar tu idea. Desde 24h.</p>
                </div>
                <div class="col-sm-6 col-md-4 service-item">
                    <div class="landing-img">
                    <img src="assets/pics/service/haas-1.png" style=" width: 100%;"/>
                    </div>
                    <h4>HaaS</h4>
                    <p>Hardware como servicio. <br>Tanto si hemos diseñado todo desde el principio como si partimos de un diseño previo dado, podemos encargarnos
                        de todo lo relativo con el hardware y la fabricación para que tú te centres en tu negocio.</p>
                </div>
            </div>
            <!-- <p class="lead"><a class="btn btn-lg btn-secondary" href="mailto:dani@danirebollo.es?subject=contacto">Contáctanos y pide un presupuesto</a></p> -->
        </div>
    </div>
    <div class="portfolio-section">
        <div class="container">
            <div class="row" style="padding: 50px 0 0px;">
                <!-- <h2>PRODUCTS</h2> -->
                <div class="col-sm-6 text-left">
                    <div style="margin-left: 2rem; color: #333; /* font-weight: 700; */
                    font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 32px;">
                        <h4>Últimos proyectos</h4>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div style="margin-right: 2rem;">
                        <?php
                        if($enableproductspage)
                        {
                        ?>
                        <h5><a href="1-store.html">Ver todos los productos</a></h5>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row portfolio-items">
            <?php
                foreach ($webproducts->products as $key => $myproduct)
                {
                ?>
                <div class="col-sm-4 align-self-stretch">
                    <div class="card" style="height: 100%;">
                        <?php
                        if($myproduct->link!="" && $myproduct->link!="#")
                        {
                            echo '<a href="'.$myproduct->link.'">';
                        }   
                        ?>
                        <img class="card-img-top" src="<?php  echo $myproduct->imgsrc; ?>" href="#" alt="Card image cap">
                        <?php
                        if($myproduct->link!="" && $myproduct->link!="#")
                        {
                            echo '</a>';
                        }   
                        ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                    if($myproduct->link!="" && $myproduct->link!="#")
                                        $link="";
                                    else
                                        $link='style="pointer-events: none"';
                                ?>
                                <a href=<?php  echo '"'.$myproduct->link.'"'." ".$link; ?>><?php  echo $myproduct->title; ?></a>
                            </h5>
                            <p class="card-text"><?php  echo $myproduct->subtitle; ?></p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div>
        <?php
        if($enableblog)
        {
        ?>
        <div class="container landing-blog">
            <br>
            <div class="row" style="margin-bottom: 3rem; margin-top: 3rem;">
                <div class="col-sm-4" style="text-align: left;">
                    <p class="ti-label u-margin-bottom-6 uppercase"><?php  echo $webarticles->articles[0]->date; ?> | <a id="news_blog" style="color: #777;" href="<?php  echo $webarticles->articles[0]->categorylink; ?>"><?php  echo $webarticles->articles[0]->category; ?></a></p>
                    <div class="u-header-3 u-header-underline" style="font-size: 1.7rem; margin-bottom: 2.5rem;"><a
                            class="u-color-grey8" href=""><?php  echo $webarticles->articles[0]->title; ?></a></div>

                            <div style="content: '\00a0';/* position: absolute; *//* bottom: 0; */display: block;width: 7em;height: 2px;background-color: #004677;margin-bottom: 2rem;"></div>

                    <div class="ti_h-para u-margin-bottom-8">
                        <p><?php  echo $webarticles->articles[0]->subtitle; ?></p>
                    </div>
                    <a href="#" type="button" class="btn btn-primary">Read more</a>
                </div>
                <div class="col-sm-8">
                    <div class="ti_p-col-8 ti_p-col-tablet-12 ti_p-col-phone-12 u-flex-item mod-reorder-tablet">
                        <image class="img-responsive" style="max-width: 100%;"
                            href="https://news.ti.com/blog/2021/04/28/carmakers-charge-ahead-with-electric-vehicle-powertrain-integration"
                            src="<?php  echo $webarticles->articles[0]->imgsrc; ?>" alt="" class="hydrated"> 
                        </image>
                    </div>
                </div>
            </div>

            <div class="row" style="text-align: left; margin-bottom: 3rem;">
                
                <?php
                foreach ($webarticles->articles as $key => $myarticle)
                {
                    if($key<1)
                        continue;
                ?>
                <div class="col-sm">
                    <div class="ti_h-blog-item ti_p-col-4 u-padding-right-l">
                        <p class="ti-label u-margin-bottom-m uppercase"><?php  echo $myarticle->date; ?> | <a id="news_release" style="color: #777;" href="<?php  echo $myarticle->categorylink; ?>"><?php  echo $myarticle->category; ?></a></p>
                        <p class="u-paragraph-large">
                            <a
                                href="<?php  echo $myarticle->link; ?>">
                                <?php  echo $myarticle->title; ?>
                            </a>
                        </p>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <?php
    $config->printsliderscript();
    printfoother();
    printwebend();
    ?>