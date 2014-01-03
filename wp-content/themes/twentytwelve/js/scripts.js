$(document).ready(function(){
	//alert("working");
	$('#gaming_comp')[0].reset();
	$("#enter_comp").click(function(){
		var name = $("#fullname").val();
		var contact = $("#contact").val();
		var email = $("#email").val();
		var platform = $("#platform").val();
		if(contact.length!=10||name.length<2||emailCheck(email)==false)
			{
				if(name.length<2) $(".nameError").show(); else $(".nameError").hide();
				if(contact.length!=10) $(".contactError").show(); else $(".contactError").hide();
				if(emailCheck(email)==false) $(".emailError").show(); else $(".emailError").hide();
				return false;
			}
			else
				{
					$(".processing").show();
					$(".nameError, .contactError , .emailError").hide();
					$.post( "https://yworld.co.za/facebook_apps/y_gaming_comp/process.php", $("form#gaming_comp").serialize())
						.done(function( data ) {
						$('#gaming_comp')[0].reset();
						$(".processing").hide();
						$(".success").show();
						});
					return true;
					//
				}
		});
	$(".open_competition").click(function(){
		$(".welcome").animate({"height":0} , 1300 , function(){
			$(".open_competition").hide();
			$(".the_comp").show();
			//alert("test");
		})
		
	})

	$("#contact").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ( $.inArray(event.keyCode,[46,8,9,27,13,190]) !== -1 ||
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	})

	function emailCheck(email){
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  	return regex.test(email);
  	}