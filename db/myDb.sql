-- This will hold all current ranks as well as CSS styling parameters.
CREATE TABLE ranks (
  rankId serial NOT NULL PRIMARY KEY,
  rank varchar(16) NOT NULL,
  rankName varchar(25) NOT NULL,
  rankColor varchar(20) DEFAULT 'rgba(0,120,150,.9)',
  rankFontColor varchar(20) DEFAULT 'rgb(220,220,220)',
  fitnessColor varchar(20) NOT NULL DEFAULT '	rgba(0,120,150,.9)',
  navHoverColor varchar(20) NOT NULL DEFAULT '#045870'
);

-- Insert current ranks into table.
INSERT INTO ranks (rankId, rank, rankName, rankColor, rankFontColor, fitnessColor, navHoverColor) VALUES
(1, '10th Keup', 'White', '#1985A0', 'rgb(220,220,220)', 'rgba(0,120,150,.4)', '#045870'),
(2, '9th Keup', 'Advanced White', '#1985A0', 'rgb(220,220,220)', 'rgba(0,120,150,.4)', '#045870'),
(3, '8th Keup', 'Yellow', '#FFFF19', 'rgb(0,0,0)', 'rgba(255,255,0,.4)', '#D3D300'),
(4, '7th Keup', 'Advanced Yellow', '#FFFF19', 'rgb(0,0,0)', 'rgba(255,255,0,.4)', '#D3D300'),
(5, '6th Keup', 'Green', '#19BB85', 'rgb(220,220,220)', 'rgba(0,180,120,.4)', '#007E55'),
(6, '5th Keup', 'Advanced Green', '#19BB85', 'rgb(220,220,220)', 'rgba(0,180,120,.4)', '#007E55'),
(7, '4th Keup', 'Blue', '#1985FF', 'rgb(220,220,220)', 'rgba(0,120,255,.4)', '#015EC6'),
(8, '3rd Keup', 'Advanced Blue', '#1985FF', 'rgb(220,220,220)', 'rgba(0,120,255,.4)', '#015EC6'),
(9, '2nd Keup', 'Red', '#FF1919', 'rgb(220,220,220)', 'rgba(255,0,0,.4)', '#A60000'),
(10, '1st Keup', 'Advanced Red', '#FF1919', 'rgb(220,220,220)', 'rgba(255,0,0,.4)', '#A60000'),
(101, '1st Dan', 'Black: 1st Dan', '#3D3D3D', 'rgb(255,255,0)', 'rgba(40,40,40,.4)', '#727272'),
(102, '2nd Dan', 'Black: 2nd Dan', '#3D3D3D', 'rgb(255,255,0)', 'rgba(40,40,40,.4)', '#727272'),
(103, '3rd Dan', 'Black: 3rd Dan', '#3D3D3D', 'rgb(255,255,0)', 'rgba(40,40,40,.4)', '#727272'),
(104, '4th Dan', 'Black: 4th Dan', '#3D3D3D', 'rgb(255,255,0)', 'rgba(40,40,40,.4)', '#727272');

-- This will create a type for the gender enumerator.
CREATE TYPE gender AS ENUM ('m', 'f');

-- This will hold all student data.
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

-- This will keep track of the fitness test results for each student.
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

-- This will list the different categories each technique will fall under.
CREATE TABLE curriculum_categories (
  categoryId SERIAL NOT NULL PRIMARY KEY,
  categoryKName varchar(25) NOT NULL,
  categoryEName varchar(25) NOT NULL,
  categoryDesc text NOT NULL,
  stripeColor varchar(20) NOT NULL
);

-- Insert current categories into curriculum_categories table.
INSERT INTO curriculum_categories (categoryId, categoryKName, categoryEName, categoryDesc, stripeColor) VALUES
(1, 'Kibon Sahang', 'Basic Techniques', 'These are the basic blocks, stances, and hand strikes required for your next belt. Many of these will be included in your current rank''s poomsae and other parts of your curriculum.', 'white'),
(2, 'Gyeokpa', 'Board Breaking', 'These are the board break(s) you are expected to demonstrate at your next belt test.', 'yellow'),
(3, 'Chagi', 'Kicks', 'These are the kicks for this belt. In order to promote to the next rank, you must show effective understanding and application of these techniques in order to achieve your next rank.', 'green'),
(4, 'Poomsae', 'Forms', 'This is the poomsae/pattern of movements for this belt. In order to promote to the next rank, you must show effective understanding and application of this form in order to achieve your next rank. ', 'blue'),
(5, 'Ho Shin Seol', 'Self-Defense', 'These are the self-defense movements for this belt. In order to promote to the next rank, you must show effective understanding and application of these techniques in order to achieve your next rank.', 'red'),
(6, 'Gyeorugi', 'Sparring', 'These are the sparring drills and techniques covered for this belt. In order to promote to the next rank, you must show a effective understanding and application of these techniques.', 'black'),
(8, 'Physical Fitness', 'Physical Fitness', 'Here are your results from your last physical fitness test. Keep striving to surpass your current abilities!', 'orange'),
(100, 'Jireugi', 'Hand Strikes', 'These are the basic hand and upper body strikes for this belt. In order to promote to the next rank, you must show effective understanding and application of these techniques in order to achieve your next rank.', 'yellow - old');

-- This is where all curriculum data will be stored.
CREATE TABLE techniques (
  techniqueId serial NOT NULL PRIMARY KEY,
  rankId int DEFAULT NULL REFERENCES ranks(rankId),
  categoryId int NOT NULL REFERENCES curriculum_categories(categoryId),
  techniqueKName varchar(50) DEFAULT NULL,
  techniqueEName varchar(50) NOT NULL,
  techniqueDesc text
);
 
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

-- This will house audio information for techniques
CREATE TABLE technique_audio (
  audioId serial NOT NULL PRIMARY KEY,
  techniqueId int NOT NULL REFERENCES techniques(techniqueId),
  audioTitle varchar(100) NOT NULL,
  audioDesc text,
  audioSrc varchar(255) NOT NULL,
  audioType varchar(20)
);

