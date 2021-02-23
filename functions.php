<?php
function getCarDescription(int $year):void {
switch ($year) {
    case $year < 1960: 
        echo "To je fakt veterán!";
        break; 
    case $year < 1990: 
        echo "Auto by na silnici už raději být nemělo";
        break;
    case $year < 2000: 
        echo "Budete platit velkou silniční daň i povinné ručení";
        break;
    case $year < 2010: 
         echo "Navštěvujte servis pravidelně" ;
        break; 
    default:
        echo "Auto je způsobilé";  
}
}
function spz():void {
  $car[0]['SPZ'] = "+56+526+26+5";
  $car[0]['YEAR'] = 2020;
  $car[1]['SPZ'] = "3464123,4156";
  $car[1]['YEAR'] = 2013;
  $car[2]['SPZ'] = "B2872782";
  $car[2]['YEAR'] = 1965;
  $car[3]['SPZ'] = "fant0mas";
  $car[3]['YEAR'] = 1945;
  $car[4]['SPZ'] = "D3f4l7";
  $car[4]['YEAR'] = 2006;
  for($i=0; $i < count($car); $i++) { ?>
   SPZ: <?= $car[$i]['SPZ'] ?> <br>
   <?php getCarDescription($car[$i]['YEAR'])?><br><br>
  <?php } 
}