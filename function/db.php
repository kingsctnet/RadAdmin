<?php

    $link = mysqli_connect(HOST_URL,HOST_USER,HOST_PASSWORD,HOST_DB);
    if(!$link){
        echo "connect database error";
        return;die();
    }
?>
