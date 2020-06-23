create database aptech_php_23_05;

-- One to one relationship
create table aptech_php_23_05.users (
	id int primary key auto_increment,
    name varchar(255) UNIQUE
);

create table aptech_php_23_05.passports (
	id int primary key auto_increment,
    serial varchar(20) unique,
    user_id int,
    foreign key (user_id) references users(id)
);

insert into aptech_php_23_05.users (name)
values ('Tường'),('Thanh'),('Tùng');

insert into aptech_php_23_05.passports (serial, user_id)
values ('Tường',3),('Thanh',1),('Tùng',2);

select * from aptech_php_23_05.users;
select * from aptech_php_23_05.passports;

select bang1.id, bang1.name, bang2.serial from aptech_php_23_05.users as bang1
join aptech_php_23_05.passports as bang2
on bang1.id = bang2.user_id
where bang2.serial = 'Thanh';

-- One to many relationship
create table aptech_php_23_05.vehicles (
	id int primary key auto_increment,
    bien_so varchar(5) unique,
    user_id int,
    foreign key (user_id) references users(id)
);

insert into aptech_php_23_05.vehicles (bien_so, user_id)
values ('43E1',1), ('92B1',2), ('47E2',1);

SELECT * FROM aptech_php_23_05.vehicles;

select bang1.id, bang1.name, bang2.bien_so from aptech_php_23_05.users as bang1
join aptech_php_23_05.vehicles as bang2
on bang1.id = bang2.user_id
where bang1.name = 'Tường';

-- Many to many relationship
create table aptech_php_23_05.subjects (
	id int primary key auto_increment,
    name varchar(255) unique
);

insert into aptech_php_23_05.subjects(name)
values ('php'),('java'),('html'),('css');

SELECT * FROM aptech_php_23_05.subjects;

create table aptech_php_23_05.subject_user (
	id int primary key auto_increment,
    subject_id int,
    user_id int,
    foreign key (subject_id) references subjects(id),
    foreign key (user_id) references users(id)
);

INSERT INTO aptech_php_23_05.subject_user (subject_id,user_id)
VALUES (1,2),(1,3),(2,1),(2,3),(3,3);

-- QUERY LAY TAT CA MON HOC CUA HOC VIEN CO ID = 3 VA TEN CUA HO
SELECT b.name as user_name, 
c.name AS subject_name 
FROM aptech_php_23_05.subject_user AS a
JOIN aptech_php_23_05.users AS b
ON a.user_id = b.id
JOIN aptech_php_23_05.subjects AS c
ON a.subject_id = c.id
WHERE a.subject_id = 1;