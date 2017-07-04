<?php
include "db_connect.php";

$document_id = $_GET['document_id'];

  try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $conn->query("SELECT * FROM Document");

    echo "<table class='table-list'>
            <tr>
              <td>Тема</td>
              <td>Автор</td>
              <td>Дата</td>
              <td></td>
              <td></td>
            </tr>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
      $author_id = $row['author'];
      $title = $row['title'];
      $created_at = $row['created_at'];
      $id = $row['id'];

      $res = $conn->query("SELECT * FROM Author WHERE id='".$author_id."'");
      while ($roww = $res->fetch(PDO::FETCH_ASSOC))
        {
         $name = $roww['name'];
         $email = $roww['email'];
       } 

      echo "<tr>
              <td>".$title."</td>
              <td>".$name.", ".$email."</td>
              <td>".$created_at."</td>
              <td>
                <a href='/view_doc.php?document_id=".$id."'>
                  <img class='upload-img' src='http://loremipsum2.fmi.uni-sofia.bg/WEBTECH/www_8ed_referats/img/review.png'>
                </a>
              </td>
              <td>
                <a href='/edit_doc.php?document_id=".$id."'>
                  <span class='glyphicon glyphicon-pencil'></span>
                </a>
              </td>
            </tr>";
        
    }
    echo "</table>";
  } 
  catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
?>