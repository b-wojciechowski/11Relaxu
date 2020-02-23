select 
CONCAT(u.Name," ", u.LastName) as "G³osuj¹cy", 
CONCAT(p.Name," ",p.LastName) as "Zawodnik", 
v.VoteDate from votes as v 
inner join players as p on p.Id = v.VoteOnPlayerId 
inner join users u on u.Id = v.Voter;


select *, count(*) from votes
left join players on players.id = votes.VoteOnPlayerId
group by players.Id
order by count(*) desc;


--- zliczniae g³osów na konkretnego zawdonika
SELECT count(1) FROM votes as v
left join players as p on p.id = v.VoteOnPlayerId
where p.Id = 'A72A9E5B-50BC-11EA-A60F-E4115B471390'


--$sql = "SELECT count(1) FROM votes as v\n"
--    . "left join players as p on p.id = v.VoteOnPlayerId\n"
--    . "where p.Id = \'A72A9E5B-50BC-11EA-A60F-E4115B471390\'";
--

select p.id, p.name, p.LastName, count(1) from votes as v
join players as p on p.id = v.VoteOnPlayerId
where p.Position = 'bramkarz'
group by p.Id
order by count(1) desc


-- zliczanie dla wszystkich, ranking
SELECT p.name, p.LastName, count(p.Id) FROM votes as v
left join players as p on p.id = v.VoteOnPlayerId
group by p.id
order by count(p.id) desc
--
select * from players where id in (
select distinct VoteOnPlayerId from votes where voter = '2908b435-4b46-11ea-83c4-e4115b471390')


select * from players as p
left join votes as v on p.id = v.VoteOnPlayerId where p.id in (
					select distinct VoteOnPlayerId from votes as v
					join players as p on p.id = v.VoteOnPlayerId
					where v.voter = "'.$voterId.'
					and p.position = 'bramkarz'
					order by v.votedate") 
and position = "bramkarz"



--Wyœwietlanie wszystkich aktywnoœci--
select u.Name, u.LastName, a.OperationDate, aty.ActivityName from activities as a 
left join activities_type aty on aty.Id = a.OperationType 
left join users as u on u.Id = a.UserId 
order by a.OperationDate desc


https://www.php.net/manual/en/function.date.php
