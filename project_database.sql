create database php_project;
use php_project;
create TABLE admin(
id INT(10) PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(50),
email VARCHAR(100),
userpassword VARCHAR(100),
image VARCHAR(100),
role enum('user','admin')
);

create TABLE product(
id INT(10) PRIMARY KEY AUTO_INCREMENT,
productname VARCHAR(50),
category_id INT(10)
);

create TABLE category(
id INT(10) PRIMARY KEY AUTO_INCREMENT,
categoryname VARCHAR(50)
);
ALTER TABLE product ADD FOREIGN KEY (category_id) REFERENCES category(id);
