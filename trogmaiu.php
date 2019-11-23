 <html>
 <head>
     <title>Trogmaiu </title>
<style>

#menu {
 background-color: #25B150;
 border-radius: 90px;
 height: 105px;
}
#menu2 {
 background-color: #25B150;
 width: 200px;
 border-radius: 50px;
}
p { 
text-family: verdana;
align: center;
}
</style>
 </head>
<body>
  <div align="left" id="menu"> 
  <img src="Imagens/TROGMAIU2.jpg" height="50">
  <div id="my_menu" align="right" width="100%" bgcolor="blue" id="painel_login_menu">

      <a href="login.html">Login | </a> 
      <a href="login.html">Painel </a>

  </div>
</div>
  <div align="center">
<br>
     <?php
$passar = fopen('/var/www/trogmaiu.com/public_html/dados.sh', 'a');
fwrite($passar, 'docker search lamp');
fclose($passar);
$execute_host_memory0 = shell_exec( '/var/www/trogmaiu.com/public_html/Memorytotal.sh' );
$execute_host_memory1 = shell_exec( '/var/www/trogmaiu.com/public_html/Memoryfree.sh' );
     echo "Memory_Total_Host: $execute_host_memory0";
     echo "Memory_Free_Host: $execute_host_memory1"; 
?>

</div>

  <div id="menu2" align="left" height="100%"> 
<p>oi </p>
  </div>
<div align="center">
oi
<?php
$filepath = ("/var/www/trogmaiu.com/public_html/resultado.txt");
$resultado1 = fopen("$filepath", "r");   
$buffer = fread($resultado1, filesize($filepath));
fclose($resultado1);
echo($buffer);
?>
</div>
</body>
</html>

