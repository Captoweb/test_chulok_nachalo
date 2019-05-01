<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="bijou.min.css" rel="stylesheet">
</head>


 <?php require_once "config.php";
       
$res = mysqli_query($db_name, "SELECT employees.id, employees.name, employees.family, employees.patronymic, employees.salary, employees.department, employees.gender, department.title FROM employees
   JOIN department on (employees.department = department.id)");
   $employees = mysqli_fetch_all($res, MYSQLI_ASSOC);
       
//нужно извлечь из таблицы employees: имя, фамилию и департамент
//и это в таблицу надо запихать
  
 ?>
 

<body> 

		  <div class='row'>
		  <div class='span one light'></div>
          <div class='span nine dark'>
              
   
    <nav>
         <a href="departments.php">Отделы</a>
         <a href="employees.php">Сотрудники</a>
    </nav>
    
     <h1>Сетка</h1>
		     <table class='table table-striped table-bordered'>
        <thead>
          <tr>
            <th>Имя и Фамилия</th>
            <th>Отдел</th>
          </tr>
        </thead>
    <?php foreach ($employees as $item): ?>
      <tr>
         <td>
            <?=$item['name']?>
            <?=$item['family']?>
         </td>
         <td>
            <?=$item['title']?>
         </td>
      </tr>
    <?php endforeach; ?>
</table>
		  
		  <div class='span one light'></div>
        </div>

</body> 