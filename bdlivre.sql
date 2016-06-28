-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Février 2016 à 11:23
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdlivre`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `IDactualite` int(11) NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `descriptif` text NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `IDadmin` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `administration`
--

INSERT INTO `administration` (`IDadmin`, `nom`, `password`, `mail`) VALUES
(1, 'chris', 'admin', 'chris@admin.fr');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `IDauteur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avislecteur`
--

CREATE TABLE `avislecteur` (
  `IDavis` int(11) NOT NULL,
  `IDlivre` int(11) NOT NULL,
  `IDmembre` int(11) NOT NULL,
  `descriptif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `IDblog` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `descriptif` text NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `ordre` int(11) NOT NULL,
  `dateblog` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorielivre`
--

CREATE TABLE `categorielivre` (
  `IDcategorie` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `descriptif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorielivre`
--

INSERT INTO `categorielivre` (`IDcategorie`, `nom`, `descriptif`) VALUES
(1, 'suspens', 'livres qui tiennent en haleine'),
(2, 'thrillers', 'livres qui font peur');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `IDcommentaire` int(11) NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `descriptif` text NOT NULL,
  `date` date NOT NULL,
  `IDmembre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `IDediteur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `editeur`
--

INSERT INTO `editeur` (`IDediteur`, `nom`, `url`, `visible`, `ordre`) VALUES
(1, 'Albin Michel', 'www.albin-michel', 1, 0),
(2, 'Sud Est', 'www.lemonde.fr', 1, 0),
(3, 'Amazon', 'www.amazon.com', 1, 0),
(4, 'Pocket 12-21', 'www.12-21editions.fr', 1, 0),
(5, 'non affiche', 'www.12-21editions.fr', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `IDlivre` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `descriptif` text NOT NULL,
  `IDcategorie` int(11) NOT NULL,
  `nouveau` tinyint(1) NOT NULL,
  `urlvignette` varchar(100) NOT NULL,
  `urlmediumvignette` varchar(100) NOT NULL,
  `synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`IDlivre`, `titre`, `descriptif`, `IDcategorie`, `nouveau`, `urlvignette`, `urlmediumvignette`, `synopsis`) VALUES
(2, 'Les Fourmis ', 'Les Fourmis est un roman animalier de « philosophie fiction »1 écrit par Bernard Werber, paru en France en 1991 chez Albin Michel. Il s''agit du premier tome de La Trilogie des fourmis.', 1, 1, 'images/vignettes/9782226052575-X.jpg', 'images/medium_vignettes/9782226052575-X.jpg', 'La princesse 56e, sous le nom de Chli-pou-ni, est désormais reine de Bel-o-kan. Elle décide de créer un « mouvement évolutionnaire » au sein de sa fourmilière. Pour cela, elle crée notamment une bibliothèque chimique, dans laquelle sont placés des œufs contenant des phéromones mémoires regroupant les connaissances des belokanniennes. Grâce à l''expédition menée dans le précédent volume par 103 683e, la reine sait désormais qu''il existe « au bord oriental du monde » des « Doigts » et qu''ils sont responsables des disparitions des expéditions de chasse et d''une cité termite ainsi que de l''incendie de la cité plusieurs mois auparavant. Pour lutter contre les Doigts, la reine décide de lancer une grande croisade contre eux.\r\n\r\nDe son côté, 103 683e, tombe par hasard sur la tête d''une fourmi décapitée qui lui apprend, en dépit de son état, l''existence de fourmis rebelles s''opposant à la croisade de la reine. Celles-ci sont en réalité des fourmis pro-doigts, dont certaines sont déistes, c''est-à-dire qu''elles considèrent les Doigts comme leurs dieux. La notion de religion étant jusqu''alors étrangère aux fourmis, 103 683e reste sceptique sur le supposé statut des Doigts. Les fourmis ont été converties par l''intermédiaire du docteur Livingstone, l''appareil qui permet aux habitants de la cave d''Edmond Wells de communiquer avec les fourmis. En effet, Nicolas, la personne la plus jeune enfermée sous la fourmilière, leur fait croire que les Doigts sont les dieux des fourmis.\r\n\r\n\r\nUn scarabée rhinocéros\r\nParallèlement, Chli-pou-ni demande à 103 683e de bien vouloir diriger sa croisade contre les Doigts, qu''elle estime à quatre troupeaux, soit vingt Doigts. La reine prévoit quatre-vingt mille soldates pour sa mission, mais, à la suite d''une inondation subite de la fourmilière, elles ne sont plus que trois mille, aidées par d''autres insectes comme le scarabée rhinocéros. 103 683e accepte sa mission et se fait accompagner par 23e et 24e, des fourmis déistes. 24e porte un cocon à papillon, élément clé de la mystérieuse « mission Mercure » confiée à sa charge par le docteur Livingstone.\r\n\r\nSur leur route, les fourmis s''aperçoivent que la cité fourmilière de Giou-li-aikan a disparu par la faute des Doigts. Elles se font attaquer par un pic noir, que 103 683e parvient à vaincre. Grâce à cet exploit, les autres fourmis décident de surnommer 103 683e 103e. Elles croisent par hasard des Doigts qui pique-niquent, le préfet Dupeyron et sa famille. C''est une hécatombe côté fourmis, leur acide formique est inefficace contre les humains et les pinces de leurs mandibules les laissent insensibles. 103e tente le tout pour le tout et injecte au fils Dupeyron du venin d''abeille. Celui-ci est allergique, s''effondre et les humains s''en vont rapidement. Les fourmis voient alors dans le venin d''abeille un moyen pour vaincre les Doigts. Elles décident de s''en procurer en grande quantité et partent en direction d''Askoleïn, la Ruche d''or. La déiste 23e s''éclipse de l''expédition et part dissuader la reine des abeilles d''approvisionner les fourmis en venin. Avant que celle-ci n''ait pu statuer sur sa décision, la croisade arrive à proximité de la ruche. Fourmis et abeilles se lancent alors dans une grande bataille d''où les myrmécéennes ressortent triomphantes. Elles repartent avec leur réserve de venin, accompagnées de quelques abeilles.\r\n\r\n\r\nDétail d''un Acacia cornigera\r\nEn chemin vers le monde des Doigts, les fourmis forment une alliance avec les termites qui les rejoignent dans leur croisade. Elles passent également par une île où se situe un unique Acacia cornigera. Les insectes décident d''y faire une halte pour prendre des forces avant l''assaut final. Au moment de partir, 24e choisit de rester sur l''île et fonde la Communauté libre du cornigera. Elle est rejointe par d''autres insectes las de la croisade. Avant de repartir en guerre, 103e prend le cocon indispensable à la mission Mercure. La croisade arrive finalement chez les Doigts et décide d''attaquer un bureau de poste. De nombreux insectes rampants se font tuer, écrasés par les pieds des humains. Les volants percutent les vitres et meurent sur le coup. Les derniers se noient dans l''eau savonneuse du camion municipal chargé de nettoyer le trottoir.\r\n\r\n103e, 23e et la fourmi 9e sont les seules rescapées de cette hécatombe. 9e, curieuse de savoir ce que contient le cocon que transporte 103e, la provoque en duel. Elle se fait décapiter par 103e qui décide de se séparer de 23e. Celle-ci souhaite découvrir le monde des Doigts, tandis que 103e veut plutôt investir un nid de Doigts, c''est-à-dire un appartement. Au fil de ses pérégrinations, elle rencontre des blattes, qui lui révèlent que les Doigts sont en réalité leurs esclaves. En effet, elles sont nourries chaque jour par les déchets des humains, qu''elles considèrent comme des offrandes. Elles lui font également passer « l''épreuve sublime », c''est-à-dire que 103e doit se battre contre une autre fourmi, qui s''avère n''être en réalité que le reflet de sa propre personne. 103e refuse de se battre contre une fourmi rousse semblable à elle et les blattes lui révèlent la supercherie. 103e s''est acceptée elle-même, elle a remporté l''épreuve, les blattes lui désignent l''emplacement d''un nid de Doigts. La plupart ne cherchent qu''à la tuer. Elle part à la recherche de « Doigts gentils ». C''est ainsi qu''elle tombe par hasard chez Laetitia Wells.');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `IDmembre` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`IDactualite`);

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`IDadmin`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`IDauteur`);

--
-- Index pour la table `avislecteur`
--
ALTER TABLE `avislecteur`
  ADD PRIMARY KEY (`IDavis`),
  ADD KEY `IDlivre` (`IDlivre`),
  ADD KEY `IDlivre_2` (`IDlivre`,`IDmembre`),
  ADD KEY `IDmembre` (`IDmembre`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`IDblog`);

--
-- Index pour la table `categorielivre`
--
ALTER TABLE `categorielivre`
  ADD PRIMARY KEY (`IDcategorie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`IDcommentaire`),
  ADD KEY `IDmembre` (`IDmembre`),
  ADD KEY `IDmembre_2` (`IDmembre`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`IDediteur`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`IDlivre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`IDmembre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `IDactualite` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `IDadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `IDauteur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `avislecteur`
--
ALTER TABLE `avislecteur`
  MODIFY `IDavis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `IDblog` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorielivre`
--
ALTER TABLE `categorielivre`
  MODIFY `IDcategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `IDcommentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `IDediteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `IDlivre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `IDmembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avislecteur`
--
ALTER TABLE `avislecteur`
  ADD CONSTRAINT `FKlivre` FOREIGN KEY (`IDlivre`) REFERENCES `livre` (`IDlivre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FKmembre` FOREIGN KEY (`IDmembre`) REFERENCES `membre` (`IDmembre`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
