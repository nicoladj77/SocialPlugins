<?php
require_once 'SocialPluginsHelper.php';

$socialPlugins = new SocialPluginsHelper(array(
		SocialPluginsHelper::HTML_AFTER_BUTTONS => '<div class="clear"></div>',
		SocialPluginsHelper::HTML_BEFORE_BUTTONS => '<div class="clear"></div>',
		SocialPluginsHelper::STYLE_OF_WRAPPER => 'margin-top:10px;',
		SocialPluginsHelper::CUSTOM_PLUGIN_STYLE => array(
				"TwitterButton" => "width:69px;",
				"FacebookLike" => "width:146px;")
		)
);
$socialPlugins->add(PluginFactory::create("FacebookLike"));
$socialPlugins->add(PluginFactory::create("TwitterButton"));
$socialPlugins->add(PluginFactory::create("Gplus"));

?>

<html>
<head></head>
<body>
	<?php 
	$socialPlugins->renderAllButtons();
	//$socialPlugins->renderAllScripts();
	?>
</body>
</html>
