-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27-Nov-2021 às 17:17
-- Versão do servidor: 10.5.12-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id17726520_caixa_de_sugestao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_de_sugestao`
--

CREATE TABLE `caixa_de_sugestao` (
  `COD_ALUNO` int(11) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `CURSO` varchar(60) NOT NULL,
  `TIPO` varchar(60) NOT NULL,
  `COMENTARIO` varchar(120) NOT NULL,
  `HORA` time DEFAULT curtime(),
  `DATA` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa_de_sugestao`
--

INSERT INTO `caixa_de_sugestao` (`COD_ALUNO`, `NOME`, `CURSO`, `TIPO`, `COMENTARIO`, `HORA`, `DATA`) VALUES
(1, 'Everton', 'Desenvolvimento de Sistemas', 'Elogio', 'Ótimo curso', '21:55:24', '2021-11-25'),
(2, 'Leo', 'Marketing', 'Elogio', 'Maneiro, ótimo curso ', '21:55:24', '2021-11-25'),
(3, 'Everton', 'Marketing', 'Elogio', 'Legal', '21:55:24', '2021-11-25'),
(4, 'Izabela', 'Desenvolvimento de Sistemas', 'Sugestão', 'Poderia melhorar', '21:55:24', '2021-11-25'),
(5, 'Everton', 'Marketing', 'Comentário', 'Bem Legal', '21:55:24', '2021-11-25'),
(6, 'Everton', 'Desenvolvimento de Sistemas', 'Elogio', 'Excelente professores!!!!', '21:55:24', '2021-11-25'),
(7, 'Augusto', 'Administação', 'Reclamação', 'Muita apresentação!!!', '21:55:24', '2021-11-25'),
(8, 'Everton', 'Desenvolvimento de Sistemas', 'Comentário', 'Legal !!!!!!!!!!!!!!', '21:55:24', '2021-11-25'),
(9, 'Yago', 'Meio Ambiente', 'Elogio', 'Legal!!!!!!!!!!!!!', '21:55:24', '2021-11-25'),
(10, 'Miguel', 'Administação', 'Reclamação', 'Horrivel !!!', '22:05:23', '2021-11-25'),
(11, 'Miguel', 'Meio Ambiente', 'Comentário', 'Poderia ser melhor !!!!', '01:16:35', '2021-11-26'),


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caixa_de_sugestao`
--
ALTER TABLE `caixa_de_sugestao`
  ADD PRIMARY KEY (`COD_ALUNO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixa_de_sugestao`
--
ALTER TABLE `caixa_de_sugestao`
  MODIFY `COD_ALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
