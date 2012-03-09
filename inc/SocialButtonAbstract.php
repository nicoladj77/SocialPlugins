<?php
abstract class SocialButtonAbstract {
	protected $settings;
	function __construct(array $settings) {
		if ($settings !== null){
			$this->settings = array_merge($this->settings, $settings);
		}
	}
	abstract public function renderButton();
	abstract public function renderScript();
}