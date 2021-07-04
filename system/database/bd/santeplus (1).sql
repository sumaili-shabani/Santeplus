-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 juil. 2021 à 15:43
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `santeplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idart` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `image` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES
(69, 'But à très long terme.', '	                  &lt;div class=&quot;first_article&quot; id=&quot;one_article&quot; style=&quot;margin: 0px; padding: 0px; border-top: 4px solid rgb(102, 172, 208); border-right: none; border-bottom: none; border-left: none; border-image: initial;&quot;&gt;&lt;div class=&quot;first_article_text&quot; itemprop=&quot;articleBody&quot; style=&quot;margin: 0px; padding: 0px; border: none; line-height: 25px;&quot;&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nfont-family:&amp;quot;Times New Roman&amp;quot;,&amp;quot;serif&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;\r\nmso-fareast-language:FR&quot;&gt;“Dans un monde plein de conflits, d’injustice, de pauvreté,\r\net de désastre, nous voulons contribuer à des signes d’espoir et de\r\nrestauration. «SANTE PLUS» est convaincue que le développement social, doit\r\nêtre d’abord une prise de conscience durable de la population Rd congolaise qui\r\nsa première richesse passe par la prise en compte de sa santé physique, et sa\r\nterre arable fertile en abondance et rare partout dans le monde!&amp;nbsp; Que l’exploitation de la terre par des\r\nindividus en bonne santé est une voie sûre qui procure rapidement des\r\nressources, un confort&amp;nbsp; de vie et une\r\nassurance pour l’avenir plus meilleurs.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-15 16:57:50', '1642815842.JPG', 'texte', 17),
(70, 'Un monument du volcan en plein centre de Goma', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Très créatif. L’artiste plasticien rd-congolais n’attend pas qu’un étranger lui domine dans son sol. Trois semaines après (22 mai 2021), l’artiste rd-congolais Sanvura Ngonjangonja basé dans la ville touristique de Goma a réalisé un monument du volcan.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;En accord avec le gouvernement provincial du Nord-Kivu, cette œuvre d’art située au rond-point Sinyers. Il symbolise la montagne et la lave, mélange de terre et de feu, la ville même de Goma par le mont Nyiragongo.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Cette initiative contribuera également à l’attraction touristique de cette ville, qui en temps normal n’accueille déjà des milliers de touristes.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Signalons qu’une éruption volcanique est une puissance énorme, terriblement dangereuse et destructrice pour le territoire qui la vit.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Danny Kabanga&lt;/span&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Events RDC / MCP, via mediacongo.net&lt;/span&gt;&lt;/div&gt;', '', '2021-06-15 16:59:07', '1679040236.jpeg', 'texte', 17),
(71, '«SANTE?PLUS» soutient les personnes qui souffrent à cause des conflits armés, de l’injustice sociale ou des désastres naturelles', '	                  &lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nfont-family:&amp;quot;Times New Roman&amp;quot;,&amp;quot;serif&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;\r\nmso-fareast-language:FR&quot;&gt;«SANTE?PLUS» soutient les personnes qui souffrent à\r\ncause des conflits armés, de l’injustice sociale ou des désastres naturelles,\r\nNous les encourageons à prendre leurs destin en mains pour lutter contre la\r\npauvreté, en leur dotant de l’instruction, formations et moyens nécessaires ;\r\nTout en favorisant leur implication au travail qui apporte le changement\r\npositif et durable dans leur vie dans lequel ils sont affectés. ( les Filles,\r\nles filles mères, les femmes, les jeunes sans-emplois constituent est notre\r\ngroupe d’impact)&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n	              ', '', '2021-06-15 17:00:41', '124755861.JPG', 'texte', 17),
(72, 'Nous, voici dans l\'œuvre de secours aux personnes souffrantes', '	                  &lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Nous, voici dans l\'œuvre de secours aux personnes souffrantes&lt;br&gt;&lt;/p&gt;\r\n	              ', '', '2021-06-15 17:01:36', '641705333.jpg', 'texte', 17),
(75, 'Dans un monde plein de conflits, d’injustice, de pauvreté, et de désastre, nous voulons contribuer à des signes d’espoir et de restauration.', '&lt;p class=&quot;MsoNormal&quot; style=&quot;mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nfont-family:&amp;quot;Times New Roman&amp;quot;,&amp;quot;serif&amp;quot;;mso-fareast-font-family:&amp;quot;Times New Roman&amp;quot;;\r\nmso-fareast-language:FR&quot;&gt;“Dans un monde plein de conflits, d’injustice, de pauvreté,\r\net de désastre, nous voulons contribuer à des signes d’espoir et de\r\nrestauration. «SANTE PLUS» est convaincue que le développement social, doit\r\nêtre d’abord une prise de conscience durable de la population Rd congolaise qui\r\nsa première richesse passe par la prise en compte de sa santé physique, et sa\r\nterre arable fertile en abondance et rare partout dans le monde!&amp;nbsp; Que l’exploitation de la terre par des\r\nindividus en bonne santé est une voie sûre qui procure rapidement des\r\nressources, un confort&amp;nbsp; de vie et une\r\nassurance pour l’avenir plus meilleurs.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;', '', '2021-06-24 10:18:55', '294338369.JPG', 'texte', 17),
(76, 'Une descente à wilikale dans le but de secours les nos voisins qui souffrent', '	                  	                  &lt;div&gt;Lors d\'une&amp;nbsp; descente à wilikale dans le but de secours les nos voisins qui souffrent à cause des conflits....&lt;br&gt;&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              \r\n	              ', '', '2021-06-24 10:20:02', '861403434.jpg', 'texte', 17),
(77, 'Toute une communauté autours de santé plus!', 'La santé est indispensable dans la vie de tout est chacun nous!', '', '2021-06-24 10:21:19', '871178785.jpg', 'texte', 17),
(81, 'Toujours au service de l\'humanité', '	                  	                  &lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Au service de l\'humanité&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              \r\n	              ', '', '2021-06-28 13:00:58', '395807821.JPG', 'texte', 17);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES
(17, 'Actualité', '2021-06-15 16:53:03');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idcomment` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `etape1` text DEFAULT NULL,
  `etape2` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idcomment`, `idart`, `etape1`, `etape2`, `created_at`) VALUES
(16, 81, '	                  \r\n                          \r\n	              ', '	                  \r\n                          \r\n	              ', '2021-06-28 13:09:01');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `sujet` varchar(700) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES
(5, 'yuma kayanda françois', 'yuma@gmail.com', 'savoir plus sur vous le sport', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '721465673.JPG', '2020-09-07 19:39:30'),
(8, 'pataule', 'pataule@gmail.com', 'savoir plus sur vous le produit', 'je voudrais savoir les informations sur le cacao', NULL, '2021-05-15 20:18:13'),
(10, 'sifa abeli', 'mikah@gmail.com', 'j\'aimerai savoir les informations sur...', 'coucou', NULL, '2021-05-15 20:20:04'),
(14, 'kasumba kipindula bertin', 'kasumba@gmail.com', 'j\'aimerai savoir les informations sur...', 'bonjour les boss!', '1986141550.jpg', '2021-06-29 18:56:11'),
(15, 'sifa abeli', 'sifa@gmail.com', 'savoir plus sur vous le sport', 'bonjour!', NULL, '2021-06-29 18:57:24'),
(16, 'bobo', 'bobo@gmail.com', 'coucou', 'cool', '567716318.jpg', '2021-07-04 10:30:19');

-- --------------------------------------------------------

--
-- Structure de la table `galery`
--

CREATE TABLE `galery` (
  `idg` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galery`
--

INSERT INTO `galery` (`idg`, `image`, `created_at`) VALUES
(1, '1658643511.jpg', '2021-06-29 18:36:08'),
(2, '1646275209.JPG', '2021-06-29 18:36:08'),
(3, '1871371153.JPG', '2021-06-29 18:36:08'),
(4, '606797427.JPG', '2021-06-29 18:36:08'),
(5, '1136897096.JPG', '2021-06-29 18:36:09'),
(6, '1357457841.JPG', '2021-06-29 18:36:09'),
(8, '567667590.jpg', '2021-06-29 18:36:09'),
(9, '828315962.jpg', '2021-06-29 18:36:09'),
(10, '1972680462.JPG', '2021-06-29 18:36:09'),
(11, '1228988574.jpg', '2021-06-29 18:37:03'),
(12, '1124928450.jpg', '2021-06-29 18:37:03'),
(13, '306745389.jpg', '2021-06-29 18:37:03'),
(14, '646162777.jpg', '2021-06-29 18:37:04'),
(15, '715906015.jpg', '2021-06-29 18:37:04'),
(16, '393986981.jpg', '2021-06-29 18:37:04'),
(17, '568821020.jpg', '2021-06-29 18:37:05'),
(18, '1083919856.jpg', '2021-06-29 18:37:05'),
(19, '960003391.jpg', '2021-06-29 18:37:05'),
(20, '1933318928.jpg', '2021-06-29 18:37:05'),
(21, '1970402277.jpg', '2021-06-29 18:37:06'),
(22, '711314129.jpg', '2021-06-29 18:37:08'),
(23, '1043430924.jpg', '2021-06-29 18:37:08');

-- --------------------------------------------------------

--
-- Structure de la table `galery2`
--

CREATE TABLE `galery2` (
  `idg` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `url` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galery2`
--

INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES
(11, '1384373160.jpg', '2021-06-29 18:28:04', 'https://fr.wfp.org/'),
(12, '1066331522.jpg', '2021-06-29 18:28:05', 'https://www.unicef.org/fr'),
(13, '2057702791.jpg', '2021-06-29 18:29:08', 'https://www.unhcr.org/fr/');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `apropos` text DEFAULT NULL,
  `financement` text DEFAULT NULL,
  `carierre` text DEFAULT NULL,
  `partenariat` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `apropos_text` text DEFAULT NULL,
  `don` text DEFAULT NULL,
  `structure` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`idnews`, `apropos`, `financement`, `carierre`, `partenariat`, `created_at`, `apropos_text`, `don`, `structure`) VALUES
(2, '																								<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:\r\nFR\">voir texte en word<o:p></o:p></span></p>																				', '																								<h1 style=\"margin-left:36.0pt;text-indent:-36.0pt;mso-text-indent-alt:-18.0pt;\r\nmso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-fareast-font-family:\"Times New Roman\";color:windowtext;mso-fareast-language:\r\nFR\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span>I.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">           \r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-fareast-font-family:\"Times New Roman\";color:windowtext;mso-fareast-language:\r\nFR\">Financements & Partenariats<o:p></o:p></span></b></h1>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Financer notre travail<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Le\r\ntravail avec des personnes vulnérables, pauvres, affétées et victimes des\r\nconflits armés ou de désastres naturels est toujours complexe. En tant\r\nqu’organisation «SANTE-PLUS» Nous recherchons toujours la complémentarité, nous\r\napprécions grandement nos donateurs et nos partenaires étatiques du ministère\r\nde la santé en RDC. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">«SANTE-PLUS»\r\nreçoit des financements par différents canaux: Les  donateurs institutionnels, les fonds propres,\r\ndes entreprises et des fondations. Nous avons une large plate-forme de soutien,\r\nnous permettant d\'être flexibles et réactifs aux besoins des personnes touchées\r\npar un conflit ou une catastrophe naturelle...<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Circonscription de ses membres par catégories<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Inspiré\r\npar la foi Chrétienne «SANTE-PLUS» a des bases solides avec plusieurs\r\ncatégories de ses membres allant des membres ordinaires aux membres d\'honneurs,\r\nancré dans la société civile congolaise, tous sont des contribuables valable et\r\nstable qui a augmenté au fil des ans pour atteindre 2000 personnes en 2020.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Ces\r\ndernier appui des activités d’autofinancement des structures de santés, selon\r\nle besoin et Cela montre que «SANTE-PLUS» est capable de mobiliser des fonds\r\npropres. Certains donateurs institutionnels nécessitent un cofinancement ou un\r\npartage des coûts. Comme «SANTE-PLUS» est solidement ancré dans la société\r\ncivile, il peut tirer parti de ses fonds propres et en assurer un cofinancement\r\nà de financements institutionnels.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Financement institutionnel<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">«SANTE-PLUS»\r\nentretient des relations à long terme très appréciées avec le gouvernement de\r\nRDC avec evidence, l’accord-cadre 10 ans renouvelable encours pour la cogestion\r\nde trois centre de santé, et un périmètre rizicole de 20 hectares dans le\r\ngroupement de Wassa à MAKANA en territoire de Walikale<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">«SANTE-PLUS»\r\nentretient des relations à long terme très appréciées avec plusieurs agences\r\ndes Nations Unies telles que le OCHA, le PAM et l\'UNICEF. Le financement\r\ninstitutionnel est fourni après des processus très compétitifs, des audits\r\nréguliers et le respect des politiques des donateurs. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">«SANTE-PLUS»\r\nadhère donc à des normes internationales élevées, telles que HACT, les normes\r\nSphère, la protection de l\'enfance. Le financement institutionnel nous permet\r\nde fournir plus d\'assistance à de plus grands groupes de bénéficiaires et de\r\ncontinuer à grandir comme organisation professionnelle<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Réseaux-sauver des vies humaines<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">«SANTE-PLUS»\r\ncoopère dans les efforts de collecte de fonds pour les intervention type «\r\nsauver des vies humaines » et de partage des connaissances avec des\r\norganisations locales qui ont des visions similaires telles que -PADES,\r\n-CEAPRONUT,  IJED, ASCODER ? ACPEDI\r\n-Bureaux centraux des zones de santé voir les partenariats. «SANTE-PLUS»\r\npartage des connaissances avec le Cluster SANTE et Nutrition, le Cluster\r\nSécurité Alimentaire, Education, et la Coordination Humanitaire via OCHA.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Nous\r\ncoopérons avec d\'autres ONG tant locales qu’internationales, dans la mesure du\r\npossible, en partageant connaissances et expériences. Nous sommes\r\nreconnaissants de voir une croissance, tant en termes de revenus que de nombre\r\nde partenaire. Il nous permet de poursuivre notre travail auprès des personnes\r\nvulnérables et pauvres, affétées et victimes des conflits armés ou de désastres\r\nnaturels sur l’étendue de la RDC.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Partenariat, Organisation commentaire de bases (OCBs)<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">«SANTE-PLUS»\r\nSANTE-PLUS  agit en esprit de solidarité\r\navec les personnes en besoin, et reconnaît sa responsabilité de plaider en\r\npublic et auprès des représentants pour ces personnes. Son partenaire c’est la\r\ncommunauté bénéficiaires, et les OCBs ce niveau de partenariat, renforce la\r\ncollaboration et se fonde essentiellement 2 pratiques de changement, qui porte\r\nau-devant de la scène les problèmes des populations marginalisée :<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">1-\r\nLe partenariat du pouvoir ou théorie «DES ELITES»: Relations avec les personnes\r\ninfluentes en travaillant directement avec ceux qui  ont le pouvoir de prendre des décisions <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left:72.0pt;mso-add-space:auto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">2- Le\r\npartenariat avec la « BASE »: sont des recherches d’actions, les formations, le\r\nrenforcement des capacités, la mobilisation communautaire, la sensibilisation\r\nle plaidoyer, la contestation sociale, la dénonciation des abus, qui favorise\r\nl’action collective afin d’obtenir un changement social<o:p></o:p></span></p>																				', '																																										<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\">«SANTE-PLUS» travaille avec un\r\npersonnel engagé et motivé au service de millions de personnes touchées par la\r\npauvreté, les catastrophes, l\'injustice et les conflits. Grâce aux efforts de\r\nnotre personnel dévoué, nous sommes à mesure de soutenir les personnes\r\naffectées et pauvres, victimes de conflits armés, catastrophes naturelles ou de\r\nl’injustice en les aidant à reconstruire leur vie dans lequel ils sont\r\naffectés.<o:p></o:p></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><o:p> </o:p></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\">Nous apprécions nos employés et\r\noffrons une large gamme d\'avantages pour répondre aux besoins spécifiques de\r\nnotre personnel et de leurs familles vivant en RDC<o:p></o:p></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><o:p> </o:p></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.875; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: Roboto, \" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-left:72.0pt;mso-add-space:auto\">Nous aimerions entrer en contact avec des\r\ncandidats potentiels pour le poste de Directeur de mobilisation des fonds: Expatrier\r\nou Congolais. Es-tu intéressé? Veuillez contacter le Représentant Nationale le\r\nMaster Amédée MADELA M. afin que nous puissions prendre rendez-vous pour\r\ndiscuter des possibilités.<o:p></o:p></p>																																			', '																		<div>«SANTE-PLUS» SANTE-PLUS  agit en esprit de solidarité avec les personnes en besoin, et reconnaît sa responsabilité de plaider en public et auprès des représentants pour ces personnes. Son partenaire c’est la communauté bénéficiaires, et les OCBs ce niveau de partenariat, renforce la collaboration et se fonde essentiellement 2 pratiques de changement, qui porte au-devant de la scène les problèmes des populations marginalisée :</div><div><br></div><div>1- Le partenariat du pouvoir ou théorie «DES ELITES»: Relations avec les personnes influentes en travaillant directement avec ceux qui  ont le pouvoir de prendre des décisions </div><div>2- Le partenariat avec la « BASE »: sont des recherches d’actions, les formations, le renforcement des capacités, la mobilisation communautaire, la sensibilisation le plaidoyer, la contestation sociale, la dénonciation des abus., qui favorise l’action collective afin d’obtenir un changement social</div>															', '2021-06-29 13:52:39', '																																				<h1 style=\"margin-left:36.0pt;text-indent:-36.0pt;mso-text-indent-alt:-18.0pt;\r\nmso-list:l1 level1 lfo2\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-fareast-font-family:\"Times New Roman\";color:windowtext;mso-fareast-language:\r\nFR\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span>I.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">           \r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-fareast-font-family:\"Times New Roman\";color:windowtext;mso-fareast-language:\r\nFR\">A Propos de SANTE‐PLUS<o:p></o:p></span></b></h1><p class=\"MsoNormal\" style=\"mso-margin-bottom-alt:auto;line-height:normal\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-fareast-language:FR\">Nous sommes ici pour les communautés\r\npauvres et plus particulièrement pour les filles et filles mères, les femmes,\r\nles jeunes désœuvrés et sans-emplois qui souffrent à cause des conflits armés,\r\nde l’injustice sociale ou des désastres naturelles, pour les encourager à\r\nprendre leur destin en mains en luttant contre la pauvreté.<o:p></o:p></span></p><ol start=\"1\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">Histoire de l\'Entreprise<o:p></o:p></span></li>\r\n</ol><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">En effet, Il y a deux décennies que  «SANTE-PLUS» a commencée comme une initiative\r\nde la société civile. Œuvre d’un groupe de personnes (d’Hommes et des Femmes) à\r\nMubi, dans le territoire de Walikale au Nord Kivu, pendant la 2e Guerre de\r\nlibération en RDC, le 19/12/2000. Afin d’apporter un secours humanitaire aux\r\npopulations congolaises, vivant dans la misère, à cette époque ou les infrastructures\r\nsociales de base de l’État étaient en faillite.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Au fil des années, «SANTE-PLUS» Asbl s’est développée\r\nd\'une petite organisation, avec une capacité limitée pour le soutien pratique\r\ndans les villages les plus reculés du territoire de Walikale, au Nord-Kivu,\r\nvers une Organisation professionnelle capable d’exécuter ses projets et\r\nprogrammes partout en République Démocratique du Congo<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Inspiré par la foi Chrétienne «SANTE-PLUS» est une\r\norganisation nationale qui se fonde sur l’identité Chrétienne. Encourageant des\r\npersonnes vulnérables et pauvres, affétées et victimes des conflits armés ou de\r\ndésastres naturels. Nous leur dotons de l’instruction, des formations et des\r\nmoyens nécessaires, Tout en favorisant leur implication au travail qui apporte\r\nle changement positif et durable dans leur vie dans lequel ils sont affectés,\r\nDoté d’une personnalité nationale et des documents légaux de fonctionnement à\r\nplusieurs niveaux, locale, territoire, province et une personnalite au niveau\r\nnational<o:p></o:p></span></p><ol start=\"2\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">La Coordination Nationale<o:p></o:p></span></li>\r\n</ol><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">voir ecriture en word<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Équipe de direction \"SANTE-PLUS\"sL\'équipe de\r\ndirection est chargée de la gestion quotidienne de l\'organisation.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Chris Lukkien (PDG) - président<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Edwin Visser - Directeur de programme<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Rhonda Eikelboom - Directrice des programmes<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Jan-Marc Stam - Directeur des finances<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">René Vlug- Directeur de la collecte de fonds et de la\r\ncommunication<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">Wil Omlo - Directeur des ressources humaines<o:p></o:p></span></p><ol start=\"3\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">CODE DE CONDUIRE et Politique<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">La mission de «SANTE‐PLUS» «Le\r\n     but et les valeurs»<o:p></o:p></span></li>\r\n</ol><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">«SANTE‐PLUS» soutient les personnes qui souffrent à\r\ncause des conflits armés, de l’injustice sociale ou des désastres naturelles,\r\nNous les encourageons à prendre leurs destin en mains pour lutter contre la\r\npauvreté, en leur dotant de l’instruction, formations et moyens nécessaires ;\r\nTout en favorisant leur implication au travail qui apporte le changement\r\npositif et durable dans leur vie dans lequel ils sont affectés. ( les Filles,\r\nles filles mères, les femmes, les jeunes sans-emplois constituent est notre\r\ngroupe d’impact)<o:p></o:p></span></p><ol start=\"5\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">Conseil d\'administration<o:p></o:p></span></li>\r\n</ol><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">voir ecriture en word<o:p></o:p></span></p><ol start=\"6\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">La vision de «SANTE–PLUS» = But\r\n     à très long terme.<o:p></o:p></span></li>\r\n</ol><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nmargin-left:36.0pt;line-height:normal\"><span style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\"Times New Roman\";\r\nmso-fareast-language:FR\">“Dans un monde plein de conflits, d’injustice, de pauvreté,\r\net de désastre, nous voulons contribuer à des signes d’espoir et de\r\nrestauration. «SANTE PLUS» est convaincue que le développement social, doit\r\nêtre d’abord une prise de conscience durable de la population Rd congolaise qui\r\nsa première richesse passe par la prise en compte de sa santé physique, et sa\r\nterre arable fertile en abondance et rare partout dans le monde!  Que l’exploitation de la terre par des\r\nindividus en bonne santé est une voie sûre qui procure rapidement des\r\nressources, un confort  de vie et une\r\nassurance pour l’avenir plus meilleurs.<o:p></o:p></span></p><ol start=\"7\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list 36.0pt\"><span style=\"font-size:12.0pt;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n     \"Times New Roman\";mso-fareast-language:FR\">Les valeurs fondamentales de\r\n     «SANTE–PLUS»<o:p></o:p></span></li>\r\n</ol><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><table class=\"MsoNormalTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"581\" style=\"width: 435.55pt; margin-left: 34.95pt;\">\r\n <tbody><tr style=\"mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.5pt\">\r\n  <td width=\"581\" colspan=\"6\" style=\"width:435.55pt;border:solid windowtext 1.0pt;\r\n  border-right:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:21.5pt\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n  normal\"><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";mso-fareast-language:FR\">«\r\n  SANTE-PLUS » a défini trois valeurs fondamentales qui guident les actions\r\n  collectives<o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:1;height:4.45pt\">\r\n  <td width=\"96\" valign=\"top\" style=\"width:72.15pt;border-top:none;border-left:\r\n  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:\r\n  none;background:#F2F2F2;padding:0cm 3.5pt 0cm 3.5pt;height:4.45pt\">\r\n  <p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\n  text-align:center;line-height:normal\"><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"97\" valign=\"top\" style=\"width:72.65pt;border:none;border-bottom:solid windowtext 1.0pt;\r\n  background:#F2F2F2;padding:0cm 3.5pt 0cm 3.5pt;height:4.45pt\">\r\n  <p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\n  text-align:center;line-height:normal\"><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"97\" valign=\"top\" style=\"width:72.65pt;border:none;border-bottom:solid windowtext 1.0pt;\r\n  background:#F2F2F2;padding:0cm 3.5pt 0cm 3.5pt;height:4.45pt\">\r\n  <p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\n  text-align:center;line-height:normal\"><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"97\" valign=\"top\" style=\"width:72.65pt;border:none;border-bottom:solid windowtext 1.0pt;\r\n  background:#F2F2F2;padding:0cm 3.5pt 0cm 3.5pt;height:4.45pt\">\r\n  <p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\n  text-align:center;line-height:normal\"><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"97\" valign=\"top\" style=\"width:72.65pt;border:none;border-bottom:solid windowtext 1.0pt;\r\n  background:#F2F2F2;padding:0cm 3.5pt 0cm 3.5pt;height:4.45pt\">\r\n  <p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\n  text-align:center;line-height:normal\"><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"97\" valign=\"top\" style=\"width:72.65pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  background:#F2F2F2;padding:0cm 3.5pt 0cm 3.5pt;height:4.45pt\">\r\n  <p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\n  text-align:center;line-height:normal\"><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  mso-fareast-language:FR\"> <o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:2;height:39.3pt\">\r\n  <td width=\"581\" colspan=\"6\" style=\"width:435.55pt;border-top:none;border-left:\r\n  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:\r\n  solid black 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;\r\n  height:39.3pt\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\">1. </span></b><b><span style=\"font-size: 10pt; font-family: \"Calibri Light\", sans-serif;\">D</span></b><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\">ignité humaine:  </span></b><span style=\"font-size: 10pt; font-family: \"Calibri Light\", sans-serif;\">La dignité est une\r\n  valeur centrale de «SANTE–PLUS» parce que nous croyons que toutes les\r\n  personnes ont été créées à l\'image de Dieu. \r\n  Nous traitons toutes les personnes comme égales et avec du respect.  </span><b><span style=\"font-size:10.0pt;\r\n  font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\"Times New Roman\";\r\n  color:red;mso-fareast-language:FR\"><o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:3;height:35.6pt\">\r\n  <td width=\"581\" colspan=\"6\" style=\"width:435.55pt;border-top:none;border-left:\r\n  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:\r\n  solid black 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;\r\n  height:35.6pt\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\">2. </span></b><b><span style=\"font-size: 10pt; font-family: \"Calibri Light\", sans-serif;\">A</span></b><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\">utonomisation: </span></b><span style=\"font-size: 10pt; font-family: \"Calibri Light\", sans-serif;\">Fait de devenir autonome-Notre objectif est d’être de bons intendants\r\n  pour eux, nourrir leurs compétences à travers le renforcement et le  développement des capacités</span><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\r\n  \"Times New Roman\";color:red;mso-fareast-language:FR\"><o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:4;height:31.15pt\">\r\n  <td width=\"581\" colspan=\"6\" style=\"width:435.55pt;border-top:none;border-left:\r\n  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:\r\n  solid black 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;\r\n  height:31.15pt\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\">3. </span></b><b><span style=\"font-size: 10pt; font-family: \"Calibri Light\", sans-serif;\">R</span></b><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\">edevabilité: </span></b><span style=\"font-size: 10pt; font-family: \"Calibri Light\", sans-serif;\">Nous avons l\'obligation de rendre compte à ceux que nous appuyons (nos\r\n  beneficaires ) et à ceux qui nous appuient (Nos partanaires financiers/\r\n  Bailleurs)</span><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";color:red;mso-fareast-language:\r\n  FR\"><o:p></o:p></span></b></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:5;height:40.05pt\">\r\n  <td width=\"581\" colspan=\"6\" valign=\"top\" style=\"width:435.55pt;border-top:none;\r\n  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;\r\n  border-right:solid black 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;\r\n  padding:0cm 3.5pt 0cm 3.5pt;height:40.05pt\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n  normal\"><b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";mso-fareast-language:FR\">[DAR-SP] </span></b><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";mso-fareast-font-family:\r\n  \"Times New Roman\";mso-fareast-language:FR\">en sigle: Etant inspiré par\r\n  l\'Évangile, «SANTE‐PLUS» suit une approche axée sur les valeurs. Nous avons\r\n  cherché des directives dans l\'évangile en traduisant notre vision dans la\r\n  pratique.  Nous avons identifié trois\r\n  valeurs clés qui guident nos stratégies et \r\n  processus<o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr style=\"mso-yfti-irow:6;mso-yfti-lastrow:yes;height:27.45pt\">\r\n  <td width=\"581\" colspan=\"6\" valign=\"top\" style=\"width:435.55pt;border-top:none;\r\n  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;\r\n  border-right:solid black 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;\r\n  padding:0cm 3.5pt 0cm 3.5pt;height:27.45pt\">\r\n  <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n  normal\"><span style=\"font-size:10.0pt;font-family:\"Calibri Light\",\"sans-serif\";\r\n  mso-fareast-font-family:\"Times New Roman\";mso-fareast-language:FR\">Ns sommes\r\n  les mains d’aide pour la SANTE-PLUS de la population, demandons à nos staffs,\r\n  de prendre leurs responsabilités et à s\'impliquer.<o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n</tbody></table><p>											</p>																														', '												<h1 style=\"margin-left:36.0pt;text-indent:-36.0pt;mso-text-indent-alt:-18.0pt;\r\nmso-list:l2 level1 lfo1\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-fareast-font-family:\"Times New Roman\";color:windowtext;mso-fareast-language:\r\nFR\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span>I.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">           \r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-fareast-font-family:\"Times New Roman\";color:windowtext;mso-fareast-language:\r\nFR\">Faite un Don<o:p></o:p></span></b></h1>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Aidez-nous «SANTE-PLUS» à les aider à agir\"<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Ensemble,\r\nagissons pour santé et le relèvement de nos communautés  « Aidez-nous à les aider à agir» \"Qui\r\nsont-ils sont des populations vulnérables, ils sont affectées par les conflits\r\narmés et des catastrophes naturelles, ils ont tout perdu, ils sont pauvre\"<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Tous\r\nnos donateurs seront informés de l\'utilisation de leurs dons et recevront une\r\ncopie de notre rapport annuel. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Merci\r\nd\'avance de votre soutien.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">COMMENT FAIRE UN DON<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Dons\r\nouvrant droit à la réduction caritative d’impôt prévue par le dispositif\r\nfiscal, soit 30% dans les limites de 10% de votre revenu imposable. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:108.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo5\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-fareast-language:FR\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\"> </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">*Je fais un\r\ndon mensuel de :<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">      10$ (1,0$*)           20$(2,0$*)             Libre……  …..…... $        <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:108.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo5\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-fareast-language:FR\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\"> </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">*Je fais un\r\ndon ponctuel de : <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">      50$ (5,0$*)           100$(10,0$*)          Libre……  …..…... $<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Détails financiers- Notre numéro bancaire<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">(Chèque\r\nlibellé à l’ordre SANTE PLUS)  Compte\r\nDollars USD<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">            <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:108.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-fareast-language:FR\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\"> </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Titulaire du\r\ncompte         : SANTE PLUS ASBL<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:108.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-fareast-language:FR\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\"> </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Banque                               : TRUST MERCHANT\r\nBANK SA (TMB), RDC<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:108.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-fareast-language:FR\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\"> </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">N° de\r\ncompte                    : 00017-28007-75010330001-96<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:108.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l0 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-fareast-language:FR\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\"> </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Code\r\nSWIFT                        : TRMSCD3L<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">    \r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Contacts<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:144.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l4 level2 lfo3\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Courier New\";mso-fareast-font-family:\r\n\"Courier New\";mso-fareast-language:FR\">o<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">   </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Veuillez\r\ncontacter le Représentant National, et secrétaire au Conseil d\'Administration<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:144.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l4 level2 lfo3\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Courier New\";mso-fareast-font-family:\r\n\"Courier New\";mso-fareast-language:FR\">o<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">   </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Le Master of\r\nSciences : Mr Amédée MADELA M. à santeplusrdcongo@gmail.com Afin que Vous\r\npuissiez prendre rendez-vous pour discuter des possibilités.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto\"><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\"> </span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left:144.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l4 level2 lfo3\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;font-family:\"Courier New\";mso-fareast-font-family:\r\n\"Courier New\";mso-fareast-language:FR\">o<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">   </span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;mso-fareast-language:FR\">Tous nos\r\ndonateurs seront informés de l\'utilisation de leurs dons et recevront une copie\r\nde notre rapport annuel d\'activité et une copie de rapport d\'audit financier\r\nannuel.<o:p></o:p></span></p>																																																						', '<h1 style=\"margin-left:36.0pt;text-indent:-36.0pt;mso-text-indent-alt:-18.0pt;\r\nmso-list:l0 level1 lfo1\"><!--[if !supportLists]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:windowtext;mso-fareast-language:\r\nFR\"><span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp; &nbsp; &nbsp;&nbsp;</span>I.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span></b><!--[endif]--><b><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:windowtext;mso-fareast-language:\r\nFR\">Structure de gestion<o:p></o:p></span></b></h1>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">ORGANES DE GESTION ET COMPETENCE<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left:72.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Conseil d\'administration<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left:72.0pt;mso-add-space:auto;\r\ntext-indent:-18.0pt;mso-list:l1 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;line-height:107%;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;mso-fareast-language:FR\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:14.0pt;line-height:107%;\r\nmso-fareast-language:FR\">Coordination générale<o:p></o:p></span></p>												\r\n										');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `url` varchar(800) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `icone` varchar(300) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES
(25, 'yuma kayanda Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:29:13', 'fa fa-user', 'Nouvelle inscription'),
(27, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 7, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(28, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(29, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 9, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(30, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 7, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription'),
(31, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES
(33, 7, '2021-07-04 15:39:55');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idp` int(11) NOT NULL,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `codeFacture` varchar(300) DEFAULT NULL,
  `etat_paiement` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_article`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_article` (
`idart` int(11)
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`image` varchar(300)
,`created_at` datetime
,`idcat` int(11)
,`nom_cat` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_commentaire`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_commentaire` (
`idcomment` int(11)
,`idart` int(11)
,`etape1` text
,`etape2` text
,`created_at` datetime
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`image` varchar(300)
,`type` varchar(300)
,`idcat` int(11)
,`nomcat` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_paiement`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_paiement` (
`idp` int(11)
,`idpersonne` int(11)
,`date_paie` date
,`montant` float
,`motif` text
,`token` varchar(300)
,`created_at` datetime
,`codeFacture` varchar(300)
,`etat_paiement` int(11)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`telephone` varchar(300)
,`image` varchar(300)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_publicite`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_publicite` (
`idp` int(11)
,`idart` int(11)
,`etat` int(11)
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`image` varchar(300)
,`created_at` datetime
,`idcat` int(11)
,`nom_cat` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_vue`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_vue` (
`idv` int(11)
,`idart` int(11)
,`machine` varchar(20)
,`created_at` datetime
,`nom` varchar(300)
,`image` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`idcat` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `idp` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`idp`, `idart`, `etat`) VALUES
(2, 75, 1);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE `rapport` (
  `idrapport` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `annee` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `fichier` varchar(300) DEFAULT NULL,
  `code` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`idrapport`, `titre`, `description`, `annee`, `created_at`, `fichier`, `code`) VALUES
(3, 'Développement des applications web avec codeigniter', '												<div class=\"main-content__item main-content__item--text text\" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"font-family: Roboto, sans-serif; font-size: 14px; margin: 1.875rem 0px; padding: 0px; color: rgb(10, 10, 10);\"><h2 class=\"main-content__item__title\" style=\"font-family: Nunito; font-weight: 900; line-height: 3rem; color: inherit; margin: 2.8125rem 0px 1.875rem; font-size: 2.125rem; padding: 0px; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">Nourriture pour les plus vulnérables</font></h2><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700;\">Les activités de&nbsp;Santé plus</span>&nbsp;<span style=\"font-weight: 700;\">sur la sécurité alimentaire et les moyens de subsistance visent à aider les personnes touchées par des conflits ou des catastrophes à s\'engager dans des activités visant à améliorer les conditions de vie et à répondre à leurs besoins de consommation alimentaire.&nbsp;</span></font><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700;\">Santé</span>&nbsp;plus&nbsp;<span style=\"font-weight: 700;\">a un engagement à long terme, nous permettant de garantir que les personnes, en particulier les plus pauvres et les plus vulnérables, participent à des activités visant à assurer des moyens de subsistance durables et la sécurité alimentaire.</span></font></font></span></p><h2 style=\"font-family: Nunito; font-weight: 900; line-height: 3rem; color: inherit; margin: 2.8125rem 0px 1.875rem; font-size: 2.125rem; padding: 0px; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">Ce que nous faisons</font></h2><h3 style=\"font-family: Nunito; font-weight: 900; line-height: 2.125rem; color: inherit; margin-right: 0px; margin-left: 0px; font-size: 1.375rem; letter-spacing: -0.02em; padding: 0px; text-rendering: optimizelegibility;\"><span style=\"font-size: 12pt;\">Sécurité alimentaire : réponse aux catastrophes</span></h3><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700;\">Santé plus</span>&nbsp;met en œuvre des activités de secours en cas d\'urgence humanitaire.&nbsp;</font><font style=\"vertical-align: inherit;\">Une aide alimentaire est fournie pour répondre aux besoins immédiats des personnes touchées.&nbsp;</font><font style=\"vertical-align: inherit;\">Santé plus propose à la fois une aide alimentaire en espèces et des bons d\'alimentation en espèces ou alimentaires que les bénéficiaires peuvent dépenser directement pour acheter des produits alimentaires qui correspondent le mieux à leurs besoins.&nbsp;</font><font style=\"vertical-align: inherit;\">Le choix de l\'approche la plus appropriée dans un contexte spécifique est basé sur une évaluation des besoins humanitaires réels et sur la modalité de transfert de ressources qui fournira l\'aide nécessaire de la manière la plus pertinente, efficace, efficiente, sûre et rapide possible.</font></font></p></div></div><blockquote class=\"main-content__item main-content__item--blockquote blockquote\" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"padding: 0px 48px; margin-top: 1.875rem; margin-bottom: 1.875rem; font-size: 16px; border-left: none; font-family: Roboto, sans-serif; line-height: 1.6; color: rgb(102, 102, 102); position: relative; font-style: italic;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility; color: inherit;\"><font style=\"vertical-align: inherit;\">Une aide alimentaire est fournie pour répondre aux besoins immédiats des personnes touchées.</font></p></blockquote><div class=\"main-content__item main-content__item--text text\" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"font-family: Roboto, sans-serif; font-size: 14px; margin: 1.875rem 0px; padding: 0px; color: rgb(10, 10, 10);\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\">Sécurité alimentaire : reprise</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dans les projets axés sur le relèvement et le développement, ZOA travaille à des systèmes alimentaires durables pour assurer la disponibilité et l\'accès à des aliments nutritifs suffisants.&nbsp;</font><font style=\"vertical-align: inherit;\">Les programmes de ZOA comprennent des activités du côté de la production, l\'amélioration des pratiques de production et de transformation agricoles, la réduction des déchets et des pertes et l\'utilisation efficace des ressources naturelles.&nbsp;</font><font style=\"vertical-align: inherit;\">Grâce à la diversification des cultures, nous visons à augmenter la disponibilité de diverses cultures vivrières pour une alimentation variée et une nutrition améliorée.&nbsp;</font><font style=\"vertical-align: inherit;\">L\'accès à la nourriture est encore amélioré en éliminant les contraintes dans les chaînes de valeur alimentaires et les marchés alimentaires, et en augmentant le pouvoir d\'achat des bénéficiaires grâce à des activités de subsistance.</font></font></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\"><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Approches axées sur les moyens de subsistance</font></font><br></span><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Les ménages recherchent diverses manières de générer des revenus pour subvenir à leurs besoins.&nbsp;</font><font style=\"vertical-align: inherit;\">Pour réussir dans leurs efforts, les gens ont besoin de ressources, de compétences et de capacités appropriées, ainsi que de conditions extérieures favorables.</font></font></p><div class=\"main-content__item main-content__item--text text\" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin: 1.875rem 0px; padding: 0px;\"><h2 class=\"main-content__item__title\" style=\"font-family: Nunito; font-weight: 900; line-height: 3rem; color: inherit; margin: 2.8125rem 0px 1.875rem; font-size: 2.125rem; padding: 0px; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">Travailler pour la paix</font></h2><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dans les pays touchés par des conflits, un travail spécifique de consolidation de la paix est nécessaire pour créer les bases d\'un avenir durable et pacifique.&nbsp;</font><font style=\"vertical-align: inherit;\">ZOA vise à transformer les attitudes et les comportements des acteurs du conflit et à s\'attaquer aux causes (locales) du conflit.&nbsp;</font><font style=\"vertical-align: inherit;\">Nous travaillons avec les communautés locales, les organisations locales et le gouvernement local.&nbsp;</font><font style=\"vertical-align: inherit;\">Nous relions nos efforts au niveau du sol à des niveaux supérieurs lorsque cela est nécessaire et approprié.&nbsp;</font><font style=\"vertical-align: inherit;\">Les femmes et les jeunes ont un rôle clé dans la promotion de la paix et de la sécurité et ZOA renforcera donc leur rôle dans les processus de paix et de réconciliation.</font></font></span></p></div></div></div></div>										', '2020', '2021-06-30 19:20:36', '973667571.pdf', '1167695679'),
(4, 'Rapport de inpp', '												<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>										', '2020', '2021-06-30 19:21:27', '258117429.pdf', '82697522'),
(5, 'Rapport sur la descente de minova-wali', '						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>				\r\n								', '2021', '2021-06-30 19:22:48', '691906329.pdf', '539279249'),
(7, 'Rapport sur la descente à rutchuru', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>				\r\n			', '2021', '2021-06-30 21:52:21', '1966984829.pdf', '942234861'),
(8, 'rapport annuel ', '						<header style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; color: rgb(102, 102, 102); font-family: Oxygen, Helvetica, Arial, sans-serif;\"><center class=\"bsp_post_title_view\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\"><h4 style=\"margin: 20px 0px 30px; padding: 0px; border: 0px; font-size: 40px; vertical-align: baseline; clear: both; font-family: Oxygen, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(55,=\"\" 55,=\"\" 55);=\"\" zoom:=\"\" 1;=\"\" font-weight:=\"\" 700=\"\" !important;\"=\"\"><span style=\"font-family: undefined;\">﻿</span>56 modèles de rapport d’activité annuel personnalisables [+ exemples et astuces]</h4><p style=\"margin: 12px 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(159, 159, 159); font-family: Oxygen, Raleway, sans-serif; letter-spacing: 0.05em; text-transform: uppercase; line-height: 1.1em;\">BY&nbsp;<a href=\"https://fr.venngage.com/blog/author/sara/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; outline: 0px; color: rgb(159, 159, 159); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.7s ease 0s;\">SARA MCGUIRE</a>, MAR 19, 2019</p><div id=\"bsp_title_border\" style=\"margin: 0px 0px 30px; padding: 0px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(221, 221, 221); border-left-color: initial; border-image: initial; vertical-align: baseline; width: 180px;\"></div></center></header><div class=\"entry-content post-page-content\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.5; font-family: Raleway, Oxygen, Helvetica, sans-serif; letter-spacing: 0.05em; color: rgb(102, 102, 102);\"><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"></p><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: 700;\">Un&nbsp;</span><a href=\"https://fr.venngage.com/templates/reports/annual\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; outline: 0px; color: rgb(43, 149, 236); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration-line: underline; transition: color 0.7s ease 0s;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: 700;\">rapport annuel</span></a><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: 700;\">&nbsp;est un rapport d’activité complet qui fournit un aperçu des réalisations d’une entreprise et des indicateurs clés de l’année précédente.</span></p><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Il s’agit d’un excellent moyen de raconter l’histoire de votre entreprise, et une conception réussie peut aider à propulser cette histoire.</span></p><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: 700;\">Les rapports annuels incluent généralement les informations suivantes&nbsp;:</span></p><ul style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; color: rgb(55, 55, 55); letter-spacing: normal;\"><li style=\"margin: 0px 0px 0px 2.57143rem; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">La mission de l’entreprise/organisation.</span></li><li style=\"margin: 0px 0px 0px 2.57143rem; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">La croissance de l’entreprise/organisation (croissance financière, marketing ou culturelle).</span></li><li style=\"margin: 0px 0px 0px 2.57143rem; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Les différents secteurs d’activité de l’entreprise/organisation.</span></li><li style=\"margin: 0px 0px 0px 2.57143rem; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Les informations relatives aux dirigeants et administrateurs de l’entreprise/organisation.</span></li><li style=\"margin: 0px 0px 0px 2.57143rem; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">L’impact de l’entreprise/organisation sur des communautés spécifiques.</span></li><li style=\"margin: 0px 0px 0px 2.57143rem; padding: 0px; border: 0px; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Les réalisations et succès de l’entreprise/organisation.</span></li></ul><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Cet agrégat d’informations peut parfois être indigeste, mais avec une bonne conception et un design accrocheur, votre rapport d’activité peut avoir un réel impact et une excellente lisibilité.</span></p><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Avec une présentation visuellement attrayante, votre rapport peut captiver et retenir l’attention des lecteurs. Pour y parvenir, vous pouvez mettre en image les données, inclure votre identité de marque, et incorporer vos équipes dans la conception.</span></p><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Mais comment faire si vous êtes à la tête d’une petite entreprise avec des ressources de design limitées ?</span></p><h2 style=\"margin: 24px 0px; padding: 0px; border: 0px; font-size: 30px; vertical-align: baseline; clear: both; font-family: Oxygen, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" bold;=\"\" color:=\"\" rgb(55,=\"\" 55,=\"\" 55);=\"\" zoom:=\"\" 1;=\"\" letter-spacing:=\"\" normal;\"=\"\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Commencez avec un modèle de rapport d’activité annuel</span></h2><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Il n’est pas nécessaire d’être un designer chevronné pour créer un superbe rapport&nbsp;! Utilisez un&nbsp;</span><a href=\"https://fr.venngage.com/templates/reports/annual\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; outline: 0px; color: rgb(43, 149, 236); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration-line: underline; transition: color 0.7s ease 0s;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">modèle de rapport annuel</span></a><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">&nbsp;comme point de départ, puis incorporez vos informations, vos visuels, vos palettes de couleurs, vos polices, et plus encore.</span></p><p style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; color: rgb(55, 55, 55); line-height: 1.71429; font-family: Oxygen, Helvetica, Arial, sans-serif; letter-spacing: normal;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Pour plus d’astuces de design, consultez notre article sur les meilleures pratiques de 2019 en matière de&nbsp;</span><a href=\"https://venngage.com/blog/report-design/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; outline: 0px; color: rgb(43, 149, 236); background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration-line: underline; transition: color 0.7s ease 0s;\"><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">conception de rapports</span></a><span style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">.</span></p></div>				\r\n								', '2019', '2021-07-01 17:33:31', '2062096081.pdf', '77418864');

-- --------------------------------------------------------

--
-- Structure de la table `recupere`
--

CREATE TABLE `recupere` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recupere`
--

INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES
(3, 'alpha@gmail.com', '6aea3cee4087269ebea90ae4229698c7'),
(4, 'alpha@gmail.com', '1123adb273b435474c75f16e4b408015'),
(5, 'sumailiroger681@gmail.com', '163fff6220f20e70dfcbc6d2133f29c9');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES
(1, 'admin', '2021-04-12 16:10:38'),
(2, 'Visiteur', '2021-04-12 16:12:38'),
(3, 'Membre', '2021-04-12 13:54:16');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `idinfo` int(11) NOT NULL,
  `nom_site` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `tel1` varchar(300) DEFAULT NULL,
  `tel2` varchar(300) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `facebook` varchar(600) DEFAULT NULL,
  `twitter` varchar(600) DEFAULT NULL,
  `linkedin` varchar(600) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `termes` text DEFAULT NULL,
  `confidentialite` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `objectif` text DEFAULT NULL,
  `blog` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_info`
--

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`, `description`, `mission`, `objectif`, `blog`) VALUES
(1, 'Santé plus rdc', '392101120.png', '+243 970 91 31 58', '+243 813 648 305', '2 Avenue Gréveleas, - Quartier les Volcans, - C’est en ville \r\n-Ville de Goma; - Commune de Goma - Province Nord-Kivu,\r\n-En République Démocratique du Congo\r\nNous sommes ravis de vous lire et répondre à votre préoccupation.    \r\nPour cela, servez-vous des coordonnées ci-dessus\r\n2.	Coordonnées Bureau programme Walikale\r\nContacts de la Base-Bureau Program-Walikale\r\n\r\nCENTRE DE SANTE « SANTE PLUS » \r\n7&8, Av Kopa MUBI, CENTRE\r\nTerritoire de Walikale\r\nTél. : +243 081 16 027 12\r\nemail: santeplus-sante@gmail.com\r\n\r\nNous sommes ravis de vous rencontrer et répondre à votre préoccupation. Pour cela, servez-vous des coordonnées ci-dessus\r\n3.	Coordonnées Bureau programme - Gd N-Kivu- BUTEMBO\r\nContacts  Bureau- Programme- BUTEMBO\r\n\r\nBureau- Programme- BUTEMBO\r\nN° 02, Av-Kinshasa, Q. VUNGI-B Commune MUSUSA, \r\nEn face de l’hôtel Butembo, Tél.0818687505, 976630186\r\nEmail: ftanyo@gmail.com\r\n', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'santeplusrdcongo@gmail.com', 'VIII.	Contacts\r\n1.	Coordonnées de contact Bureau National\r\nCoordonnées de contacts bureau de Représentation National Goma\r\n\r\n2 Avenue Gréveleas, - Quartier les Volcans, - C’est en ville \r\n-Ville de Goma; - Commune de Goma - Province Nord-Kivu,\r\n-En République Démocratique du Congo\r\n+243 970 91 31 58, +243 813 648 305\r\nEmail : santeplusrdcongo@gmail.com\r\n\r\nNous sommes ravis de vous lire et répondre à votre préoccupation.    \r\nPour cela, servez-vous des coordonnées ci-dessus\r\n2.	Coordonnées Bureau programme Walikale\r\nContacts de la Base-Bureau Program-Walikale\r\n\r\nCENTRE DE SANTE « SANTE PLUS » \r\n7&8, Av Kopa MUBI, CENTRE\r\nTerritoire de Walikale\r\nTél. : +243 081 16 027 12\r\nemail: santeplus-sante@gmail.com\r\n\r\nNous sommes ravis de vous rencontrer et répondre à votre préoccupation. Pour cela, servez-vous des coordonnées ci-dessus\r\n3.	Coordonnées Bureau programme - Gd N-Kivu- BUTEMBO\r\nContacts  Bureau- Programme- BUTEMBO\r\n\r\nBureau- Programme- BUTEMBO\r\nN° 02, Av-Kinshasa, Q. VUNGI-B Commune MUSUSA, \r\nEn face de l’hôtel Butembo, Tél.0818687505, 976630186\r\nEmail: ftanyo@gmail.com\r\n\r\nNous sommes ravis de vous rencontrer et répondre à votre préoccupation.Pour cela, servez-vous des coordonnées ci-dessus\r\n', 'Conditions Générales d\'Utilisation\r\nDéfinitions\r\nLes Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après :\r\n?« Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ;\r\n?« Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ;\r\n?« Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ;\r\n?« Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ;\r\n?« Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ;\r\n?« Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ;\r\n?« Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé.\r\nLes présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services.\r\nEn naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles.\r\nEn créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet.\r\nNous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme.\r\nArticle 1. Inscription au service\r\n1.1 Conditions d\'inscription à la Plateforme\r\nCertaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles.\r\nVous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle).\r\nAvant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale.\r\nNotre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins.\r\n1.2 Création de compte\r\nVous pourrez créer un compte des deux manières suivantes :\r\n?Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes. ', 'REDONNER L\'ESPOIR aux populations pauvres et autres vulnérables qui souffrent à cause de l\'injustice sociale, des conflits armés ou autre désastre naturelle.', '«SANTE?PLUS» soutient les personnes qui souffrent à cause des conflits armés, de l’injustice sociale ou des désastres naturelles, Nous les encourageons à prendre leurs destin en mains pour lutter contre la pauvreté, en leur dotant de l’instruction, formations et moyens nécessaires ; Tout en favorisant leur implication au travail qui apporte le changement positif et durable dans leur vie dans lequel ils sont affectés. ( les Filles, les filles mères, les femmes, les jeunes sans-emplois constituent est notre groupe d’impact)', '“Dans un monde plein de conflits, d’injustice, de pauvreté, et de désastre, nous voulons contribuer à des signes d’espoir et de restauration. «SANTE PLUS» est convaincue que le développement social, doit être d’abord une prise de conscience durable de la population Rd congolaise qui sa première richesse passe par la prise en compte de sa santé physique, et sa terre arable fertile en abondance et rare partout dans le monde!  Que l’exploitation de la terre par des individus en bonne santé est une voie sûre qui procure rapidement des ressources, un confort  de vie et une assurance pour l’avenir plus meilleurs.', 'Nous sommes là pour les personnes qui ont tout perdu à cause des guerres ou des catastrophes naturelles. Ensemble, nous pouvons leur venir en aide dans les situations d\'urgence, en leur fournissant de la nourriture, des vêtements et un accès à l\'eau potable. Nous restons fidèles aux communautés alors qu\'elles se rétablissent – ??en leur offrant de nouvelles opportunités de s\'aider à nouveau.');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_personnel`
--

CREATE TABLE `tinfo_personnel` (
  `idtinfo_personnel` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_personnel`
--

INSERT INTO `tinfo_personnel` (`idtinfo_personnel`, `titre`, `description`, `icone`, `created_at`) VALUES
(1, 'Meilleure qualité de service', 'Nous offrons une qualité supérieure de services technologiques adaptés aux différents besoins des  utilisateurs. Grâce à nos services employés par le numérique actuel, nos clients sont satisfaits', 'fa-tag', '2021-02-12 15:17:44'),
(2, 'Soyez toujours à jour', 'Nous vous supplions d\'être à jour aux différentes  aux différentes mises à jour et modifications de nos services technologiques pour mieux vous permettre  d\'être à la une avec la technologie actuelle.', 'fa-hacker-news', '2021-02-12 15:29:30'),
(3, 'Notre contribution dans le numérique', 'Nous contribuons à l\'avancement  de notre société en appliquant la technologie en conservant des applications et logiciels  utilisant une meilleure technologie afin d\'informatiser leurs systèmes d\'informations existants', 'fa-wechat', '2021-02-12 15:36:30'),
(4, 'Santé plus est pour nous cool junior', 'cool les boss maestro!', 'fa-pencil', '2021-06-27 13:21:04');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_service`
--

CREATE TABLE `tinfo_service` (
  `idtinfo_service` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_service`
--

INSERT INTO `tinfo_service` (`idtinfo_service`, `titre`, `description`, `image`, `created_at`) VALUES
(1, 'création de logo et design moderne', 'Vous cherchez de  logo à créer ou à vous faire créer?   alors ce fini, nous vous proposons de logos et autres formes  d\'impressions   de dessin  par rapport aux  différents point de vie tels que exigé par votre besoin. notre service vous libre des bonnes images des logos impeccables adaptés correctement à votre besoin.', '1056387349.png', '2021-02-12 18:05:01'),
(2, 'design application', 'Nous proposons  la conception des applications et logiciels informatiques excellents tels que  conçus sous diverses plateformes; notamment: web, mobile, et des applications de bureau.', '1546881861.jpg', '2021-02-13 08:12:27'),
(3, 'Digital Marketing', 'il est une pièce incontournable  pour la promotion et la visibilité de la  technologie et le numérique d\'aujourd\'hui.', '646622860.jpg', '2021-02-13 08:17:06'),
(4, 'Diverses formations', 'Afin de promouvoir l\'intégrité et le développement de la société; nous organisons de diverses formations en informatique tels que   programmation informatique, l\'administration réseau, le marketing digital ? \r\npour la programmation informatique, nous donnons une large formation sur la conception de site web,  des applications   de bureau,  conception des applications mobiles...', '1393244497.jpg', '2021-02-13 08:27:07');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_user`
--

CREATE TABLE `tinfo_user` (
  `idtinfo_user` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `poste` varchar(300) DEFAULT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_user`
--

INSERT INTO `tinfo_user` (`idtinfo_user`, `first_name`, `last_name`, `email`, `image`, `telephone`, `poste`, `sexe`, `facebook`, `linkedin`, `twitter`, `created_at`) VALUES
(5, 'wilson vulembere', 'antoine', 'wilson@gmail.com', '1091547213.jpg', '081989152', 'PDG et coordonnateur', 'M', '', '', '', '2021-02-22 11:12:39'),
(7, 'patrick pakese', 'pandamiti', 'kakese@gmail.com', '853894412.jpg', '+243977525114', 'Développeur et  Maintenancier', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-06-28 17:42:02'),
(8, 'kam\'s kaningini', 'nkwana', 'nkwana@gmail.com', '569763175.jpg', '+243976630186', 'Assistant coordonnateur ', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-06-28 17:44:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `full_adresse` text DEFAULT NULL,
  `biographie` text DEFAULT NULL,
  `date_nais` date DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) NOT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `idposte` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idposte`) VALUES
(7, 'sumaili shabani ', 'roger', 'sumailiroger681@gmail.com', '1959189535.jpg', '+243817883541', 'tmk goma avenue mushanganya n°59', '                  	                  	                  	<b>                                    Développeur</b> et <b>entrepreneur</b> en temps plein!                                                                                          ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', 1),
(8, 'wilson vulembere', 'sedrickson', 'admin@gmail.com', '797122685.jpg', '+243817883541', '', NULL, '1995-06-27', 'e10adc3949ba59abbe56e057f20f883e', 1, 'M', '', '', '', 1),
(9, 'alpha blonde', 'cubaka', 'alpha@gmail.com', '475946374.jpg', '0998765432', 'Nord-kivu goma', '<b>                  	Le gars </b>de la planète                  ', '1997-04-13', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1),
(11, 'sephora', 'PALLOTTINE', 'yuma@gmail.com', '76720984.jpg', '+243810409151', 'ma vie en Dieu!', NULL, '1999-06-27', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1),
(12, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '919478595.JPG', '+243810409151', 'Quartier birere', NULL, '1999-04-13', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `idv` int(11) NOT NULL,
  `code` varchar(300) DEFAULT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`idv`, `code`, `nom`, `description`, `lien`, `created_at`, `image`) VALUES
(13, '1853076700', 'Edouard Maunick, chantre mauricien de la négritude métisse, est mort', '	                  	                  Qui sommes-nous au juste?\r\nIl est hélas devenu évident aujourd\'hui que notre technologie a dépassé notre humanité.\r\nNe te sers pas de la technologie comme d’un substitut à la chaleur humaine.\r\nDevetech est une startup qui vise à promouvoir l\'intégrité des jeunes en appliquant la technologie pour permettre l\'avancement de la société.\r\nNotre contribution dans la société est le faite de voir comment la jeunesse progresse mieux en contribuant aux différents aspects qui aident la société à s\'en sortir dans le Cao.\r\nLa technologie dont nous parlons fera en sorte de contribuer à l\'émergence de toute la jeunesse et la société en particulier.\r\nNous devons considérer la technologie actuelle comme une arme efficace pour changer le monde.\r\n	              \r\n	              ', '1924211636.mp4', '2021-06-27 09:34:01', '816701581.jpeg'),
(14, '746083424', 'En séjour de travail au Kongo Central, santé plus organise une conférence', '	                  	                  	                  <div class=\"col-md-12 mb-2\" style=\"width: 447.547px; padding-right: 14px; padding-left: 14px;\" helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" margin-bottom:=\"\" 0.75rem=\"\" !important;\"=\"\"><div class=\"nk-block-head-content text-center\" style=\"\"><h1 itemprop=\"headline\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px; border: none;\">Fin du rêve olympique pour les basketteurs sénégalais</h1><h4 class=\"nk-block-title fw-normal\" style=\"line-height: 1.1;\"><div class=\"first_article_date_lieu\" style=\"margin: 0px; padding: 0px; border: none;\">29.06.2021,</div><div class=\"first_article_rubriques\" style=\"margin: 0px; padding: 0px; border: none; text-align: start;\"><a href=\"https://www.mediacongo.net/articles-actualite-0_.html\" style=\"margin: 0px; padding: 0px; border: none;\"></a></div><div class=\"article_comments_intro\" id=\"share_intro\" style=\"margin: 10px 0px; padding: 4px 0px 0px 42px; border-top: 1px solid rgb(183, 182, 181); border-right: none; border-bottom: 1px solid rgb(183, 182, 181); border-left: none; border-image: initial; height: 36px; line-height: 40px; vertical-align: middle; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: right; position: relative;\"><div class=\"addthis_sharing_toolbox\" data-url=\"https://www.mediacongo.net/article-actualite-89346_fin_du_reve_olympique_pour_les_basketteurs_senegalais.html\" data-title=\"mediacongo.net - Actualités - Fin du rêve olympique pour les basketteurs sénégalais\" style=\"margin: 0px; padding: 0px; border: none; float: right; display: inline; position: absolute; left: 0px; top: 4px; clear: both;\"><div id=\"atstbx\" class=\"at-share-tbx-element addthis-smartlayers addthis-animated at4-show\" aria-labelledby=\"at-c3e95474-e7d0-45b0-bb33-947660c1e726\" role=\"region\" style=\"margin: 0px; padding: 0px; border: none; position: relative; line-height: 0; animation-fill-mode: both; animation-timing-function: ease-out; animation-duration: 0.3s; opacity: 1 !important;\"><span id=\"at-c3e95474-e7d0-45b0-bb33-947660c1e726\" class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; border: 0px; position: absolute; clip: rect(1px, 1px, 1px, 1px); overflow: hidden;\"></span><div class=\"at-share-btn-elements\" style=\"margin: 0px; padding: 0px; border: none;\"><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-facebook\" style=\"margin: 0px 5px 5px 0px; padding: 0px; border: 0px; display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; vertical-align: middle; border-radius: 0%;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; border: 0px; position: absolute; clip: rect(1px, 1px, 1px, 1px); overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; border: none; display: inline-block; overflow: hidden; cursor: pointer; vertical-align: middle; line-height: 32px; height: 32px; width: 32px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-facebook-1\" class=\"at-icon at-icon-facebook\" style=\"fill: rgb(255, 255, 255); width: 32px; height: 32px;\"><g><path d=\"M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z\" fill-rule=\"evenodd\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-twitter\" style=\"margin: 0px 5px 5px 0px; padding: 0px; border: 0px; display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; vertical-align: middle; border-radius: 0%;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; border: 0px; position: absolute; clip: rect(1px, 1px, 1px, 1px); overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; border: none; display: inline-block; overflow: hidden; cursor: pointer; vertical-align: middle; line-height: 32px; height: 32px; width: 32px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-twitter-2\" style=\"fill: rgb(255, 255, 255); width: 32px; height: 32px;\" class=\"at-icon at-icon-twitter\"><g><path d=\"M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336\" fill-rule=\"evenodd\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-print\" style=\"margin: 0px 5px 5px 0px; padding: 0px; border: 0px; display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; vertical-align: middle; border-radius: 0%;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; border: 0px; position: absolute; clip: rect(1px, 1px, 1px, 1px); overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; border: none; display: inline-block; overflow: hidden; cursor: pointer; vertical-align: middle; line-height: 32px; height: 32px; width: 32px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-print-3\" style=\"fill: rgb(255, 255, 255); width: 32px; height: 32px;\" class=\"at-icon at-icon-print\"><g><path d=\"M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-email\" style=\"margin: 0px 5px 5px 0px; padding: 0px; border: 0px; display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; vertical-align: middle; border-radius: 0%;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; border: 0px; position: absolute; clip: rect(1px, 1px, 1px, 1px); overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; border: none; display: inline-block; overflow: hidden; cursor: pointer; vertical-align: middle; line-height: 32px; height: 32px; width: 32px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-email-4\" style=\"fill: rgb(255, 255, 255); width: 32px; height: 32px;\" class=\"at-icon at-icon-email\"><g><g fill-rule=\"evenodd\"></g><path d=\"M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z\"></path><path d=\"M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-whatsapp\" style=\"margin: 0px 5px 5px 0px; padding: 0px; border: 0px; display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; vertical-align: middle; border-radius: 0%;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; border: 0px; position: absolute; clip: rect(1px, 1px, 1px, 1px); overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; border: none; display: inline-block; overflow: hidden; cursor: pointer; vertical-align: middle; line-height: 32px; height: 32px; width: 32px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-whatsapp-5\" style=\"fill: rgb(255, 255, 255); width: 32px; height: 32px;\" class=\"at-icon at-icon-whatsapp\"><g><path d=\"M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z\" fill-rule=\"evenodd\"></path></g></svg></span></a></div></div></div></div><span style=\"border-width: initial; border-color: initial; border-image: initial; width: 100%;\"><img src=\"https://www.mediacongo.net/cache/senegal_basketteurs_21_0_jpg_640_350_1.jpeg\" class=\"first_pic\" width=\"640\" height=\"350\" alt=\"-\" style=\"margin: 15px 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial; text-align: start; width: 100%;\"></span><span style=\"text-align: start;\"></span><div class=\"first_article_text\" itemprop=\"articleBody\" style=\"margin: 0px; padding: 0px; border: none; line-height: 25px; text-align: start;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;\">Les Lions du Sénégal renoncent au Tournoi Qalificatif Olympique de Basket qui se déroule du 29 juin au 4 juillet à Belgrade en Serbie. Les médaillés de bronze du dernier championnat d\'Afrique ne retrouveront pas les JO, 40 ans après.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;\">4 membres de la sélection actuellement en Allemagne sont touchés par la Covid-19 (trois joueurs et un membre du staff) et obligent la fédération sénégalaise à annuler le déplacement en Serbie prévu ce jour.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;\">Les basketteurs sénégalais devaient se mesurer à Porto-Rico dès ce mercredi avant de défier l\'Italie.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;\">Les exigences sanitaires ne permettent plus à la fédération de se retourner et ce sont les rêves olympiques des Lions qui s\'envolent.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;\">Le Sénégal a participé à trois reprises à une olympiade : 1968, 1972, 1980.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;\">En cas de qualification pour Tokyo, le Sénégal aurait pu s\'appuer sur ses stars estampillées NBA : Gorgui Dieng (San Antonio Spurs), Georges Niang (Utah Jazz) et bien sûr Tacko Fall (Boston Celtics)</p></div></h4></div></div>\r\n	              \r\n	              \r\n	              ', '1410832130.mp4', '2021-06-27 09:41:03', '1539286914.png'),
(15, '1358862150', 'une soirée magnifique', '	                  	                  	                  <h5 style=\"font-family: Nunito; font-weight: 700; line-height: 1.1; color: rgb(54, 74, 99); letter-spacing: -0.01em;\">création de logo et design moderne</h5><p class=\"text-soft\" style=\"margin-bottom: 0px; font-family: Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif; font-size: 14px; color: rgb(128, 148, 174) !important;\">Vous cherchez de logo à créer ou à vous faire créer? alors ce fini, nous vous proposons de logos et autres formes d\'impressions de dessin par rapport aux différents point de vie tels que exigé par votre besoin. notre service vous libre des bonnes images des logos impeccables adaptés correctement à votre besoin.</p>\r\n	              \r\n	              \r\n	              ', '590590853.mp4', '2021-06-27 09:42:53', '234957050.jpg'),
(19, '1360703838', 'pie tshibanda', '	                  	                  	                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div><div><br></div>\r\n	              \r\n	              \r\n	              ', '1045200459.mp4', '2021-06-27 11:42:27', '1814416255.png'),
(21, '76017760', 'conference de l\'agent', '<div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px;\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\">“Sociotherapy has healed our heartaches and now we are without worries and hard feelings”</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\">To restore trust and contribute to a more peaceful future, ZOA and local expert organisation PDD have introduced&nbsp;<span style=\"font-weight: 700; line-height: inherit;\"><em style=\"line-height: inherit;\">Community Based Sociotherapy (CBS)</em></span>&nbsp;in Congo. This community led approach is implemented in small groups of 12 – 15 men and women, who discuss their daily experiences guided by two well-trained facilitators from the community.</p></div></div><figure class=\"main-content__item main-content__item--video video-object\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px;\"><div class=\"flex-video widescreen\" style=\"margin: 1rem 0px 0px; padding: 0px 0px 358.109px; position: relative; height: 0px; overflow: hidden;\"><iframe src=\"https://www.youtube.com/embed/Q7oTxJYkC8U?rel=0&amp;controls=1&amp;showinfo=0\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\" style=\"position: absolute; top: 0px; left: 0px; width: 636.656px; height: 358.109px;\"></iframe></div></figure><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px;\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.875; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: Roboto, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;\">The aim of this approach is that the participants learn and experience new constructive behaviour which ultimately has a positive influence on their personal life as well as on their environment. A recent research in Congo confirms that CBS has significantly improved the mental well-being of the participants. Moreover, the interpersonal relationships at community level and social cohesion between ethnic groups has improved.&nbsp; CBS also has a positive effect on the socio-economic situation of the participants.</p><div class=\"flex-video widescreen\" style=\"margin: 1rem 0px 0px; padding: 0px 0px 358.109px; position: relative; height: 0px; overflow: hidden; color: rgb(10, 10, 10); font-family: Roboto, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;\"></div></div></div>', '865840475.webm', '2021-06-29 09:39:35', '967714012.png');

-- --------------------------------------------------------

--
-- Structure de la table `vues`
--

CREATE TABLE `vues` (
  `idv` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `machine` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vues`
--

INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES
(48, 75, '169.159.215.21', '2021-06-30 22:20:10'),
(49, 70, '169.159.215.21', '2021-07-04 01:37:01'),
(52, 69, '169.159.215.21', '2021-07-04 09:40:34'),
(53, 77, '169.159.215.21', '2021-07-04 09:48:37'),
(54, 76, '169.159.215.21', '2021-07-04 09:54:56'),
(55, 72, '169.159.215.21', '2021-07-04 15:19:11'),
(56, 71, '169.159.215.21', '2021-07-04 15:41:41'),
(57, 81, '169.159.215.21', '2021-07-04 15:42:48');

-- --------------------------------------------------------

--
-- Structure de la vue `profile_article`
--
DROP TABLE IF EXISTS `profile_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_article`  AS SELECT `article`.`idart` AS `idart`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`image` AS `image`, `article`.`created_at` AS `created_at`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nom_cat` FROM (`article` join `category` on(`article`.`idcat` = `category`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_commentaire`
--
DROP TABLE IF EXISTS `profile_commentaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_commentaire`  AS SELECT `commentaire`.`idcomment` AS `idcomment`, `commentaire`.`idart` AS `idart`, `commentaire`.`etape1` AS `etape1`, `commentaire`.`etape2` AS `etape2`, `commentaire`.`created_at` AS `created_at`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`image` AS `image`, `article`.`type` AS `type`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nomcat` FROM ((`commentaire` join `article` on(`article`.`idart` = `commentaire`.`idart`)) join `category` on(`category`.`idcat` = `article`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_paiement`
--
DROP TABLE IF EXISTS `profile_paiement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement`  AS SELECT `paiement`.`idp` AS `idp`, `paiement`.`idpersonne` AS `idpersonne`, `paiement`.`date_paie` AS `date_paie`, `paiement`.`montant` AS `montant`, `paiement`.`motif` AS `motif`, `paiement`.`token` AS `token`, `paiement`.`created_at` AS `created_at`, `paiement`.`codeFacture` AS `codeFacture`, `paiement`.`etat_paiement` AS `etat_paiement`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`telephone` AS `telephone`, `users`.`image` AS `image`, `users`.`id` AS `id` FROM (`paiement` join `users` on(`paiement`.`idpersonne` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_publicite`
--
DROP TABLE IF EXISTS `profile_publicite`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_publicite`  AS SELECT `publicite`.`idp` AS `idp`, `publicite`.`idart` AS `idart`, `publicite`.`etat` AS `etat`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`image` AS `image`, `article`.`created_at` AS `created_at`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nom_cat` FROM ((`publicite` join `article` on(`publicite`.`idart` = `article`.`idart`)) join `category` on(`article`.`idcat` = `category`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_vue`
--
DROP TABLE IF EXISTS `profile_vue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_vue`  AS SELECT `vues`.`idv` AS `idv`, `vues`.`idart` AS `idart`, `vues`.`machine` AS `machine`, `vues`.`created_at` AS `created_at`, `article`.`nom` AS `nom`, `article`.`image` AS `image`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`idcat` AS `idcat` FROM (`vues` join `article` on(`article`.`idart` = `vues`.`idart`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idart`),
  ADD KEY `idcat` (`idcat`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcomment`),
  ADD KEY `idart` (`idart`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `galery2`
--
ALTER TABLE `galery2`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `idpersonne` (`idpersonne`);

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `idart` (`idart`);

--
-- Index pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`idrapport`);

--
-- Index pour la table `recupere`
--
ALTER TABLE `recupere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Index pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`idinfo`);

--
-- Index pour la table `tinfo_personnel`
--
ALTER TABLE `tinfo_personnel`
  ADD PRIMARY KEY (`idtinfo_personnel`);

--
-- Index pour la table `tinfo_service`
--
ALTER TABLE `tinfo_service`
  ADD PRIMARY KEY (`idtinfo_service`);

--
-- Index pour la table `tinfo_user`
--
ALTER TABLE `tinfo_user`
  ADD PRIMARY KEY (`idtinfo_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrole` (`idrole`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idv`);

--
-- Index pour la table `vues`
--
ALTER TABLE `vues`
  ADD PRIMARY KEY (`idv`),
  ADD KEY `idart` (`idart`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `galery`
--
ALTER TABLE `galery`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `galery2`
--
ALTER TABLE `galery2`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `idnews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `idrapport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `recupere`
--
ALTER TABLE `recupere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tinfo_personnel`
--
ALTER TABLE `tinfo_personnel`
  MODIFY `idtinfo_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tinfo_service`
--
ALTER TABLE `tinfo_service`
  MODIFY `idtinfo_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tinfo_user`
--
ALTER TABLE `tinfo_user`
  MODIFY `idtinfo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `vues`
--
ALTER TABLE `vues`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `online`
--
ALTER TABLE `online`
  ADD CONSTRAINT `online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD CONSTRAINT `publicite_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vues`
--
ALTER TABLE `vues`
  ADD CONSTRAINT `vues_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
