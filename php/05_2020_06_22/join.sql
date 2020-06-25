CREATE DATABASE aptechphp23_05;
CREATE TABLE aptechphp23_05.users(
	id_user int(10) PRIMARY KEY AUTO_INCREMENT,
	user_name varchar(50) UNIQUE NOT NULL,
	email varchar(100) UNIQUE NOT NULL,
	pass varchar(32) NUIQUE NOT NULL
)ENGINE INNODB;
CREATE TABLE aptechphp23_05.passport(
	id_passport int(10) PRIMARY KEY AUTO_INCREMENT,
	id_user int(10) NOT NULL,
	ho_ten varchar(50) NOT NULL,
	pass_number varchar(20) NOT NULL UNIQUE,
	noi_cap varchar(50) NOT NULL,
	ngay_cap varchar(50) NOT NULL,
	FOREIGN KEY (id_user) REFERENCES Persons(id_user)
)ENGINE INNODB;
CREATE TABLE aptechphp23_05.subjects(
	id_subjects int(10) PRIMARY KEY AUTO_INCREMENT,
	name varchar(255) NOT NULL
)ENGINE INNODB;
INSERT INTO subjects(id_subjects,name) VALUES(null,'PHP'),(null,'HMTL'),(null,'JAVA'),(null,'MySQL'),(null,'javacript');
CREATE TABLE aptechphp23_05.subjects_user(
	id_subjects_user int(10) PRIMARY KEY AUTO_INCREMENT,
	id_subjects int(10) NOT NULL,
	id_user int (10) NOT NULL
)ENGINE INNODB;
INSERT INTO subjects_user(id_subjects_user,id_subjects,id_user) VALUES(null,3,2),(null,3,4),(null,5,1)(null,5,3);
--lay nguoi dung hoc mon nao 
SELECT u.user_name, k.name FROM users as u INNER JOIN subjects_user as s USING
(id_user) INNER JOIN subjects as k USING(id_subjects);
-- mon hoc javascript bao nhieu nguoi hoc
SELECT count(u.user_name), k.name FROM users as u INNER JOIN subjects_user as s USING
(id_user) INNER JOIN subjects as k USING(id_subjects) WHERE k.name ="javascript";
-- ai hoc mon hoc javascript
SELECT u.user_name, k.name FROM users as u INNER JOIN subjects_user as s USING
(id_user) INNER JOIN subjects as k USING(id_subjects);
SELECT * FROM users, passport;
-- hien thi user co ho chieu
SELECT u.user, p.ho_ten, p.pass_number FROM users as u INNER JOIN passport
as p USING(id_user);


