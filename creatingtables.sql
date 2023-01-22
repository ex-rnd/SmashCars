create database shopping;
use shopping;
create table products (
item_code varchar(20) not null,
item_name varchar(150) not null,
brand_name varchar(50) not null,
model_number varchar(30) not null,
weight varchar(20),
dimension varchar(50),
description text,
category varchar(50),
quantity SMALLINT not null,
price DECIMAL(7,2),
imagename varchar(50)
);

create table productfeatures (
item_code varchar(20) not null,
feature1 varchar(255),
feature2 varchar(255),
feature3 varchar(255),
feature4 varchar(255),
feature5 varchar(255),
feature6 varchar(255)
);

create table cart (
cart_sess char(50) not null,
cart_itemcode varchar(20) not null,
cart_quantity SMALLINT not null,
cart_item_name varchar(100),
cart_price DECIMAL(7,2)
);

create table customers (
email_address varchar(50) not null,
password varchar(50) not null,
complete_name varchar(50),
address_line1 varchar(255),
address_line2 varchar(255),
city varchar(50),
state varchar(50),
zipcode varchar(10),
country varchar(50),
cellphone_no varchar(15),
primary key(email_address));


create table orders (
order_no int(6) not null auto_increment,
order_date date,
email_address varchar(50),
customer_name varchar(50),
shipping_address_line1 varchar(255),
shipping_address_line2 varchar(255),
shipping_city varchar(50),
shipping_state varchar(50),
shipping_country varchar(50),
shipping_zipcode varchar(10),
primary key (order_no));

create table orders_details (
order_no int(6) not null,
item_code varchar(20) not null,
item_name varchar(100) not null,
quantity SMALLINT not null,
price DECIMAL(7,2)
);

create table payment_details (
order_no int(6) not null,
order_date date,
amount_paid DECIMAL(7,2),
email_address varchar(50),
customer_name varchar(50),
payment_type varchar(20),
name_on_card varchar(30),
card_number varchar(20),
expiration_date varchar(10)
);

