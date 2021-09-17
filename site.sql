-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 sep. 2021 à 15:33
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `depliant`
--

CREATE TABLE `depliant` (
  `iddep` int(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `image1` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depliant`
--

INSERT INTO `depliant` (`iddep`, `nom`, `image1`) VALUES
(18, '', 'http://localhost/site/photoutiliser/depliant02.png'),
(19, '', 'http://localhost/site/photoutiliser/depliant01.png'),
(20, '', 'http://localhost/site/photoutiliser/depliant03.png');

-- --------------------------------------------------------

--
-- Structure de la table `idee`
--

CREATE TABLE `idee` (
  `id` int(6) NOT NULL,
  `idee` varchar(200) NOT NULL,
  `region` varchar(100) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `image4` varchar(500) NOT NULL,
  `descr` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `idee`
--

INSERT INTO `idee` (`id`, `idee`, `region`, `image1`, `image2`, `image3`, `image4`, `descr`) VALUES
(14, 'sejours remantiques', 'Kauai, Hawaï', 'http://localhost/site/photoutiliser/ideevoyagesrkauai.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrkauai2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrkauai3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrkauai4.jpg', 'L’île de Kauai se situe à Hawaï et peut offrir une variété d’hébergements. En effet, il existe bon nombre d’hôtels de luxe sur la côte Est et la côte nord. En outre, ses plages ont une forme de croissant. Ce lieu naturel a aussi une beauté à couper le souffle.\r\n\r\nL’île de Kauai est tout simplement inégalable en termes de romance. D’ailleurs, elle possède les activités nécessaires pour des vacances en amoureux réussies.'),
(15, 'sejours remantiques', 'L’île de Sainte-Lucie (Caraïbes)', 'http://localhost/site/photoutiliser/ideevoyagescaraibe.jpg', 'http://localhost/site/photoutiliser/ideevoyagescaraibe2..jpg', 'http://localhost/site/photoutiliser/ideevoyagescaraibe3.jpg', 'http://localhost/site/photoutiliser/ideevoyagescaraibe4.jpg', 'La plupart des amoureux connaissent la grandeur de l’île de Sainte-Lucie. En effet, cette terre située au milieu de l’océan estprisée par  les couples pour ses reliefs volcaniques et ses paysages de carte postale. De plus, elle est dotée de cascades, de forêts et de plages magnifiques et les maisons s’y trouvant sont également grandioses'),
(16, 'sejours remantiques', 'Harbour Island (Bahamas)', 'http://localhost/site/photoutiliser/ideevoyagesrbahamas.jpeg', 'http://localhost/site/photoutiliser/ideevoyagesrbahamas2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrbahamas3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrbahamas4.jpg', 'Harbour Island est également connue sous l’appellation de Briland. Il s’agit d’une île des Bahamas, qui se trouve en Eleuthera (au nord). Cet endroit ne fait  qu’environ 800 mètres de largeur et 5 km de long. Mais les couples et les amoureux qui y passeront leurs vacances ne vont pas regretter. En effet, passer un séjour dans un lieu paradisiaque et romantique comme Harbour Island ne procure que du plaisir et du bonheur. En outre, elle a une forme de lune ocre et est généralement entourée d’eaux turquoise. C’est également sur cette île  que se trouve  la plage de sable rose des Bahamas.'),
(17, 'sejours remantiques', 'L’île Madère (au Portugal)', 'http://localhost/site/photoutiliser/ideevoyagesrmadere.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrmadere2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrmadere3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrmadere4.jfif', 'Une beauté brute, une végétation luxuriante et des couleurs intenses, l’île Madère est l’endroit parfait pour les amoureux qui veulent passer leurs vacances dans un lieu romantique et tranquille. C’est également un paradis pour les gens qui aiment les randonnées. De plus, cette île peut offrir une superbe vue sur l’océan.'),
(18, 'sejours remantiques', 'L’île Boracay (Philippines)', 'http://localhost/site/photoutiliser/ideevoyagesrboracay.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrboracay2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrboracay3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrboracay4.jpg', 'Boracay est une petite île située aux Philippines, notamment à 300 et quelques kilomètres de Manille. Elle est considérée comme le plus beau refuge au monde. En effet, il s’agit d’un prototype d’une île tropicale aux palmiers agités par le vent et aux plages de sable blanc où toutes personnes peuvent boire du lait de coco dans la tranquillité'),
(19, 'sejours remantiques', 'Sicile (italie)', 'http://localhost/site/photoutiliser/ideevoyagesrSicile.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrSicile1.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrSicile3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrSicile4.jpg', 'La Sicile (Sicilia /siˈtʃiːlja/ en italien et en sicilien) est la plus grande île méditerranéenne et l\'une des 20 régions d\'Italie. Depuis 1946, les îles éoliennes, Égades, Pélages, Ustica et Pantelleria sont réunies à cette région qui est l\'une des cinq régions autonomes italiennes dénommée officiellement Regione Siciliana dont elle compose 98 % du territoire.'),
(20, 'voyage entre amis', 'Club Marmara Les Jardins d\'Agadir ', 'http://localhost/site/photoutiliser/ideevoyageveaagadir.jpg', 'http://localhost/site/photoutiliser/ideevoyageveaagadir2.jpg', 'http://localhost/site/photoutiliser/', 'http://localhost/site/photoutiliser/', 'Le Club Marmara Les Jardins d\'Agadir, partiellement rénové (aquapark, terrains de sports, salle de bains des chambres, spa) '),
(21, 'voyage entre amis', 'Rando en Haute Loire', 'http://localhost/site/photoutiliser/ideevoyageveahautloir.jpg', 'http://localhost/site/photoutiliser/ideevoyageveahautloir1.jpg', 'http://localhost/site/photoutiliser/ideevoyageveahautloir2.jpg', 'http://localhost/site/photoutiliser/', ''),
(22, 'sejours remantiques', 'Venis (italie)', 'http://localhost/site/photoutiliser/ideevoyagesrvenis1.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrvenis2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrvenis3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrvenis4.jpg', 'Venise, en Italie, capitale de la Vénétie, est une ville magique faite de ponts et canaux, originellement bâtie au milieu d\'une lagune pour se protéger des invasions. C\'est aujourd\'hui une ville d\'art et d\'architecture presque parfaitement préservée. Ce sanctuaire sur le lagon reste virtuellement inaltéré depuis cinq cents ans, ce qui augmente le caractère fascinant de la ville.\r\n\r\nVenise est une des rares destinations touristiques mondiales qui ne déçoit que très rarement le visiteur, malgré la foule dans l\'hypercentre et le temps variable.'),
(23, 'sejours remantiques', 'paris (France)', 'http://localhost/site/photoutiliser/ideevoyagesrparis1.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrparis2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrparis3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrparis4.jpg', 'Paris, ville magnifique connue dans le monde entier\r\nVille romantique par excellence, elle attire les touristes tout au long de l\'année. La capitale française est si riche qu\'il ne suffit pas de quelques heures pour la visiter. Entre monuments, musées, boutiques, parcs, gastronomie, les choix ne manquent pas ! Quelles que soient vos préférences, vous apprécierez cette ville aux mille visages.'),
(24, 'sejours remantiques', 'istanbul (turquie)', 'http://localhost/site/photoutiliser/ideevoyagesristanbule1.jpg', 'http://localhost/site/photoutiliser/ideevoyagesristanbule2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesristanbule3.jpg', 'http://localhost/site/photoutiliser/ideevoyagesristanbule4.jpg', 'Istanbul est une ville touristique située en Turquie, et la seconde ville plus peuplée de l’Europe. Anciennement connue comme Constantinople, cette capitale est la seule ville au monde à être placée sur deux continents différents – l’Europe et l’Asie. Istanbul possède un pont qui relie l’est à l’ouest, avec le côté européen accueillant le centre historique et commercial de la ville. La zone asiatique contient environ un tiers de sa population.\r\n\r\nAujourd’hui, Istanbul mélange un passé riche et culturel avec une mode de vie moderne. La vieille ville possède de nombreux quartiers et repères emblématiques (comme le Palais de Topkapi de l’Empire Ottoman et l’Église Saint-Sauveur-in-Chora) tandis que le centre commercial offre un véritable paradis du shopping.\r\n\r\nSi vous vous rendez à Istanbul pendant l’été, je vous conseille d’apporter avec vous des vêtements légers. Bien que la ville soit principalement musulmane, les touristes peuvent porter des shorts, t-shirts, et robes/jupes dans les zones touristiques. Par contre, si vous prévoyez découvrir la ville à pied, il serait sage de porter des vêtements modestes.\r\n\r\nJuillet est le mois le plus chaud à Istanbul avec une température moyenne de 24 ° C (74 ° F). Mais, c’est le mois d’Août qui voit le plus grand nombre d’heures d’ensoleillement (environ 10 heures par jour). Le mois le plus froid est Février avec une température moyenne de 6 ° C (42 ° F). Le mois le plus pluvieux est Janvier avec une moyenne de 100mm de précipitations.'),
(25, 'voyage entre amis', 'tunisie', 'http://localhost/site/photoutiliser/ideevoyageveatunisie1.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie2.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie3.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie4.jpg', 'Le tourisme en Tunisie est l\'un des secteurs importants de l\'économie de la Tunisie et une source de devises pour le pays. Le tourisme a un effet d\'entraînement sur d\'autres secteurs économiques, tels que le transport, les communications, l\'artisanat, le commerce et le bâtiment.\r\n\r\nLa position géographique de la Tunisie au sud du bassin méditerranéen, avec 1 300 kilomètres de côtes en grande partie sablonneuses, un climat méditerranéen chaud l\'été et doux l\'hiver, un patrimoine civilisationnel très riche (huit sites inscrits au patrimoine mondial de l\'Unesco) et surtout un coût bas du séjour touristique, font de ce pays l\'une des principales destinations des touristes européens en Afrique et dans le monde arabe (quatrième pays le plus visité après l\'Égypte, l\'Afrique du Sud et le Maroc) : la Tunisie a accueilli 7 048 999 visiteurs en 20081. Elle s\'était d\'ailleurs fixée pour objectif de se rapprocher des dix millions de touristes à l\'horizon 20142.'),
(26, 'voyage entre amis', 'tunisie', 'http://localhost/site/photoutiliser/ideevoyageveatunisie1.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie2.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie3.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie4.jpg', 'Le tourisme en Tunisie est l\'un des secteurs importants de l\'économie de la Tunisie et une source de devises pour le pays. Le tourisme a un effet d\'entraînement sur d\'autres secteurs économiques, tels que le transport, les communications, l\'artisanat, le commerce et le bâtiment.\r\n\r\nLa position géographique de la Tunisie au sud du bassin méditerranéen, avec 1 300 kilomètres de côtes en grande partie sablonneuses, un climat méditerranéen chaud l\'été et doux l\'hiver, un patrimoine civilisationnel très riche (huit sites inscrits au patrimoine mondial de l\'Unesco) et surtout un coût bas du séjour touristique, font de ce pays l\'une des principales destinations des touristes européens en Afrique et dans le monde arabe (quatrième pays le plus visité après l\'Égypte, l\'Afrique du Sud et le Maroc) : la Tunisie a accueilli 7 048 999 visiteurs en 20081. Elle s\'était d\'ailleurs fixée pour objectif de se rapprocher des dix millions de touristes à l\'horizon 20142.'),
(27, 'voyage entre amis', 'Janet (Algerie)', 'http://localhost/site/photoutiliser/ideevoyageveadjanet1.jpg', 'http://localhost/site/photoutiliser/ideevoyageveadjanet2.jpg', 'http://localhost/site/photoutiliser/ideevoyageveadjanet3.jpg', 'http://localhost/site/photoutiliser/ideevoyageveadjanet4.jpg', 'La région de Djanet est habitée depuis le Néolithique, il y a plus de 10 000 ans, à une époque où le désert n\'occupait pas cette partie du Sahara. La végétation et la faune étaient luxuriantes, comme le rappellent les très nombreuses gravures rupestres du Tassili qui entourent Djanet. Des populations de chasseurs-cueilleurs y étaient installées.\r\n\r\nDjanet est fondée au Moyen Âge par les Touaregs. Les Ottomans, qui ont une autorité nominale sur le Fezzan, renforcent leur présence dans la région au début du xxe siècle en réaction aux poussées des Européens en Afrique. En 1905, les Turcs installent une garnison à Ghat et mènent quelques escarmouches contre les méharistes français, poussant jusqu\'à Djanet3. La guerre italo-turque de 1911 sonne le glas des ambitions ottomanes dans la région, les Français en profitent pour occuper Djanet en novembre 1911. Le capitaine Édouard Charlet prend l\'oasis le 27 novembre 1911, à la tête de 135 méharistes de la Compagnie Saharienne du Tiddikelt. Mais avant de partir, les Ottomans ont donné des fusils modernes aux tribus touarègues, ce qui les aide à opposer une résistance aux colonisateurs. Une bataille a lieu à 20 km au sud de Ghat en avril 1913 entre une troupe de 40 méharistes français (en fait des guerriers arabes Châamba) et une harka de 250 touaregs Ajjer. Les Français parviennent à se dégager par une charge à la baïonnette, mais doivent rejoindre à pied leur base située à 120 km, leurs montures ayant été massacrées3.'),
(28, 'plus belles iles du monde', 'Kauai, Hawaï', 'http://localhost/site/photoutiliser/ideevoyagesrkauai.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrkauai2.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrkauai4.jpg', 'http://localhost/site/photoutiliser/ideevoyagesrkauai3.jpg', 'L’île de Kauai se situe à Hawaï et peut offrir une variété d’hébergements. En effet, il existe bon nombre d’hôtels de luxe sur la côte Est et la côte nord. En outre, ses plages ont une forme de croissant. Ce lieu naturel a aussi une beauté à couper le souffle. L’île de Kauai est tout simplement inégalable en termes de romance. D’ailleurs, elle possède les activités nécessaires pour des vacances en amoureux réussies.\r\n\r\n'),
(29, 'plus belles iles du monde', 'L’île de Sainte-Lucie (Caraïbes)', 'http://localhost/site/photoutiliser/ideevoyagescaraibe3.jpg', 'http://localhost/site/photoutiliser/ideevoyagescaraibe.jpg', 'http://localhost/site/photoutiliser/ideevoyagescaraibe4.jpg', 'http://localhost/site/photoutiliser/ideevoyagescaraibe2..jpg', 'La plupart des amoureux connaissent la grandeur de l’île de Sainte-Lucie. En effet, cette terre située au milieu de l’océan estprisée par les couples pour ses reliefs volcaniques et ses paysages de carte postale. De plus, elle est dotée de cascades, de forêts et de plages magnifiques et les maisons s’y trouvant sont également grandioses\r\n\r\n'),
(30, 'plus belles iles du monde', 'panama', 'http://localhost/site/photoutiliser/panama1.jpg', 'http://localhost/site/photoutiliser/panama2.jpg', 'http://localhost/site/photoutiliser/panama3.jpg', 'http://localhost/site/photoutiliser/panama4.jpg', 'Le Panama, en forme longue la république du Panama1 (en espagnol : Panamá et República de Panamá), est un pays de 75 420 km2 situé à l’extrémité sud de l’Amérique centrale, sur l’isthme de Panama. Il est limitrophe du Costa Rica et de la Colombie, dont il faisait autrefois partie. Le pays compte 4 285 850 habitants en 2020.'),
(31, 'destination sans visa', 'tunisie', 'http://localhost/site/photoutiliser/ideevoyageveatunisie4.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie3.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie2.jpg', 'http://localhost/site/photoutiliser/ideevoyageveatunisie1.jpg', ''),
(32, 'destination sans visa', 'maldive', 'http://localhost/site/photoutiliser/maldives1.png', 'http://localhost/site/photoutiliser/maldives2.jpg', 'http://localhost/site/photoutiliser/Maldives4.jpg', 'http://localhost/site/photoutiliser/maldives5.jpg', 'paradie'),
(33, 'meilleures pause', 'maldive', 'http://localhost/site/photoutiliser/maldives5.jpg', 'http://localhost/site/photoutiliser/maldives2.jpg', 'http://localhost/site/photoutiliser/maldives1.png', 'http://localhost/site/photoutiliser/maldives5.jpg', ''),
(34, 'meilleures pause', 'caire', 'http://localhost/site/photoutiliser/caire.jpg', 'http://localhost/site/photoutiliser/caire1.jpg', 'http://localhost/site/photoutiliser/caire3.jpg', 'http://localhost/site/photoutiliser/caire2.jpg', 'Cairo, Arabic Al-Qāhirah (“The Victorious”), city, capital of Egypt, and one of the largest cities in Africa. Cairo has stood for more than 1,000 years on the same site on the banks of the Nile, primarily on the eastern shore, some 500 miles (800 km) downstream from the Aswān High Dam. Located in the northeast of the country, Cairo is the gateway to the Nile delta, where the lower Nile separates into the Rosetta and Damietta branches. Metropolitan Cairo is made up of the Cairo muḥāfazah (governorate), as well as other districts, some of which belong to neighbouring governorates such as Al-Jīzah and Qalūbiyyah. Area governorate, 83 square miles (214 square km). Pop. (2006) governorate, 7,786,640; (2005 est.) urban agglom.,'),
(35, 'meilleures pause', 'roma', 'http://localhost/site/photoutiliser/roma1.jpg', 'http://localhost/site/photoutiliser/roma2.jpg', 'http://localhost/site/photoutiliser/roma3.jpg', 'http://localhost/site/photoutiliser/roma4.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `listevoyage`
--

CREATE TABLE `listevoyage` (
  `id` int(6) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `image4` varchar(500) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `etoile` int(1) NOT NULL,
  `nbrjoursetnuit` varchar(30) NOT NULL,
  `prix` int(20) NOT NULL,
  `datedpr` date NOT NULL,
  `descriptio` varchar(5000) NOT NULL,
  `programme` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `listevoyage`
--

INSERT INTO `listevoyage` (`id`, `image1`, `image2`, `image3`, `image4`, `pays`, `etoile`, `nbrjoursetnuit`, `prix`, `datedpr`, `descriptio`, `programme`) VALUES
(1, 'http://localhost/site/photoutiliser/maldives1.png', 'http://localhost/site/photoutiliser/Maldives4.jpg', 'http://localhost/site/photoutiliser/maldives2.jpg', 'http://localhost/site/photoutiliser/maldives5.jpg', 'maldive', 4, '15 jours/14 nuits', 600000, '2021-08-21', 'Les Maldives sont un pays tropical de l\'océan Indien composé de 26 atolls en forme d\'anneaux comprenant plus de 1 000 îles coralliennes. Elles sont réputées pour leurs plages, leurs lagons bleus et leurs vastes récifs. Malé, la capitale, abrite un marché aux poissons très fréquenté, des restaurants et des boutiques sur la route principale, Majeedhee Magu, ainsi que la mosquée de Hukuru Miskiy du XVIIe siècle ', '...............................Maldive votre Hiver au Soleil........................................\r\nTYMZ travel vous propose son programme pour Les Iles Maldives avec une nouvel gamme d\'hôtel qui vous permet de passer votre hiver au soleil au bout du monde.....................................\r\n-----------------------------------------------------------------------\r\nInclus dans le programme :\r\n-14 nuitées et 15 jours à l\'hôtel adaaran select hudhuranfushi 4 * plus \r\n-régime alimentaire en pension complète\r\n-transfert aéroport hôtel boat speed .................................\r\n'),
(3, 'http://localhost/site/photoutiliser/Zanzibar1.jpg', 'http://localhost/site/photoutiliser/zanzibar5.jpg', 'http://localhost/site/photoutiliser/zanzibar4.jpg', 'http://localhost/site/photoutiliser/zanzibar3.jpg', 'zanzibar', 4, '7 jours/6 nuit', 280000, '2021-09-02', 'Zanzibar est un archipel tanzanien situé au large des côtes de l\'Afrique de l\'Est. Sur l\'île principale d\'Unguja, familièrement appelée &quot;Zanzibar&quot;, se trouve Stone Town, centre de commerce historique aux influences swahilies et islamiques. Ses allées sinueuses comprennent des minarets, des portes sculptées et des monuments du XIXe siècle comme la House of Wonders, l\'un des anciens palais du sultan. Au nord, les villages de Nungwi et Kendwa offrent de larges plages bordées d\'hôtels.', ''),
(4, 'http://localhost/site/photoutiliser/voitalie1.jpg', 'http://localhost/site/photoutiliser/voitalie4.jpg', 'http://localhost/site/photoutiliser/voitalie3.jpg', 'http://localhost/site/photoutiliser/voitalie2.jpg', 'Italie', 5, '7 jours/6 nuit', 238000, '2021-08-07', 'L\'Italie, pays européen bordé par la Méditerranée et l\'Adriatique, a laissé une forte empreinte sur la culture et la cuisine occidentales. Sa capitale, Rome, abrite le Vatican ainsi que des trésors artistiques et des ruines antiques. Les autres grandes villes comprennent Florence, avec des chefs-d\'œuvre de la Renaissance comme le David de Michel-Ange et le dôme de Brunelleschi, Venise, la ville des canaux, et Milan, la capitale italienne de la mode.', ''),
(5, 'http://localhost/site/photoutiliser/volaspalmas1.jpg', 'http://localhost/site/photoutiliser/volaspalmas2.jpg', 'http://localhost/site/photoutiliser/volaspalmas3.jpg', 'http://localhost/site/photoutiliser/volaspalmas4.jpg', 'Las Palmas', 5, '15 jours/14 nuits', 469000, '2021-11-25', 'Las Palmas est la capitale de Grande Canarie, l\'une des îles Canaries de l\'Espagne, au large de la côte nord-ouest de l\'Afrique. Important port pour les bateaux de croisière, la ville est célèbre pour son shopping en duty-free et ses plages de sable. À la Playa de Las Canteras, une barrière de corail longe la plage et protège les nageurs. Le carnaval annuel Las Palmas de Gran Canaria rassemble des artistes aux costumes hauts en couleur et donne lieu à des spectacles de musique et de danse.', ''),
(6, 'http://localhost/site/photoutiliser/vomaroc1.jpg', 'http://localhost/site/photoutiliser/vomaroc2.jpg', 'http://localhost/site/photoutiliser/vomaroc3.jpg', 'http://localhost/site/photoutiliser/vomaroc4.jpg', 'MAROC ', 4, '7 jours/6 nuit', 150000, '2021-07-18', '', '• Les repas libres\r\n• Les dépenses personnelles\r\n'),
(7, 'http://localhost/site/photoutiliser/voaint1.jpg', 'http://localhost/site/photoutiliser/voaint2.jpg', 'http://localhost/site/photoutiliser/voaint3.jpg', 'http://localhost/site/photoutiliser/voaint5.jpg', 'AIN TEMOUCHENT', 3, '04nuits/05jours', 36500, '2021-07-31', '■ Départs :\r\n- Du 05/07/2021 au 09/07/2021 … 04nuits/05jours\r\n- Du 09/07/2021 au 13/07/2021 … 04nuits/05jours\r\n- Du 13/07/2021 au 17/07/2021 … 04nuits/05jours\r\n', '\r\n- Transport par bus confortable départs d\'Alger Ruisseau à 07h00.\r\n- Hébergement en chambre en demi-pension (petit déjeune + diner).\r\n- Animation pour enfants et adultes / diurne et nocturne.\r\n- Piscine extérieure et pataugeoire pour les enfants.    \r\n- Navette pour l\'un des plages proches : Nedjma, Mordjana, Terga1 et 2\r\n-  Spa SULTANA (massages, soins balnéo et hammam traditionnel) en extra.\r\n- Accompagnateurs de l\'agence.\r\n- Assurance de voyage.\r\n'),
(8, 'http://localhost/site/photoutiliser/vodoubai1.jpg', 'http://localhost/site/photoutiliser/vodoubai2.jpg', 'http://localhost/site/photoutiliser/vodoubai4.jpg', 'http://localhost/site/photoutiliser/vodoubai3.jpg', 'DUBAI', 5, '08 jours et 07 nuitées ', 230000, '2021-11-25', 'Dubaï se trouve à 130 km au nord-est d\'Abou Dabi, la capitale de l\'union, à 362 km à l\'ouest-nord-ouest de Mascate, à 864 km à l\'est de Riyad, à 1 226 km au sud-sud-est de Téhéran et à 5 251 km à l\'est de Paris. La ville fut créée dans une boucle du bras de mer, le Khor Dubaï, qui s\'insinue dans le désert et qui constitue un port naturel. Le centre de la ville, qui garde un caractère arabe, est constitué de petits immeubles et de ruelles étroites. Les nouveaux quartiers s\'étalent quant à eux dans le désert et le long de la côte ouest en direction du nord et représentent une vaste agglomération avec Ali, Umm Suqueim (ou Umm Suqeim (en)), Barsha, Jumeirah, Bur Dubaï et Deira.\r\n\r\nCes nouveaux quartiers, créés de toutes pièces, sont constitués de grands immeubles, de résidences et de maisons individuelles. Ils s\'organisent au sud de part et d\'autre de la Sheikh Zayed Road, la plus grande artère des Émirats arabes unis et futur centre urbain de l\'agglomération. Bordée de gratte-ciel (573 dans l\'émirat), elle permet de relier les zones résidentielles aux complexes touristiques construits ou en construction qui se trouvent au sud de la ville : Palm Islands, The World, Dubaï Waterfront, Ski Dubaï, Dubaï Marina, Dubai Mall, l\'hôtel Burj-al-Arab, la Burj Khalifa, Dubaïland, etc.', ' 03 Excursions Mentionnées dans le programme\r\no Visite de la ville de Dubaï\r\no Safari dans le désert, Dubaï avec diner barbecue au disert\r\no Dîner Croisière sur bateau (Dhow Cruise Dinner).\r\n'),
(9, 'http://localhost/site/photoutiliser/vochine1.jpg', 'http://localhost/site/photoutiliser/vochine2.jpg', 'http://localhost/site/photoutiliser/vochine4.jpg', 'http://localhost/site/photoutiliser/vochine3.jpg', 'Beijing (China)', 4, '15 jours/14 nuits', 790000, '2021-09-30', 'La Chine est un pays très peuplé d’Asie de l’est. Son territoire immense présente des paysages variés : prairies, déserts, montagnes, lacs, rivières et plus de 14 000 km de littoral. Pékin, la capitale à l’architecture moderne, conserve également des sites historiques, comme le palais de la Cité interdite et la place Tian Anmen. Shanghaï est l\'un des plus grands centres financiers mondiaux et comporte de nombreux gratte-ciels. L’emblématique Grande Muraille de Chine partage le nord du pays d’est en ouest.', ''),
(10, 'http://localhost/site/photoutiliser/germa4.jpg', 'http://localhost/site/photoutiliser/germa2.jpg', 'http://localhost/site/photoutiliser/germa1.jpg', 'http://localhost/site/photoutiliser/germa3.jpg', 'Frankfurt (Germany) ', 5, '15 jours/14 nuits', 410000, '2022-01-01', 'L\'Allemagne est un pays d\'Europe de l\'Ouest dont le paysage se compose de forêts, de rivières, de chaînes montagneuses et de plages sur la mer du Nord. Son histoire remonte à plus de 2 000 ans en arrière. Dotée d\'une vie artistique et nocturne animée, Berlin, sa capitale, inclut la porte de Brandebourg et de nombreux sites en lien avec la Seconde Guerre mondiale. Munich est connue pour son Oktoberfest et ses bars à bières, notamment l\'Hofbräuhaus qui date du XVIe siècle. Francfort, avec ses gratte-ciel, abrite la Banque centrale européenne.', ''),
(11, 'http://localhost/site/photoutiliser/istan1.jpg', 'http://localhost/site/photoutiliser/istan2.jpg', 'http://localhost/site/photoutiliser/istan4.jpg', 'http://localhost/site/photoutiliser/istan3.jpg', 'Istamboul', 5, '7 jours/6 nuits', 120000, '2021-08-07', 'Istanbul, ville cosmopolite et haut lieu du tourisme située à cheval entre l’Europe et l’Asie. Surnommée « La 2ème Rome », Istanbul, 8ème destination touristique dans le monde est l’une des plus grandes mégapoles de la planète.', 'Jour 1: ALGER- ISTANBUL  \r\n\r\nArrivée À l\'aéroport d’Istanbul, transfert à l\'Hôtel, Temps libre, Nuit à l\'hôtel.\r\n\r\nJour 2: ISTANBUL – City Tour Istanbul\r\n\r\nPetit déjeuner ; départ pour visiter le Palais de Topkapi, la Mosquées bleu, Hippodrome; En suite visite de MALL VINISIA, Nuit à l’hôtel.\r\n\r\nJour 3 : ISTANBUL – Croisière Au Bosphore –\r\n\r\nPetit-déjeuner ; départ pour faire une croisière avec le bateau dans le Bosphore pour visiter le coté asiatique et Européen de la ville en suite VISITE AQUARIUM FLORIA D\'EXTÉRIEUR + MALL OLIVIUM, Nuit À l’hôtel.\r\n\r\nJour 4 : ISTANBUL –Journée Libre pour shopping –\r\n\r\nPetit-déjeuner ; Journée Libre pour profiter de la ville ou faire du shopping; Nuit À l’hôtel.\r\n\r\nJour 5 : ISTANBUL –Journée Libre –\r\n\r\nPetit-déjeuner ; Journée Libre pour profiter de la ville ou faire du shopping; Nuit À l’hôtel.\r\n\r\nJour 6 : ISTANBUL –Journée Libre –\r\n\r\nPetit-déjeuner ; Journée Libre pour profiter de la ville ou faire du shopping; Nuit À l’hôtel.\r\n\r\nJour 7 : ISTANBUL-ALGER\r\n\r\nPetit déjeuner Transfert À l\'aéroport en vol à destination d\'Alger.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(6) NOT NULL,
  `photop` varchar(5000) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` varchar(8) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwor` varchar(255) NOT NULL,
  `poste` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `photop`, `Nom`, `prenom`, `date_naissance`, `sexe`, `telephone`, `email`, `passwor`, `poste`) VALUES
(1, 'http://localhost/site/photoutiliser/default.jpg', 'PFC', 'admin', '2000-07-23', 'HOMME', '0783990777', 'PFCadmin@gmail.com', '$2y$10$8MfMi.LzYCtv0jZFeZhLzu4ubkN5yAeaFQf.5Qm4GDQ8U0SsZ0NgG', 'admin'),
(2, 'http://localhost/site/photoutiliser/default.jpg', 'PFC', 'client', '2000-02-16', 'FEMME', '0000000000', 'PFCclient@gmail.com', '$2y$10$pF5ozET4t8dzEwy1WKwT5O9nwDrw6bZf/1NXS01l/frRsLqOL1hyy', 'client'),
(3, 'http://localhost/site/photoutiliser/default.jpg', 'lllllll', 'llllllllll', '2021-09-01', 'HOMME', '0000000000', '8@gmail.com', '12345678', 'client'),
(4, 'http://localhost/site/photoutiliser/default.jpg', '77777777', '777777777', '2021-09-07', 'HOMME', '7777777777', '7@gmail.com', '$2y$10$RUd7P4bJvDTe2.p06fLltusH4BSzlrHEJZsa9Xvox3TG.q2Qq6wVG', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `omra`
--

CREATE TABLE `omra` (
  `id` int(6) NOT NULL,
  `omra` varchar(5) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `prix` float NOT NULL,
  `datedepart` date NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `descriptio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `omra`
--

INSERT INTO `omra` (`id`, `omra`, `image1`, `prix`, `datedepart`, `hotel`, `descriptio`) VALUES
(16, 'omra', 'http://localhost/site/photoutiliser/omra.jpg', 220000, '2021-11-16', 'infinity 5  ', 'chambre simple___\r\n220000 DA\r\nchambre à deux__\r\n265000 DA\r\nchambre  à trios__\r\n325000 DA');

-- --------------------------------------------------------

--
-- Structure de la table `omrareserver`
--

CREATE TABLE `omrareserver` (
  `idper` int(6) NOT NULL,
  `idomra` int(6) NOT NULL,
  `numpass` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `datep` date NOT NULL,
  `dated` date NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `nbrplace` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `omrareserver`
--

INSERT INTO `omrareserver` (`idper`, `idomra`, `numpass`, `nom`, `prenom`, `email`, `tel`, `datep`, `dated`, `hotel`, `nbrplace`) VALUES
(1, 16, 250354200, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', '2021-07-29', '2021-09-09', 'infinity 5', 1),
(2, 16, 55562221, 'PFC', 'client', 'PFCclient@gmail.com', '0000000000', '2021-08-26', '2021-11-16', 'infinity 5  ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `validatio`
--

CREATE TABLE `validatio` (
  `idper` int(6) NOT NULL,
  `idvoy` int(6) NOT NULL,
  `numpass` int(30) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `pays` varchar(40) NOT NULL,
  `dated` date NOT NULL,
  `nbrplace` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `validatio`
--

INSERT INTO `validatio` (`idper`, `idvoy`, `numpass`, `nom`, `prenom`, `email`, `tel`, `pays`, `dated`, `nbrplace`) VALUES
(1, 9, 542, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'Beijing (China)', '2021-09-01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `validationomra`
--

CREATE TABLE `validationomra` (
  `idper` int(6) NOT NULL,
  `idomra` int(6) NOT NULL,
  `numpass` int(25) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `hotel` varchar(40) NOT NULL,
  `dated` date NOT NULL,
  `nbrplace` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `validationomra`
--

INSERT INTO `validationomra` (`idper`, `idomra`, `numpass`, `nom`, `prenom`, `email`, `tel`, `hotel`, `dated`, `nbrplace`) VALUES
(1, 16, 852, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'infinity 5', '2021-09-09', 5);

-- --------------------------------------------------------

--
-- Structure de la table `voyageresrver`
--

CREATE TABLE `voyageresrver` (
  `idper` int(6) NOT NULL,
  `idvoy` int(6) NOT NULL,
  `numpass` int(20) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `dated` date NOT NULL,
  `datep` date NOT NULL,
  `nbrplace` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyageresrver`
--

INSERT INTO `voyageresrver` (`idper`, `idvoy`, `numpass`, `nom`, `prenom`, `email`, `tel`, `pays`, `dated`, `datep`, `nbrplace`) VALUES
(1, 3, 852, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'zanzibar', '2021-09-02', '2021-08-04', 852),
(1, 4, 0, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'Italie', '2021-08-07', '0000-00-00', 0),
(1, 6, 0, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'MAROC ', '2021-07-18', '0000-00-00', 0),
(1, 7, 0, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'AIN TEMOUCHENT', '2021-07-31', '0000-00-00', 0),
(1, 8, 0, 'PFC', '2021', 'PFCadmin@gmail.com', '0783990777', 'DUBAI', '2021-11-25', '0000-00-00', 0),
(2, 3, 230255356, 'PFC', 'client', 'PFCclient@gmail.com', '0000000000', 'zanzibar', '2021-09-02', '2021-08-27', 2);

-- --------------------------------------------------------

--
-- Structure de la table `voyageur`
--

CREATE TABLE `voyageur` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `depliant`
--
ALTER TABLE `depliant`
  ADD PRIMARY KEY (`iddep`);

--
-- Index pour la table `idee`
--
ALTER TABLE `idee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `listevoyage`
--
ALTER TABLE `listevoyage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `omra`
--
ALTER TABLE `omra`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `omrareserver`
--
ALTER TABLE `omrareserver`
  ADD PRIMARY KEY (`idper`,`idomra`);

--
-- Index pour la table `voyageresrver`
--
ALTER TABLE `voyageresrver`
  ADD PRIMARY KEY (`idper`,`idvoy`);

--
-- Index pour la table `voyageur`
--
ALTER TABLE `voyageur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `depliant`
--
ALTER TABLE `depliant`
  MODIFY `iddep` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `idee`
--
ALTER TABLE `idee`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `listevoyage`
--
ALTER TABLE `listevoyage`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `omra`
--
ALTER TABLE `omra`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `voyageur`
--
ALTER TABLE `voyageur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
