create database future;
use future;

-- Crear tabla

create table user_name (
	cod_user char(5) not null primary key,
    user_m varchar(30) not null,
    pass_w varchar(30) not null
);

create table music_list (
	cod_song char(5) not null primary key,
    art_name varchar(30) not null,
    art_song varchar(30) not null,
    art_dur varchar(10) not null
);

-- Insertar datos a la tabla 

insert into user_name values
("FSC01","ronal","1234"),
("FSC02","torres","4567");


insert into music_list values
("FS001","French Kiwi Juice","Leave my home","03:20"),
("FS002","Jacquees","Round 2","03:36"),
("FS003","Chris Brown","No Guidance","04:40"),
("FS004","Ella Mai","Trip","03:40"),
("FS005","PREP","Cheapest Flight","04:29"),
("FS006","Play Nice","Pick Up Your Phone","02:38"),
("FS007","Mannywellz","So Good","03:06"),
("FS008","Jorja Smith","Be Honest","03:26");

select * from music_list;
select * from user_name;



