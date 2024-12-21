CREATE database cabinet ;
use cabinet;
drop  table utilisateur ;
drop  table reservation;
drop  table disponobilites ;
drop  table  avecate ;

create table utilisateur (
id int primary key auto_increment, 
nom VARCHAR(20)  not  null,
prenom  VARCHAR(30) not null,
email VARCHAR(30) not null,
role int  not null,
password VARCHAR(20) not null,
photo VARCHAR(80) ,
telephone VARCHAR(20) not null
);

insert into utilisateur (nom ,prenom ,email ,role,password,telephone) values('hamza','lakroune',1,'0609098736');
insert  into  reservation (1,1,'conferme','2024-10-12');
create table reservation (
    id int primary key auto_increment,
    id_client  int  not null,
    id_avocat int not null,
    status  varchar(10) not null,
    constraint  FK_UTI FOREIGN key(id_client) REFERENCES utilisateur(id) on delete cascade on update cascade ,
    constraint  FK_AVE FOREIGN key(id_avocat) REFERENCES utilisateur(id)  on delete cascade on update cascade 
);
create table disponobilites  (
    id int primary key auto_increment,
    id_avocate int not null,
    dateD date not null,
    constraint  FK_D FOREIGN key(id_avocate) REFERENCES utilisateur(id) on delete cascade on update cascade
);
create table avecate (
    id int PRIMARY key auto_increment , 
    specialites VARCHAR(20) not null,
    biographie text  not NULL ,
    annes_experience  int not null, 
    constraint  FK_A FOREIGN key(id) REFERENCES utilisateur(id)  on delete cascade on update cascade
);