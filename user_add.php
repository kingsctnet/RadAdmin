<?php
include 'view/header.php';
session_cek();
$groups = tampil_group();

//Error Null
$error = null;

//Menambahkan User
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $groupname = $_POST['group'];
  $run = tambah_user($username,$password,$groupname);
  if($run){
    $error = "User Add";
  }else{
    $error = "Can not add user";
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

          <h4 style="margin-bottom: 70px;margin-top:50px;">User Add</h4>
          
          <div style="margin:40px;">
              <blockquote> <?= $error ?> </blockquote>
          </div>

          <div class="row">
              <form class="col s12" method="POST">
                  <div class="row">
                      <div class="input-field col s6">
                          <input id="username" placeholder="user01" type="text" class="validate" name="username" required>
                          <label for="username" data-error="wrong" data-success="right">Username</label>
                      </div>
                  </div>

                  <div class="row">
                      <div class="input-field col s6">
                          <input id="password" type="password" class="validate" name="password" required>
                          <label for="password">Password</label>
                      </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6" class="validate">
                      <select name="group" required >
                              <option name="group" value="0" disabled selected>Select Group</option>
                              <?php
                                while( $group = mysqli_fetch_assoc($groups)){
                              ?>
                                <option name="group" value=<?= $group['groupname'] ?>><?= $group['groupname'] ?> </option>
                              <?php
                                }
                              ?>
                      </select>
                  <label>Group</label>
                    </div>
                  </div>

                  <button class="btn waves-effect waves-light" type="submit" name="submit"> Save </button>

              </form>
          </div>
          </div>
<?php
include 'view/footer.php';
?>