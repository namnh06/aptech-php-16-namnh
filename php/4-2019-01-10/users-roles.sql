DROP DATABASE IF EXISTS aptech_php_16_ss4;
-- create database
CREATE DATABASE aptech_php_16_ss4;

DROP TABLE IF EXISTS aptech_php_16_ss4.roles;
CREATE TABLE aptech_php_16_ss4.roles(
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) UNIQUE
);

INSERT INTO aptech_php_16_ss4.roles (name)
VALUES ('Director'),
('Teacher'),
('Student');

SELECT * FROM aptech_php_16_ss4.roles;

DROP TABLE IF EXISTS aptech_php_16_ss4.users;

CREATE TABLE aptech_php_16_ss4.users(
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50),
email VARCHAR(255) UNIQUE,
password VARCHAR(50),
role INT DEFAULT 1,
FOREIGN KEY (role) REFERENCES roles(id)
);


INSERT INTO aptech_php_16_ss4.users (name,email,password,role)
VALUES ('Nam','nam.nguyenhai@axonactive.com','123456',1),
('Nhut','nam.nguyenhai@yuriqa.com','123',2);

INSERT INTO aptech_php_16_ss4.users (name,email,password)
VALUES ('rwer','nam.nguyenhai@yuriqa.com1','qqq');





SELECT * FROM aptech_php_16_ss4.users;
SELECT * FROM aptech_php_16_ss4.roles;
USE aptech_php_16_ss4;
SELECT users.name,users.email,users.password, roles.name
FROM users, roles
WHERE users.role = roles.id;

SELECT users.name, users.email, users.role
FROM users JOIN
SELECT roles.name as role_name, roles.id
FROM roles
ON users.role = role.id;