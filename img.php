<?php
    echo "string";
    $name = $_GET['name'];
    $mimes = array
    (
        'jpg' => 'image/jpg',
        'jpeg' => 'image/jpg',
        'gif' => 'image/gif',
        'png' => 'image/png'
    );
    $ext = strtolower(end(explode('.', $name)));
    $file = '/imgs/'.$name;
    header("'Content-Type: '". $mimes[$ext] . "'");
    header("'Content-Disposition: inline; filename='". $name . "'");
    // echo $file;
    readfile($file);
?>