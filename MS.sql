Create table Msg ( 
mkey int not null primary key auto_increment,
sbj nvarchar(20),
body nvarchar(20),
mtime nvarchar(10),
deltag boolean,
readtag boolean,
uids int not null,
uidr int not null,
foreign key (uids) references users(uid),
foreign key (uidr) references users(uid)
);

create table role (
id int not null primary key,
rname nvarchar(20),
perm int
);

create table users(
uid int not null primary key,
uname nvarchar(20),
ufamily nvarchar(20)
);

create table attachment(
akey int not null primary key auto_increment,
fname nvarchar(20),
filecontent longblob
); 
