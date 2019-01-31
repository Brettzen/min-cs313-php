-- This will house image information for techniques
CREATE TABLE technique_images (
  imgId serial NOT NULL PRIMARY KEY,
  techniqueId int NOT NULL REFERENCES techniques(techniqueId),
  techniqueTitle varchar(100) DEFAULT NULL,
  imgDesc text,
  imgSrc varchar(255) NOT NULL,
  imgWidth int DEFAULT NULL,
  imgHeight int DEFAULT NULL,
  imgAlt varchar(35) NOT NULL,
  imgTitle varchar(30) NOT NULL,
  imgSize int NOT NULL DEFAULT '100'
);
