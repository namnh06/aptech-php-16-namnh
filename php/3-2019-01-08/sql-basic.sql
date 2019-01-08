CREATE DATABASE aptech_php_16_namnh;

-- USE aptech_php_16_namnh;

CREATE TABLE aptech_php_16_namnh.users (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50)
);

SELECT * FROM aptech_php_16_namnh.users;

INSERT INTO aptech_php_16_namnh.users (id, name) VALUES ('1', 'Nam');
INSERT INTO aptech_php_16_namnh.users (name) VALUES ('Nam2');
INSERT INTO aptech_php_16_namnh.users (name) VALUES ('Nam3'),('Nam4');
-- INSERT INTO `aptech_php_16_namnh`.`users` (`id`, `name`) VALUES ('2', 'Quy');

SELECT * FROM aptech_php_16_namnh.users;