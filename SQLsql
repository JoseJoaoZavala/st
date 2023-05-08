CREATE TABLE `Equipamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_id` INT NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `marca` VARCHAR(50) NOT NULL,
  `modelo` VARCHAR(50) NOT NULL,
  `numero_serie` VARCHAR(50) NOT NULL,
  `data_aquisicao` DATE NOT NULL,
  `projeto_id` INT NULL,
  `departamento_responsavel` VARCHAR(50) NOT NULL,
  `localizacao_atual` VARCHAR(50) NOT NULL,
  `status` ENUM('em uso', 'não em uso') NOT NULL,
  `historico_manutencao` TEXT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`tipo_id`) REFERENCES `Tipo_Equipamento`(`id`),
  FOREIGN KEY (`projeto_id`) REFERENCES `Projetos`(`id`)
) ENGINE=InnoDB;

CREATE TABLE `Tipo_Equipamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `Projetos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `descricao` TEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `Users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE (`username`),
  UNIQUE (`email`)
) ENGINE=InnoDB;

CREATE TABLE `Requisicoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `equipamento_id` INT NOT NULL,
  `data_requisicao` DATETIME NOT NULL,
  `projeto_id` INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`),
  FOREIGN KEY (`equipamento_id`) REFERENCES `Equipamentos`(`id`),
  FOREIGN KEY (`projeto_id`) REFERENCES `Projetos`(`id`)
) ENGINE=InnoDB;
