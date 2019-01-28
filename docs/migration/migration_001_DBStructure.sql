use cadastro;

ALTER TABLE `cadastro`.`servidor` CHANGE COLUMN `e_mail` `email` VARCHAR(100) ;

ALTER TABLE `cadastro`.`servidor` ADD COLUMN `status` VARCHAR(10) ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `anotacoes` `nota` VARCHAR(246);

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `deficiente` `deficiente` VARCHAR(3);

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `data_alteracao` `data_alteracao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `forma_admissao` `forma_admissao` VARCHAR(20) NULL DEFAULT NULL;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `nacionalidade` `nacionalidade` VARCHAR(45) NULL DEFAULT NULL COMMENT '\n' ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `foto` `foto` VARCHAR(200) NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `nota` `nota` VARCHAR(246) CHARACTER SET 'utf8' NULL DEFAULT NULL ,
ADD COLUMN `tipo_sangue` INT NULL AFTER `conta_corrente`,
ADD COLUMN `cnh` INT NULL AFTER `tipo_sangue`,
ADD COLUMN `cnh_categoria` INT NULL AFTER `cnh`;

ALTER TABLE `cadastro`.`servidor` 
ADD COLUMN `deficiente_tipo` VARCHAR(18) NULL AFTER `cnh_categoria`;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `reservista` `reservista` VARCHAR(37) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `bairro` `bairro` VARCHAR(27) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `carteiratrabalho` `carteiratrabalho` VARCHAR(25) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `identidade` `identidade` VARCHAR(25) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `sexo` `sexo` VARCHAR(1) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `estado_civil` `estado_civil` VARCHAR(14) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `regime` `regime` VARCHAR(24) CHARACTER SET 'utf8' NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `cnh_categoria` `cnh_categoria` VARCHAR(4) NULL DEFAULT NULL ;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `tipo_sangue` `tipo_sangue` VARCHAR(3) NULL DEFAULT NULL ;