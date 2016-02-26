-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2015 at 06:30 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `animation`
--

-- --------------------------------------------------------

--
-- Table structure for table `animationinfo`
--

CREATE TABLE IF NOT EXISTS `animationinfo` (
  `AID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `AName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ADesc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `animationinfo`
--

INSERT INTO `animationinfo` (`AID`, `AName`, `ADesc`) VALUES
('00000000', 'infinite stratos', 'IS <Infinite Stratos> (Japanese: IS〈インフィニット・ストラトス〉 Hepburn: IS <Infinitto Sutoratosu>?) is a Japanese light novel series by Izuru Yumizuru with illustrations provided by Okiura and CHOCO. As of October 2013, 8 volumes have been published by Media Factory under their MF Bunko J label. From volume 8 onwards, the novels will be published by Overlap under their Overlap Bunko label. A manga adaptation by Kenji Akahoshi was serialized in the seinen manga magazine Monthly Comic Alive from May 2010 to July 2012 with five volumes published under their Alive Comics imprint. A 12-episode anime adaptation aired in Japan between January and March, 2011, and an OVA was released on December 7, 2011. The anime is licensed by Sentai Filmworks in North America, and they released the series on April 10, 2012. A second series aired from October 3, 2013 to December 19, 2013.'),
('00000001', 'Arslan Senki', 'The mangas story: In the prosperous kingdom of Pars lies the Royal Capital of Ecbatana, a city of splendor and wonder, ruled by the undefeated and fearsome King Andragoras. Arslan is the young and curious prince of Pars who, despite his best efforts, doesnt seem to have what it takes to be a proper king like his father'),
('00000002', 'Baby Steps 2', 'Studio Pierrot\r\nSeason 2 of Baby Steps.'),
('00000003', 'Denpa Kyoushi', 'An anime adaptation of the manga which centers around Junichirou, a young man obssesed with manga, anime and games. He was a young genius who published papers in the journals Nature and Science when he was only 17. However, after graduating college, he became a NEET (Not in Education, Employment, or Training) absorbed in his anime blog. Unable to watch Kagami throw away his life, his sister Suzune gets him to work at the Ichou Academy she attends. The head of the schools board, Koyomi Hiiragi, assigns Kagami to his new life as a teacher'),
('00000004', 'Diamond no Ace: Second Season', 'The second season of Diamond no Ace.'),
('00000005', 'Dungeon ni Deai o Motomeru no wa Machigatteiru Darou ka?', 'The story takes place in the town of labyrinths, Orario, also called "Dungeon." Bell Cranel is a newbie adventurer that admires "Having a fateful meeting with a person of the opposite gender." One day during an adventure, he is attacked by a Minotaur. Close to destruction, he is saved by a top-class female adventurer, Aizu Wallenstein. He falls in love with her at first sight, and begins actions to become an adventurer that is on her level. He later encounters Hestia, a god called a "Lolita god" due to her stature who falls in love with him'),
('00000006', 'Diabolik Lovers More,Blood', 'Zexcs\r\nSecond season of Diabolik Lovers.'),
('00000007', 'Gakusen Toshi Asterisk', 'In the previous century, humanity was attacked by an unprecedented disaster... The impact "Invertia." The whole world was destroyed. However, humans acquired a new potential...The Genestella'),
('00000008', 'Haikyuu!! 2', 'The sequel to Haikyuu!! TV anime.'),
('00000009', 'Heavy Object', 'The science-fiction war action story revolves around Objects — powerful, massive weapons that change the course of warfare — and Elite Object pilots. An odd Elite girl named Milinda meets Quenser, a student who aims to become a Object mechanic, with the soldier-in-training Heivia on a snowy battlefield.'),
('00000010', 'Owari no Seraph 2', 'Wit Studio\r\nSecond season of Owari no Seraph'),
('00000011', 'test3', '123466666');

-- --------------------------------------------------------

--
-- Table structure for table `animationnews`
--

CREATE TABLE IF NOT EXISTS `animationnews` (
  `NewsNO` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `News` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DescNews` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NewsNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `animationnews`
--

INSERT INTO `animationnews` (`NewsNO`, `Date`, `News`, `DescNews`) VALUES
(4, '2015-05-23', 'Sekai Project Adds Tobari & the Night of the Curio', 'Also: Resette''s Prescription, Sacrament Sheep, Memory''s Dogma ― Video game and visual novel localization company Sekai Project announced at its FanimeCon panel on Friday '),
(5, '2015-05-23', 'Nisekoi: False Love Sub.Blu-Ray 3 is released', 'Another love interest gets added to the Nisekoi pile, but is it enough to inject some life into this standard harem comedy?'),
(6, '2015-05-23', 'Queen''s Blade Grimoire Books Get 2-Part OVA Series', 'Kinji Yoshimoto returns as chief director for new OVA ― The July issue of the Hobby Japan magazine is revealing on Monday the the Queen''s Blade Grimoire books are getting a two-part OVA adaptation starting this fall. The project '),
(7, '2015-05-23', 'Queen''s Blade Grimoire Books Get 2-Part OVA Series', 'Kinji Yoshimoto returns as chief director for new OVA ― The July issue of the Hobby Japan magazine is revealing on Monday the the Queen''s Blade Grimoire books are getting a two-part OVA adaptation starting this fall. The project...'),
(8, '2015-05-23', 'City Hunter Manga Gets New Original Anime DVD', 'XYZ Edition release celebrates 30th anniversary of Tsukasa Hojo is series ― The July issue of Tokuma Shoten is Monthly Comic Zenon magazine is announcing on Monday that Tsukasa Hojo is City Hunter manga is inspiring a...'),
(9, '2015-05-23', 'Gainax Founder, Evangelion Designer Make TV Anime ', 'Hiroyuki Yamaga reunites with Honneamise collaborator Yoshiyuki Sadamoto ― Gainax co-founder Hiroyuki Yamaga (Royal Space Force - The Wings of Honnêamise, This Ugly Yet...'),
(10, '2015-05-23', 'Magi: Sinbad no Bōken is 5th OVA to Ship With 7th ', 'Japanese publisher Shogakukan is listing that it will ship the limited edition seventh volume of Shinobu Ohtaka is and Yoshifumi Ōtera is spinoff...'),
(11, '2015-05-23', 'TAGRO to End Hen Semi/Abnormal Physiology Seminar ', 'Comedy about ordinary person surrounded by abnormal people launched in 2006...'),
(12, '2015-05-23', 'Crowdfunding Campaign Seeks to Expand Animator Dor', 'Project is US$15,000 goal would establish more housing for low-income animation staff...'),
(13, '2015-05-23', 'Ultraman/ Linebarrels of Iron Manga Creators Shimi', 'Viz to release Ultraman manga in N. America ― Viz Media announced during its FanimeCon panel on Friday that Ultraman manga creators ...'),
(14, '2015-05-23', 'Ultraman Creators Shimizu', 'Viz to release Ultraman manga in N. AmerUltraman manga creators ...'),
(15, '2015-05-23', 'Food Wars! Shokugeki no Soma ‒ Episode 8', 'This week the kids of Polaris head off on their special training camp, and as you might have guessed, this is not a "test of courage kind of place'),
(16, '2015-05-23', 'New Figures Imagine Free! Guys as Tiny Tots', 'The upcoming High Speed! -Free! Starting Days- film promises to take fans where the story of the Iwatobi Swim Club began during middle school. The Toys Works booth is going even younger, ...'),
(17, '2015-05-23', 'Japan Animation TV Ranking, May 11-17', 'Pokemon XY back in top 10'),
(18, '2015-05-23', 'Assassination Classroom ‒ Episode 18', 'Assassination Classroom is usually more creative than this...'),
(19, '2015-05-23', 'Lance N Masques TV Anime to Air This Fall', 'The official website for the Lance N Masques television anime announced on Friday that the series will premiere this fall on TBS. Lance N Masques is adapted from Hideaki Koyasu...'),
(20, '2015-05-23', 'Classroom Crisis Anime Ad Reveals Core Cast', 'Showtaro Morikubo, Sora Amamiya, Ari Ozawa star in original anime premiering July 3 ― The official website for the original television anime Classroom Crisis began streaming a commercial...'),
(21, '2015-05-23', 'College Student Working on Hatsune Miku Robot', 'As a serious upgrade from a body pillow, a Japanese university student has just brought Vocaloid icon Hatsune Miku into our world...sort of. A life-sized robot, designed to look like the...'),
(22, '2015-05-23', 'Ninja Slayer From Animation ‒ Episode 6', 'Ninja Slayer has pivoted back towards the weird comedy of previous episodes, after a whole episode that failed to use this gag even once....'),
(23, '2015-05-25', 'xyz', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `AuID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `AuName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `History` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`AuID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuID`, `AuName`, `History`) VALUES
('10001', 'Yoshiki Tanaka', 'Dr. Yoshiki Tanaka (田中 芳樹 Tanaka Yoshiki born October 22, 1952) is a Japanese novelist. He was born in Kumamoto Prefecture and took his doctorate degree in Japanese Language and Literature in the Graduate School of Gakushūin University in Tokyo\r\nHis major works include the fantasy novel series Arslan Senki (アルスラーン戦記), also known as The Heroic Legend of Arslan, and the sci-fi space opera novel series entitled Ginga eiyū densetsu (銀河英雄伝説), also known as Legend of the Galactic Heroes, both of which'),
('10002', 'Katsuhiko Chiba', 'Katsuhiko Chiba is a screenwriter, he debuted in 1986 on the anime TV series High School! Kimengumi and has since then been majorly writing for anime.'),
('10003', 'AZUMA Takeshi', '2008 - Change Boy - Comedy, Romance, Shounen, Supernatural\r\n2009 - Chou Dokyuu Shoujo 4946 -	Action, Comedy, Ecchi, Romance, Shounen, Supernatural\r\n2011 - Denpa Kyoushi - Comedy, Harem, Romance, School Life, Shounen, Slice of Life'),
('10004', 'Yuji Terajima', 'Yūji Terajima (Japanese: 寺嶋 裕二 Hepburn: Terajima Yūji?, born 10 May 1974) is a Japanese manga artist, born in Mannō, Kagawa. He is the writer and illustrator of the baseball manga, Daiya no Ace which won the 2008 Shogakukan Manga Award in the shōnen category'),
('10005', 'Omori Fujino', 'works ngeon ni deai wo motomeru no wa machigatteiru darou ka'),
('10006', 'Seiko Nagatsu', 'Allison & Lillia (TV) : Script(7 episodes)\r\nDiabolik Lovers (TV) : Series Composition\r\nFutari wa Precure Splash Star (TV) : Script, Series Composition\r\nKatanagatari (TV) : Script\r\nMokke (TV) : Series Composition, Screenplay\r\nOniichan no Koto Nanka Zenzen Suki Janain Dakara ne—!! (TV) : Script(Ep. 3)\r\nTears to Tiara (TV) : Script(5 episodes)'),
('10007', 'Yuu Miyazaki', 'achievement : Gakusen Toshi Asterisk'),
('10008', 'Furudate Haruichi', 'Haruichi Furudate (古舘 春一 Furudate Haruichi?) is a Japanese manga artist best known for creating the shōnen manga series'),
('10009', 'Kazuma Kamachi', 'Staff in:A Certain Magical Index (light novel) : Story A Certain Magical Index (manga) : Original creator A Certain Magical Index (TV) : Original creator A Certain Magical Index II (TV) : Original creator A Certain Magical Index: The Miracle of Endymion (movie) : Original creator, Original story, Story Composition A Certain Scientific Accelerator (manga) : Original creator');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(2, 'admin1', 'admin1'),
(3, 'natty', '1234'),
(4, 'giegie', 'giegie'),
(6, 'gotza', '123456'),
(7, 'napza', '123456'),
(8, 'guideza', '123456'),
(9, 'basza', '123456'),
(10, 'benza', '123456'),
(11, 'nutzaa', '1234555'),
(12, 'Fzabaa', '5555555');

-- --------------------------------------------------------

--
-- Table structure for table `relationanimationandauthor`
--

CREATE TABLE IF NOT EXISTS `relationanimationandauthor` (
  `RNO` int(11) NOT NULL AUTO_INCREMENT,
  `AID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `AuID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`RNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `relationanimationandauthor`
--

INSERT INTO `relationanimationandauthor` (`RNO`, `AID`, `AuID`) VALUES
(11, '00000000', '10001'),
(12, '00000001', '10001'),
(13, '00000002', '10002'),
(14, '00000003', '10003'),
(15, '00000004', '10004'),
(16, '00000005', '10005'),
(17, '00000006', '10006'),
(18, '00000007', '10007'),
(19, '00000008', '10008'),
(20, '00000009', '10009'),
(21, '00000010', '10009');

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE IF NOT EXISTS `showtime` (
  `AID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `TimeStart` time NOT NULL,
  `TimeEnd` time NOT NULL,
  PRIMARY KEY (`Date`,`TimeStart`,`TimeEnd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`AID`, `Date`, `TimeStart`, `TimeEnd`) VALUES
('', '0000-00-00', '00:00:00', '00:00:00'),
('00000000', '2015-03-04', '13:00:00', '13:30:00'),
('00000000', '2015-03-11', '13:00:00', '13:30:00'),
('00000000', '2015-03-18', '13:00:00', '13:30:00'),
('00000001', '2015-04-03', '18:00:00', '18:30:00'),
('00000001', '2015-04-10', '18:00:00', '18:30:00'),
('00000001', '2015-04-17', '18:00:00', '18:30:00'),
('00000001', '2015-04-24', '18:00:00', '18:30:00'),
('00000001', '2015-05-01', '18:00:00', '18:30:00'),
('00000009', '2015-05-01', '21:00:00', '21:30:00'),
('00000004', '2015-05-02', '09:30:00', '10:00:00'),
('00000005', '2015-05-03', '20:00:00', '20:30:00'),
('00000002', '2015-05-04', '19:00:00', '19:30:00'),
('00000003', '2015-05-06', '16:00:00', '16:30:00'),
('00000001', '2015-05-08', '18:00:00', '18:30:00'),
('00000004', '2015-05-09', '09:30:00', '10:00:00'),
('00000005', '2015-05-10', '20:00:00', '20:30:00'),
('00000002', '2015-05-11', '19:00:00', '19:30:00'),
('00000010', '2015-05-12', '22:00:00', '22:30:00'),
('00000003', '2015-05-13', '16:00:00', '16:30:00'),
('00000001', '2015-05-15', '18:00:00', '18:30:00'),
('00000004', '2015-05-16', '09:30:00', '10:00:00'),
('00000005', '2015-05-17', '20:00:00', '20:30:00'),
('00000002', '2015-05-18', '19:00:00', '19:30:00'),
('00000003', '2015-05-20', '16:00:00', '16:30:00'),
('00000001', '2015-05-22', '18:00:00', '18:30:00'),
('00000004', '2015-05-23', '09:30:00', '10:00:00'),
('0000011', '2015-05-24', '13:00:00', '13:30:00'),
('00000005', '2015-05-24', '20:00:00', '20:30:00'),
('0000011', '2015-05-25', '13:00:00', '13:30:00'),
('00000002', '2015-05-25', '19:00:00', '19:30:00'),
('00000011', '2015-05-26', '13:00:00', '13:30:00'),
('00000003', '2015-05-27', '16:00:00', '16:30:00'),
('00000001', '2015-05-29', '18:00:00', '18:30:00'),
('00000004', '2015-05-30', '09:30:00', '10:00:00'),
('00000005', '2015-05-31', '20:00:00', '20:30:00'),
('00000002', '2015-06-01', '19:00:00', '19:30:00'),
('00000003', '2015-06-03', '16:00:00', '16:30:00'),
('00000001', '2015-06-05', '18:00:00', '18:30:00'),
('00000001', '2015-06-12', '18:00:00', '18:30:00'),
('00000008', '2015-07-02', '19:00:00', '19:30:00'),
('00000007', '2015-07-03', '14:00:00', '14:30:00'),
('00000006', '2015-07-04', '17:00:00', '17:30:00'),
('0000011', '2016-06-02', '13:00:00', '13:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
