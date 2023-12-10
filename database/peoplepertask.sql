
create  DATABASE peoplepertask;

use peoplepertask;

show DATABASES;


CREATE table user(
    id int PRIMARY KEY AUTO_INCREMENT,
    Nom varchar(40),
    passwords varchar(10),
    email VARCHAR(40),
    role VARCHAR(40),
    Skills VARCHAR(400)
)


ALTER TABLE Projets MODIFY COLUMN Descriptions VARCHAR(255);

insert into user (Nom,passwords,email,otherinfo) values("ahmed","ahmed6789","ahmed7@gmail.com","otherinfo2");

select * from user ;



DELETE from user where id = 9; 
CREATE Table categories(
    id int PRIMARY KEY AUTO_INCREMENT,
    nomcat varchar(40)
)

ALTER TABLE Projets ADD COLUMN Tags VARCHAR(255);
ALTER TABLE user ADD COLUMN Skills VARCHAR(255);


SELECT iduser, COUNT(*) AS project_count
FROM Projets
GROUP BY iduser;

select * from categories

delete from categories where id = 5;
INSERT INTO categories (nomcat) VALUES ('UX-UI');

CREATE TABLE souscategories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomsuscatgs VARCHAR(40),
    idcat INT,
    FOREIGN KEY (idcat) REFERENCES categories(id)
);
select * from souscategories

insert into souscategories (nomsuscatgs,idcat) values('nomsuscatgs5',11);
ALTER TABLE souscategories
ADD CONSTRAINT fks
FOREIGN KEY (idcat) REFERENCES categories(id)
ON DELETE CASCADE
ON UPDATE CASCADE;


create table Projets(
    id INT PRIMARY KEY AUTO_INCREMENT,
    Titre varchar(40),
    Descriptions VARCHAR(50),
    iduser int ,
    idcat int ,
    FOREIGN KEY (idcat) REFERENCES categories(id),
    FOREIGN KEY (iduser) REFERENCES user(id),
    FOREIGN KEY (idsoc) REFERENCES souscategories(id)
)

select Projets.Titre , Projets.Descriptions , user.nom , categories.nomcat from Projets inner JOIN categories INNER JOIN user on user.id = Projets.iduser and categories.id = Projets.idcat;

select  projets.id as id , Titre , Descriptions,user.Nom as user ,categories.nomcat as cetegory
 from projets INNER JOIN categories INNER JOIN user on user.id = projets.iduser 
 and categories.id= projets.idcat;

ALTER TABLE Projets
ADD CONSTRAINT  CONSTRAINT3
FOREIGN KEY (idsoc) REFERENCES souscategories(id)
ON DELETE CASCADE
ON UPDATE CASCADE;

select * from Projets


INSERT INTO Projets (Titre, Descriptions, idsoc, iduser, idcat)
VALUES('title2', 'disc2', 7, 40, 11);

create Table Offres(
    id INT PRIMARY KEY AUTO_INCREMENT,
    Montant FLOAT ,
    Délai DATE,
    iduser int ,
    idprojet int ,
    FOREIGN KEY (idprojet) REFERENCES Projets(id),
    FOREIGN KEY (iduser) REFERENCES user(id)
)

select   offres.Montant ,offres.Délai ,offres.iduser ,offres.idprojet ,user.Nom , projets.Titre from offres INNER JOIN user INNER JOIN projets
 on (user.id = offres.iduser and projets.id =  offres.idprojet) ;

insert into Offres(Montant,Délai,iduser,idprojet) values(68,'2023-01-19',68,38);


select * from Offres



SELECT Offres.id AS id,
       Offres.Montant AS Montant,
       Offres.Délai AS Délai,
       user.Nom AS Nom,
       Projets.Titre AS Titre
FROM Offres
LEFT JOIN user ON user.id = Offres.iduser
left JOIN Projets ON Projets.id = Offres.id;








insert into offres (montant,Délai,idfre,idprojet) values(30,'2023-12-07',4,33);

create Table Temoignages(
    id int PRIMARY KEY AUTO_INCREMENT,
    Commentaire varchar(40),

    iduser int ,
    FOREIGN KEY (iduser) REFERENCES user(id)
)


insert into temoignages (Commentaire,iduser) values('Commentaire7',9);
select * from temoignages



CREATE PROCEDURE InsertIntoTable
(
    IN id INT,
    IN Commentaire VARCHAR(255),
    IN iduser int 
)
BEGIN
    INSERT INTO Temoignages (id,Commentaire, iduser)
    VALUES (id, Commentaire,iduser);
END

call InsertIntoTable(5,"Commentaire5",38)

select * from temoignages


CREATE PROCEDURE InsertIntoTable
(
    IN id INT,
    IN Commentaire VARCHAR(255),
    IN iduser int 
)
BEGIN
    INSERT INTO Temoignages (id,Commentaire, iduser)
    VALUES (id, Commentaire,iduser);
END

select* from user;
call InsertIntofreelances(4,"hassan","front end end",38)

select * from user;

alter table freelances
RENAME COLUMN Compétences to Competences

CREATE PROCEDURE InsertIntofreelances
(
    IN id INT,
    IN Nom VARCHAR(255),
    IN Compétences VARCHAR(40),
    IN iduser int 
)
BEGIN
    INSERT INTO freelances (id,Nom, Competences,iduser)
    VALUES (id, Nom,Competences,iduser);
END





ALTER TABLE freelances
ADD CONSTRAINT cons1
FOREIGN KEY (iduser) REFERENCES user(id)
ON DELETE CASCADE
ON UPDATE CASCADE;


select  projets.id as id , Titre , Descriptions,user.Nom as user ,categories.nomcat as cetegory
 from projets INNER JOIN categories INNER JOIN user on user.id = projets.iduser 
 and categories.id= projets.idcat;


  
select Temoignages.Commentaire , user.Nom  from Temoignages INNER JOIN user on Temoignages.iduser = user.id;



 enum roles('admins','admins','freelance');
{
    case user ;
    case admins;
    case freelance;
}

