-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour soins_capillaires
CREATE DATABASE IF NOT EXISTS `soins_capillaires` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `soins_capillaires`;

-- Listage de la structure de table soins_capillaires. administrateur
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mot_de_passe` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table soins_capillaires.administrateur : ~0 rows (environ)

-- Listage de la structure de table soins_capillaires. clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id_clients` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tel` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_heure` datetime DEFAULT NULL,
  PRIMARY KEY (`id_clients`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table soins_capillaires.clients : ~5 rows (environ)
INSERT INTO `clients` (`id_clients`, `nom`, `prenom`, `email`, `tel`, `date_heure`) VALUES
	(4, 'kazadi', 'kelly', 'kellykazadi@gmail.com', '0997485030', '2024-11-10 15:12:36'),
	(5, 'maka', 'denis', 'makadenis@gmail.com', '0997435030', '2024-11-10 15:12:40'),
	(6, 'kaba', 'henock', 'kabahenock@gmail.com', '0895657365', '2024-11-10 15:12:42'),
	(7, 'lomande', 'Aristote', 'makaya@gmail.com', '0895658365', '2024-11-10 15:12:43'),
	(9, 'Makopa', 'Synthia', 'makopasynthia@gmail.com', '0815282853', '2024-11-10 15:53:21'),
	(10, 'ngandu', 'beretta', 'nganduberetta@gmail.com', '0997435031', '2024-11-13 23:36:21'),
	(11, 'muyaka', 'david', 'muyakadavid@gmail.com', '0997435031', '2024-11-13 23:36:22');

-- Listage de la structure de table soins_capillaires. grades
CREATE TABLE IF NOT EXISTS `grades` (
  `id_grade` int NOT NULL AUTO_INCREMENT,
  `nom_grade` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_grade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table soins_capillaires.grades : ~3 rows (environ)
INSERT INTO `grades` (`id_grade`, `nom_grade`) VALUES
	(1, 'admin'),
	(2, 'modo'),
	(3, 'client');

-- Listage de la structure de table soins_capillaires. newsletter
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_newsletter` int NOT NULL AUTO_INCREMENT,
  `email_client` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `id_clients` int DEFAULT NULL,
  PRIMARY KEY (`id_newsletter`),
  KEY `id_clients` (`id_clients`),
  CONSTRAINT `newsletter_ibfk_1` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id_clients`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table soins_capillaires.newsletter : ~0 rows (environ)

-- Listage de la structure de table soins_capillaires. rendez_vous
CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `id_rdv` int NOT NULL AUTO_INCREMENT,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `prenom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tel` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_heure` datetime DEFAULT NULL,
  `id_client` int DEFAULT '3',
  `id_admin` int DEFAULT NULL,
  PRIMARY KEY (`id_rdv`),
  KEY `id_client` (`id_client`),
  KEY `id_admin` (`id_admin`),
  CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_clients`),
  CONSTRAINT `rendez_vous_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table soins_capillaires.rendez_vous : ~0 rows (environ)
INSERT INTO `rendez_vous` (`id_rdv`, `nom`, `prenom`, `email`, `tel`, `date_heure`, `id_client`, `id_admin`) VALUES
	(5, NULL, NULL, NULL, NULL, '2024-11-28 00:00:00', 10, NULL),
	(6, NULL, NULL, NULL, NULL, '2024-11-17 00:00:00', 11, NULL);

-- Listage de la structure de table soins_capillaires. users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom_user` text,
  `prenom_user` text,
  `email_user` varchar(25) DEFAULT NULL,
  `cle_user` varchar(25) DEFAULT NULL,
  `token_user` varchar(255) DEFAULT NULL,
  `motpass_user` varchar(255) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `id_grade` int DEFAULT '3',
  `confirmation_user` int DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_grade` (`id_grade`),
  CONSTRAINT `id_grade` FOREIGN KEY (`id_grade`) REFERENCES `grades` (`id_grade`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table soins_capillaires.users : ~15 rows (environ)
INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `cle_user`, `token_user`, `motpass_user`, `created`, `id_grade`, `confirmation_user`) VALUES
	(3, 'maka', 'denis', 'makadenis@gmail.com', '82234748737495', 'DwEdjO6CD3PXlds2ZxZ8PQwde05znt', '92d1892d6b133c36fa91f28acb8f2cdc21ac7328', '2024-11-06', 1, NULL),
	(4, 'kazadi', 'kelly', 'kazadikelly@gmail.com', '55743243123829', '8f06JXc41C8HpW9OhLUuJ1EmzDyCh2', '8b5602bfe9b07c677ba43d11c19dfcc49a4aa29a', '2024-11-06', 3, NULL),
	(5, 'Maka', 'Justine', 'makajustine@gmail.com', '89445480229548', 'JnSKJWnZAClFJx6h04Ylv4ZYtFECKa', 'cb8b365dfae25ebe662323337ff5f83679ca93a6', '2024-11-06', 3, NULL),
	(6, 'kaba', 'tshetshe', 'kabatshetshe@gmail.com', '83665734635380', 'XYlKjKfrlQl8osGt17BUzs1z0ewA7M', '5f4582904c54c5ff00e91f8a5ddf3aa6889b8e77', '2024-11-06', 3, NULL),
	(7, 'muyaka', 'david', 'muyakadavid@gmail.com', '09566725135796', 'xLi6adlJFXJXkXN47spEM39kq3LbA5', '919bb27ef014820abb4f8529e7418e231d506290', '2024-11-06', 3, NULL),
	(8, 'Makopa', 'Synthia', 'makopasynthia@gmail.com', '58991646595673', '0IEGX9Iw87riJZVgDTd7rYCu2mS8pM', '818b5183f5c3f064ea9cd2f5d9cdebc43e7d0192', '2024-11-06', 3, NULL),
	(9, 'katalay', 'eliel', 'katalayeliel@gmail.com', '27575334212863', 'H99rFenJUv9deAuFLSfsYVJQvq0s3m', 'a3754e2b57830ae388e48f25179e8db955aa6412', '2024-11-06', 3, NULL),
	(10, 'kelly', 'kazadi', 'kellykazadi@gmail.com', '60767513248089', 'zq4NLqiaxCoUIHPAEZyYTzw9vR7rDs', 'ee2b6a2d3be34e162bcd1dbc42a765b1e12a8485', '2024-11-06', 3, NULL),
	(11, 'lomande', 'Aristote', 'lomandearistote@gmail.com', '46960754444803', 'Ib3k7b4aBqO3zs8lAZYbp6AmUkqnpr', '26067364f16997d1b6e65365e1df10417f6202ca', '2024-11-07', 3, NULL),
	(12, 'dhedonga', 'elvis', 'dhedongaelvis@gmail.com', '54044704451923', 'ZX5yc3uXXnP527N8g6WtyIpaMxHPbD', '00c52f25cd233a209554d8c14919a8a63500d491', '2024-11-08', 3, NULL),
	(13, 'makaya', 'samedi', 'makaya@gmail.com', '36000912273244', 'E31kOTC7TYIUThMPhz1Hx9P4A90dXg', 'b491eb8cdce4de5bd5dfe6d09cc1b86816105df9', '2024-11-08', 3, NULL),
	(14, 'ngoma', 'josue', 'ngomajosue@gmail.com', '16150145416346', '8JSqejqloB74YPd4ow3AqELALaglpX', 'ebffc22a4978e61dbfc66060cbbe9114b0be8bff', '2024-11-10', 3, NULL),
	(15, 'ntumba', 'magloire', 'a@gmail.com', '32370808717519', 'B9RweTg0rbs7ghd2f1Wiy4s7rfV4wt', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2024-11-10', 3, NULL),
	(16, 'jbcdc', 'dkjhrb', 'jbcdcdkjhrb@gmail.com', '79001323781697', 'Mmf6vDyCUhR5JOCf4Ew0ULWpZDpRiS', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', '2024-11-10', 3, NULL),
	(17, 'betta', 'Ngambu', 'bettangandu@gmail.com', '54185939127663', 'WNtb5U9GNuHtvOTZwJV38Mtd6p8lHu', '38b325eb84f8418edde5538f514ee225b9375f6a', '2024-11-13', 3, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
