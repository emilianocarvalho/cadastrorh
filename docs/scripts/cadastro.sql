-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2018 �s 12:27
-- Vers�o do servidor: 10.1.35-MariaDB
-- vers�o do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `cadastro`
--
CREATE DATABASE IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_clientes`
--

DROP TABLE IF EXISTS `tab_clientes`;
CREATE TABLE IF NOT EXISTS `tab_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `matricula` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pai` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `mae` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nacionalidade` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naturalidade` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado_civil` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero_dependente` int(20) DEFAULT NULL,
  `bairro` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carteiratrabalho` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identidade` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zona` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secao` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pis` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservista` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `escolar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instituicao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curso` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deficiente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nota` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `funcao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `forma_admissao` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regime` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banco` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agencia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conta_corrente` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tab_clientes`
--

INSERT INTO `tab_clientes` (`id`, `nome`, `cpf`, `email`, `telefone`, `celular`, `data_nascimento`, `status`, `foto`, `data_cadastro`, `data_alteracao`, `matricula`, `pai`, `mae`, `rua`, `numero`, `sexo`, `nacionalidade`, `naturalidade`, `estado`, `estado_civil`, `numero_dependente`, `bairro`, `cep`, `complemento`, `cidade`, `whatsapp`, `carteiratrabalho`, `identidade`, `titulo`, `zona`, `secao`, `pis`, `reservista`, `escolar`, `instituicao`, `curso`, `deficiente`, `nota`, `cargo`, `funcao`, `data_admissao`, `forma_admissao`, `regime`, `setor`, `banco`, `agencia`, `conta_corrente`) VALUES
(19, 'Alisson da Costa', '068.350.17473', 'djalisson2@gmail.com', '8396923678', '83988264367', '1989-04-04', 'Ativo', '10102018_Alisson para face.jpg', '2018-10-10 19:23:45', '0000-00-00 00:00:00', '1430301', 'Sem pai', 'Marileide da Costa', 'Rua jo�o dantas de almeida', '120', 'Masculino', 'Brasil - Brasileiro', 'Penssoense', 'Para�ba PB', 'Solteiro', 4, 'Bairro das Industria', '58067226', 'bloco j', 'Jo�o Pessoa', '83988264367', 'N�o tem', '00000000000000000000', '4444.4444.4444', '0', '0', '44444444444', 'N�o tem', 'Ensino M�dio completo', 'UNIP', 'Pendente', '', '', 'T.I', 'Analista de Sistema', '2001-01-01', 'Em Comissa', 'Exclusivam', 'T.I', 'bradesco', '22222222222222222222', '22222222222222222222'),
(21, 'TESTE', '00000000000', 'dj@hotmail.com', '0000000000', '00000000000', '1999-04-04', 'Inativo', 'padrao.jpg', '2018-10-15 15:10:18', '0000-00-00 00:00:00', '0000000', 'Sem pai', 'Teste m', 'Rua jo�o dantas de almeida', '111', 'Masculino', 'Brasileiro', 'Penssoense', 'Mato Grosso MT', 'Divorcio', 1, 'Mandacaru', '00000000', '88888888888888888888888888888888888', 'Jo�o Pessoa', '', '22222222222222222222', '22222222222222222222', '2222.2222.22222', '222', '2222', '22222222222', '22222222222222222222', 'Ensino M�dio completo', '5555555555555555555555555555555555555555555555', 'Pendente', '', '', 'T.I', 'Analista de Sistema', '2000-04-04', 'Sem Concur', 'Estatuario', '', NULL, NULL, NULL),
(37, 'Teste 2', '222.222.22222', '2@gmail.com', '2222222222', '22222222222', '1990-02-02', 'Inativo', 'padrao.jpg', '2018-11-05 11:58:26', '0000-00-00 00:00:00', '2222222', 'pai 2', 'm�e 2', 'Rua 2', '2', 'Masculino', 'Brasil - Brasileiro', 'campinense', 'Para�ba PB', 'Viuvo', 2, 'bairro 2', '22222222', 'bloco 2', 'cidade 2', '', '22222222222222222222', '22222222222222222222', '2222.2222.2222', '222', '2222', '22222222222', '22222222222222222222', 'n�o 2', 'n�o 2', 'n�o 2', '', '', 'motorista', 'motorista', '2018-01-01', 'Sem Concur', 'Exclusivam', 'motorista', NULL, NULL, NULL),
(38, 'nome 3', '333.333.33333', '3@gmail.com', '3333333333', '33333333333', '1800-02-02', 'Inativo', 'padrao.jpg', '2018-11-05 14:58:27', '0000-00-00 00:00:00', '3333333', 'pai 3', 'm�e 3', 'rua 3', '3', 'Feminino', 'Brasil - Brasileiro', 'Campinense', 'Para�ba PB', 'Viuvo', 3, 'bairro 3', '33333333', '', 'cidade 3', '', '33333333333333333333', '33333333333333333333', '3333.3333.3333', '333', '3333', '33333333333', '33333333333333333333', 'n�o 3', 'n�o 3', 'n�o 3', '', '', 'Tecnico', 'N�o sabe 3', '2000-03-03', 'Concurso', 'estatut�ri', 'motorista', 'banco do brasil', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `sobrenome`, `pais`, `estado`, `cidade`, `email`, `senha`, `id`) VALUES
('Alisson', 'Costa', 'Brasil', 'Para�ba', 'Jo�o Pessoa', 'djalisson2@gmail.com', '123', 4);
COMMIT;
