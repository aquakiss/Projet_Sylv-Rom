-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 08 Mai 2015 à 21:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `enterprise`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `nb_employe` int(11) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL COMMENT 'domaine de entreprise',
  `categorie` varchar(255) NOT NULL COMMENT 'domaine',
  `description` text NOT NULL,
  `presentation` varchar(255) NOT NULL,
  `lien_interview` varchar(255) NOT NULL,
  `international` tinyint(1) NOT NULL,
  `partenaire` int(11) NOT NULL COMMENT 'partenaire au site',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `nb_employe`, `departement`, `domaine`, `categorie`, `description`, `presentation`, `lien_interview`, `international`, `partenaire`) VALUES
(1, 'lea nature', 50, 'Charente', 'biologie', 'science', 'sfhgdjdydjdyjdfy', 'crème', 'aucun', 0, 0),
(2, 'Vichy', 25000, 'aquitaik', 'Biologie-Organique', 'la mort', 'non non non rien a changer', 'tout va continuer', 'www.vichyinter.com', 1, 0),
(3, 'Biorg', 22, 'Creux et vide', 'Moléculaire', 'Chimie', '', '', '', 0, 0),
(4, 'Hanculus', 5, 'aquinaik', 'Informatique', 'Informatique', '', '', '', 0, 0),
(6, 'Bien vu', 500000, 'haouu', 'mouchoire', 'le nez', 'mouche toi', 'le mouchoire en carton', 'non', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
