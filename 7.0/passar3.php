<?php
$b1 = "IMAGE ID      "; 
$b2 = "549b9b86cb8d  "; 
$b3 = "e764187d25cf  "; 

   if(isset($_GET["vai2"]))
     {
      $fp = fopen('/var/www/trogmaiu/public_html/scripts/dados.sh', 'w');
      fwrite($fp, "/usr/bin/xterm -e /usr/bin/docker run -ti $b2");
      fclose($fp);       
}



   if(isset($_GET["vai3"]))
     {
      $fp = fopen('/var/www/trogmaiu/public_html/scripts/dados.sh', 'w');
      fwrite($fp, "/usr/bin/xterm -e /usr/bin/docker run -ti $b3");
      fclose($fp);       
}


 ?> 
