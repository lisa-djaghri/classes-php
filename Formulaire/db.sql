CREATE DATABASE utilisateurs;

use utilisateurs;

CREATE TABLE users_login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    mot_de_passe_hash VARCHAR(100) NOT NULL
);