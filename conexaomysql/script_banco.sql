create database willian;
use willian;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `cidade` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `sexo` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;