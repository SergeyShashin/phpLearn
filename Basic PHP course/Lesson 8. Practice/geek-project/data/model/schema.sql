-- MySQL Script generated by MySQL Workbench
-- Wed Oct  4 14:49:45 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema geek_project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema geek_project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `geek_project` DEFAULT CHARACTER SET utf8 ;
USE `geek_project` ;

-- -----------------------------------------------------
-- Table `geek_project`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geek_project`.`users` ;

CREATE TABLE IF NOT EXISTS `geek_project`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(30) NULL DEFAULT NULL,
  `last_name` VARCHAR(30) NULL DEFAULT NULL,
  `middle_name` VARCHAR(20) NULL DEFAULT NULL,
  `age` VARCHAR(3) NULL DEFAULT NULL,
  `login` VARCHAR(300) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `login_UNIQUE` (`login` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geek_project`.`reviews`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geek_project`.`reviews` ;

CREATE TABLE IF NOT EXISTS `geek_project`.`reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` TINYTEXT NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geek_project`.`category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geek_project`.`category` ;

CREATE TABLE IF NOT EXISTS `geek_project`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `geek_project`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geek_project`.`product` ;

CREATE TABLE IF NOT EXISTS `geek_project`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TINYTEXT NULL,
  `price` DECIMAL(10) NOT NULL DEFAULT 0.0,
  `quantity` INT NULL DEFAULT 1,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_category_idx` (`category_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `geek_project`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
