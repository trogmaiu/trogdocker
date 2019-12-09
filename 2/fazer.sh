#!/bin/bash
t=`wc resultado.txt | cut -d" " -f 3`
for (( i=1; i<="$t"; i++));
do 

sed "${i}s/^/$ ${i}=/" resultado.txt >> a.txt

fgrep "$" a.txt >> b.txt
done
