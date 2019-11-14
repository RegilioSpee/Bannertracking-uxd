<?php
 $path = 'data.txt';
 if (isset($_POST['naam'])  && isset($_POST['email']) && isset($_POST['bericht'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['naam'].' - '.$_POST['email'].' - '.$_POST['bericht'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file

    echo "Bericht ontvangen u krijgt bericht binnen 48uur! <br> U word doorgestuurd binnen 15seconden!";

 
  header( "refresh:5; url= http://25889.hosts2.ma-cloud.nl/bewijzenmap/periode1.2/pro1/banner-tracking/index.html" ); 
}
  header( "refresh:5; url= http://25889.hosts2.ma-cloud.nl/bewijzenmap/periode1.2/pro1/banner-tracking/index.html" );
?>