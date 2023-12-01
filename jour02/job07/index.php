<?php
  
$points = array(
            150,  50, // Point 1 (x, y)
            50, 250,  // Point 2 (x, y)
            250,  250 // Point 3 (x, y)
        );
    
$image = imagecreatetruecolor(300, 300);
  
$background_color = imagecolorallocate($image,  0, 153, 0);
   
imagefill($image, 0, 0, $background_color);
 
$image_color = imagecolorallocate($image, 255, 255, 255);
   
imagepolygon($image, $points, 3, $image_color);
   
header('Content-type: image/png');
   
imagepng($image);
?>