create view inbox As select msg.mkey,msg.uids,users.uname,users.ufamily,msg.sbj,msg.body,msg.mtime,msg.readtag,msg.deltag,
msg.uidr,msg.attachment1,msg.attachment2,msg.attachment3 from msg,users where msg.uidr = users.uid;

create view sent As select msg.mkey,msg.uids,users.uname,users.ufamily,msg.sbj,msg.body,msg.mtime,msg.readtag,msg.deltag,
msg.uidr from msg,users where msg.uidr = users.uid;

create view trash As select msg.uids,users.uname,users.ufamily,msg.sbj,msg.body,msg.mtime,msg.readtag,msg.deltag,
msg.uidr,msg.mkey from msg,users where msg.uidr = users.uid and deltag = '1';

delimiter $$
create procedure Showinbox
  (in myuid int)
BEGIN
select inbox.*,users.uname,users.ufamily from inbox,users where inbox.uidr = myuid and inbox.uids = users.uid and inbox.deltag = 0;
END $$

delimiter $$
create procedure Showsent
  (in myuid int)
BEGIN 
select * from sent where sent.uids = myuid and sent.deltag = 0;
END $$


delimiter $$
create procedure Showtrash
  (in myuid int)
BEGIN 
select * from trash where (trash.uidr = myuid OR trash.uids = myuid) and (trash.deltag='1');
END $$


delimiter $$
create procedure VerifyUser
  (in myusername nvarchar(20))
BEGIN 
select users.uid from users where users.username = myusername;
END $$

delimiter $$
create procedure SaveUser
  (in myusername nvarchar(20),in myname nvarchar(20),in myfamily nvarchar(20),in mypass nvarchar(20))
BEGIN 
insert into users(username,uname,ufamily,pass,role) 
values (myusername,myname,myfamily,mypass,3);
END $$



delimiter $$
create procedure SendMsg
  (in mysbj nvarchar(20),in mybody VARCHAR(2000) CHARACTER SET utf8,in mytime nvarchar(200),in myuidr int,in myuids int,in myattach1 int,in myattach2 int,in myattach3 int)
BEGIN 
insert into msg(sbj,body,mtime,deltag,deltagsender,readtag,uidr,uids,attachment1,attachment2,attachment3) 
values (mysbj,mybody,mytime,0,0,0,myuidr,myuids,myattach1,myattach2,myattach3);
END $$


delimiter $$
create procedure Getuser
  (in mysbj nvarchar(20),in mybody nvarchar(20),in mytime nvarchar(20),in myuidr int,in myuids int)
BEGIN 
insert into msg(sbj,body,mtime,deltag,readtag,uidr,uids) 
values (mysbj,mybody,mytime,0,0,myuidr,myuids);
END $$

delimiter $$
create procedure Deletemsg
  (in mykey int)
BEGIN 
UPDATE msg
SET deltag=1
WHERE mkey=mykey;
END $$


delimiter $$
create procedure SaveAttachment
  (in fname1 nvarchar(20),in fcontent longblob)
BEGIN 
insert into attachment(fname,filecontent)
values (fname1,fcontent);
END $$
delimiter $$
create procedure verifyAttachment
  (in fname1 nvarchar(20))
BEGIN 
select akey from attachment where fname = fname1;
END $$

delimiter $$
create procedure readmsg
  (in mykey int)
BEGIN 
UPDATE msg
SET readtag=1 
WHERE mkey=mykey; 
END $$

	delimiter $$
	create procedure deleteuser
	  (in myuid int)
	BEGIN 
	Delete from users where uid = myuid;
	END $$



