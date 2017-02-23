DROP DATABASE IF EXISTS FnF;  #erase the database if it exists
CREATE DATABASE FnF;          #create a new database
USE FnF;                      #use the database

CREATE TABLE trainer(
  trainerID INT AUTO_INCREMENT,
  trainerName varchar(40),
  PRIMARY KEY(trainerID)
  );
  
  CREATE TABLE member(
  memberID INT AUTO_INCREMENT,
  firstName VARCHAR(40),
  lastName VARCHAR(40),
  age INT,
  trainerID INT,
  PRIMARY KEY(memberID),
  FOREIGN KEY trainer_key (trainerID) references trainer(trainerID)
  );
  
CREATE TABLE payment(
  paymentID INT AUTO_INCREMENT,
  memberID INT, 
  amount float,
  _month varchar(40),
  PRIMARY KEY(paymentID),
  FOREIGN KEY member_key(memberID) references member(memberID)
  );
CREATE TABLE _class(
  classID INT AUTO_INCREMENT,
  className varchar(40), 
  _day VARCHAR(10),
  trainerID INT,
  PRIMARY KEY(classID),
  FOREIGN KEY trainer_class_key(trainerID)references trainer(trainerID)
  );
  
  CREATE TABLE enrolment(
  enrolmentID INT AUTO_INCREMENT,
  memberID INT, 
  classID INT,
  PRIMARY KEY(enrolmentID),
  FOREIGN KEY member_enrolment_key(memberID) references member(memberID),
  FOREIGN KEY class_key(classID) references _class(classID)
  );
  
