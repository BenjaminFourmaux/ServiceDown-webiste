-- Create Service Down Website Database
START TRANSACTION;

--
-- Table : 'user_type'
--
CREATE TABLE user_type (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	label varchar(10) NOT NULL
);


--
-- Table : 'users'
--
CREATE TABLE users (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	firstName varchar(255) NULL,
	lastName varchar(255) NULL,
	companyName varchar(255) NULL,
	email varchar(255) NOT NULL,
	password varchar(255) NOT NULL COMMENT 'BCRYPT hash',
	createdAt datetime NOT NULL DEFAULT NOW(),
	userType int NULL
); 
ALTER TABLE users ADD CONSTRAINT fk_users_user_type FOREIGN KEY (userType) REFERENCES user_type(id);


--
-- Table : 'api_auth'
--
CREATE TABLE api_auth (
	userId int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	authUserId int NOT NULL,
	accessTokent varchar(255) NULL
);


--
-- Table : 'news'
--
CREATE TABLE news (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title varchar(255) NOT NULL,
	description varchar(255) NULL,
	thumbnails varchar(255) NULL,
	createdAt datetime NOT NUll ON INSERT NOW(),
	updatedAt datetime NULL ON UPDATE NOW()
);


-- --------------------------------------------------------------------


--
-- Procedures
--
DELIMITER //
CREATE PROCEDURE check_email_format (IN email varchar(255))
BEGIN
	IF email NOT REGEXP '^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$' THEN
		SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'wrong_email_format';
	END IF;
END
//
DELIMITER;


-- --------------------------------------------------------------------

--
-- Triggers
--
DELIMITER //
CREATE TRIGGER check_valid_email_insert
BEFORE INSERT
ON users FOR EACH ROW
BEGIN
	CALL check_email_format(new.email);
END;
//
CREATE TRIGGER check_valid_email_update
BEFORE UPDATE
ON users FOR EACH ROW
BEGIN
	IF new.email != old.email THEN
		CALL check_email_format(new.email);
	END IF;
END;
//
DELIMITER;
-- --------------------------------------------------------------------


--
--	Fixtures
--
INSERT INTO 'user_type' (id, label) VALUES
(1, 'admin'),
(2, 'particular'),
(3, 'company'),
(4, 'tester');

INSERT INTO 'user' (id, firstName, lastName, email, password, type) VALUES 
(1, 'Benjamin', 'Admin', 'contact@benjamin-fourmauxb.fr', '$2y$10$0mBHuH6zooA.DuyHY2rkpuNkBrDjo0S5k/OA.MjJuy26KVOZOYnx.', 1);

COMMIT;