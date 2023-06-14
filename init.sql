ALTER USER 'app_user'@'%' IDENTIFIED WITH mysql_native_password BY 'app_pass';
use deine_app;
create table test (id int, name varchar(255));
insert into test values (1,'mega');
insert into test values (2,'oli');
