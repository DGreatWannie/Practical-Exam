SELECT id, name, date_hired
FROM employees 
WHERE YEAR(date_hired)  BETWEEN '2017' AND '2018';