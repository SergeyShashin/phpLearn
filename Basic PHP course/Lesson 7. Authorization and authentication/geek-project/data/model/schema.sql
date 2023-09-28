-- MySQL Script generated by MySQL Workbench
-- Thu Sep 28 23:04:17 2023
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
  `first_name` VARCHAR(30) NULL,
  `last_name` VARCHAR(30) NULL,
  `middle_name` VARCHAR(20) NULL,
  `age` VARCHAR(3) NULL,
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
  `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
