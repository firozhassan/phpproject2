<?php




function bmiCal($mass, $height){

    $h= $height * 0.3048;
    $bmi= $mass / ($h * $h);

echo "Body Mass = $bmi"; 


}

bmiCal(80, 5.8);


?>