
SET SQL_SAFE_UPDATES = 0; 
use cadastro;

UPDATE `cadastro`.`servidor`  SET `deficiente`='Não' where `deficiente` ='0'; COMMIT;

UPDATE `cadastro`.`servidor`  SET `deficiente`='Sim' where `deficiente` ='1'; COMMIT;