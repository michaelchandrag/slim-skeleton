CREATE TABLE `user` (
	`id` 					INT NOT NULL AUTO_INCREMENT,
	`email`					VARCHAR(200) NOT NULL,
	`password`				VARCHAR(200) NOT NULL
	`created_at`			DATETIME NULL,
	`updated_at` 			DATETIME NULL,
	`deleted_at`			DATETIME NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

insert into `user` (`email`, `password`, `created_at`, `updated_at`) values ('canzinzzzide@yahoo.co.id', 'asd', now(), now());