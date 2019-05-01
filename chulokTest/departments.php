<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body>
   <div class="container"> 
    <nav><a href="index.php">Главная</a></nav>
    <h1>Отделы</h1> 
    <h2>Список отделов</h2>
    
<?php require_once "config.php";
       
      // вывести все (циклом)
              
  $res = mysqli_query($db_name, "SELECT * FROM department");
  $departments = mysqli_fetch_all($res, MYSQLI_ASSOC); 

foreach ($departments as $item){
    echo "<form action='edit.php' method='post'>";
    echo "<input type='hidden' name='id' value=". $item['id'] .">";
    echo "<p><label>Название отдела: </label><input type='text' name='dep' value=".$item['title']."></p>";
    echo "Количество сотрудников: {$item['number_employees']} <br> ";
    echo "Максимальная зарплата: {$item['max_sal']} <br>";
    echo '<hr>';
    echo '<input type="submit" name="submit" value="Редактировать" class="btn">';
    echo '<input type="submit" name="delete" value="Удалить" class="btn">';
    echo"</form>";
 }
       
 ?> 
      
       <form action="add_depart.php" method="post">
        <h2>Добавить новый отдел</h2>
        <p><label>Название:</label>
        <input type="text" name="title"></p>
        <span class="error"><?=@$error1;?></span>
        
        
        <p><input type="submit" name="submit2" value="Добавать" class="btn"></p>
    </form>  
    </div>   
</body>
</html>