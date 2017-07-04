<?php
  include "db_connect.php";

  try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = $_POST['id'];

    $posted_data = array();
    foreach ($_POST as $key => $value) {
      if( $key != "id" ){
        $asd = $key . " = '" . $value . "'";
        $posted_data[$key] = $asd;
      }
    }

    $list_to_string = "";
    foreach ($posted_data as $key => $value) {
      $list_to_string .= " ". $value . ",";
    }
    if (!empty($_FILES['file1'])){
      $list_to_string .= " file1 = '" . $_FILES['file1']['name'] . "',";
      
    }

    $params = substr_replace($list_to_string, "", -1);
    $query = "UPDATE Document SET" . $params . " where id=".$id;
    $prepared = $conn->prepare($query);
    $prepared->execute();

    }

  catch(PDOException $e){
      echo $sql . "<br>" . $e->getMessage();
    }
  $conn = null;

  define ('SITE_ROOT', realpath(dirname(__FILE__)));

  $uploaddir = SITE_ROOT."/imgs/";
  $uploadfile = $uploaddir . basename($_FILES['file1']['name']);

  move_uploaded_file($_FILES['file1']['tmp_name'], $uploadfile);
?>
