create database Kyoino_Test;
grant all on Kyoino_Test. * to dbuser@localhost identified by "123456789";
use Kyoino_Test;
create table news (
  id int not null auto_increment primary key,
  title varchar(128) not null,
  slug varchar(128) not null,
  text text not null
);
