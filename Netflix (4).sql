-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 27 août 2020 à 10:11
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Netflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `Abonne`
--

CREATE TABLE `Abonne` (
  `IDuser` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Sexe` varchar(100) NOT NULL,
  `AnneeN` int(4) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `NumPortable` int(20) DEFAULT NULL,
  `Photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Abonne`
--

INSERT INTO `Abonne` (`IDuser`, `Nom`, `Prenom`, `Sexe`, `AnneeN`, `Email`, `Pwd`, `NumPortable`, `Photo`) VALUES
(39010770, 'HADJARA', 'Celina', '', 1999, 'hadjaracelina3@gmail.com', 'Did you like1', 620463366, ''),
(39010771, 'Hamma', 'Hamza', '', 1990, 'hadjaracelina@gmail.com', 'Did you like1', 620463366, ''),
(39010772, 'Hadjara', 'Hamza', '', 1999, 'hadjarace@gmail.com', 'Did you like1', 620635647, '');

-- --------------------------------------------------------

--
-- Structure de la table `Episode`
--

CREATE TABLE `Episode` (
  `IDEp` int(11) NOT NULL,
  `Titre_ep` varchar(100) NOT NULL,
  `RefSer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Episode`
--

INSERT INTO `Episode` (`IDEp`, `Titre_ep`, `RefSer`) VALUES
(2, 'Bienvenue', 1),
(3, 'Désir', 1),
(5, 'Samedi soir', 1),
(6, 'L\'mour est d\'une drogue', 1),
(7, 'Mensonges', 1),
(8, 'Tout ira bien', 1),
(9, 'Quand tout explose', 1),
(10, 'Assilah', 1),
(11, 'Episode 1', 2),
(12, 'Episode 2', 2),
(13, 'Episode 3', 2),
(14, 'Episode 4', 2),
(15, 'Episode 5', 2),
(16, 'Episode 6', 2),
(17, 'Episode 7', 2),
(18, 'Episode 8', 2),
(19, 'Episode 9', 2),
(20, 'Episode 10', 2),
(21, 'Episode 11', 2),
(22, 'Episode 12', 2),
(23, 'Episode 13', 2);

-- --------------------------------------------------------

--
-- Structure de la table `Regarder`
--

CREATE TABLE `Regarder` (
  `RefUser` int(11) NOT NULL,
  `RefEpi` int(11) NOT NULL,
  `Heure` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Serie`
--

CREATE TABLE `Serie` (
  `IDSer` int(11) NOT NULL,
  `Titre_ser` varchar(100) NOT NULL,
  `Catégorie` varchar(100) DEFAULT NULL,
  `Descri` text DEFAULT NULL,
  `Nb_ep` int(20) NOT NULL,
  `Acteurs` text DEFAULT NULL,
  `Realisateur` varchar(100) DEFAULT NULL,
  `Annee_Sortie` varchar(11) DEFAULT NULL,
  `Photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Serie`
--

INSERT INTO `Serie` (`IDSer`, `Titre_ser`, `Catégorie`, `Descri`, `Nb_ep`, `Acteurs`, `Realisateur`, `Annee_Sortie`, `Photo`) VALUES
(1, 'Elite', 'Thriller dramatique', 'Après leffondrement de leur lycée, trois étudiants de la classe ouvrière sont admis à Las Encinas, un prestigieux lycée huppé qui accueille les jeunes de lélite. Mais des différences de classes et la confrontation des étudiants aboutissent à un homicide.', 24, 'Itzan Escamilla (VF : Dimitri Rougeul) : Samuel « Samu » García Domínguez Miguel Bernardeau (VF : Gauthier Battoue) : Guzmán Nunier Osuna Arón Piper (VF : Bruno Méyère) : Ander Muñoz Mina El Hammani (VF : Cécile dOrlando) : Nadia Shana Omar Ayuso (VF : Romain Altché) : Omar Shana Ester Expósito (VF : Jennifer Fauveau) : Carla Rosón Caleruega Danna Paola (VF : Emilie Rault) : Lucrecia « Lu » Montesinos Hendrich Claudia Salas (VF : Bérénice Bala) : Rebeka « Rebe » de Bormujo Ávalos (depuis la saison 2) Georgina Amorós (es) (VF : Lila Lacombe) : Cayetana Grajera Pando (depuis la saison 2) Leïti Sène (VF : Simon Koukissa) : Malick (depuis la saison 3)', 'Darío Madrona Carlos Montero', '2018', ''),
(2, 'La casa de papel', 'Drame Thriller Braquage', 'Un homme mystérieux, surnommé le Professeur (El Profesor), planifie le meilleur braquage jamais réalisé. Pour exécuter son plan, il recrute huit des meilleurs malfaiteurs en Espagne qui n ont rien à perdre.  Le but est d infiltrer la Fabrique nationale de la monnaie et du timbre afin dimprimer 2,4 milliards d euros, en petites coupures de 50 € et cela en moins de onze jours, sans victimes – malgré la présence de 67 otages, dont la fille de l ambassadeur du Royaume-Uni.', 30, 'Alba Flores Úrsula Corberó Álvaro Morte Itziar Ituño Najwa Nimri', 'Álex Pina', '2017', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Abonne`
--
ALTER TABLE `Abonne`
  ADD PRIMARY KEY (`IDuser`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `Episode`
--
ALTER TABLE `Episode`
  ADD PRIMARY KEY (`IDEp`),
  ADD KEY `C1` (`RefSer`);

--
-- Index pour la table `Regarder`
--
ALTER TABLE `Regarder`
  ADD PRIMARY KEY (`RefUser`,`RefEpi`),
  ADD KEY `RefUser` (`RefUser`),
  ADD KEY `C3` (`RefEpi`);

--
-- Index pour la table `Serie`
--
ALTER TABLE `Serie`
  ADD PRIMARY KEY (`IDSer`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Abonne`
--
ALTER TABLE `Abonne`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39010773;

--
-- AUTO_INCREMENT pour la table `Episode`
--
ALTER TABLE `Episode`
  MODIFY `IDEp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `Serie`
--
ALTER TABLE `Serie`
  MODIFY `IDSer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Episode`
--
ALTER TABLE `Episode`
  ADD CONSTRAINT `C1` FOREIGN KEY (`RefSer`) REFERENCES `Serie` (`IDSer`);

--
-- Contraintes pour la table `Regarder`
--
ALTER TABLE `Regarder`
  ADD CONSTRAINT `C2` FOREIGN KEY (`RefUser`) REFERENCES `Abonne` (`IDuser`),
  ADD CONSTRAINT `C3` FOREIGN KEY (`RefEpi`) REFERENCES `Episode` (`IDEp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
