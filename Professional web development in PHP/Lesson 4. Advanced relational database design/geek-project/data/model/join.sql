-- select * from employees

select departments.shortname, 
count(e.id)
from departments

left join employees e on departments.id = e.departments_id
group by departments.id