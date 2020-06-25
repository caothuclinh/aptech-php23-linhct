<!-- -- tao bang product va bang order -->
<?php
"CREATE TABLE aptechphp23_05.product(
	id_product int(10) PRIMARY KEY AUTO_INCREMENT,
	name varchar(100) NOT NULL UNIQUE,
	gia float NOT NULL,
	so_luong varchar(20) NOT NULL
)ENGINE INNODB;
INSERT INTO aptechphp23_05.product(id_product,name,gia,so_luong) 
VALUES(null,'chuot',5000,10),
(null,'ban phim',2000,50),
(null,'man hinh',70000,100),
(null,'loa',3000,200),
(null,'tai nghe',10000,28);
CREATE TABLE aptechphp23_05.order(
	id_order int(10) PRIMARY KEY AUTO_INCREMENT,
	id_user int(10) NOT NULL,
	ngay_tao varchar(50) NOT NULL,
	tien varchar(40) NOT NULL
)ENGINE INNODB;
INSERT INTO aptechphp23_05.order(id_order,id_user,ngay_tao,tien) VALUES(null,2,now(),90000),(null,4,now(),12000),(null,3,now(),23400);
CREATE TABLE order_details(
	id_order_details int(10) PRIMARY KEY AUTO_INCREMENT,
	id_order int(10) NOT NULL,
	id_product int(10) NOT NULL,
	so_luong varchar(40) NOT NULL
)
INSERT INTO aptechphp23_05.order_details(id_order_details,id_order,id_product,so_luong) VALUES(null,2,5,7),(null,1,3,9);
