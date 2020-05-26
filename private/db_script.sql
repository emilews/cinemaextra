drop table if exists usuarios;
create table usuarios (
id_usuario int NOT NULL AUTO_INCREMENT,
nombre_usuario varchar(255) UNIQUE,
contraseña varchar(255),
tipo_usuario varchar(255),
imagen varchar(255),
PRIMARY KEY(id_usuario)
);

INSERT INTO usuarios(nombre_usuario,contraseña,tipo_usuario,imagen) VALUES ('admin','admin','admin','usuario.jpg');

INSERT INTO usuarios(tipo_usuario) VALUES ('admin');

