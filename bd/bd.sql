CREATE DATABASE crud_ajax_php;
USE crud_ajax_php;

CREATE TABLE usuarios(
    id int auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    email varchar(255),
    telefono varchar(20),
    PRIMARY KEY (id)
);

INSERT INTO usuarios VALUES (null, 'Pablo', 'Lopez', 'pablo@lopez.com', '677677677');