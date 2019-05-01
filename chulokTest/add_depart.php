<?php
require_once "config.php";

   //добавление в $_POST
if(isset($_POST['submit2']))  { 
     if(!empty($_POST['title'])){ 
  
    $deptitle = trim($_POST['submit2']);
    $deptitle = addslashes($deptitle);
    
  $title = ($_POST['title']);
  $insert = "INSERT INTO `department`(title) VALUES ('$_POST[title]')"; 
  $res_insert = mysqli_query($db_name, $insert); 
    
    if($res_insert){
      echo 'Запись успешно добавлена'; 
     } 
     else{
        echo 'Error'; 
      }  
    } else {
         echo 'Поле обязательно для заполнения';
     }
    }
echo mysqli_error($db_name);

  