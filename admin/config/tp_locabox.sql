-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 jan. 2021 à 13:25
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_locabox`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `action`
--

INSERT INTO `action` (`id`, `libelle`, `statut`) VALUES
(1, 'ajouter', 0),
(2, 'modifier', 0),
(3, 'supprimer', 0),
(4, 'clôturer', 0);

-- --------------------------------------------------------

--
-- Structure de la table `action_utilisateur`
--

DROP TABLE IF EXISTS `action_utilisateur`;
CREATE TABLE IF NOT EXISTS `action_utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_location` int DEFAULT NULL,
  `id_actualite` int DEFAULT NULL,
  `id_utilisateur` int NOT NULL,
  `id_action` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_action` (`id_action`),
  KEY `id_actualite` (`id_actualite`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_location` (`id_location`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `illustration` varchar(255) NOT NULL,
  `illustration_miniature` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `contenu`, `illustration`, `illustration_miniature`, `slug`, `statut`) VALUES
(1, 'titre 1', '<p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to </strong>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1<em>500s, when an unknown printer took a galley of</em> type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '', 'titre1.html', 0);

-- --------------------------------------------------------

--
-- Structure de la table `box`
--

DROP TABLE IF EXISTS `box`;
CREATE TABLE IF NOT EXISTS `box` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) NOT NULL,
  `surface` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `box`
--

INSERT INTO `box` (`id`, `numero`, `surface`, `volume`, `prix`, `disponibilite`, `statut`) VALUES
(2, 'A01', '3', '8', 65, 0, 0),
(3, 'A02', '13', '30', 170, 0, 0),
(4, 'A03', '12', '26', 155, 0, 0),
(5, 'A04', '11', '25', 146, 0, 0),
(6, 'A05', '12', '28', 160, 0, 0),
(7, 'A06', '13', '30', 174, 0, 0),
(8, 'A07', '13', '28', 165, 0, 0),
(9, 'A08', '14', '31', 179, 0, 0),
(10, 'A09', '13', '30', 174, 0, 0),
(11, 'A10', '13', '30', 174, 0, 0),
(12, 'A11', '7', '12', 89, 0, 0),
(13, 'A12', '4', '5', 49, 0, 0),
(14, 'A13', '4', '5', 49, 0, 0),
(15, 'A14', '5', '7', 65, 0, 0),
(16, 'A15', '10', '17', 119, 0, 0),
(17, 'A16', '10', '17', 119, 0, 0),
(18, 'A17', '6', '11', 85, 0, 0),
(19, 'A18', '6', '11', 85, 0, 0),
(20, 'A19', '5', '8', 69, 0, 0),
(21, 'A20', '5', '9', 75, 0, 0),
(22, 'A21', '5', '8', 69, 0, 0),
(23, 'A22', '13', '32', 185, 0, 0),
(24, 'A23', '12', '30', 174, 0, 0),
(25, 'A24', '7', '48', 119, 0, 0),
(26, 'A25', '13', '48', 179, 0, 0),
(27, 'A26', '12', '30', 174, 0, 0),
(28, 'A27', '7', '48', 119, 0, 0),
(29, 'A28', '13', '48', 179, 0, 0),
(30, 'A29', '13', '32', 185, 0, 0),
(31, 'A30', '13', '31', 179, 0, 0),
(32, 'A31', '13', '52', 179, 0, 0),
(33, 'A32', '9', '52', 138, 0, 0),
(34, 'A33', '8', '19', 128, 0, 0),
(35, 'A34', '13', '32', 185, 0, 0),
(36, 'A35', '4', '9', 75, 0, 0),
(37, 'A36', '8', '21', 130, 0, 0),
(38, 'A37', '9', '22', 138, 0, 0),
(39, 'A38', '10', '24', 146, 0, 0),
(40, 'A39', '11', '27', 160, 0, 0),
(41, 'A40', '11', '25', 150, 0, 0),
(42, 'A41', '11', '25', 150, 0, 0),
(43, 'A42', '7', '18', 125, 0, 0),
(44, 'A43', '8', '19', 128, 0, 0),
(45, 'A44', '8', '20', 130, 0, 0),
(46, 'A45', '9', '22', 138, 0, 0),
(47, 'A46', '9', '22', 138, 0, 0),
(48, 'A47', '9', '22', 138, 0, 0),
(49, 'A48', '14', '34', 193, 0, 0),
(50, 'A49', '6', '15', 99, 0, 0),
(51, 'A50', '11', '22', 138, 0, 0),
(52, 'B01', '6', '12', 89, 0, 0),
(53, 'B02', '3.5', '7', 65, 0, 0),
(54, 'B03', '3.5', '7', 65, 0, 0),
(55, 'B04', '3.5', '7', 65, 0, 0),
(56, 'B05', '3', '7', 65, 0, 0),
(57, 'B06', '3', '7', 65, 0, 0),
(58, 'B07', '3', '7', 65, 0, 0),
(59, 'B08', '3', '7', 65, 0, 0),
(60, 'B09', '3', '7', 65, 0, 0),
(61, 'B10', '3', '7', 65, 0, 0),
(62, 'B11', '5', '10', 79, 0, 0),
(63, 'B12', '4', '9', 75, 0, 0),
(64, 'B13', '4', '9', 75, 0, 0),
(65, 'B14', '4', '9', 75, 0, 0),
(66, 'B15', '8', '15', 99, 0, 0),
(67, 'B16', '4', '11', 85, 0, 0),
(68, 'B17', '3', '8', 69, 0, 0),
(69, 'B18', '4', '11', 85, 0, 0),
(70, 'B19', '4', '10', 79, 0, 0),
(71, 'B20', '4', '10', 79, 0, 0),
(72, 'B21', '4', '10', 79, 0, 0),
(73, 'B22', '4', '10', 79, 0, 0),
(74, 'B23', '3.5', '7', 65, 0, 0),
(75, 'B24', '3.5', '7', 65, 0, 0),
(76, 'B25', '3.5', '7', 65, 0, 0),
(77, 'B26', '3.5', '9', 75, 0, 0),
(78, 'B27', '3.5', '7', 65, 0, 0),
(79, 'B28', '5', '11', 85, 0, 0),
(80, 'B29', '7', '15', 99, 0, 0),
(81, 'B30', '7', '15', 99, 0, 0),
(82, 'B31', '7', '15', 109, 0, 0),
(83, 'B32', '7', '15', 109, 0, 0),
(84, 'B33', '7', '15', 109, 0, 0),
(85, 'B34', '7', '15', 109, 0, 0),
(86, 'B35', '7', '15', 109, 0, 0),
(87, 'B36', '3', '8', 69, 0, 0),
(88, 'B37', '5', '12', 89, 0, 0),
(89, 'B38', '3.15', '9', 75, 0, 0),
(90, 'B39', '3.15', '9', 75, 0, 0),
(91, 'B40', '3.15', '9', 75, 0, 0),
(92, 'B41', '3.15', '9', 75, 0, 0),
(93, 'B42', '3.15', '9', 75, 0, 0),
(94, 'B43', '3.15', '9', 75, 0, 0),
(95, 'B44', '3.15', '9', 75, 0, 0),
(96, 'B45', '3.15', '7', 65, 0, 0),
(97, '45555', '45555', '45555', 45555, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone_portable` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telephone_fixe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `siret` varchar(14) DEFAULT NULL,
  `denomination_sociale` varchar(255) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `mail`, `telephone_portable`, `telephone_fixe`, `adresse`, `ville`, `code_postal`, `siret`, `denomination_sociale`, `statut`) VALUES
(1, 'Sébastien', 'Charpentier', 'auguste61@example.net', '+33 1 19 94 08 93', '0616376095', '2, rue de Jacob', 'Coste', '36896', '', '', 0),
(2, 'Benoît', 'Toussaint', 'joubert.anne@example.org', '+33 (0)3 11 51 35 01', '0746760638', '403, rue de Maurice', 'Menard', '91 323', '', '', 0),
(3, 'Océane', 'Lemaitre', 'dominique.mace@example.org', '+33 2 61 70 12 43', '+33 (0)7 97 15 27 73', '899, place Michèle Maillard', 'Parent', '60520', '', '', 0),
(4, 'Denis', 'Bernard', 'ddiaz@example.net', '+33 6 78 47 62 13', '0638256957', '50, boulevard Antoinette Gaudin', 'GarciaBourg', '49 477', '', '', 0),
(5, 'Maurice', 'Simon', 'cfoucher@example.org', '+33 1 72 66 02 67', '0756833586', '95, rue Lebon', 'Dupre-sur-Rousset', '79 287', '', '', 0),
(6, 'Jules', 'Guyon', 'eric.fleury@example.org', '02 24 18 91 47', '+33 7 59 32 80 21', '156, boulevard Raymond Delattre', 'Pierre', '24 639', '', '', 0),
(7, 'Jacqueline', 'Boyer', 'mbourdon@example.org', '0505503027', '06 38 00 51 80', '12, chemin Charles Guerin', 'Parisnec', '69374', '', '', 0),
(8, 'Chantal', 'Begue', 'daniel.deschamps@example.com', '+33 4 11 43 21 45', '+33 6 59 11 37 73', '44, place de Cordier', 'Bertrandboeuf', '11 123', '', '', 0),
(9, 'Benjamin', 'Michaud', 'lalbert@example.net', '09 65 62 90 90', '06 56 81 95 56', '404, boulevard de Dubois', 'Boyer', '40394', '', '', 0),
(10, 'Louise', 'Duval', 'poulain.olivie@example.org', '0752545264', '07 47 73 69 85', 'place Astrid Raymond', 'Briand', '45022', '', '', 0),
(11, 'Lucie', 'Bernard', 'monique.monnier@example.net', '+33 (0)2 66 69 62 42', '0696018725', 'rue Auguste Teixeira', 'Clerc', '64843', '', '', 0),
(12, 'Julie', 'Boucher', 'merle.denis@example.org', '+33 6 39 84 65 74', '0677126012', '56, rue Bailly', 'Pons-sur-Allain', '16 903', '', '', 0),
(13, 'Antoine', 'Gaudin', 'guillaume.moreno@example.org', '09 21 67 12 92', '06 24 27 47 85', 'avenue de Lejeune', 'Bonnin', '12411', '', '', 0),
(14, 'Benjamin', 'Hoareau', 'theophile76@example.net', '+33 (0)6 79 49 73 31', '0791552661', '85, boulevard de Martinez', 'Colas', '55 581', '', '', 0),
(15, 'Agnès', 'Lagarde', 'lacroix.arthur@example.org', '+33 (0)2 33 83 07 77', '06 11 15 82 18', '736, place René Wagner', 'GrenierBourg', '10015', '', '', 0),
(16, 'Zoé', 'Cohen', 'joseph52@example.org', '+33 (0)3 74 50 08 60', '0619386441', 'chemin Clémence Barbier', 'Pascalboeuf', '22 506', '', '', 0),
(17, 'Anne', 'Dubois', 'aime.courtois@example.net', '01 59 77 68 76', '+33 (0)6 22 67 60 25', '4, chemin Valette', 'Chevalier', '24634', '', '', 0),
(18, 'Gabriel', 'Raynaud', 'louise.pichon@example.com', '01 68 72 67 10', '0793113783', '49, boulevard Lopes', 'Millet', '56 669', '', '', 0),
(19, 'Manon', 'Roux', 'martine.mahe@example.com', '02 26 12 70 37', '0693724811', 'impasse de Dumas', 'Hardy-les-Bains', '84550', '', '', 0),
(20, 'Benoît', 'Bernard', 'lucas.grenier@example.com', '0357253739', '+33 (0)6 01 65 02 00', '97, avenue de Laroche', 'Ponsnec', '70956', '', '', 0),
(21, 'Michèle', 'Hamel', 'mace.laurent@example.org', '+33 (0)5 34 88 68 10', '+33 6 46 55 87 91', '1, rue de Carlier', 'Roux', '54109', '', '', 0),
(22, 'Émile', 'Gaudin', 'labbe.thierry@example.org', '+33 9 38 33 30 49', '0797919093', 'chemin de Da Costa', 'Louis', '03966', '', '', 0),
(23, 'Adrienne', 'Brunet', 'michelle.roche@example.org', '+33 6 81 69 75 14', '+33 (0)6 02 02 38 02', 'rue Barbe', 'Pichon', '05 187', '', '', 0),
(24, 'Dominique', 'Maurice', 'ylacombe@example.com', '0285443849', '+33 (0)7 35 41 82 71', '80, impasse Lorraine Peron', 'Poulain', '98 942', '', '', 0),
(25, 'Victor', 'Munoz', 'nboyer@example.org', '+33 (0)6 56 80 93 82', '+33 (0)7 67 73 10 34', '42, impasse de Gros', 'Garnier', '53265', '', '', 0),
(26, 'Noémi', 'Berger', 'benoit.valentine@example.org', '+33 9 38 19 44 24', '0763588534', '84, boulevard Marguerite Adam', 'Marin', '86 922', '', '', 0),
(27, 'Louise', 'Bonnin', 'margaux.pires@example.com', '0106377622', '+33 6 65 77 75 75', '4, place Auguste Bouvier', 'Martins', '35 825', '', '', 0),
(28, 'Bernard', 'Benard', 'lucas.lebreton@example.com', '04 31 05 42 31', '0773272893', '58, boulevard de Blanchard', 'Da Silva', '28 075', '', '', 0),
(29, 'Jean', 'Georges', 'wraymond@example.com', '01 42 25 60 53', '0786530473', '2, boulevard de Costa', 'Perez', '79885', '', '', 0),
(30, 'Emmanuel', 'Leclerc', 'broux@example.net', '0293742027', '06 39 71 10 24', '81, place de Blanchet', 'PonsVille', '21 070', '', '', 0),
(31, 'Claudine', 'Evrard', 'cecile68@example.com', '0590260238', '07 33 26 05 52', '14, impasse Susanne Lecoq', 'Carre', '08258', '', '', 0),
(32, 'Olivie', 'Wagner', 'aurelie50@example.com', '+33 2 87 99 86 10', '+33 (0)7 73 04 95 60', '75, avenue de Bertrand', 'Ferreira', '04671', '', '', 0),
(33, 'Suzanne', 'Sanchez', 'martin14@example.org', '+33 7 97 23 45 18', '06 22 73 85 13', '94, boulevard Peltier', 'Gerard', '15 500', '', '', 0),
(34, 'Suzanne', 'Duhamel', 'dbourgeois@example.com', '+33 (0)2 76 12 99 49', '07 84 17 12 83', 'place Gregoire', 'Blanc', '00 863', '', '', 0),
(35, 'Louise', 'Martel', 'zbesson@example.net', '0421048359', '+33 7 43 44 33 02', 'boulevard Gabrielle Goncalves', 'Hoarau', '04449', '', '', 0),
(36, 'Manon', 'Benoit', 'fantoine@example.org', '0923457632', '0759657199', '909, impasse de Launay', 'Reynec', '00981', '', '', 0),
(37, 'Laetitia', 'Benard', 'olivier11@example.net', '+33 (0)5 15 19 76 37', '+33 6 68 92 54 55', '51, chemin de Ledoux', 'Richard', '06635', '', '', 0),
(38, 'Emmanuelle', 'Durand', 'barbe.eugene@example.org', '+33 3 28 38 78 20', '+33 (0)7 41 39 67 13', '6, place Josette Briand', 'Jourdan', '66846', '', '', 0),
(39, 'Renée', 'Descamps', 'jmahe@example.com', '04 18 16 30 45', '+33 (0)7 78 27 28 83', '43, avenue de Maurice', 'LeleuBourg', '66766', '', '', 0),
(40, 'Margot', 'Tanguy', 'gilbert.charlotte@example.com', '0501884191', '07 94 30 99 04', '67, place Camille Raynaud', 'Legrand', '99 688', '', '', 0),
(41, 'Odette', 'Mahe', 'olivie41@example.net', '+33 9 88 37 94 44', '+33 7 48 22 24 60', '43, boulevard de Le Roux', 'Morel', '61952', '', '', 0),
(42, 'Christophe', 'Menard', 'isaac66@example.net', '0522931391', '0639354374', '5, rue Roche', 'Dupuisnec', '44 895', '', '', 0),
(43, 'Pierre', 'Laine', 'rodrigues.franck@example.net', '+33 3 02 94 47 97', '0761938691', '2, chemin de Pires', 'Deschamps', '93908', '', '', 0),
(44, 'Auguste', 'Guillet', 'maryse.leduc@example.org', '+33 1 78 20 29 21', '06 24 27 44 18', '61, impasse Roy', 'GodardBourg', '84 246', '', '', 0),
(45, 'Georges', 'Colin', 'ilegrand@example.org', '05 93 85 59 84', '+33 (0)7 54 66 55 14', '6, boulevard Mahe', 'Picard-sur-Mer', '30320', '', '', 0),
(46, 'Danielle', 'Riou', 'tpotier@example.org', '08 92 71 43 22', '+33 7 33 20 72 77', '854, boulevard de Denis', 'Ferrand-sur-Delorme', '07 333', '', '', 0),
(47, 'Nathalie', 'Besson', 'tristan.louis@example.net', '+33 4 98 79 85 98', '0777679569', '437, avenue de Gillet', 'Hamonnec', '21199', '', '', 0),
(48, 'Gilles', 'Martinez', 'gillet.thibaut@example.net', '+33 (0)4 85 18 57 95', '+33 (0)6 64 51 01 06', '55, chemin Rocher', 'Grondin-sur-Fernandes', '39522', '', '', 0),
(49, 'Timothée', 'Mace', 'margot30@example.net', '0891237551', '06 51 20 51 67', '59, boulevard de Arnaud', 'Robert', '95131', '', '', 0),
(50, 'Olivier', 'Giraud', 'pmaillot@example.net', '0132923606', '0790248456', 'avenue de Fabre', 'Roussel-sur-Bertrand', '67 793', '', '', 0),
(51, 'Alix', 'Paris', 'gaillard.danielle@example.net', '+33 (0)6 68 04 33 22', '+33 6 76 84 79 26', '9, boulevard de Lopes', 'Henry', '40725', '', '', 0),
(52, 'Christiane', 'Poulain', 'gilles.dupuis@example.com', '0644850616', '+33 7 68 25 25 47', '251, impasse Guillou', 'Merlenec', '61 020', '', '', 0),
(53, 'Laetitia', 'Philippe', 'thumbert@example.com', '0643226371', '+33 (0)6 36 22 40 71', '590, impasse de Evrard', 'Martydan', '09025', '', '', 0),
(54, 'Susan', 'Blin', 'olopez@example.org', '0271088889', '+33 (0)7 31 00 05 01', 'impasse Bigot', 'Briand', '91392', '', '', 0),
(55, 'Grégoire', 'Gerard', 'jean.labbe@example.net', '08 92 26 93 59', '+33 (0)6 40 87 01 52', '778, rue Marcel Turpin', 'Carlier', '59 878', '', '', 0),
(56, 'Michèle', 'Duhamel', 'dpeltier@example.net', '07 39 54 11 66', '0624414484', '91, chemin Dumas', 'Brun', '59 228', '', '', 0),
(57, 'Diane', 'Regnier', 'sauvage.claire@example.net', '+33 8 93 95 05 94', '0730702703', 'avenue Odette Payet', 'Grondinnec', '21 588', '', '', 0),
(58, 'Amélie', 'Goncalves', 'laetitia20@example.net', '0169095043', '07 81 46 30 75', '4, chemin de Martin', 'Buisson-sur-Mer', '55624', '', '', 0),
(59, 'Maurice', 'Coste', 'pdeoliveira@example.net', '+33 (0)5 02 93 30 84', '07 99 21 60 38', '72, place Clémence Vaillant', 'Brunel', '07 723', '', '', 0),
(60, 'Lorraine', 'Dupuis', 'yves39@example.net', '+33 (0)9 25 60 99 39', '+33 (0)7 69 18 06 68', '747, rue Langlois', 'Rossi', '02847', '', '', 0),
(61, 'Gilles', 'Costa', 'susan.descamps@example.net', '+33 6 37 48 38 96', '+33 (0)7 49 02 35 64', '92, rue Gimenez', 'Laurent', '78701', '', '', 0),
(62, 'Pauline', 'Pons', 'pruvost.bertrand@example.com', '0343271515', '0683785413', '86, chemin Noël De Oliveira', 'Garcia', '17697', '', '', 0),
(63, 'Danielle', 'Martel', 'edouard61@example.org', '0742641929', '0797023142', '23, place Franck Neveu', 'Bigot', '37 067', '', '', 0),
(64, 'Élisabeth', 'Marchal', 'cbarthelemy@example.net', '+33 (0)4 28 52 79 73', '+33 6 79 89 26 80', 'rue de Legendre', 'Sauvagedan', '54893', '', '', 0),
(65, 'Nathalie', 'Renault', 'marchal.susan@example.org', '+33 4 04 96 70 60', '+33 6 34 44 61 88', 'avenue Techer', 'Besnardnec', '97914', '', '', 0),
(66, 'Capucine', 'Goncalves', 'ccharles@example.net', '0739108678', '07 59 29 07 62', '785, rue Guichard', 'Mathieu', '78 667', '', '', 0),
(67, 'Auguste', 'Blanchard', 'alex.lemaire@example.net', '0671013011', '+33 7 30 06 46 55', 'chemin Jean', 'Godard', '55576', '13610613802577', 'Blanchet Raymond S.A.S.', 0),
(68, 'Lucie', 'Pasquier', 'thibault.guillet@example.com', '+33 (0)8 18 68 85 19', '07 43 70 14 23', '3, avenue Pineau', 'Cousin-les-Bains', '51876', '17899251897979', 'Raynaud et Fils', 0),
(69, 'Laure', 'Godard', 'lucas.vincent@example.org', '+33 9 13 00 71 81', '07 46 33 32 89', '6, avenue Lesage', 'Wagner-sur-Laurent', '71220', '13614980587867', 'Thomas', 0),
(70, 'Élodie', 'Coulon', 'ghuet@example.org', '03 54 93 01 11', '0795958981', '185, avenue Masse', 'Mace', '61419', '77512793273851', 'Mary', 0),
(71, 'Margaux', 'Lecoq', 'ubarthelemy@example.net', '+33 (0)6 23 44 48 72', '+33 (0)7 95 50 26 79', '29, place Agnès Becker', 'Reynec', '66 618', '22817867585838', 'Briand', 0),
(72, 'Éric', 'Rodriguez', 'richard.rocher@example.org', '01 30 92 60 77', '07 59 89 33 15', '6, rue Maurice Klein', 'Lecoq-sur-Garcia', '18 681', '23202137903042', 'Mace Leleu et Fils', 0),
(73, 'Michèle', 'Poulain', 'michaud.honore@example.com', '0989439676', '+33 6 05 34 61 84', '42, impasse Moreno', 'Bonneau-sur-Legendre', '95 348', '11296045200778', 'Ferreira Thibault S.A.', 0),
(74, 'Renée', 'Clerc', 'jeannine16@example.net', '0276002738', '07 95 50 76 63', '29, rue Boutin', 'Grenier', '35153', '81594835751294', 'Lagarde S.A.S.', 0),
(75, 'Thibault', 'Mahe', 'catherine.delorme@example.net', '0468929849', '+33 (0)7 64 54 69 00', '69, boulevard Reynaud', 'Ruiz-sur-Mer', '12912', '12853661428707', 'Maillet Hamon et Fils', 0),
(76, 'Sylvie', 'Girard', 'perrin.jeanne@example.org', '0653160352', '0767492772', '236, rue de Michaud', 'Fabre-les-Bains', '08524', '38160367157074', 'Bouvet Rodrigues S.A.R.L.', 0),
(77, 'Alexandre', 'De Sousa', 'marcelle86@example.org', '0756356691', '07 57 08 65 33', '40, chemin Maury', 'Guillet', '30315', '35369144598349', 'Gros', 0),
(78, 'Adélaïde', 'Boucher', 'adrien.blanc@example.net', '0577840312', '+33 7 80 85 53 03', '329, rue Cécile Da Silva', 'Vallee-les-Bains', '30772', '82485838267660', 'Leclerc Brunet S.A.', 0),
(79, 'Lorraine', 'Etienne', 'gerard01@example.net', '+33 (0)1 66 05 28 67', '+33 7 79 12 52 35', '25, impasse de Brunel', 'Samsondan', '30389', '15686086070681', 'Hamon S.A.R.L.', 0),
(80, 'Georges', 'Schneider', 'carlier.edouard@example.org', '+33 7 64 64 13 01', '0618144748', '69, boulevard de Moulin', 'BlondelBourg', '23 988', '78950738358960', 'Marchal Mary S.A.R.L.', 0),
(81, 'Colette', 'Robin', 'hugues56@example.org', '+33 (0)1 91 80 47 00', '+33 (0)6 37 51 53 82', '486, rue de Jacques', 'Baudry', '40 208', '57230305486207', 'Martineau', 0),
(82, 'Alexandre', 'Vasseur', 'victor.bonnet@example.com', '0319138918', '07 78 73 31 60', '73, chemin Pénélope Lebrun', 'Bouvier', '75257', '70881838089576', 'Rousseau', 0),
(83, 'Michel', 'Jourdan', 'olivie98@example.org', '0560003982', '07 65 57 66 25', '339, rue Josette Cousin', 'Delattre-sur-Collet', '20 039', '96601761668993', 'Mendes SAS', 0),
(84, 'Jérôme', 'Diaz', 'nathalie65@example.org', '0524441540', '+33 6 02 31 21 33', '83, place Honoré Poulain', 'DelattreVille', '54 888', '64392316821524', 'Blanc S.A.R.L.', 0),
(85, 'Danielle', 'Rousset', 'henry.thierry@example.net', '+33 (0)6 57 17 81 08', '+33 (0)6 31 54 73 86', '90, rue Victor Pages', 'ThierryBourg', '01 963', '39044749749793', 'Louis Godard S.A.S.', 0),
(86, 'Chantal', 'Maurice', 'idevaux@example.com', '06 45 88 89 88', '+33 6 23 79 53 97', '43, rue Margaud Couturier', 'Rolland-sur-Mer', '06 022', '66628930329637', 'Guyon Sauvage et Fils', 0),
(87, 'Christiane', 'Le Gall', 'jacquot.edith@example.net', '09 20 92 25 15', '+33 (0)7 47 16 30 16', '3, chemin Véronique Perrot', 'Lamy-sur-Legendre', '43432', '91192963922227', 'Lebreton', 0),
(88, 'Anastasie', 'Cordier', 'gerard.huet@example.com', '07 46 23 91 38', '07 69 32 98 01', '37, place de De Oliveira', 'Pascal-les-Bains', '57 909', '95239307563604', 'Sanchez', 0),
(89, 'Olivie', 'Gay', 'maurice.lucie@example.net', '0377084266', '0787405534', 'rue Rémy Goncalves', 'Royer-la-Forêt', '29447', '83610077360256', 'Delattre', 0),
(90, 'Claude', 'Gonzalez', 'michelle49@example.org', '01 39 64 49 72', '+33 (0)6 91 75 76 80', 'boulevard de Courtois', 'Girard', '89 975', '94042136434588', 'Munoz et Fils', 0),
(91, 'Andrée', 'Delahaye', 'bigot.augustin@example.org', '06 63 53 97 24', '06 90 75 97 17', 'boulevard Louise Gonzalez', 'Samson-la-Forêt', '27300', '54220087308228', 'Ruiz', 0),
(92, 'Jeannine', 'Roussel', 'adrien.marty@example.net', '+33 (0)3 26 17 71 64', '06 78 64 85 51', '35, rue Édouard Salmon', 'Ferrand', '35945', '97973354118449', 'Parent', 0),
(93, 'Sabine', 'Marin', 'martel.manon@example.org', '0457276604', '0788792564', '98, rue de De Oliveira', 'BaillyBourg', '53572', '50754633729904', 'Weiss Collet SARL', 0),
(94, 'Denise', 'Martel', 'huet.noemi@example.net', '+33 (0)2 22 59 01 78', '+33 (0)6 32 59 65 94', '215, place de Diallo', 'Grondin', '42 896', '36372765951860', 'Verdier', 0),
(95, 'Alfred', 'Toussaint', 'wmillet@example.org', '+33 3 20 70 51 81', '0615314204', '70, rue Lucas Imbert', 'LebonBourg', '70542', '38564281757873', 'Herve SAS', 0),
(96, 'Thérèse', 'Simon', 'zacharie.carre@example.net', '06 51 15 08 60', '06 08 65 25 74', '29, impasse de Guillon', 'Michel-la-Forêt', '00174', '19520681686476', 'Hamon S.A.R.L.', 0),
(97, 'Noémi', 'Ferrand', 'vtanguy@example.com', '0140023929', '06 44 98 57 73', '8, rue Sébastien Bouvet', 'Blanc-sur-Normand', '35 471', '12480903210549', 'Lebrun', 0),
(98, 'Louis', 'Riou', 'gabriel.grenier@example.net', '09 25 84 48 53', '+33 (0)7 33 53 01 84', '44, boulevard de Brunet', 'Seguin-sur-Mer', '76 813', '99749984053984', 'Becker Bruneau SARL', 0),
(99, 'Henri', 'Payet', 'remy.chevallier@example.net', '0957256693', '07 68 27 46 34', '4, rue Jérôme Perrier', 'Normand', '59 964', '40281137672073', 'Delorme', 0),
(100, 'Claude', 'Fouquet', 'blefevre@example.net', '+33 (0)1 16 01 08 86', '06 47 74 89 51', '9, rue Pichon', 'Dubois', '61270', '56585049070897', 'Riviere Boucher SARL', 0),
(101, 'Hortense', 'Boulanger', 'anouk.muller@example.com', '+33 (0)5 73 95 04 91', '07 56 92 47 83', '956, rue Rossi', 'Masson-sur-Noel', '79 605', '44779138282718', 'Maillet et Fils', 0),
(102, 'Charlotte', 'Humbert', 'genevieve.pascal@example.org', '+33 (0)1 20 15 48 53', '06 36 50 87 61', '45, chemin Benoît Pasquier', 'Pires', '07557', '14918252993078', 'Moreau', 0),
(103, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 0);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demo_table`
--

DROP TABLE IF EXISTS `demo_table`;
CREATE TABLE IF NOT EXISTS `demo_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `volume` double NOT NULL,
  `surface` double NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demo_table`
--

INSERT INTO `demo_table` (`id`, `nom`, `volume`, `surface`, `image`, `statut`) VALUES
(1, 'nom', 0, 0, 'image', 0),
(2, 'Canapé 3 places', 1.5, 0.5, NULL, 0),
(3, 'Canapé d\'angle', 2.8, 0.95, NULL, 0),
(4, 'Fauteuil', 0.65, 0.2, NULL, 0),
(5, 'Table basse', 0.4, 0.15, NULL, 0),
(6, 'Bibliothèque', 0.4, 0.15, NULL, 0),
(7, 'Meuble TV', 1.8, 0.6, NULL, 0),
(8, 'Banc TV', 0.3, 0.1, NULL, 0),
(9, 'Télévision', 0.25, 0.1, NULL, 0),
(10, 'Lampe', 0.15, 0.05, NULL, 0),
(11, 'Table', 1.1, 0.35, NULL, 0),
(12, 'Chaise', 0.3, 0.1, NULL, 0),
(13, 'Tabouret', 0.05, 0.05, NULL, 0),
(14, 'Chaise haute', 0.25, 0.1, NULL, 0),
(15, 'Buffet', 0.6, 0.2, NULL, 0),
(16, 'Réfrigérateur', 0.55, 0.2, NULL, 0),
(17, 'Congélateur', 0.8, 0.25, NULL, 0),
(18, 'Réfrigérateur+Congélateur', 0.65, 0.2, NULL, 0),
(19, 'Lave vaiselle', 0.35, 0.1, NULL, 0),
(20, 'Cuisinière', 0.3, 0.1, NULL, 0),
(21, 'Micro ondes', 0.1, 0.05, NULL, 0),
(22, 'Poubelle', 0.15, 0.05, NULL, 0),
(23, 'Lit double', 1.3, 0.45, NULL, 0),
(24, 'Lit simple', 1.25, 0.4, NULL, 0),
(25, 'Matelas double', 0.65, 0.2, NULL, 0),
(26, 'Matelas simple', 0.4, 0.15, NULL, 0),
(27, 'Armoire', 1.85, 0.6, NULL, 0),
(28, 'Armoire avec penderie', 3.65, 1.2, NULL, 0),
(29, 'Table de chevet', 0.15, 0.05, NULL, 0),
(30, 'Commode', 0.45, 0.15, NULL, 0),
(31, 'Mirroir', 0.15, 0.05, NULL, 0),
(32, 'Coiffeuse', 0.65, 0.2, NULL, 0),
(33, 'Tapis', 0.35, 0.1, NULL, 0),
(34, 'Table à langer', 0.25, 0.1, NULL, 0),
(35, 'Lit bébé', 0.45, 0.15, NULL, 0),
(36, 'Lit enfant', 0.6, 0.2, NULL, 0),
(37, 'Lit superposé', 2.15, 0.7, NULL, 0),
(38, 'Table enfant', 0.15, 0.05, NULL, 0),
(39, 'Chaise enfant', 0.05, 0, NULL, 0),
(40, 'Bureau enfant', 0.3, 0.1, NULL, 0),
(41, 'Chaise bureau enfant', 0.2, 0.05, NULL, 0),
(42, 'Coffre à jouets', 0.15, 0.05, NULL, 0),
(43, 'Bureau', 0.45, 0.15, NULL, 0),
(44, 'Chaise bureau', 0.4, 0.15, NULL, 0),
(45, 'Bloc tiroirs', 0.4, 0.15, NULL, 0),
(46, 'Armoire à dossiers', 1.5, 0.5, NULL, 0),
(47, 'Lave linge', 0.3, 0.1, NULL, 0),
(48, 'Sèche linge', 0.3, 0.1, NULL, 0),
(49, 'Séchoir', 0.25, 0.1, NULL, 0),
(50, 'Table à repasser', 0.1, 0.05, NULL, 0),
(51, 'Étagère à chaussures', 0.2, 0.05, NULL, 0),
(52, 'Etabli', 0.55, 0.2, NULL, 0),
(53, 'Boite à outils', 0.1, 0.05, NULL, 0),
(54, 'Echelle', 0.25, 0.1, NULL, 0),
(55, 'Valise', 0.2, 0.05, NULL, 0),
(56, 'Table de jardin', 1.3, 0.45, NULL, 0),
(57, 'Chaise de jardin', 0.65, 0.2, NULL, 0),
(58, 'Banc', 0.9, 0.3, NULL, 0),
(59, 'Parasol', 0.2, 0.05, NULL, 0),
(60, 'Tondeuse', 0.3, 0.1, NULL, 0),
(61, 'Barbecue', 0.2, 0.05, NULL, 0),
(62, 'Vélo Adulte', 0.4, 0.15, NULL, 0),
(63, 'Vélo Enfant', 0.25, 0.1, NULL, 0),
(64, 'Outils de jardin', 0.2, 0.05, NULL, 0),
(65, 'Petit carton', 0.05, 0, NULL, 0),
(66, 'Carton moyen', 0.1, 0.05, NULL, 0),
(67, 'Grand carton', 0.15, 0.05, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_client` int NOT NULL,
  `id_box` int NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime DEFAULT NULL,
  `contrat` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `loc_id_client` (`id_client`),
  KEY `loc_id_box` (`id_box`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `id_client`, `id_box`, `date_debut`, `date_fin`, `contrat`, `statut`) VALUES
(1, 1, 4, '2021-01-04 15:17:23', NULL, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

DROP TABLE IF EXISTS `objet`;
CREATE TABLE IF NOT EXISTS `objet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `volume` double NOT NULL,
  `surface` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`id`, `nom`, `volume`, `surface`, `image`, `statut`) VALUES
(2, 'Canapé 2 places', 1.25, 0.4, NULL, 0),
(3, 'Canapé 3 places', 1.5, 0.5, NULL, 0),
(4, 'Canapé d\'angle', 2.8, 0.95, NULL, 0),
(5, 'Fauteuil', 0.65, 0.2, NULL, 0),
(6, 'Table basse', 0.4, 0.15, NULL, 0),
(7, 'Bibliothèque', 0.4, 0.15, NULL, 0),
(8, 'Meuble TV', 1.8, 0.6, NULL, 0),
(9, 'Banc TV', 0.3, 0.1, NULL, 0),
(10, 'Télévision', 0.25, 0.1, NULL, 0),
(11, 'Lampe', 0.15, 0.05, NULL, 0),
(12, 'Table', 1.1, 0.35, NULL, 0),
(13, 'Chaise', 0.3, 0.1, NULL, 0),
(14, 'Tabouret', 0.05, 0.05, NULL, 0),
(15, 'Chaise haute', 0.25, 0.1, NULL, 0),
(16, 'Buffet', 0.6, 0.2, NULL, 0),
(17, 'Réfrigérateur', 0.55, 0.2, NULL, 0),
(18, 'Congélateur', 0.8, 0.25, NULL, 0),
(19, 'Réfrigérateur+Congélateur', 0.65, 0.2, NULL, 0),
(20, 'Lave vaiselle', 0.35, 0.1, NULL, 0),
(21, 'Cuisinière', 0.3, 0.1, NULL, 0),
(22, 'Micro ondes', 0.1, 0.05, NULL, 0),
(23, 'Poubelle', 0.15, 0.05, NULL, 0),
(24, 'Lit double', 1.3, 0.45, NULL, 0),
(25, 'Lit simple', 1.25, 0.4, NULL, 0),
(26, 'Matelas double', 0.65, 0.2, NULL, 0),
(27, 'Matelas simple', 0.4, 0.15, NULL, 0),
(28, 'Armoire', 1.85, 0.6, NULL, 0),
(29, 'Armoire avec penderie', 3.65, 1.2, NULL, 0),
(30, 'Table de chevet', 0.15, 0.05, NULL, 0),
(31, 'Commode', 0.45, 0.15, NULL, 0),
(32, 'Mirroir', 0.15, 0.05, NULL, 0),
(33, 'Coiffeuse', 0.65, 0.2, NULL, 0),
(34, 'Tapis', 0.35, 0.1, NULL, 0),
(35, 'Table à langer', 0.25, 0.1, NULL, 0),
(36, 'Lit bébé', 0.45, 0.15, NULL, 0),
(37, 'Lit enfant', 0.6, 0.2, NULL, 0),
(38, 'Lit superposé', 2.15, 0.7, NULL, 0),
(39, 'Table enfant', 0.15, 0.05, NULL, 0),
(40, 'Chaise enfant', 0.05, 0.01, NULL, 0),
(41, 'Bureau enfant', 0.3, 0.1, NULL, 0),
(42, 'Chaise bureau enfant', 0.2, 0.05, NULL, 0),
(43, 'Coffre à jouets', 0.15, 0.05, NULL, 0),
(44, 'Bureau', 0.45, 0.15, NULL, 0),
(45, 'Chaise bureau', 0.4, 0.15, NULL, 0),
(46, 'Bloc tiroirs', 0.4, 0.15, NULL, 0),
(47, 'Armoire à dossiers', 1.5, 0.5, NULL, 0),
(48, 'Lave linge', 0.3, 0.1, NULL, 0),
(49, 'Sèche linge', 0.3, 0.1, NULL, 0),
(50, 'Séchoir', 0.25, 0.1, NULL, 0),
(51, 'Table à repasser', 0.1, 0.05, NULL, 0),
(52, 'Étagère à chaussures', 0.2, 0.05, NULL, 0),
(53, 'Etabli', 0.55, 0.2, NULL, 0),
(54, 'Boite à outils', 0.1, 0.05, NULL, 0),
(55, 'Echelle', 0.25, 0.1, NULL, 0),
(56, 'Valise', 0.2, 0.05, NULL, 0),
(57, 'Table de jardin', 1.3, 0.45, NULL, 0),
(58, 'Chaise de jardin', 0.65, 0.2, NULL, 0),
(59, 'Banc', 0.9, 0.3, NULL, 0),
(60, 'Parasol', 0.2, 0.05, NULL, 0),
(61, 'Tondeuse', 0.3, 0.1, NULL, 0),
(62, 'Barbecue', 0.2, 0.05, NULL, 0),
(63, 'Vélo Adulte', 0.4, 0.15, NULL, 0),
(64, 'Vélo Enfant', 0.25, 0.1, NULL, 0),
(65, 'Outils de jardin', 0.2, 0.05, NULL, 0),
(66, 'Petit carton', 0.05, 0.01, NULL, 0),
(67, 'Carton moyen', 0.1, 0.05, NULL, 0),
(68, 'Grand carton', 0.15, 0.05, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `objet_piece`
--

DROP TABLE IF EXISTS `objet_piece`;
CREATE TABLE IF NOT EXISTS `objet_piece` (
  `id_piece` int NOT NULL,
  `id_objet` int NOT NULL,
  KEY `id_piece` (`id_piece`),
  KEY `id_objet` (`id_objet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objet_piece`
--

INSERT INTO `objet_piece` (`id_piece`, `id_objet`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(3, 10),
(3, 11),
(3, 23),
(3, 24),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(4, 11),
(4, 28),
(4, 30),
(4, 31),
(4, 32),
(4, 34),
(4, 35),
(4, 36),
(4, 37),
(4, 38),
(4, 39),
(4, 40),
(4, 41),
(4, 42),
(4, 43),
(5, 34),
(5, 48),
(5, 49),
(5, 50),
(6, 55),
(6, 53),
(6, 57),
(6, 58),
(6, 59),
(6, 60),
(6, 61),
(6, 62),
(6, 63),
(6, 64),
(6, 65),
(7, 44),
(7, 45),
(7, 46),
(7, 47),
(7, 66),
(7, 67),
(7, 68);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id`, `libelle`, `statut`) VALUES
(1, 'Salon', 0),
(2, 'cuisine', 0),
(3, 'chambre adultes', 0),
(4, 'chambre enfants', 0),
(5, 'salle d\'eau', 0),
(6, 'jardin', 0),
(7, 'autres', 0);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `libelle`, `statut`) VALUES
(1, 'super admin', 0),
(2, 'admin', 0),
(3, 'salarié', 0),
(4, 'rédacteur', 0);

-- --------------------------------------------------------

--
-- Structure de la table `role_utilisateur`
--

DROP TABLE IF EXISTS `role_utilisateur`;
CREATE TABLE IF NOT EXISTS `role_utilisateur` (
  `id_user` int NOT NULL,
  `id_role` int NOT NULL,
  KEY `id_role` (`id_role`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role_utilisateur`
--

INSERT INTO `role_utilisateur` (`id_user`, `id_role`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `mot_de_passe`, `avatar`, `statut`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.fr', 'azerty', 'user0.png', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `action_utilisateur`
--
ALTER TABLE `action_utilisateur`
  ADD CONSTRAINT `id_action` FOREIGN KEY (`id_action`) REFERENCES `action` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_actualite` FOREIGN KEY (`id_actualite`) REFERENCES `actualite` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_location` FOREIGN KEY (`id_location`) REFERENCES `location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `loc_id_box` FOREIGN KEY (`id_box`) REFERENCES `box` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `loc_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `objet_piece`
--
ALTER TABLE `objet_piece`
  ADD CONSTRAINT `id_objet` FOREIGN KEY (`id_objet`) REFERENCES `objet` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_piece` FOREIGN KEY (`id_piece`) REFERENCES `piece` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `role_utilisateur`
--
ALTER TABLE `role_utilisateur`
  ADD CONSTRAINT `id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
