<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body>
   <div class="container"> 
    <nav><a href="index.php">Главная</a></nav>
    <h1>Сотрудники</h1>
    <h2>Список сотрудников</h2>
    
  <?php require_once "config.php";
       
    // показать все (циклом)
 
   $res = mysqli_query($db_name, "SELECT employees.id, employees.name, employees.family, employees.patronymic, employees.salary, employees.department, employees.gender, department.title FROM employees
   JOIN department on (employees.department = department.id)");
   $employees = mysqli_fetch_all($res, MYSQLI_ASSOC); 
       
 foreach ($employees as $item){
     echo " {$item['employee']}";
     echo "<form action='edit_empl.php' method='post'>";
     
     echo "<input type='hidden' name='id' value=". $item['id'] .">";
     echo "<p><label>Имя: </label><input type='text' name='name' value=".$item['name']."></p>";
     echo "<p><label>Фамилия: </label><input type='text' name='family' value=".$item['family']."></p>";
     echo "<p><label>Отчество: </label><input type='text' name='patron' value=".$item['patronymic']."></p>";
     
     echo "<p><label>Зарплата: </label><input type='text' name='salary' value=".$item['salary']."></p>";
      
     echo "<p><label>Отдел:</label> </p>";
        
     echo '<select name="select[]"  value="selected">';
            
       $res = mysqli_query($db_name, "SELECT `id`,`title` FROM department");
       $list = mysqli_fetch_all($res, MYSQLI_ASSOC); 
             
               foreach($list as $value){
                   echo "<option value='$value[id]'>$value[title]</option>";
               }
            
            
     echo " </select>"; 
     echo "<p><label>Пол: </label><input type='text' name='gender' value=".$item['gender']."></p>";
     
     echo '<hr>';
     echo '<input type="submit" name="submit" value="Редактировать" class="btn">';
     echo '<input type="submit" name="delete" value="Удалить" class="btn">';
     echo"</form>";
  }
 
   ?> 
    
    
    
    <form action="add_employees.php" method="post">
        <h2>Добавить нового сотрудника</h2>
        <p><label>Имя:</label>
        <input type="text" name="name"></p>
        <p><label>Фамилия:</label>
        <input type="text" name="family"></p>
        <p><label>Отчество:</label>
        <input type="text" name="patron"></p>
        
        <p><label>Ваш пол:</label>
        <label>Мужской</label>
        <input type="radio" name="gender" value="муж">
        <label>Женский</label>
        <input type="radio" name="gender" value="жен"></p>
        
        <p><label>Заработная плата:</label>
        <input type="text" name="sal"></p>
        
        <p><label>Отдел:</label> </p>

        
         <select name="select" multiple> 
            <?php 
             $res = mysqli_query($db_name, "SELECT `id`,`title` FROM department");
              $list = mysqli_fetch_all($res, MYSQLI_ASSOC); 
             
               foreach($list as $value){ 
                   echo "<option value='$value[id]'>$value[title]</option>";
                
               }
            ?>
            </select>
      
        <p><input type="submit" name="submit" value="Добавать" class="btn"></p>
    </form>
    </div>
</body> 
</html>