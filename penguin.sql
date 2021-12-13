-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 13 déc. 2021 à 16:27
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `penguin`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` varchar(36) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `name`, `surname`) VALUES
('05efdbdc-1cca-4333-b652-c36cb749c648', 'Rowling', 'J. K.');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` varchar(36) NOT NULL,
  `title` varchar(256) NOT NULL,
  `authorId` varchar(36) NOT NULL,
  `cover` varchar(256) NOT NULL,
  `synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `authorId`, `cover`, `synopsis`) VALUES
('1a1ab1eb-0cdc-44d2-816c-6c6ccfcbc8b0', 'Harry potter - la chambre des secrets', '05efdbdc-1cca-4333-b652-c36cb749c648', '2e58c6d9-9d24-4907-9af5-c44e6fd4b86e.jpg', 'Alors que l\'oncle Vernon, la tante Pétunia et son cousin Dudley reçoivent d\'importants invités à dîner, Harry Potter est contraint de passer la soirée dans sa chambre. Dobby, un elfe, fait alors son apparition. Il lui annonce que de terribles dangers menacent l\'école de Poudlard et qu\'il ne doit pas y retourner en septembre. Harry refuse de le croire. Mais sitôt la rentrée des classes effectuée, ce dernier entend une voix malveillante.'),
('349ca89d-99a7-473a-9618-b7f3b29e2af4', 'Harry potter - et le prisonnier d\'Azkaban', '05efdbdc-1cca-4333-b652-c36cb749c648', '05c5e8ee-84f0-47ee-9c13-0c1b665d4b75.jpg', 'Sirius Black, un dangereux sorcier criminel, s\'échappe de la sombre prison d\'Azkaban avec un seul et unique but : se venger d\'Harry Potter, entré avec ses amis Ron et Hermione en troisième année à l\'école de sorcellerie de Poudlard, où ils auront aussi à faire avec les terrifiants Détraqueurs.'),
('53f4ca0f-ae87-46f0-90f3-6327c54b9a16', 'Harry potter - à l’école des sorciers', '05efdbdc-1cca-4333-b652-c36cb749c648', '2dd0d068-f5da-400e-9514-e66501a7c769.jpg', 'Harry Potter, un jeune orphelin, est élevé par son oncle et sa tante qui le détestent. Alors qu\'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture. Le jour de son onzième anniversaire, Harry reçoit la visite inattendue d\'un homme gigantesque se nommant Rubeus Hagrid, et celui-ci lui révèle qu\'il est en fait le fils de deux puissants magiciens et qu\'il possède lui aussi d\'extraordinaires pouvoirs.');

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id` varchar(36) NOT NULL,
  `bookId` varchar(36) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `bookId`, `title`, `content`) VALUES
('d4f8eb9f-67c3-4be2-9ad6-b4d36a5fea5c', '1a1ab1eb-0cdc-44d2-816c-6c6ccfcbc8b0', 'Chapitre 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet metus a magna varius euismod ut id dolor. Nullam at risus urna. Donec ac nunc odio. Etiam tempus blandit ipsum quis vulputate. Duis lacinia sollicitudin nunc, eu fringilla urna iaculis non. Proin feugiat erat non est pretium semper ut sed lectus. Fusce non tellus elit. Vestibulum gravida augue et tellus ultricies, ac efficitur diam lacinia. Nunc egestas, sem nec luctus vehicula, ipsum magna dapibus libero, eget pulvinar ante nisl a ante. Vestibulum tempus nec felis a facilisis. Nunc vulputate rutrum dictum. Quisque ultricies metus dictum, fermentum nisi nec, venenatis turpis. In accumsan ultricies iaculis.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
