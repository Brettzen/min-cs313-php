-- This will create a type for the gender enumerator
CREATE TYPE gender AS ENUM ('m', 'f');

-- This will hold all student data
CREATE TABLE students (
  studentId serial NOT NULL PRIMARY KEY,
  rankId int NOT NULL REFERENCES ranks(rankId),
  rankName varchar(25) NOT NULL DEFAULT '10',
  username varchar(30) NOT NULL,
  password varchar(255) NOT NULL DEFAULT '',
  firstName varchar(30) NOT NULL,
  lastName varchar(30) NOT NULL,
  email varchar(100) DEFAULT NULL,
  gender gender DEFAULT NULL,
  beltSize int DEFAULT NULL
);
