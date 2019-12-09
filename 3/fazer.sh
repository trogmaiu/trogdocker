#!/bin/bash
t=`wc resultado.txt | cut -d" " -f 3`
for (( i=1; i<="$t"; i++));
do 

sed -n "${i}s/^/\$a${i}\ = \"/p" resultado.txt >> a.txt
sed -n "${i}s/\[<BR>\]/\";/p" a.txt >> b.txt
done

write=`cat b.txt`
echo " <?php 

$write echo (a$3); ?>"  > c.txt
mv c.txt lista.php
