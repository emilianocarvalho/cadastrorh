USE `cadastro`;

ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `data_alteracao` `data_alteracao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `forma_admissao` `forma_admissao` VARCHAR(20) NULL DEFAULT NULL;
ALTER TABLE `cadastro`.`servidor` 
CHANGE COLUMN `nacionalidade` `nacionalidade` VARCHAR(45) NULL DEFAULT NULL COMMENT '\n' ;

