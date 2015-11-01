/*phpkiso(データベース)を作る*/
create database phpkiso;

/*phpkiso(データベース)を使う*/
use phpkiso;

/*anketoテーブル作成*/
create table anketo (
code integer(11) primary key not null auto_increment,
nickname varchar(20) not null,
email varchar(50) not null,
goiken varchar(50) not null
);

