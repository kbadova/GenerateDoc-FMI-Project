<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script  type="text/javascript" src="my_js.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  </head>
  <body>
  <div id="page-wrapper">
    <header>
    </header>

    <nav  id="navigation" role="navigation" class="cssmenu header">
      <ul>
        <li>
          <a href='choose_content.php' class="btn green"><img class="upload-img" src="http://loremipsum2.fmi.uni-sofia.bg/WEBTECH/www_8ed_referats/img/upload.png"> Създай документ</a>
        </li>
     
        <li>
          <a href='create_autor.php' class="btn orange"><img class="upload-img" src="https://cdn2.iconfinder.com/data/icons/social-media-2/512/User_-_add-512.png">Създай Автор</a>
        </li>        
      </ul>
    </nav>

    <div class="document_list">
      <?php
      include "fetch_all_documents.php"
      ?>
    </div>
  <footer>
  </footer>
  </div>
    </div>

  </body>
</html>