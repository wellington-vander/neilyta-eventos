-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2022 às 02:36
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_neilyta_eventos`
--
CREATE DATABASE IF NOT EXISTS `bd_neilyta_eventos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_neilyta_eventos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adm`
--

CREATE TABLE `tb_adm` (
  `id_adm` int(11) NOT NULL,
  `login_adm` varchar(60) NOT NULL,
  `senha_adm` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_adm`
--

INSERT INTO `tb_adm` (`id_adm`, `login_adm`, `senha_adm`) VALUES
(1, 'admin', '$2y$10$TeLGakP0ki3PxpcpaIBqOuSgBcRUqC7aSsgp7eokEd/ara2gLioW.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `cpf_user` varchar(14) NOT NULL,
  `nome_user` varchar(60) NOT NULL,
  `sobre_user` varchar(60) NOT NULL,
  `email_user` varchar(60) NOT NULL,
  `telefone_user` varchar(20) NOT NULL,
  `cep_user` int(11) NOT NULL,
  `estado_user` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `cidade_user` varchar(50) NOT NULL,
  `bairro_user` varchar(50) NOT NULL,
  `endereco_user` varchar(80) NOT NULL,
  `numero_user` int(11) NOT NULL,
  `complemento_user` varchar(150) DEFAULT NULL,
  `por_onde_soube` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `cpf_user`, `nome_user`, `sobre_user`, `email_user`, `telefone_user`, `cep_user`, `estado_user`, `cidade_user`, `bairro_user`, `endereco_user`, `numero_user`, `complemento_user`, `por_onde_soube`) VALUES
(6, '121.212.121-21', 'Maria', 'Luciana', 'marial@exemplo.com', '(49) 9923-45678', 89370000, 'SC', 'Papanduva', 'Lages ', 'Rua Antônio Caldas', 1, '', 'Professor'),
(14, '509.773.900-79', 'Leonardo', 'Gomes', 'leozinho@exemplo.com', '(88) 93980-5679', 1153000, 'SP', 'São Paulo', 'Barra Funda', 'Rua Vitorino Carmilo', 41, '', 'Colegas'),
(16, '519.393.950-77', 'Erin', 'Parker', 'kaboom@exemplo.com', '(21) 5398-06654', 20021120, 'RJ', 'Rio de Janeiro', 'Centro', 'Avenida Franklin Roosevelt', 180, '', 'Professores'),
(18, '474.020.640-42', 'Iasmin', 'Ozorio', 'iasmin-ozorio@exemplo.com', '(19) 3192-1417', 29795000, 'ES', 'Águia Branca', 'Pedra Torta', 'Rua Principal', 234, '', 'Através de Cartazes'),
(19, '102.503.090-76', 'Hellen', 'Albuquerque', 'hellen-albu@exemplo.com', '(79) 2438-9788', 49000179, 'SE', 'Aracaju', 'Aruana', 'Rua Manoel Messias Melo', 567, '', 'Colegas'),
(20, '629.010.480-21', 'Jóni', 'Neto', 'neto-joni@exemplo.com', '(64) 3934-9579', 75580000, 'GO', 'Panamá', 'Centro', 'Avenida do Lami', 276, '', 'Professores'),
(21, '107.267.900-01', 'Viriato', 'Rosário', 'viriato-ros@exemplo.com', '(81) 3292-8425', 55850000, 'PE', 'Vicência', 'Centro', '13 de Maio', 24, '', 'Familiares'),
(22, '730.640.930-10', 'Raquel', 'Pimenta', 'pimenta-raquel@exemplo.com', '(75) 3266-6227', 46840000, 'BA', 'Ibiquera', 'Centro', 'Rua Bananeira', 34, 'Ao lado oficina ', 'Amigos da Igreja'),
(23, '865.102.770-26', 'Virgínea', 'Orriça', 'virgi-orriça@exemplo.com', '(67) 3093-6261', 79985000, 'MS', 'Japorã', 'Japorã', 'Rua 1', 54, '', 'Através de Cartazes');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_adm`
--
ALTER TABLE `tb_adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `cpf_user` (`cpf_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_adm`
--
ALTER TABLE `tb_adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
