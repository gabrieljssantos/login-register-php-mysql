SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(123) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `setor` varchar(20) NOT NULL,

  UNIQUE KEY `id` (`id`)
) ENGINE=MEMORY AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


COMMIT;

