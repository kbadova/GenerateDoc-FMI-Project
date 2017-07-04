<form class="form-inline" method="POST">
  <p>
    <label for="title">Заглавие</label>
    <br>
    <input type="text" name="title" id="title" required>
  </p>
  <label for='</select>'>Автор: </label><br/>
    <select name="author">
    <?php 
      include "db_connect.php";
      try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query("SELECT * FROM Author");

        while ($row = $result->fetch(PDO::FETCH_ASSOC))
          {
           $id=$row['id'];
           $name=$row['name'];
           $email=$row['email'];
           echo "<option value=".$id.">".$name.", ".$email."</option>";
         } 
      }
      catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
      }
      $conn = null;
    ?>
  </select><br>
        
  <?php
      include "db_connect.php";

    $document_id = $_GET['document_id'];

    try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {

         $result = $conn->query("SELECT * FROM Document where id=".$document_id);
          while ($row = $result->fetch(PDO::FETCH_ASSOC)){

            $has_my_condition = $row['has_my_condition'];
            $has_introduction = $row['has_introduction'];
            $has_theory = $row['has_theory'];
            $has_technologies = $row['has_technologies'];
            $has_settings = $row['has_settings'];
            $has_guide = $row['has_guide'];
            $has_example_data = $row['has_example_data'];
            $has_description = $row['has_description'];
            $has_contribution = $row['has_contribution'];
            $has_learned = $row['has_learned'];
            $has_resources = $row['has_resources'];

            if (!empty($has_my_condition)) {
              echo "<p>
                    <label for='my_condition'>Условие</label>
                    <textarea name='my_condition' id='my_condition' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_introduction)) {
              echo "<p>
                    <label for='introduction'>Въведение</label>
                    <textarea name='introduction' id='introduction' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_theory)) {
              echo "<p>
                    <label for='theory'>Теория</label>
                    <textarea name='theory' id='theory' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_technologies)) {
              echo "<p>
                    <label for='technologies'>Използвани технологии</label>
                    <textarea name='technologies' id='technologies' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_settings)) {
              echo "<p>
                    <label for='settings'>Инсталация и настройки</label>
                    <textarea name='settings' id='settings' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_guide)) {
              echo "<p>
                    <label for='guide'>Кратко ръководство на потребителя</label>
                    <textarea name='guide' id='guide' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_example_data)) {
              echo "<p>
                    <label for='example_data'>Примерни данни</label>
                    <textarea name='example_data' id='example_data' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_description)) {
              echo "<p>
                    <label for='description'>Описание на програмния код</label>
                    <textarea name='description' id='description' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_contribution)) {
              echo "<p>
                    <label for='contribution'>Приноси на студента, ограничения и възможности за бъдещо разширение</label>
                    <textarea name='contribution' id='contribution' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_learned)) {
              echo "<p>
                    <label for='learned'>Какво научих</label>
                    <textarea name='learned' id='learned' required> 
                    </textarea>
                  </p>";
            }
            if (!empty($has_resources)) {
              echo "<p>
                    <label for='resources'>Използвани източници</label>
                    <textarea name='resources' id='resources' required> 
                    </textarea>
                  </p>";
            }

        }
      }
    } catch(PDOException $e){
          echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
  ?>
  <p>
    <label for="file1">Качи диаграма</label>
    <input type="file" name="file1" style="width:auto" id="file1">
  </p>

  <input type="hidden" name="id" value="<?php echo $document_id; ?>">
  <input type="submit" id="create-document-button" class="btn green" style="display: inline" value="Запази">
</form>
