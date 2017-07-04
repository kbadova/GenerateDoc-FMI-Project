<!DOCTYPE html>
<html>
  <head>
    <title>View Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

    <meta charset="utf-8">
  </head>
  <body>
  <div id="page-wrapper">
      <header></header>
      
  <?php
  include "db_connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $document_id = $_GET['document_id'];
      try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query("SELECT * FROM Document where id=".$document_id);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
          $author = $row['author'];
          $title = $row['title'];
          $created_at = $row['created_at'];
          $file1 = $row['file1'];

          $has_my_condition = $row['has_my_condition'];
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

          $res = $conn->query("SELECT * FROM Author where id=".$author);
          while ($roww = $res->fetch(PDO::FETCH_ASSOC)){
            $name = $roww['name'];
            $fn = $roww['fn'];
            $email = $roww['email'];
            $course = $roww['course'];
            $specialty = $roww['specialty'];
            $program = $roww['program'];

            echo "<div class='document_holder form_holder  '><div class='fields_holder'>
                  <div class='field'>
                    <div class='field-header display no-border' style='display:inline'>Автор <div class='field-content display' style='display:inline'>".$name."</div></div>
                    <div class='field-header display no-border' style='display:inline'>ФН <div class='field-content display' style='display:inline'>".$fn."</div></div>
                    <div class='field-header display no-border' style='display:inline'>Имейл <div class='field-content display' style='display:inline'>".$email."</div></div>
                    <div class='field-header display no-border' style='display:inline'>Курс <div class='field-content display' style='display:inline'>".$course."</div></div>
                    <div class='field-header display no-border' style='display:inline'>Специалност <div class='field-content display' style='display:inline'>".$specialty."</div></div>
                    <div class='field-header display no-border' style='display:inline'>Програма <div class='field-content display' style='display:inline'>".$program."</div></div>
                    <div class='field-header display no-border' style='display:inline'>Дата <div class='field-content display' style='display:inline'>".$Дата."</div></div>
                    <div class='field-header display no-border' style='display:inline'>Предмет <div class='field-content display' style='display:inline'>WEB технологии</div></div>
                    <div class='field-header display no-border' style='display:inline'>Преподавател <div class='field-content display' style='display:inline'>доц. д-р Милен Петров</div></div>
                  </div>

                  <div class='field'>
                  <div class='field-header'>Teма</div>
                  <p class='field-content'>".$title."</p></div>";
            ?>
            <head>
            <link rel="stylesheet" type="text/css" href="style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'></head>
    <?php
            if (!empty($has_my_condition)) {
            echo "<div class='field'>
                  <div class='field-header'>Условие</div>
                  <p class='field-content'>".$my_condition."</p></div>";
            } else {

            }
            if (!empty($has_introduction)) {
            echo "<div class='field'>
                  <div class='field-header'>Въведение</div>
                  <p class='field-content'>".$introduction."</p></div>";
            }
             if (!empty($has_theory)) {
            echo "<div class='field'>
                  <div class='field-header'>Теория</div>
                  <p class='field-content'>".$theory."</p></div>";
            }

            if (!empty($has_technologies)) {
            echo "<div class='field'>
                  <div class='field-header'>Използвани технологии</div>
                  <p class='field-content'>".$technologies."</p></div>";
            }

            if (!empty($has_settings)) {
            echo "<div class='field'>
                  <div class='field-header'>Инсталация и настройки</div>
                  <p class='field-content'>".$settings."</p></div>";
            }

            if (!empty($has_guide)) {
            echo "<div class='field'>
                  <div class='field-header'>Кратко ръководство на потребителя</div>
                  <p class='field-content'>".$guide."</p></div>";
            }

            if (!empty($has_example_data)) {
            echo "<div class='field'>
                  <div class='field-header'>Примерни данни</div>
                  <p class='field-content'>".$example_data."</p></div>";
            }
            if (!empty($has_description)) {
            echo "<div class='field'>
                  <div class='field-header'>Описание на програмния код</div>
                  <p class='field-content'>".$description."</p></div>";
            }

            if (!empty($has_contribution)) {
            echo "<div class='field'>
                  <div class='field-header'>Приноси на студента, ограничения и възможности за бъдещо разширение</div>
                  <p class='field-content'>".$contribution."</p></div>";
            }

            if (!empty($has_learned)) {
            echo "<div class='field'>
                  <div class='field-header'>Какво научих</div>
                  <p class='field-content'>".$learned."</p></div>";
            }

            if (!empty($has_resources)) {
            echo "<div class='field'>
                  <div class='field-header'>Използвани източници</div>
                  <p class='field-content'>".$resources."</p></div>";
            }

            if (!empty($file1)) {
            $fileee = "imgs/".$file1;
            echo "<div class='field'>
                  <div class='field-header'>Диаграма</div>
                  <p class='field-content'><img  class='diagram' src='". $fileee."'/></p></div>";
            }


            // if (!empty($file1)) {
            //       echo "<p class='diagram'>
            //             <h4 class='diagram'>Диаграма:</h4>
            //             <img  class='diagram' src='". $fileee."'/>
            //             <button  class='diagram' onClick='removeDiagram(this)'><span class='glyphicon glyphicon-remove'></span></button>
            //             </p>";     
            //     }

            echo "</div>";
            echo "</br><a class='btn red' href='edit_doc.php?document_id=".$document_id."'>Редактирай</a>";
          }
          $current_url = "http://localhost" . $_SERVER['REQUEST_URI']; 
          echo "<a class='btn red' href='download.php?redirect=".$current_url."&doc_name=".$fileee."'>Download</a>";
        }
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