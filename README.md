# MyIpHome[Gama] - O que é ?
Imagine que você tem um servidor em casa e precisa acessar externamente ele ou algum serviço dele. 
Sua operadora de internet sempre troca o ip de WAN e você precisa pedir para alguém da sua casa acessar o [meuip.com.br](http://meuip.com.br/) para descobrir o seu IP externo.

O myIpHome faz isso pra você automaticamente.

#  Como funciona ?
Dentro do seu server caseiro, na CRON, fica rodando o script que dispara uma requisição  de X em X minutos/horas/* para o MyIpHome, que precisa estar rodando em alguma maquina externa, por exemplo em seu subdomínio **myip.meudominio.eti.br**. Quando essa requisição chega, é extraído o IP de origem e catapimba !!!! Temos seu ip de WAN.

Esse IP é exibido em uma tabela.

É simples mesmo! 

# O que usa ?
- [PHP](https://www.php.net/)
- Seu banco de dados preferido (por que usamos migrations)
- Framework [CakePHP v4](https://book.cakephp.org/4/en/installation.html)
- [CURL](https://curl.haxx.se/docs/manual.html) ou qualquer outra ferramenta semelhante de sua preferência.

# Como faz pra rodar
## No seu server externo
Sim ! Você precisa de alguma maquina externa pra rodar o MIH
Nessa maquina você instala o MIH.

## No seu server caseiro 
No server caseiro insira na CRON o comando que gera a requisição, exemplo:
```bash
curl -d "{'':''}" http://myiphome.meudominio.eti.br/api/ips.json
```
No lugar do *myiphome.meudominio.eti.br* substitua por seu dominio ou IP da maquina externa.

Um exemplo de aplicação usando  a ferramenta [crontab](https://pt.wikipedia.org/wiki/Crontab):

Editando a cron:
```bash
crontab -e
```
Adicionando o script;
```bash
*/5 * * * * curl -d "{'':''}" http://myiphome.meudominio.eti.br/api/ips.json
```
O comando será executado de 5 em 5 minutos (*/5), todos os dias da semana e mês.

Uma dica: Você precisa criar redirecionamento de portas ou DMZ no seu rodeador para o seu server de casa.

#  ATENÇÃO !
Essa é uma ferramenta que pode contar falhas de segurança. Ainda está em desenvolvimento e falta muuuito para ser considerada estável e segura.
 Como ainda estou desenvolvendo, muitas coisas podem mudar mas o principio é o apresentado nos tópicos acima.