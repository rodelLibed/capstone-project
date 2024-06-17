function fire_message(message,icon,title){
    Swal.fire({
  icon: icon,
  title: title,
  text: message
})
  }



  function reloadme(){
    window.location = "user_dash.php";
  }
  $(document).ready(function() {
    $('#frm_login').on("submit", function(e){
      e.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
      if(email==""){
        $('#err_msg').addClass('btn btn-danger btn-block');
        $('#err_msg').html("Please Enter Email");
        $('#email').css("border-color","red");
        $('#email').focus();
      }else if(password==""){
        $('#err_msg').addClass('btn btn-danger btn-block');
        $('#err_msg').html("Please Enter Password");
        $('#password').css("border-color","red");
        $('#password').focus();
      }else{
       $.ajax({
        url:'verify.php',
        type: 'POST',
        data: $(this).serialize(),
        cache:false,
        beforeSend: function(){
          $('#btnlogin').html('<img src="assets/load.gif" style="height:20px"> Please Wait');
        },
        success:function(data){
          if(data==1){
            fire_message("Login Successful","success","Account Verified");
            setTimeout(reloadme,2000);
            
          }
        }
       })
      }
    })
  })