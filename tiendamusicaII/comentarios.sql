CREATE TABLE `COMENTARIO` (
  `nick` varchar(15) NOT NULL,
  `hora` TIME NOT NULL,
  `fecha` DATE NOT NULL,
  `genero` varchar(30) NOT NULL,
  `texto` varchar(255) NOT NULL,
  PRIMARY KEY (`nick`,`hora`,`fecha`)
) ;
