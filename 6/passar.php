<?php
if(isset($_GET["vai1"]))
{
   $passar = fopen('/var/www/trogmaiu/public_html/temp/dados.sh', 'a');
   fwrite($passar, '/usr/bin/xterm -e /usr/bin/docker run -ti ubuntu');
   fclose($passar);
   //shell_exec( '/usr/bin/xterm -e /var/www/trogmaiu/public_html/temp/dados.sh' );
echo "wwww";
}
?>
