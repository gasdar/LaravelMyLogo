-- CREACIÓN DE BASE DE DATOS Y TABLAS CON SUS RELACIONES

CREATE DATABASE `bd_tallerweb_p1` DEFAULT CHARACTER SET UTF8;
USE `bd_tallerweb_p1`;

CREATE TABLE IF NOT EXISTS `tbl_sucursales`(
	Suc_Id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	Suc_Region VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'la region de la sucursal',
	Suc_Direccion VARCHAR(50) NOT NULL COMMENT 'direccion de sucursal',
	PRIMARY KEY (Suc_Id)
)ENGINE=INNODB CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `tbl_productos`(
	Prod_Id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	Prod_Nombre VARCHAR(50) NOT NULL COMMENT 'Nombre de Producto',
	Prod_Descripcion VARCHAR(200) NOT NULL DEFAULT '' COMMENT 'Descripción de Producto',
	Prod_precio DECIMAL(10, 2) NOT NULL DEFAULT '0.00' COMMENT 'Precio del Producto',
	PRIMARY KEY (Prod_Id)
) ENGINE=INNODB CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `tbl_prod_suc`(
	ProdId INT UNSIGNED NOT NULL,
	SucId INT UNSIGNED NOT NULL,
	Stock SMALLINT UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Stock de un producto en una sucursal determinada',
	PRIMARY KEY(ProdId, SucId),
	CONSTRAINT fk1_producto_sucursal FOREIGN KEY (ProdId) REFERENCES tbl_productos(Prod_Id),
	CONSTRAINT fk2_sucursal_producto FOREIGN KEY (SucId) REFERENCES tbl_sucursales(Suc_Id)
) ENGINE=INNODB CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `tbl_categorias`(
	Cat_Id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	Cat_Nombre VARCHAR(50) NOT NULL COMMENT 'Nombre de Categoría',
	PRIMARY KEY(Cat_Id)
) ENGINE=INNODB CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `tbl_prod_cat`(
	ProdId INT UNSIGNED NOT NULL,
	CatId INT UNSIGNED NOT NULL,
	PRIMARY KEY (ProdId, CatId),
	CONSTRAINT fk1_producto_categoria FOREIGN KEY (ProdId) REFERENCES tbl_productos(Prod_Id),
	CONSTRAINT fk2_categoria_producto FOREIGN KEY (CatId) REFERENCES tbl_categorias(Cat_Id)
) ENGINE=INNODB CHARSET=UTF8;

-- INSERCCIÓN DE DATOS PARA LA ELABORACIÓN DEL PROYECTO
INSERT INTO tbl_sucursales (Suc_Region, Suc_Direccion) VALUES
 	('Metropolitana', 'las ramas 780'),
 	('Valparaiso', 'aguas claras 500'),
 	('Metropolitana', 'San Antonio 690');
 
 INSERT INTO tbl_productos (Prod_Nombre, Prod_Descripcion, Prod_Precio) VALUES
 	('Lámpara de Mesa', 'Lámpara moderna para iluminación en el hogar', 3200.00),
	('Sofá de Cuero', 'Sofá de cuero, 3 plazas', 250000.00),
	('Cafetera Automática', 'Cafetera programable para café fresco', 30000.00),
	('Juego de Sábanas', 'Sábanas de algodón suave, juego de 4 piezas', 22000.00),
	('Smart TV 55 pulgadas', 'Televisor 4K Smart', 210000.00),
	('Mesa de Centro', 'Mesa de centro con diseño especial', 130000.00),
	('Jarrón de Cerámica', 'Jarrón decorativo de cerámica en blanco', 4500.00),
	('Aspiradora Robot', 'Aspiradora robotizada para limpieza', 14000.00),
	('Reloj de Pared', 'Reloj de pared con diseño rústico', 7000.00),
	('Cortinas Opacas', 'Cortinas de oscurecimiento para habitaciones', 26000.00),
	('Refrigerador', 'Refrigerador de material inoxidable', 450000.00),
	('Espejo Decorativo', 'Espejo de pared con marco sencillo', 3800.00),
	('Set Cocina', 'Set de ollas y sartenes', 32000.00),
	('Almohada Sencilla', 'Almohada de algodon sencilla', 3500.00),
	('Audifonos Alambricos', 'Audifonos Alambricos Negro', 4000.00);
	
INSERT INTO tbl_categorias (Cat_Nombre) VALUES
	('Hogar'),
	('Electrónica'),
	('Adorno');
		
INSERT INTO tbl_prod_suc (ProdId, SucId, Stock) VALUES
	(1, 1, 8),
 	(2, 1, 3),
 	(4, 1, 12),
 	(5, 1, 7),
 	(8, 1, 4),
 	(12, 1, 14),
 	(14, 1, 23),
 	(15, 1, 17),
 	(1, 2, 15),
 	(3, 2, 5),
 	(5, 2, 8),
 	(6, 2, 3),
 	(7, 2, 9),
 	(8, 2, 14),
 	(11, 2, 2),
 	(14, 2, 12),
 	(2, 3, 15),
 	(3, 3, 24),
 	(4, 3, 5),
 	(5, 3, 16),
 	(6, 3, 8),
 	(7, 3, 3),
 	(8, 3, 15),
 	(9, 3, 5),
 	(10, 3, 7),
 	(11, 3, 16),
 	(12, 3, 3),
 	(13, 3, 9),
 	(14, 3, 7);
 	
 	INSERT INTO tbl_prod_cat (ProdId, CatId) VALUES
 		(1, 1),
 		(1, 3),
 		(2, 1),
 		(3, 1),
 		(3, 2),
 		(4, 1),
 		(5, 2),
 		(6, 1),
 		(6, 3),
 		(7, 1),
 		(7, 3),
 		(8, 1),
 		(8, 2),
 		(9, 1),
 		(9, 3),
 		(10, 1),
 		(11, 1),
 		(12, 1),
 		(12, 3),
 		(13, 1),
 		(14, 1),
 		(15, 2);
 		





