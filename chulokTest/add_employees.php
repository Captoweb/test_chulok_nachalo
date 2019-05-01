<?php
require_once "config.php";



//добавление в $_POST
if(isset($_POST['submit'])){ 
    if(!empty($_POST['name'])){ 
  $employees = ($_POST['employees']);
    
  $insert = "INSERT INTO `employees` (`id`, `name`, `family`, `patronymic`, `gender`, `salary`, `department`) VALUES (NULL, '$_POST[name]', '$_POST[family]', '$_POST[patron]', '$_POST[gender]', '$_POST[sal]', '$_POST[select]')";
    
  $res_insert = mysqli_query($db_name, $insert);
    if($res_insert){
      echo 'Запись успешно добавлена'; 
     } 
     else{
        echo 'Error'; 
      } 
    } 
    else{
        echo 'Поле обязательно для заполнения';
    }
}
echo mysqli_error($db_name);


  

