-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 jan. 2025 à 09:33
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Id_étage` int NOT NULL,
  `Capacité` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`Id`, `Nom`, `Id_étage`, `Capacité`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Co-working', 2, 80),
(6, 'Studio-video', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `étage`
--

DROP TABLE IF EXISTS `étage`;
CREATE TABLE IF NOT EXISTS `étage` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Numéro` int NOT NULL,
  `Superficie` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `étage`
--

INSERT INTO `étage` (`Id`, `Nom`, `Numéro`, `Superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `étudiants`
--

DROP TABLE IF EXISTS `étudiants`;
CREATE TABLE IF NOT EXISTS `étudiants` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Prénom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Sexe` varchar(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date de naissance` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `étudiants`
--

INSERT INTO `étudiants` (`Id`, `Prénom`, `Nom`, `Sexe`, `Email`, `Date de naissance`) VALUES
(1, 'Cyril', 'Zimmermann', 'Homme', 'cyril@laplateforme.io', '1989-01-02'),
(2, 'Jessica', 'Soriano', 'Femme', 'jessica@laplateforme.io', '1995-09-08'),
(3, 'Roxan', 'Roumégas', 'Femme', 'roxan@laplateforme.io', '2016-09-08'),
(4, 'Pascal', 'Assens', 'Homme', 'pascal@laplateforme.io', '1999-12-31'),
(5, 'Terry', 'Cristinelli', 'Homme', 'terry@laplateforme.io', '2005-02-01'),
(6, 'Ruben', 'Habib', 'Homme', 'ruben@laplateforme.io', '1993-05-26'),
(7, 'Toto', 'Dupont', 'Homme', 'toto@laplateforme.io', '2019-11-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
