
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `ROLE` varchar(10) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PWD` varchar(8) NOT NULL,
  `FULLNAME` varchar(255) NOT NULL,
  `PHONE` int(8) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
