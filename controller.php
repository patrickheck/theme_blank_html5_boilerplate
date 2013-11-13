<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeBlankHtml5BoilerplatePackage extends Package {
	
	protected $pkgHandle = 'theme_blank_html5_boilerplate';
	protected $appVersionRequired = '5.1';
	protected $pkgVersion = '2.1';
	
	public function getPackageDescription() {
		return t("Installs blank HTML5 boilerplate theme");
	}
	
	public function getPackageName() {
		return t("Blank HTML5 Boilerplate");
	}
	
	public function install() {  
		$pkg = parent::install();
		// install block
		PageTheme::add('blank_html5_boilerplate', $pkg);
	}

}
?>