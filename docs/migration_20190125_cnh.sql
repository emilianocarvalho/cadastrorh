SET SQL_SAFE_UPDATES = 0; 
use cadastro;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `cnh_categoria` `cnh_categoria` VARCHAR(4) NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `tipo_sangue` `tipo_sangue` VARCHAR(3) NULL DEFAULT NULL ;
