
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

"SELECT * FROM plat AS p INNER JOIN categorie AS c ON p.id_categorie = c.id WHERE c.libelle LIKE %:categorie_name% AND p.active = 'Yes';
