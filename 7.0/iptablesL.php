<!DOCTYPE html>
<html LANG="PT-BR">
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
    <p>
    <p>
    <a href="firewallids.php"> IDS </a>
    <p>
    <p>
    <a href="iptablesL.php"> Listagem </a>
    </div>
    <div align="center">
<?php   

$listagem = ( shell_exec ( '/usr/sbin/iptables -L' ));
    echo nl2br($listagem);

?>
</div>
</div>
</body>
<html>
