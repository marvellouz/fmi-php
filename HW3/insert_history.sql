insert into History(Books_ID, Friends_ID, DateTaken, DateReturned)
  values((select ID from Books where Friends_ID is not NULL limit 1), 
        (select ID from Friends limit 1), '2011-03-03', '2011.04-04');

insert into History(Books_ID, Friends_ID, DateTaken, DateReturned)
  values((select ID from Books where Friends_ID is not NULL order by Title limit 1), 
        (select ID from Friends limit 1), '2011-03-03', '2011.04-04');
  
insert into History(Books_ID, Friends_ID, DateTaken, DateReturned)
  values((select ID from Books where Friends_ID is not NULL order by Title limit 1),
        (select ID from Friends order by LastName limit 1), '2011-03-03', '2011.04-04');
  

insert into History(Books_ID, Friends_ID, DateTaken, DateReturned)
  values((select ID from Books where Friends_ID is not NULL order by Title limit 1),
        (select ID from Friends order by FirstName limit 1), '2011-03-03', '2011.04-10');
  
select * from History;