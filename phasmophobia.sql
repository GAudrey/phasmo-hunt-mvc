-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 jan. 2021 à 10:37
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phasmophobia`
--

-- --------------------------------------------------------

--
-- Structure de la table `ghosts_has_clues`
--

DROP TABLE IF EXISTS `ghosts_has_clues`;
CREATE TABLE IF NOT EXISTS `ghosts_has_clues` (
  `fk_id_ghosts` int(11) NOT NULL,
  `fk_id_clues` int(11) NOT NULL,
  KEY `fk_id_ghosts` (`fk_id_ghosts`),
  KEY `fk_id_clues` (`fk_id_clues`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `ghosts_has_clues`
--

INSERT INTO `ghosts_has_clues` (`fk_id_ghosts`, `fk_id_clues`) VALUES
(1, 5),
(1, 6),
(1, 3),
(2, 6),
(2, 1),
(2, 5),
(3, 2),
(3, 4),
(3, 1),
(4, 5),
(4, 6),
(4, 4),
(5, 2),
(5, 6),
(5, 1),
(6, 5),
(6, 4),
(6, 2),
(7, 5),
(7, 4),
(7, 1),
(8, 2),
(8, 6),
(8, 3),
(9, 2),
(9, 4),
(9, 3),
(10, 5),
(10, 3),
(10, 1),
(11, 4),
(11, 3),
(11, 1),
(12, 2),
(12, 5),
(12, 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_clues`
--

DROP TABLE IF EXISTS `t_clues`;
CREATE TABLE IF NOT EXISTS `t_clues` (
  `id_clue` int(11) NOT NULL AUTO_INCREMENT,
  `clues` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_clue`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `t_clues`
--

INSERT INTO `t_clues` (`id_clue`, `clues`) VALUES
(1, 'Freezing temperature'),
(2, 'EMF 5'),
(3, 'Ghost writing'),
(4, 'Orb'),
(5, 'Spirit box'),
(6, 'Fingerprint');

-- --------------------------------------------------------

--
-- Structure de la table `t_firstname`
--

DROP TABLE IF EXISTS `t_firstname`;
CREATE TABLE IF NOT EXISTS `t_firstname` (
  `id_firstname` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_firstname`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `t_firstname`
--

INSERT INTO `t_firstname` (`id_firstname`, `firstname`, `sexe`) VALUES
(1, 'Barbara', 'F'),
(3, 'Betty', 'F'),
(4, 'Carol', 'F'),
(5, 'Donna', 'F'),
(6, 'Dorothy', 'F'),
(7, 'Elizabeth', 'F'),
(8, 'Helen', 'F'),
(9, 'Jennifer', 'F'),
(10, 'Karen', 'F'),
(11, 'Linda', 'F'),
(12, 'Lisa', 'F'),
(13, 'Margaret', 'F'),
(14, 'Maria', 'F'),
(15, 'Mary', 'F'),
(16, 'Nancy', 'F'),
(17, 'Patricia', 'F'),
(18, 'Ruth', 'F'),
(19, 'Sandra', 'F'),
(20, 'Susan', 'F'),
(21, 'Charles', 'M'),
(22, 'Christopher', 'M'),
(23, 'Daniel', 'M'),
(24, 'David', 'M'),
(25, 'Donald', 'M'),
(26, 'George', 'M'),
(27, 'James', 'M'),
(28, 'John', 'M'),
(29, 'Joseph', 'M'),
(30, 'Kenneth', 'M'),
(31, 'Mark', 'M'),
(32, 'Michael', 'M'),
(33, 'Paul', 'M'),
(34, 'Richard', 'M'),
(35, 'Robert', 'M'),
(36, 'Steven', 'M'),
(37, 'Thomas', 'M'),
(38, 'William', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `t_ghosts`
--

DROP TABLE IF EXISTS `t_ghosts`;
CREATE TABLE IF NOT EXISTS `t_ghosts` (
  `id_ghost` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `strength` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `weakness` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_ghost`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `t_ghosts`
--

INSERT INTO `t_ghosts` (`id_ghost`, `types`, `strength`, `weakness`) VALUES
(1, 'Spirit', 'None', 'Smudge stick'),
(2, 'Wraith', 'Doesn\'t touch the ground', 'Salt'),
(3, 'Phantom', 'Sanity drops when look at it', 'Disappears when a picture is taken'),
(4, 'Poltergeist', 'Throws multiple objects', 'Empty room'),
(5, 'Banshee', 'Only one target at a time', 'Crucifix'),
(6, 'Jinn', 'Move faster when light is on', 'Turning the power off limits his ability'),
(7, 'Mare', 'Darkness is is friend', 'Turning on the light'),
(8, 'Revenant', 'Hunt fast', 'Hiding slow him'),
(9, 'Shade', 'Shy, hard to find', 'Doesn\'t hunt when multiple people'),
(10, 'Demon', 'Attack more', 'Sanity doesn\'t drop with Ouija board'),
(11, 'Yurei', 'Sanity drops faster', 'Smudge the room'),
(12, 'Oni', 'More active than most', 'Fast identification');

-- --------------------------------------------------------

--
-- Structure de la table `t_lastname`
--

DROP TABLE IF EXISTS `t_lastname`;
CREATE TABLE IF NOT EXISTS `t_lastname` (
  `id_lastname` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_lastname`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `t_lastname`
--

INSERT INTO `t_lastname` (`id_lastname`, `lastname`) VALUES
(1, 'Anderson'),
(2, 'Brown'),
(3, 'Clark'),
(4, 'Davis'),
(5, 'Garcia'),
(6, 'Harris'),
(7, 'Jackson'),
(8, 'Johnson'),
(9, 'Jones'),
(10, 'Martin'),
(11, 'Martinez'),
(12, 'Miller'),
(13, 'Moore'),
(14, 'Robinson'),
(15, 'Smith'),
(16, 'Taylor'),
(17, 'Thomas'),
(18, 'Thompson'),
(19, 'Williams'),
(20, 'Wilson'),
(21, 'White');

-- --------------------------------------------------------

--
-- Structure de la table `t_objectives`
--

DROP TABLE IF EXISTS `t_objectives`;
CREATE TABLE IF NOT EXISTS `t_objectives` (
  `id_objective` int(11) NOT NULL AUTO_INCREMENT,
  `objective` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_objective`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `t_objectives`
--

INSERT INTO `t_objectives` (`id_objective`, `objective`) VALUES
(1, 'Find evidence of paranormal activity with an EMF Reader'),
(2, 'Detect a room below 10° Celsius/50° Fahrenheit with a Thermometer'),
(3, 'Capture a photo of dirty water in a sink'),
(4, 'Capture a photo of the ghost'),
(5, 'Detect a ghost\'s presence with a Motion Sensor'),
(6, 'Prevent the ghost from hunting with a Crucifix'),
(7, 'Have a member of your team witness a Ghost event'),
(8, 'Cleanse the area near the ghost using Smudge Sticks'),
(9, 'Get a Ghost to walk through Salt');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ghosts_has_clues`
--
ALTER TABLE `ghosts_has_clues`
  ADD CONSTRAINT `fk_id_clues` FOREIGN KEY (`fk_id_clues`) REFERENCES `t_clues` (`id_clue`),
  ADD CONSTRAINT `fk_id_ghosts` FOREIGN KEY (`fk_id_ghosts`) REFERENCES `t_ghosts` (`id_ghost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
