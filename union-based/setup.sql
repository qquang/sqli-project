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

CREATE TABLE IF NOT EXISTS `m3m3` (
`id` INT AUTO_INCREMENT NOT NULL,
`author` varchar(60) NOT NULL,
`quote` varchar(120) NOT NULL,
PRIMARY KEY (`id`)) 
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO m3m3 (author, quote) VALUES ('Adolf Hitler', 'Its just a prank, bro..');
INSERT INTO m3m3 (author, quote) VALUES ('Jaylen Moore', 'I asked God for a bike, but i know God doesnt work that way, so i stole a bike and asked for forgiveness');
INSERT INTO m3m3 (author, quote) VALUES ('Tupac', 'I didnt choose the thug life, the thug life choose me');
INSERT INTO m3m3 (author, quote) VALUES ('Abraham lincoln', 'Keep your weeb anime away from me before i break your nico~ nico~ kneecaps');
INSERT INTO m3m3 (author, quote) VALUES ('3l0n Musk', 'Say Space-X without SPA');