-- This will list the different categories each technique will fall under.
CREATE TABLE curriculum_categories (
  categoryId SERIAL NOT NULL PRIMARY KEY,
  categoryKName varchar(25) NOT NULL,
  categoryEName varchar(25) NOT NULL,
  categoryDesc text NOT NULL,
  stripeColor varchar(20) NOT NULL
);

INSERT INTO curriculum_categories (categoryId, categoryKName, categoryEName, categoryDesc, stripeColor) VALUES
(1, 'Kibon Sahang', 'Basic Techniques', 'These are the basic blocks, stances, and hand strikes required for your next belt. Many of these will be included in your current rank''s poomsae and other parts of your curriculum.', 'white'),
(2, 'Gyeokpa', 'Board Breaking', 'These are the board break(s) you are expected to demonstrate at your next belt test.', 'yellow'),
(3, 'Chagi', 'Kicks', 'These are the kicks for this belt. In order to promote to the next rank, you must show effective understanding and application of these techniques in order to achieve your next rank.', 'green'),
(4, 'Poomsae', 'Forms', 'This is the poomsae/pattern of movements for this belt. In order to promote to the next rank, you must show effective understanding and application of this form in order to achieve your next rank. ', 'blue'),
(5, 'Ho Shin Seol', 'Self-Defense', 'These are the self-defense movements for this belt. In order to promote to the next rank, you must show effective understanding and application of these techniques in order to achieve your next rank.', 'red'),
(6, 'Gyeorugi', 'Sparring', 'These are the sparring drills and techniques covered for this belt. In order to promote to the next rank, you must show a effective understanding and application of these techniques.', 'black'),
(8, 'Physical Fitness', 'Physical Fitness', 'Here are your results from your last physical fitness test. Keep striving to surpass your current abilities!', 'orange'),
(100, 'Jireugi', 'Hand Strikes', 'These are the basic hand and upper body strikes for this belt. In order to promote to the next rank, you must show effective understanding and application of these techniques in order to achieve your next rank.', 'yellow - old');
