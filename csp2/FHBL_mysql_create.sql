CREATE TABLE `teams` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`loginId` varchar(255) NOT NULL UNIQUE,
	`team_name` varchar(255) NOT NULL UNIQUE,
	`team_email` varchar(255) NOT NULL UNIQUE,
	`team_password` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`user_firstname` varchar(255) NOT NULL,
	`user_lastname` varchar(255) NOT NULL,
	`user_password` varchar(255) NOT NULL UNIQUE,
	`role_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `players` (
	`teamId` INT(11) NOT NULL,
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`player_firstname` varchar(255) NOT NULL,
	`player_lastname` varchar(255) NOT NULL,
	`jersey_no` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`order_id` INT(11) NOT NULL,
	`order_date` DATE(11) NOT NULL,
	`delivery_date` DATE(11) NOT NULL,
	`status` varchar(255) NOT NULL,
	`final_total` varchar(255) NOT NULL,
	`delivery_address` varchar(255) NOT NULL
);

CREATE TABLE `products` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_name` varchar(255) NOT NULL,
	`color` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`stock_count` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ordered_items` (
	`id` INT(11) NOT NULL,
	`user_id` INT(11) NOT NULL,
	`product_id` INT(11) NOT NULL,
	`subtotal` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `schedules` (
	`game_date` DATE(11) NOT NULL,
	`team_id` INT(11) NOT NULL,
	`game_time` TIME(11) NOT NULL
);

CREATE TABLE `player_statistics` (
	`player_id` INT(11) NOT NULL,
	`date` DATE(11) NOT NULL,
	`description` varchar(255) NOT NULL,
	`image` varchar(255) NOT NULL
);

CREATE TABLE `team_statistics` (
	`date` DATE(11) NOT NULL,
	`description` varchar(255) NOT NULL,
	`image` varchar(255) NOT NULL,
	`team_id` INT(11) NOT NULL
);

CREATE TABLE `roles` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`role` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `players` ADD CONSTRAINT `players_fk0` FOREIGN KEY (`teamId`) REFERENCES `teams`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`order_id`) REFERENCES `ordered_items`(`id`);

ALTER TABLE `ordered_items` ADD CONSTRAINT `ordered_items_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `ordered_items` ADD CONSTRAINT `ordered_items_fk1` FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);

ALTER TABLE `schedules` ADD CONSTRAINT `schedules_fk0` FOREIGN KEY (`team_id`) REFERENCES `teams`(`id`);

ALTER TABLE `player_statistics` ADD CONSTRAINT `player_statistics_fk0` FOREIGN KEY (`player_id`) REFERENCES `players`(`id`);

ALTER TABLE `team_statistics` ADD CONSTRAINT `team_statistics_fk0` FOREIGN KEY (`team_id`) REFERENCES `teams`(`id`);

