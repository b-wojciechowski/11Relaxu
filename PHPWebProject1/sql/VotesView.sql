select 
CONCAT(u.Name," ", u.LastName) as "G³osuj¹cy", 
CONCAT(p.Name," ",p.LastName) as "Zawodnik", 
v.VoteDate from votes as v 

inner join players as p on p.Id = v.VoteOnPlayerId 
inner join users u on u.Id = v.Voter