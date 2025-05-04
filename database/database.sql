drop database if exists Test;
create database Test;
use Test;

create table eleve (
    id_eleve int(33) primary key auto_increment,
    num_INE varchar(33) not null,
    nom varchar(33) not null,
    prenom varchar(33) not null,
    date_naissance date not null,
    pays varchar(33) not null,
    classe varchar(33) not null,
    matiere1 decimal(5,2) not null default 0.00,
    matiere2 decimal(5,2) not null default 0.00,
    matiere3 decimal(5,2) not null default 0.00,
    matiere4 decimal(5,2) not null default 0.00,
    matiere5 decimal(5,2) not null default 0.00,
    moyenne DECIMAL(5,2) as ((matiere1 + matiere2 + matiere3 + matiere4 + matiere5) / 5) STORED
);

-- Table structure for table `user`
create table user (
    id_user int(5) not null auto_increment primary key,
    nom varchar(33) not null,
    prenom varchar(33) not null,
    email varchar(33) not null,
    pass varchar(255) not null,
    role enum('admin', 'user') not null default 'user',
    date_creation timestamp not null default current_timestamp
);

insert into user (nom, prenom, email, pass, role) values ('Son','Vu','a@gmail.com','123','admin');
insert into user (nom, prenom, email, pass, role) values ('Truong','Vu','b@gmail.com','123','user');

