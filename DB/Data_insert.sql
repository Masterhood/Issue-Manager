show tables;


select * from user;
select * from admin;
select * from pc_has_user;
select * from user_has_issue;
insert into user_has_issue values 
('19','1'),
('23','3'),
('21','2');
truncate admin;
truncate issue_has_admin;

Insert into admin values
('1','Jana','Dostalova','Heslo0001','jdostalova'),
('2','Dana','Dlouha','Heslo0002','ddlouha'),
('3','Magda','Kratka','Heslo0003','mkratka');


Insert into user(jmeno,prijmeni, username) values
('Edudant','Rygydny','erygydny'),
('Francimor','Otta','fotta'),
('Vitezslav','Vzdaleny','vvzdaleny'),
('Jana','Dostalova','jdostalova'),
('Dana','Dlouha','ddlouha'),
('Magda','Kratka','mkratka'),
('Petra','Blahovcova','pblahovcova'),
('Pavla','Cekana','pcekana'),
('Ivana','Kratka','ikratka'),
('Svetlana','Kratochvilova','skratochvilova'),
('Ivan','Hrozny','ihrozny'),
('Waldemar','Krasny','wkrasny');


select * from issue;
insert into issue values 
('1','Word','SW','non','2014-01-04 17:00:00','mkratka','na pocitaci se nenachazi MSWord','2014-01-05 10:32:08','2017-01-05 12:34:11'),
('2','Excel','SW','non','2014-01-04 17:00:00','ddlouha','na pocitaci se nenachazi Excel','2014-01-05 10:32:08','2014-01-05 10:54:01'),
('3','Photoshop','SW','non','2014-01-04 17:00:00','jdostalova','na pocitaci se nenachazi photoshop','2014-01-05 10:30:18','2018-05-01 09:06:41');


select *from pc;
select * from issue_has_admin;
insert into issue_has_admin values 
('2','1'),
('1','3'),
('3','2');
insert into pc(OS,jmenoprihlas,prijmprihlas) values 
('1','Jana','Dostalova'),
('2','Dana','Dlouha'),
('3','Magda','Kratka'),
('4','Edudant','Rygydny'),
('5','Francimor','Otta'),
('6','Vitezslav','Vzdaleny'),
('7','Petra','Blahovcova'),
('8','Pavla','Cekana'),
('9','Ivana','Kratka'),
('10','Svetlana','Kratochvilova'),
('11','Ivan','Hrozny'),
('12','Waldemar','Krasny');

select * from pc_has_user;
insert into pc_has_user values 
('1','16'),
('2','17'),
('3','18'),
('4','13'),
('5','14'),
('6','15'),
('7','19'),
('8','20'),
('9','21'),
('10','22'),
('11','23'),
('12','24');




