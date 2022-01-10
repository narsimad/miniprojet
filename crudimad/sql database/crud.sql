-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 06 nov. 2021 à 19:13
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `sclass` int(10) NOT NULL,
  `sphone` varchar(10) NOT NULL,
  `ssexe` varchar(10) NOT NULL,
  `sstatut` varchar(20) NOT NULL,
  `typ_permis1` varchar(10) NOT NULL,
  `typ_permis2` varchar(10) NOT NULL,
  `typ_permis3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`sid`, `sname`, `saddress`, `sclass`, `sphone`, `ssexe`, `sstatut`, `typ_permis1`, `typ_permis2`, `typ_permis3`) VALUES
(15, 'Radia', 'tlemcen', 5, '2', 'feminin', '', 'on', '', ''),
(16, 'Karim', 'Sba', 6, '2', 'masculin', '', '', '', ''),
(20, 'Omar', 'Oran', 5, '9', 'masculin', '', '', 'on', 'on'),
(21, 'bensalem', 'mostaganem', 5, '19', 'masculin', '', '', '', ''),
(22, 'Daoud', 'tlemcen', 1, '100', 'masculin', 'divorce', '', '', 'on'),
(23, 'nouri', 'sba', 1, '89', 'masculin', 'masculin', '', '', ''),
(24, 'nabila', 'alger', 1, '88', 'feminin', 'feminin', '', '', ''),
(25, 'zaki', 'hm', 1, '56', 'masculin', 'masculin', '', '', ''),
(26, 'yamina', 'a', 6, '78', 'feminin', 'feminin', '', '', ''),
(28, 'haji', 'alger', 1, '88', 'masculin', 'marie', '', 'on', 'on'),
(29, 'tounsi', 'alger', 4, '78', 'feminin', 'divorce', '', '', ''),
(30, 'naim', 'oran', 6, '1', 'masculin', 'celibatiare', '', '', 'on');

-- --------------------------------------------------------

--
-- Structure de la table `studentclass`
--

CREATE TABLE `studentclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `studentclass`
--

INSERT INTO `studentclass` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'Btech'),
(3, 'Bsc'),
(4, 'Bcom'),
(5, 'toto'),
(6, 'vovo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Index pour la table `studentclass`
--
ALTER TABLE `studentclass`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `studentclass`
--
ALTER TABLE `studentclass`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
