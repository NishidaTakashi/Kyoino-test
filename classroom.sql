create database Kyoino_Test;
grant all on Kyoino_Test. * to dbuser@localhost identified by "123456789";
use Kyoino_Test;
create table student (
  id int not null auto_increment primary key,
  name varchar(64) not null,
  text text not null
);
