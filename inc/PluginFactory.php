<?php
class PluginFactory {

	static public function create($plugin, array $settings = array()){
		if(!class_exists($plugin)){
			require_once dirname(__FILE__) . DIRECTORY_SEPARATOR .$plugin.'.php';
		}
		return new $plugin($settings);
	}
}