-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Janvier 2015 à 15:44
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `banque`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `compte` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `adresse`, `compte`) VALUES
(1, 'PRICHE', 'Julien', '12 rue du Trompe la Mort 75012 PARIS', 0),
(2, 'RAUVRE', 'Ling', '451 rue Moisie, 75020 PARIS', 0),
(3, 'COOLMAN', 'Lolilol', '1 Jump street, 90210 BEVERLY HILLS', 0);

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE IF NOT EXISTS `comptes` (
`id` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `autoDec` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`id`, `solde`, `autoDec`) VALUES
(1, 110000, 1500),
(2, 240000, 2500),
(3, 26000, 800);

-- --------------------------------------------------------

--
-- Structure de la table `histo`
--

CREATE TABLE IF NOT EXISTS `histo` (
`id` int(11) NOT NULL,
  `compte` int(11) NOT NULL,
  `motif` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `histo`
--

INSERT INTO `histo` (`id`, `compte`, `motif`, `credit`, `debit`, `solde`, `date`) VALUES
(1, 1, 0, 120000, 0, 120000, '2015-01-07'),
(2, 2, 0, 240000, 0, 240000, '2015-01-07'),
(3, 3, 0, 16000, 0, 16000, '2015-01-07'),
(4, 2, 1, 100000, 0, 340000, '2015-01-07'),
(5, 1, 2, 0, 100000, 20000, '2015-01-07'),
(6, 3, 2, 48000, 0, 64000, '2015-01-07'),
(7, 2, 3, 0, 48000, 292000, '2015-01-07'),
(8, 1, 3, 38000, 0, 58000, '2015-01-07'),
(9, 3, 1, 0, 38000, 26000, '2015-01-07'),
(10, 1, 2, 46000, 0, 104000, '2015-01-07'),
(11, 2, 1, 0, 46000, 246000, '2015-01-07'),
(12, 1, 2, 6000, 0, 110000, '2015-01-07'),
(13, 2, 1, 0, 6000, 240000, '2015-01-07');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `histo`
--
ALTER TABLE `histo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `histo`
--
ALTER TABLE `histo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
