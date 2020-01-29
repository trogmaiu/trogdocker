#!/bin/bash
contador="0"

 while [ $contador -le 1 ]
do
./dados.sh
sed -i 2d dados.sh
done
