<!DOCTYPE html>
<html>
  <head>
    <title>Create Author</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta charset="utf-8">
  </head>
  <body>
  <div id="page-wrapper">
  <header></header>
    <div class="form_holder">
      <img class="upload-img" style="height: 27px" src="https://cdn2.iconfinder.com/data/icons/social-media-2/512/User_-_add-512.png">
      <div class="create-author-h">
        <b>Създаване на Автор</b></h3>
          
        <h3>
      </div>
      <form id="myform" method="post" action="">
        <p>
          <label for="title">Име:</label>
          <input type="text" name="name" value="" id="title">
        </p>
         <p>
          <label for="title">Емейл:</label>
          <input type="email" name="email" id="email">
        </p>
        <p>
          <label for="title">ФН:</label>
          <input type="number" name="fn" id="fn">
        </p>
        <p>
          <label for="title">Курс:</label>
          <input type="number" name="course" id="course">
        </p>
        <p>
          <label for="specialty">Специалност:</label>
          <select name="specialty" id="specialty">
            <option value="СИ">СИ</option>
            <option value="КН">КН</option>
            <option value="И">И</option>
            <option value="ПМ">ПМ</option>
          </select>
        </p>
        <p>
          <label for="program">Програма:</label>
          <select name="program" id="program">
            <option value="бакалавър">бакалавър</option>
            <option value="магистър">магистър</option>
          </select>
        </p>
        <input type="submit" class="btn green" style="display: inline" value="Създай">
      </form>
    </div>
  </div>
  <?php
   include "db_connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $fn = $_POST['fn'];
        $course = $_POST['course'];
        $specialty = $_POST['specialty'];
        $program = $_POST['program'];


        $prepared = $conn->prepare("INSERT INTO Author (name, email, fn, course, specialty, program) VALUES (:name, :email, :fn, :course, :specialty, :program)");
        $prepared->bindParam(':name', $name);
        $prepared->bindParam(':email', $email);
        $prepared->bindParam(':fn', $fn);
        $prepared->bindParam(':course', $course);
        $prepared->bindParam(':specialty', $specialty);
        $prepared->bindParam(':program', $program);
        
        $prepared->execute();

      }
      catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
      }
      $conn = null;
      ?>
      <script type="text/javascript">
      window.location = "/home_page.php"
      </script>
      <?php
    }
  ?>
  <footer></footer>
  </body>
</html>