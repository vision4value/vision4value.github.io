CREATE DATABASE `vision4value`;
CREATE TABLE `vision4value`.`users` ( `id` INT NOT NULL , `company` VARCHAR(100) NOT NULL , 
`kvk` INT NOT NULL , `contact` INT NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(50) NOT NULL , 
`client_type` SMALLINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE USER 'vision4value'@'localhost' IDENTIFIED VIA mysql_native_password USING 'vision';
GRANT ALL PRIVILEGES ON *.* TO 'vision4value'@'localhost' REQUIRE NONE WITH GRANT OPTION 
MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `vision4value`.* TO 'vision4value'@'localhost';

​