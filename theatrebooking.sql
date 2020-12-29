-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2020 at 09:27 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatrebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `Movie_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MovieName` varchar(100) DEFAULT NULL,
  `Director` varchar(100) DEFAULT NULL,
  `Rating` varchar(100) DEFAULT NULL,
  `RunTime` varchar(255) DEFAULT NULL,
  `Synopsis` varchar(1000) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `taken` varchar(100) DEFAULT NULL,
  `open` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Movie_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_Id`, `MovieName`, `Director`, `Rating`, `RunTime`, `Synopsis`, `Image`, `taken`, `open`) VALUES
(1, 'Venom', 'Ruben Fleischer', '6.7', '1h 52min', 'A failed reporter is bonded to an alien entity, one of many symbiotes who have invaded Earth. But the being takes a liking to Earth and decides to protect it.', 'm-5.jpg', '4', '80'),
(2, 'Coco', 'Lee Unkrich', '8.4', '1h 45min', 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.', 'l-5.jpg', '5', '80'),
(3, 'Toy Story 3', 'Lee Unkrich', '8.3', '1h 43min', 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it\'s up to Woody to convince the other toys that they weren\'t abandoned and to return home.', 'l-4.jpg', '0', '80'),
(4, 'Inception', 'Christopher Nolan', '8.8', '2h 28min', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 'm-3.jpg', '0', '80'),
(5, 'Croods', 'Kirk DeMicco', '7.2', '1h 38min', 'After their cave is destroyed, a caveman family must trek through an unfamiliar fantastical world with the help of an inventive boy.', 'l-3.jpg', '8', '80'),
(6, 'Peninsula', 'Sang-ho Yeon', '5.4', '1h 56min', 'A zombie virus has in the last 4 years spread to all South Korea. 4 Koreans in HK sail thru the blockade to Incheon for USD20,000,000 on a truck.\r\n', 'm-2.jpg', '0', '80'),
(7, 'Iron Man 3', 'Sujeev Uthayakumar', '7.2', '2h 10min', 'Men touch him for hours at a time, caught on video.When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 'm-4.jpg', '0', '80'),
(8, 'Star Wars', ' J.J. Abrams', '6.6', '2h 21min', 'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.\r\n', 'l-6.jpg', '7', '80'),
(9, 'Rogue One', 'Gareth Edwards\r\n', '7.8', '2h 13min ', 'The daughter of an Imperial scientist joins the Rebel Alliance in a risky move to steal the plans for the Death Star.', 'l-7.jpg', '0', '80'),
(10, 'Godzilla', 'Michael Dougherty', '6.0', '2h 12min ', 'The crypto-zoological agency Monarch faces off against a battery of god-sized monsters, including the mighty Godzilla, who collides with Mothra, Rodan, and his ultimate nemesis, the three-headed King Ghidorah.', 's-1.jpg', '0', '80'),
(11, 'Beauty and ...', 'Bill Condon', '7.1', '2h 9min', 'A selfish Prince is cursed to become a monster for the rest of his life, unless he learns to fall in love with a beautiful young woman he keeps prisoner.', 's-3.jpg', '0', '80'),
(12, 'Kin', 'Josh Baker', '5.8', '1h 42min', 'Chased by a vengeful criminal, the feds and a gang of otherworldly soldiers, an ex-con and his adopted teenage brother go on the run with a weapon of mysterious origin as their only protection.', 'm-1.jpg', '0', '80');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Username`, `Password`, `EmailAddress`) VALUES
(1, 'Sujeev', 'Uthayakumar', 'sujeev115', '1234', 'sujeev115115@gmail.com'),
(2, 'Zirak', 'Mughal', 'zirak115', '1234', 'zirakmughal@gmail.com'),
(3, 'Abdullah', 'Waseem', 'abdullah115', '1234', 'abdullahwaseem@gmail.com'),
(4, 'N/A', 'N/A', 'admin', 'password', 'filmfactory.help@gmail.com'),
(5, 'test', 'test', '123', '123', '123'),
(6, 'Sujeev1', 'Uthayakumar', 'zirak115115', '1234', 'sujeev115115115@gmail.com'),
(7, 'test2', 'test2', 'test2', '1234', 'test2@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
