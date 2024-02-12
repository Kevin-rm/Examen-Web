-- Ajout de membres
INSERT INTO the_membre (nom, pseudo, genre, date_naissance, mot_de_passe, is_admin)
VALUES
    ('John Doe', 'johnny', 'M', '1990-01-15', sha2('jhonny', 256), 0),
    ('Jane Doe', 'jane_doe', 'F', '1992-05-20', sha2('jane_doe', 256), 1),
    ('Bob Smith', 'bob', 'M', '1985-08-10', sha2('bob', 256), 0);

-- Ajout de variétés de thé
INSERT INTO the_variete_the (nom, occupation, rendement)
VALUES
    ('Thé vert', 2, 1.5),
    ('Thé noir', 3, 2.0),
    ('Thé oolong', 2, 1.8);

-- Ajout de parcelles
INSERT INTO the_parcelle (surface)
VALUES
    (10.5),
    (8.0),
    (15.3);

-- Association des variétés de thé aux parcelles
INSERT INTO the_rel_variete_the_parcelle (id_variete_the, id_parcelle)
VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (1, 2),
    (2, 3);

-- Ajout de catégories de dépenses
INSERT INTO the_categorie_depense (categorie)
VALUES
    ('Semences'),
    ('Engrais'),
    ('Arrosage');

-- Ajout de dépenses
INSERT INTO the_depense (id_categorie_depense, montant, date)
VALUES
    (1, 50.00, '2024-02-12'),
    (2, 30.00, '2024-02-13'),
    (3, 20.00, '2024-02-14');

-- Ajout de cueillettes
INSERT INTO the_cueillette (date, id_cueilleur, id_parcelle, poids_cueilli)
VALUES
    ('2024-02-10', 1, 1, 2.5),
    ('2024-02-11', 2, 2, 3.0),
    ('2024-02-12', 3, 3, 4.2);
