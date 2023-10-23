<?php

require_once '../model/pdo-users.php';


    $result = llistarUsuaris();
    $tabla = '';

    foreach($result as $llista){
        $tabla .= "<tr><td>" . $llista['nickname'] . "</td><td>" . $llista['email'] . "</td><td>" . $llista['password'] . "</td><td>" . $llista['id'] . "</td></tr>";
        
    }


    include_once '../view/llist.view.php';


?>