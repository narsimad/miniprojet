-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 jan. 2022 à 16:04
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites_sportifs`
--

CREATE TABLE `activites_sportifs` (
  `code` int(10) NOT NULL,
  `activites` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites_sportifs`
--

INSERT INTO `activites_sportifs` (`code`, `activites`) VALUES
(5, 'football'),
(10, 'natation');

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE `nationalite` (
  `code` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nationalite`
--

INSERT INTO `nationalite` (`code`, `nom`) VALUES
(3, 'Algerien'),
(3, 'Algerien');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(10) NOT NULL,
  `Date Enregistrement` date NOT NULL,
  `Pays Nationalité` varchar(20) NOT NULL,
  `Drapeau` varchar(50) NOT NULL,
  `Adresse` varchar(70) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Statut` varchar(10) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Groupe Sanguin` varchar(3) NOT NULL,
  `Consommation Tabacs` varchar(10) NOT NULL,
  `Date Naissance` date NOT NULL,
  `Lieu Naissance` varchar(30) NOT NULL,
  `Pays Naissance` varchar(30) NOT NULL,
  `Profession` varchar(40) NOT NULL,
  `Adresse P` varchar(100) NOT NULL,
  `Ville P` varchar(50) NOT NULL,
  `N°Téléphone` int(25) NOT NULL,
  `Type Arts` varchar(30) NOT NULL,
  `Activite_sportive` varchar(30) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Vidéo` varchar(50) NOT NULL,
  `Résumé de la personnalité` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `Date Enregistrement`, `Pays Nationalité`, `Drapeau`, `Adresse`, `Ville`, `Pays`, `E-mail`, `Nom`, `Prénom`, `Statut`, `Religion`, `Groupe Sanguin`, `Consommation Tabacs`, `Date Naissance`, `Lieu Naissance`, `Pays Naissance`, `Profession`, `Adresse P`, `Ville P`, `N°Téléphone`, `Type Arts`, `Activite_sportive`, `Photo`, `Vidéo`, `Résumé de la personnalité`) VALUES
(6, '2021-12-01', 'Algerienne', '', 'sidi bel abbes ', 'Sidi bel Abbes', 'Algérie', 'dismail@gmail.com', 'Djebbar', 'Ismail', 'celibatair', 'musulman', 'B+', 'non', '0000-00-00', 'Sidi bel abbes', 'Algérie', 'Informaticien', 'Sidi bel abbes', 'sidi bel abbes', 779532411, 'cinéma', 'football', '', '', ''),
(20, '2022-01-01', 'Tunisienne', '', 'Oran', 'Oran', 'Algérie', 'kadour@gmail.com', 'bounoua', 'kadour', 'celibatair', 'musulman', 'AB+', 'oui', '0000-00-00', 'Tunis', 'Tunisie', 'Médecin', 'Oran', 'ORan', 0, 'musique', 'dodo', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `studentsport`
--

CREATE TABLE `studentsport` (
  `nom` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `studentsport`
--

INSERT INTO `studentsport` (`nom`, `name`) VALUES
('nars', 'tennis'),
('toufik', 'basketball');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(63) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `pseudo`, `username`, `password`) VALUES
(11, 'imad', 'Imad', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
