
insert into the_admin (id) values (1);
insert into the_admin (id) values (2);


insert into the_member(nom,pseudo ,genre , date_naissance, mot_de_passe)values('Alicia','Lilice','F','2000-02-15',sha2('alicia',256));
insert into the_member(nom,pseudo ,genre , date_naissance, mot_de_passe)values('Jean','Jean4','M','2001-09-30',sha2('jean',256));
insert into the_member(nom,pseudo ,genre , date_naissance, mot_de_passe)values('Claude','Claude','M','1998-08-10',sha2('claude',256));
insert into the_member(nom,pseudo ,genre , date_naissance, mot_de_passe)values('Princia','Prissi','F','2000-03-23',sha2('princia',256));


insert into the_variete_the(nom,occupation , rendement) values ('noir',2,6);
insert into the_variete_the(nom,occupation , rendement) values ('vert',1,5);
insert into the_variete_the(nom,occupation , rendement) values ('rouge',3,10);
insert into the_variete_the(nom,occupation , rendement) values ('jaune',2,7);

insert into the_parcelle(surface)values(2);
insert into the_parcelle(surface)values(1);
insert into the_parcelle(surface)values(2);

insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,3);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,2);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,4);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (1,1);

insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (2,1);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (2,3);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (2,4);


insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (3,4);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (3,2);
insert into the_rel_variete_the_parcelle(id_parcelle, id_variete_the)values (3,1);

insert into the_categorie_depense(categorie) values ('engrais');
insert into the_categorie_depense(categorie) values ('carburant');
insert into the_categorie_depense(categorie) values ('produit');
insert into the_categorie_depense(categorie) values ('entretien');

INSERT INTO the_depense (id_categorie_depense, montant) VALUES 
(1, 150.50),
(2, 200.75),
(3, 100.00),
(4, 500.25),
(1, 75.00),
(2, 150.00);

insert into ceuillette(date_ceuillette,choix_ceuilleur,choix_parcelle,poids_ceuilli)values('2024-02-09','Alicia',1,3);
insert into ceuillette(date_ceuillette,choix_ceuilleur,choix_parcelle,poids_ceuilli)values('2024-02-08','Alicia',3,2);
insert into ceuillette(date_ceuillette,choix_ceuilleur,choix_parcelle,poids_ceuilli)values('2024-02-09','Jean',2,2);
insert into ceuillette(date_ceuillette,choix_ceuilleur,choix_parcelle,poids_ceuilli)values('2024-02-10','Claude',2,4);




