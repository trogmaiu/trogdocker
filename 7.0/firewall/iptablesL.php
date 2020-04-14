<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title> Firewall Trog </title>
<style type="text/css">

 #menu {
 border-radius: 90px;
 align: left;
 width: 200px;
text-align: center;

}

#bloco {
background-color: #F23005;
width: 100%;
height: 60px;
#border-radius: 40px;
margin-right: auto;
margin-left: auto;
text-align: right;
}
</style>

<body>
  <div id="bloco">
     <img src="firewalltrog.jpg" align="left">
     <BR>
     <a href="painel.html"> Login </a> |
     <a href="listapolicies.html"> Painel </a>
    </div>
    <div id="menu">
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
