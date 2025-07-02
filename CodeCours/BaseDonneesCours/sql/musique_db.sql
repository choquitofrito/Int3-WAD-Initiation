-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 juil. 2025 à 09:33
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `musique_db`
--
CREATE DATABASE IF NOT EXISTS `musique_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `musique_db`;

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `annee_formation` int(11) DEFAULT NULL,
  `lienImage` varchar(100) NOT NULL,
  `style_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nom`, `annee_formation`, `lienImage`, `style_id`) VALUES
(1, 'Queen', 1970, '', 1),
(2, 'The Beatles', 1960, '', 2),
(3, 'Metallica', 1981, 'metallica.jpg', 4),
(4, 'AC/DC', 1973, '', 3),
(5, 'Pink Floyd', 1965, 'pink-floyd.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `morceaux`
--

CREATE TABLE `morceaux` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `annee_sortie` int(11) DEFAULT NULL,
  `groupe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `morceaux`
--

INSERT INTO `morceaux` (`id`, `titre`, `annee_sortie`, `groupe_id`) VALUES
(1, 'Bohemian Rhapsody', 1975, 1),
(2, 'We Will Rock You', 1977, 1),
(3, 'Another One Bites the Dust', 1980, 1),
(4, 'Radio Ga Ga', 1984, 1),
(5, 'I Want to Break Free', 1984, 1),
(6, 'Dont Stop Me Now', 1979, 1),
(7, 'The Show Must Go On', 1991, 1),
(8, 'Somebody to Love', 1976, 1),
(9, 'Hey Jude', 1968, 2),
(10, 'Let It Be', 1970, 2),
(11, 'Yesterday', 1965, 2),
(12, 'Come Together', 1969, 2),
(13, 'Help!', 1965, 2),
(14, 'Yellow Submarine', 1966, 2),
(15, 'All You Need Is Love', 1967, 2),
(16, 'Here Comes the Sun', 1969, 2),
(17, 'Nothing Else Matters', 1991, 3),
(18, 'Enter Sandman', 1991, 3),
(19, 'Master of Puppets', 1986, 3),
(20, 'One', 1988, 3),
(21, 'The Unforgiven', 1991, 3),
(22, 'Fade to Black', 1984, 3),
(23, 'For Whom the Bell Tolls', 1984, 3),
(24, 'Seek & Destroy', 1983, 3),
(25, 'Highway to Hell', 1979, 4),
(26, 'Back in Black', 1980, 4),
(27, 'Thunderstruck', 1990, 4),
(28, 'TNT', 1975, 4),
(29, 'Hells Bells', 1980, 4),
(30, 'You Shook Me All Night Long', 1980, 4),
(31, 'Its a Long Way to the Top', 1976, 4),
(32, 'Whole Lotta Rosie', 1977, 4),
(33, 'Another Brick in the Wall', 1979, 5),
(34, 'Wish You Were Here', 1975, 5),
(35, 'Money', 1973, 5),
(36, 'Comfortably Numb', 1979, 5),
(37, 'Time', 1973, 5),
(38, 'Us and Them', 1973, 5),
(39, 'Have a Cigar', 1975, 5),
(40, 'Learning to Fly', 1987, 5);

-- --------------------------------------------------------

--
-- Structure de la table `styles`
--

CREATE TABLE `styles` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `styles`
--

INSERT INTO `styles` (`id`, `nom`) VALUES
(1, 'Rock'),
(2, 'Pop Rock'),
(3, 'Hard Rock'),
(4, 'Metal'),
(5, 'Pop');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `style_id` (`style_id`);

--
-- Index pour la table `morceaux`
--
ALTER TABLE `morceaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupe_id` (`groupe_id`);

--
-- Index pour la table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `morceaux`
--
ALTER TABLE `morceaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `styles`
--
ALTER TABLE `styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD CONSTRAINT `groupes_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `styles` (`id`);

--
-- Contraintes pour la table `morceaux`
--
ALTER TABLE `morceaux`
  ADD CONSTRAINT `morceaux_ibfk_1` FOREIGN KEY (`groupe_id`) REFERENCES `groupes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
