<?php
   $handle = fopen("counter.txt", "r");
      
      if(!$handle){
          
       echo "could not open the file";
       
      }
      else {
         $counter=(int )fread($handle,20);
         fclose($handle);
         $counter++;
         echo" ". $counter  . "" ;
         $handle= fopen("counter.txt", "w" ) ;
         fwrite($handle,$counter) ;
         fclose ($handle) ;
      }
header( "refresh:2;url=onzedesigns.html" );
?>