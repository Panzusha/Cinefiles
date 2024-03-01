-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 01 mars 2024 à 23:54
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinefiles`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Lee Byung Hun', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(2, 'Choi Min Sik', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(3, 'Jeon Gook Hwan', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(4, 'Tatsuya Fujiwara', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(5, 'Aki Maeda', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(6, 'Takeshi Kitano', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(7, 'Taro Yamamoto', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(8, 'Uma Thurman', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(9, 'John Travolta', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(10, 'Bruce Willis', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(11, 'Samuel L Jackson', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(12, 'Keanu Reeves', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(13, 'Laurence Fishburne', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(14, 'Carie Anne Moss', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(15, 'Hugo Weaving', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(16, 'Edward Norton', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(17, 'Brad Pitt', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(18, 'Helena Bonham Carter', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(19, 'Meat Loaf', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(20, 'Vincent Cassel', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(21, 'Monica Bellucci', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(22, 'Tchéky Karyo', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(23, 'Jeff Bridges', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(24, 'John Goodman', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(25, 'Julianne Moore', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(26, 'Steve Buscemi', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(27, 'Song Kang Ho', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(28, 'Lee Sun Kyun', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(29, 'Cho Yeo Jeong', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(30, 'Arnold Schwarzenegger', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(31, 'Carl Weathers', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(32, 'Kevin Peter Hall', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(33, 'Ryan Gosling', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(34, 'Carey Mulligan', '2024-02-17 21:54:17', '2024-02-17 21:56:17'),
(35, 'Bryan Cranston', '2024-02-17 21:54:17', '2024-02-17 21:56:17');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Horreur', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(2, 'Fantastique', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(3, 'Science Fiction', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(4, 'Action', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(5, 'Thriller', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(6, 'Polar', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(7, 'Comédie', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(8, 'Animation', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(9, 'Aventure', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(10, 'Western', '2024-02-17 21:30:09', '2024-02-17 21:30:09'),
(11, 'Drame', '2024-02-17 21:30:50', '2024-02-17 21:30:50'),
(12, 'Documentaire', '2024-02-17 21:30:50', '2024-02-17 21:30:50');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` bigint UNSIGNED DEFAULT NULL,
  `real_id` bigint UNSIGNED DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `extrait` varchar(300) DEFAULT NULL,
  `pitch` text NOT NULL,
  `affiche` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `annee` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `cat_id`, `real_id`, `nom`, `extrait`, `pitch`, `affiche`, `annee`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'I saw the devil', 'Un agent secret se venge d\'un tueur en série en le capturant et le relâchant à maintes reprises.', 'Depuis les années 2000 le cinéma sud coréen s\'affirme comme un spécialiste des thrillers et I saw the devil est l\'un de ses joyaux. \r\n<br/>\r\n\r\nL\'un des meilleurs films de vengeance que je connaisse : sombre et violent, qui nous entraine dans une spirale infernale sans espoir de happy end.\r\n<br/>\r\n\r\nLee Byung-hun superstar en Corée et Choi Min-Sik révélé dans Old Boy nous livrent une prestation mémorable.<br/> L\'agent secret prêt a tout pour venger sa fiancée d\'un tueur en série.\r\n<br/>\r\nOubliez le classique protagoniste qui pardonne, oubliez la lumière la chaleur et l\'espoir. <br/>Dans I saw the devil, place aux froides ténèbres.', 'https://m.media-amazon.com/images/I/517XL74AkSL._AC_UF1000,1000_QL80_.jpg', 2010, '2024-02-18 16:38:49', '2024-03-01 21:22:25'),
(2, 11, 2, 'Battle Royale', 'Dans un futur proche, le gouvernement japonais s\'empare d\'une classe de collègiens et les force à s\'entretuer.', 'En l\'an de grâce 2000, un ovni venu du Japon a fracassé le monde du cinéma : Battle Royale. <br/>\r\n\r\nFilm se déroulant dans un futur proche, un Japon en proie a de graves crises sociales et sur le point de sombrer. <br/>Un gouvernement qui prend des mesures extrêmes dont l\'une consiste a kidnapper une classe de lycéens et les faire s\'entretuer sur une île. Un seul pourra survivre.<br/>\r\n\r\nRapidement devenu culte chez les cinéphiles occidentaux ( Quentin Tarantino l\'aimera tellement qu\'il fera jouer l\'une des actrices dans Kill Bill 3 ans plus tard ) ce film marque les esprits par les alternances de moments calmes, avec des réflexions sur le sens de la vie et ceux de violences, de pur chaos. <br/>\r\n\r\nLa superstar Takeshi Kitano est incroyable en professeur désabusé qui ne croit plus en rien.<br/>\r\n\r\nA vos marques, prêts, tuez !', 'https://m.media-amazon.com/images/I/717DL6LYE0L._AC_UF1000,1000_QL80_.jpg', 2000, '2024-02-18 16:38:49', '2024-03-01 21:25:32'),
(3, 11, 3, 'Pulp Fiction', 'Les vies de deux hommes de main, d\'un boxeur, de la femme d\'un gangster et de deux braqueurs s\'entremêlent dans quatre histoires de violence et de rédemption.', 'Est-il nécessaire de présenter ce film cultissime qui, à la surprise générale a remporté la palme d\'or du festival de Cannes en 94 ?<br/>\r\n\r\nOeuvre majeure d\'un des meilleurs réalisateurs de tous les temps : Quentin Tarantino (j\'aurai pu remplir le blog rien qu\'avec ses films), il est difficile de résumer le génie de ce film.<br/>\r\n\r\nDes personnages hauts en couleurs, une intrigue découpée et montée de façon asynchrone et cependant maitrisée de A à Z.<br/>\r\n\r\nDes dialogues ciselés au micromètre. Des répliques cultissimes en pagaille.<br/>\r\n\r\nIl faut le voir pour comprendre.', 'https://antreducinema.fr/wp-content/uploads/2020/04/PULP-FICTION.jpg', 1994, '2024-02-18 16:38:49', '2024-03-01 21:25:54'),
(4, 3, 4, 'Matrix', 'Un pirate informatique recruté par de mystérieux rebelles découvre la véritable nature de sa réalité et son rôle dans la guerre contre ceux qui la contrôlent.', 'Il y a peut-être des gens vivant dans des grottes qui n\'ont jamais vu Matrix mais on en doute.<br/>\r\n\r\nFilm majeur marquant un tournant décisif dans le domaine des effets spéciaux, Matrix est également de ses films qui définissent une génération (tout comme le suivant dans la liste).<br/>\r\n\r\nMélange improbable d\'action, de culture techno geekerie, de philosophie, de réflexions dystopiques. Ce film est un cocktail détonnant qui prend tous les éléments de la culture millenial et réussit un mariage parfait.<br/>\r\n\r\nSi le 2e film tenait la route (énorme prestation de Lambert Wilson) on regrettera le 3e qui échoue à faire une conclusion digne du film légendaire qu\'est le premier film de cette trilogie.', 'https://www.closeupshop.fr/media/oart_0/oart_m/oart_14146/1023019_G524780.JPG', 1999, '2024-02-18 16:38:49', '2024-03-01 21:26:08'),
(5, 11, 5, 'Fight Club', 'Un employé de bureau insomniaque et un fabriquant de savons forment un club de combat clandestin qui dégénère en un chaos incontrôlable.', 'Tout comme Matrix, Fight Club est film générationel. Une expérience cathartique pour les jeunes adultes au tournant du millénaire. <br/>\r\n\r\nA la fois critique sociale, défouloir, analyse des mécanismes sectaires, dénonciation acide de la société de consommation.<br/>\r\n\r\nLe duo Edward Norton / Brad Pitt livre une performance symbiotique d\'une rare qualité.<br/>\r\n\r\nBien appuyé par une Helena Bonham Carter à l\'aise dans un role gothique et trash et Meatloaf en boule d\'émotion.<br/>\r\n\r\nAttention film culte', 'https://antreducinema.fr/wp-content/uploads/2020/04/FIGHT-CLUB.jpg', 1999, '2024-02-18 16:38:49', '2024-03-01 23:26:09'),
(6, 7, 7, 'The Big Lebowski', 'Jeffrey Lebowski alias Le Duc, pris pour un millionnaire répondant au même nom, cherche à obtenir la restitution de son tapis détruit, aidé par ses amis de bowling.', 'Un film a nul autre pareil avec une VF de qualité (assez rare pour être souligné).<br/>\r\n\r\nAventure dans le Los Angeles des années 90, un anti héros d\'un genre que l\'on voit rarement au cinéma, des personnages hauts en couleur.<br/>\r\n\r\nFilm hallucinant qui ne parlera surement pas au grand public mais cultissime chez les cinéphiles gen X et millenials.<br/>\r\n\r\nDécidément la fin des années 90 était vraiment un âge d\'or à part entière avec les pépites que l\'on vient d\'analyser', 'https://www.movieposters.com/cdn/shop/products/7b0b20aa271c6d49cc5faa36dd138507_1673e729-71f0-4978-b5ca-deb87b295d86_480x.progressive.jpg?v=1573591560', 1998, '2024-02-18 16:38:49', '2024-03-01 23:29:59'),
(7, 11, 8, 'Parasite', 'La famille Kim, vit d\'expédients dans un taudis en sous-sol. Un jour, le fils réussit à se faire embaucher pour donner des cours d\'anglais à la fille d\'une famille riche.', 'Changement d\'époque et de lieu, nous voici revenu en Corée du Sud contemporaine.<br/>\r\n\r\nUn film qui a pris le monde par surprise, gagnant la palme d\'or à Cannes et 4 oscars ce qui est un exploit historique pour un film non américain.<br/>\r\n\r\nCritique acide de la société coréenne, maitrise incroyable de la cinématographie. Les angles, les cadrages, le forshadowing, l\'intrigue et ses plot twists. Tout est parfait<br/>\r\n\r\nSans aucun doute un des meilleurs films du 21e siècle et je pèse mes mots', 'https://antreducinema.fr/wp-content/uploads/2020/04/Parasite-680x907.jpg', 2019, '2024-02-18 16:38:49', '2024-03-01 23:38:27'),
(8, 4, 9, 'Predator', 'Le major Dutch et son équipe partent en mission dans la jungle d\'Amérique centrale afin de délivrer des otages. Sur place, ils sont attaqués par un mystérieux ennemi qui les élimine un par un.', 'Un film avec Schwarzy des années 80, ai-je besoin d\'en dire plus ?<br/>\r\n\r\nD\'accord alors si on rajoute la jungle centre américaine, un tueur alien mystérieux, une équipe commando surchargée de testostérone, des armes à feu à gogo.<br/>\r\n\r\nTrès bien alors ajoutons John McTiernan à la réalisation, Jean Claude Van Damme qui avait commencé a incarner le monstre avant de quitter le projet et un changement de genre au milieu du film, qui passe de action classique a film d\'horreur science fiction avec une fluidité rarissime<br/>\r\n\r\nUn film comme on en fait plus.', 'https://www.movieposters.com/cdn/shop/products/IMG_8113_480x.progressive.jpg?v=1654532873', 1987, '2024-02-18 16:38:49', '2024-03-01 23:43:01'),
(9, 4, 10, 'Drive', 'Un mécanicien, cascadeur à Hollywood le jour et chauffeur la nuit, tombe amoureux de sa voisine de palier. Lorsque le mari de cette dernière sort de prison, il décide de l\'aider à s\'acquitter d\'une dette en participant à un braquage.', 'Nicolas Winding Refn, génie danois que les cinéphiles avertis connaissaient déjà avec la série des Pushers, se révèle au grand public et à Hollywood avec ce film à l\'ambiance planante si particulière.<br/>\r\n\r\nUn rôle rare de protagoniste quasi muet et super introverti pour Ryan Gosling qui lui vas tellement bien qu\'il ré utilisera ce style plus tard ( Blade Runner 2049, Only god forgives par exemple )<br/>\r\n\r\nUn film qui prend son temps et une esthétique visuelle si unique à ce réalisateur, ça ne plaira pas a tout le monde dans cette époque de block busters qui vont a 300km/h.<br/>', 'https://www.movieposters.com/cdn/shop/files/drive.24x36_480x.progressive.jpg?v=1707493200', 2011, '2024-02-18 16:38:49', '2024-03-01 23:48:35'),
(10, 4, 6, 'Dobermann', 'Le Dobermann et sa bande de braqueurs écument la région parisienne. Ils seront poursuivi par un commissaire de police machiavélique et dénué de toute morale.', 'Probablement mon film français préféré. Rien que d\'en parler j\'ai envie de le regarder pour la 50e fois.<br/>\r\n\r\nUn ovni total signé Jan Kounen qui fera aussi le mythique 99 francs, 10 ans plus tard.<br/>\r\n\r\nDes braqueurs timbrés, de la violence, des répliques cultes, des policiers encore pires que ceux qu\'ils poursuivent.<br/>\r\n\r\nCasting incroyable avec Tchéky Karyo monstreux, le couple Vincent Cassel - Monica Bellucci qui venait de se rencontrer sur un tournage un an plus tôt. Egalement un jeune Romain Duris déjanté<br/>\r\n\r\nLes musiques et effets de caméras contribuent beaucoup au dynamisme.<br/>\r\n\r\nAmes sensibles s\'abstenir ce film vas vous secouer tel un manège de la foire du trone.', 'https://www.ecranlarge.com/uploads/image/001/232/ewa3chbkpg5zlo4xcsmhzgeivnt-923.jpg', 1997, '2024-02-18 16:38:49', '2024-03-01 23:53:17');

-- --------------------------------------------------------

--
-- Structure de la table `jouentDans`
--

CREATE TABLE `jouentDans` (
  `film_id` bigint UNSIGNED NOT NULL,
  `acteur_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `jouentDans`
--

INSERT INTO `jouentDans` (`film_id`, `acteur_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(10, 20),
(10, 21),
(10, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(7, 27),
(7, 28),
(7, 29),
(8, 30),
(8, 31),
(8, 32),
(9, 33),
(9, 34),
(9, 35);

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

CREATE TABLE `realisateurs` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `realisateurs`
--

INSERT INTO `realisateurs` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Jee Woon Kim', '2024-02-17 21:27:15', '2024-02-17 21:27:55'),
(2, 'Kinji Fukusaku', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(3, 'Quentin Tarantino', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(4, 'Wachowski Brothers', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(5, 'David Fincher', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(6, 'Jan Kounen', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(7, 'Coen Brothers', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(8, 'Bong Joon Ho', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(9, 'John McTiernan', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(10, 'Nicolas Winding Refn', '2024-02-17 21:27:15', '2024-02-17 21:28:26'),
(11, 'Luc Besson', '2024-02-23 12:01:11', '2024-02-23 12:01:36'),
(12, 'Stanley Kubrick', '2024-02-23 12:04:29', '2024-02-23 12:04:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `real_id` (`real_id`);

--
-- Index pour la table `jouentDans`
--
ALTER TABLE `jouentDans`
  ADD PRIMARY KEY (`film_id`,`acteur_id`),
  ADD KEY `acteur_id` (`acteur_id`);

--
-- Index pour la table `realisateurs`
--
ALTER TABLE `realisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `realisateurs`
--
ALTER TABLE `realisateurs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `films_ibfk_2` FOREIGN KEY (`real_id`) REFERENCES `realisateurs` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `jouentDans`
--
ALTER TABLE `jouentDans`
  ADD CONSTRAINT `jouentDans_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jouentDans_ibfk_2` FOREIGN KEY (`acteur_id`) REFERENCES `acteurs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
