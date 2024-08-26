CREATE TABLE `categoriac` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `categoriap` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `cpf` varchar(256),
  `rg` varchar(256),
  `nacionalidade` varchar(256),
  `profissao` varchar(256),
  `escolaridade` varchar(256),
  `estado_civil` varchar(256),
  `data_nasc` varchar(256),
  `email` varchar(256),
  `celular` varchar(256),
  `telefone` varchar(256),
  `cep` varchar(256),
  `endereco` varchar(256),
  `num_casa` varchar(256),
  `bairro` varchar(256),
  `cidade` varchar(256),
  `estado` varchar(256),
  `complemento` text,
  `pai` varchar(256),
  `mae` varchar(256),
  `religiao` varchar(256),
  `observacao` text,
  PRIMARY KEY (`id`)
);

CREATE TABLE `processo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(256),
  `chave` varchar(256),
  `area` varchar(256),
  `objeto` varchar(256),
  `assunto` varchar(256),
  `pedido` varchar(256),
  `status` varchar(256),
  `comarca` varchar(256),
  `tramita` varchar(256),
  `fase` varchar(256),
  `detalhes` varchar(256),
  `campo1` varchar(256),
  `campo2` varchar(256),
  `campo3` varchar(256),
  `campo4` varchar(256),
  `observacao` text,
  PRIMARY KEY (`id`)
);

CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(256),
  `email` varchar(256) NOT NULL,
  `senha` varchar(256),
  `acesso` int,
  PRIMARY KEY (`id`)
);

CREATE TABLE `registro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` int NOT NULL,
  `usuario_id` int,
  `cliente_id` int,
  `processo_id` int,
  `descricao` text,
  `data` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES usuario(`id`),
  FOREIGN KEY (`cliente_id`) REFERENCES cliente(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
);

CREATE TABLE `tarefa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` text,
  `usuario_id` int,
  `registro_id` int,
  `concluida_em` datetime,
  `data` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`registro_id`) REFERENCES registro(`id`)
);

CREATE TABLE `token` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(256) NOT NULL UNIQUE,
  `usuario_id` int,
  `data` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES usuario(`id`)
);


CREATE TABLE `cliente_cliente` (
  `cliente1_id` int NOT NULL,
  `cliente2_id` int NOT NULL,
  `relacao` varchar(256) NOT NULL,
  PRIMARY KEY (`cliente1_id`,`cliente2_id`),
  FOREIGN KEY (`cliente1_id`) REFERENCES cliente(`id`),
  FOREIGN KEY (`cliente2_id`) REFERENCES cliente(`id`)
);

CREATE TABLE `cliente_processo` (
  `cliente_id` int NOT NULL,
  `processo_id` int NOT NULL,
  PRIMARY KEY (`cliente_id`,`processo_id`),
  FOREIGN KEY (`cliente_id`) REFERENCES cliente(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
);

CREATE TABLE `categoriap_processo` (
  `categoriap_id` int NOT NULL,
  `processo_id` int NOT NULL,
  PRIMARY KEY (`categoriap_id`,`processo_id`),
  FOREIGN KEY (`categoriap_id`) REFERENCES categoriap(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
);

CREATE TABLE `categoriac_cliente` (
  `categoriac_id` int NOT NULL,
  `cliente_id` int NOT NULL,
  PRIMARY KEY (`categoriac_id`,`cliente_id`),
  FOREIGN KEY (`categoriac_id`) REFERENCES categoriac(`id`),
  FOREIGN KEY (`cliente_id`) REFERENCES cliente(`id`)
);

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `acesso`)
VALUES (1, "Escritorio", "escritorio@emilioneto.com", "$2y$10$FgT9dE1XvXufjXsWt24rIuLPNWYXKSMSbxQ8xxghkLKSjyTeO30nC", 99);


CREATE EVENT AutoDeleteToken
ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 DAY 
ON COMPLETION PRESERVE
DO 
DELETE LOW_PRIORITY FROM sistema.token WHERE data < DATE_SUB(NOW(), INTERVAL 1 DAY);