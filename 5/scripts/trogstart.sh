
## BEGIN INIT INFO
#Provides trogstart_beta_teste
#Required-Start
#Required-Stop
#Default-Start 2 3 4 5
#Default-Stop  0 1 6
#Short-Description Processo de inicializacao do script do trog. Desenvolvimento 
#Description   Processo de inicializacao do script do trog. Esta em desenvolvimento


#Nome do Processo
#NAME=trogstart_beta

#Nome do Daemon
#DAEMON=/var/www/trogmaiu/public_html/trogstart

#Arquivo PID
#PIDFILE=/var/run/trogstart.pid

#Verifica se existe
test -x $DAEMON || exit 5

trogstart() {
# Trocar o diretório, colocar em um local padrão do sistema,
# passador.sh
	/var/www/trogmaiu/public_html/passador.sh
}

case $1 in
start) trogstart ;;
stop) killall trogstart ;;
reload) $0 && sleep 5 && $0 start 
esac

