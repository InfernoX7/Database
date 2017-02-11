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
  PRIMARY KEY(memberID)
  );
  
CREATE TABLE payment(
  paymentID INT AUTO_INCREMENT,
  memberID INT, 
  amount float,
  _month varchar(40),
  PRIMARY KEY(paymentID)
  );
CREATE TABLE _class(
  classID INT AUTO_INCREMENT,
  className varchar(40), 
  _day VARCHAR(10),
  trainerID INT,
  PRIMARY KEY(classID)
  );
  
  CREATE TABLE enrolment(
  enrolmentID INT AUTO_INCREMENT,
  memberID INT, 
  classID INT,
  PRIMARY KEY(enrolmentID)
  );
  
