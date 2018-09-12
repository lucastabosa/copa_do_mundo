-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2018 às 21:57
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paises`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comidas tipicas`
--

CREATE TABLE `comidas tipicas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `regiao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curiosidades`
--

CREATE TABLE `curiosidades` (
  `id` int(11) NOT NULL,
  `titulo` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_selecao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_selecao` int(11) NOT NULL,
  `imagem` int(11) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecao`
--

CREATE TABLE `selecao` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `id_selecao` int(11) NOT NULL,
  `referencia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comidas tipicas`
--
ALTER TABLE `comidas tipicas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curiosidades`
--
ALTER TABLE `curiosidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forech_key` (`id_selecao`);

--
-- Indexes for table `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forech_key_jogadores_selecao` (`id_selecao`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selecao`
--
ALTER TABLE `selecao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forech_key_selecao_pais` (`id_pais`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forech_key_videos_selecao` (`id_selecao`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curiosidades`
--
ALTER TABLE `curiosidades`
  ADD CONSTRAINT `forech_key` FOREIGN KEY (`id_selecao`) REFERENCES `selecao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD CONSTRAINT `forech_key_jogadores_selecao` FOREIGN KEY (`id_selecao`) REFERENCES `selecao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `selecao`
--
ALTER TABLE `selecao`
  ADD CONSTRAINT `forech_key_selecao_pais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `forech_key_videos_selecao` FOREIGN KEY (`id_selecao`) REFERENCES `selecao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
