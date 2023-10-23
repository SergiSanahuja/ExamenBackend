<?php

  require_once '../model/pdo-users.php';

  if(isset($_POST['newPassword']) && isset($_POST['oldPassword'])) {

    $email = $_POST['email'];
    $password1 = $_POST['newPassword'];
    $password2 = $_POST['oldPassword'];
 
    $oldPassword = getOldPassword($email);

    echo $password2;
    echo $oldpassword;
    
    if(password_verify($password2, $oldPassword)){        
     $hash = password_hash($password1,PASSWORD_BCRYPT);

        resetPassword($hash, $email);
        header('Location: index.php ');
    }else{
      echo "error";
    }

    
  } 
  
  include_once '../view/change-password.view.php';



?>