<?php



function ageCal($name, $birthYear){

    $age = date("Y")-$birthYear;

echo "My name is $name and i am $age years of old";


}

ageCal('Firoz', 1986);


?>
