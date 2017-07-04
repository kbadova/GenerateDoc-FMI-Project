<html>
  <head>
    <title>Create Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div id="page-wrapper">
      <header></header>

      <div class="document_holder form_holder">
        <div class="create-author-h">

        <b><h2>Създаване на Документ</h2></b>
          </div>
        <?php
          include "forms/document_input_form.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          include "post_data.php";
   
        ?>
        <script type="text/javascript">
        window.location = "/view_doc.php?document_id=" + "<?php echo $id?>";
        </script>
        <?php
        }
    ?>
    </div>
    <footer></footer>
  </body>
</html>