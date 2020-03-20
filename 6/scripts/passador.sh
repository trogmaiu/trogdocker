#!/bin/bash

while :;
do
sleep 2
/var/www/trogmaiu/public_html/scripts/dados.sh
sed -i '/docker/d' /var/www/trogmaiu/public_html/scripts/dados.sh
done
