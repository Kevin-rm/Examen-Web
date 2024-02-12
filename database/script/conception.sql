DROP   DATABASE IF EXISTS the;
CREATE DATABASE           the;
USE                       the;

CREATE TABLE the_admin (
    id_membre INT UNIQUE REFERENCES membre(id)
) ENGINE=InnoDB;

CREATE TABLE the_membre (
    id             INT PRIMARY KEY AUTO_INCREMENT,
    nom            VARCHAR(50),
    pseudo         VARCHAR(30),
    genre          VARCHAR(1),
    date_naissance DATE,
    mot_de_passe   VARCHAR(255)
) ENGINE=InnoDB;

CREATE TABLE the_variete_the ( 
    id         INT PRIMARY KEY AUTO_INCREMENT,
    nom        VARCHAR(50),
    occupation INT, -- par pieds, 1pied = 1,8 m²
    rendement  INT  -- Rendement par pied(kg de feuille par mois)
) ENGINE=InnoDB;

CREATE TABLE the_parcelle (
    id      INT PRIMARY KEY AUTO_INCREMENT, 
    surface INT
) ENGINE=InnoDB;

CREATE TABLE the_rel_variete_the_parcelle (
    id_variete_the INT REFERENCES variete_the(id),
    id_parcelle    INT REFERENCES parcelle(id),
    UNIQUE(id_variete_the, id_parcelle)
) ENGINE=InnoDB;

CREATE TABLE the_categorie_depense (
    id        INT PRIMARY KEY AUTO_INCREMENT, 
    categorie VARCHAR(20)
) ENGINE=InnoDB;

CREATE TABLE the_depense (
    id                   INT PRIMARY KEY AUTO_INCREMENT,
    id_categorie_depense INT REFERENCES categorie_depense(id),
    montant              DECIMAL(10, 2)
) ENGINE=InnoDB;

--ensemble de parcelle et variete de the
CREATE VIEW the_parcelle_et_variete_the as
    SELECT
    relation.id_variete_the ,
    relation.id_parcelle,
    the.occupation,
    the.rendement 
    FROM the_rel_variete_the_parcelle relation join the_variete_the the on relation.id_variete_the=the.id;

CREATE VIEW the_rendement_par_parcelles as
    SELECT 
    sum(relation.occupation*relation.rendement) as rendement,
    relation.id_parcelle
    from parcelle_et_variete_the relation
    GROUP BY  relation.id_parcelle;
