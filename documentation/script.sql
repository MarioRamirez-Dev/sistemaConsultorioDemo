--Creacion de la base de datos
CREATE DATABASE db_consultoriodemo
--Tabla User
CREATE TABLE tbl_users(
    id int AUTO_INCREMENT PRIMARY key,
    name varchar(15) NOT NULL,
    lastname varchar(15) NOT NULL,
    email varchar(15) NOT NULL,
    password varchar(25) NOT NULL,
    dateBorn DATE,
    typeUser varchar(20) DEFAULT "NORMAL",
    dateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 )