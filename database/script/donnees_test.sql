
insert into admin (nom,pseudo , mot_de_passe) values ('Rakoto','Koto',sha2('koto',256),);
insert into admin (nom,pseudo , mot_de_passe) values ('Randria','Andria',sha2('andria',256),);


insert into ceuilleur(nom, genre , date_naissance, mot_de_passe)values('Alicia','F','2000-02-15',sha2('alicia',256));
insert into ceuilleur(nom, genre , date_naissance, mot_de_passe)values('Jean','M','2001-09-30',sha2('jean',256));
insert into ceuilleur(nom, genre , date_naissance, mot_de_passe)values('Claude','M','1998-08-10',sha2('claude',256));
insert into ceuilleur(nom, genre , date_naissance, mot_de_passe)values('Princia','F','2000-03-23',sha2('princia',256));


insert into variete_the(nom,occupation , rendement) values ('noir',2,6);
insert into variete_the(nom,occupation , rendement) values ('vert',1,5);
insert into variete_the(nom,occupation , rendement) values ('rouge',3,10);
insert into variete_the(nom,occupation , rendement) values ('jaune',2,7);

insert into parcelle(surface)values(2);
insert into parcelle(surface)values(1);
insert into parcelle(surface)values(2);

insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,3);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,2);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,4);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,1);

insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (2,1);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (2,3);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (2,4);


insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (3,4);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (3,2);
insert into rel_variete_the_parcelle(id_parcelle, id_variete_the)values (3,1);

insert into categorie_depense(categorie) values ('engrais');
insert into categorie_depense(categorie) values ('carburant');
insert into categorie_depense(categorie) values ('produit');
insert into categorie_depense(categorie) values ('entretien');






