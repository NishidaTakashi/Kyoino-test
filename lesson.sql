create database Kyoino_Test;
grant all on Kyoino_Test. * to dbuser@localhost identified by "123456789";
use Kyoino_Test;
create table lesson (
  id int not null auto_increment primary key,
  name varchar(128) not null,
  email varchar(255) not null,
  notes text not null,
  stamp timestamp not null default current_timestamp on update current_timestamp,
  ipaddress varchar(32) not null
);
