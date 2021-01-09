create table Users
(
    userid            mediumint unsigned auto_increment
        primary key,
    first_name        varchar(30) charset utf8 not null,
    lastname          varchar(40) charset utf8 not null,
    email             varchar(50)              not null,
    password          char(60)                 not null,
    registration_date datetime                 not null,
    user_level        tinyint unsigned         not null,
    class             char(20)                 not null,
    address1          varchar(50) charset utf8 not null,
    address2          varchar(50) charset utf8 null,
    city              varchar(50) charset utf8 not null,
    state_country     char(25)                 not null,
    zocde_pcode       char(10)                 not null,
    phone             char(15)                 null,
    paid              enum ('yes', 'no')       not null
);

