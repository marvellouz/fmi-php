SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`User` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`User` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `FirstName` VARCHAR(45) NOT NULL ,
  `LastName` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `Password` VARCHAR(255) NOT NULL ,
  `IsAdmin` TINYINT(1)  NULL ,
  PRIMARY KEY (`ID`) ,
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `mydb`.`Wish`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Wish` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`Wish` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '	' ,
  `Name` VARCHAR(45) NOT NULL ,
  `Description` VARCHAR(255) NULL ,
  `Priority` INT NOT NULL ,
  `Image` VARCHAR(255) NULL ,
  `User_ID` INT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_Wish_User1` (`User_ID` ASC) ,
  CONSTRAINT `fk_Wish_User1`
    FOREIGN KEY (`User_ID` )
    REFERENCES `mydb`.`User` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `mydb`.`Category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Category` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`Category` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) NOT NULL ,
  `Description` VARCHAR(255) NULL ,
  `Image` VARCHAR(255) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `mydb`.`Wish_has_Category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Wish_has_Category` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`Wish_has_Category` (
  `Wish_ID` INT NOT NULL ,
  `Category_ID` INT NOT NULL ,
  PRIMARY KEY (`Wish_ID`, `Category_ID`) ,
  INDEX `fk_Wish_has_Category_Category1` (`Category_ID` ASC) ,
  INDEX `fk_Wish_has_Category_Wish` (`Wish_ID` ASC) ,
  CONSTRAINT `fk_Wish_has_Category_Wish`
    FOREIGN KEY (`Wish_ID` )
    REFERENCES `mydb`.`Wish` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Wish_has_Category_Category1`
    FOREIGN KEY (`Category_ID` )
    REFERENCES `mydb`.`Category` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
