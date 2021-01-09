ALTER TABLE Users
ADD status int default 0 not null ;

ALTER TABLE Users
ADD activation_code varchar(32);

ALTER TABLE Users
ADD avatar varchar(50) default 'no-avatar.jpg';

ALTER TABLE Users
ADD username varchar(50);