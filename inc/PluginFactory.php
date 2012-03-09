<?php
class PluginFactory {

	static public function create($plugin, array $settings = array()){
		if(!class_exists($plugin)){
			require_once 'inc/'.$plugin.'.php';
		}
		return new $plugin($settings);
	}
}