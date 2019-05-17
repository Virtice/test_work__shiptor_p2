create table user
(
    id varchar(255) not null primary key,
    name varchar(255) not null,
    token varchar(255) not null,
    private_shiptor_token varchar(255),
    public_shiptor_token varchar(255),
    deleted tinyint default 0 not null,
    blocked tinyint default 0 not null,
    login varchar(255) not null,
    password varchar(255) not null
);

create unique index users_login_password_uindex
    on user (login, password);