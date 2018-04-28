CREATE DATABASE website;

use website;

CREATE TABLE book (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    description MEDIUMTEXT NOT NULL,
    date DATE NOT NULL
);