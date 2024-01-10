-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 jan. 2024 à 15:20
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp2_web_avancee`
--

-- --------------------------------------------------------

--
-- Structure de la table `artisans`
--

DROP TABLE IF EXISTS `artisans`;
CREATE TABLE IF NOT EXISTS `artisans` (
  `id_artisan` int NOT NULL AUTO_INCREMENT,
  `nom_artisan` varchar(50) DEFAULT NULL,
  `heure_d_ouvreture` time DEFAULT NULL,
  `catégorie` varchar(20) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `téléphone` decimal(10,0) DEFAULT NULL,
  `ID_User` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `commune` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_artisan`),
  KEY `ID_User` (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `artisans`
--

INSERT INTO `artisans` (`id_artisan`, `nom_artisan`, `heure_d_ouvreture`, `catégorie`, `Email`, `téléphone`, `ID_User`, `created_at`, `updated_at`, `commune`) VALUES
(4, 'bourek', NULL, 'sweety', 'mohamedbourek94@gmail.com', '697671970', 36, '2023-11-21 12:10:00', '2024-01-07 19:28:15', 'Mansourah'),
(5, 'bouguern', NULL, 'salty', 'sifou@gmail.com', '557295000', 38, '2023-12-05 09:36:46', '2023-12-05 10:38:38', 'oran'),
(6, 'boukelif', NULL, 'Both', 'abdess@gmail.com', '597864236', 41, '2023-12-11 21:06:32', '2024-01-05 20:18:57', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `Id_Commande` int NOT NULL AUTO_INCREMENT,
  `date_commande` date DEFAULT NULL,
  `adresse_livraison` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `état_commande` varchar(20) DEFAULT NULL,
  `id_artisan` int DEFAULT NULL,
  `Id_Livreur` int DEFAULT NULL,
  `Id_Consommateur` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Commande`),
  KEY `id_artisan` (`id_artisan`),
  KEY `Id_Livreur` (`Id_Livreur`),
  KEY `Id_Consommateur` (`Id_Consommateur`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`Id_Commande`, `date_commande`, `adresse_livraison`, `état_commande`, `id_artisan`, `Id_Livreur`, `Id_Consommateur`, `created_at`, `updated_at`) VALUES
(5, '2024-01-01', 'imama , mansourah , Tlemcen', 'En Attente', 4, 4, 20, '2024-01-01 17:22:55', '2024-01-06 16:41:53'),
(13, '2024-01-08', 'imama , mansourah , Tlemcen', 'En Attente', 4, NULL, 20, '2024-01-08 10:36:10', '2024-01-08 10:36:10'),
(14, '2024-01-08', 'imama , mansourah , Tlemcen', 'En Attente', 4, NULL, 20, '2024-01-08 10:43:52', '2024-01-08 10:43:52'),
(17, '2024-01-08', 'imama , mansourah , Tlemcen', 'En Attente', 4, NULL, 19, '2024-01-08 10:52:39', '2024-01-08 10:52:39');

-- --------------------------------------------------------

--
-- Structure de la table `consommateurs`
--

DROP TABLE IF EXISTS `consommateurs`;
CREATE TABLE IF NOT EXISTS `consommateurs` (
  `Id_Consommateur` int NOT NULL AUTO_INCREMENT,
  `nom_consommateur` varchar(50) DEFAULT NULL,
  `prénom_consommateur` varchar(50) DEFAULT NULL,
  `téléphone` decimal(10,0) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ID_User` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Consommateur`),
  KEY `ID_User` (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `consommateurs`
--

INSERT INTO `consommateurs` (`Id_Consommateur`, `nom_consommateur`, `prénom_consommateur`, `téléphone`, `adresse`, `Email`, `ID_User`, `created_at`, `updated_at`) VALUES
(20, 'bourek', 'amine', '698563265', NULL, 'mohamedbourek94@gmail.com', 43, '2023-12-15 15:11:22', '2023-12-23 13:05:06'),
(21, 'kabir', 'khaled', '597864236', NULL, 'khaled@gmail.com', 45, '2023-12-21 21:42:33', '2023-12-21 21:43:28'),
(19, 'bouchaour', 'amine', '697671970', NULL, 'amine@gmail.com', 40, '2023-12-05 12:59:39', '2023-12-05 12:59:39'),
(17, 'bouchaour', 'amine', '557295000', NULL, 'amine@gmail.com', 37, '2023-11-24 13:59:24', '2023-11-24 13:59:24');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

DROP TABLE IF EXISTS `evaluations`;
CREATE TABLE IF NOT EXISTS `evaluations` (
  `Id_Evaluation` int NOT NULL AUTO_INCREMENT,
  `type_evaluation` varchar(15) DEFAULT NULL,
  `commentaire` varchar(50) DEFAULT NULL,
  `Note` decimal(5,0) DEFAULT NULL,
  `id_artisan` int DEFAULT NULL,
  `Id_Livreur` int DEFAULT NULL,
  `Id_Produit` int DEFAULT NULL,
  `Id_Consommateur` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Evaluation`),
  KEY `id_artisan` (`id_artisan`),
  KEY `Id_Livreur` (`Id_Livreur`),
  KEY `Id_Produit` (`Id_Produit`),
  KEY `Id_Consommateur` (`Id_Consommateur`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `evaluations`
--

INSERT INTO `evaluations` (`Id_Evaluation`, `type_evaluation`, `commentaire`, `Note`, `id_artisan`, `Id_Livreur`, `Id_Produit`, `Id_Consommateur`, `created_at`, `updated_at`) VALUES
(7, 'produit', 'un bonne salé', '5', NULL, NULL, 1, 20, '2024-01-06 18:34:57', '2024-01-06 18:34:58'),
(4, 'artisan', 'grand travail', '5', 4, NULL, NULL, 20, '2024-01-06 18:34:57', '2024-01-06 18:34:58'),
(5, 'artisan', 'ggg', '3', 5, NULL, NULL, 19, '2024-01-06 18:34:57', '2024-01-06 18:34:58'),
(6, 'artisan', 'good job thanks!', '5', 6, NULL, NULL, 21, '2024-01-06 18:34:57', '2024-01-06 18:34:58'),
(27, 'artisan', 'great', '4', 4, NULL, NULL, 20, '2024-01-07 10:34:33', '2024-01-07 10:34:33'),
(9, 'produit', 'ba', '2', NULL, NULL, 1, 19, '2024-01-06 18:34:57', '2024-01-06 18:34:58'),
(25, 'produit', 'bravo!!!!', '4', NULL, NULL, 2, 20, '2024-01-07 10:15:53', '2024-01-07 10:15:53'),
(21, 'produit', 'génial', '5', NULL, NULL, 2, 20, '2024-01-06 20:08:52', '2024-01-06 20:08:52'),
(28, 'artisan', 'nope!!', '2', 5, NULL, NULL, 20, '2024-01-07 10:35:03', '2024-01-07 10:35:03'),
(30, 'livreur', 'un bon livreur !!!!!', '4', NULL, 4, NULL, 20, '2024-01-07 14:00:48', '2024-01-07 14:00:48');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `Id_image` int NOT NULL AUTO_INCREMENT,
  `URL` varchar(255) DEFAULT NULL,
  `Id_Produit` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_image`),
  KEY `Id_Produit` (`Id_Produit`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`Id_image`, `URL`, `Id_Produit`, `created_at`, `updated_at`) VALUES
(1, 'pain_choco.jpg', 1, '2024-01-06 18:36:47', '2024-01-06 18:36:47'),
(2, 'petit_pain.jpg\r\n', 2, '2024-01-06 18:36:47', '2024-01-06 18:36:47'),
(3, 'pain_choco.jpg\r\n', 1, '2024-01-06 18:36:47', '2024-01-06 18:36:47');

-- --------------------------------------------------------

--
-- Structure de la table `livreurs`
--

DROP TABLE IF EXISTS `livreurs`;
CREATE TABLE IF NOT EXISTS `livreurs` (
  `Id_Livreur` int NOT NULL AUTO_INCREMENT,
  `nom_livreur` varchar(50) DEFAULT NULL,
  `prénom_livreur` varchar(50) DEFAULT NULL,
  `téléphone` decimal(10,0) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Disponibilité` varchar(5) DEFAULT NULL,
  `ID_User` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Livreur`),
  KEY `ID_User` (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livreurs`
--

INSERT INTO `livreurs` (`Id_Livreur`, `nom_livreur`, `prénom_livreur`, `téléphone`, `adresse`, `Email`, `Disponibilité`, `ID_User`, `created_at`, `updated_at`) VALUES
(4, 'aaaa', 'aaaa', '597864236', NULL, 'aaaaaa@gmail.com', NULL, 44, '2023-12-15 15:15:58', '2023-12-15 15:15:58');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `Id_Produit` int NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(50) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix_par_piéce` int DEFAULT NULL,
  `quantité_minimale` decimal(3,0) DEFAULT NULL,
  `Type_produit` varchar(20) DEFAULT NULL,
  `sous_type` varchar(30) DEFAULT NULL,
  `id_artisan` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Produit`),
  KEY `id_artisan` (`id_artisan`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id_Produit`, `nom_produit`, `description`, `prix_par_piéce`, `quantité_minimale`, `Type_produit`, `sous_type`, `id_artisan`, `created_at`, `updated_at`) VALUES
(1, 'productA', 'un bonne gateau', 60, '30', 'Salty', 'pizza', 4, '2023-11-16 14:18:14', '2024-01-08 11:20:57'),
(2, 'productB', 'un bonne gateau', 100, '40', 'sweet', NULL, 4, '2023-11-21 10:43:50', '2024-01-08 11:21:02');

-- --------------------------------------------------------

--
-- Structure de la table `quantite_produits`
--

DROP TABLE IF EXISTS `quantite_produits`;
CREATE TABLE IF NOT EXISTS `quantite_produits` (
  `Id_Produit` int NOT NULL,
  `Id_Commande` int NOT NULL,
  `quantité_demande` decimal(3,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Produit`,`Id_Commande`),
  KEY `Id_Commande` (`Id_Commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `quantite_produits`
--

INSERT INTO `quantite_produits` (`Id_Produit`, `Id_Commande`, `quantité_demande`, `created_at`, `updated_at`) VALUES
(1, 5, '20', '2024-01-06 18:37:56', '2024-01-06 18:37:56'),
(2, 5, '30', '2024-01-06 18:37:56', '2024-01-06 18:37:56'),
(2, 6, '20', '2024-01-06 18:37:56', '2024-01-06 18:37:56'),
(1, 13, '20', '2024-01-08 10:36:10', '2024-01-08 10:36:10'),
(2, 13, '30', '2024-01-08 10:36:10', '2024-01-08 10:36:10'),
(1, 14, '20', '2024-01-08 10:43:52', '2024-01-08 10:43:52'),
(2, 14, '30', '2024-01-08 10:43:52', '2024-01-08 10:43:52'),
(1, 17, '20', '2024-01-08 10:52:39', '2024-01-08 10:52:39'),
(2, 17, '30', '2024-01-08 10:52:39', '2024-01-08 10:52:39');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mdps` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `Email`, `mdps`, `Role`, `created_at`, `updated_at`) VALUES
(40, 'amine@gmail.com', '05122023', 'Consommateur', '2023-12-05 12:59:39', '2023-12-05 12:59:39'),
(43, 'mohamedbourek94@gmail.com', '14122023', 'Consommateur', '2023-12-15 15:11:22', '2023-12-15 15:11:22'),
(44, 'aaaaaa@gmail.com', '14122023', 'Livreur', '2023-12-15 15:15:58', '2023-12-15 15:15:58'),
(38, 'sifou@gmail.com', '$2y$10$CXDKhybihszSdFFSEOCZX.Ts8vS5RNp2BBcqx6nIstJPo3IrirBy2', 'Artisan', '2023-12-05 09:36:46', '2023-12-05 09:36:46'),
(45, 'khaled@gmail.com', '21122023', 'Consommateur', '2023-12-21 21:42:33', '2023-12-21 21:42:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
