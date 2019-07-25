<?php    

    
   
    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    $name=$email;
    $random=rand(10000,99999);
    
    
    $filename = $PNG_TEMP_DIR."$name.png";
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    
     $img=   QRcode::png("$random" , $filename);    
           
    //display generated file
    
    $gen= '<img src="'.$PNG_WEB_DIR.basename($filename).'" height="100" width="100" />';  
   // echo $gen;
    echo date('H:i');


    

    