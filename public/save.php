<?php 

function saveUserData(){
    
    $file= __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'last_message.json';
   // $encoded_stuff = $_GET['name'];
   
    if ($_GET['name'] && $_GET['mail'] && $_GET['password']){
  
        $encoded_stuff = json_encode( htmlentities($_GET['name']), htmlentities($_GET['email']), htmlentities($_GET['password']));
        file_put_contents($file, $encoded_stuff, FILE_APPEND );

    };
    
};

saveUserData();


?>