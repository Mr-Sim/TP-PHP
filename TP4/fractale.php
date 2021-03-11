<?php
/*---------------------------------------------------------------*/
/*
    Titre : Créer des images fractales                                                                                   
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=959
    Date édition     : 15 Fév 2019                                                                                        
    Date mise à jour : 31 Oct 2019                                                                                       
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/


 function mandelbrot($dest , $format){

 /* Paramètres : $src : fichier source 
  * $dest : fichier de destination 
  * $format : format de l'image résultat 
  */
  

    // DEBUT PARAMETRES
    $width=10000 ; $height=5000 ; $max_iter=1280 ; $realmax=20 ;
    $realmin=-20 ; $imagemax=1.5 ; $imagemin=-1.5;
    // FIN PARAMETRES

    $image = imagecreate($width, $height);

    $blue = imagecolorallocate($image, 0x2c, 0x6D, 0xAF);
    $black = imagecolorallocate($image, 0, 0, 0);
    imagefilledrectangle($image, 0, 0, $width, $height, $black); 
    
    $pixelx = 0; // current x position of pixel 
    $pixely = 0; // current y position of pixel 
    $x = 0; // variable for storing curent x value 
    $y = 0; // variable for sturing current y -value 
    $dx = ($realmax-$realmin)/$width; 
    $dy = ($imagemax-$imagemin)/$height; 
    
    $y=$imagemin; 
    for ($pixely = 1; $pixely <= $height; $pixely++) { 
    $x=$realmin; 
    for($pixelx = 1; $pixelx <= $width; $pixelx++) { 
    $fx=0; 
    $fy=0; 
    $m=0; 
    while((($fx*$fx+$fy*$fy)<4) && ($m < $max_iter)) { 
    $old_x = $fx; 
    $fx = $fx*$fx - $fy*$fy + $x; 
    $fy = 2*$old_x*$fy+$y; 
    $m++; 
    } 
    if($m != $max_iter) { 
    imagesetpixel($image, $pixelx, $pixely, $blue); 
    } 
    $x+=$dx; 
    } 
    $y+=$dy; 
    } 
    
    $format = strtoupper($format); 
    if ($format == "GIF") 
    { 
    if (imagetypes() & IMG_GIF) 
    imagegif($image, $dest);
    else 
    return FALSE; 
    } 
    else if ($format == "JPG") 
    { 
    if (imagetypes() & IMG_JPG) 
    imagejpeg($image, $dest);
    else 
    return FALSE; 
    } 
    else if ($format == "PNG") 
    { 
    if (imagetypes() & IMG_PNG) 
    imagepng($image, $dest);
    else 
    return FALSE; 
    } 
    else if ($format == "WBMP") 
    { 
    if (imagetypes() & IMG_WBMP) 
    imagewbmp($image, $dest);
    else 
    return FALSE; 
    } 
    else return FALSE; 
    return TRUE;
}

    mandelbrot("imgname.jpg" , "jpg");
?>
<img src="imgname.jpg" alt="" border="0" />

