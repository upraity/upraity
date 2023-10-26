SELECT employee_id FROM Employees
WHERE salary < 30000 and manager_id not in (SELECT employee_id FROM Employees)
ORDER BY(employee_id) ASC;
