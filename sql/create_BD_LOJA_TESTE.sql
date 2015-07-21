-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema loja01
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `loja01` ;

-- -----------------------------------------------------
-- Schema loja01
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `loja01` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `loja01` ;

-- -----------------------------------------------------
-- Table `loja01`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja01`.`usuario` ;

CREATE TABLE IF NOT EXISTS `loja01`.`usuario` (
  `usuario_id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_tipo` VARCHAR(1) NOT NULL,
  `usuario_nome` VARCHAR(200) NOT NULL,
  `usuario_cpf` VARCHAR(1) NOT NULL,
  `usuario_telefone_res` VARCHAR(15) NOT NULL,
  `usuario_telefone_cel` VARCHAR(15) NOT NULL,
  `usuario_endereco` VARCHAR(200) NOT NULL,
  `usuario_data_nasc` DATE NOT NULL,
  `usuario_email` VARCHAR(45) NOT NULL,
  `usuario_login` VARCHAR(45) NOT NULL,
  `usuario_senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`))
ENGINE = InnoDB


-- -----------------------------------------------------
-- Table `loja01`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja01`.`cliente` ;

CREATE TABLE IF NOT EXISTS `loja01`.`cliente` (
  `cliente_id` INT(11) NOT NULL AUTO_INCREMENT,
  `cliente_tipo` VARCHAR(45) NOT NULL DEFAULT 'F',
  `cliente_nome` VARCHAR(250) NOT NULL,
  `cliente_cpf` VARCHAR(14) NOT NULL,
  `cliente_cnpj` VARCHAR(18) NOT NULL,
  `cliente_endereco` VARCHAR(200) NOT NULL,
  `cliente_telefone` VARCHAR(11) NOT NULL,
  `cliente_celular` VARCHAR(12) NOT NULL,
  `cliente_email` VARCHAR(45) NOT NULL,
  `cliente_senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cliente_id`))
ENGINE = InnoDB


-- -----------------------------------------------------
-- Table `loja01`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja01`.`categoria` ;

CREATE TABLE IF NOT EXISTS `loja01`.`categoria` (
  `categoria_descricao` VARCHAR(45) NOT NULL,
  `categoria_id` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`categoria_id`))
ENGINE = InnoDB


-- -----------------------------------------------------
-- Table `loja01`.`produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja01`.`produto` ;

CREATE TABLE IF NOT EXISTS `loja01`.`produto` (
  `produto_id` INT(11) NOT NULL AUTO_INCREMENT,
  `produto_nome` VARCHAR(45) NOT NULL,
  `produto_fabricante` VARCHAR(45) NOT NULL,
  `produto_fornecedor` VARCHAR(45) NOT NULL,
  `produto_detalhe` VARCHAR(200) NOT NULL,
  `produto_quantidade` INT(11) NOT NULL,
  `produto_valor` DOUBLE NOT NULL,
  `categoria_id` INT(11) NOT NULL,
  PRIMARY KEY (`produto_id`, `categoria_id`),
  INDEX `fk_produto_categoria_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_produto_categoria`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `loja01`.`categoria` (`categoria_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB


-- -----------------------------------------------------
-- Table `loja01`.`venda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja01`.`venda` ;

CREATE TABLE IF NOT EXISTS `loja01`.`venda` (
  `venda_id` INT(11) NOT NULL,
  `venda_valor_total` DECIMAL(10,0) NOT NULL,
  PRIMARY KEY (`venda_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8


-- -----------------------------------------------------
-- Table `loja01`.`produto_venda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja01`.`produto_venda` ;

CREATE TABLE IF NOT EXISTS `loja01`.`produto_venda` (
  `produto_id` INT(11) NOT NULL,
  `categoria_id` INT(11) NOT NULL,
  `venda_id` INT(11) NOT NULL,
  `produto_quantidade` INT(11) NOT NULL,
  PRIMARY KEY (`produto_id`, `categoria_id`, `venda_id`),
  INDEX `fk_produto_has_venda_venda1_idx` (`venda_id` ASC),
  INDEX `fk_produto_has_venda_produto1_idx` (`produto_id` ASC, `categoria_id` ASC),
  CONSTRAINT `fk_produto_has_venda_produto1`
    FOREIGN KEY (`produto_id` , `categoria_id`)
    REFERENCES `loja01`.`produto` (`produto_id` , `categoria_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_has_venda_venda1`
    FOREIGN KEY (`venda_id`)
    REFERENCES `loja01`.`venda` (`venda_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
