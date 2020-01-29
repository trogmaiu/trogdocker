#!/bin/bash
echo "Inicio"
if [ -e /var/www/trogmaiu/public_html/temp/resultado.txt ];
then
t=`wc /var/www/trogmaiu/public_html/temp/resultado.txt | cut -d" " -f 3`
i="0"
rm -rf /var/www/trogmaiu/public_html/temp/a.txt
rm -rf /var/www/trogmaiu/public_html/temp/b.txt
rm -rf /var/www/trogmaiu/public_html/temp/resultado1.txt
for (( i=1; i <="$t"; i++));
do 
sed 's/"//g' /var/www/trogmaiu/public_html/temp/resultado.txt >> /var/www/trogmaiu/public_html/temp/resultado1.txt
sed -n "${i}s/^/\$a${i}\ = \"/p" /var/www/trogmaiu/public_html/temp/resultado1.txt >> /var/www/trogmaiu/public_html/temp/a.txt
sed -n "${i}s/\[OK\]/\";/p" /var/www/trogmaiu/public_html/temp/a.txt >> /var/www/trogmaiu/public_html/temp/b.txt 
done

write=`cat /var/www/trogmaiu/public_html/temp/b.txt`
echo " 
<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
<title> Lista </title>
</head>
<body> 
<?php " >> /var/www/trogmaiu/public_html/temp/c.html
echo "$write" >> /var/www/trogmaiu/public_html/temp/c.html

#
#
#
#
#
#
echo "
echo \"<table border=1>\"; " >> /var/www/trogmaiu/public_html/temp/c.html
i="1"
ttt() {
while [ $i -le $t ]
do
echo "echo \"<tr>\";"
echo " echo \"<td>\";"
echo "echo(\$a$i);"
echo "echo \"</td>\";"
echo "echo \"</tr>\";"
let i=i+1;
done
}
ttt >> /var/www/trogmaiu/public_html/temp/c.html

echo "echo \"</table>\";
?>
 </body>
 </html>
" >> /var/www/trogmaiu/public_html/temp/c.html
mv /var/www/trogmaiu/public_html/temp/c.html /var/www/trogmaiu/public_html/temp/c.php
#rm -rf /var/www/trogmaiu/public_html/temp/resultado.txt
else
echo "oi"

fi

