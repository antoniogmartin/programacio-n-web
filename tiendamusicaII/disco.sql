CREATE TABLE `DISCO` (
  `nombre_disco` VARCHAR(60) NOT NULL,
  `autor` VARCHAR(60) NOT NULL,
  `genero` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`nombre_disco`,`autor`)
) ;
