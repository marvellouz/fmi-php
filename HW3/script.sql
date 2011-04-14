CREATE DATABASE mydb CHARACTER SET UTF8 COLLATE utf8_general_ci;

-- -----------------------------------------------------
-- Table `mydb`.`Friends`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Friends` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`Friends` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `FirstName` VARCHAR(45) NOT NULL ,
  `LastName` VARCHAR(45) NOT NULL ,
  `Phone` VARCHAR(45) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Books`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Books` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`Books` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Title` VARCHAR(255) NOT NULL ,
  `NumPages` INT NOT NULL ,
  `PubDate` DATE NOT NULL ,
  `Friends_ID` INT NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_Books_Friends` (`Friends_ID` ASC) ,
  CONSTRAINT `fk_Books_Friends`
    FOREIGN KEY (`Friends_ID` )
    REFERENCES `mydb`.`Friends` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`History`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`History` ;

CREATE  TABLE IF NOT EXISTS `mydb`.`History` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Books_ID` INT NOT NULL ,
  `Friends_ID` INT NOT NULL ,
  `DateTaken` DATE NULL ,
  `DateReturned` DATE NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_History_Books1` (`Books_ID` ASC) ,
  INDEX `fk_History_Friends1` (`Friends_ID` ASC) ,
  CONSTRAINT `fk_History_Books1`
    FOREIGN KEY (`Books_ID` )
    REFERENCES `mydb`.`Books` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_History_Friends1`
    FOREIGN KEY (`Friends_ID` )
    REFERENCES `mydb`.`Friends` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;