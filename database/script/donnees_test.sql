INSERT INTO admin(nom, pseudo, mot_de_passe) VALUES 
('Rakoto', 'Koto', sha2('koto', 256)),
('Randria', 'Andria', sha2('andria',256));

INSERT INTO cueilleur(nom, genre, pseudo, date_naissance, mot_de_passe) VALUES 
('Alicia', 'F', 'Alicia', '2000-02-15', sha2('alicia', 256)),
('Jean', 'M', 'Jean', '2001-09-30', sha2('jean', 256)),
('Claude', 'M', 'Claude', '1998-08-10', sha2('claude', 256)),
('Princia', 'F', 'Princia', '2000-03-23', sha2('princia', 256));


INSERT INTO variete_the(nom, occupation, rendement) VALUES
('noir', 2, 6),
('vert', 1, 5),
('rouge', 3, 10),
('jaune', 2, 7);

INSERT INTO parcelle(surface) VALUES
(2), (1), (2);

INSERT INTO rel_variete_the_parcelle(id_parcelle, id_variete_the) VALUES 
(1, 3),
(1, 2),
(1, 4),
(1, 1);

INSERT INTO rel_variete_the_parcelle(id_parcelle, id_variete_the) VALUES 
(2,1),
(2,3),
(2,4);

INSERT INTO rel_variete_the_parcelle(id_parcelle, id_variete_the) VALUES 
(3,4),
(3,2),
(3,1);

INSERT INTO categorie_depense(categorie) VALUES 
('engrais'),
('carburant'),
('produit'),
('entretien');
