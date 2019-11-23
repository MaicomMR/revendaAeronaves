# Sistemas Distribuídos

Este repositório visa assegurar o versionamento de uma aplicação desenvolvida para a cadeira de Sistemas Distribuídos. No sistema, o qual será melhor descrito a seguir, vamos contar com uma versão Web que será responsável por abrigar o banco de dados(Postgresql), uma dashboard(AdminLTE) e um CRUD para a inserção/edição de aeronaves.
A parte web será hospedada no serviço Heroku, sendo desenvolvida principalmente utilizando PHP(Laravel 5.8).
Para tornar este sistema distribuído, os usuários deverão conseguir acessar uma listagem das aeronaves que estão a venda por um aplicativo Mobile(React Native), este aplicativo também deve possibilitar de um usuário adicionar uma aeronave para ser anunciada. Esse registro deve ser armazenado no Banco de Dados hospedado Postgresql heroku.

# Diagrama ER
![enter image description here](https://i.imgur.com/ecmMZZK.png)

# Serviços e Tecnologias
**Web** - Como descrito brevemente a cima, o serviço web será desenvolvido principalmente utilizando o Framework Laravel(5.8), ou seja, na linguagem PHP. Esta aplicação deverá dispor de web services responsáveis por pelo menos uma "entrada" e uma "saída" de dados, para que seja possível Listar os dados do banco de dados em um aplicativo a parte. Assim como adicionar novos registros a partir de dispositivos ou aplicações que não sejam a Web.
Toda a parte Web deverá ser hospedada em um serviço online para garantir a disponibilidade do serviço, sendo este preferencialmente o heroku.

Além da parte do Cliente, a aplicação Web também deve possibilitar:

 - Criar um anuncio de uma aeronave
 - Visualizar todas as aeronaves
   cadastradas
 - Editar as aeronaves cadastradas
 - Listar contatos que estejam interessados na compra de aeronaves


**Mobile** - Para contemplar a proposta de sistema distribuído, vamos desenvolver uma aplicação Mobile, ou seja, com a finalidade de ser executada como aplicativo em smartphones.
Este aplicativo será desenvolvido utilizando o Framework React Native, visando uma maior portabilidade da aplicação para uma gama de aparelhos.

## Links de interesse

Home do site web: [http://revendaaeronaves.herokuapp.com/homeBase](http://revendaaeronaves.herokuapp.com/homeBase)
Aplicação Mobile: [https://exp.host/@maicom_mr/sistemasDistribuidosApp](https://exp.host/@maicom_mr/sistemasDistribuidosApp)

## Desenvolvedor

Maicom de Macedo Rodeghiero
