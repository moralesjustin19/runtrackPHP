-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 jan. 2025 à 09:41
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
