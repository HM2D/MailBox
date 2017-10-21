Create table Msg ( 
mkey int not null primary key auto_increment,
sbj nvarchar(200),
body VARCHAR(2000) CHARACTER SET utf8,
mtime nvarchar(200),
deltag boolean,
readtag boolean,
deltagsender boolean,
uids int not null,
uidr int not null,	
attachment1 int,
attachment2 int ,
attachment3 int ,
foreign key (attachment1) references attachment(akey),
foreign key (attachment2) references attachment(akey),
foreign key (attachment3) references attachment(akey),
foreign key (uids) references users(uid),
foreign key (uidr) references users(uid)
);

create table role (
id int not null primary key,
rname nvarchar(20),
perm int
);
create table users(
uid int not null primary key auto_increment,
uname nvarchar(20),
ufamily nvarchar(20),
pass nvarchar(20),
username nvarchar(20),
role int not null
);

create table attachment(
akey int not null primary key auto_increment,
fname nvarchar(20),
filecontent longblob
); 
