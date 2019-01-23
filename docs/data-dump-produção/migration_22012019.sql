ALTER TABLE `cadastro`.`tb_clientes_import` 
CHANGE COLUMN `nota` `nota` VARCHAR(246) CHARACTER SET 'utf8' NULL DEFAULT NULL ,
ADD COLUMN `tipo_sangue` INT NULL AFTER `conta_corrente`,
ADD COLUMN `cnh` INT NULL AFTER `tipo_sangue`,
ADD COLUMN `cnh_categoria` INT NULL AFTER `cnh`;

ALTER TABLE `cadastro`.`tb_clientes_import` 
ADD COLUMN `deficiente_tipo` VARCHAR(18) NULL AFTER `cnh_categoria`;

ALTER TABLE `cadastro`.`tb_clientes_import` 
CHANGE COLUMN `reservista` `reservista` VARCHAR(37) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`tb_clientes_import` 
CHANGE COLUMN `bairro` `bairro` VARCHAR(27) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`tb_clientes_import` 
CHANGE COLUMN `carteiratrabalho` `carteiratrabalho` VARCHAR(25) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`tb_clientes_import` 
CHANGE COLUMN `identidade` `identidade` VARCHAR(25) CHARACTER SET 'utf8' NULL DEFAULT NULL ;
