#!/bin/bash
t=`wc resultado.txt | cut -d" " -f 3`
for (( i=1; i<="$t"; i++));
do 

sed -n "${i}s/^/\$a${i}\ = \"/p" resultado.txt >> a.txt
sed -n "${i}s/\[<BR>\]/\";/p" a.txt >> b.txt
done
i="0"

write=`cat b.txt`
echo " 
<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
<title> Lista </title>
</head>
<body> 
<?php " >> c.html
echo "$write" >> c.html

#
#
#
#
#
#
echo "
echo \"<table border=1>\"; " >> c.html
i="0"
ttt() {
while [ $i -le 85 ]
do
echo "echo \"<tr>\"; "
echo " echo \"<td>\"; "
echo "echo(\$a$i);"
echo "echo \"</td>\"; "
echo "echo \"</tr>\"; "
let i=i+1;
done
}
ttt >> c.html

echo "\"</table>\";
?>
 </body>
 </html>
" >> c.html
