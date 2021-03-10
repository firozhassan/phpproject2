<?php

$age = 111;

if( $age <= 12 ){

    echo "Apni ekhono Bacca ";

}else if( $age >= 13 && $age <= 21 ){

    echo " Apni ekhon Kishor";

}
else if( $age >= 22 && $age <= 30 ){

    echo " Apni ekhon Jubok";

}
else if( $age >= 31 && $age <= 45 ){

    echo " Apni ekhon Moddho boyoshi";

}
else if( $age >= 45 && $age <= 100 ){

    echo " Apni ekhon Briddho";

}else {
    echo "sorry Kichu pawa gai nai";
};

?>