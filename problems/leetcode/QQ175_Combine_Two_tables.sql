select firstName, lastName, city, state from Person
LEFT join Address
on person.personId = address.personId;
