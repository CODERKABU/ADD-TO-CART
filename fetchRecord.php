<?php

    $sr = $_POST["srno"];
    $ph = urldecode($_POST["phno"]);
    $c = $_POST["cmp"];
    if($sr==1 && $ph=="9825557616" && $c=="Procter & gamble")
    {

            echo "Welcome Mr. Jay";
    }
    else if($sr==2 && $ph=="9825557617" && $c=="AB & cmp")
    {

            echo "Welcome Mr. Ajay";
    }
    else
    {
          echo "Good night!";
    }


?>