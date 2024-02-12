create database ceuillette ;
create table admin(id int primary key , pseudo varchar(30), mot_de_passe varchar(20),nom varchar(50)) engine=innodb;
create table ceuilleur(id int primary key, nom varchar(50), genre varchar(1),date_naissance date , mot_de_passe varchar(20)) engine=innodb;
create table the( id int primary key , occupation int , rendement int ) engine=innodb;
create table parcelle(id int primary key , surface int )  engine=innodb;
create table relation_variete_the_parcelle unique(id_parcelle int , id_the int ) engine=innodb;
create table categorie_depense (id int primary key , categorie varchar(20)) engine=innodb;

