<?php
require_once "config.php";

  //добавление в $_POST
if(isset($_POST['submit'])){ 
  $dep = $_POST['dep'];
  $id= $_POST['id'];
    
  $insert = "UPDATE `department` SET `title`= '$dep' WHERE id = '$id'"; 
  $res_insert = mysqli_query($db_name, $insert);
    if($res_insert){
      echo 'Запись успешно обновлена'; 
     } 
     else{
        echo 'Error'; 
      } 
    } 
echo mysqli_error($db_name);


if(isset($_POST['delete'])){ 
  $dep = $_POST['dep'];
  $id= $_POST['id'];
    
  $delete = "DELETE FROM `department` WHERE `id` = '$id'"; 
  $res_delete = mysqli_query($db_name, $delete);
    if($res_delete){
      echo 'Запись успешно удалена'; 
     } 
     else{
        echo 'Error'; 
      } 
    } 
echo mysqli_error($db_name);