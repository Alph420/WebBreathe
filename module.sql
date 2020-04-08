-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 avr. 2020 à 10:34
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `modules`
--

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `nom_module` varchar(30) NOT NULL,
  `numero_module` int(15) NOT NULL,
  `description_module` text NOT NULL,
  `type_module` varchar(20) NOT NULL,
  `module_frequence_enntretien` varchar(10) DEFAULT NULL,
  `module_date_start` date NOT NULL,
  `module_date_end` date NOT NULL,
  UNIQUE KEY `unique_serial_number` (`numero_module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`nom_module`, `numero_module`, `description_module`, `type_module`, `module_frequence_enntretien`, `module_date_start`, `module_date_end`) VALUES
('NomDuModule', 5, 'description de base', 'type de base', '1 mois', '2020-05-10', '2020-06-10'),
('NomDuModule', 1, 'description de base', 'type de base', '1 mois', '2020-05-10', '2020-06-10'),
('NomDuModule', 3, 'description de base', 'type de base', '1 mois', '2020-05-10', '2020-06-10'),
('NomDuModule', 4, 'description de base', 'type de base', '1 mois', '2020-05-10', '2020-06-10'),
('NomDuModule', 2, 'description de base', 'type de base', '1 mois', '2020-05-10', '2020-06-10'),
('Module Alpha', 123, 'Module Alpha de test', 'Module de test Alpha', '5mois', '2020-05-20', '2025-05-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
