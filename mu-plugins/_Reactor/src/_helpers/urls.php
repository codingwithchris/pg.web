<?php
namespace Reactor\Helpers;

function get_domain(){

	return $_SERVER['HTTP_HOST'];

}


function get_reuest_uri(){

	return $_SERVER['REQUEST_URI'];

}

function get_url_protocol(){

	$protocol = isset( $_SERVER['HTTPS'] )

				? "https"
				: "http";

	return  $protocol;

}

function get_full_url(){

	$url = get_url_protocol() . '://' . get_domain() . get_reuest_uri();

	return $url;

}