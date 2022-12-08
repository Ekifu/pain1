CREATE TABLE student(
    id int AUTO_INCREMENT ,
    name varchar(30),
    surname varchar(30),
    class_id int,
    PRIMARY KEY(id)
    );
CREATE TABLE klasa(
    id int AUTO_INCREMENT,
    name varchar(30),
    PRIMARY KEY(id)
	);
CREATE TABLE teacher(
    id int AUTO_INCREMENT,
    name varchar(30),
    surname varchar(30),
    age int,
    PRIMARY KEY(id)
    );
CREATE TABLE przedmiot(
    id int AUTO_INCREMENT,
    name varchar(30),
    class_id int,
    PRIMARY KEY(id)
    );
CREATE TABLE user_(
    login varchar(30) UNIQUE,
    haslo varchar(30),
    PRIMARY KEY(login)
    );


ALTER TABLE student ADD FOREIGN KEY (class_id) REFERENCES klasa(id);
ALTER TABLE przedmiot ADD FOREIGN KEY (class_id) REFERENCES klasa(id);
ALTER TABLE teacher ADD FOREIGN KEY (id) REFERENCES przedmiot(id);

ALTER TABLE user_ ADD COLUMN name varchar(40) DEFAULT "imie";
ALTER TABLE user_ ADD COLUMN surname varchar(40) DEFAULT "nazwisko";
ALTER TABLE user_ ADD COLUMN age int DEFAULT 18;
ALTER TABLE user_ ADD COLUMN admin boolean DEFAULT 0;




