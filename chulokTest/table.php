  <?php require_once "config.php";
       
$res = mysqli_query($db_name, "SELECT employees.id, employees.family, employees.name, employees.department, department.title FROM employees
   JOIN department on (employees.department = department.id)");
   $employees = mysqli_fetch_all($res, MYSQLI_ASSOC); 
//нужно извлечь из таблицы employees: имя, фамилию и департамент
//и  как то это в таблицу надо запихать
  
 ?>
 
<table border="1">
    <thead>
        <th>Имя и Фамилия</th>
     
        <th></th>
    </thead>
    <?php foreach ($employees as $item): ?>
  
    <tr>
        <td>
            <?php echo $item['name']?>
            <?=$item['family']?>
        </td>
        <td>
            <?=$item['department']?>
            
        </td>
        
    </tr>
    <?php endforeach; ?>
</table>

