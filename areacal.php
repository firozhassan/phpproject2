<?php


function areaCal ($length=null, $width= null, $type= 'r'){

    if($type == 'r'){
        
        $area= $length * $width;

        echo "Area = $area";

    }

    else if($type == 's'){
        
        $area= $length * $length;

        echo "Area = $area";

    }
    else if($type == 'c'){
        
        $area= 3.14 * ($length * $length) ;

        echo "Area = $area";

    }else{
        echo "sorry your key is wrong";
    }




}

areaCal(120, 70, 's');


?>