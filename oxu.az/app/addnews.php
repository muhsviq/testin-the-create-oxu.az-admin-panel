
<?php
include "class/model.php";
if(isset($_POST['addSubmit']))
  {
    $status = 0;

    if(isset($_POST['status'])){
      $status = 1;
    }

$my_db = new Database('localhost','root','','oxuaz');
 $myNews = new News($my_db->connection);  
      
    $myNews->insertNews($_POST['news-title'],$_POST['news-date'],$_POST['news-desc'],$_POST['news-text'],$status);}

?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    
    <div class="container">
    <h3>New News</h3>
      <div class="row">
      <div class="col s12 m12">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row">
            <form action="" method="POST" class="col s12" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s12">
                  <input id="news-title" name="news-title" type="text" class="validate">
                  <label for="news-title">News title</label>
                </div>
                <div class="input-field col s6">
                  <input id="news-date" name="news-date" type="date" class="datepicker">
                  <label for="news-date">News date</label>
                </div>
                 <div class="file-field input-field col s6">
                <div class="btn">
                  <span>File</span>
                  <input name="news-img" type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">

                </div>
              </div>
              <div class="input-field col s12">
                  <input id="news-desc" name="news-desc" type="text" class="validate">
                  <label for="news-desc">News description</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea name="news-text" id="icon_prefix2" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">News text</label>
                </div>
              </div>
               <!-- Switch -->
                  <div class="row">
                    <div class="switch center">
                  <label>
                    Add to site
                    <input name="status" id="news-status" type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
                  </div>
                
                <div class="center">
                <button id="add-news" class="btn waves-effect waves-light" type="submit" name="addSubmit">Add
                  <i class="material-icons right">send</i>
                </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    </body>
  </html>

  <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: "yyyy-mm-dd"
  });
  </script>