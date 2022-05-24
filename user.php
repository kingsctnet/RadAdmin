<?php
include 'view/header.php';
session_cek();

$users = tampil_users();

?>


    <div class="row">

    <!--sidenav-->
<?php
include 'view/sidenav.php';
?>
    <!--main content-->
      <div class="col s12 m8">

    <h4 style="margin-bottom: 30px;">Users</h4>
    
    <div class="row" style="margin-bottom:50px;">
      <a href="user_import.php" class="waves-effect waves-light btn">Import</a>
      <!--<a class="waves-effect waves-light btn">Export</a>-->
    </div>
      <div class="row" id="data-table">
        <div class="row" >
          <table class="responsive-table highlight" id="table_id" width="100%" cellspacing="0" data-page-length='10'>
          <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Group</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i = 1; 
          foreach($users as $user){
          ?> 
            <tr id="data_<?= $user['username']?>">
              <td> <?= $i++; ?> </td>
              <td> <?= $user['username'] ?> </td>
              <td> <?= $user['value'] ?> </td>
              <td> <?= tampil_group_by($user['username']) ?> </td>
              <td> <a href="user_edit.php?id=<?= $user['id'] ?>" title="Edit"><i class="material-icons">edit</i></a>
              <a href="#" class="delUser" data-id="<?= $user['username']?>" data-postid="<?= $user['username']?>" title="Delete"><i class="material-icons">delete</i></a>
              </td>
            </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
        </div>

        <div class="fixed-action-btn" style="bottom: 25px; right: 24px;">
            <a class="btn-floating btn-large red" href="user_add.php">
              <i class="material-icons">add_circle_outline</i>
            </a>
          </div>
      </div>
    </div>

<?php
include 'view/footer.php';
?>
