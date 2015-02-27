<?php

	#if (is_admin()) {
	function be_initialize_cmb_meta_boxes() {
	    if (!class_exists('cmb_Meta_Box')) {
	        //require_once(TEMPLATEPATH . '/metabox/init.php');
	        require_once('metabox/init.php');
	    }
	}

	add_action('init', 'be_initialize_cmb_meta_boxes', 9999);
	#}
	

	include('template_config.php');
	include('post-type_presstv.php');
	include('post-type_perguntas.php');
	include('post-type_publicidade.php');
	include('post-type_slide.php');

?>