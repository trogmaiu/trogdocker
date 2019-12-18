#!/bin/bash
t=`wc resultado.txt | cut -d" " -f 3`
for (( i=1; i<="$t"; i++));
do 

sed -n "${i}s/^/\$a${i}\ = \"/p" resultado.txt >> a.txt
sed -n "${i}s/\[<BR>\]/\";/p" a.txt >> b.txt
done


write=`cat b.txt`

echo '<html>
<title> Lista</title>
<body>
<?php
$write;
$i = 1;
$t;
 while ($i <= 85 ) {
if ( $i  == $t ) {
echo "<tr>";
echo "<td>";
echo "a$i";
echo "</td>"
echo "</tr>"
}
}
echo "</table>"
?>
</body>
</html>
' >> c.html

##mv c.txt lista.php
##rm -rf a.txt b.txt
