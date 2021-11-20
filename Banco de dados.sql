-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2021 às 17:56
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caixa_de_sugestao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_de_sugestao`
--

CREATE TABLE `caixa_de_sugestao` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `CURSO` varchar(60) NOT NULL,
  `TIPO` varchar(60) NOT NULL,
  `COMENTARIO` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa_de_sugestao`
--

INSERT INTO `caixa_de_sugestao` (`ID`, `NOME`, `CURSO`, `TIPO`, `COMENTARIO`) VALUES
(1, 'Everton', 'Desenvolvimento de Sistemas', 'Elogio', 'Ótimo curso'),
(2, 'Leo', 'Marketing', 'Elogio', 'Legal'),
(3, 'Everton', 'Marketing', 'Elogio', 'Legal'),
(4, 'Izabela', 'Desenvolvimento de Sistemas', 'Sugestão', 'Poderia melhorar'),
(5, 'Caio', 'Marketing', 'Elogio', 'Excelente curso'),
(6, 'Everton', 'Marketing', 'Reclamação', 'Muito chato'),
(19, 'Ricardo', 'Meio Ambiente', 'Elogio', 'Um dos melhores cursos que já vi !!!'),
(20, 'Ricardo', 'Meio Ambiente', 'Elogio', 'Um dos melhores cursos que já vi !!!');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caixa_de_sugestao`
--
ALTER TABLE `caixa_de_sugestao`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixa_de_sugestao`
--
ALTER TABLE `caixa_de_sugestao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
