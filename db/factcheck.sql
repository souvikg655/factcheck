-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2019 at 09:12 AM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `value` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `value`, `status`, `created`) VALUES
(1, '700', '1', '2019-09-22 18:11:08'),
(2, '700 - 800', '1', '2019-09-22 15:45:20'),
(3, '> 500', '1', '2019-09-22 12:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `realtor_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `beside_road` enum('YES','NO') NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street_no` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `availability` enum('Available','Unavaliable') NOT NULL DEFAULT 'Available',
  `sale_lease` enum('Sale','Lease') NOT NULL DEFAULT 'Sale',
  `street_abbr` enum('Abby','Acre') NOT NULL DEFAULT 'Abby',
  `province` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `municipality_name` varchar(255) NOT NULL,
  `municipality_paper` varchar(255) NOT NULL,
  `status` enum('PENDING','APPROVED','REJECTED') NOT NULL DEFAULT 'PENDING',
  `reject_status` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `realtor_id`, `title`, `bedroom`, `bathroom`, `type`, `age`, `area`, `beside_road`, `country`, `city`, `street_no`, `street_name`, `availability`, `sale_lease`, `street_abbr`, `province`, `postal`, `house_no`, `municipality_name`, `municipality_paper`, `status`, `reject_status`, `created`) VALUES
(21, 69, 'Test Home 1', '3', '1', 'Cottage', '5', '500', 'NO', 'canada', 'Red Deer', '123', 'Test Street', 'Available', 'Lease', 'Acre', 'Alberta', 'A1A A1A', '123', 'Test Municipality', 'dummy12.pdf', 'APPROVED', '', '2019-10-11 18:18:41'),
(22, 69, 'Test Home2', '2', '1', 'Cottage', '10', '200', 'YES', 'canada', 'Airdrie', '111', 'Test Street', 'Available', 'Sale', 'Abby', 'Alberta', 'A1A A9Z', '111', 'Test Municipality', 'dummy13.pdf', 'APPROVED', '', '2019-10-11 18:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `id` int(11) NOT NULL,
  `realtor_id` int(11) NOT NULL,
  `home_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_province`
--

CREATE TABLE `mst_province` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_province`
--

INSERT INTO `mst_province` (`id`, `province`, `city`) VALUES
(1, 'Alberta', 'Airdrie'),
(2, 'Alberta', 'Brooks'),
(3, 'Alberta', 'Calgary'),
(4, 'Alberta', 'Camrose'),
(5, 'Alberta', 'Chestermere'),
(6, 'Alberta', 'Cold Lake'),
(7, 'Alberta', 'Edmonton'),
(8, 'Alberta', 'Fort Saskatchewan'),
(9, 'Alberta', 'Grande Prairie'),
(10, 'Alberta', 'Lacombe'),
(11, 'Alberta', 'Leduc'),
(12, 'Alberta', 'Lethbridge'),
(13, 'Alberta', 'Lloydminster (part)'),
(14, 'Alberta', 'Medicine Hat'),
(15, 'Alberta', 'Red Deer'),
(16, 'Alberta', 'Spruce Grove'),
(17, 'Alberta', 'St. Albert'),
(18, 'Alberta', 'Wetaskiwin'),
(19, 'British Columbia', 'Abbotsford'),
(20, 'British Columbia', 'Armstrong'),
(21, 'British Columbia', 'Burnaby'),
(22, 'British Columbia', 'Campbell River'),
(23, 'British Columbia', 'Castlegar'),
(24, 'British Columbia', 'Chilliwack'),
(25, 'British Columbia', 'Colwood'),
(26, 'British Columbia', 'Coquitlam'),
(27, 'British Columbia', 'Courtenay'),
(28, 'British Columbia', 'Cranbrook'),
(29, 'British Columbia', 'Dawson Creek'),
(30, 'British Columbia', 'Duncan'),
(31, 'British Columbia', 'Enderby'),
(32, 'British Columbia', 'Fernie'),
(33, 'British Columbia', 'Fort St. John'),
(34, 'British Columbia', 'Grand Forks'),
(35, 'British Columbia', 'Greenwood'),
(36, 'British Columbia', 'Kamloops'),
(37, 'British Columbia', 'Kelowna'),
(38, 'British Columbia', 'Kimberley'),
(39, 'British Columbia', 'Langford'),
(40, 'British Columbia', 'Langley'),
(41, 'British Columbia', 'Maple Ridge'),
(42, 'British Columbia', 'Merritt'),
(43, 'British Columbia', 'Nanaimo'),
(44, 'British Columbia', 'Nelson'),
(45, 'British Columbia', 'New Westminster'),
(46, 'British Columbia', 'North Vancouver'),
(47, 'British Columbia', 'Parksville'),
(48, 'British Columbia', 'Penticton'),
(49, 'British Columbia', 'Pitt Meadows'),
(50, 'British Columbia', 'Port Alberni'),
(51, 'British Columbia', 'Port Coquitlam'),
(52, 'British Columbia', 'Port Moody'),
(53, 'British Columbia', 'Powell River'),
(54, 'British Columbia', 'Prince George'),
(55, 'British Columbia', 'Prince Rupert'),
(56, 'British Columbia', 'Quesnel'),
(57, 'British Columbia', 'Revelstoke'),
(58, 'British Columbia', 'Richmond'),
(59, 'British Columbia', 'Rossland'),
(60, 'British Columbia', 'Salmon Arm'),
(61, 'British Columbia', 'Surrey'),
(62, 'British Columbia', 'Terrace'),
(63, 'British Columbia', 'Trail'),
(64, 'British Columbia', 'Vancouver'),
(65, 'British Columbia', 'Vernon'),
(66, 'British Columbia', 'Victoria'),
(67, 'British Columbia', 'White Rock'),
(68, 'British Columbia', 'Williams Lake'),
(69, 'Manitoba', 'Brandon'),
(70, 'Manitoba', 'Dauphin'),
(71, 'Manitoba', 'Flin Flon (part)'),
(72, 'Manitoba', 'Morden'),
(73, 'Manitoba', 'Portage la Prairie'),
(74, 'Manitoba', 'Selkirk'),
(75, 'Manitoba', 'Steinbach'),
(76, 'Manitoba', 'Thompson'),
(77, 'Manitoba', 'Winkler'),
(78, 'Manitoba', 'Winnipeg'),
(79, 'New Brunswick', 'Bathurst'),
(80, 'New Brunswick', 'Campbellton'),
(81, 'New Brunswick', 'Dieppe'),
(82, 'New Brunswick', 'Edmundston'),
(83, 'New Brunswick', 'Fredericton'),
(84, 'New Brunswick', 'Miramichi'),
(85, 'New Brunswick', 'Moncton'),
(86, 'New Brunswick', 'Saint John'),
(87, 'Newfoundland and Labrador', 'Corner Brook'),
(88, 'Newfoundland and Labrador', 'Mount Pearl'),
(89, 'Newfoundland and Labrador', 'St. John\'s'),
(90, 'Northwest Territories', 'Yellowknife'),
(91, 'Nunavut', 'Iqaluit'),
(92, 'Ontario', 'Barrie'),
(93, 'Ontario', 'Belleville'),
(94, 'Ontario', 'Brampton'),
(95, 'Ontario', 'Brant'),
(96, 'Ontario', 'Brantford'),
(97, 'Ontario', 'Brockville'),
(98, 'Ontario', 'Burlington'),
(99, 'Ontario', 'Cambridge'),
(100, 'Ontario', 'Clarence-Rockland'),
(101, 'Ontario', 'Cornwall'),
(102, 'Ontario', 'Dryden'),
(103, 'Ontario', 'Elliot Lake'),
(104, 'Ontario', 'Greater Sudbury'),
(105, 'Ontario', 'Guelph'),
(106, 'Ontario', 'Haldimand County'),
(107, 'Ontario', 'Hamilton'),
(108, 'Ontario', 'Kawartha Lakes'),
(109, 'Ontario', 'Kenora'),
(110, 'Ontario', 'Kingston'),
(111, 'Ontario', 'Kitchener'),
(112, 'Ontario', 'London'),
(113, 'Ontario', 'Markham'),
(114, 'Ontario', 'Mississauga'),
(115, 'Ontario', 'Niagara Falls'),
(116, 'Ontario', 'Norfolk County'),
(117, 'Ontario', 'North Bay'),
(118, 'Ontario', 'Orillia'),
(119, 'Ontario', 'Oshawa'),
(120, 'Ontario', 'Ottawa'),
(121, 'Ontario', 'Owen Sound'),
(122, 'Ontario', 'Pembroke'),
(123, 'Ontario', 'Peterborough'),
(124, 'Ontario', 'Pickering'),
(125, 'Ontario', 'Port Colborne'),
(126, 'Ontario', 'Prince Edward County'),
(127, 'Ontario', 'Quinte West'),
(128, 'Ontario', 'Sarnia'),
(129, 'Ontario', 'Sault Ste. Marie'),
(130, 'Ontario', 'St. Catharines'),
(131, 'Ontario', 'St. Thomas'),
(132, 'Ontario', 'Stratford'),
(133, 'Ontario', 'Temiskaming Shores'),
(134, 'Ontario', 'Thorold'),
(135, 'Ontario', 'Thunder Bay'),
(136, 'Ontario', 'Timmins'),
(137, 'Ontario', 'Toronto'),
(138, 'Ontario', 'Vaughan'),
(139, 'Ontario', 'Waterloo'),
(140, 'Ontario', 'Welland'),
(141, 'Ontario', 'Windsor'),
(142, 'Ontario', 'Woodstock'),
(143, 'Prince Edward Island', 'Charlottetown'),
(144, 'Prince Edward Island', 'Summerside'),
(145, 'Quebec', 'Acton Vale'),
(146, 'Quebec', 'Alma'),
(147, 'Quebec', 'Amos'),
(148, 'Quebec', 'Amqui'),
(149, 'Quebec', 'Asbestos'),
(150, 'Quebec', 'Baie-Comeau'),
(151, 'Quebec', 'Baie-D\'Urfé'),
(152, 'Quebec', 'Baie-Saint-Paul'),
(153, 'Quebec', 'Barkmere'),
(154, 'Quebec', 'Beaconsfield'),
(155, 'Quebec', 'Beauceville'),
(156, 'Quebec', 'Beauharnois'),
(157, 'Quebec', 'Beaupré'),
(158, 'Quebec', 'Bécancour'),
(159, 'Quebec', 'Bedford'),
(160, 'Quebec', 'Belleterre'),
(161, 'Quebec', 'Beloeil'),
(162, 'Quebec', 'Berthierville'),
(163, 'Quebec', 'Blainville'),
(164, 'Quebec', 'Boisbriand'),
(165, 'Quebec', 'Bois-des-Filion'),
(166, 'Quebec', 'Bonaventure'),
(167, 'Quebec', 'Boucherville'),
(168, 'Quebec', 'Brome Lake'),
(169, 'Quebec', 'Bromont'),
(170, 'Quebec', 'Brossard'),
(171, 'Quebec', 'Brownsburg-Chatham'),
(172, 'Quebec', 'Candiac'),
(173, 'Quebec', 'Cap-Chat'),
(174, 'Quebec', 'Cap-Santé'),
(175, 'Quebec', 'Carignan'),
(176, 'Quebec', 'Carleton-sur-Mer'),
(177, 'Quebec', 'Causapscal'),
(178, 'Quebec', 'Chambly'),
(179, 'Quebec', 'Chandler'),
(180, 'Quebec', 'Chapais'),
(181, 'Quebec', 'Charlemagne'),
(182, 'Quebec', 'Châteauguay'),
(183, 'Quebec', 'Château-Richer'),
(184, 'Quebec', 'Chibougamau'),
(185, 'Quebec', 'Clermont'),
(186, 'Quebec', 'Coaticook'),
(187, 'Quebec', 'Contrecoeur'),
(188, 'Quebec', 'Cookshire-Eaton'),
(189, 'Quebec', 'Côte Saint-Luc'),
(190, 'Quebec', 'Coteau-du-Lac'),
(191, 'Quebec', 'Cowansville'),
(192, 'Quebec', 'Danville'),
(193, 'Quebec', 'Daveluyville'),
(194, 'Quebec', 'Dégelis'),
(195, 'Quebec', 'Delson'),
(196, 'Quebec', 'Desbiens'),
(197, 'Quebec', 'Deux-Montagnes'),
(198, 'Quebec', 'Disraeli'),
(199, 'Quebec', 'Dolbeau-Mistassini'),
(200, 'Quebec', 'Dollard-des-Ormeaux'),
(201, 'Quebec', 'Donnacona'),
(202, 'Quebec', 'Dorval'),
(203, 'Quebec', 'Drummondville'),
(204, 'Quebec', 'Dunham'),
(205, 'Quebec', 'Duparquet'),
(206, 'Quebec', 'East Angus'),
(207, 'Quebec', 'Estérel'),
(208, 'Quebec', 'Farnham'),
(209, 'Quebec', 'Fermont'),
(210, 'Quebec', 'Forestville'),
(211, 'Quebec', 'Fossambault-sur-le-Lac'),
(212, 'Quebec', 'Gaspé'),
(213, 'Quebec', 'Gatineau'),
(214, 'Quebec', 'Gracefield'),
(215, 'Quebec', 'Granby'),
(216, 'Quebec', 'Grande-Rivière'),
(217, 'Quebec', 'Hampstead'),
(218, 'Quebec', 'Hudson'),
(219, 'Quebec', 'Huntingdon'),
(220, 'Quebec', 'Joliette'),
(221, 'Quebec', 'Kingsey Falls'),
(222, 'Quebec', 'Kirkland'),
(223, 'Quebec', 'La Malbaie'),
(224, 'Quebec', 'La Pocatière'),
(225, 'Quebec', 'La Prairie'),
(226, 'Quebec', 'La Sarre'),
(227, 'Quebec', 'La Tuque'),
(228, 'Quebec', 'Lac-Delage'),
(229, 'Quebec', 'Lachute'),
(230, 'Quebec', 'Lac-Mégantic'),
(231, 'Quebec', 'Lac-Saint-Joseph'),
(232, 'Quebec', 'Lac-Sergent'),
(233, 'Quebec', 'L\'Ancienne-Lorette'),
(234, 'Quebec', 'L\'Assomption'),
(235, 'Quebec', 'Laval'),
(236, 'Quebec', 'Lavaltrie'),
(237, 'Quebec', 'Lebel-sur-Quévillon'),
(238, 'Quebec', 'L\'Épiphanie'),
(239, 'Quebec', 'Léry'),
(240, 'Quebec', 'Lévis'),
(241, 'Quebec', 'L\'Île-Cadieux'),
(242, 'Quebec', 'L\'Île-Dorval'),
(243, 'Quebec', 'L\'Île-Perrot'),
(244, 'Quebec', 'Longueuil'),
(245, 'Quebec', 'Lorraine'),
(246, 'Quebec', 'Louiseville'),
(247, 'Quebec', 'Macamic'),
(248, 'Quebec', 'Magog'),
(249, 'Quebec', 'Malartic'),
(250, 'Quebec', 'Maniwaki'),
(251, 'Quebec', 'Marieville'),
(252, 'Quebec', 'Mascouche'),
(253, 'Quebec', 'Matagami'),
(254, 'Quebec', 'Matane'),
(255, 'Quebec', 'Mercier'),
(256, 'Quebec', 'Métabetchouan–Lac-à-la-Croix'),
(257, 'Quebec', 'Métis-sur-Mer'),
(258, 'Quebec', 'Mirabel'),
(259, 'Quebec', 'Mont-Joli'),
(260, 'Quebec', 'Mont-Laurier'),
(261, 'Quebec', 'Montmagny'),
(262, 'Quebec', 'Montreal'),
(263, 'Quebec', 'Montreal West'),
(264, 'Quebec', 'Montréal-Est'),
(265, 'Quebec', 'Mont-Saint-Hilaire'),
(266, 'Quebec', 'Mont-Tremblant'),
(267, 'Quebec', 'Mount Royal'),
(268, 'Quebec', 'Murdochville'),
(269, 'Quebec', 'Neuville'),
(270, 'Quebec', 'New Richmond'),
(271, 'Quebec', 'Nicolet'),
(272, 'Quebec', 'Normandin'),
(273, 'Quebec', 'Notre-Dame-de-l\'Île-Perrot'),
(274, 'Quebec', 'Notre-Dame-des-Prairies'),
(275, 'Quebec', 'Otterburn Park'),
(276, 'Quebec', 'Paspébiac'),
(277, 'Quebec', 'Percé'),
(278, 'Quebec', 'Pincourt'),
(279, 'Quebec', 'Plessisville'),
(280, 'Quebec', 'Pohénégamook'),
(281, 'Quebec', 'Pointe-Claire'),
(282, 'Quebec', 'Pont-Rouge'),
(283, 'Quebec', 'Port-Cartier'),
(284, 'Quebec', 'Portneuf'),
(285, 'Quebec', 'Prévost'),
(286, 'Quebec', 'Princeville'),
(287, 'Quebec', 'Québec'),
(288, 'Quebec', 'Repentigny'),
(289, 'Quebec', 'Richelieu'),
(290, 'Quebec', 'Richmond'),
(291, 'Quebec', 'Rimouski'),
(292, 'Quebec', 'Rivière-du-Loup'),
(293, 'Quebec', 'Rivière-Rouge'),
(294, 'Quebec', 'Roberval'),
(295, 'Quebec', 'Rosemère'),
(296, 'Quebec', 'Rouyn-Noranda'),
(297, 'Quebec', 'Saguenay'),
(298, 'Quebec', 'Saint-Augustin-de-Desmaures'),
(299, 'Quebec', 'Saint-Basile'),
(300, 'Quebec', 'Saint-Basile-le-Grand'),
(301, 'Quebec', 'Saint-Bruno-de-Montarville'),
(302, 'Quebec', 'Saint-Césaire'),
(303, 'Quebec', 'Saint-Colomban'),
(304, 'Quebec', 'Saint-Constant'),
(305, 'Quebec', 'Sainte-Adèle'),
(306, 'Quebec', 'Sainte-Agathe-des-Monts'),
(307, 'Quebec', 'Sainte-Anne-de-Beaupré'),
(308, 'Quebec', 'Sainte-Anne-de-Bellevue'),
(309, 'Quebec', 'Sainte-Anne-des-Monts'),
(310, 'Quebec', 'Sainte-Anne-des-Plaines'),
(311, 'Quebec', 'Sainte-Catherine'),
(312, 'Quebec', 'Sainte-Catherine-de-la-Jacques-Cartier'),
(313, 'Quebec', 'Sainte-Julie'),
(314, 'Quebec', 'Sainte-Marguerite-du-Lac-Masson'),
(315, 'Quebec', 'Sainte-Marie'),
(316, 'Quebec', 'Sainte-Marthe-sur-le-Lac'),
(317, 'Quebec', 'Sainte-Thérèse'),
(318, 'Quebec', 'Saint-Eustache'),
(319, 'Quebec', 'Saint-Félicien'),
(320, 'Quebec', 'Saint-Gabriel'),
(321, 'Quebec', 'Saint-Georges'),
(322, 'Quebec', 'Saint-Hyacinthe'),
(323, 'Quebec', 'Saint-Jean-sur-Richelieu'),
(324, 'Quebec', 'Saint-Jérôme'),
(325, 'Quebec', 'Saint-Joseph-de-Beauce'),
(326, 'Quebec', 'Saint-Joseph-de-Sorel'),
(327, 'Quebec', 'Saint-Lambert'),
(328, 'Quebec', 'Saint-Lazare'),
(329, 'Quebec', 'Saint-Lin-Laurentides'),
(330, 'Quebec', 'Saint-Marc-des-Carrières'),
(331, 'Quebec', 'Saint-Ours'),
(332, 'Quebec', 'Saint-Pamphile'),
(333, 'Quebec', 'Saint-Pascal'),
(334, 'Quebec', 'Saint-Pie'),
(335, 'Quebec', 'Saint-Raymond'),
(336, 'Quebec', 'Saint-Rémi'),
(337, 'Quebec', 'Saint-Sauveur'),
(338, 'Quebec', 'Saint-Tite'),
(339, 'Quebec', 'Salaberry-de-Valleyfield'),
(340, 'Quebec', 'Schefferville'),
(341, 'Quebec', 'Scotstown'),
(342, 'Quebec', 'Senneterre'),
(343, 'Quebec', 'Sept-Îles'),
(344, 'Quebec', 'Shawinigan'),
(345, 'Quebec', 'Sherbrooke'),
(346, 'Quebec', 'Sorel-Tracy'),
(347, 'Quebec', 'Stanstead'),
(348, 'Quebec', 'Sutton'),
(349, 'Quebec', 'Témiscaming'),
(350, 'Quebec', 'Témiscouata-sur-le-Lac'),
(351, 'Quebec', 'Terrebonne'),
(352, 'Quebec', 'Thetford Mines'),
(353, 'Quebec', 'Thurso'),
(354, 'Quebec', 'Trois-Pistoles'),
(355, 'Quebec', 'Trois-Rivières'),
(356, 'Quebec', 'Valcourt'),
(357, 'Quebec', 'Val-d\'Or'),
(358, 'Quebec', 'Varennes'),
(359, 'Quebec', 'Vaudreuil-Dorion'),
(360, 'Quebec', 'Victoriaville'),
(361, 'Quebec', 'Ville-Marie'),
(362, 'Quebec', 'Warwick'),
(363, 'Quebec', 'Waterloo'),
(364, 'Quebec', 'Waterville'),
(365, 'Quebec', 'Westmount'),
(366, 'Quebec', 'Windsor'),
(367, 'Saskatchewan', 'Estevan'),
(368, 'Saskatchewan', 'Flin Flon (part)'),
(369, 'Saskatchewan', 'Humboldt'),
(370, 'Saskatchewan', 'Lloydminster (part)'),
(371, 'Saskatchewan', 'Martensville'),
(372, 'Saskatchewan', 'Meadow Lake'),
(373, 'Saskatchewan', 'Melfort'),
(374, 'Saskatchewan', 'Melville'),
(375, 'Saskatchewan', 'Moose Jaw'),
(376, 'Saskatchewan', 'North Battleford'),
(377, 'Saskatchewan', 'Prince Albert'),
(378, 'Saskatchewan', 'Regina'),
(379, 'Saskatchewan', 'Saskatoon'),
(380, 'Saskatchewan', 'Swift Current'),
(381, 'Saskatchewan', 'Warman'),
(382, 'Saskatchewan', 'Weyburn'),
(383, 'Saskatchewan', 'Yorkton'),
(385, 'Nova Scotia', 'Baddeck'),
(386, 'Nova Scotia', 'Digby'),
(387, 'Nova Scotia', 'Glace Bay'),
(388, 'Nova Scotia', 'Halifax'),
(389, 'Nova Scotia', 'Liverpool'),
(390, 'Nova Scotia', 'Louisbourg'),
(391, 'Nova Scotia', 'Lunenburg'),
(392, 'Nova Scotia', 'Pictou'),
(393, 'Nova Scotia', 'Port Hawkesbury'),
(394, 'Nova Scotia', 'Springhill'),
(395, 'Nova Scotia', 'Sydney'),
(396, 'Nova Scotia', 'Yarmouth'),
(397, 'Yukon', 'Dawson\n\n'),
(398, 'Yukon', 'Watson Lake'),
(399, 'Yukon', 'Whitehorse');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `status`, `created`) VALUES
(1, 'Cottage', '1', '2019-09-22 19:18:56'),
(2, 'Detached', '1', '2019-09-22 19:19:19'),
(3, 'Det w/Com Elements', '1', '2019-09-22 19:19:47'),
(4, 'Duplex', '1', '2019-09-22 19:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approval` enum('PENDING','REGECTED','ACCEPTED') NOT NULL DEFAULT 'PENDING',
  `status` enum('1','0') NOT NULL,
  `image` varchar(255) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `reject_status` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `company`, `password`, `approval`, `status`, `image`, `points`, `reject_status`, `created`) VALUES
(69, 'Test', 'test@gmail.com', 'Test Company', 'e10adc3949ba59abbe56e057f20f883e', 'ACCEPTED', '1', 'test.png', 0, '', '2019-09-22 19:25:22'),
(70, 'Souvik', 'souvikg655@gmail.com', 'Test Company', 'e10adc3949ba59abbe56e057f20f883e', 'ACCEPTED', '1', 'test6.png', 0, '', '2019-09-01 06:40:41'),
(71, 'yaj', 'yaju.rcc@gmail.com', 'Test Company', 'e10adc3949ba59abbe56e057f20f883e', 'PENDING', '1', 'bca2.jpg', 0, '', '2019-08-29 04:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `query` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `name`, `email`, `phone`, `query`, `status`, `created`) VALUES
(1, 'souvik', 'souvikg655@gmail.com', '8158031244', 'test query', '1', '2019-09-09 04:26:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_province`
--
ALTER TABLE `mst_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_province`
--
ALTER TABLE `mst_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
