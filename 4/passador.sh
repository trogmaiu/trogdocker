#!/bin/bash
contador="0"

 while [ $contador -le 1 ]
do
./dados.sh 
sed -i 4d dados.sh
done
