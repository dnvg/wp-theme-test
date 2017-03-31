<?php

function ju_widgets(){
	register_sidebar(array(
			'name'	=>	__('First theme sidebar', 'test'),
			'id'	=>	'ju_sidebar',
			'description'	=>	__('Sidebar for the theme Test', 'test'),
			'class'	=>	'',
			'before_widget' => '<div id="%1$s" class="card %2$s">',
			'after_widget'  => '</div></div></div>',
			'before_title'  => '<div class="card-header bg-primary"><span class="card-title">',
			'after_title'   => '</span></div><div class="card-content"><div class="widget">'
		));
}