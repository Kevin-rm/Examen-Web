DROP   DATABASE gestion_the;
CREATE DATABASE gestion_the;
USE             gestion_the;

CREATE TABLE admin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    pseudo VARCHAR(30), 
    mot_de_passe VARCHAR(100)
) ENGINE=InnoDB;

CREATE TABLE cueilleur (
    id             INT PRIMARY KEY AUTO_INCREMENT, 
    nom            VARCHAR(50),
    genre          VARCHAR(1),
    date_naissance DATE,
    mot_de_passe   VARCHAR(100)
) ENGINE=InnoDB;

CREATE TABLE variete_the ( 
    id         INT PRIMARY KEY AUTO_INCREMENT,
    nom        VARCHAR(50),
    occupation INT, -- En pieds 1pied = 1,8 m²
    rendement  INT  -- Rendement par pied(kg de feuille par mois)
) ENGINE=InnoDB;

CREATE TABLE parcelle (
    id      INT PRIMARY KEY AUTO_INCREMENT, 
    surface INT
) ENGINE=InnoDB;

CREATE TABLE rel_variete_the_parcelle (
    id_variete_the INT REFERENCES variete_the(id),
    id_parcelle    INT REFERENCES parcelle(id)
) ENGINE=InnoDB;

CREATE TABLE categorie_depense (
    id INT PRIMARY KEY, 
    categorie VARCHAR(20)
) ENGINE=InnoDB;
