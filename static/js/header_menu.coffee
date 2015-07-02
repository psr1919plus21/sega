$(document).ready ->
	flag = true
	$('.header_menu-mobile-btn').click ->
		if flag
			$('.header_menu-list').animate
				'max-height': '230px'
				,300
			
			flag = !flag
		else 
			$('.header_menu-list').animate
				'max-height': '0'
				,300
			
			flag = !flag	