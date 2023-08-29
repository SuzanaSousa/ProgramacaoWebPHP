-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: [fd77:f3e2:38a5:c000:15:272b:95b2:cbda]
-- Tempo de geração: 20/06/2023 às 19:41
-- Versão do servidor: 10.5.9-MariaDB-1:10.5.9+maria~focal-log
-- Versão do PHP: 7.0.33-50+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `devtechsolucoes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dt_nasc` date NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `whatsapp` varchar(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `nome`, `sexo`, `dt_nasc`, `nickname`, `senha`, `whatsapp`, `email`, `cpf`) VALUES
(1, 'Anderson Marques da Silva', 'M', '2023-06-09', 'ander', '$2y$10$etSIWhDPI3lJYPEGwvq9xO2xo1HV.Q.4NswFO2AuZ0EI4eGT4wR9i', '18997752582', 'andermarsil@gmail.com', '11111111100'),
(14, 'Brendon Feitosa', 'M', '1996-07-16', 'Brendon', '$2y$10$rIzjb3aYaQoM0XBjd3Q4GemHvIKDS7ckinPb3ME/jLyAbhxVbZcZS', '18981077130', 'brendonfeitosa@hotmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `cod_contato` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `sobrenome` varchar(70) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `motivo_contato` varchar(1000) NOT NULL,
  `data_hora_contato` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `contato`
--

INSERT INTO `contato` (`cod_contato`, `nome`, `sobrenome`, `telefone`, `email`, `motivo_contato`, `data_hora_contato`) VALUES
(6, 'brendon', 'feitosa', '1898103583', 'teste@hotmail.com', 'teste2', '2023-06-11 15:08:17'),
(7, 'suzana', 'sousa', '18981077130', 'suzana@jumamarua.com.br', 'Sou a Juma e quero ir me imbora', '2023-06-11 15:09:20'),
(8, 'anderson', 'marques', '18123456789', 'teste@teste.com', 'teste3', '2023-06-11 16:09:35'),
(9, 'teste', 'teste', '11122', 'teste@teste.com', 'teste', '2023-06-20 00:14:31'),
(10, 'teste', 'teste', '11122', 'teste@teste.com', 'teste', '2023-06-20 00:15:27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `end_cod` int(11) NOT NULL,
  `cliente_cli_id` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `comp` varchar(45) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `endereco`
--

INSERT INTO `endereco` (`end_cod`, `cliente_cli_id`, `cep`, `logradouro`, `numero`, `comp`, `bairro`, `cidade`) VALUES
(6, 2, '19026440', 'Rua Claudemir Rodrigues', '15', 'a', 'Jardim Maracanã', 'Presidente Prudente'),
(12, 10, '19026380', 'Rua Rosa Oliveira dos Anjos', '5', 'fundos', 'Jardim Maracanã', 'Presidente Prudente'),
(14, 9, '19026380', 'Rua Rosa Oliveira dos Anjos', '20', '', 'Jardim Maracanã', 'Presidente Prudente'),
(34, 1, '19065030', 'Rua Luiz Alves dos Santos', '773', 'J', 'Jardim Everest', 'Presidente Prudente'),
(36, 11, '19065030', 'Rua Luiz Alves dos Santos', '773', 'fundos', 'Jardim Everest', 'Presidente Prudente'),
(37, 13, '19065030', 'Rua Luiz Alves dos Santos', '773', 'fundo', 'Jardim Everest', 'Presidente Prudente'),
(38, 1, '19026440', 'Rua Claudemir Rodrigues', '98', '', 'Jardim MaracanÃ£', 'Presidente Prudente'),
(46, 1, '19061510', 'Rua JosÃ© Peres de Haro', '40', '', 'Jardim CinqÃ¼entenÃ¡rio', 'Presidente Prudente'),
(47, 1, '19026260', 'Rua JÃºlio Peruche', '50', '', 'Jardim MaracanÃ£', 'Presidente Prudente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `historia`
--

CREATE TABLE `historia` (
  `real_id` int(11) NOT NULL,
  `fundacao` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `de_onde_viemos` mediumtext DEFAULT NULL,
  `porque_cidade` varchar(300) DEFAULT NULL,
  `curiosidades` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `historia`
--

INSERT INTO `historia` (`real_id`, `fundacao`, `de_onde_viemos`, `porque_cidade`, `curiosidades`) VALUES
(40, 'Uma família apaixonada por gastronomia fundou o restaurante \"Fatec Food\" em Presidente Prudente - SP. Transformaram um antigo casarão abandonado em um espaço charmoso. João, o chef talentoso, criava pratos deliciosos, enquanto Maria, especialista em vinhos, selecionava as melhores opções. Com atendimento impecável e um cardápio diversificado, o restaurante conquistou a cidade. Tornou-se um ponto de referência, onde pessoas celebram momentos especiais. O sucesso é resultado da paixão, dedicação e trabalho árduo dessa família. O Fatec Food é um lugar onde a boa gastronomia encontra aconchego e memórias inesquecíveis são criadas.', 'João e Maria, irmãos apaixonados por gastronomia, deixaram sua cidade natal (Maceió - AL) em busca de novas oportunidades. Com suas habilidades culinárias, eles encontraram um antigo casarão abandonado em Presidente Prudente - SP. Com o apoio dos pais, Dona Ana e Seu Carlos, transformaram o local no renomado restaurante \"Fatec Food\". Hoje, são referência na cidade, celebrando o sucesso de uma jornada corajosa e deliciosa.', 'João e Maria, em busca de um lugar para abrir seu restaurante dos sonhos, descobriram Presidente Prudente - SP. Encantados com a atmosfera acolhedora e a paixão dos moradores pela gastronomia, escolheram essa cidade como o local perfeito para compartilhar sua arte culinária. O resto é história de su', 'O restaurante \"Fatec Food\" possui curiosidades encantadoras. Seu cardápio é inspirado em receitas de família, guardando segredos de gerações. Além disso, o local abriga uma horta própria, onde ingredientes frescos são colhidos diariamente. A decoração é composta por peças de artesãos locais, trazendo um toque único ao ambiente. É um lugar onde a tradição se mistura com a criatividade culinária.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `pag_id` int(11) NOT NULL,
  `data_pgto` datetime NOT NULL DEFAULT current_timestamp(),
  `identificador` varchar(200) NOT NULL,
  `valor` decimal(12,2) NOT NULL,
  `ped_num` int(11) NOT NULL,
  `cancelado` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `pagamento`
--

INSERT INTO `pagamento` (`pag_id`, `data_pgto`, `identificador`, `valor`, `ped_num`, `cancelado`) VALUES
(25, '2023-06-19 22:21:45', '534534543534454', '53.65', 110, 0),
(26, '2023-06-19 22:28:45', '8989434jajfsa00', '25.80', 111, 0),
(27, '2023-06-20 16:13:37', '43543543534', '4.90', 112, 0),
(28, '2023-06-20 16:38:22', '8989434jajfsa00', '22.80', 113, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `ped_num` int(11) NOT NULL,
  `tipo_pagamento_cod` int(11) NOT NULL,
  `cliente_cli_id` int(11) NOT NULL,
  `ped_data` datetime NOT NULL DEFAULT current_timestamp(),
  `valor_total` decimal(12,2) NOT NULL,
  `cod_entrega` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `pedido`
--

INSERT INTO `pedido` (`ped_num`, `tipo_pagamento_cod`, `cliente_cli_id`, `ped_data`, `valor_total`, `cod_entrega`, `status`) VALUES
(110, 3, 1, '2023-06-19 22:21:38', '53.65', 34, 1),
(111, 9, 1, '2023-06-19 22:28:43', '25.80', 34, 2),
(112, 3, 1, '2023-06-20 16:13:30', '4.90', 34, 2),
(113, 9, 1, '2023-06-20 16:38:20', '22.80', 34, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `tipo_cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `preco` decimal(12,2) NOT NULL,
  `promo` tinyint(1) DEFAULT NULL,
  `image_url` longtext NOT NULL,
  `peso` decimal(12,2) NOT NULL,
  `desconto` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`codigo`, `tipo_cod`, `nome`, `descricao`, `preco`, `promo`, `image_url`, `peso`, `desconto`) VALUES
(6, 1, 'Tutu de FeijÃ£o', 'FeijÃ£o com bacon, farinha de mandioca torrada couve refogada, ovo frito e torresmo', '22.00', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcVFkx_oIflzIwHXpOa4hf6WAclQuelPe6bA&usqp=CAU', '0.25', '5.00'),
(7, 21, 'Fritas', 'Batata frita em formato de palito', '5.00', 1, 'https://segredosdacomida.com.br/wp-content/uploads/2022/11/1-kg-de-batata-frita-serve-quantas-pessoas-1200x857.jpg', '0.10', '3.00'),
(9, 12, 'Lasanha', 'massa de lasanha, presunto, queijo, e molho de carne moida', '18.50', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7PkiZfYIKp3AdJ-LyZhsEkm5DlL1BwMhyvA&usqp=CAU', '0.25', '3.00'),
(11, 16, 'Coca cola', 'coca cola lata 350ml', '5.00', 0, 'data:image/png;base64,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', '0.35', NULL),
(12, 16, 'Schweppers', 'refrigerante citrus 350ml', '5.00', 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdgXTA2Sxdf9WcdycRomrv1wrm4gc91Bcb1A&usqp=CAU', '0.35', NULL),
(13, 16, 'Coca Cola zero', 'coca cola zero 350ml', '5.00', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHx2ox6-fxwyhLLHaK6bBNBb2DBonfElujrQ&usqp=CAU', '0.35', '2.00'),
(15, 5, 'Salada capresi', 'Tomate, mussarela fresca de bÃºfala ou vaca  azeite de oliva virgem extra  manjericÃ£o, orÃ©gano seco', '25.00', 1, 'https://img.cybercook.com.br/receitas/210/salada-caprese-2.jpeg', '0.15', '3.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_has_pedido`
--

CREATE TABLE `produto_has_pedido` (
  `produto_codigo` int(11) NOT NULL,
  `pedido_ped_num` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `valorUinitario` decimal(12,2) NOT NULL,
  `desconto` decimal(12,2) DEFAULT NULL,
  `subtotal` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produto_has_pedido`
--

INSERT INTO `produto_has_pedido` (`produto_codigo`, `pedido_ped_num`, `qtde`, `valorUinitario`, `desconto`, `subtotal`) VALUES
(6, 111, 1, '20.90', '1.05', '20.90'),
(7, 113, 1, '4.85', '0.15', '4.85'),
(9, 113, 1, '17.95', '0.54', '17.95'),
(12, 110, 1, '24.50', '0.00', '24.50'),
(13, 111, 1, '4.90', '0.10', '4.90'),
(13, 112, 1, '4.90', '0.10', '4.90'),
(15, 110, 1, '24.25', '0.73', '24.25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `status_pedido`
--

CREATE TABLE `status_pedido` (
  `status_id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `status_pedido`
--

INSERT INTO `status_pedido` (`status_id`, `status`) VALUES
(1, 'Finalizado'),
(2, 'Pendente'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_pagamento`
--

CREATE TABLE `tipo_pagamento` (
  `cod` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tipo_pagamento`
--

INSERT INTO `tipo_pagamento` (`cod`, `nome`) VALUES
(3, 'CartÃ£o de CrÃ©dito'),
(4, 'CartÃ£o de DÃ©bito'),
(9, 'PIX');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `tipo_cod` int(11) NOT NULL,
  `tipo_nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`tipo_cod`, `tipo_nome`) VALUES
(1, 'tradicional'),
(2, 'TÃ­picas'),
(4, 'Assados'),
(5, 'Entradas'),
(7, 'Nordestinas'),
(12, 'Massas'),
(13, 'Doces'),
(16, 'Bebidas'),
(21, 'Acompanhamentos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `adm_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `user_tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `user`
--

INSERT INTO `user` (`adm_id`, `nome`, `email`, `senha`, `user_tipo`) VALUES
(1, 'Anderson Marques da Silva', 'andermarsil@gmail.com', '$2y$10$cgIZaJOTWwzv6QEYtMyOq.NFeEcR3mD6SLtcqU93lrY1jLeu/49Ki', 'adm'),
(9, 'Brendon', 'brendonfeitosa@hotmail.com', '$2y$10$cA2UKeSZjzTaLPG1Zbp2ieOClxnuNK7.BZUL./OrCayBmlpBXiMOW', 'adm'),
(10, 'Suzana ', 'suzhy48@gamil.com', '$2y$10$YWeKflasdnaONyfm1X9OAu/MbQ1tBZgM61O7BsxRzDQt4Yzgqu4Q2', 'adm'),
(12, 'Evelin Mariana', 'evelinmariana1@hotmail.com', '$2y$10$osXZZ5xQEdgqDDPeKGDF5.87L3E34AFxXwXlZG.oVz5iPU712HtAy', 'adm');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`cod_contato`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`end_cod`),
  ADD KEY `fk_endereco_cliente1_idx` (`cliente_cli_id`);

--
-- Índices de tabela `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`real_id`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`pag_id`),
  ADD KEY `pedido_pagamento` (`ped_num`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ped_num`,`tipo_pagamento_cod`),
  ADD KEY `fk_pedido_tipo_pagamento1_idx` (`tipo_pagamento_cod`),
  ADD KEY `fk_pedido_cliente1_idx` (`cliente_cli_id`),
  ADD KEY `fk_endereco_pedido_idx` (`cod_entrega`),
  ADD KEY `status_ped_pedido_idx` (`status`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_pratos_tipo_prato_idx` (`tipo_cod`);

--
-- Índices de tabela `produto_has_pedido`
--
ALTER TABLE `produto_has_pedido`
  ADD PRIMARY KEY (`produto_codigo`,`pedido_ped_num`),
  ADD KEY `fk_produto_has_pedido_pedido1_idx` (`pedido_ped_num`),
  ADD KEY `fk_produto_has_pedido_produto1_idx` (`produto_codigo`);

--
-- Índices de tabela `status_pedido`
--
ALTER TABLE `status_pedido`
  ADD PRIMARY KEY (`status_id`);

--
-- Índices de tabela `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`tipo_cod`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `cod_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `end_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de tabela `historia`
--
ALTER TABLE `historia`
  MODIFY `real_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `pag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ped_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de tabela `status_pedido`
--
ALTER TABLE `status_pedido`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `tipo_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_cliente1` FOREIGN KEY (`cliente_cli_id`) REFERENCES `cliente` (`cli_id`);

--
-- Restrições para tabelas `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pedido_pagamento` FOREIGN KEY (`ped_num`) REFERENCES `pedido` (`ped_num`);

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente1` FOREIGN KEY (`cliente_cli_id`) REFERENCES `cliente` (`cli_id`),
  ADD CONSTRAINT `fk_pedido_tipo_pagamento1` FOREIGN KEY (`tipo_pagamento_cod`) REFERENCES `tipo_pagamento` (`cod`),
  ADD CONSTRAINT `status_ped_pedido` FOREIGN KEY (`status`) REFERENCES `status_pedido` (`status_id`);

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_pratos_tipo_prato` FOREIGN KEY (`tipo_cod`) REFERENCES `tipo_produto` (`tipo_cod`);

--
-- Restrições para tabelas `produto_has_pedido`
--
ALTER TABLE `produto_has_pedido`
  ADD CONSTRAINT `fk_produto_has_pedido_pedido1` FOREIGN KEY (`pedido_ped_num`) REFERENCES `pedido` (`ped_num`),
  ADD CONSTRAINT `fk_produto_has_pedido_produto1` FOREIGN KEY (`produto_codigo`) REFERENCES `produto` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
