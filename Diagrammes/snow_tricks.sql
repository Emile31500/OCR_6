-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 09 mai 2023 à 10:31
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `snow_tricks`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `figure`
--

CREATE TABLE `figure` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `article` varchar(4096) NOT NULL,
  `statu` varchar(10) NOT NULL DEFAULT 'published',
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `figure`
--

INSERT INTO `figure` (`id`, `nom`, `slug`, `article`, `statu`, `image_url`) VALUES
(1, 'Japan Air', 'japan-air', 'Saisie de l\'avant de la planche, avec la main avant, du côté du carre frontside.', 'published', '6455e33296c62.jpg'),
(2, 'Nose grab', 'nose-grab', 'Saisie de la partie avant de la planche, avec la main avant.', 'published', '6455e377c9b4a.jpg'),
(3, 'Seat  Belt', 'seat--belt', 'Saisie du carre frontside à l\'arrière avec la main avant.', 'published', '6455e3c232ed4.jpg'),
(4, 'Truck Driver', 'truck-driver', 'Saisie du carré avant et carré arrière avec chaque main (comme tenir un volant de voiture).', 'published', '6455e3f557075.jpg'),
(5, 'Mute', 'mute', 'Saisie de la carre frontside de la planche entre les deux pieds avec la main avant.', 'published', '6455e45b01671.jpg'),
(6, 'Stale Fish', 'stale-fish', 'Saisie de la carre backside de la planche entre les deux pieds avec la main arrière.', 'published', '6455e4c5ad73b.jpg'),
(7, 'Style Week', 'style-week', 'Saisie de la carre backside de la planche, entre les deux pieds, avec la main avant.', 'published', '6455e50181917.jpg'),
(8, 'Indy', 'indy', 'Saisie de la carre frontside de la planche, entre les deux pieds, avec la main arrière.', 'published', '6456606a353ea.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `figure_id` int(11) DEFAULT NULL,
  `message` varchar(1500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `utilisateur_id`, `figure_id`, `message`, `date`) VALUES
(1, 2, 1, 'Dommage que cette figure soit super dur :(', '2023-05-06 08:53:05'),
(3, 2, 1, 'Moi je l\'ai trouvé simple :)', '2023-05-06 08:54:01'),
(4, 2, 1, 'Message qui ne doit pas s\'enregistrer.', '2023-05-06 15:16:57');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(64) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `code_recup` varchar(64) DEFAULT NULL,
  `recup_date` datetime DEFAULT NULL,
  `verification_code` varchar(64) DEFAULT NULL,
  `verification_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `roles`, `password`, `nom_utilisateur`, `nom`, `prenom`, `date_de_naissance`, `is_verified`, `code_recup`, `recup_date`, `verification_code`, `verification_date`) VALUES
(1, 'emile00013@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$TvPt9d8FaXCQfOSAwDimyeZj1f/TPH0n2JDJwo7faBJqR0oddsPOO', 'Émile', 'ARMENGAUD', 'Émile', '2002-07-17', 1, NULL, NULL, NULL, NULL),
(2, 'emile00013+1@gmail.com', '[]', '$2y$13$IE0v/Es/WnQezd3wuAyQduaEQGtU282QCo7TaFVCysuFn7Hh.vy72', 'Émile l\'Utilisateur', 'Armengaud', 'Emile', '2002-07-17', 1, '0bd8318b39023305a3dfb552f69a2e41670352e9e38643078ec7d468a380e7bd', '2023-05-10 10:11:05', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `figure`
--
ALTER TABLE `figure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2F57B37A989D9B62` (`slug`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6BD307FFB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_B6BD307F5C011B5` (`figure_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `figure`
--
ALTER TABLE `figure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307F5C011B5` FOREIGN KEY (`figure_id`) REFERENCES `figure` (`id`),
  ADD CONSTRAINT `FK_B6BD307FFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
