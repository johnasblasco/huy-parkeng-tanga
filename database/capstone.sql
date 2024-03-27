CREATE DATABASE capstone;
use capstone;

CREATE TABLE tbladmin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);
INSERT INTO tbladmin(username,password)
VALUES('admin','admin');