<!DOCTYPE HTML>
<html lang="pt-br">
<head>
 <title> IMAGES </title>
 <style>

#menu {
 background-color: #25B150;
 border-radius: 90px;
 height: 105px;
   
}
#menu2 {
# background-color: #25B150;
 height: 800px; 
 border-radius: 20px;
 width: 15%;
 float: left;
 text-align: center; 
  
}
p { 
text-family: verdana;
align: center;
}
bloco1 {
width: 60%;
float: center;
text-align: center;
}
bloco2 {
float: left;
width: 30%;
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
<BR>
<BR>
<BR>
  <div id="menu2"> 
      <p><a href="trogmaiu.php">Home </a> 
       <p>  <a href= "images.php"> Images </a>  
       <p> <a href="firewall.html"> Firewall </a>
</div>

  <div id="bloco1">
<br>
     <?php
         $execute_host_memory0 = shell_exec( '/var/www/trogmaiu/public_html/scripts/Memorytotal.sh' );
         $execute_host_memory1 = shell_exec( '/var/www/trogmaiu/public_html/scripts/Memoryfree.sh' );
         echo "Memory_Total_Host: $execute_host_memory0";
         echo "Memory_Free_Host: $execute_host_memory1"; 
      ?>

</div>
<BR>
<BR>
<BR>
<div id="bloco1">
  <?php
   $filepath = ( "/var/www/trogmaiu/public_html/temp/imem.txt" ) ;
   $resultado1 = fopen("$filepath", "r"); 
   $buffer = fread($resultado1, filesize($filepath));
   fclose($resultado1);
   echo nl2br("$buffer");

?>


   <form action="passar.php" method="GET">
    <input type="submit" name="vai1" value="Executar" >
    </form>

</div>
</body>
</html>


 
