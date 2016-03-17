$(document).ready(function(){
	$('#boton_login').click(function()
    {
		alert("test");
	});

    $('#login_userbttn').click(function()
    {

    	if ( $('#login_username').val() != "" && $('#login_userpass').val() != "" )
    	{    
            $.ajax({
                 	type: 'POST',
                    url: 'log.inout.ajax.php',
                    data: 'login_username=' + $('#login_username').val() + '&login_userpass=' + $('#login_userpass').val(),
          			success: function(data)
          			{
						if(data)
						{
							window.location.href = "user.php";
						
						}
						else
						{
							//Shake animation effect.
							$('#cuadro_login').shake();
							$("#login").val('Login')
						}
					},
             
                });     
        }
        else
        {
           
        }
       
         
        return false;
         
    });
     
     
     
    $('#sessionKiller').click(function(){
        $('#timer').fadeIn(300);
        $('#alertBoxes').html('<div class="box-success"> </div>');
        $('.box-success').hide(0).html('Espera un momento…');
        $('.box-success').slideDown(timeSlide);
        setTimeout(function(){
            window.location.href = "logout.php";
        },2500);
    });


$("#boton_login").click(function() 
{
	$("#cuadro_login").slideUp("slow");
});


});

