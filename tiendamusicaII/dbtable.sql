
CREATE TABLE `usuario` (
  `nick` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `dir_postal` varchar(200) NOT NULL,
  `cod_postal` int(5) NOT NULL,
  `provincia` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dni` char(9) NOT NULL UNIQUE,
  `visa` int(20) NOT NULL,
  `observaciones` varchar(255),
  `envio` varchar(7) NOT NULL,
  PRIMARY KEY (`nick`)
) ;
