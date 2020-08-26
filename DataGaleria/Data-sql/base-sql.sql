DROP DATABASE LegalID;
CREATE DATABASE LegalID;
USE LegalID;

CREATE TABLE Usuario
(nombre_usuario VARCHAR (45),
apellidos_usuario VARCHAR (45),
Sexo VARCHAR (2),
correo VARCHAR (50),
edad INT (5),
pais VARCHAR (20),
ciudad VARCHAR (20),
direccion VARCHAR (30),
telefono VARCHAR (40),
tipo_usuario VARCHAR (30),
cedula INT (30) PRIMARY KEY,
carpeta VARCHAR (100),
contraseña VARCHAR (100)
);
CREATE TABLE Curso
(id_curso INT (10) PRIMARY KEY ,
nombre_curso VARCHAR (20),
descripcion VARCHAR (100),
id_usuario_titula VARCHAR (30),
semanas_curso INT (3)
);
CREATE TABLE Curso_tiene_Usuario
(id_curso INT (10),
id_usuario INT (30),
fecha_inicio DATE,
fecha_fin DATE,
constraint fk_usuario_tiene FOREIGN KEY (id_curso) REFERENCES Curso(id_curso),
constraint fk_curso_tiene FOREIGN KEY (id_usuario) REFERENCES Usuario(cedula)
);


INSERT INTO Usuario (nombre_usuario,apellidos_usuario,Sexo,correo,edad,pais,ciudad,direccion,telefono,tipo_usuario,cedula,carpeta,contraseña) VALUES ("us","dr","m","juancorre",24,"colombia","buca","cll41n34",31938975594,"estudiante",1098775771," ","contraseña");