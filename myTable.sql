
create table role (
id int not null primary key,
rname nvarchar(20)
);


create table users(
uid int not null primary key auto_increment,
email nvarchar(100) not null,
uname nvarchar(20),
ufamily nvarchar(20),
role int not null,
foreign key (role) references role(id),
pass int not null

);

create table image(
ikey int not null primary key auto_increment,
iname nvarchar(20),
filecontent longblob
); 

create table blog(
bid int not null primary key auto_increment,
btitle nvarchar(100),
btime nvarchar(50),
bsender int not null,
foreign key (bsender) references users(uid),
bbody varchar(2000) character set utf8,
bimage int not null,
foreign key (bimage) references image(ikey),
bcategory nvarchar(50)
); 

create table page(
pid int not null primary key auto_increment,
ptitle nvarchar(100),
ptime nvarchar(50),
pbody varchar(2000) character set utf8
);

create table comments(
cid int not null primary key auto_increment,
poster int not null,
foreign key (poster) references users(uid),
blog int not null,
foreign key (blog) references blog(bid),
cbody varchar(2000) character set utf8
);


create table tag(
tid int not null primary key auto_increment,
tname nvarchar(20),
tblog int not null,
foreign key (tblog) references blog(bid)
);

