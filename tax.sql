create database Kyoino_Test;
grant all on Kyoino_Test. * to dbuser@localhost identified by "123456789";
use Kyoino_Test;
create table tax(
  id int not null auto_increment primary key,
  start date not null,
  rate int not null
);

insert into tax (start,rate) VALUES
  ("1989-04-01","3"),
  ("1997-04-01","5");
