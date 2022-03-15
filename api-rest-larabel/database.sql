CREATE DATABASE IF NOT EXISTS api_rest_laravel;
USE  api_rest_laravel;
CREATE TABLE users (
id int(255) not null auto_increment,
name varchar(60) NOT NULL,
surname varchar(100),
role varchar(20),
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
description text,
image varchar(255),
created_at datetime DEFAULT NULL,
update_at datetime DEFAULT NULL,
remember_token varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE categories(
id int(255) not null auto_increment,
name varchar(255),
created_at datetime DEFAULT NULL,
update_at datetime DEFAULT NULL,
CONSTRAINT pk_categories PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE posts(
id int(255) not null auto_increment,
user_id int(255),
category_id int(255),
title varchar(255) NOT NULL,
content text NOT NULL,
image varchar(255),
created_at datetime DEFAULT NULL,
update_at datetime DEFAULT NULL,
CONSTRAINT pk_posts PRIMARY KEY(id),
CONSTRAINT fk_posts_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_posts_category FOREIGN KEY(category_id) REFERENCES categories(id)
)ENGINE=InnoDb;


insert into us