SET SQL_SAFE_UPDATES = 0; 
use cadastro;
ALTER TABLE servidor CHANGE COLUMN anotacoes nota;
ALTER TABLE servidor CHANGE COLUMN e_mail email;
ALTER TABLE servidor CHANGE COLUMN anotacoes nota;

ALTER TABLE servidor ADD COLUMN `status` VARCHAR(10) NULL;