<?php
include "db_connect.php";

$document_id = $_GET['document_id'];

  try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $conn->query("SELECT * FROM Document where id=".$document_id);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
      $author = $row['author'];
      $title = $row['title'];
      $created_at = $row['created_at'];

      $has_my_scondition = $row['has_my_condition'];
      $my_condition = $row['my_condition'];

      $has_introduction = $row['has_introduction'];
      $introduction = $row['introduction'];

      $has_theory = $row['has_theory'];
      $theory = $row['theory'];

      $has_technologies = $row['has_technologies'];
      $technologies = $row['technologies'];

      $has_settings = $row['has_settings'];
      $settings = $row['settings'];

      $has_guide = $row['has_guide'];
      $guide = $row['guide'];

      $has_example_data = $row['has_example_data'];
      $example_data = $row['example_data'];

      $has_description = $row['has_description'];
      $description = $row['description'];

      $has_contribution = $row['has_contribution'];
      $contribution = $row['contribution'];

      $has_learned = $row['has_learned'];
      $learned = $row['learned'];

      $has_resources = $row['has_resources'];
      $resources = $row['resources'];

      $file1 = $row['file1'];

      $null_fields = array();
      foreach ($row as $key => $value) {
        if (is_null($value) && substr($key, 0, 3 ) === "has")
          { $null_fields[] = $key; }
      }

      $res = $conn->query("SELECT * FROM Author where id=".$author);
      while ($roww = $res->fetch(PDO::FETCH_ASSOC)){
        $name = $roww['name'];
        $fn = $roww['fn'];
        $email = $roww['email'];
        $course = $roww['course'];
        $specialty = $roww['specialty'];
        $program = $roww['program'];
      }
    }
  } 
  catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
?>