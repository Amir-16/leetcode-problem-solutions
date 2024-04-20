SELECT e1.Name AS Employee
FROM Employee e1
JOIN Employee e2 ON e1.ManagerId = e2.EmployeeId
WHERE e1.Salary > e2.Salary;
