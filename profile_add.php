<?php
include 'view/header.php';
session_cek();

//Error Null
$error = null;
if(isset($_POST['submit'])){
  $groupname = $_POST['groupname'];
  $session = $_POST['session'];
  $download = $_POST['download'];
  $upload = $_POST['upload'];
  $url= $_POST['url'];

  $result = tambah_group($groupname,$session,$download,$upload,$url);
  if($result){
    header('Location: profile.php');
  }else{
    $error = " Can not add Profile";
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

          <h4 style="margin-bottom: 70px;margin-top:50px;">Group Add</h4>
          
          <div style="margin:40px;">
              <blockquote> <?= $error ?> </blockquote>
          </div>

          <div class="row">
              <form class="col s12" method="POST">
                  <div class="row">
                      <div class="input-field col s6">
                          <input id="groupname" placeholder="group name" type="text" class="validate" name="groupname" required>
                          <label for="groupname" data-error="wrong" data-success="right">Group Name</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                          <input id="session" placeholder="session" type="number" class="validate" name="session" required>
                          <label for="session" data-error="wrong" data-success="right">Session (Minits)</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                          <input id="download" placeholder="download" type="number" class="validate" name="download" required>
                          <label for="download" data-error="wrong" data-success="right">Max Download (KBps)</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                          <input id="upload" placeholder="upload" type="number" class="validate" name="upload" required>
                          <label for="upload" data-error="wrong" data-success="right">Max Upload (KBps)</label>
                      </div>
                  </div>
                  <div class="row">
                      <div class="input-field col s6">
                          <input id="url" placeholder="https://www.google.com" type="url" class="validate" name="url" required value="https://www.google.com">
                          <label for="url" data-error="wrong" data-success="right">Redirect URL </label>
                      </div>
                  </div>

                  <button class="btn waves-effect waves-light" type="submit" name="submit"> Save </button>
              </form>
          </div>
          </div>
<?php
include 'view/footer.php';
?>
