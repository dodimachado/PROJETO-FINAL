-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2018 às 01:01
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE `cad_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `cnpj_cliente` varchar(14) NOT NULL,
  `endereco_cliente` varchar(100) NOT NULL,
  `telefone_cliente` varchar(12) NOT NULL,
  `site_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_cliente`
--

INSERT INTO `cad_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `cnpj_cliente`, `endereco_cliente`, `telefone_cliente`, `site_cliente`) VALUES
(1, 'Barcarollo Postos de CombustÃ­veis', 'barcarolloposto@gmail.com', '12345678912345', 'Rua Cylon Rosa, 101', '5136492401', 'barcarolloposto.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_despesa`
--

CREATE TABLE `cad_despesa` (
  `id_despesa` int(11) NOT NULL,
  `nomeforn` varchar(50) NOT NULL,
  `valor_despesa` decimal(10,2) NOT NULL,
  `data_despesa` date NOT NULL,
  `status_despesa` int(11) NOT NULL,
  `nomearquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_despesa`
--

INSERT INTO `cad_despesa` (`id_despesa`, `nomeforn`, `valor_despesa`, `data_despesa`, `status_despesa`, `nomearquivo`) VALUES
(2, 'RGE Sul', '1548.00', '2018-12-20', 1, ''),
(3, 'RGE Sul', '845.00', '0000-00-00', 0, '3Amanda001.xlsx'),
(4, 'RGE Sul', '845.00', '0000-00-00', 0, ''),
(5, 'RGE Sul', '845.00', '0000-00-00', 0, ''),
(6, 'RGE Sul', '540.00', '2012-11-12', 0, ''),
(7, 'RGE Sul', '210.00', '0000-00-00', 0, ''),
(8, 'RGE Sul', '3650.00', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_fornecedor`
--

CREATE TABLE `cad_fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(50) NOT NULL,
  `email_fornecedor` varchar(50) NOT NULL,
  `cnpj_fornecedor` varchar(14) NOT NULL,
  `endereco_fornecedor` varchar(100) NOT NULL,
  `telefone_fornecedor` varchar(12) NOT NULL,
  `site_fornecedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_fornecedor`
--

INSERT INTO `cad_fornecedor` (`id_fornecedor`, `nome_fornecedor`, `email_fornecedor`, `cnpj_fornecedor`, `endereco_fornecedor`, `telefone_fornecedor`, `site_fornecedor`) VALUES
(1, 'RGE Sul', 'regesul@gmail.com', '12345678912345', 'Rua Osvaldo Aranha, 123', '05136328967', 'rgesul.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_pagamentos`
--

CREATE TABLE `cad_pagamentos` (
  `id_pagamentos` int(11) NOT NULL,
  `nomecli` varchar(50) NOT NULL,
  `valor_pagamento` decimal(10,2) NOT NULL,
  `data_pagamento` date NOT NULL,
  `status_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_pagamentos`
--

INSERT INTO `cad_pagamentos` (`id_pagamentos`, `nomecli`, `valor_pagamento`, `data_pagamento`, `status_pagamento`) VALUES
(1, 'Barcarollo Postos de CombustÃ­veis', '10000.00', '2018-11-30', 0),
(2, 'Barcarollo Postos de CombustÃ­veis', '630.00', '2018-11-20', 0),
(3, 'Barcarollo Postos de CombustÃ­veis', '870.00', '2018-11-08', 0),
(4, 'Barcarollo Postos de CombustÃ­veis', '870.00', '2018-11-08', 0),
(5, 'Barcarollo Postos de CombustÃ­veis', '630.00', '2018-11-20', 0),
(6, 'Barcarollo Postos de CombustÃ­veis', '6670.00', '2018-11-05', 0),
(7, 'Barcarollo Postos de CombustÃ­veis', '55.00', '2018-11-13', 0),
(8, 'Barcarollo Postos de CombustÃ­veis', '6670.00', '2018-11-05', 0),
(9, 'Barcarollo Postos de CombustÃ­veis', '500.00', '2018-11-20', 0),
(10, 'Barcarollo Postos de CombustÃ­veis', '6670.00', '2018-11-05', 0),
(11, 'Barcarollo Postos de CombustÃ­veis', '890.00', '2018-12-06', 0),
(12, 'Barcarollo Postos de CombustÃ­veis', '840.00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuario`
--

CREATE TABLE `cad_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Douglas William Machado', 'dodimachado@gmail.com', 'dodi123456'),
(2, 'raul', 'raulacunha@hotmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `cad_despesa`
--
ALTER TABLE `cad_despesa`
  ADD PRIMARY KEY (`id_despesa`);

--
-- Indexes for table `cad_fornecedor`
--
ALTER TABLE `cad_fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Indexes for table `cad_pagamentos`
--
ALTER TABLE `cad_pagamentos`
  ADD PRIMARY KEY (`id_pagamentos`);

--
-- Indexes for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_despesa`
--
ALTER TABLE `cad_despesa`
  MODIFY `id_despesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cad_fornecedor`
--
ALTER TABLE `cad_fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_pagamentos`
--
ALTER TABLE `cad_pagamentos`
  MODIFY `id_pagamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
