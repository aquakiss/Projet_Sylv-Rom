-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Mars 2015 à 16:41
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
  `domaine` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `presentation` varchar(255) NOT NULL,
  `lien_interview` varchar(255) NOT NULL,
  `international` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `nb_employe`, `departement`, `domaine`, `description`, `presentation`, `lien_interview`, `international`) VALUES
(1, 'L''Oréal', 75000, '', 'Cosmétique', '', 'L’Oréal est un groupe industriel français de produits cosmétiques.', '', 1),
(3, 'Biorg', 22, '', 'Moléculaire', '', '', '', 0),
(4, 'Hanculus', 5, '', 'Informatique', '', '', '', 0);

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
(1, 'pyromancien');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
