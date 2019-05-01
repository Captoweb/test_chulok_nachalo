<?php
require_once "config.php";

  //редактирование записей
if(isset($_POST['submit'])){ 
  $name = $_POST['name'];
  $family = $_POST['family'];
  $patron = $_POST['patron'];    
  $gender = $_POST['gender'];
  $salary = $_POST['salary'];  
      
  $id= $_POST['id'];
    
  $update = "UPDATE `employees` SET `name`= '$name',`family`='$family', `patronymic`='$patron',  `gender`='$gender', `salary`= $salary WHERE id = '$id'"; 
    
//UPDATE `employees` SET `name`= 'migel',`family`='alfonso',`patronymic`='xz',`gender`='man',`salary`=100000,`department`= 1 WHERE id = 2    
    
  $res_update = mysqli_query($db_name, $update);
    if($res_update){
      echo 'Запись успешно редактирована'; 
     } 
     else{
        echo 'Error'; 
      } 
    } 
echo mysqli_error($db_name);

// $insert = "INSERT INTO `employees` (`id`, `name`, `family`, `patronymic`, `gender`, `salary`, `department`) VALUES (NULL, '$_POST[name]', '$_POST[family]', '$_POST[patron]', '$_POST[gender]', '$_POST[sal]', '$_POST[dep]')";


//UPDATE `employees` SET `id`=[value-1],`name`=[value-2],`family`=[value-3],`patronymic`=[value-4],`gender`=[value-5],`salary`=[value-6],`department`=[value-7] WHERE 1


if(isset($_POST['delete'])){ 
  //$dep = $_POST['dep'];
  $id= $_POST['id'];
    
  $delete = "DELETE FROM `employees` WHERE `id` = '$id'"; 
  $res_delete = mysqli_query($db_name, $delete);
    if($res_delete){
      echo 'Запись успешно удалена'; 
     } 
     else{
        echo 'Error'; 
      } 
    } 
echo mysqli_error($db_name);

