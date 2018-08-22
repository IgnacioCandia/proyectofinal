
create database base_de_datos2;

use base_de_datos2;

create table producto(
    id_producto     int(11) not null auto_increment  PRIMARY KEY,
    nom_producto   varchar(20) not null,
    precio_compra  int(11)  not null,
    existencia     int(11)  not null);
    


insert into producto(id_producto,nom_producto,precio_compra,existencia) values
(145,'leche',15,20),
(146,'sopa',10,20);


create table proveedor(
    id_proveedor      int(11)        not null auto_increment PRIMARY KEY,
    marca              varchar(15)   not null,
    nom_proveedor      varchar(35)   not null,
	id_producto        int(11)  null,
    correo_electronico varchar(30)   not null,
    FOREIGN KEY (id_producto   ) REFERENCES producto (id_producto));

insert into proveedor(marca,nom_proveedor,correo_electronico) values
('barcel','jose luis martinez','wg2715wg@gmail.com');

create table venta(
    id_venta   int(11)  primary key,
    hora       int(11)  not null,
    dia        date     not null,
    turno      varchar(15) not null,
    monto      int(11)   not null,
    nom_usuario  varchar(25) not null);
    
    
    
create table ventaproducto(
    id_venta   int(11)  null,
	id_producto     int(11)  null,
	FOREIGN KEY (id_venta) REFERENCES venta (id_venta),
	FOREIGN KEY (id_producto   ) REFERENCES producto (id_producto));
    



CREATE TABLE TIPO_USUARIOS(
ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOMBRET VARCHAR(80) NOT NULL);

INSERT INTO TIPO_USUARIOS( NOMBRET) VALUES
('Administrador'),
('Invitado');

CREATE TABLE USUARIOS(
USUARIOSID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
USUARIO VARCHAR(45) NOT NULL,
PASSWORD VARCHAR(45) NOT NULL,
NOMBREU VARCHAR(80) NOT NULL,
CORREO VARCHAR(45) NOT NULL,
LAST_SESSION DATETIME NULL,
ID_TIPO INT  NULL,
FOREIGN KEY (ID_TIPO) REFERENCES TIPO_USUARIOS (ID));

CREATE TABLE pedido(
    id_pedido                int(11)  null auto_increment  PRIMARY KEY,  
    nombre_producto         varchar(30)   not null,
    cantidad_producto      int(11)   not null,
    fecha_pedido           TIMESTAMP  null,
    cliente   varchar(30)  not null);

