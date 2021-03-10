<?php


function lalSobuj($color = null){


if ($color == 'লাল'){

    echo "<h1 style= 'color:red';> My name is Firoz  </h1>";
}
else if ($color == 'সবুজ'){

    echo "<h1 style= 'color:green';> My name is Firoz </h1>";
}
else if ($color == 'হলুদ'){

    echo "<h1 style= 'color:yellow';> My name is Firoz </h1>";
}
else if ($color == 'বেগুনি'){

    echo "<h1 style= 'color:#6a0dad';> My name is Firoz </h1>";
}
else if ($color == 'কাল'){

    echo "<h1 style= 'color:black';> My name is Firoz </h1>";
}else{

    echo "<h1> Kono color pawa gai nai </h1>";
}

}

lalSobuj('বেগুনি');

?>