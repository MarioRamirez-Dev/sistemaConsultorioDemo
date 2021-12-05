--Tabla User
CREATE TABLE tbl_users(
    id int AUTO_INCREMENT PRIMARY key,
    name varchar(15) NOT NULL,
    lastname varchar(15) NOT NULL,
    username varchar(15),
    password varchar(25),
    dateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 )