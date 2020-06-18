SELECT * FROM aptech_php_23.users;

drop table aptech_php_23.users;

create table aptech_php_23.users (
	id int primary key auto_increment,
    name varchar(255) unique,
    password varchar(255)
);

insert into aptech_php_23.users (name,password)
values ('Tuong','123'), ('Duong','abcd');

select * from aptech_php_23.users;