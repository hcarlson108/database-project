
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
  email VARCHAR(319) NOT NULL
);

CREATE TABLE Member
(
  Mnum INT AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(20) NOT NULL,
  lname VARCHAR(20) NOT NULL,
  DOB DATE NOT NULL,
  JoinDate DATE NOT NULL,
  Email VARCHAR(319) NOT NULL,
  PhoneNum INT
);

CREATE TABLE Checkout
(
  TransactionNum INT AUTO_INCREMENT PRIMARY KEY ,
  Enum INT  NOT NULL,
      FOREIGN KEY(Enum) REFERENCES Employee(Enum),
  Mnum INT  NOT NULL,
       FOREIGN KEY(Mnum) REFERENCES Member(Mnum),
  DoC DATE NOT NULL,
  DoR DATE NOT NULL,
  MovieName VARCHAR(50),
      FOREIGN KEY(MovieName) REFERENCES Movie(MovieName),
  ISBN char(13),
      FOREIGN KEY(ISBN) REFERENCES Book(ISBN),
  MediaType BIT not Null
);


CREATE TABLE Reservation
(
  ResNum INT AUTO_INCREMENT Primary Key, 
  ResDate DATE NOT NULL,
  Mnum INT NOT NULL,
      FOREIGN Key(Mnum) References Member(Mnum),
  MovieName VARCHAR(50),
      FOREIGN KEY(MovieName) REFERENCES Movie(MovieName),
  ISBN char(13),
      FOREIGN KEY(ISBN) REFERENCES Book(ISBN),
  MediaType BIT not Null
);

CREATE TABLE Posses
(
  Mnum INT  NOT NULL,
      FOREIGN KEY(Mnum) REFERENCES Member(Mnum),
  MovieName VARCHAR(50),
      FOREIGN KEY(MovieName) REFERENCES Movie(MovieName),
  ISBN char(13),
      FOREIGN KEY(ISBN) REFERENCES Book(ISBN),
  MediaType BIT not Null
);

