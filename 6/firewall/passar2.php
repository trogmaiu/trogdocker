<!DOCTYPE html>
<html lang="pt-br">
<head>
<title> PASSAR </title>
</head>
<body>
<?php

$ver0 = '/usr/sbin/iptables -P INPUT DROP';
$ver9 = '/usr/sbin/iptables -A INPUT -s localhost -d localhost -j ACCEPT';
$ver10 = '/usr/sbin/iptables -A INPUT -p tcp --sport 80 --syn -j LOG';
$ver1 = '/usr/sbin/iptables -A INPUT -p tcp --sport 80 -j ACCEPT';
$ver2 = '/usr/sbin/iptables -A INPUT -p tcp --sport 443 -j ACCEPT';
$ver3 = '/usr/sbin/iptables -A INPUT -p tcp --sport 21 -j ACCEPT';
$ver4 = '/usr/sbin/iptables -A INPUT -p tcp --sport 22 -j ACCEPT';
$ver5 = '/usr/sbin/iptables -A INPUT -p udp --sport 53 -j ACCEPT';

if (isset($_POST['-+tudo'])) {

   shell_exec($ver0);
   shell_exec($ver9);
    shell_exec($ver10);
   shell_exec($ver1);
   shell_exec($ver2);
   shell_exec($ver5);
}
  else { 
     shell_exec( '/usr/sbin/iptables -P INPUT  ACCEPT' );
     shell_exec( '/usr/sbin/iptables -X' );
     shell_exec( '/usr/sbin/iptables -F' ); 
 }
  if (isset($_POST['liberarFTP'])) {
      shell_exec($ver3);
}   
  else { 
  shell_exec( '/usr/sbin/iptables -D INPUT -p tcp --sport 21 -j ACCEPT' );
}
  if (isset($_POST['liberaSSH'])) {
      shell_exec($ver4);
 }
 else {
 shell_exec( '/usr/sbin/iptables -D INPUT -p tcp --sport 22 -j ACCEPT' );
}
?>

</body>
</html>
