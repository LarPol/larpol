var runScript =  {
    homeJS:function() { 
    
    },
    stickyNav:function() { 
        var window_top = $(window).scrollTop();
		var div_top = $('#header__sticky-anchor-js').offset().top;
		if (window_top > div_top) {
			$('#header__menu-wrapper-js').addClass('sticky');
		} else {
			$('#header__menu-wrapper-js').removeClass('sticky');
		}
    },
    loader:function(){
        $('#wptime-plugin-preloader').fadeOut('fast').remove();
    },
    mobileMenu:function() { 
    
    }
}

$(document).foundation();
$(document).ready(function(){ 
    
    runScript.homeJS();
    //runScript.stickyNav();
});

$(window).load(function() {
    runScript.loader();
});