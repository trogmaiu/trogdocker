<?php
$b1 = "IMAGE ID      "; 
$b2 = "549b9b86cb8d  "; 
$b3 = "e764187d25cf  "; 

   if(isset($_GET["vai2"]))
     {
     
      exec("/usr/bin/xterm -e /usr/bin/docker run -ti $b2");
      }



   if(isset($_GET["vai3"]))
     {
     
      exec("/usr/bin/xterm -e /usr/bin/docker run -ti $b3");
      }


 ?> 
