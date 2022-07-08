<?php
class reConfig
{
    public $name="Rebollo Engineering";
    public $namewrapped="Rebollo<br>Engineering";

    public $enableblog=0;
    public $enableproductspage=0;
    public $enableservicespage=0;

    public $year="2017-2022";

    public $slidearray=array(
        array(
            'imgsource'=>'assets/pics/service/mch-1.png?',
            'text'=>'<h1>Diseño e integración de mecánica y electrónica</h1>'
        ),
        array(
            'imgsource'=>'assets/pics/service/prot-2.png',
            'text'=>'<h1>Prototipado rápido</h1>'
        ),
        array(
            'imgsource'=>'assets/pics/service/flex-1.png?',
            'text'=>'<h1>Fabricación de cables FLEX</h1>'
        ),
        array(
            'imgsource'=>'assets/pics/service/analisys-1.png',
            'text'=>'<h1>Testeo, laboratorio, ingeniería inversa</h1>'
        ),
        array(
            'imgsource'=>'assets/pics/service/pcba-4.png',
            'text'=>'<h1>Integración, diseño multiplaca</h1>'
        ),
        array(
            'imgsource'=>'assets/pics/service/log-2.png',
            'text'=>'<h1>Gestión logística. Fabricación y envío</h1>Envíos internacionales. Electrónica, mecánica, postprocesado'
        ),
        array(
            'imgsource'=>'assets/pics/service/firmware-1.png',
            'text'=>'<h1>Programación de firmware</h1><br>MCU: ARM, PIC/PIC32, MSP430'
        )
    );
    
    public function printsliderscript()
    {
        echo "
        <script>
        var display_status='none';
        var slides=[];
        ";
        $count=1;
        foreach ($this->slidearray as $array)
        {
            echo "var s".$count."=document.getElementById('myslide".$count."');
            slides.push(s".$count.");
            ";
            $count++;
        }
        echo "

var counter=0;

function changeslide()
{
    console.log('counter: '+counter);
    if (counter>=slides.length)
        counter=0;

    for (var i = 0; i < slides.length; i+=1) 
    {
        if(counter==i)
        {
            slides[i].style.display = '';
        }
        else
        {
            slides[i].style.display = 'none';
        }
    }

    counter++;        
    setTimeout(function(){
    changeslide();
    }, 3000);
}

changeslide();

</script>
        ";
    }
}   


?>