DROP DATABASE IF EXISTS products;
CREATE DATABASE IF NOT EXISTS products;
USE products;
CREATE TABLE `products`(
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `precio` FLOAT(10) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `products`(`nombre`,`precio`) VALUES ('Pimientos',3.95),('Bacalao',12.95),('Queso',6.95);