CREATE TABLE `categoriac` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar NOT NULL,
  PRIMARY KEY (`id`)
)

CREATE TABLE `categoriap` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar NOT NULL,
  PRIMARY KEY (`id`)
)

CREATE TABLE `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar NOT NULL,
  `cpf` varchar,
  `rg` varchar,
  `nacionalidade` varchar,
  `profissao` varchar,
  `escolaridade` varchar,
  `estado_civil` varchar,
  `data_nasc` varchar,
  `email` varchar,
  `celular` varchar,
  `telefone` varchar,
  `cep` varchar,
  `endereço` varchar,
  `bairro` varchar,
  `cidade` varchar,
  `estado` varchar,
  `pai` varchar,
  `mae` varchar,
  `religiao` varchar,
  `observacao` text,
  PRIMARY KEY (`id`)
)

CREATE TABLE `processo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar,
  `chave` varchar,
  `area` varchar,
  `objeto` varchar,
  `assunto` varchar,
  `pedido` varchar,
  `status` varchar,
  `comarca` varchar,
  `tramita` varchar,
  `fase` varchar,
  `detalhes` varchar,
  `campo1` varchar,
  `campo2` varchar,
  `campo3` varchar,
  `campo4` varchar,
  `observacao` text,
  PRIMARY KEY (`id`)
)

CREATE TABLE `registro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` int NOT NULL,
  `usuario_id` int NOT NULL,
  `cliente_id` int,
  `processo_id` int,
  `descricao` text,
  `data` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES usuario(`id`),
  FOREIGN KEY (`cliente_id`) REFERENCES cliente(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
)

CREATE TABLE `tarefa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` text,
  `usuario_id` int NOT NULL,
  `registro_id` int NOT NULL,
  `concluida_em` datetime,
  `data` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`registro_id`) REFERENCES registro(`id`)
)

CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar NOT NULL,
  `email` varchar NOT NULL,
  `senha` varchar NOT NULL,
  `acesso` int NOT NULL,
  PRIMARY KEY (`id`)
)

CREATE TABLE `token` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar NOT NULL UNIQUE,
  `usuario_id` int NOT NULL,
  `data` datetime NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES usuario(`id`)
)


CREATE TABLE `cliente_cliente` (
  `cliente1_id` int NOT NULL,
  `cliente2_id` int NOT NULL,
  `relacao` varchar NOT NULL,
  PRIMARY KEY (`cliente1_id`,`cliente2_id`),
  FOREIGN KEY (`cliente1_id`) REFERENCES cliente(`id`),
  FOREIGN KEY (`cliente2_id`) REFERENCES cliente(`id`)
)

CREATE TABLE `cliente_processo` (
  `cliente_id` int NOT NULL,
  `processo_id` int NOT NULL,
  PRIMARY KEY (`cliente_id`,`processo_id`),
  FOREIGN KEY (`cliente_id`) REFERENCES cliente(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
)

CREATE TABLE `categoriap_processo` (
  `categoriap_id` int NOT NULL,
  `processo_id` int NOT NULL,
  PRIMARY KEY (`categoriap_id`,`processo_id`),
  FOREIGN KEY (`categoriap_id`) REFERENCES categoriap(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
)

CREATE TABLE `categoriac_processo` (
  `categoriac_id` int NOT NULL,
  `processo_id` int NOT NULL,
  PRIMARY KEY (`categoriac_id`,`processo_id`),
  FOREIGN KEY (`categoriac_id`) REFERENCES categoriac(`id`),
  FOREIGN KEY (`processo_id`) REFERENCES processo(`id`)
)

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `acesso`)
VALUES (1, "Escritorio", "escritorio@emilioneto.com", "$2y$10$FgT9dE1XvXufjXsWt24rIuLPNWYXKSMSbxQ8xxghkLKSjyTeO30nC", 99);


CREATE EVENT AutoDeleteToken
ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 1 DAY 
ON COMPLETION PRESERVE
DO 
DELETE LOW_PRIORITY FROM sistema.token WHERE data < DATE_SUB(NOW(), INTERVAL 1 DAY);