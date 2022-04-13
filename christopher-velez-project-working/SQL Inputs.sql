drop table if exists cart;
drop table if exists login;

create table cart (
  userid varchar(20) NOT NULL,
  item varchar(20) NOT NULL,
  quantity int(11) NOT NULL,
  price float NOT NULL,
  constraint  primary key(userid,item)
);

create table login (
  userid varchar(20) NOT NULL,
  password varchar(20) NOT NULL,
  constraint  primary key(userid)
);


