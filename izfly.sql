-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 14 jan. 2022 à 09:46
-- Version du serveur : 5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `izfly`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `formule` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `formule`, `user`, `date`) VALUES
(1, 1, 21, '2022-01-13 15:46:53'),
(2, 5, 21, '2022-01-13 15:52:25'),
(3, 4, 21, '2022-01-13 15:55:52');

-- --------------------------------------------------------

--
-- Structure de la table `formules`
--

CREATE TABLE `formules` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `villes_destination` text NOT NULL,
  `nom_formule` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `url_media` text NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formules`
--

INSERT INTO `formules` (`id`, `destination`, `villes_destination`, `nom_formule`, `prix`, `url_media`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'Chine', 'La Chine est un pays très peuplé d’Asie de l’est. Son territoire: prairies, déserts, montagnes, lacs, rivières et plus de 14 000 km de littoral. Pékin, la capitale à l’architecture moderne. Shanghaï est l\'un des plus grands centres financiers mondiaux et comporte de nombreux gratte-ciels.', 'Corona Dream', 599.99, 'https://business-cool.com/wp-content/uploads/2020/05/li-yang-5h_dmux_7re-unsplash.jpg', 'https://www.yonder.fr/sites/default/files/destinations/J-Amanyangyun-Spa-Lobby-04%C2%A9YONDER.fr_.jpg', 'https://img.ev.mu/images/pays/47/960x640/47.jpg', 'http://img.emg-services.net/htmlpages/htmlpage20310/china-main-1.jpg'),
(2, 'Tanzanie', 'La Tanzanie est un pays d\'Afrique de l\'Est réputé pour ses vastes régions sauvages. Celles-ci comprennent les plaines du parc national du Serengeti, un safari habité par les \"Big five\" (éléphant, lion, léopard, buffle, rhinocéros) et le parc national du Kilimandjaro, abritant la montagne la plus haute d\'Afrique. Au large se trouvent les îles tropicales de Zanzibar, aux influences arabes, et de Mafia, avec un parc marin accueillant requins-baleines et récifs coralliens.', 'African Savana', 399.99, 'https://www.marcovasco.fr/blog/wp-content/uploads/2018/10/Safari-Tanzanie-1014x487.jpeg', 'https://media-cdn.tripadvisor.com/media/photo-s/1c/39/e1/32/aerial.jpg', 'https://www.cntravellerme.com/2021/05/HVpYgoHC-Dune-Pavilion-Deck-(1)-1200x800.jpg', 'https://www.wwf.fr/sites/default/files/styles/large_16_10/public/2017-08/Loxodonta%20Africana%20%C2%A9%20Shutterstock%20-%20Lara%20Zanarini%20-%20WWF-Sweden.jpg?h=3b643c73&itok=uQtBKewE'),
(3, 'France', 'La France, pays de l\'Europe occidentale, compte des villes médiévales, des villages alpins et des plages. Paris, sa capitale, est célèbre pour ses maisons de mode, ses musées d\'art classique, dont celui du Louvre, et ses monuments comme la Tour Eiffel. Le pays est également réputé pour ses vins et sa cuisine raffinée. Les peintures rupestres des grottes de Lascaux, le théâtre romain de Lyon et l\'immense château de Versailles témoignent de sa riche histoire. ', 'La Baguette', 499.99, 'https://www.welcometofrance.com/app/uploads/2019/12/alexander-kagan-t9Td0zfDTwI-unsplash-1920x1280.jpg', 'https://static.latribune.fr/full_width/1561519/reconfinement-la-banque-de-france-estime-a-12-la-chute-d-activite-en-novembre.jpg', 'https://hoteldefrance-aixenprovence.com/assets/uploads/2015/02/hoteldefrance8.jpg', 'https://www.jetsetter.com//uploads/sites/7/2018/04/OYZG5PLW.jpeg'),
(4, 'Colombie', 'La Colombie est un pays situé dans l’extrême nord du continent sud-américain. Son territoire est composé de forêts tropicales, de la cordillère des Andes et d’une multitude de plantations de café. À Bogotá, sa capitale perchée à plus de 2 600 m d’altitude, le quartier de Zona Rosa a établi sa réputation grâce à ses nombreux restaurants et magasins. Carthagène des Indes, sur la côte caribéenne, abrite une vieille ville coloniale entourée de remparts, un château du XVIe siècle et des récifs coralliens.', 'Pablo Escobar', 699.99, 'https://www.lonelyplanet.fr/sites/lonelyplanet/files/styles/manual_crop/public/media/destination/slider/mobile/500px_116446217_0.jpg?itok=xDM2_tBI', 'https://media-cdn.tripadvisor.com/media/photo-s/14/7d/87/aa/bungalows-conectoras.jpg', 'https://lesvolsdalexi.s3.ca-central-1.amazonaws.com/blog/20200812140522/visiter-colombie-cover-1152x605.jpg', 'https://plaisiretbienetre.com/wp-content/uploads/2020/06/voyage-carthagene-colombie-media-plaisir-et-bien-etre-quebec.png'),
(5, 'Islande', ' L\'Islande est un pays insulaire nordique aux paysages spectaculaires composés de volcans, geysers, sources chaudes et champs de lave. Les parcs nationaux de Vatnajökull et Snæfellsjökull comportent d\'immenses glaciers protégés. La plupart des Islandais vivent dans la capitale, Reykjavik, qui est alimentée à l\'énergie géothermique. Elle accueille le musée national et le musée des sagas, qui retracent l\'histoire viking du pays. ', 'Vikings', 599.99, 'https://www.voyageursdumonde.fr/voyage-sur-mesure/magazine-voyage/ShowPhoto/490/0', 'https://www.marieclaire.fr/adresses-incontournables/wp-content/uploads/slider-iceland-01.jpg', 'https://nouvelles.paxeditions.com/storage/app/uploads/public/5d3/1de/9c6/thumb_90002_1200_1_0_0_auto.jpg', 'https://a.cdn-hotels.com/gdcs/production1/d1092/703ab2cd-2319-45d2-97cf-ff8b60bfe2ea.jpg'),
(6, 'Kabylie', 'Les Kabyles (en kabyle : Iqbayliyen, Izwawen ou leqbayel, en tifinagh : ⵉⵣⵡⴰⵡⵏ4) sont une ethnie berbère originaire de la Kabylie (en kabyle : Tamurt n Leqbayel5), une région kabylophone (berbérophone) d\'Algérie à dominante montagneuse6. Ils peuplent le littoral et les divers massifs montagneux de la région : les montagnes du Djurdjura, des Bibans et des Babors. À partir de la fin du xixe siècle, les Kabyles fournissent le premier groupe berbérophone par le nombre en Algérie. Ils constituent, depuis l\'indépendance de ce pays, le milieu le plus favorable au développement de la revendication identitaire berbère7,8. Ils sont aujourd’hui présents dans d\'autres régions d’Algérie, notamment à Alger, et parmi la diaspora algérienne en France.', 'Bejaia City', 399.99, 'https://cdn.pixabay.com/photo/2020/06/05/13/36/aiguades-5263253_960_720.jpg', 'https://www.visa-algerie.com/wp-content/uploads/2020/07/kabylie.jpg', 'https://cdn.generationvoyage.fr/2021/01/shutterstock_660357307.jpg', 'https://i.pinimg.com/originals/0b/3a/5a/0b3a5a2a50d522ae4a23d7cabacbd57e.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(21, 'Benyoub', 'Reda', 'reda.benyoub98@gmail.com', '3d3e3d5eb197007b110a80096c9b28f1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formule_id` (`formule`),
  ADD KEY `user_id` (`user`);

--
-- Index pour la table `formules`
--
ALTER TABLE `formules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `formules`
--
ALTER TABLE `formules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
