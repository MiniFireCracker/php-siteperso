<?php 

function saveUserData(){
    
    $file=  '../data/last_message.json';
    //__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'last_message.json';
   // $encoded_stuff = $_GET['name'];
   
    if ($_GET['name'] && $_GET['email'] && $_GET['password']){
        $decodedget= json_encode($_GET);
       // foreach( $_GET as $_GETcontent){
        //    $decodedget =json_encode(($_GETcontent));
           
        //}
  
       // $encoded_stuff = json_encode( htmlentities($_GET));

        file_put_contents($file, $decodedget, FILE_APPEND );

    };
    
};

saveUserData();


?>