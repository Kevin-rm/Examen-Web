DROP   DATABASE IF EXISTS the;
CREATE DATABASE           the;
USE                       the;

CREATE TABLE the_membre (
    id             INT PRIMARY KEY AUTO_INCREMENT,
    nom            VARCHAR(50),
    pseudo         VARCHAR(30), -- Pseudo unique pour chaque membre
    genre          VARCHAR(1),
    date_naissance DATE,
    mot_de_passe   VARCHAR(255),
    is_admin       TINYINT(1) DEFAULT 0 -- 0: cueilleur, 1: admin
) ENGINE=InnoDB;
ALTER TABLE the_membre
ADD CONSTRAINT unique_pseudo UNIQUE (pseudo);

CREATE TABLE the_variete_the ( 
    id         INT PRIMARY KEY AUTO_INCREMENT,
    nom        VARCHAR(50),
    occupation INT,            -- Par pieds, 1pied = 1,8 m²
    rendement  DECIMAL(10, 2)  -- Rendement par pied(kg de feuille par mois)
) ENGINE=InnoDB;

CREATE TABLE the_parcelle (
    id      INT PRIMARY KEY AUTO_INCREMENT, 
    surface DECIMAL(10, 2)
) ENGINE=InnoDB;

CREATE TABLE the_rel_variete_the_parcelle (
    id_variete_the INT REFERENCES the_variete_the(id),
    id_parcelle    INT REFERENCES the_parcelle(id),
    UNIQUE(id_variete_the, id_parcelle)
) ENGINE=InnoDB;

CREATE TABLE the_categorie_depense (
    id        INT PRIMARY KEY AUTO_INCREMENT, 
    categorie VARCHAR(30)
) ENGINE=InnoDB;

CREATE TABLE the_depense (
    id                   INT PRIMARY KEY AUTO_INCREMENT,
    id_categorie_depense INT REFERENCES the_categorie_depense(id),
    montant              DECIMAL(10, 2),
    date                 DATE
) ENGINE=InnoDB;

CREATE TABLE the_cueillette (
    date          DATE,
    id_cueilleur  INT REFERENCES the_membre(id),
    id_parcelle   INT REFERENCES the_parcelle(id),
    poids_cueilli DECIMAL(10, 2)
) ENGINE=InnoDB;