drop database if exists PP_01_Gestion_Eleve;
create database PP_01_Gestion_Eleve;
use PP_01_Gestion_Eleve;

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
insert into user (nom, prenom, email, pass, role) values ('Gia','Nghi','nghi@mail.com','123','user');

insert into eleve (num_INE, nom, prenom, date_naissance, pays, classe, matiere1, matiere2, matiere3, matiere4, matiere5) values
('INE001', 'Dupont', 'Jean', '2005-01-15', 'France', '6A', 12.5, 14.0, 13.0, 15.0, 16.0),
('INE002', 'Martin', 'Claire', '2006-03-22', 'France', '6B', 10.0, 11.5, 12.0, 13.5, 14.0),
('INE003', 'Nguyen', 'Thi', '2005-07-10', 'Vietnam', '6A', 14.0, 15.0, 13.5, 12.5, 11.0),
('INE004', 'Smith', 'John', '2004-12-05', 'USA', '6C', 9.0, 10.0, 11.0, 12.0, 13.0),
('INE005', 'Garcia', 'Maria', '2005-09-18', 'Spain', '6B', 13.0, 14.0, 15.0, 16.0, 17.0),
('INE006', 'Kumar', 'Raj', '2006-02-25', 'India', '6A', 8.0, 9.0, 10.0, 11.0, 12.0),
('INE007', 'Chen', 'Li', '2005-11-30', 'China', '6C', 15.0, 14.5, 13.5, 12.0, 11.5),
('INE008', 'Brown', 'Emily', '2006-04-12', 'UK', '6B', 10.5, 11.0, 12.5, 13.0, 14.5),
('INE009', 'Müller', 'Hans', '2005-06-20', 'Germany', '6A', 14.5, 13.5, 12.5, 11.5, 10.5),
('INE010', 'Rossi', 'Luca', '2006-08-08', 'Italy', '6C', 9.5, 10.5, 11.5, 12.5, 13.5),
('INE011', 'Lee', 'Min', '2005-10-14', 'South Korea', '6B', 16.0, 15.5, 14.5, 13.5, 12.5),
('INE012', 'Silva', 'Ana', '2006-01-19', 'Brazil', '6A', 11.0, 12.0, 13.0, 14.0, 15.0),
('INE013', 'Ahmed', 'Omar', '2005-03-03', 'Egypt', '6C', 10.0, 11.0, 12.0, 13.0, 14.0);