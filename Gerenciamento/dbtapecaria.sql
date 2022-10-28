-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2018 às 17:01
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtapecaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbandeiracartao`
--

CREATE TABLE `tbbandeiracartao` (
  `Id_Bandeira` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadcliente`
--

CREATE TABLE `tbcadcliente` (
  `Id_Cliente` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rg` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbcadcliente`
--

INSERT INTO `tbcadcliente` (`Id_Cliente`, `nome`, `rg`, `cpf`, `endereco`, `telefone`, `celular`, `email`, `bairro`, `numero`, `complemento`, `cep`, `senha`) VALUES
(1, 'ffff', 2, 1, 'qqqqq', '12', '12', 'asfdsf@sfdsdgdfg', 'wwwwwww', 121, 'sfsdf', '1', 'renovar123'),
(2, 'adsf', 12, 3, 'fdgfdsgsfh', '142', '3', 'em@em.com', 'dsgdfs', 12, 'EFDS', '423', 'renovar123'),
(3, 'www', 111, 12, 'ssss', '321', '3', 'as@er', 'sfdgf', 32, 'DSF', '43', 'renovar123'),
(4, 'sss', 33, 33, 'wewrer', '33', '2', 'ss@aa', 'dgfd', 12, 'ret', '32', 'renovar123'),
(5, 'asasasa', 33, 33, 'wewrer', '33', '2', 'ss@aaq', 'dgfd', 12, 'ret', '32', 'renovar123'),
(6, 'laisg', 45, 67, 'gdfsgbfabgd', '858', '848', 'rr@rr', 'fsdgafs', 12, 'fvsbvdfb', '1', '001'),
(7, 'lais', 564772999, 2147483647, 'jajjajajja', '(11) 4901-1275', '(11) 9976-28274', 'lais@ex', 'sss', 122, 'ssss', '12345678', '$2y$08$.aJa41HVyaZNhHW4fGeoi.zEDHRDKLDnQqcv9bWN9p5wkd/9hLxJ6'),
(8, 'aaaa', 12345678, 1234567890, 'rweterg', '(12) 3456-8907', '(24) 3546-54786', 'aa@aa', 'qqq', 11, 'wqe', '1123243', '$2y$08$CpBOAxiC.6sHPr/aHbtKdO8cOCMihu3P9TKP.CcpKRnZYtHJCVy0e'),
(9, 'laisaaaaa', 56, 123, 'hfghgjghj', '(11) 1111-1222', '(22) 2222-44444', 'lala@lala', 'sfdfg', 123, 'qwer', '22222', '$2y$08$wvMBXranZkewhXCrKp6I6Oc/BP0Cd8o8CBxN0t2c/1lkLTg/1AiKa'),
(10, 'laisaxxx', 12, 233, 'snbfisd', '(11) 1233-2547', '(53) 4565-62463', 'lala@lala', 'qwewqe', 122, 'www', '12435', '$2y$08$3FdNATcGW2iuMn4GFVPElOPwQU793GKpoAH0nUYvI./qWIk6S13Dm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcartao`
--

CREATE TABLE `tbcartao` (
  `titular` int(11) NOT NULL,
  `num_cartao` int(11) NOT NULL,
  `cod_seg` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `bandeira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcompra`
--

CREATE TABLE `tbcompra` (
  `Id_Compra` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `protocolo` int(11) NOT NULL,
  `opcao_pagamento` int(11) DEFAULT NULL,
  `orcamento` int(11) DEFAULT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tborcamento`
--

CREATE TABLE `tborcamento` (
  `Id_Orcamento` int(11) NOT NULL,
  `opcao_serv` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `arquivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tborcamento`
--

INSERT INTO `tborcamento` (`Id_Orcamento`, `opcao_serv`, `nome`, `email`, `telefone`, `celular`, `mensagem`, `arquivo`) VALUES
(3, 1, 'fff', 'qq@ww', '12345678', '123456789', 'errerrerr', NULL),
(4, 2, 'fff', 'qq@ww', '0', '0', 'errerrerr', NULL),
(5, 3, 'lalal', 'qq@ww', '(11) 9090-9090', '(11) 9090-90909', 'errerrerraa', NULL),
(6, 2, 'da', 'daniel@daniel.com', '(11) 5555-8888', '954623568', 'adsa', NULL),
(7, 2, 'Daniel', 'daniel@daniel.com', '(11) 5555-1111', '943145280', 'Vai corinthians', NULL),
(8, 2, 'ccvbvc', 'dfgf@sdfdfg', '6456546', '565756', 'dfghfhfg', NULL),
(9, 3, 'bvbvbvbvbvbvb', 'vbvbvbvbv@bvbvbvbvb', '(11) 1111-1111', '(11) 1111-11111', '&lt;script&gt;alert(\'eaemen\');&lt;/script&gt;', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpagamento`
--

CREATE TABLE `tbpagamento` (
  `Id_Pagamento` int(11) NOT NULL,
  `opcao_pag` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbpagamento`
--

INSERT INTO `tbpagamento` (`Id_Pagamento`, `opcao_pag`) VALUES
(1, 'debito'),
(2, 'credito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `Id_Produto` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `detalhes` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

CREATE TABLE `tbservico` (
  `Id` int(11) NOT NULL,
  `Servico` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbservico`
--

INSERT INTO `tbservico` (`Id`, `Servico`) VALUES
(1, 'Sofá'),
(2, 'Sala'),
(3, 'Puff'),
(4, 'Sofá cama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbandeiracartao`
--
ALTER TABLE `tbbandeiracartao`
  ADD PRIMARY KEY (`Id_Bandeira`);

--
-- Indexes for table `tbcadcliente`
--
ALTER TABLE `tbcadcliente`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indexes for table `tbcartao`
--
ALTER TABLE `tbcartao`
  ADD KEY `titular` (`titular`),
  ADD KEY `bandeira` (`bandeira`);

--
-- Indexes for table `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD KEY `opcao_pagamento` (`opcao_pagamento`),
  ADD KEY `orcamento` (`orcamento`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `produto` (`produto`),
  ADD KEY `preco` (`preco`);

--
-- Indexes for table `tborcamento`
--
ALTER TABLE `tborcamento`
  ADD PRIMARY KEY (`Id_Orcamento`),
  ADD KEY `opcao_serv` (`opcao_serv`);

--
-- Indexes for table `tbpagamento`
--
ALTER TABLE `tbpagamento`
  ADD PRIMARY KEY (`Id_Pagamento`);

--
-- Indexes for table `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`Id_Produto`);

--
-- Indexes for table `tbservico`
--
ALTER TABLE `tbservico`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcadcliente`
--
ALTER TABLE `tbcadcliente`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbcompra`
--
ALTER TABLE `tbcompra`
  MODIFY `Id_Compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tborcamento`
--
ALTER TABLE `tborcamento`
  MODIFY `Id_Orcamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbpagamento`
--
ALTER TABLE `tbpagamento`
  MODIFY `Id_Pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `Id_Produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbservico`
--
ALTER TABLE `tbservico`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbcartao`
--
ALTER TABLE `tbcartao`
  ADD CONSTRAINT `tbcartao_ibfk_1` FOREIGN KEY (`titular`) REFERENCES `tbcadcliente` (`Id_Cliente`),
  ADD CONSTRAINT `tbcartao_ibfk_2` FOREIGN KEY (`bandeira`) REFERENCES `tbbandeiracartao` (`Id_Bandeira`);

--
-- Limitadores para a tabela `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD CONSTRAINT `tbcompra_ibfk_1` FOREIGN KEY (`opcao_pagamento`) REFERENCES `tbpagamento` (`Id_Pagamento`),
  ADD CONSTRAINT `tbcompra_ibfk_2` FOREIGN KEY (`orcamento`) REFERENCES `tborcamento` (`Id_Orcamento`),
  ADD CONSTRAINT `tbcompra_ibfk_3` FOREIGN KEY (`cliente`) REFERENCES `tbcadcliente` (`Id_Cliente`),
  ADD CONSTRAINT `tbcompra_ibfk_4` FOREIGN KEY (`produto`) REFERENCES `tbproduto` (`Id_Produto`),
  ADD CONSTRAINT `tbcompra_ibfk_5` FOREIGN KEY (`preco`) REFERENCES `tbproduto` (`Id_Produto`);

--
-- Limitadores para a tabela `tborcamento`
--
ALTER TABLE `tborcamento`
  ADD CONSTRAINT `tborcamento_ibfk_1` FOREIGN KEY (`opcao_serv`) REFERENCES `tbservico` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
