SELECT A.id, A.name, A.date_hired, A.department_id,
	B.department

    FROM employees A 
      INNER JOIN departments B
        ON A.department_id = B.id
	
	WHERE B.department = 'IT'
	AND YEAR(date_hired) >= '2018';