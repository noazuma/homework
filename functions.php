<?php
//develop mode config
define( "IS_VITE_DEVELOPMENT", true );

//define
define( 'DIST_DEF', 'dist' );
define( 'DIST_URI',  get_template_directory_uri() . '/' . DIST_DEF );
define( 'DIST_PATH', get_template_directory()	 . '/' . DIST_DEF );

define( 'JS_DEPENDENCY', array() ) ; // array( 'jquery' ) as example
define( 'JS_LOAD_IN_FOOTER', true ) ; // load scripts in footer?

define( 'VITE_SERVER', 'http://localhost:3000' );
define( "VITE_ENTRY_POINT", "/main.js" );

function cors_http_header() {
	header( "Access-Control-Allow-Origin: *" );
}
add_action( 'send_headers', 'cors_http_header' );
