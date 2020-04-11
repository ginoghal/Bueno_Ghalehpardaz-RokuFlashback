-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Abr-2020 às 19:01
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_movies`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_controls`
--

DROP TABLE IF EXISTS `tbl_controls`;
CREATE TABLE IF NOT EXISTS `tbl_controls` (
  `control_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `blacklisted_series` varchar(500) NOT NULL,
  `blacklisted_movies` varchar(500) NOT NULL,
  `blacklisted_music` varchar(500) NOT NULL,
  PRIMARY KEY (`control_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_controls`
--

INSERT INTO `tbl_controls` (`control_id`, `user_id`, `blacklisted_series`, `blacklisted_movies`, `blacklisted_music`) VALUES
(1, 2, '1', '', ''),
(2, 24, '', '', ''),
(3, 27, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `movies_id` int(11) NOT NULL AUTO_INCREMENT,
  `movies_cover` varchar(200) NOT NULL,
  `movies_title` varchar(200) NOT NULL,
  `movies_year` int(11) NOT NULL,
  `movies_storyline` varchar(1000) NOT NULL,
  `movies_trailer` varchar(200) NOT NULL,
  `movies_filter` varchar(100) NOT NULL,
  `for_kids` varchar(3) NOT NULL,
  `locked` int(11) DEFAULT NULL,
  PRIMARY KEY (`movies_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_storyline`, `movies_trailer`, `movies_filter`, `for_kids`, `locked`) VALUES
(1, 'ladyNtheTramp.jpg', 'Lady and the Tramp', 1955, 'The romantic tale of a sheltered uptown Cocker Spaniel dog and a streetwise downtown Mutt.', 'oVG-vQNbiJQ', 'family,Cartoon', 'yes', NULL),
(2, 'goldfinger.jpg', 'Gold Finger', 1964, 'While investigating a gold magnate\'s smuggling, James Bond uncovers a plot to contaminate the Fort Knox gold reserve.', 'KdQoSK9wibU', 'action,Drama', 'no', NULL),
(3, 'jaws.jpg', 'Jaws', 1975, 'When a killer shark unleashes chaos on a beach community, it\'s up to a local sheriff, a marine biologist, and an old seafarer to hunt the beast down.', 'U1fu_sA7XhE', 'action', 'no', NULL),
(4, 'superman.jpg', 'SuperMan', 1978, 'An alien orphan is sent from his dying planet to Earth, where he grows up to become his adoptive home\'s first and greatest superhero.', 'wOkb8pxtTfk', 'family,Action', 'yes', NULL),
(5, 'batmanrobin.jpg', 'Batman & Robin', 1997, 'Batman and Robin try to keep their relationship together even as they must stop Mr. Freeze and Poison Ivy from freezing Gotham City.', '4RBXypX4qWI', 'action,family', 'no', NULL),
(6, 'littlemermaid.jpg', 'The Little Mermaid', 1989, 'A mermaid princess makes a Faustian bargain in an attempt to become human and win a prince\'s love.', 'ZGZX5-PAwR8', 'comedy,cartoon', 'yes', NULL),
(7, 'shinning.jpg', 'The Shinning', 1980, 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', '5Cb3ik6zP2I', 'action', 'no', NULL),
(8, 'batman.jpg', 'Batman', 1989, 'The Dark Knight of Gotham City begins his war on crime with his first major enemy being Jack Napier, a criminal who becomes the clownishly homicidal Joker.', 'dgC9Q0uhX70', 'action,family', 'no', NULL),
(9, 'homealone.jpg', 'Home Alone', 1990, 'An eight-year-old troublemaker must protect his house from a pair of burglars when he is accidentally left home alone by his family during Christmas vacation.', 'jEDaVHmw7r4', 'comedy,family', 'yes', NULL),
(10, 'lionking.jpg', 'The Lion King', 1994, 'A Lion cub crown prince is tricked by a treacherous uncle into thinking he caused his father\'s death and flees into exile in despair, only to learn in adulthood his identity and his responsibilities.', 'lFzVJEksoDY', 'family,cartoon', 'yes', NULL),
(11, 'waroftheworlds.jpg', 'The War Of The Worlds', 1953, 'A small town in California is attacked by Martians, beginning a worldwide invasion.', '6zrn1pp0NgU', 'Action', 'no', NULL),
(12, 'pinkpanther.jpg', 'Pink Panther', 1963, 'The bumbling Inspector Clouseau travels to Rome to catch a notorious jewel thief known as \"The Phantom\" before he conducts his most daring heist yet: a princess\' priceless diamond with one slight imperfection, known as \"The Pink Panther\".', 'BwA_ar7_qUw', 'Comedy,family', 'no', NULL),
(13, 'youngfrankenstein.jpg', 'Young Frankenstein', 1974, 'An American grandson of the infamous scientist, struggling to prove that his grandfather was not as insane as people believe, is invited to Transylvania, where he discovers the process that reanimates a dead body.', 'mOPTriLG5cU', 'Comedy,family', 'yes', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_music`
--

DROP TABLE IF EXISTS `tbl_music`;
CREATE TABLE IF NOT EXISTS `tbl_music` (
  `music_id` int(11) NOT NULL AUTO_INCREMENT,
  `music_title` varchar(200) NOT NULL,
  `music_artist` varchar(200) NOT NULL,
  `music_year` int(11) NOT NULL,
  `music_audio` varchar(500) NOT NULL,
  `music_album` varchar(200) NOT NULL,
  `for_kids` varchar(3) NOT NULL,
  `locked` int(11) DEFAULT NULL,
  PRIMARY KEY (`music_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_music`
--

INSERT INTO `tbl_music` (`music_id`, `music_title`, `music_artist`, `music_year`, `music_audio`, `music_album`, `for_kids`, `locked`) VALUES
(1, 'Jailhouse Rock', 'Elvis Presley', 1957, 'gj0Rz-uP4Mk', 'elvis.jpg', 'yes', NULL),
(2, 'Put Your Hand On My Shoulder', 'Paul Anka', 1959, 'uvxagNIBVLU', 'anka.jpg', 'yes', NULL),
(3, 'Stand By Me', 'Ben E. King', 1961, 'hwZNL7QVJjE', 'benking.jpg', 'yes', NULL),
(4, 'Rubberband Man', 'Detroit Spinners', 1976, 'jdiB3cISeBk', 'detroitspinning.jpg', 'yes', NULL),
(5, 'The Chain', 'Fleetwood Mac', 1977, 'JDG2m5hN1vo', 'mac.jpg', 'yes', NULL),
(6, 'Rapper\'s Delight', 'The Sugar Hill Gang', 1979, 'rKTUAESacQM', 'sugarhill.jpg', 'no', NULL),
(7, 'I Want It All', 'Queen', 1989, 'hFDcoX7s6rE', 'queen.jpg', 'yes', NULL),
(8, 'Changes', '2Pac', 1998, 'eXvBjCO19QY', '2pac.jpg', 'no', NULL),
(9, 'Kiss From A Rose', 'Seal', 1994, 'AMD2TwRvuoU', 'seal.jpg', 'no', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_series`
--

DROP TABLE IF EXISTS `tbl_series`;
CREATE TABLE IF NOT EXISTS `tbl_series` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_cover` varchar(200) NOT NULL,
  `series_title` varchar(200) NOT NULL,
  `series_year` int(11) NOT NULL,
  `series_storyline` varchar(1000) NOT NULL,
  `series_trailer` varchar(200) DEFAULT NULL,
  `series_filter` varchar(100) DEFAULT NULL,
  `for_kids` varchar(3) NOT NULL,
  `locked` int(11) DEFAULT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_series`
--

INSERT INTO `tbl_series` (`series_id`, `series_cover`, `series_title`, `series_year`, `series_storyline`, `series_trailer`, `series_filter`, `for_kids`, `locked`) VALUES
(1, 'ilovelucy.jpg', 'I Love Lucy', 1951, 'A daffy woman constantly strives to become a star along with her bandleader husband and gets herself in the strangest situations.', 'gO7HicngsLw', 'Comedy', 'yes', NULL),
(2, 'friends.jpg', 'Friends', 1994, 'Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.', 'p8rU4ysw-5M', 'Comedy', 'no', NULL),
(3, 'adventuresofsuperman.jpg', 'The Adventures Of Superman', 1952, 'The Man of Steel fights crime with help from his friends at the Daily Planet.', '5HAhQGha6hA', 'Cartoon,Action', 'yes', 0),
(4, 'gilligansisland.jpg', 'Gilligan’s Island', 1964, 'Seven men and women are stranded on an uncharted island following a torrential storm.', 'cfR7qxtgCgY', 'Comedy', 'yes', NULL),
(5, 'flinstones.jpg', 'The Flinstones', 1960, 'The misadventures of two modern-day Stone Age families, the Flintstones and the Rubbles.', 'EtYUAonE4Ks', 'Cartoon,Comedy', 'yes', NULL),
(6, 'speedracer.jpg', 'SpeedRacer', 1967, 'Teenager Gô Mifune aspires to be the world\'s best race-car champion with the help of his friends, family and his father\'s high-tech race-car, the Mach 5.', 'suCm1w_KTiY', 'Cartoon,Action', 'yes', NULL),
(7, 'everybodylovesraymond.jpg', 'Everybody Loves Raymond', 1996, 'The comical everyday life of sports columnist Ray Barone and his dysfunctional family.', 'e8JN7d1WcbA', 'Comedy', 'no', NULL),
(8, 'macgyver.jpg', 'MacGyver', 1985, 'The adventures of a secret Agent armed with almost infinite scientific resourcefulness.', '8VEGEvDKkeM', 'Action', 'no', NULL),
(9, 'mash.jpg', 'M*A*S*H', 1972, 'The staff of an Army hospital in the Korean War find that laughter is the best way to deal with their situation.', '8VEGEvDKkeM', 'Comedy, Drama', 'no', NULL),
(10, 'wonderwoman.jpg', 'The New Adventures of Wonder Woman', 1975, 'The adventures of the greatest of the female superheroes.', 'G9dV-I7uYd0', 'Cartoon, Action', 'yes', NULL),
(11, 'charlieangels.jpg', 'Charlie\'s Angles', 1976, 'A wealthy mystery man named Charlie runs a detective agency via a speakerphone and his personal assistant, John Bosley. His detectives are three beautiful women, who end up in a variety of difficult situations.', 'OVtVru9KXao', 'Action, Drama', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_blocked` tinyint(1) DEFAULT NULL,
  `first_time` tinyint(1) NOT NULL DEFAULT 1,
  `user_tryCount` int(11) NOT NULL DEFAULT 0,
  `user_avatar` varchar(60) NOT NULL DEFAULT 'fooBar.jpg',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_blocked`, `first_time`, `user_tryCount`, `user_avatar`) VALUES
(2, 'guilherme', 'gui', 'nLLr', '12351', '2020-02-12 19:36:23', '::1', 0, 0, 0, 'fooBar.jpg'),
(24, 'gui', 'foo', 'z+Gq', 'guilhermebueno6@gmail.com', '2020-03-07 06:51:28', '::1', NULL, 0, 0, 'fooBar.jpg'),
(27, 'Guilherme', 'Hi gino, you fuck', 'n8ukKZNUdbs=', 'gui@gui.com', '2020-03-18 20:00:31', 'no', NULL, 1, 0, 'fooBar.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
