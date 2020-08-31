-- CREATE TABLE users (
--   idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
--   uidUsers TINYTEXT NOT NULL,
--   emailUsers TINYTEXT NOT NULL,
--   pwdUsers LONGTEXT NOT NULL
-- );



-- NEW
CREATE TABLE users (
   idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
   uidUsers TINYTEXT NOT NULL,
   emailUsers TINYTEXT NOT NULL,
   firstNUsers TINYTEXT NOT NULL,
   lastNUsers TINYTEXT NOT NULL,
   cityUsers TINYTEXT NOT NULL,
   zipcodeUsers TINYTEXT NOT NULL,
   addressUsers TINYTEXT NOT NULL,
   pwdUsers LONGTEXT NOT NULL
 );
