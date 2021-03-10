<?php





function currencyCov ($amount= null, $currency= null){

if($currency == 'pound'){

    echo "Total=&nbsp" . $amount * 0.0087;

} else if($currency == 'usd'){

    echo "Total=&nbsp" . $amount * 0.012;

} else if($currency == 'canadian'){

    echo "Total=&nbsp" . $amount * 0.015;

}else{

    echo "Kichu pawa gai nai";
}

}

currencyCov(40000, 'canadian');

?>