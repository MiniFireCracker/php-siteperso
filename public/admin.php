<?php
    $file= "../data/last_message.json";
     $content = file_get_contents($file);

     $decoded_content= json_decode($content, true);
?>

<p><?= $decoded_content ?></p>