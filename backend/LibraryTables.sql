use NewLibrary;
GO

CREATE TABLE Movie
(
  MovieName VARCHAR(50) NOT NULL PRIMARY KEY,
  Genre VARCHAR(20) NOT NULL,
  Rating VARChar(20),
  Director VARCHAR(30) NOT NULL,
  Year Int NOT NULL CHECK (Year between 1895 and 2023),
  Inv INT Not Null check (Inv between 0 and 4)
);

CREATE TABLE Book
(
  ISBN char(13) NOT NULL PRIMARY KEY,
  BookName VARCHAR(50),
  Genre VARCHAR(20) NOT NULL,
  Author VARCHAR(30) NOT NULL,
  Inv INT not null check (Inv between 0 and 4)
);

CREATE TABLE Employee
(
  Enum INT NOT NULL PRIMARY KEY,
  ssn INT NOT NULL UNIQUE Check (ssn between 100000000 and 999999999) ,
  fname VARCHAR(20) NOT NULL,
  lname VARCHAR(20) NOT NULL,
  DOB DATE NOT NULL,
  StartDate DATE NOT NULL,
  email VARCHAR(319) NOT NULL,
);

CREATE TABLE Member
(
  Mnum INT IDENTITY(111,1) PRIMARY KEY,
  fname VARCHAR(20) NOT NULL,
  lname VARCHAR(20) NOT NULL,
  DOB DATE NOT NULL,
  JoinDate DATE NOT NULL,
  Email VARCHAR(319) NOT NULL,
  PhoneNum INT
);

CREATE TABLE Checkout
(
  TransactionNum INT IDENTITY(1000,1) PRIMARY KEY ,
  Enum INT  NOT NULL FOREIGN KEY REFERENCES Employee(Enum),
  Mnum INT  NOT NULL FOREIGN KEY REFERENCES Member(Mnum),
  DoC DATE NOT NULL,
  DoR DATE NOT NULL,
  MovieName VARCHAR(50)  FOREIGN KEY REFERENCES Movie(MovieName),
  ISBN char(13)  FOREIGN KEY REFERENCES Book(ISBN),
  MediaType BIT not Null
);

CREATE TABLE Reservation
(
  ResNum INT IDENTITY(1000,1) Primary Key, 
  ResDate DATE NOT NULL,
  Mnum INT NOT NULL FOREIGN Key References Member(Mnum),
  MovieName VARCHAR(50)  FOREIGN KEY REFERENCES Movie(MovieName),
  ISBN char(13)  FOREIGN KEY REFERENCES Book(ISBN),
  MediaType BIT not Null
);

CREATE TABLE Posses
(
  Mnum INT  NOT NULL FOREIGN KEY REFERENCES Member(Mnum),
  MovieName VARCHAR(50)  FOREIGN KEY REFERENCES Movie(MovieName),
  ISBN char(13)  FOREIGN KEY REFERENCES Book(ISBN),
  MediaType BIT not Null
);

