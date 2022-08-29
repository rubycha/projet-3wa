-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 29 Août 2022 à 10:16
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `charlottechristmas_projetfinal`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Romance'),
(2, 'Comedy'),
(3, 'Melodrama'),
(4, 'Psychological');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `date_creation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `excerpt` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `airing_start` date NOT NULL DEFAULT '0000-00-00',
  `airing_end` date NOT NULL DEFAULT '0000-00-00',
  `time` time NOT NULL,
  `episodes` tinyint(4) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `excerpt`, `story`, `airing_start`, `airing_end`, `time`, `episodes`, `actors`, `content`, `author`, `date_creation`, `date_modification`) VALUES
(1, 'Because It\'s My First Life', 'because-it-s-my-first-life', '', 'Great chemistry, and incredible acting, this drama is a must seen!', 'Nam Se-Hee (Lee Min-Ki) is a single man in his early 30\'s. He has chosen to not marry. He owns his home, but he owes a lot on his mortgage. Yoon Ji-Ho (Jung So-Min) is a single woman in her early 30\'s. She does not own a home and envies those that do. She has given up on dating due to her financial struggles. Yoon Ji-Ho begins to live at Nam Se-Hee’s house. They become housemates.', '2017-10-09', '2017-11-28', '01:10:00', 16, 'Lee Min-Ki, Jung So-Min', '<h1>9,5/10 !</h1> <br>\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus diam, vulputate a lacinia at, dignissim ac leo. Maecenas eu placerat enim. Quisque vulputate diam non nisl placerat, ut malesuada diam porttitor. Pellentesque vestibulum felis vel porta sagittis. Nullam feugiat ipsum ut nisl venenatis, a consectetur ex rhoncus. Suspendisse varius urna a purus efficitur, blandit fringilla massa tempus. Nunc eget suscipit arcu, quis gravida orci. Morbi ut cursus augue. Phasellus semper arcu vitae purus viverra, vitae ultrices mi euismod. In tortor nunc, lacinia eget dignissim nec, consequat quis ligula. Sed placerat tincidunt orci sit amet bibendum. Mauris suscipit tincidunt mi et dignissim. Duis at ultrices est. Etiam maximus dapibus aliquam.\\r\\n\\r\\nNulla at rhoncus est. Nullam pharetra auctor massa eget efficitur. Aliquam pellentesque tortor at nulla consectetur commodo. Integer venenatis luctus rutrum. In eget orci blandit, volutpat sapien a, congue purus. Suspendisse eu eros eu purus pharetra euismod. Phasellus vel tellus tempus, pellentesque ipsum sit amet, commodo felis. Vivamus in accumsan sapien, at commodo erat. Ut accumsan, ligula vitae pulvinar tristique, nunc nibh dapibus odio, at tempor libero orci eget dui. Cras consequat neque a porta accumsan. Nulla sed tellus pharetra sem vehicula scelerisque. Fusce volutpat est lobortis urna convallis maximus. Vestibulum euismod rutrum mauris ac egestas. Vivamus nec leo pulvinar, sagittis enim aliquam, mollis arcu. Duis venenatis, nisi eget commodo cursus, tortor justo cursus ligula, vel cursus metus lacus ut purus. Sed interdum mi nibh, eu dictum lorem eleifend eu.\\r\\n\\r\\nCras nec tincidunt dui. Suspendisse potenti. Cras et nisl urna. Quisque sed elit nec tellus tincidunt auctor. Nam dignissim, augue lacinia lobortis blandit, ante nisi malesuada urna, at placerat nunc mauris et urna. In quis ornare odio. Nullam ac facilisis libero. Donec suscipit velit orci, porta gravida metus dapibus nec. Nulla ut vehicula mi, rhoncus venenatis diam. Proin convallis risus eu justo dapibus semper.', 'Charlie', '2022-08-17 11:54:45', '2022-08-11 07:24:38'),
(2, 'Yumi Cells', 'yumi-cells', '', 'Very interesting plot and adorable cartoon like cells, cannot wait for season 2!\\r\\n', 'The drama tells the story of an ordinary office worker from the perspective of the brain cells in her head that control her every thought, feeling and action.\\r\\n\\r\\nYumi (Kim Go-eun) is an ordinary woman. Her love-cell falls into a coma following the shock of a failed relationship. The drama will depict her growth and transformation as her cells work hard to wake up the love cell.\\r\\n\\r\\nGoo Woong (Ahn Bo-hyun) is a game developer who is an engineer to the core. Although he doesn\'t speak emotionally, he tries to wake up Yumi\'s love-cell with his simple and honest personality.', '2021-09-17', '2021-10-30', '01:00:00', 14, 'Kim Go-Eun, Ahn Bo-Hyun', '<h1>9/10 !</h1> <br>\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus diam, vulputate a lacinia at, dignissim ac leo. Maecenas eu placerat enim. Quisque vulputate diam non nisl placerat, ut malesuada diam porttitor. Pellentesque vestibulum felis vel porta sagittis. Nullam feugiat ipsum ut nisl venenatis, a consectetur ex rhoncus. Suspendisse varius urna a purus efficitur, blandit fringilla massa tempus. Nunc eget suscipit arcu, quis gravida orci. Morbi ut cursus augue. Phasellus semper arcu vitae purus viverra, vitae ultrices mi euismod. In tortor nunc, lacinia eget dignissim nec, consequat quis ligula. Sed placerat tincidunt orci sit amet bibendum. Mauris suscipit tincidunt mi et dignissim. Duis at ultrices est. Etiam maximus dapibus aliquam.\\r\\n\\r\\nNulla at rhoncus est. Nullam pharetra auctor massa eget efficitur. Aliquam pellentesque tortor at nulla consectetur commodo. Integer venenatis luctus rutrum. In eget orci blandit, volutpat sapien a, congue purus. Suspendisse eu eros eu purus pharetra euismod. Phasellus vel tellus tempus, pellentesque ipsum sit amet, commodo felis. Vivamus in accumsan sapien, at commodo erat. Ut accumsan, ligula vitae pulvinar tristique, nunc nibh dapibus odio, at tempor libero orci eget dui. Cras consequat neque a porta accumsan. Nulla sed tellus pharetra sem vehicula scelerisque. Fusce volutpat est lobortis urna convallis maximus. Vestibulum euismod rutrum mauris ac egestas. Vivamus nec leo pulvinar, sagittis enim aliquam, mollis arcu. Duis venenatis, nisi eget commodo cursus, tortor justo cursus ligula, vel cursus metus lacus ut purus. Sed interdum mi nibh, eu dictum lorem eleifend eu.\\r\\n\\r\\nCras nec tincidunt dui. Suspendisse potenti. Cras et nisl urna. Quisque sed elit nec tellus tincidunt auctor. Nam dignissim, augue lacinia lobortis blandit, ante nisi malesuada urna, at placerat nunc mauris et urna. In quis ornare odio. Nullam ac facilisis libero. Donec suscipit velit orci, porta gravida metus dapibus nec. Nulla ut vehicula mi, rhoncus venenatis diam. Proin convallis risus eu justo dapibus semper.', 'Charlie', '2022-08-17 11:54:45', '2022-08-11 07:24:38'),
(3, 'Twenty Five Twenty One', '25-21', '', 'Filled with so much emotions, this gem will make you feel things you never felt before.', 'Na Hee-Do (Kim Tae-Ri) is a member of her high school fencing team. Due to the South Korean financial crisis, the high school fencing team gets disbanded. Getting through all the difficulties, she becomes a member of the sabre fencing national team.\\r\\n\\r\\nThe South Korean financial crisis also causes Back Yi-Jin (Nam Joo-Hyuk)’s father\'s business to go bankrupt. This leads to a life change for Back Yi-Jin, from living the life of a wealthy person to a poor person. While studying, he works part-time jobs like delivery newspapers. Later, he becomes a sports reporter for a broadcasting network.', '2022-02-12', '2022-04-03', '01:10:00', 16, 'Kim Tae-Ri, Nam Joo-Hyuk', '<h1>10/10 !</h1> <br>\\r\\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lectus diam, vulputate a lacinia at, dignissim ac leo. Maecenas eu placerat enim. Quisque vulputate diam non nisl placerat, ut malesuada diam porttitor. Pellentesque vestibulum felis vel porta sagittis. Nullam feugiat ipsum ut nisl venenatis, a consectetur ex rhoncus. Suspendisse varius urna a purus efficitur, blandit fringilla massa tempus. Nunc eget suscipit arcu, quis gravida orci. Morbi ut cursus augue. Phasellus semper arcu vitae purus viverra, vitae ultrices mi euismod. In tortor nunc, lacinia eget dignissim nec, consequat quis ligula. Sed placerat tincidunt orci sit amet bibendum. Mauris suscipit tincidunt mi et dignissim. Duis at ultrices est. Etiam maximus dapibus aliquam.\\r\\n\\r\\nNulla at rhoncus est. Nullam pharetra auctor massa eget efficitur. Aliquam pellentesque tortor at nulla consectetur commodo. Integer venenatis luctus rutrum. In eget orci blandit, volutpat sapien a, congue purus. Suspendisse eu eros eu purus pharetra euismod. Phasellus vel tellus tempus, pellentesque ipsum sit amet, commodo felis. Vivamus in accumsan sapien, at commodo erat. Ut accumsan, ligula vitae pulvinar tristique, nunc nibh dapibus odio, at tempor libero orci eget dui. Cras consequat neque a porta accumsan. Nulla sed tellus pharetra sem vehicula scelerisque. Fusce volutpat est lobortis urna convallis maximus. Vestibulum euismod rutrum mauris ac egestas. Vivamus nec leo pulvinar, sagittis enim aliquam, mollis arcu. Duis venenatis, nisi eget commodo cursus, tortor justo cursus ligula, vel cursus metus lacus ut purus. Sed interdum mi nibh, eu dictum lorem eleifend eu.\\r\\n\\r\\nCras nec tincidunt dui. Suspendisse potenti. Cras et nisl urna. Quisque sed elit nec tellus tincidunt auctor. Nam dignissim, augue lacinia lobortis blandit, ante nisi malesuada urna, at placerat nunc mauris et urna. In quis ornare odio. Nullam ac facilisis libero. Donec suscipit velit orci, porta gravida metus dapibus nec. Nulla ut vehicula mi, rhoncus venenatis diam. Proin convallis risus eu justo dapibus semper.', 'Charlie', '2022-08-17 11:53:52', '2022-08-11 07:24:38');

-- --------------------------------------------------------

--
-- Structure de la table `post_in_category`
--

CREATE TABLE `post_in_category` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `post_in_category`
--

INSERT INTO `post_in_category` (`post_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(25) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT '2022-08-11 12:50:00',
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `date_creation`, `date_modification`) VALUES
(1, 'charlie', 'contact@charlie.fr', 'kaisoo', 'Admin', '2022-08-16 12:20:07', '2022-08-16 22:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_post`),
  ADD KEY `id_post` (`id_post`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_in_category`
--
ALTER TABLE `post_in_category`
  ADD PRIMARY KEY (`post_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`);

--
-- Contraintes pour la table `post_in_category`
--
ALTER TABLE `post_in_category`
  ADD CONSTRAINT `post_in_category_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_in_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
