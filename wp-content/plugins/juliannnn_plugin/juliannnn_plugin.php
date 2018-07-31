<?php
/**
* @package Julianplugin
*/
/*
plugin Name: julian plugin
plugin URI: http://julian.com /plugin
Description: This is my first attempt on writing a custom plugin for this tutorial
Version: 1.0.0
Author: Julian Palacio
Autor URI: htt://julian.com
license: GPLv2 or later
Text Domain: juliannnn_plugin
*/

/*
This program is free software; ypu can redistribute it and/or
modify it under the terms of the GNU General Public license
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

this program is distributed in the hope that it will be useful,
but without any warranty; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details

You should have received a copy of the GNU General Public license
along with this program; if not, write to the Free software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

Copyright 2005-2015 Automatic, Inc.
*/

//defined ('ABSPATH') or die('NO access');

/*
if(! function_exists('add_action')){
	echo 'no acces';
	exit;
}
*/

if(!defined('ABSPATH')){
	die;
}

class JulianPlugin
{
	function __construct(){
		add_action('init',array($this,'custom_post_type') );
	}
	function activate(){
		//generated a Custom Post Type
		//flush rewrite rules

	}
	function deactivate(){
		//flush rewrite rules
	}
	function uninstall(){
		//delete CPT
		//delete all the plugin data from DB
	}
	function custom_post_type(){
		register_post_type('book',['public' => true,'label' => 'Books']);
	}
}

if(class_exists('JulianPlugin')){
	$julianPlugin = new JulianPlugin();
}

//activation
register_activation_hook(__FILE__, array($julianPlugin,'activate') );

//deactivation
register_deactivation_hook(__FILE__, array($julianPlugin,'deactivate') );

//uninstall
