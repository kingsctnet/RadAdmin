<?php
include 'view/header.php';
session_cek();

$groups = tampil_group();

?>


    <div class="row">

    <!--sidenav-->
<?php
include 'view/sidenav.php';
?>
    <!--main content-->
      <div class="col s12 m8">

        <h4 style="margin-bottom: 30px;">Group Profile</h4>

      <div class="row" id="data-table">
        <div class="row" >
          <table class="responsive-table striped" id="table_id" width="100%" cellspacing="0" data-page-length='5'>
          <thead>
            <tr>
                <th>No</th>
                <th>Group Name</th>
                <th>Attribute</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $i = 1;
          foreach($groups as $group){
          ?> 
            <tr id="data_<?= $group['groupname']?>">
              <td><?= $i++ ?></td>
              <td> <?= $group['groupname'] ?> </td>
              <td> <?php 
                    $groupattrs = tampil_group_attribute($group['groupname']);
                    foreach($groupattrs as $atts){
                      echo atts_convert($atts['attribute'],$atts['value']).'<br>';
                    }
               ?> </td>
              <td> <a href="profile_edit.php?name=<?= $group['groupname'] ?>" title="Edit"><i class="material-icons">edit</i></a>
              <a href="#" class="delGroup" data-id="<?= $group['groupname']?>" data-postid="<?= $group['groupname']?>" title="Delete"><i class="material-icons">delete</i></a>
              </td>
            </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
        </div>

        <div class="fixed-action-btn" style="bottom: 25px; right: 24px;">
            <a class="btn-floating btn-large red" href="profile_add.php">
              <i class="material-icons">add_circle_outline</i>
            </a>
          </div>
      </div>
      </div>

<?php
include 'view/footer.php';
?>
