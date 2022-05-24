<?php
include 'view/header.php';
session_cek();

//Error Null
$error = null;

if(isset($_POST['submit'])){
  $file = $_FILES['userfile'];
  $upload = upload_user($file);
  if($upload){
      header('Location: user.php');
  }else{
    $error = "Upload Failed";
  }
}


?>
    <div class="row">

    <!--sidenav-->

<?php
include 'view/sidenav.php';
?>

      <!--main content-->
        <div class="col s12 m8">

          <h4 style="margin-bottom: 70px;margin-top:50px;">Import Users</h4>
          
          <div style="margin:40px;">
              <blockquote> <?= $error ?> </blockquote>
          </div>

          <div class="row">
              <form class="col s12" method="POST" enctype="multipart/form-data">
              <div class="row">
                  <div class="input-field col s8">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                          <input type="file" name="userfile">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" >
                      </div>
                    </div>
                  </div>
                </div>

                  <button class="btn waves-effect waves-light" type="submit" name="submit"> Import </button>

              </form>

          </div>
          <div class="row" style="margin-top:70px;">
              <div class="row">
                <div class="col s8">
                  <p> File CSV format like below </p>
                  <p> Username, Password, GroupName, Max Upload, Max Download, Session Time, URL</p>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s8">
                  <textarea id="textarea1" class="materialize-textarea" data-length="120">test,passw,group1,10200,21031,60,https://www.google.com</textarea>
                  <label for="textarea1">Example</label>
                </div>
              </div>
      </div>
      </div>
<?php
include 'view/footer.php';
?>
