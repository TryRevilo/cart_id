<?php

function campus_rooms_init_css() {

	$do_math = 'mod/campus_rooms/vendors/do_math.js';
	elgg_register_js('do_math', $do_math);
	// elgg_load_js('do_math');

	// SLICK

	$slick_css = 'mod/rev_cart_store/vendors/slick/slick.css';
	elgg_register_css('slick_css', $slick_css);
	elgg_load_css('slick_css');

	$slick_theme = 'mod/rev_cart_store/vendors/slick/slick-theme.css';
	elgg_register_css('slick_theme', $slick_theme);
	elgg_load_css('slick_theme');

	$slick_js = 'mod/rev_cart_store/vendors/slick/slick.js';
	elgg_register_js('slick_js', $slick_js);
	elgg_load_js('slick_js');

	$slick_min_js = 'mod/rev_cart_store/vendors/slick/slick.min.js';
	elgg_register_js('slick_min_js', $slick_min_js);
	elgg_load_js('slick_min_js');
	
}

?>