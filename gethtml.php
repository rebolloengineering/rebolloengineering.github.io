<?php
/*
echo "copying assets folder"
sudo rm -rf php-web/www/rebolloengineering/docs/assets
cp -r php-web/www/rebolloengineering/assets php-web/www/rebolloengineering/docs/assets
php gethtml.php
*/

function getRenderedHTML($path)
{
    ob_get_flush();
    ob_start();
    include($path);
    $var=ob_get_contents(); 
    ob_end_clean();
    return $var;
}


$r1=getRenderedHTML("index.php");


$dir = __DIR__ . "/docs"; // Full Path
is_dir($dir) || @mkdir($dir) || die("Can't Create folder");

file_put_contents($dir."/index2.html", $r1);

echo "DIR: ".$dir;

echo $r1;