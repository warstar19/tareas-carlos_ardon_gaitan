-- Crear la base de datos
CREATE DATABASE usuarios;

-- Usar la base de datos recién creada
USE usuarios;

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);
