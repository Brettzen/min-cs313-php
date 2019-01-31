-- This will house video information for techniques
CREATE TABLE technique_videos (
  vidId serial NOT NULL PRIMARY KEY,
  techniqueId int NOT NULL,
  vidTitle varchar(100) NOT NULL,
  vidDesc text,
  vidSrc varchar(255) NOT NULL,
  vidWidth int NOT NULL,
  vidHeight int NOT NULL
);
