
-- Base de données : `restaurantd_db`

DROP DATABASE  IF EXISTS restaurantd_db;

CREATE DATABASE restaurantd_db;

USE restaurantd_db;

-- Structure de la table `categorie

CREATE TABLE `categorie` (
  `id` int AUTO_INCREMENT PRIMARY KEY ,
  `libelle` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB;



--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `libelle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categorie` int NOT NULL,
  `active` varchar(10) NOT NULL,
  CONSTRAINT `fk_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB;


--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
                            `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                            `id_plat` INT NOT NULL,
                            `quantite` INT NOT NULL,
                            `total` decimal(10,2) NOT NULL,
                            `date_commande` datetime NOT NULL,
                            `etat` varchar(50) NOT NULL,
                            `nom_client` varchar(150) NOT NULL,
                            `telephone_client` varchar(20) NOT NULL,
                            `email_client` varchar(150) NOT NULL,
                            `adresse_client` varchar(255) NOT NULL,
                            CONSTRAINT `fk_id_plat` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id`)
) ENGINE=InnoDB;

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id`INT PRIMARY KEY NOT NULL  AUTO_INCREMENT,
  `nom_prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB;

SELECT date_commande, nom_client, telephone_client, email_client, adresse_client, id_plat, total FROM commande;
SELECT plat.libelle AS nomduplat, categorie.libelle AS categorieplt FROM plat JOIN categorie ON plat.id_categorie = categorie.id;
SELECT libelle, active FROM categorie WHERE active = 'Yes';
SELECT plat.libelle, commande.quantite FROM plat JOIN commande ON plat.id = commande.id_plat WHERE commande.etat != 'annulée' ORDER BY commande.quantite DESC;
SELECT plat.libelle, SUM(commande.quantite * plat.prix) AS ca FROM plat JOIN commande ON plat.id = commande.id_plat WHERE commande.etat != 'annulée' GROUP BY plat.libelle ORDER BY 2 DESC LIMIT 1;
DELETE FROM plat WHERE active = 'no';
DELETE FROM commande WHERE etat = 'livrée';
INSERT INTO categorie (id, libelle, image, active) VALUES ('15', 'SPECIALITE_ALGERIENNE', 'CSCS.jpg','active');
UPDATE plat SET prix = prix *1.1 WHERE id_categorie = (SELECT id FROM categorie);
SELECT *FROM categorie WHERE active = 'Yes' LIMIT 6;








