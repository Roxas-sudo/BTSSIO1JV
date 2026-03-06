drop database if exists logintest;

create database logintest;

use logintest;

create table user(
id int auto_increment not null primary key,
pseudo varchar(20),
mail varchar(50),
mdp varchar(50)
);

insert into user values(null,"rayonx","zizou@zizou.com","user123");
insert into user values(null,"texte","text@text.com","user123");
insert into user values(null,"pocorico","popo@popo.com","user123");
insert into user values(null,"cocorico","coco@coco.com","user123");

select * from user where mail = "" OR 1=1;

select * from user;

select * from user where mail = 'zizou@zizou.com'-- ' and mdp = '';

select * from 