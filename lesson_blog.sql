create database Kyoino_Test;
grant all on Kyoino_Test. * to dbuser@localhost identified by "123456789";
use Kyoino_Test;
create table blog_data (
  id int not null auto_increment primary key,
  title varchar(128) default null,
  description text
);
