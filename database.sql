-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Project` DEFAULT CHARACTER SET utf8 ;
USE `Project` ;

-- -----------------------------------------------------
-- Table `Project`.`Members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Project`.`Members` (
  `reg_no` INT NOT NULL,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  `age` INT NOT NULL,
  `dob` DATE NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `tel_no` INT NOT NULL,
  `email` VARCHAR(45) NULL,
  `achs` VARCHAR(1000) NULL,
  `services` VARCHAR(1000) NULL,
  `donations` VARCHAR(1000) NULL,
  PRIMARY KEY (`reg_no`),
  UNIQUE INDEX `reg_no_UNIQUE` (`reg_no` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
