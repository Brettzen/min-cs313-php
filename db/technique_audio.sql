-- This will house audio information for techniques
CREATE TABLE technique_audio (
  audioId serial NOT NULL PRIMARY KEY,
  techniqueId int NOT NULL REFERENCES techniques(techniqueId),
  audioTitle varchar(100) NOT NULL,
  audioDesc text,
  audioSrc varchar(255) NOT NULL,
  audioType varchar(20)
);
