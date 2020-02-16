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
---