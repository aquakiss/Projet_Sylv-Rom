-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Mai 2015 à 17:34
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
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `mdp`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sujet` varchar(252) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_crea` datetime NOT NULL,
  `email` varchar(150) NOT NULL,
  `vue` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `sujet`, `message`, `date_crea`, `email`, `vue`) VALUES
(1, 'trety', 'dfgh', 'rftghgj', 'fgh', '2015-05-07 14:39:20', 'toto@toto.fr', 0),
(2, 'trety', 'dfgh', 'rftghgj', 'fgh', '2015-05-07 15:50:57', 'toto@toto.fr', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `nb_employe`, `departement`, `domaine`, `categorie`, `description`, `presentation`, `lien_interview`, `international`, `partenaire`) VALUES
(1, 'L''Oréal', 75000, 'charleaner', 'Cosmétique', 'Bio', '', 'L’Oréal est un groupe industriel français de produits cosmétiques.', '', 1, 0),
(2, 'test', 2500, 'aquitaik', 'Biologie-Organique', 'yolo', 'non non rien a changer', 'oups', 'www.oups.com', 1, 0),
(3, 'Biorg', 22, 'Creux et vide', 'Moléculaire', 'Chimie', '', '', '', 0, 0),
(4, 'Hanculus', 5, 'aquinaik', 'Informatique', 'Informatique', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `imagentreprise`
--

CREATE TABLE IF NOT EXISTS `imagentreprise` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `idEntreprise` int(3) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='table des images' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

CREATE TABLE IF NOT EXISTS `laboratoire` (
  `id_entreprise` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `laboratoire`
--

INSERT INTO `laboratoire` (`id_entreprise`, `nom`) VALUES
(1, 'Pyromanci'),
(1, 'Pyromanci');

-- --------------------------------------------------------

--
-- Structure de la table `metiers`
--

CREATE TABLE IF NOT EXISTS `metiers` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `metiers`
--

INSERT INTO `metiers` (`id`, `nom`) VALUES
(1, 'pyromancien'),
(1, 'pyromancien');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
