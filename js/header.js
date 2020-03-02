$(function(){
	// $('#captcha').simpleCaptcha({
	// 	scriptPath: 'plugin/jquerysimplecaptcha/simplecaptcha.php'
	//   });
	$( window ).resize(function() {
		var width = $(window).width();
		if (width > 768) {
			// alert("ee");
			$(".burger").hide();
		}
		if (width < 768) {
			// alert("ee");
			$(".burger").show();
		}
	});

	$('.burger').click(function(e){
		e.preventDefault();
		$('.mainMe').css('width', '80%');
		$('.container-fluid').css('marginLeft', '80%');
		$('.burger').css('display','none');

	})
	$('.pMenuClosebtn').click(function(e){
		e.preventDefault();
		$('.mainMe').css('width', '0');
		$('.container-fluid').css('marginLeft', '0');
		$('.burger').css('display','block');
	})
	$('.chSubMain').click(function(e){
		e.preventDefault();
		$('.mainMe').css('width', '0');
		$('.subMainMe').css('width', '80%');
		// $('.subMain').css({'width':'100%'});
	})
	$('.chMainMeCenter').click(function(e){
		e.preventDefault();
		$('.mainMe').css('width', '80%');
		$('.subMainMe').css('width', '0');
	})
	// $('.chMainMeCenter').click(function(){
	// 	$('.mainMeCenter').css('width', '0');
	// 	$('.subMainMeCenter').css('marginLeft', '0');
	// })
	$('#defaultReal').realperson();
    $(".inqqq").click(function(e){
		e.preventDefault();
		$(".alert-danger").hide();
    	var flag=true;
    	var nameP = /[a-z\u4e00-\u9eff]{1,}/ ;
    	var emaAd = /[\w\d]+@[\w]{1,}.[\w]{2,3}/;
    	var comp = /[a-zA-z]/;
    	var coun = /[a-zA-z]/;
    	$('span').remove();
		if ($('#nam').val()=='') {
			flag=false;
			$('input[id^=na]').before("<span style=\"color:red\"> no words?</span>");
		} else if (!nameP.test($('#name').val())) {
			flag=false;
			$('input[id^=na]').before("<span style=\"color:red\"> Wrong format</span>");
		}
		if ($('#emaAd').val()=='') {
			flag=false;
			$('input[id^=ema]').before("<span style=\"color:red\"> no words?</span>");
		} else if (!emaAd.test($('#emaAd').val())) {
			flag=false;
			$('input[id^=ema]').before("<span style=\"color:red\"> Wrong format</span>");
		} 
		if ($('#cou').val()=='') {
			flag=false;
			$('input[id^=cou]').before("<span style=\"color:red\"> no words?</span>");
		} else if (!comp.test($('#name').val())) {
			flag=false;
			$('input[id^=cou]').before("<span style=\"color:red\"> Wrong format</span>");
		} 
		if ($('#defaultReal').val()==''){
			flag=false;
			$('input[id^=defa]').before("<span style=\"color:red\">please type your security code</span>");
			// $('input[id^=defa]').attr("placeholder","please type your security code");

		}
		if ($('#com').val()=='') {
			flag=false;
			$('input[id^=com]').before("<span style=\"color:red\"> no words?</span>");
		} else if (!coun.test($('#name').val())) {
			flag=false;
			$('input[id^=com]').before("<span style=\"color:red\"> Wrong format</span>");
		} 
		if (flag == false) {
			alert("Format is not correct!!Please Check again!!");
		} else {
			// $("#inq").submit();
			var hash_val= $('#defaultReal').realperson('getHash');
			// console.log("this is hash:  "+hash_val);
			$("#inq").append("<div class='alert alert-warning' role='alert'>Wait for Sending</div>");
			// $.post("send_mail_exe.php",
			// 	$( "#inq" ).serialize()+"&defaultRealHash="+hash_val+"",
			// 	function(res){
			// 		console.log("res內容: "+res.success);
			// 		if(res.success === true){
			// 			console.log("sss");
			// 			$(".alert-warning").hide();
			// 			$("#inq").append("<div class='alert alert-success' role='alert'>Finish</div>");	
			// 			alert('Thanks for you inquiry, we will reply as soon as possible!');
			// 			setTimeout(function(){ $('#myModal').modal('hide'); }, 3000);		
			// 		}else{
			// 			console.log(res);
			// 			$(".alert-warning").hide();
			// 			$("#inq").append("<div class='alert alert-danger' role='alert'>Security Code Not Correct!!</div>");
			// 		}
			// },'json')
			// return false;
			$.ajax({
				url: 'send_mail_exe.php',         
				method: 'POST',               
				dataType: 'json',        
				data: $( "#inq" ).serialize()+"&defaultRealHash="+hash_val+"", 
				success: function(res){
					if(res.success === true){
						$(".alert-warning").hide();
						$("#inq").append("<div class='alert alert-success' role='alert'>Finish</div>");	
						alert('Thanks for you inquiry, we will reply as soon as possible!');
						setTimeout(function(){ $('#myModal').modal('hide'); }, 3000);	
					}else{
						$(".alert-warning").hide();
						$("#inq").append("<div class='alert alert-danger' role='alert'>Mail haven't Sent!!</div>");
					}
				},
				error: function(resError){
					$(".alert-warning").hide();
					$("#inq").append("<div class='alert alert-danger' role='alert'>Security Code Not Correct!!</div>");
				}
			});		

		}
		
    })
})