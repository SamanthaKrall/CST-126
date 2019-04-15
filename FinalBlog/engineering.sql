-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema milestone
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema milestone
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `milestone` DEFAULT CHARACTER SET latin1 ;
USE `milestone` ;

-- -----------------------------------------------------
-- Table `milestone`.`blogposts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `milestone`.`blogposts` ;

CREATE TABLE IF NOT EXISTS `milestone`.`blogposts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `userName` TEXT NOT NULL,
  `title` TEXT NOT NULL,
  `subtitle` TEXT NOT NULL,
  `blogPost` TEXT NOT NULL,
  `category` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `milestone`.`comment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `milestone`.`comment` ;

CREATE TABLE IF NOT EXISTS `milestone`.`comment` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `comment` TEXT NOT NULL,
  `rating` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `milestone`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `milestone`.`users` ;

CREATE TABLE IF NOT EXISTS `milestone`.`users` (
  `userID` INT(11) NOT NULL AUTO_INCREMENT,
  `userName` VARCHAR(20) NOT NULL,
  `userRole` VARCHAR(50) NOT NULL,
  `userNickname` VARCHAR(20) NOT NULL,
  `firstName` VARCHAR(50) NOT NULL,
  `middleName` VARCHAR(50) NOT NULL,
  `lastName` VARCHAR(50) NOT NULL,
  `email1` VARCHAR(50) NOT NULL,
  `email2` VARCHAR(50) NOT NULL,
  `address1` VARCHAR(50) NOT NULL,
  `adress2` VARCHAR(50) NOT NULL,
  `city` VARCHAR(20) NOT NULL,
  `state` VARCHAR(20) NOT NULL,
  `zipcode` INT(11) NOT NULL,
  `country` VARCHAR(20) NOT NULL,
  `userBanned` TINYINT(1) NOT NULL DEFAULT '2',
  `userDeleted` TINYINT(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`userID`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;

CREATE UNIQUE INDEX `userName` ON `milestone`.`users` (`userName` ASC);

CREATE UNIQUE INDEX `userNickname` ON `milestone`.`users` (`userNickname` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
