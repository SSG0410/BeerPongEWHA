CREATE TABLE IF NOT EXISTS Beer_Review (
  Review TEXT(50) NULL,
  Review_ID INT(10)UNSIGNED NULL,
  Review_Hashtag1 INT(10)UNSIGNED NULL,
  Review_Hashtag2 INT(10)UNSIGNED NULL,
  Review_Hashtag3 INT(10)UNSIGNED NULL,
  Taste_Sugar INT(10)UNSIGNED NULL,
  Taste_Sour INT(10)UNSIGNED NULL,
  Taste_Flavor INT(10)UNSIGNED NULL,
  BeerScore FLOAT UNSIGNED NOT NULL,
  Review_Beer_ID INT(10)UNSIGNED NULL,
  PRIMARY KEY (Review_ID));