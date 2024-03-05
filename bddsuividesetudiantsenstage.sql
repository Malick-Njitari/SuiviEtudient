-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 avr. 2023 à 12:47
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddsuividesetudiantsenstage`
--

-- --------------------------------------------------------

--
-- Structure de la table `encadreurprofesionnel`
--

CREATE TABLE `encadreurprofesionnel` (
  `CODEENCADREURPROFESIONNEL` varchar(15) NOT NULL,
  `NOMENCADREURPROFESIONNEL` varchar(50) DEFAULT NULL,
  `TELEPHONEENCADREURPROFESIONNEL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encadreurprofesionnel`
--

INSERT INTO `encadreurprofesionnel` (`CODEENCADREURPROFESIONNEL`, `NOMENCADREURPROFESIONNEL`, `TELEPHONEENCADREURPROFESIONNEL`) VALUES
('ENCD001', 'TAMO TATA', '242 58 99 85');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `IDENTREPRISE` int(11) NOT NULL,
  `NOMENTREPRISE` varchar(50) DEFAULT NULL,
  `ADRESSEENTREPRISE` varchar(50) DEFAULT NULL,
  `TELEPHONEENTREPRISE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`IDENTREPRISE`, `NOMENTREPRISE`, `ADRESSEENTREPRISE`, `TELEPHONEENTREPRISE`) VALUES
(1, 'SIANTOU SUPERIEUR', 'YAOUNDE CORON', '655 88 99 74'),
(2, 'ORANGE CAMEROUN', 'DOUALA', '699 77 88 55'),
(3, 'MTN', 'YAOUNDE', '677 88 99 52');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `MATRICULESTAGIAIRE` varchar(15) NOT NULL,
  `IDENTREPRISE` int(11) NOT NULL,
  `CODEENCADREURPROFESIONNEL` varchar(15) NOT NULL,
  `NOMSTAGIAIRE` varchar(50) DEFAULT NULL,
  `TELEPHONESTAGIAIRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`MATRICULESTAGIAIRE`, `IDENTREPRISE`, `CODEENCADREURPROFESIONNEL`, `NOMSTAGIAIRE`, `TELEPHONESTAGIAIRE`) VALUES
('STAG01', 1, 'ENCD001', 'TATI ELO', '655 88 99 85');

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `IDTACHE` int(11) NOT NULL,
  `MATRICULESTAGIAIRE` varchar(15) NOT NULL,
  `NOMDELATACHE` varchar(50) DEFAULT NULL,
  `DATEDELATACHE` date DEFAULT NULL,
  `DESCRIPTIONDELATACHE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`IDTACHE`, `MATRICULESTAGIAIRE`, `NOMDELATACHE`, `DATEDELATACHE`, `DESCRIPTIONDELATACHE`) VALUES
(1, 'STAG01', 'INSTALLATION ANTIVIRUS', '2023-04-26', 'INSTALLATION ANTIVIRUS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `encadreurprofesionnel`
--
ALTER TABLE `encadreurprofesionnel`
  ADD PRIMARY KEY (`CODEENCADREURPROFESIONNEL`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`IDENTREPRISE`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`MATRICULESTAGIAIRE`),
  ADD KEY `FK_ENCADRER` (`CODEENCADREURPROFESIONNEL`),
  ADD KEY `FK_RECEVOIR` (`IDENTREPRISE`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`IDTACHE`),
  ADD KEY `FK_REALISER` (`MATRICULESTAGIAIRE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `IDENTREPRISE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `IDTACHE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD CONSTRAINT `FK_ENCADRER` FOREIGN KEY (`CODEENCADREURPROFESIONNEL`) REFERENCES `encadreurprofesionnel` (`CODEENCADREURPROFESIONNEL`),
  ADD CONSTRAINT `FK_RECEVOIR` FOREIGN KEY (`IDENTREPRISE`) REFERENCES `entreprise` (`IDENTREPRISE`);

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `FK_REALISER` FOREIGN KEY (`MATRICULESTAGIAIRE`) REFERENCES `stagiaire` (`MATRICULESTAGIAIRE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
