-- This will keep track of the fitness test results for each student
CREATE TABLE fitness (
  fitnessId serial NOT NULL PRIMARY KEY,
  studentId int NOT NULL REFERENCES students(studentId),
  rankId int NOT NULL REFERENCES ranks(rankId),
  testDate timestamp DEFAULT CURRENT_TIMESTAMP,
  pushups varchar(10) DEFAULT NULL,
  pushupsStyle varchar(50) NOT NULL DEFAULT 'Standard',
  legRaises varchar(10) DEFAULT NULL,
  legRaisesStyle varchar(50) NOT NULL DEFAULT 'Standard',
  pullups varchar(10) DEFAULT NULL,
  pullupsStyle varchar(50) NOT NULL DEFAULT 'Standard',
  jumps varchar(10) DEFAULT NULL,
  jumpsStyle varchar(50) NOT NULL DEFAULT 'Frog Jumps',
  roundRight int DEFAULT NULL,
  roundLeft int DEFAULT NULL,
  roundTime varchar(20) NOT NULL DEFAULT '30 seconds',
  stretch decimal DEFAULT NULL,
  stretchStyle varchar(50) NOT NULL DEFAULT 'Pike Stretch'
);
