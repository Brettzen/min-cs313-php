-- This will hold all current ranks as well as CSS styling parameters
CREATE TABLE ranks (
  rankId serial NOT NULL PRIMARY KEY,
  rank varchar(16) NOT NULL,
  rankName varchar(25) NOT NULL,
  rankColor varchar(20) DEFAULT 'rgba(0,120,150,.9)',
  rankFontColor varchar(20) DEFAULT 'rgb(220,220,220)',
  fitnessColor varchar(20) NOT NULL DEFAULT '	rgba(0,120,150,.9)',
  navHoverColor varchar(20) NOT NULL DEFAULT '#045870'
);

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
