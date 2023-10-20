-- MySQL Script generated by MySQL Workbench
-- Mon Sep 25 16:50:20 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema reviews
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema reviews
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `reviews` DEFAULT CHARACTER SET utf8 ;
USE `reviews` ;

-- -----------------------------------------------------
-- Table `reviews`.`reviews`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `reviews`.`reviews` ;

CREATE TABLE IF NOT EXISTS `reviews`.`reviews` (
  `idreviews` INT NOT NULL AUTO_INCREMENT,
  `author` VARCHAR(45) NOT NULL,
  `text` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`idreviews`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;