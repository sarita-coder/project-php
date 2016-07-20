/* Comentarios   
SQL: STRUCTURE QUERY LANGUAGE - LENGUAJE ESTRCUTURADO DE CONSULTA
BASE de Datos: Coleccion de Datos que estan organizados.

Gestores o Manejadores de BD son programas nos permiten administrar
los datos.

Ejemplos de Gestores de BD: Microsoft Access, Micrisift SQL Server, 
Oracle, Informix, 
DBASE, SQL Lite, PostgreSQL, MySQL.

Sentencia linea de codigo para trabajr con nuestra base de datos.
2tipos de sentencias SQL:

Estructurales:crear, modificar o eliminanr objetos usuario y propiedades
de nuestra base de datos.

De Datos: crear, insertar, eliminar, modificar y buscar informacion
en nuestra base de datos.


mysql dos tipos de engine para tablas 
1) MyISAM - Tablas planas son como si fuera  trabajar datos en excel
2) InnoDB - Tabla Relacionales,
como si fuera atrabajar datos en Access


*/
CREATE DATABASE mis_contactos;
USE mis_contactos;
CREATE TABLE contactos(
	email VARCHAR(50) NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	sexo CHAR(1),
	nacimiento DATE,
	telefono VARCHAR(9),
	pais VARCHAR(50) NOT NULL,
	imagen VARCHAR(50),
	PRIMARY KEY(email),
	FULLTEXT KEY buscador(email, nombre,sexo,telefono,pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
	id_pais INT NOT NULL AUTO_INCREMENT,
	pais VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais(id_pais,pais) VALUES 
	(1,"México"),
	(2,"Colombia"),
	(3,"Guatemala"),
	(4,"España"),
	(5,"Brasil"),
	(6,"Uruguay"),
	(7,"Perú"),
	(8,"Argentina"),
	(9,"Chile"),
	(10,"Paraguay"),
	(11,"Honduras"),
	(12,"El Salvador"),
	(13,"Nicaragua"),
	(14,"Costa Rica"),
	(15,"Panamá"),
	(16,"Venezuela"),
	(17,"Ecuador"),
	(18,"Bolivia"),
	(19,"Canada"),
	(20,"Estados Unidos"),
	(21,"Groenlandia"),
	(22,"República Dominicana"),
	(23,"Haiti"),
	(24,"Cuba"),
	(25,"Belice"),
	(26,"España"),
	(27,"Francia"),
	(28,"Alemania"),
	(29,"Italia"),
	(30,"Japón"),
	(31,"China"),
	(32,"Egipto"),
	(33,"Sudafrica"),
	(34,"Australia"),
	(35,"Nueva Zelandia");





