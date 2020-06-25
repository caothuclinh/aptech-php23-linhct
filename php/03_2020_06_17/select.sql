
USE aptechphp23_linhct;
-- lay tat ca du lieu trong table users
SELECT * FROM users;
--lay tat ca user_name trong table users
SELECT `user_name` FROM users;
--lay user co id_user la 7
SELECT `user_name` FROM users WHERE id_user = 7;
--lay user co name la linh
SELECT * FROM `users` WHERE name = 'linh';
-- tim tat ca nhung nguoi co ten la ngoc
SELECT * FROM `users` WHERE user_name like 'ngoc%';
