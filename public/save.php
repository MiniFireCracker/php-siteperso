<?php 

function saveUserData(){

    $file= 'last_message.json';
    
    file_put_contents($file, [htmlentities($_GET['name']), htmlentities($_GET['email']), htmlentities($_GET['password'])], FILE_APPEND );

}


?>