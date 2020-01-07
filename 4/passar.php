	 <?php
   $passar = fopen('/var/www/trogmaiu/public_html/dados.sh', 'a');
   fwrite($passar, '/usr/bin/xterm -e /usr/bin/docker run -ti ubuntu');
   fclose($passar);
   ?>