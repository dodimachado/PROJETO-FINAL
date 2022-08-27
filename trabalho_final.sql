-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2018 às 23:51
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa_pagamento`
--

CREATE TABLE `despesa_pagamento` (
  `id` int(11) NOT NULL,
  `cli_forn` varchar(50) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `nomearquivo` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despesa_pagamento`
--

INSERT INTO `despesa_pagamento` (`id`, `cli_forn`, `valor`, `data`, `nomearquivo`, `tipo`) VALUES
(1, 'Barcarollo Postos de CombustÃ­veis', '500.00', '2018-12-12', '', 'pagamento'),
(2, 'RGE Sul', '400.00', '2018-12-09', '2trabalho_final.sql', 'despesa'),
(3, 'RGE Sul', '800.00', '2018-12-09', '', 'despesa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `cad_fornecedor`
--
ALTER TABLE `cad_fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Indexes for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `despesa_pagamento`
--
ALTER TABLE `despesa_pagamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_cliente`
--
ALTER TABLE `cad_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_fornecedor`
--
ALTER TABLE `cad_fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `despesa_pagamento`
--
ALTER TABLE `despesa_pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
