SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `forum` ;
CREATE SCHEMA IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `forum` ;

-- -----------------------------------------------------
-- Table `forum`.`group`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`group` ;

CREATE  TABLE IF NOT EXISTS `forum`.`group` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forum`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`user` ;

CREATE  TABLE IF NOT EXISTS `forum`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NULL ,
  `email` VARCHAR(255) NULL ,
  `password` VARCHAR(255) NULL ,
  `join_date` DATETIME NULL ,
  `picture` TEXT NULL ,
  `group_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `group_id`) ,
  INDEX `fk_user_group_idx` (`group_id` ASC) ,
  CONSTRAINT `fk_user_group`
    FOREIGN KEY (`group_id` )
    REFERENCES `forum`.`group` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forum`.`section`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`section` ;

CREATE  TABLE IF NOT EXISTS `forum`.`section` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `forum`.`post`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`post` ;

CREATE  TABLE IF NOT EXISTS `forum`.`post` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `content` TEXT NULL ,
  `date` DATETIME NULL ,
  `approved` TINYINT(1) NULL ,
  `section_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `section_id`, `user_id`) ,
  INDEX `fk_post_section1_idx` (`section_id` ASC) ,
  INDEX `fk_post_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_post_section1`
    FOREIGN KEY (`section_id` )
    REFERENCES `forum`.`section` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `forum`.`user` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `forum` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
