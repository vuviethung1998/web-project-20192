-- How to import database
-- run cmd: docker-compose up
-- run cmd: docker exec -i dev_mysql mysql -uroot -proot default_schema < Punish.sql
-- if get any error uncomment following line: 
-- drop database default_schema;
create database default_schema;
USE default_schema;
create table Room (
    RoomID int NOT NULL AUTO_INCREMENT,
    RoomPassword varchar(255),
    PlayerNumber int,
    PRIMARY KEY (RoomID)
);
create table Player (
    PlayerID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    PlayerName varchar(255),
    PlayerRole ENUM('Player','Host') NOT NULL,
    RoomID int,
    FOREIGN KEY (RoomID) REFERENCES Room(RoomID)
);
create table Question (
    QuestionID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Content text,
    RoomID int,
    FOREIGN KEY (RoomID) REFERENCES Room(RoomID)
);

INSERT INTO Room (RoomPassword, PlayerNumber) VALUES ('1', 3);
INSERT INTO Room (RoomPassword, PlayerNumber) VALUES ('2', 2);

INSERT INTO Player (PlayerName, PlayerRole, RoomID) VALUES ('A', 'Host', 1);
INSERT INTO Player (PlayerName, PlayerRole, RoomID) VALUES ('B', 'Player', 1);
INSERT INTO Player (PlayerName, PlayerRole, RoomID) VALUES ('C', 'Player', 1);
INSERT INTO Player (PlayerName, PlayerRole, RoomID) VALUES ('D', 'Player', 2);
INSERT INTO Player (PlayerName, PlayerRole, RoomID) VALUES ('E', 'Host', 2);

INSERT INTO Question (Content, RoomID) VALUES ('Sing', 1);
INSERT INTO Question (Content, RoomID) VALUES ('Dance', 1);
INSERT INTO Question (Content, RoomID) VALUES ('Run', 1);
INSERT INTO Question (Content, RoomID) VALUES ('Kiss', 1);
INSERT INTO Question (Content, RoomID) VALUES ('Shout', 1);
INSERT INTO Question (Content, RoomID) VALUES ('Nod', 1);
INSERT INTO Question (Content, RoomID) VALUES ('Pock', 2);
INSERT INTO Question (Content, RoomID) VALUES ('Sit', 2);
INSERT INTO Question (Content, RoomID) VALUES ('Stand up', 2);
INSERT INTO Question (Content, RoomID) VALUES ('Turn left', 2);
INSERT INTO Question (Content, RoomID) VALUES ('Turn right', 2);


