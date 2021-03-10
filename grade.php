<?php


function gpa($marks){

    if($marks >= 0 & $marks <= 32){

        echo "You have failed the exam";

    }
    else if($marks >= 33 && $marks <= 45 ){

        echo "You have passed the exam and your GPA is -C";

    }
    else if($marks >= 46 && $marks <= 55 ){

        echo "You have passed the exam and your GPA is C";

    }
    else if($marks >= 56 && $marks <= 65 ){

        echo "You have passed the exam and your GPA is B ";

    }
    
    else if($marks >= 66 && $marks <= 75 ){

        echo "You have passed the exam and your GPA is B+ ";

    }
    else if($marks >= 76 && $marks <= 85 ){

        echo "You have passed the exam and your GPA is -A ";

    }
    else if($marks >= 86 && $marks <= 90 ){

        echo "You have passed the exam and your GPA is A ";

    }
    else if($marks >= 91 && $marks <= 100 ){

        echo "You have passed the exam and your GPA is A ";

    }else{  
        
        echo "nothing found";
    
    }
      


}

gpa(101);


?>