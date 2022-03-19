CREATE DATABASE `rf`;
USE `rf`;

CREATE TABLE `usuario`(
    `id` INT AUTO_INCREMENT,
	`name` VARCHAR(200),
    `username` VARCHAR(200),
    `email` VARCHAR(200),
    `password` VARCHAR(32), 
    CONSTRAINT PRIMARY KEY(id)
);