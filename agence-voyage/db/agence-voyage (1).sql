-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 juin 2022 à 14:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agence-voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `adress` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(110) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `adress`, `email`, `password`, `telephone`) VALUES
(1, 'mohamed', 'elkhyat', 'beni ahmed chefchaouen', 'mohamed@gmail.com', 'moha123456', ''),
(2, 'manal', 'ezine', 'ouazzane', 'manal@gmail.com', 'manalmanal', '');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idVoyage` int(11) NOT NULL,
  `dateReservation` date NOT NULL,
  `dateVoyage` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `idClient`, `idVoyage`, `dateReservation`, `dateVoyage`) VALUES
(9, 2, 43, '2022-05-26', '2022-05-30'),
(10, 1, 41, '2022-05-26', '2022-05-31');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `id` int(4) NOT NULL,
  `villeDepart` varchar(255) COLLATE utf8_bin NOT NULL,
  `villeArrivee` varchar(255) COLLATE utf8_bin NOT NULL,
  `heureDepart` varchar(20) COLLATE utf8_bin NOT NULL,
  `heurArv` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbrHeurs` varchar(255) COLLATE utf8_bin NOT NULL,
  `nbrPlacesResrv` int(11) NOT NULL DEFAULT 0,
  `tarif` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`id`, `villeDepart`, `villeArrivee`, `heureDepart`, `heurArv`, `nbrHeurs`, `nbrPlacesResrv`, `tarif`) VALUES
(40, 'tetouan', 'tanger', '08:00', '10:15', '02 h 15 min', 0, '25.00 dh d'),
(41, 'tetouan', 'chechaouen', '08:00', '10:30', '02 h 30 min', 0, '20.00 dh d'),
(43, 'tetouan', 'ouazzane', '08:15', '10:30', '02 h 15 min', 0, '50.00 dh d'),
(45, 'tetouan', 'casa', '10:00', '15:00', '05 h 00 min', 0, '90.00 dh  '),
(46, 'tetouan', 'chechaouen', '10:00', '12:15', '02 h 15 min', 0, '20.00 dh d');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVoyage` (`idVoyage`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `idClient` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idVoyage` FOREIGN KEY (`idVoyage`) REFERENCES `voyage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
