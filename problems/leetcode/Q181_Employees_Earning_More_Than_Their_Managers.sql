SELECT e.name AS Employee FROM Employee e, Employee a
WHERE e.managerID = a.id AND e.salary > a.salary;
