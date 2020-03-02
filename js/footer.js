window.onorientationchange = function() { window.location.reload(); }; 

$(".burger").click(function(){
  $(".topBar").toggleClass("topBarClick");
  $(".middleBar").toggleClass("middleBarClick");
  $(".bottomBar").toggleClass("bottomBarClick");
});



$(function(){
	/* menu */

//	$(".timtosPhoto").colorbox({rel:'group1', transition:"elastic",maxWidth:'95%', maxHeight:'95%'});
	/* swiper */
	var swiper = new Swiper('.swiper-container', {
		// direction : 'vertical',
		effect: 'fade',
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true	,
		  },
		autoplay: {
			delay: 10000
		}
	});
	var swiper_event = new Swiper('.swiper-container-event', {
		// pagination: {
		// 	el: '.swiper-pagination',
		// 	clickable: true	,
		// },
		
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		}
	});




    /* 從json撈資料 */

	$("#product").click(function(){
	$("#dnav").stop(false,true).slideToggle("slow");
		return false;
	});

    $(document).click(function(){
    	$('#dnav').hide();
    })
    $("#tabText").click(function(e){
		e.preventDefault();
		var tabtext = $("#tabText p").first();
        //notSide version
		//$(this).hasClass("notSide"
        if (tabtext.hasClass("notSide")) {
        	$("#tabText").stop().animate({
        	    right: "130px",
        	  }, 150, function() {
        	});
        	$(".con").stop().animate({
        	    right: "0px",
        	  }, 150, function() {
        	});
        }else{
        	$("#tabText").stop().animate({
        	    right: "0px",
        	  }, 150, function() {
        	});
        	$(".con").stop().animate({
        	    right: "-130%",
        	  }, 150, function() {
        	});
        }
        tabtext.toggleClass("notSide");
    })
    
})