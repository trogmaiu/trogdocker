Esta é uma aplicação simples para docker feita em php e shellscript.
O intuito dela por enquanto é somente para executar "RUN", de containers
que dão retorno de execução. Está em fase de desenvolvimento um firewall,
simples, claro "iptables" para caso seja necessário.

O arquivo delimitador2.sh cria o arquivo "passar3.php" que executa um formulario para execução do docker,
mas a execução é jogada em um script dentro da pasta "scripts" no arquivo dados.sh que é executado pelo 
passador.sh. Isto ocorre porque no php o comando de execução não chama o "xterm" necessário para executar o docker.

Falta criar um botão para refresh no caso para executar o "delimitador2.sh" que cria o arquivo images2.php e passar3.php.
