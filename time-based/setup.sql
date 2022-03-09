CREATE TABLE IF NOT EXISTS `users` (
`user_id` INT AUTO_INCREMENT NOT NULL,
`username` varchar(60) NOT NULL,
`password` varchar(60) NOT NULL,
PRIMARY KEY (`user_id`)) 
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO users (username, password) VALUES ('admin', 'nEvERGONN@6IV3YoUUP');
INSERT INTO users (username, password) VALUES ('rickAstley', 'NEv3rg0nnA7e1l@LI3AndhurTYOu');
INSERT INTO users (username, password) VALUES ('dimixo', 'h1PhOPn3VERD13');
INSERT INTO users (username, password) VALUES ('johncena', 'UcAN7Se3M3????');