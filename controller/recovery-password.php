<?php
    
    require_once '../model/pdo-users.php';

    if(isset($_POST['newPassword']) && isset($_POST['confirmPassword'])) {

        $email = $_POST['email'];
        $password1 = $_POST['newPassword'];
        $password2 = $_POST['confirmPassword'];

       if($password1 == $password2){        
            $hash = password_hash($password1,PASSWORD_BCRYPT);

            resetPassword($hash, $email);
            header('Location: index.php ');
        }
    
        
    }



    include_once '../view/recovery-password.view.php';

?>