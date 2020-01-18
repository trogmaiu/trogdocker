#!/bin/bash
t=`wc resultado.txt | cut -d" " -f 3`
for (( i=1; i<="$t"; i++));
do 

sed -n "${i}s/^/\$a${i}\ = \"/p" resultado.txt >> a.txt
sed -n "${i}s/\[<BR>\]/\";/p" a.txt >> b.txt
done

write=`cat b.txt`
echo ' 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title> Lista </title>
<body>
<?php 

i=0
while ( $i => 85)
{
echo "<tr>";
echo "<td>";
echo (a$i);
echo "</td>";
echo "</tr>";
}
?>
echo "</table>";
echo "</body>";
echo "</html>";
'
>> c.html
