DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET UTF8 COLLATE utf8_general_ci;
USE `mydb` ;




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
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


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
ENGINE = InnoDB;


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
ENGINE = InnoDB;
