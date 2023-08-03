-- DROP the database if it exists
-- CREATE THE DATABASE
DROP DATABASE IF EXISTS advitify;
CREATE DATABASE IF NOT EXISTS advitify;

--use the database
USE advitify;

CREATE TABLE `User` (
  `UserId` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) UNIQUE NOT NULL,
  `Password` varchar(255) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE `Client` (
  `ClientId` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `FirstName` char(50) NOT NULL,
  `LastName` char(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` char(15) NOT NULL,
  `user_id` integer NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `User` (`UserId`)
)ENGINE=InnoDB;

CREATE TABLE `Consultant` (
  `ConsultantId` integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `FirstName` char(50) NOT NULL,
  `LastName` char(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` char(15) NOT NULL,
  `Category` char(100) NOT NULL,
  `Description` text NOT NULL,
  `JoinedDate` timestamp NOT NULL,
  `user_id` integer NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `User` (`UserId`)
)ENGINE=InnoDB;

CREATE TABLE `Meeting` (
  `Consultant_Id` integer NOT NULL,
  `Client_Id` integer NOT NULL,
  `PlannedDate` date NOT NULL,
  `Status` char(50) NOT NULL,
  PRIMARY KEY (`Consultant_Id`, `Client_Id`),
  FOREIGN KEY (`Client_Id`) REFERENCES `Client` (`ClientId`),
  FOREIGN KEY (`Consultant_Id`) REFERENCES `Consultant` (`ConsultantId`)
)ENGINE=InnoDB;

INSERT INTO `User` VALUES
  (1, 'john', '$2y$10$31lBbH/lgnBJTAmPkTXtbe9IhwvuRDGBtFMFSwOoFtNJpQoEzGp4y'),
  (2, 'mark', '$2y$10$x9Bp.RNh9QV.WFzGUzRZLObYSrztKm5hNfqZA.9MGeTBHJWAzma0i'),
  (3, 'will', ' $2y$10$kk/It6RKNnJtvS1bJu3SAOgECb5zL/3dwDPEoMe3C1I8RLnIBm40O'),
  (4, 'roy', '$2y$10$yZJhfBydjqnuJyyJS280yO4p9IPTNdiAGaVWaHKuYZnFAWwFXYS4e'),
  (5, 'dom', '$2y$10$Bz6kc4sZVIblXhSGqajR1unBWpZRRmxYHVBmLigNN1wwwLzbWaBkW'),
  (6, 'barry', '$2y$10$xov4JjzffWa/PxcK5VGNveB/Jlkv4wsEOwA2Yv8927xLrggo9SLD2');

   INSERT INTO `Client` VALUES
  (1, 'John', 'Smith', 'smith@douglascollege.ca', '2368335240',1),
  (2, 'Mark', 'Doe','doe@douglascollege.ca', '2361234567',1),
  (3, 'Will', 'Foe', 'wfoe@douglascollege.ca', '2338459654',2);

  INSERT INTO `Consultant` VALUES
  (1, 'Roy', 'Blue', 'roy@douglascollege.ca', '2367665240', 'backend','Lorem ipsum dolor sit amet consectetur.', '2010-09-14',4),
  (2, 'Dom', 'Green','green@douglascollege.ca', '2361347828', 'database','Tellus posuere phasellus sem id sem.', '2018-07-04',5),
  (3, 'Barry', 'Black', 'black@douglascollege.ca', '2338765412', 'cybersecurity','Lorem ipsum dolor sit amet consectetur.', '2021-08-26',6);

   INSERT INTO `Meeting` VALUES
  (1, 1, '2023-08-02', 'completed'),
  (1, 2, '2023-08-29', 'planned'),
  (3, 3, '2023-08-31', 'planned');


