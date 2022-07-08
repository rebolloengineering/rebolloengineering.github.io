<?php

/* -------------------------------------------- WEB ARTICLES --------------------------------------------*/
$webarticles = new stdClass();
$webarticles->articles=array();

$webacategories = new stdClass();
$webacategories->categories=array();
$category = new stdClass();
$category->name="PRODUCT & TECHNOLOGY NEWS";
$category->link="https://news.ti.com/news-releases/";

$webacategories->categories[]=$category;

$article = new stdClass();
$article->date="Feb 22, 2021";
$article->title="Carmakers charge ahead with electric vehicle powertrain integration";
$article->subtitle="Integrating powertrain systems into a compact mechanical enclosure can lead to more affordable, more efficient electric vehicles (EVs).";
$article->fullentry="";
$article->category=$webacategories->categories[0]->name;
$article->categorylink=$webacategories->categories[0]->link;
$article->link="https://news.ti.com/integrated-grade-0-bldc-motor-driver-shrinks-48-v-motor-drive-systems-as-much-as-30-in-mild-hybrid-electric-vehicles";
$article->imgsrc="webresources/assets/engineering-progress-integrated-power-train-timg.jpg";
$webarticles->articles[0]=$article;

$article0 = new stdClass();
$article0->date="APR 07, 2021";
$article0->title="Industry's first DC/DC controllers with an integrated active EMI filter enable engineers to achieve the smallest low-EMI power designs";
$article0->subtitle="";
$article0->fullentry="";
$article0->category=$webacategories->categories[0]->name;
$article0->categorylink=$webacategories->categories[0]->link;
$article0->link="https://news.ti.com/industrys-first-dcdc-controllers-with-an-integrated-active-emi-filter-enable-engineers-to-achieve-smallest-low-emi-power-designs";
$webarticles->articles[1]=$article0;

$article1 = new stdClass();
$article1->date="Mar 09, 2021";
$article1->title="Texas Instruments challenges students to find ways to make the world safer and healthier in new coding contest";
$article1->subtitle="";
$article1->fullentry="";
$article1->category=$webacategories->categories[0]->name;
$article1->categorylink=$webacategories->categories[0]->link;
$article1->link="https://news.ti.com/texas-instruments-challenges-students-to-find-ways-to-make-world-safer-and-healthier-in-new-coding-contest";
$webarticles->articles[2]=$article1;

$article2 = new stdClass();
$article2->date="Feb 22, 2021";
$article2->title="Grade 0 BLDC motor driver shrinks 48-V motor-drive systems as much as 30% in mild hybrid electric vehicles";
$article2->subtitle="";
$article2->fullentry="";
$article2->category=$webacategories->categories[0]->name;
$article2->categorylink=$webacategories->categories[0]->link;
$article2->link="https://news.ti.com/integrated-grade-0-bldc-motor-driver-shrinks-48-v-motor-drive-systems-as-much-as-30-in-mild-hybrid-electric-vehicles";
$webarticles->articles[3]=$article2;

/* END WEB ARTICLES */

/* -------------------------------------------- WEB PRODUCTS -------------------------------------------- */
$webproducts = new stdClass();
$webproducts->products=array();

$product = new stdClass();
$product->date="Feb 22, 2021";
$product->title="eGPU";
$product->subtitle="Pantalla tactil a color para sistemas embebidos";
$product->fullentry="";
$product->category=$webacategories->categories[0]->name;
$product->categorylink=$webacategories->categories[0]->link;
$product->link="#";
$product->imgsrc="assets/pics/service/egpu-1.png";
$webproducts->products[0]=$product;

$product1 = new stdClass();
$product1->date="Feb 22, 2021";
$product1->title="Lector de matrículas";
$product1->subtitle="Abre tu garaje o parking a los vehículos autorizados.";
$product1->fullentry="";
$product1->category=$webacategories->categories[0]->name;
$product1->categorylink=$webacategories->categories[0]->link;
$product1->link="#";
$product1->imgsrc="assets/pics/service/parking-2.png";
$webproducts->products[1]=$product1;

$product2 = new stdClass();
$product2->date="Feb 22, 2021";
$product2->title="Cerradura electrónica de bicis";
$product2->subtitle="Abre el candado de la bici de manera remota";
$product2->fullentry="";
$product2->category=$webacategories->categories[0]->name;
$product2->categorylink=$webacategories->categories[0]->link;
$product2->link="#";
$product2->imgsrc="assets/pics/service/bikelock-1.png";
$webproducts->products[2]=$product2;

$product3 = new stdClass();
$product3->date="Feb 22, 2021";
$product3->title="Cerradura electrónica 'openlock'";
$product3->subtitle="Controla el acceso a tu vivienda remotamente";
$product3->fullentry="";
$product3->category=$webacategories->categories[0]->name;
$product3->categorylink=$webacategories->categories[0]->link;
$product3->link="https://danirebollo.es/Home_files/openlock/index.html";
$product3->imgsrc="assets/pics/service/openlock01.png";
$webproducts->products[3]=$product3;


$product4 = new stdClass();
$product4->date="Feb 22, 2021";
$product4->title="rDSP";
$product4->subtitle="Mesa de mezclas con control inalámbrico";
$product4->fullentry="";
$product4->category=$webacategories->categories[0]->name;
$product4->categorylink=$webacategories->categories[0]->link;
$product4->link="#";
$product4->imgsrc="assets/pics/service/tas-1.png";
$webproducts->products[4]=$product4;

$product5 = new stdClass();
$product5->date="Feb 22, 2021";
$product5->title="Home Automation";
$product5->subtitle="Sistema de control domótico y seguridad.<br>Grabación de videocámaras, control de acceso con huella dactilar, balizas bluetooth";
$product5->fullentry="";
$product5->category=$webacategories->categories[0]->name;
$product5->categorylink=$webacategories->categories[0]->link;
$product5->link="#";
$product5->imgsrc="assets/pics/service/nvr.png";
$webproducts->products[5]=$product5;

/* END WEB PRODUCTS */

?>