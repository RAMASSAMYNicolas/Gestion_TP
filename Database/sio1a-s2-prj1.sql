-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 13 Janvier 2017 à 08:43
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sio1a-s2-prj1`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `numDemande` int(5) NOT NULL AUTO_INCREMENT,
  `dateDemande` date NOT NULL,
  `descriptionDemande` text NOT NULL,
  `loginEmp` varchar(30) NOT NULL,
  PRIMARY KEY (`numDemande`),
  KEY `loginEmp` (`loginEmp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `loginEmp` varchar(30) NOT NULL,
  `passwordEmp` varchar(20) NOT NULL,
  `nomEmp` varchar(25) NOT NULL,
  `prenomEmp` varchar(20) NOT NULL,
  `dateEmbaucheEmp` date NOT NULL,
  `telEmp` varchar(10) NOT NULL,
  `numService` int(2) NOT NULL,
  `numTypeLogin` int(2) NOT NULL,
  PRIMARY KEY (`loginEmp`),
  KEY `numService` (`numService`),
  KEY `numTypeLogin` (`numTypeLogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `numIntervention` int(6) NOT NULL AUTO_INCREMENT,
  `dateIntervention` date NOT NULL,
  `descriptionIntervention` text NOT NULL,
  `numDemande` int(6) NOT NULL,
  PRIMARY KEY (`numIntervention`),
  KEY `numDemande` (`numDemande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `numMarque` int(2) NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(20) NOT NULL,
  PRIMARY KEY (`numMarque`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`numMarque`, `nomMarque`) VALUES
(1, 'Lenovo'),
(2, 'Dell'),
(3, 'Hewlett-Packard'),
(4, 'Lexmark'),
(5, 'Canon'),
(6, 'Epson'),
(7, 'Cisco'),
(8, 'Netgear');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
  `refMat` varchar(10) NOT NULL,
  `nomModeleMat` varchar(20) NOT NULL,
  `caracteristiquesMat` varchar(50) NOT NULL,
  `dateAchatMat` date NOT NULL,
  `loginEmp` varchar(30) NOT NULL,
  `numTypeMat` int(2) NOT NULL,
  `numMarque` int(2) NOT NULL,
  PRIMARY KEY (`refMat`),
  KEY `numTypeMat` (`numTypeMat`),
  KEY `numMarque` (`numMarque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `numService` int(2) NOT NULL AUTO_INCREMENT,
  `nomService` varchar(20) NOT NULL,
  PRIMARY KEY (`numService`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`numService`, `nomService`) VALUES
(1, 'Direction'),
(2, 'Intendance'),
(3, 'Personnel'),
(4, 'Scolarité'),
(5, 'CPE');

-- --------------------------------------------------------

--
-- Structure de la table `type_login`
--

CREATE TABLE IF NOT EXISTS `type_login` (
  `numTypeLogin` int(2) NOT NULL AUTO_INCREMENT,
  `nomTypeLogin` varchar(20) NOT NULL,
  PRIMARY KEY (`numTypeLogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_login`
--

INSERT INTO `type_login` (`numTypeLogin`, `nomTypeLogin`) VALUES
(1, 'Utilisateur'),
(2, 'Gestionnaire'),
(3, 'Intervenant');

-- --------------------------------------------------------

--
-- Structure de la table `type_mat`
--

CREATE TABLE IF NOT EXISTS `type_mat` (
  `numTypeMat` int(2) NOT NULL AUTO_INCREMENT,
  `nomTypeMat` varchar(20) NOT NULL,
  PRIMARY KEY (`numTypeMat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `type_mat`
--

INSERT INTO `type_mat` (`numTypeMat`, `nomTypeMat`) VALUES
(1, 'Ordinateur'),
(2, 'Imprimante'),
(3, 'Scanner'),
(4, 'Réseau');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`loginEmp`) REFERENCES `employe` (`loginEmp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`numService`) REFERENCES `service` (`numService`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employe_ibfk_2` FOREIGN KEY (`numTypeLogin`) REFERENCES `type_login` (`numTypeLogin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `intervention_ibfk_1` FOREIGN KEY (`numDemande`) REFERENCES `demande` (`numDemande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `materiel_ibfk_1` FOREIGN KEY (`numTypeMat`) REFERENCES `type_mat` (`numTypeMat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materiel_ibfk_2` FOREIGN KEY (`numMarque`) REFERENCES `marque` (`numMarque`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
