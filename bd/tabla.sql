-- Create a database
DROP DATABASE IF EXISTS lamp_db;
CREATE DATABASE lamp_db CHARSET utf8mb4;
USE lamp_db;

-- Create the tareas table
CREATE TABLE tareas (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(100) NOT NULL,
  descripcion VARCHAR(300) NOT NULL,
  fecha DATE NOT NULL,
  realizado TINYINT(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*
-- Example about how to create a new database user and grant privileges.
-- Remember to change the static values of: DB_USER, DB_PASSWORD and DB_NAME

DROP USER IF EXISTS 'DB_USER'@'%';
CREATE USER 'DB_USER'@'%' IDENTIFIED BY 'DB_PASSWORD';
GRANT ALL PRIVILEGES ON lamp_db.* TO 'DB_USER'@'%';
*/