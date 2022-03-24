Select * from salary
where salary =
(Select max(Salary) from salary)