-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema website_manager
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema website_manager
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `website_manager` DEFAULT CHARACTER SET utf8mb4 ;
USE `website_manager` ;

-- -----------------------------------------------------
-- Table `website_manager`.`customer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website_manager`.`customer` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`customer` (
  `customer_id` INT(11) NOT NULL AUTO_INCREMENT,
  `customer_name` VARCHAR(45) NOT NULL,
  `customer_email` VARCHAR(45) NOT NULL,
  `customer_phone` VARCHAR(45) NOT NULL,
  `customer_address` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `website_manager`.`employee`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website_manager`.`employee` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`employee` (
  `employee_id` INT(11) NOT NULL,
  `employee_name` VARCHAR(45) NOT NULL,
  `employee_birthday` DATE NOT NULL,
  `employee_address` VARCHAR(50) NOT NULL,
  `employee_phone` VARCHAR(45) NOT NULL,
  `employee_email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`employee_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `website_manager`.`bill`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website_manager`.`bill` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`bill` (
  `bill_id` INT(11) NOT NULL,
  `bill_dayset` DATE NULL DEFAULT NULL,
  `bill_status` BIT(1) NULL DEFAULT NULL,
  `employee_id` INT(11) NOT NULL,
  `customer_id` INT(11) NOT NULL,
  `created_at` DATE NULL DEFAULT NULL,
  `amount` INT(11) NOT NULL,
  PRIMARY KEY (`bill_id`),
  CONSTRAINT `fk_bill_customer`
    FOREIGN KEY (`customer_id`)
    REFERENCES `website_manager`.`customer` (`customer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bill_employee`
    FOREIGN KEY (`employee_id`)
    REFERENCES `website_manager`.`employee` (`employee_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `website_manager`.`categories`
DROP TABLE IF EXISTS `website_manager`.`categories` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`categories` (
  `category_id` INT(11) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`category_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
-- -----------------------------------------------------


-- -----------------------------------------------------
-- Table `website_manager`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website_manager`.`products` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`products` (
  `product_id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(45) NOT NULL,
  `brand` VARCHAR(45) NOT NULL,
  `item_weight` INT(11) NOT NULL,
  `const_price` DECIMAL(10,0) NOT NULL,
  `selt_price` DECIMAL(10,0) NOT NULL,
  `description` VARCHAR(45) NULL DEFAULT NULL,
  `age_range` VARCHAR(45) NOT NULL,
  `origin` VARCHAR(45) NOT NULL,
  `image_url` LONGTEXT NULL DEFAULT NULL,
  `category_id` INT(11) NOT NULL,
  `categories_category_id` INT(11) NOT NULL,
  PRIMARY KEY (`product_id`),
 
  CONSTRAINT `fk_products_categories1`
    FOREIGN KEY (`categories_category_id`)
    REFERENCES `website_manager`.`categories` (`category_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `website_manager`.`bill_detail`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website_manager`.`bill_detail` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`bill_detail` (
  `bill_id` INT(11) NOT NULL,
  `product_id` INT(11) NOT NULL,
  PRIMARY KEY (`bill_id`, `product_id`),

  CONSTRAINT `fk_bill_has_product_bill1`
    FOREIGN KEY (`bill_id`)
    REFERENCES `website_manager`.`bill` (`bill_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bill_has_product_product1`
    FOREIGN KEY (`product_id`)
    REFERENCES `website_manager`.`products` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `website_manager`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `website_manager`.`user` ;

CREATE TABLE IF NOT EXISTS `website_manager`.`user` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `level` BIT(1) NULL DEFAULT b'1',
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 25
DEFAULT CHARACTER SET = utf8mb4;


