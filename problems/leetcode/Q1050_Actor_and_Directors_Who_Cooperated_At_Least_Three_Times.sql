select actor_id,director_id from ActorDirector 
group by actor_id, director_id
Having count(actor_id = director_id) >=3;
