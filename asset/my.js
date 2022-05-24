//Delete User
$(document).on('click','.delUser',function(){
  var isOk = confirm("Delete this user?");
  if(isOk){
    var user = $(this).attr('data-id');
    $.ajax({
    method: "POST",
    url: "function/ajax_functions.php",
    data: { id : user, action: "delUser" },
    success: function(data){
      $("#data_"+user).remove();
        console.log(data);
      }
    })
  }
});

//Delete Group
$(document).on('click','.delGroup',function(){
  var isOk = confirm("Delete this group?");
  if(isOk){
    var group = $(this).attr('data-id');
    $.ajax({
    method: "POST",
    url: "function/ajax_functions.php",
    data: { id : group, action: "delGroup" },
    success: function(data){
      $("#data_"+group).remove();
        console.log(data);
      }
    })
  }
});
