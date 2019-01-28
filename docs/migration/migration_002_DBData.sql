SET SQL_SAFE_UPDATES = 0; 
use cadastro;

UPDATE `cadastro`.`servidor` SET estado_civil='solteiro' where estado_civil ='1'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='casado' where estado_civil ='2'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='divorciado' where estado_civil ='3'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='viúvo' where estado_civil ='4'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='Solteiro(a)' where estado_civil ='solteiro'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='Casado(a)' where estado_civil ='casado'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='Divorciado(a)' where estado_civil ='divorciado'; COMMIT;

UPDATE `cadastro`.`servidor` SET estado_civil='Viúvo(a)' where estado_civil ='viúvo'; COMMIT;

UPDATE `cadastro`.`servidor` SET forma_admissao='Sem Concurso' where forma_admissao ='1'; COMMIT;

UPDATE `cadastro`.`servidor` SET forma_admissao='Em Comissão' where forma_admissao ='2'; COMMIT;

UPDATE `cadastro`.`servidor` SET forma_admissao='Concursado' where forma_admissao ='3'; COMMIT;

UPDATE `cadastro`.`servidor` SET forma_admissao='Contrato' where forma_admissao ='4'; COMMIT;

UPDATE `cadastro`.`servidor` SET regime='Estatutário' where regime ='1'; COMMIT;

UPDATE `cadastro`.`servidor` SET regime='Exclusivamente comissão' where regime ='2'; COMMIT;

UPDATE `cadastro`.`servidor`  SET `deficiente`='Não' where `deficiente` ='0'; COMMIT;

UPDATE `cadastro`.`servidor`  SET `deficiente`='Sim' where `deficiente` ='1'; COMMIT;

UPDATE `cadastro`.`servidor`  SET `sexo`='F' where `sexo` ='1'; COMMIT;

UPDATE `cadastro`.`servidor`  SET `sexo`='M' where `sexo` ='2'; COMMIT;
