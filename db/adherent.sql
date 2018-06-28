-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 22 juin 2018 à 17:10
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `finarea`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `Licence No` varchar(30) NOT NULL,
  `Identity Type` varchar(30) NOT NULL,
  `Identity ID` varchar(30) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `League` varchar(30) NOT NULL,
  `Club` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Function` varchar(50) NOT NULL,
  `Creation Date` date NOT NULL,
  `Created By` varchar(30) NOT NULL,
  PRIMARY KEY (`Licence No`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`, `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`) VALUES
('LCS0000003', 'CIN', 'JL198318', 'Jalal', 'Baroudi', 'Professionnel', 'GRAND CASA', 'RCA', 'Casablanca', 'Medecin', '2018-05-04', 'amobarak'),
('LCS0000002', 'PASSPORT', 'K9019281', 'Nizar', 'Karroumi', 'Professionnel', 'GRAND CASA', 'WAC', 'Casablanca', 'Joueur', '2018-05-02', 'amobarak'),
('LCS0000001', 'CIN', 'BL091929', 'Khalid', 'Attouchi', 'Professionnel', 'GRAND CASA', 'WAC', 'Casablanca', 'Joueur', '2018-05-02', 'amobarak'),
('LCS0000004', 'CARTE SEJOUR', 'CS1039193', 'Mamado', 'Mamale', 'Professionnel', 'GRAND CASA', 'WAC', 'Casablanca', 'Entraineur', '2018-05-05', 'User2'),
('LCS0000005', 'CIN', 'HJ391838', 'Hakim', 'Habachi', 'Professionnel', 'GRAND CASA', 'RCA', 'Casablanca', 'Joueur', '2018-05-05', 'User2'),
('LCS0000006', 'CIN', 'BI193817', 'Hicham', 'Kabbaj', 'Amateur', 'NORD', 'ITTIHAD TANGER', 'Tanger', 'Joueur', '2018-05-05', 'User2'),
('LCS0000007', 'CIN', 'DJ391838', 'Saad', 'Nacer', 'Professionnel', 'NORD', 'ITTIHAD TANGER', 'Tanger', 'Joueur', '2018-05-08', 'User2'),
('LCS0000008', 'CIN', 'BL391832', 'Said', 'Achchab', 'Amateur', 'NORD', 'ITTIHAD TANGER', 'Tanger', 'Medecin', '2018-05-08', 'User1'),
('LCS0000009', 'PASSPORT', 'K1948134', 'Nicola', 'Makal', 'Amateur', 'NORD', 'ITTIHAD TANGER', 'Tanger', 'Joueur', '2018-05-08', 'User1'),
('LCS0000010', 'CIN', 'BJ193853', 'Abdellah', 'Chabab', 'Amateur', 'GRAND CASA', 'RCA', 'Casablanca', 'Joueur', '2018-05-08', 'User2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
