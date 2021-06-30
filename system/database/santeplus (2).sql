-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 juin 2021 à 23:38
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
(51, 'Dossier Sokimo contre Kibali Gold Mine : la coalition « Tous pour le Congo » indexe le Tribunal de commerce de Kinshasa/Gombe', '	                  	                  	                  &lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              \r\n	              \r\n	              ', '', '2021-06-09 14:28:16', '315890481.jpg', 'texte', 15),
(61, 'entrepreneuriat  ', '	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-09 15:40:39', '1066530870.jpg', 'texte', 15),
(62, 'incubateur un jour nouveau', '	                  	                  &lt;div&gt;&lt;div&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;b&gt;OK&lt;/b&gt;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/span&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              \r\n	              ', '', '2021-06-09 15:41:47', '874660311.jpg', 'texte', 17),
(65, 'Foyer Culturel de Goma', '	                  &lt;div&gt;&lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;ALERTE   ALERTE&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;*&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*ÉVACUATION TOTALE DE PLUSIEURS QUARTIERS DE LA VILLE DE GOMA*&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Les données scientifiques prouvent que la ville de Goma est très en danger, une éruption à terre ou sous le lac.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Les quartiers qui doivent se vider d\'urgences des habitants sont les suivants:&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Majengo&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mabanga Nord&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mabanga Sud&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Bujovu&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Virunga&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Murara&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mapendo&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mikeno&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Kayembe&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier le Volcan.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Sur instruction obligatoire du Gouverneur dans son message lu cette nuit sur la chaîne nationale la RTNC/Goma, tous les habitants de ces quartiers doivent quitter d\'urgence vers la cité de Sake.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Prenez toutes les dispositions nécessaires dans le calme en prenant le strict minimum pour un bon embarquement.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Quittez la ville de Goma d\'urgence s\'il vous plait!!!&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*ISHARA BUTARAGAZA Johnson*&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt; _Chercheur et Penseur libre et engagé_&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;+243993831396&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              ', '', '2021-06-09 15:43:55', '989863637.jpg', 'texte', 17),
(69, 'La comédienne Maman Shako n’est plus', '&lt;div class=&quot;first_article&quot; id=&quot;one_article&quot; style=&quot;margin: 0px; padding: 0px; border-top: 4px solid rgb(102, 172, 208); border-right: none; border-bottom: none; border-left: none; border-image: initial;&quot;&gt;&lt;div class=&quot;first_article_text&quot; itemprop=&quot;articleBody&quot; style=&quot;margin: 0px; padding: 0px; border: none; line-height: 25px;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;L’artiste Jackie Shako Diala Anahengo, autrement appelée « Maman Shako » est décédée ce mardi 15 juin 2021 à l’hôpital HJ dans la commune de Limete, apprend Actu30.cd de son groupe de théâtre.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Née le 23 août 1958, Maman Shako est une de grandes figures de la comédie congolaise qui ont créé l’histoire même du théâtre en République démocratique du Congo.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Jackie Shako Diala Anahengo était l’une de dernières survivantes de la grande génération des femmes qui s’étaient orientée dans la comédie, du reste diffusée sur la chaîne nationale RTNC.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Décédée à l’âge de 62 ans, Maman Shako aura marqué l’histoire du théâtre congolais avec qu’à son compte une carrière de 48 ans sur scène.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;CL&lt;/span&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Actu 30 / MCP, via mediacongo.net&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;article_comments&quot; id=&quot;post_message&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none; width: 645px; clear: both;&quot;&gt;&lt;div class=&quot;article_comments_intro&quot; style=&quot;background-image: url(&amp;quot;../pics/comment_icon.png&amp;quot;); background-position: left center; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px; padding: 0px 0px 0px 42px; border-top: 1px solid rgb(183, 182, 181); border-right: none; border-bottom: 1px solid rgb(183, 182, 181); border-left: none; border-image: initial; height: 40px; line-height: 40px; vertical-align: middle;&quot;&gt;&lt;div class=&quot;followers&quot; style=&quot;margin: 0px; padding: 0px; border: none; float: right; display: inline;&quot;&gt;2879 suivent la conversation&lt;/div&gt;5 commentaire(s)&lt;/div&gt;&lt;div class=&quot;aviscomments&quot; style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 10px 0px; padding: 5px; border: none; box-sizing: content-box; border-radius: 14px; text-overflow: ellipsis;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Faites connaissance avec votre « Code MediaCongo »&lt;/span&gt;&lt;/p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none;&quot;&gt;Vous avez sans doute remarqué un nouveau&lt;font color=&quot;#ffffff&quot; face=&quot;Georgia, Arial, Helvetica, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&amp;nbsp;code à 7 caractères affiché à droite de votre Nom/Pseudo&lt;/span&gt;, par exemple « AB25CDF ».&lt;/font&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Il s’agit de&amp;nbsp;&lt;font color=&quot;#ffffff&quot; face=&quot;Georgia, Arial, Helvetica, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Votre Code MediaCongo&lt;/span&gt;, unique à chaque utilisateur, et qui permet de faire la différence entre utilisateurs ayant le même Nom ou Pseudo.&lt;/font&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Nous avons en effet reçu des réclamations d’utilisateurs se plaignant de confusion dans les commentaires ou dans les&amp;nbsp;&lt;a href=&quot;https://www.mediacongo.net/categories.html&quot; style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;« Petites annonces »&lt;/a&gt;&amp;nbsp;avec d’autres utilisateurs ayant respectivement les mêmes noms.&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Notre seul objectif et engagement est de&amp;nbsp;&lt;font color=&quot;#ffffff&quot; face=&quot;Georgia, Arial, Helvetica, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;continuer de vous offrir un service de qualité&lt;/span&gt;. N’hésitez pas à écrire à&amp;nbsp;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;support@mediacongo.net&lt;/span&gt;&amp;nbsp;si vous avez des questions ou suggestions.&lt;/font&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Merci et excellente expérience sur mediacongo.net&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;MediaCongo – Support Utilisateurs&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          ', '', '2021-06-15 16:57:50', '488256811.jpeg', 'texte', 17),
(70, 'Un monument du volcan en plein centre de Goma', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Très créatif. L’artiste plasticien rd-congolais n’attend pas qu’un étranger lui domine dans son sol. Trois semaines après (22 mai 2021), l’artiste rd-congolais Sanvura Ngonjangonja basé dans la ville touristique de Goma a réalisé un monument du volcan.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;En accord avec le gouvernement provincial du Nord-Kivu, cette œuvre d’art située au rond-point Sinyers. Il symbolise la montagne et la lave, mélange de terre et de feu, la ville même de Goma par le mont Nyiragongo.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Cette initiative contribuera également à l’attraction touristique de cette ville, qui en temps normal n’accueille déjà des milliers de touristes.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Signalons qu’une éruption volcanique est une puissance énorme, terriblement dangereuse et destructrice pour le territoire qui la vit.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Danny Kabanga&lt;/span&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Events RDC / MCP, via mediacongo.net&lt;/span&gt;&lt;/div&gt;', '', '2021-06-15 16:59:07', '1679040236.jpeg', 'texte', 17),
(71, 'L’Afrique en force au Festival de Cannes', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Quatre films africains seront présents sur la Croisette cette année. En lice pour la Palme d’or : le Marocain Nabil Ayouch et le Tchadien Mahamat-Saleh Haroun.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Qui succédera à Chronique des années de braise de Mohammed Lakhdar-Hamina ? En 1975, le cinéaste algérien obtenait une palme d\'or très politique pour une fresque de trois heures consacrées aux cinq années qui précédèrent le déclenchement de la guerre d\'Algérie. Depuis, aucun cinéaste africain n\'a obtenu le précieux trophée. En juillet, quatre films venus du continent ont été sélectionnés, dont deux en compétition. Tour d\'horizon d\'une sélection cannoise qui a résonné jusqu\'aux faubourgs d\'Abéché, du Caire, de Rabat ou Tunis. Thierry Frémaux, le délégué général de l\'institution, a égrené les noms des vingt-quatre réalisateurs qui batailleront pour obtenir la Palme d\'or. Parmi eux : le Marocain Nabil Ayouch et le Tchadien Mahamat-Saleh Haroun.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Maroc : la consécration pour Nabil Ayouch&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Âgé d\'à peine cinquante ans, le cinéaste affiche une sérieuse filmographie. Il a le don pour s\'emparer de sujets qui alpaguent la société marocaine : terrorisme (Les Chevaux deDieu), bidonville (Ali Zaoua, prince de la rue), prostitution à Marrakech (Much Loved)… Ce dernier avait provoqué un tsunami de scandales et de menaces, contraignant son actrice principale, Loubna Abidar, à se réfugier en France.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Présenté à la Quinzaine des réalisateurs en 2015, Much Loved fut interdit au Maroc. Conservateurs, islamistes et tartuffes d\'une image romancée du Royaume s\'étaient associés pour museler le film. Ce ne sera pas le cas avec son nouveau.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Tchad : Haroun, un habitué de la compétition&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Le Tchadien est un enfant du festival, un de ces cinéastes dont la carrière épouse régulièrement son actualité. Pour la quatrième fois, Mahamat-Saleh Haroun grimpera marches et tapis rouge pour dévoiler Lingui, les liens sacrés. L\'histoire : une adolescente de quinze ans doit résoudre une grossesse non désirée dans un pays ou loi et religion s\'opposent à l\'avortement.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Le pedigree cannois du cinéaste est éloquent : prix du jury en 2010 pour Un homme qui crie, membre du jury l\'année suivante, présentation de Grigris en 2013. En 2016, il présente Hissein Habré, une tragédie tchadienne, un documentaire qui donne la parole aux victimes de l\'ancien dictateur. Mahamat-Saleh Haroun a été nommé ministre de la Culture du Tchad en 2017. Le revoici sur la Croisette en tant qu\'artiste.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://static.lpnt.fr/images/2021/06/09/21834061lpw-21834352-embed-libre-jpg_8020481.jpg&quot; alt=&quot;&quot; width=&quot;482&quot; height=&quot;366&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Tunisie : amour et désirs, selon Leyla Bouzid&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;En marge de la course à la Palme d\'or, deux talents débutants dévoileront leurs films. La jeune réalisatrice franco-tunisienne Leyla Bouzid présentera Une histoire d\'amour et de désirs, en clôture de la soixantième édition de la Semaine de la critique. Son premier long-métrage, À peine j\'ouvre les yeux, avait décroché les honneurs d\'un autre prestigieux festival : la Mostra de Venise 2015.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Son deuxième s\'annonce comme une méchouia d\'identités : un jeune Franco-Algérien rencontre une jeune Tunisienne sur les bancs de la fac à Paris. Un charivari de sens et de littératures est annoncé. La cinéaste est la fille de Nouri Bouzid, lui-même sélectionné à deux reprises dans la sélection officielle dans les années 1980. Cette première mondiale consacre la bonne santé du cinéma tunisien depuis l\'avènement de la démocratie.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://static.lpnt.fr/images/2021/06/09/21834061lpw-21834372-embed-libre-jpg_8020482.jpg&quot; alt=&quot;&quot; width=&quot;517&quot; height=&quot;621&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Égypte : la contagieuse ironie d\'Omar El Zohairy&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;À trente-deux ans, cet ancien assistant-réalisateur de Yousri Nasrallah présentera son premier long-métrage à la Semaine de la critique. Sur le papier, Feathers (« Plumes ») semble le plus iconoclaste des films venus d\'Afrique : il imagine une famille engluée dans un quotidien qu\'un tour de magie commis pendant un anniversaire va bouleverser.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Le prestidigitateur va transformer le père autoritaire en poule. Le jeune réalisateur avait démontré un indéniable sens de l\'absurde et de l\'ironie dans un court-métrage au titre kilométrique : Les Conséquences de l\'inauguration des toilettes publiques au kilomètre 375. Dix minutes féroces, décalées, drôles.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://static.lpnt.fr/images/2021/06/09/21834061lpw-21834388-embed-libre-jpg_8020483.jpg&quot; alt=&quot;&quot; width=&quot;504&quot; height=&quot;606&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Quatre cinéastes en quête d\'audience&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Du 6 au 17 juillet, Cannes redeviendra la capitale mondiale du cinéma après un silence d\'une année pour cause de pandémie. Près de quatre-vingts films seront présentés sur quatre sélections, la Palme d\'or demeurant le Moby Dick des cinéastes, cette baleine blanche dont l\'obtention permet de toucher un public mondial. En 2019, Atlantique obtenait le grand prix du jury offrant à la cinéaste sénégalaise Mati Diop une reconnaissance internationale, facilitant la mise en œuvre de son prochain film. Les cinéastes africains seront au nombre de quatre. Ils viendront chercher gloire et honneurs, mais aussi rencontrer vendeurs internationaux, producteurs, distributeurs pour leurs futurs rêves. Cannes est un magnifique tremplin pour toucher le maximum de publics aux identités diverses.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;le Point/ MCP, via mediacongo.net&lt;/span&gt;&lt;/div&gt;', '', '2021-06-15 17:00:41', '532286801.jpeg', 'texte', 17),
(72, '« Kinshasa Now », le film qui raconte la vie des enfants de la rue', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Faire connaitre la vie des enfants de la rue et trouver des moyens pour leur encadrement. C’est le message du film «&amp;nbsp;Kinshasa Now&amp;nbsp;» du réalisateur belge Marc-Henri Wajnberg. Ce nouveau spectacle lancé mercredi 26 mai à Kinshasa, relate la vie d’un jeune homme «&amp;nbsp;Mika&amp;nbsp;», chassé de la maison par la femme de son père. Accusé de sorcellerie, il se retrouve dans la rue et se livrent au vol à la tire pour survivre.&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Mais sa vie ne se limite pas dans les marchés de Kinshasa. Il sera récupéré pour un encadrement par des structures d’encadrement d’enfants. Tourné en 3D, ce film véhicule un message clair d’après son réalisateur&amp;nbsp;: «&amp;nbsp;les enfants de la rue dégagent une énergie positive et doivent garder espoir&amp;nbsp;».&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://photos.radiookapi.net/picture/20210527111213232477-marc_2.jpg?imgmax=300&quot; alt=&quot;&quot; width=&quot;450&quot; height=&quot;338&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;«&amp;nbsp;Kinshasa Now&amp;nbsp;» a été tourné et réalisé avec le financement de la Trust Merchant Bank (TMB), et d’autres partenaires dont le Réseau des éducateurs des enfants et jeunes de la rue (REEJER).&lt;/p&gt;', '', '2021-06-15 17:01:36', '704411193.jpeg', 'texte', 17),
(74, ' RDC : Guylain Badesi met sur le marché le carnet médical numérique « Health-Malamu »', '	                  	                  	                  	                  &lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Le jeune entrepreneur Congolais Guylain Badesi a mis en place ce jeudi 18 février 2021, un carnet médical numérique, “Health-Malamu” qui signifie bonne santé à tous.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;En effet, il s’agit d’un Carnet médical numérique capable de stocker et protéger les données médicales dans un bracelet. Ce carnet médical numérique Health-malamu est composé de QR-codes portatifs sous une montre ou un bracelet.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;&lt;img alt=&quot;&quot; width=&quot;640&quot; height=&quot;640&quot; data-srcset=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?w=800&amp;amp;ssl=1 800w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=462%2C365&amp;amp;ssl=1 462w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=768%2C607&amp;amp;ssl=1 768w&quot; data-src=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=640%2C506&amp;amp;ssl=1&quot; data-sizes=&quot;(max-width: 640px) 100vw, 640px&quot; class=&quot;size-full wp-image-3807 aligncenter lazyloaded&quot; src=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=640%2C506&amp;amp;ssl=1&quot; sizes=&quot;(max-width: 640px) 100vw, 640px&quot; srcset=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?w=800&amp;amp;ssl=1 800w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=462%2C365&amp;amp;ssl=1 462w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=768%2C607&amp;amp;ssl=1 768w&quot; style=&quot;border: 0px; max-width: 100%; height: auto; clear: both; display: block; margin-left: auto; margin-right: auto; opacity: 1; transition: opacity 400ms ease 0ms;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Il est connecté sur l’application mobile qu’on peut facilement installer sur un smartphone. Un simple scan permet d’accéder aux dossiers médicaux et gérer ses rendez-vous avec les médecins. Ça permet également à ce dernier d’avoir en premier lieu toutes les informations sur son patient avant de lui prescrire des médicaments, car toutes les informations sanitaires sont stockées dans le carnet (passeport) santé Health-malamu.&lt;/p&gt;&lt;div style=&quot;clear: both; margin-top: 0em; margin-bottom: 1em;&quot;&gt;&lt;a href=&quot;https://www.congonumerique.com/boost-avec-facebook-des-formations-gratuites-en-marketing-digital/&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot; class=&quot;u86e1de20e1715896bfaa9fabd1e70346&quot; style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: opacity 250ms ease 0s; min-height: 80px; position: relative; display: block; width: 795.594px; opacity: 1; border: 0px !important;&quot;&gt;&lt;div class=&quot;centered-text-area&quot; style=&quot;min-height: 80px; position: relative; width: 795.594px;&quot;&gt;&lt;div class=&quot;centered-text&quot; style=&quot;display: table; height: 80px; padding-left: 18px; top: 0px; float: left;&quot;&gt;&lt;div class=&quot;u86e1de20e1715896bfaa9fabd1e70346-content&quot; style=&quot;display: table-cell; margin: 0px; padding: 0px 108px 0px 0px; position: relative; vertical-align: middle; width: 688px;&quot;&gt;&lt;span class=&quot;ctaText&quot; style=&quot;border-bottom: 0px solid rgb(255, 255, 255); margin: 0px; padding: 0px;&quot;&gt;A LIRE&lt;/span&gt;&amp;nbsp;&amp;nbsp;&lt;span class=&quot;postTitle&quot; style=&quot;margin: 0px; padding: 0px; width: 100%;&quot;&gt;Boost avec Facebook : des formations gratuites en Marketing Digital&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;ctaButton&quot; style=&quot;border: none; border-radius: 3px; box-shadow: none; line-height: 26px; text-shadow: none; width: 80px; min-height: 80px; background-image: url(&amp;quot;https://www.congonumerique.com/wp-content/plugins/intelly-related-posts/assets/images/simple-arrow.png&amp;quot;); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; position: absolute; right: 0px; top: 0px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Selon Guylain Badesi, l’objectif est de réduire le taux de mortalité en évitant certaines erreurs médicales aux peuples congolais. « Notre objectif est de sauver beaucoup plus de vies dans notre pays en évitant des erreurs médicales. Nous mettons à la disposition de chaque Congolais un passeport santé pour sauver sa vie. De la même manière qu’on se promène avec son téléphone, son passeport, porte-monnaie, que chaque Congolais se déplace avec ses données médicales pour en faire usage en cas de besoin » a-t-il indiqué.&lt;/p&gt;&lt;div style=&quot;clear: both; margin-top: 0em; margin-bottom: 1em;&quot;&gt;&lt;a href=&quot;https://www.congonumerique.com/vodacom-rdc-donne-desormais-aux-developpeurs-lacces-aux-apis-m-pesa/&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot; class=&quot;ub38a936d3afcdb85a6c4b814e54472fb&quot; style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: opacity 250ms ease 0s; min-height: 80px; position: relative; display: block; width: 795.594px; opacity: 1; border: 0px !important;&quot;&gt;&lt;div class=&quot;centered-text-area&quot; style=&quot;min-height: 80px; position: relative; width: 795.594px;&quot;&gt;&lt;div class=&quot;centered-text&quot; style=&quot;display: table; height: 80px; padding-left: 18px; top: 0px; float: left;&quot;&gt;&lt;div class=&quot;ub38a936d3afcdb85a6c4b814e54472fb-content&quot; style=&quot;display: table-cell; margin: 0px; padding: 0px 108px 0px 0px; position: relative; vertical-align: middle; width: 736px;&quot;&gt;&lt;span class=&quot;ctaText&quot; style=&quot;border-bottom: 0px solid rgb(255, 255, 255); margin: 0px; padding: 0px;&quot;&gt;A LIRE&lt;/span&gt;&amp;nbsp;&amp;nbsp;&lt;span class=&quot;postTitle&quot; style=&quot;margin: 0px; padding: 0px; width: 100%;&quot;&gt;Vodacom RDC donne désormais aux développeurs l\'accès aux APIs M-Pesa&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;ctaButton&quot; style=&quot;border: none; border-radius: 3px; box-shadow: none; line-height: 26px; text-shadow: none; width: 80px; min-height: 80px; background-image: url(&amp;quot;https://www.congonumerique.com/wp-content/plugins/intelly-related-posts/assets/images/simple-arrow.png&amp;quot;); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; position: absolute; right: 0px; top: 0px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;&lt;img alt=&quot;health-malamu&quot; width=&quot;640&quot; height=&quot;640&quot; data-srcset=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=2560&amp;amp;ssl=1 2560w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=487%2C365&amp;amp;ssl=1 487w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=840%2C630&amp;amp;ssl=1 840w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=768%2C576&amp;amp;ssl=1 768w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1536%2C1152&amp;amp;ssl=1 1536w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=2048%2C1536&amp;amp;ssl=1 2048w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1320%2C990&amp;amp;ssl=1 1320w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=1920&amp;amp;ssl=1 1920w&quot; data-src=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=640%2C480&amp;amp;ssl=1&quot; data-sizes=&quot;(max-width: 640px) 100vw, 640px&quot; class=&quot;aligncenter wp-image-3808 size-full lazyloaded&quot; src=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=640%2C480&amp;amp;ssl=1&quot; sizes=&quot;(max-width: 640px) 100vw, 640px&quot; srcset=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=2560&amp;amp;ssl=1 2560w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=487%2C365&amp;amp;ssl=1 487w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=840%2C630&amp;amp;ssl=1 840w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=768%2C576&amp;amp;ssl=1 768w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1536%2C1152&amp;amp;ssl=1 1536w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=2048%2C1536&amp;amp;ssl=1 2048w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1320%2C990&amp;amp;ssl=1 1320w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=1920&amp;amp;ssl=1 1920w&quot; style=&quot;border: 0px; max-width: 100%; height: auto; clear: both; display: block; margin-left: auto; margin-right: auto; opacity: 1; transition: opacity 400ms ease 0ms;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Il par ailleurs exprimé les difficultés qui handicap son œuvre, « Nous recevons actuellement beaucoup de demandes et nous n’arrivons pas à satisfaire nos clients, parce que nous sommes limités par les moyens financiers pour acheter des matériels. Ce pourquoi nous sollicitions l’accompagnement du ministère de la santé de la RDC et des personnes de bonne volonté pour atteindre nos objectifs. Nous invitons les Hôpitaux Congolais à nous ouvrir leurs portes pour que nous apportions notre pierre à l’édifice ».&lt;/p&gt;\r\n                          \r\n	              \r\n	              \r\n	              \r\n	              ', '', '2021-06-15 18:08:31', '1394375158.jpeg', 'texte', 15),
(75, 'Goma Foyer Culturel de Goma', '	                  &lt;div&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              ', '', '2021-06-24 10:18:55', '1962836.jpg', 'texte', 17),
(76, 'LA DEUXIÈME JOURNÉE DE CETTE FORMATION DES JEUNES FORMATEURS SUR LA BONNE GOUVERNANCE ET LE LEADERSHIP DE QUALITÉ, LES JEUNES ÉTAIENT ÉDIFIÉS', '	                  &lt;div&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              ', '', '2021-06-24 10:20:02', '448774646.jpg', 'texte', 17),
(77, 'DYNAMIQUE GENERATION CONSCIENTE RDC', '	                  	                  	                  &lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*La RDC s\'apprête à la levée d\'État d\'Urgence institué par le Chef de l\'État depuis le mois de mars.* &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*Pour sauver le pays du chaos économique qui pourrait en découler, Le Président du Parlement des Jeunes du Nord-Kivu et analyste économique Johnson Ishara… &lt;div class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl oo9gr5id gpro0wi8 lrazzd5p&quot; role=&quot;button&quot; tabindex=&quot;0&quot; style=&quot;outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; background-color: transparent; text-align: inherit; font-weight: 600; display: inline; -webkit-tap-highlight-color: transparent; color: var(--primary-text); font-family: inherit;&quot;&gt;Afficher la suite&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              \r\n	              \r\n	              ', '', '2021-06-24 10:21:19', '1039945422.jpg', 'texte', 17),
(81, 'DÉJÀ 20 ANS, jour pour jour au service de l\'humanité.  De 20000 à  2020', '	                  &lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;JOYEUX ANNIVERSAIRE &lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/?__cft__[0]=AZWZndsM6K2TXXQfpz0i3DCTrDyLmiavVZd-x3bmJ6bX-dxUnjed4vkXnleBfLrjuBPp-H20wnn6A535AFko3lcCrO_8ohxdhQ64PFmcPxZFjCQgJyvYptbjMfygP_VBdKs5Pl0P2Ow6jXUqxnbROBaj&amp;amp;__tn__=kK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;Santé-Plus Asbl&lt;/a&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/?__cft__[0]=AZWZndsM6K2TXXQfpz0i3DCTrDyLmiavVZd-x3bmJ6bX-dxUnjed4vkXnleBfLrjuBPp-H20wnn6A535AFko3lcCrO_8ohxdhQ64PFmcPxZFjCQgJyvYptbjMfygP_VBdKs5Pl0P2Ow6jXUqxnbROBaj&amp;amp;__tn__=kK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;Santé-Plus Asbl&lt;/a&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/?__cft__[0]=AZWZndsM6K2TXXQfpz0i3DCTrDyLmiavVZd-x3bmJ6bX-dxUnjed4vkXnleBfLrjuBPp-H20wnn6A535AFko3lcCrO_8ohxdhQ64PFmcPxZFjCQgJyvYptbjMfygP_VBdKs5Pl0P2Ow6jXUqxnbROBaj&amp;amp;__tn__=kK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;Santé-Plus Asbl&lt;/a&gt; &lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/?__cft__[0]=AZWZndsM6K2TXXQfpz0i3DCTrDyLmiavVZd-x3bmJ6bX-dxUnjed4vkXnleBfLrjuBPp-H20wnn6A535AFko3lcCrO_8ohxdhQ64PFmcPxZFjCQgJyvYptbjMfygP_VBdKs5Pl0P2Ow6jXUqxnbROBaj&amp;amp;__tn__=kK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;Asbl&lt;/a&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-28 13:00:58', '1733200843.jpg', 'texte', 17);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES
(82, 'Santé-Plus Asbl Organisation non gouvernementale (ONG)', '&lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;&quot; dir=&quot;auto&quot; style=&quot;color: rgb(28, 30, 33); font-size: 12px; white-space: normal;&quot;&gt;&lt;div class=&quot;ecm0bbzt hv4rvrfc ihqw7lf3 dati1w0a&quot; data-ad-comet-preview=&quot;message&quot; data-ad-preview=&quot;message&quot; id=&quot;jsc_c_1cn&quot; style=&quot;padding: 4px 16px 16px; font-family: inherit;&quot;&gt;&lt;div class=&quot;j83agx80 cbu4d94t ew0dbk1b irj2b8pg&quot; style=&quot;flex-direction: column; margin-bottom: -5px; margin-top: -5px; display: flex; font-family: inherit;&quot;&gt;&lt;div class=&quot;qzhwtbm6 knvmm38d&quot; style=&quot;margin-top: 5px; margin-bottom: 5px; font-family: inherit;&quot;&gt;&lt;span class=&quot;d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m&quot; dir=&quot;auto&quot; style=&quot;line-height: 1.3333; display: block; overflow-wrap: break-word; max-width: 100%; min-width: 0px; font-size: 0.9375rem; font-family: inherit; color: var(--primary-text); word-break: break-word;&quot;&gt;&lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Très chers abonnés, &lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Nous avons l\'honneur de partager notre immense joie avec vous pour la bonne continuité des activés sur terrain à BUTEMBO (As Vulamba et As Vutshundo) dans le cadre du Projet NAC/ANJE que nous exécutons sous financement de l\'UNICEF. &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;En effet, c\'est depuis Octobre 2020 que nous avions valablement commencé les activités après bien-sûr une longue période d\'investigation. &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Nous nous faisons ici le devoir d\'énumérer quelques activités déjà réalisées pour vous tenir informé du travail que nous réalisons sur le terrain. Il s\'agit de:&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;1. La présentation du Projet au BCZS ;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;2. Présentation du Projet à la communauté ( Vulamba et Vutsundo) ;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;3. Briefing ou renforcement des capacités des équipes de la mise en oeuvre du Projet ( Notre Staff et les représentants de deux aires de santé) ;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;4. Formation des RECOS;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;5. DÉNOMBREMENT;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;6. Diagnostic communautaire;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;7. Constitution des groupes de soutien&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;8. Formation des groupes de soutien;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;9. Équipement des groupes de soutien;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;10. Démonstrations culinaires.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;D\'une manière brève, c\'est sont là les activités déjà réalisées et actuellement nous poursuivons avec les démonstrations culinaires dans différents groupes de soutien. &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;NOUS SOMMES ICI POUR SOUTENIR NOS VOISINS EN BESOIN. &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Ensemble, restons concentrés sur le travail. &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Que le seigneur vous bénisse et bon week-end à tous!!!&lt;/div&gt;&lt;/div&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;l9j0dhe7&quot; id=&quot;jsc_c_1co&quot; style=&quot;position: relative; color: rgb(28, 30, 33); font-size: 12px; white-space: normal;&quot;&gt;&lt;div class=&quot;l9j0dhe7&quot; style=&quot;position: relative; font-family: inherit;&quot;&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;l9j0dhe7&quot; style=&quot;position: relative; font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 gpro0wi8&quot; href=&quot;https://web.facebook.com/pages/Butembo/109706005715419?__cft__[0]=AZWxfYz4aMNyW5fcsD4tTiFIZ8kC_-SfABXy6LRL6mp0_xSQlceZOKO0-20u4F_Cm1VTjqmp_44FKTZXu0KgvslAr6nsADGX_3Fqqp0fjCyxzESok7FvW6juI_wXG16YB8EmhQsGkL_brdESBYHGjhzl&amp;amp;__tn__=H-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: inherit; cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;&lt;div class=&quot;l9j0dhe7 stjgntxs ni8dbmo4 do00u71z&quot; style=&quot;height: 0px; position: relative; overflow: hidden; font-family: inherit; padding-top: 182.344px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          ', '', '2021-06-28 13:06:56', '9177130.jpg', 'texte', 15);

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
(15, 'Publication', '2021-06-09 13:13:01'),
(17, 'Information ', '2021-06-15 16:53:03');

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
(14, 74, '\r\n                          ', '\r\n                          ', '2021-06-28 12:54:48'),
(15, 82, '\r\n                          ', '\r\n                          ', '2021-06-28 13:07:48'),
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
(15, 'sifa abeli', 'sifa@gmail.com', 'savoir plus sur vous le sport', 'bonjour!', NULL, '2021-06-29 18:57:24');

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
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`idnews`, `apropos`, `financement`, `carierre`, `partenariat`, `created_at`) VALUES
(2, '																		<div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; color: rgb(10, 10, 10); font-family: Roboto, \" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><h2 class=\"main-content__item__title\" style=\"margin: 2.8125rem 0px 1.875rem; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 3rem; font-size: 2.125rem;\"><font style=\"vertical-align: inherit;\">Nourriture pour les plus vulnérables</font></h2><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><b>Les activités de Santé plus</b><span style=\"font-weight: 400;\"> </span><b>sur la sécurité alimentaire et les moyens de subsistance visent à aider les personnes touchées par des conflits ou des catastrophes à s\'engager dans des activités visant à améliorer les conditions de vie et à répondre à leurs besoins de consommation alimentaire. </b></font><font style=\"vertical-align: inherit;\"><b>Santé</b><span style=\"font-weight: 400;\"> plus </span><b>a un engagement à long terme, nous permettant de garantir que les personnes, en particulier les plus pauvres et les plus vulnérables, participent à des activités visant à assurer des moyens de subsistance durables et la sécurité alimentaire.</b></font></font></span></p><h2 style=\"margin: 2.8125rem 0px 1.875rem; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 3rem; font-size: 2.125rem;\"><font style=\"vertical-align: inherit;\">Ce que nous faisons</font></h2><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 12pt;\">Sécurité alimentaire : réponse aux catastrophes</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><b>Santé plus</b> met en œuvre des activités de secours en cas d\'urgence humanitaire. </font><font style=\"vertical-align: inherit;\">Une aide alimentaire est fournie pour répondre aux besoins immédiats des personnes touchées. </font><font style=\"vertical-align: inherit;\">Santé plus propose à la fois une aide alimentaire en espèces et des bons d\'alimentation en espèces ou alimentaires que les bénéficiaires peuvent dépenser directement pour acheter des produits alimentaires qui correspondent le mieux à leurs besoins. </font><font style=\"vertical-align: inherit;\">Le choix de l\'approche la plus appropriée dans un contexte spécifique est basé sur une évaluation des besoins humanitaires réels et sur la modalité de transfert de ressources qui fournira l\'aide nécessaire de la manière la plus pertinente, efficace, efficiente, sûre et rapide possible.</font></font></p></div></div><blockquote class=\"main-content__item main-content__item--blockquote blockquote\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px 48px; border-left: none; line-height: 1.6; color: rgb(102, 102, 102); position: relative; font-size: 16px; font-style: italic; font-family: Roboto, \" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility; color: inherit;\"><font style=\"vertical-align: inherit;\">Une aide alimentaire est fournie pour répondre aux besoins immédiats des personnes touchées.</font></p></blockquote><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; color: rgb(10, 10, 10); font-family: Roboto, \" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\">Sécurité alimentaire : reprise</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dans les projets axés sur le relèvement et le développement, ZOA travaille à des systèmes alimentaires durables pour assurer la disponibilité et l\'accès à des aliments nutritifs suffisants. </font><font style=\"vertical-align: inherit;\">Les programmes de ZOA comprennent des activités du côté de la production, l\'amélioration des pratiques de production et de transformation agricoles, la réduction des déchets et des pertes et l\'utilisation efficace des ressources naturelles. </font><font style=\"vertical-align: inherit;\">Grâce à la diversification des cultures, nous visons à augmenter la disponibilité de diverses cultures vivrières pour une alimentation variée et une nutrition améliorée. </font><font style=\"vertical-align: inherit;\">L\'accès à la nourriture est encore amélioré en éliminant les contraintes dans les chaînes de valeur alimentaires et les marchés alimentaires, et en augmentant le pouvoir d\'achat des bénéficiaires grâce à des activités de subsistance.</font></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\"><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Approches axées sur les moyens de subsistance</font></font><br></span><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Les ménages recherchent diverses manières de générer des revenus pour subvenir à leurs besoins. </font><font style=\"vertical-align: inherit;\">Pour réussir dans leurs efforts, les gens ont besoin de ressources, de compétences et de capacités appropriées, ainsi que de conditions extérieures favorables.</font></font></p><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><h2 class=\"main-content__item__title\" style=\"margin: 2.8125rem 0px 1.875rem; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 3rem; font-size: 2.125rem;\"><font style=\"vertical-align: inherit;\">Travailler pour la paix</font></h2><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dans les pays touchés par des conflits, un travail spécifique de consolidation de la paix est nécessaire pour créer les bases d\'un avenir durable et pacifique. </font><font style=\"vertical-align: inherit;\">ZOA vise à transformer les attitudes et les comportements des acteurs du conflit et à s\'attaquer aux causes (locales) du conflit. </font><font style=\"vertical-align: inherit;\">Nous travaillons avec les communautés locales, les organisations locales et le gouvernement local. </font><font style=\"vertical-align: inherit;\">Nous relions nos efforts au niveau du sol à des niveaux supérieurs lorsque cela est nécessaire et approprié. </font><font style=\"vertical-align: inherit;\">Les femmes et les jeunes ont un rôle clé dans la promotion de la paix et de la sécurité et ZOA renforcera donc leur rôle dans les processus de paix et de réconciliation.</font></font></span></p><h2 style=\"margin: 2.8125rem 0px 1.875rem; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 3rem; font-size: 2.125rem;\"><font style=\"vertical-align: inherit;\">Ce que nous faisons</font></h2><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">ZOA se concentre sur quatre domaines de travail de consolidation de la paix.</font></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 12pt;\">1. Renforcer la cohésion sociale et la confiance</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Les conflits violents conduisent à la méfiance entre les personnes, à la destruction du tissu social et aux traumatismes. </font><font style=\"vertical-align: inherit;\">Si les gens ne gèrent pas leurs propres expériences traumatisantes et ne regagnent pas confiance les uns dans les autres, les conflits peuvent facilement recommencer. </font><font style=\"vertical-align: inherit;\">Les gens ont besoin d\'apprendre de nouveaux comportements non violents et les cycles de violence intergénérationnels doivent être brisés. </font><font style=\"vertical-align: inherit;\">Parfois, travailler directement sur la paix et les conflits est trop délicat. </font><font style=\"vertical-align: inherit;\">Dans ces situations, réunir différents groupes sur des sujets moins sensibles d\'intérêt commun est un moyen efficace de briser les stéréotypes et de créer une compréhension commune entre les groupes.</font></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">Les interventions spécifiques de ZOA dans ce domaine de travail sont :</font></p></div></div><figure class=\"main-content__item main-content__item--number-illustration number-illustration\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><ul class=\"number-illustration__list\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; list-style: none; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row;\"><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-verbinding\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Sociothérapie à base communautaire (CBST)</font></span></div></li><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-sport-spel\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Groupes mixtes pour des projets sportifs, de subsistance ou communautaires</font></span></div></li><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-onderwijs\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Education à la paix dans les écoles et autres groupes</font></span></div></li></ul></figure><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">ZOA travaille sur la cohésion sociale et la confiance dans plusieurs pays dont le Libéria, le Congo, l\'Afghanistan, l\'Éthiopie, le Sri Lanka.</font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><a href=\"https://www.zoa-international.com/content/uploads/zoa-leaflet-1-peacebuilding-v6-HR.pdf\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(228, 2, 46); text-decoration-line: underline; line-height: inherit; cursor: pointer;\"><font style=\"vertical-align: inherit;\">Lire la suite. </font></a></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 12pt;\">2. Mécanismes de sécurité communautaire, de prévention et de résolution des conflits</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Dans les pays touchés par des conflits, les conflits violents du passé ont conduit à des divisions dans la société, à des sentiments de haine, de marginalisation et de traumatisme. </font><font style=\"vertical-align: inherit;\">Les systèmes judiciaires formels sont soit absents, soit dysfonctionnels, corrompus ou inaccessibles en raison de la distance et des coûts.</font></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\">Comités locaux de paix :</font></p></div></div><figure class=\"main-content__item main-content__item--number-illustration number-illustration\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><ul class=\"number-illustration__list\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; list-style: none; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row;\"><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-vredesopbouw2\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Sont un mécanisme alternatif axé sur la résolution des conflits locaux</font></span></div></li><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-verbinding\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Mettre l\'accent sur la réconciliation et la cohésion communautaire</font></span></div></li><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-vuur\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Jouer un rôle important dans la prévention des conflits et les systèmes d\'alerte précoce</font></span></div></li></ul></figure><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ZOA soutient la mise en place et le fonctionnement de ces LPC. </font><font style=\"vertical-align: inherit;\">ZOA travaille avec des comités locaux de paix dans plusieurs pays dont le Burundi, le Congo, le Soudan du Sud, le Soudan et l\'Éthiopie. </font><font style=\"vertical-align: inherit;\">ZOA vise également à améliorer l\'efficacité et l\'inclusion des conseils de sécurité locaux. </font><font style=\"vertical-align: inherit;\">Ces conseils sont des mécanismes locaux avec des représentants des acteurs locaux de la sécurité, du gouvernement local et de la société civile, dont le rôle est de protéger les civils et d\'assurer la sécurité.</font></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><a href=\"https://www.zoa-international.com/content/uploads/zoa-leaflet-2-peacebuilding-v5-HR.pdf\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(228, 2, 46); text-decoration-line: underline; line-height: inherit; cursor: pointer;\"><font style=\"vertical-align: inherit;\">Lire la suite. </font></a></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 12pt;\">3. Réduire les conflits liés à la terre et à l\'eau</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ZOA a développé une expertise dans l\'enregistrement foncier en faveur des pauvres et la sécurité foncière dans les contextes post-conflit. </font><font style=\"vertical-align: inherit;\">En particulier, l\'approche communautaire de ZOA et l\'accent mis sur les femmes et les jeunes, qui sont souvent les groupes les plus vulnérables en ce qui concerne les droits fonciers, font de ZOA des compétences uniques pour lutter contre l\'insécurité foncière en tant que cause fondamentale de vulnérabilité et de conflit. </font></font><a href=\"https://www.zoa-international.com/sectors/land-rights/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(228, 2, 46); text-decoration-line: underline; line-height: inherit; cursor: pointer;\"><font style=\"vertical-align: inherit;\">ZOA travaille sur le foncier dans plusieurs pays dont le Congo, l\'Ouganda et le Burundi.</font></a></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ZOA traite les conflits liés à l\'eau sur la base d\'une bonne analyse des conflits liés à l\'eau. </font><font style=\"vertical-align: inherit;\">Nous travaillons sur des systèmes de gestion de l\'eau inclusifs et efficaces, des mécanismes de pénurie d\'eau et de résolution des conflits liés à l\'eau. </font><font style=\"vertical-align: inherit;\">Les pays d\'intervention sont le Congo, le Soudan et l\'Afghanistan.</font></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><a href=\"https://www.zoa-international.com/content/uploads/zoa-leaflet-3-peacebuilding-v5-HR.pdf\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(228, 2, 46); text-decoration-line: underline; line-height: inherit; cursor: pointer;\"><font style=\"vertical-align: inherit;\">Lire la suite. </font></a></p></div></div><blockquote class=\"main-content__item main-content__item--blockquote blockquote\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px 48px; border-left: none; line-height: 1.6; color: rgb(102, 102, 102); position: relative; font-size: 16px; font-style: italic; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility; color: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">« La délimitation des terres m\'a aidé à sécuriser les droits sur l\'une de mes deux parcelles. </font><font style=\"vertical-align: inherit;\">Maintenant, je vais devoir enregistrer le second, pour le protéger contre d\'autres litiges.</font></font></p><footer class=\"blockquote__footer\" style=\"margin-top: 10px; font-size: 1.125rem;\"><font style=\"vertical-align: inherit;\">— Agriculteur, anciennement déplacé, Ouganda</font></footer></blockquote><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 12pt;\">4. Réduire la violence basée sur le genre (VBG)</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">La fréquence des violences basées sur le genre et des conflits connexes, tant à l\'intérieur qu\'à l\'extérieur de la famille, est très élevée dans les pays où ZOA travaille. </font><font style=\"vertical-align: inherit;\">L\'expérience répétée et prolongée de la violence et des conflits en général a des effets sur les familles, provoquant des niveaux élevés de conflits familiaux et de VBG. </font><font style=\"vertical-align: inherit;\">L\'une des causes profondes de la VBG sont les normes sociales concernant le genre, les femmes et les filles : elles sont souvent considérées comme inférieures aux hommes et aux garçons, les épouses sont considérées comme la propriété de leurs maris. </font><font style=\"vertical-align: inherit;\">La « masculinité ratée » ou « frustrée » (hommes et garçons qui ne peuvent pas respecter les normes culturellement déterminées, par exemple sur le mariage, ayant les moyens de subvenir aux besoins de la famille) est souvent considérée comme une cause de conflits en général et de VBG en particulier.</font></font></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">ZOA vise à lutter contre la violence basée sur le genre en remettant en question les normes sociales sur le genre et la VBG et en abordant l\'expérience spécifique des femmes en matière de sécurité et d\'impunité. </font><font style=\"vertical-align: inherit;\">ZOA travaille également à améliorer la réponse aux survivants de VBG, en particulier dans le domaine de l\'intégration socio-économique. </font><font style=\"vertical-align: inherit;\">Nous intervenons dans le domaine de la VBG dans plusieurs pays dont le Libéria, le Congo et le Sri Lanka.</font></font></p></div></div><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"></font></font></p><figure class=\"main-content__item main-content__item--image image\" itemscope=\"\" itemtype=\"http://schema.org/ImageObject\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px; font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><a href=\"https://www.zoa-international.com/content/uploads/contributing-to-a-peaceful-community-1920x958.png\" class=\"main-content__item__image__link image__link\" itemprop=\"contentUrl\" data-sub-html=\"\" style=\"color: rgb(196, 2, 40); line-height: inherit; cursor: pointer; outline: 0px;\"><img width=\"900\" height=\"550\" src=\"https://www.zoa-international.com/content/uploads/contributing-to-a-peaceful-community-900x550.png\" class=\"main-content__item__thumbnail image__thumbnail\" alt=\"contribuer à une communauté pacifique\" itemprop=\"thumbnail\" style=\"border: 0px; max-width: 100%; height: 381.944px; display: inline-block; width: 625px;\"></a></figure></div></div><figure class=\"main-content__item main-content__item--number-illustration number-illustration\" style=\"margin-top: 1.875rem; margin-bottom: 1.875rem; padding: 0px; color: rgb(10, 10, 10); font-family: Roboto, \" open=\"\" sans\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><ul class=\"number-illustration__list\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.6; list-style: none; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row;\"><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-food\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"><font style=\"vertical-align: inherit;\">La production agricole</font></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Nous analysons les meilleurs points d\'entrée pour une utilisation durable des ressources et la résilience des systèmes agricoles aux risques naturels.</font></span></div></li><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-voedselzekerheid\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"><font style=\"vertical-align: inherit;\">Développement de la chaîne de valeur</font></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">Nous dispensons des formations sur la transformation et facilitons l\'accès des bénéficiaires aux marchés.</font></span></div></li><li class=\"number-illustration__item\" style=\"margin: 0px; padding: 0px; font-size: inherit; display: flex; float: left; -webkit-box-flex: 1; flex: 1 1 0%; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; width: 250px;\"><div class=\"number-illustration__icon icon-verbinding\" style=\"margin: 0px 10px 0px 0px; padding: 0px; float: left;\"></div><div class=\"number-illustration__content\" style=\"margin: 0px; padding: 0px 20px 0px 0px; -webkit-box-flex: 1; flex: 1 1 0%;\"><span class=\"number-illustration__title\" style=\"display: block; font-size: 1.25rem; font-weight: 700; color: rgb(228, 2, 46);\"><font style=\"vertical-align: inherit;\">Activités génératrices de revenus</font></span><span class=\"number-illustration__subtitle\" style=\"display: block; font-style: italic; font-size: 1rem;\"><font style=\"vertical-align: inherit;\">A travers le petit entrepreneuriat, la formation professionnelle, la création d\'emplois ou les coopératives.                     </font></span></div></li></ul></figure>															', '						<div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; color: rgb(10, 10, 10); font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><h2 class=\"main-content__item__title\" style=\"margin: 2.8125rem 0px 1.875rem; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 3rem; font-size: 2.125rem;\"><font style=\"vertical-align: inherit;\">Financer notre travail</font></h2><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><span style=\"font-weight: 700; line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Travailler dans des zones de conflit et de catastrophe est complexe. </font><font style=\"vertical-align: inherit;\">En tant que santé plus, nous recherchons toujours la complémentarité, nous apprécions grandement nos donateurs et nos partenaires de mise en œuvre et stratégiques. </font><font style=\"vertical-align: inherit;\">santé plus reçoit des financements via différents canaux : donateurs privés, entreprises, trusts, fondations et donateurs institutionnels. </font><font style=\"vertical-align: inherit;\">Nous disposons d\'une large plate-forme de soutien, nous permettant d\'être flexibles et réactifs aux besoins des personnes touchées par un conflit ou une catastrophe naturelle.</font></font></span></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 14pt;\">circonscription néerlandaise</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700; font-size: 1rem;\">santé plus </span>a une base de supporters stable qui a augmenté au fil des ans pour atteindre environ 37 200 personnes en 2018. Cela montre que nous sommes liés à notre grande circonscription néerlandaise. </font><font style=\"vertical-align: inherit;\">Certains donateurs institutionnels exigent un cofinancement ou un partage des coûts. </font><font style=\"vertical-align: inherit;\">Parce que nous sommes fermement enracinés dans la société néerlandaise, ZOA peut tirer parti du financement privé en tant que cofinancement du financement institutionnel.</font></font></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 14pt;\">Financement institutionnel</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700; font-size: 1rem;\">santé plus </span>entretient des relations très appréciées et à long terme avec le gouvernement néerlandais et d\'autres gouvernements, tels que les gouvernements américain, britannique, australien et suédois, l\'UE, des fondations internationales et plusieurs agences des Nations Unies telles que le HCR, OCHA, le PAM et l\'UNICEF. </font><font style=\"vertical-align: inherit;\">Le financement institutionnel est fourni après des processus de diligence raisonnable, des audits réguliers et le respect des politiques des donateurs. </font><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700;\">santé plus </span>adhère donc à des normes internationales élevées, telles que CHS, Sphere, Child Protection et IITA. </font><font style=\"vertical-align: inherit;\">Nous sommes signataires du Grand Bargain. </font><font style=\"vertical-align: inherit;\">Le financement institutionnel nous permet de fournir plus d\'aide à des groupes plus importants de bénéficiaires et de continuer à grandir en tant qu\'organisation professionnelle.</font></font></p><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 900; color: inherit; text-rendering: optimizelegibility; line-height: 2.125rem; font-size: 1.375rem;\"><span style=\"font-size: 14pt;\">Réseaux</span></h3><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700; font-size: 1rem;\">santé plus </span>coopère aux efforts de collecte de fonds et de partage des connaissances avec des organisations partageant les mêmes idées telles que Christelijk Noodhulp Cluster (Pays-Bas), EU-Cord (Europe) et Integral (dans le monde), voir </font><a href=\"https://www.zoa-international.com/partnerships/\" style=\"color: rgb(228, 2, 46); text-decoration-line: underline; line-height: inherit; cursor: pointer;\"><font style=\"vertical-align: inherit;\">partenariats</font></a><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"> . </font><font style=\"vertical-align: inherit;\">Nous coopérons avec d\'autres ONG dans la mesure du possible, en partageant nos connaissances et notre expérience. </font><font style=\"vertical-align: inherit;\">Nous sommes reconnaissants de voir la croissance, à la fois des revenus et du nombre de donateurs. </font><font style=\"vertical-align: inherit;\">Il nous permet de poursuivre notre travail auprès des victimes de catastrophes naturelles et de conflits dans le monde.</font></font></p></div></div><div class=\"main-content__item main-content__item--text text\" style=\"margin: 1.875rem 0px; padding: 0px; color: rgb(10, 10, 10); font-family: Roboto, \"Open Sans\", Helvetica, Arial, sans-serif;\"><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><span style=\"font-weight: 700; font-size: 1rem;\">santé plus </span>reçoit des financements institutionnels de plusieurs gouvernements et autres organisations, comme le gouvernement néerlandais, les institutions de l\'Union européenne, les institutions gouvernementales des États-Unis, les institutions des Nations Unies et le gouvernement australien :</font></p></div></div>					', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.875; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: Roboto, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700; font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">santé plus&nbsp;</span><span style=\"font-size: 12pt;\"><span style=\"font-weight: 700; line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">travaille avec un personnel engagé et motivé au service de millions de personnes touchées par les conflits et les catastrophes naturelles.&nbsp;</font><font style=\"vertical-align: inherit;\">Notre mission est d\'atteindre les personnes touchées par des situations d\'urgence, en les aidant à reconstruire leurs maisons et leurs moyens de subsistance.&nbsp;</font><font style=\"vertical-align: inherit;\">Nous sommes présents dans plus de 15 pays en Afrique, Amérique du Sud, Moyen-Orient et Asie.&nbsp;</font><font style=\"vertical-align: inherit;\">Rejoignez&nbsp;</font></font></span></span><span style=\"font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 700;\">santé plus</span><span style=\"font-size: 12pt;\"><span style=\"font-weight: 700; line-height: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">, c\'est plus qu\'une étape de plus dans votre carrière !</font></font></span></span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.875; text-rendering: optimizelegibility; color: rgb(10, 10, 10); font-family: Roboto, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Notre personnel national et international travaille dans des environnements difficiles et se voit confier de nombreuses responsabilités et opportunités de développement personnel et professionnel.&nbsp;</font><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 700;\">santé plus&nbsp;</span>propose une large gamme d\'avantages pour répondre aux besoins spécifiques de nos collaborateurs et de leurs familles.&nbsp;</font><font style=\"vertical-align: inherit;\">Contactez-nous pour découvrir les différentes possibilités d\'utiliser vos talents et vos compétences professionnelles au service des personnes touchées par des situations d\'urgence.</font></font></p>', '<h2 class=\"main-content__item__title\" style=\"margin: 2.8125rem 0px 1.875rem; padding: 0px; font-family: Roboto, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-weight: 900; color: rgb(10, 10, 10); text-rendering: optimizelegibility; line-height: 3rem; font-size: 2.125rem;\"><font style=\"vertical-align: inherit;\">Partenariats</font></h2><div class=\"main-content__item__body\" style=\"margin: 0px; padding: 0px; color: rgb(10, 10, 10); font-family: Roboto, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;\"><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: inherit; line-height: 1.875; text-rendering: optimizelegibility;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Travailler dans des zones de conflit et de catastrophe est complexe.&nbsp;</font><font style=\"vertical-align: inherit;\">La coopération est donc cruciale.&nbsp;</font><font style=\"vertical-align: inherit;\">En tant que&nbsp;<span style=\"font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 700;\">santé plus</span>, nous ne pouvons et ne voulons pas atteindre nos objectifs par nous-mêmes.&nbsp;</font><font style=\"vertical-align: inherit;\">Nous apprécions grandement nos donateurs, les partenaires d\'exécution et stratégiques.&nbsp;</font><font style=\"vertical-align: inherit;\">Nous considérons les partenariats et la collaboration comme des éléments essentiels de notre travail, sur le terrain ainsi qu\'aux Pays-Bas et dans le monde.&nbsp;</font><font style=\"vertical-align: inherit;\">Nous coopérons avec d\'autres ONG dans la mesure du possible, en partageant des connaissances et des expériences sur la mise en œuvre et la sécurité, en faisant du lobbying auprès des décideurs, en nous complétant dans la mise en œuvre des programmes, en sensibilisant le public et en sollicitant des fonds.</font></font></p></div>', '2021-06-29 13:52:39');

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
(27, 7, '2021-06-30 23:32:13');

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
(7, 'Rapport sur la descente à rutchuru', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>				\r\n			', '2021', '2021-06-30 21:52:21', '1966984829.pdf', '942234861');

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
(1, 'Santé plus rdc', '392101120.png', '+243817883541', '+243970524665', 'RDC Nord-kivu goma quartier  1 km temoin', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'info.etsyetu@gmail.com', 'Notre Politique de protection des données personnelles décrit la manière dont #devtech traite les données à caractère personnel des visiteurs et des utilisateurs (ci- après les « Utilisateurs ») lors de leur navigation sur notre site. La Politique de protection des données personnelles fait partie intégrante des Conditions Générales d\'Utilisation du Site.\r\n#devtech accorde en permanence une attention aux données de nos Utilisateurs. Nous pouvons ainsi être amenés à modifier, compléter ou mettre à jour périodiquement la Politique de protection des données personnelles. Nous pourrons aussi apporter des modifications nécessaires afin de respecter les changements de la législation et règlementation en vigueur. Dans la mesure du possible, nous vous notifierons tout changement important. Nous vous encourageons toutefois à consulter régulièrement la dernière version en vigueur, accessible sur notre Site.\r\n', 'Conditions Générales d\'Utilisation\r\nDéfinitions\r\nLes Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après :\r\n?« Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ;\r\n?« Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ;\r\n?« Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ;\r\n?« Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ;\r\n?« Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ;\r\n?« Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ;\r\n?« Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé.\r\nLes présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services.\r\nEn naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles.\r\nEn créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet.\r\nNous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme.\r\nArticle 1. Inscription au service\r\n1.1 Conditions d\'inscription à la Plateforme\r\nCertaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles.\r\nVous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle).\r\nAvant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale.\r\nNotre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins.\r\n1.2 Création de compte\r\nVous pourrez créer un compte des deux manières suivantes :\r\n?Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes. ', 'REDONNER L\'ESPOIR aux populations pauvres et autres vulnérables qui souffrent à cause de l\'injustice sociale, des conflits armés ou autre désastre naturelle.', 'Nous soutenons les personnes qui souffrent à cause de conflits armés ou de catastrophes naturelles, en les aidant à reconstruire leurs maisons et leurs moyens de subsistance et à vivre ensemble en paix dans des communautés stables. Nous croyons au message biblique de réconciliation et de restauration pour un monde brisé. Et nous pensons que nous avons une responsabilité spécifique pour redonner espoir aux personnes, en particulier celles qui sont en situation de vulnérabilité. Inspirés par notre foi, nous tendons la main aux personnes dans le besoin, sans distinction de race, d\'origine ethnique, de religion ou de sexe.', 'Notre mandat peut se résumer en ces deux termes : secours et relèvement. Le contexte dans lequel nous évoluons est souvent fragile. Nous nous efforçons d\'être dans les domaines où notre valeur ajoutée est la plus grande et cherchons à atteindre les plus vulnérables. Dans le plan stratégique « Every Life Matters »,  vous trouverez nos principaux domaines d\'intervention pour les années à venir.', 'Nous sommes là pour les personnes qui ont tout perdu à cause des guerres ou des catastrophes naturelles. Ensemble, nous pouvons leur venir en aide dans les situations d\'urgence, en leur fournissant de la nourriture, des vêtements et un accès à l\'eau potable. Nous restons fidèles aux communautés alors qu\'elles se rétablissent – ??en leur offrant de nouvelles opportunités de s\'aider à nouveau.');

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
(7, 'sumaili shabani ', 'roger patrona', 'sumailiroger681@gmail.com', '1959189535.jpg', '+243817883541', 'tmk goma avenue mushanganya n°59', '                  	                  	<b>                                    Développeur</b> et <b>entrepreneur</b> en temps plein!                                                                        ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', 1),
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
(44, 51, '169.159.215.21', '2021-06-30 22:18:37'),
(45, 74, '169.159.215.21', '2021-06-30 22:19:15'),
(46, 82, '169.159.215.21', '2021-06-30 22:19:34'),
(47, 61, '169.159.215.21', '2021-06-30 22:19:48'),
(48, 75, '169.159.215.21', '2021-06-30 22:20:10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `idrapport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
