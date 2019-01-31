-- This is where all curriculum data will be stored.
CREATE TABLE techniques (
  techniqueId serial NOT NULL PRIMARY KEY,
  rankId int DEFAULT NULL REFERENCES ranks(rankId),
  categoryId int NOT NULL REFERENCES curriculum_categories(categoryId),
  techniqueKName varchar(50) DEFAULT NULL,
  techniqueEName varchar(50) NOT NULL,
  techniqueDesc text
);
 