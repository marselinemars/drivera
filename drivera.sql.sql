-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 avr. 2023 à 20:44
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `drivera`
--

-- --------------------------------------------------------

--
-- Structure de la table `driving_school`
--

CREATE TABLE `driving_school` (
  `Name` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `num_monitors` int(11) NOT NULL,
  `num_vehicles` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `business_license` blob NOT NULL,
  `categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enrollement`
--

CREATE TABLE `enrollement` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `schedule` int(11) NOT NULL,
  `monitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `idi` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `last-payment` date NOT NULL,
  `next-payment` date NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `monitor`
--

CREATE TABLE `monitor` (
  `IDM` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_num` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bgroup` varchar(3) NOT NULL,
  `exp` int(11) DEFAULT NULL,
  `profileimage` blob DEFAULT NULL,
  `exp_date` date NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `schedule`
--

CREATE TABLE `schedule` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `monitor` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `duration` time NOT NULL,
  `amount` double NOT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `IDS` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_num` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `profileimage` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `theowner`
--

CREATE TABLE `theowner` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone_num` varchar(12) NOT NULL,
  `profileimage` blob NOT NULL,
  `id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `thestate` varchar(20) NOT NULL,
  `theid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `Mat` bigint(20) NOT NULL,
  `model` varchar(40) NOT NULL,
  `year` year(4) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Graycard` date NOT NULL,
  `technique control` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enrollement`
--
ALTER TABLE `enrollement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Schedule-fk` (`schedule`),
  ADD KEY `Monitor-fk` (`monitor`),
  ADD KEY `Student-fk` (`student`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`idi`);

--
-- Index pour la table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`IDM`);

--
-- Index pour la table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Mfk` (`monitor`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`IDS`);

--
-- Index pour la table `theowner`
--
ALTER TABLE `theowner`
  ADD PRIMARY KEY (`theid`);

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`Mat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enrollement`
--
ALTER TABLE `enrollement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `IDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `IDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `theowner`
--
ALTER TABLE `theowner`
  MODIFY `theid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enrollement`
--
ALTER TABLE `enrollement`
  ADD CONSTRAINT `Monitor-fk` FOREIGN KEY (`monitor`) REFERENCES `monitor` (`IDM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Schedule-fk` FOREIGN KEY (`schedule`) REFERENCES `schedule` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Student-fk` FOREIGN KEY (`student`) REFERENCES `student` (`IDS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `Mfk` FOREIGN KEY (`monitor`) REFERENCES `monitor` (`IDM`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
