# boncoin

### Structure du code 

Ayant l'habitude de travailler avec Laravel, j'ai essayé dans des projet anterieur à
mettre en place une architecture MVC en s'inspirant du pattern MVC et de laravel,
on ne ré-envente pas la roue mais il est toujours bon de comprendre 
les briques fondelemtaux sur les lequels on contsruire.

*Repertoire important:

* Core/ :
Ce repertoire contient l'implementation du pattern MVC .

* src/ :

Contient l'implementation de l'architecture DDD(Domain-Driven Design) ce qui consiste à
responsabiliser chaque parti de mon code.

 
### Voici les étapes à suivre pour tester le test boncoin :

* Configurer votre serveur de web apache ou nginx

* Creer la base de donnée crm_boncoin

* Avec le fichier sql Config/crm_boncoin.sql




* Télécharger ce package
* Avec votre terminal, aller sur le projet : cd boncoin
* Exécutez cette commande :  composer update

Configurer Votre base de donnee dans le fichier :
*Config/database_config

* 'mysql' => [
*             'driver' => 'mysql',
*              'host_name' => 'localhost',
*              'db_name' => 'crm_boncoin',
*              'db_user' => 'boncoin',
*              'db_password' => 'boncoindb'
*         ],
*Pointez votre Documentroot sur boncoin/www/
* Aller à l'URL : localhost:8000
* Dans mon cas configurer sur mamp :http://dev.boncoin.com:8000