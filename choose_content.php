<!DOCTYPE html>
<html>
  <head>
    <title>Create Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
  </head>
  <body>
  <div id="page-wrapper">

    <header></header>
      <div class="document_holder">
        <div class="create-author-h">
          
          <b><h2>Избери точки, които ще включва твоя документ:</h2></b>
        </div>
          <?php include "forms/generate_form.php" ?>
      </div>

    <?php
     include "db_connect.php";

    $clean_data = array();
    $errors = array();

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $has_my_condition = $_POST['has_my_condition'];
            $has_introduction = $_POST['has_introduction'];
            $has_theory = $_POST['has_theory'];
            $has_technologies = $_POST['has_technologies'];
            $has_settings = $_POST['has_settings'];
            $has_guide = $_POST['has_guide'];
            $has_example_data = $_POST['has_example_data'];
            $has_description = $_POST['has_description'];
            $has_contribution = $_POST['has_contribution'];
            $has_learned = $_POST['has_learned'];
            $has_resources = $_POST['has_resources'];
            $created_at = date('Y-m-d H:i:s');

            $prepared = $conn->prepare("INSERT INTO Document (created_at, has_my_condition, has_introduction, has_theory,
              has_technologies, has_settings, has_guide, has_example_data, has_description, has_contribution, has_learned, has_resources) VALUES (:created_at, :has_my_condition, :has_introduction, :has_theory, :has_technologies, :has_settings, :has_guide, :has_example_data, :has_description, :has_contribution, :has_learned, :has_resources)");

            $prepared->bindParam(':created_at', $created_at);
            $prepared->bindParam(':has_my_condition', $has_my_condition);
            $prepared->bindParam(':has_introduction', $has_introduction);
            $prepared->bindParam(':has_theory', $has_theory);
            $prepared->bindParam(':has_technologies', $has_technologies);
            $prepared->bindParam(':has_settings', $has_settings);
            $prepared->bindParam(':has_guide', $has_guide);
            $prepared->bindParam(':has_example_data', $has_example_data);
            $prepared->bindParam(':has_description', $has_description);
            $prepared->bindParam(':has_contribution', $has_contribution);
            $prepared->bindParam(':has_learned', $has_learned);
            $prepared->bindParam(':has_resources', $has_resources);

            $prepared->execute();

            $result = $conn->query(" SELECT id FROM Document ORDER BY id DESC LIMIT 1");
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
              {
                $last_id = $row['id'];
              }
            ?>
            <script type="text/javascript">
            window.location = "/create_doc.php?document_id=" + "<?php echo $last_id?>";
            </script>
            <?php
            }

        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
          }
        $conn = null;
      }
    ?>
    </div>
    <footer></footer>
  </body>
</html>
