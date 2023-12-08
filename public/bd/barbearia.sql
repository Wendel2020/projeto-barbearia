-- MySQL Script generated by MySQL Workbench
-- Fri Dec  8 10:50:59 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema barbearia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema barbearia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `barbearia` DEFAULT CHARACTER SET utf8 ;
USE `barbearia` ;

-- -----------------------------------------------------
-- Table `barbearia`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `senha` VARCHAR(45) NULL,
  `tipo` INT NULL,
  `login` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `barbearia`.`cabelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`cabelo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `preco` FLOAT NULL,
  `foto` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `barbearia`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barbearia`.`servicos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NULL,
  `preco` FLOAT NULL,
  `hora` DATETIME NULL,
  `usuarios_id` INT NOT NULL,
  `cabelo_id` INT NOT NULL,
  PRIMARY KEY (`id`, `usuarios_id`, `cabelo_id`),
  INDEX `fk_servicos_usuarios_idx` (`usuarios_id` ASC),
  INDEX `fk_servicos_cabelo1_idx` (`cabelo_id` ASC),
  CONSTRAINT `fk_servicos_usuarios`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `barbearia`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_cabelo1`
    FOREIGN KEY (`cabelo_id`)
    REFERENCES `barbearia`.`cabelo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
