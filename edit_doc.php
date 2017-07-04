<!DOCTYPE html>
<html>
  <head>
    <title>Edit Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script  type="text/javascript" src="my_js.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  </head>
  <body>
    <div id="page-wrapper">
      <header></header>
    <form class="form-inline" enctype="multipart/form-data" method="POST">

      <?php
        $document_id = $_GET['document_id'];
      ?>
      <input type='hidden' name='id' value='<?php echo $document_id; ?>'>
      <?php  
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

          include "fetch_data.php";

          echo "<div class='document_holder form_holder'><div class='fields_holder'>
                  <div class='create-author-h'>
                <h2><b>Редактиране на Документ</b></h2>
                  
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

                  <input type='hidden' placeholder='".$name."'>
                  <input type='hidden' placeholder='".$fn."'>
                  <input type='hidden' placeholder='".$email."'>
                  <input type='hidden' placeholder='".$course."'>
                  <input type='hidden' placeholder='".$specialty."'>
                  <input type='hidden' placeholder='".$program."'>
                  <input type='hidden' placeholder='".$created_at."'>


                  <div class='field'>
                    <div class='field-header'>Teма</div>
                      <p class='field-content'>
                        <input type='text' name='title' id='title' placeholder='".$title."' value=".$title.">
                      </p>
                    </div>
                  </div>";

           if (!empty($has_my_condition)) {
            echo "<div class='field'>
                  <div class='field-header'>Условие</div>
                  <p class='field-content'><textarea name='my_condition' placeholder='".$my_condition."'>".$my_condition."</textarea></p></div>";
            }
            if (!empty($has_introduction)) {
            echo "<div class='field'>
                  <div class='field-header'>Въведение</div>
                  <p class='field-content'><textarea name='introduction' placeholder='".$introduction."'>".$introduction."</textarea></p></div>";
            }
             if (!empty($has_theory)) {
            echo "<div class='field'>
                  <div class='field-header'>Теория</div>
                  <p class='field-content'><textarea name='theory' placeholder='".$theory."'>".$theory."</textarea></p></div>";
            }

            if (!empty($has_technologies)) {
            echo "<div class='field'>
                  <div class='field-header'>Използвани технологии</div>
                  <p class='field-content'><textarea name='technologies' placeholder='".$technologies."'>".$technologies."</textarea></p></div>";
            }

            if (!empty($has_settings)) {
            echo "<div class='field'>
                  <div class='field-header'>Инсталация и настройки</div>
                  <p class='field-content'><textarea name='settings' placeholder='".$settings."'>".$settings."</textarea></p></div>";
            }

            if (!empty($has_guide)) {
            echo "<div class='field'>
                  <div class='field-header'>Кратко ръководство на потребителя</div>
                  <p class='field-content'><textarea name='guide' placeholder='".$guide."'>".$guide."</textarea></p></div>";
            }

            if (!empty($has_example_data)) {
            echo "<div class='field'>
                  <div class='field-header'>Примерни данни</div>
                  <p class='field-content'><textarea name='example_data' placeholder='".$example_data."'>".$example_data."</textarea>
</p></div>";
            }
            if (!empty($has_description)) {
            echo "<div class='field'>
                  <div class='field-header'>Описание на програмния код</div>
                  <p class='field-content'><textarea name='description' placeholder='".$description."'>".$description."</textarea></p></div>";
            }

            if (!empty($has_contribution)) {
            echo "<div class='field'>
                  <div class='field-header'>Приноси на студента, ограничения и възможности за бъдещо разширение</div>
                  <p class='field-content'><textarea name='contribution' placeholder='".$contribution."'>".$contribution."</textarea></p></div>";
            }

            if (!empty($has_learned)) {
            echo "<div class='field'>
                  <div class='field-header'>Какво научих</div>
                  <p class='field-content'><textarea name='learned' placeholder='".$learned."'>".$learned."</textarea></p></div>";
            }

            if (!empty($has_resources)) {
            echo "<div class='field'>
                  <div class='field-header'>Използвани източници</div>
                  <p class='field-content'><textarea name='resources' placeholder='".$resources."'>".$resources."</textarea></p></div>";
            }

            if (!empty($file1)) {
            $fileee = "imgs/".$file1;
            echo "<div class='field'>
                  <div class='field-header'>Диаграма</div>
                  <p class='field-content'><img  class='diagram' src='". $fileee."'/>
                  <button  class='diagram' onClick='removeDiagram(this)'><span class='glyphicon glyphicon-remove'></span></button></p></div>";
            }

            include "field_matches.php";

              echo "
                    <div class='field'> 
                    <div class='field-header'>Добави друга точка</div>
                    <p class='field-content'>

                    <select onChange='addField(this)'>";
               for($i = 0; $i < sizeof($null_fields); $i++) {

                    echo '<option value="' . $null_fields[$i]. '">' . $field_matches[$null_fields[$i]] . '</option>';
                }
              echo "</select></p></div></div>";

        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          include "post_data.php";
              ?>
      <script type="text/javascript">
      window.location = "/view_doc.php?document_id=" + "<?php echo $id?>";
      </script>
      <?php
      }
      ?>
      <div class="field"> 
        <div class='field-header'>Качи диаграма</div>
          <p class='field-content'>
          <input type="file" name="file1" style="width:auto" id="file1">
        </p>
        </div>
      <input type="submit" class="btn green" style="display: inline" value="Запази">
      </form>
    </div>
  </body>
</html>
