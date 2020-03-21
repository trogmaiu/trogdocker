<!DOCTYPE html>
<html lang="pt-br">
<head>
<title> PASSAR </title>
</head>
<body>
<?php
$ver2

if (isset($_POST['-+tudo'])) {
$ver1 = shell_exec( '/var/www/firewall/public_html/teste.sh' );
echo"Verifica: $ver1"; 
}
else {

shell_exec('/usr/sbin/iptables -F');
shell_exec('usr/sbin/iptables -X');
shell_exec('/usr/sbin/iptables -P INPUT ACCEPT');
}

?>

</body>
</html>
