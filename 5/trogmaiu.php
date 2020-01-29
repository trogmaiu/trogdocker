
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
float: right;
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
       <p>   <a href="firewall.html"> Firewall </a>

</div>
      
  <div id="bloco1">
<br>
     <?php
         $passar = fopen('/var/www/trogmaiu/public_html/scripts/dados.sh', 'a');
         fwrite($passar, 'docker search lamp');
         fclose($passar);
         $execute_host_memory0 = shell_exec( '/var/www/trogmaiu/public_html/scripts/Memorytotal.sh' );
         $execute_host_memory1 = shell_exec( '/var/www/trogmaiu/public_html/scripts/Memoryfree.sh' );
         echo "Memory_Total_Host: $execute_host_memory0";
         echo "Memory_Free_Host: $execute_host_memory1"; 
      ?>
<br>
<br>
<br>
<form action="trogmaiu.php" method="POST">
<input type="text" name="search1" size="60" >
<input type="submit" value="OK" >
</form>
<br>
</div>
<BR>
<BR>
<BR>
<div id="bloco1">

 <?php
if(isset($_POST["search1"]))
{
shell_exec( "/usr/bin/docker search $_POST[search1] > /var/www/trogmaiu/public_html/temp/resultado.txt" ); 
sleep(5);
shell_exec( "/var/www/trogmaiu/public_html/scripts/fazer2.sh" );
}



$filepath = ( "/var/www/trogmaiu/public_html/temp/b.txt" );
   $resultado1 = fopen("$filepath", "r");   
//   $buffer = fread($resultado1, filesize($filepath));
//   fclose($resultado1);
  // echo nl2br($buffer);  
require_once ( "/var/www/trogmaiu/public_html/temp/c.php" );
?>


</div>
</body>
</html>

