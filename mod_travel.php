<?php

defined('_JEXEC') or die;

//$app = JFactory::getApplication();



$doc = JFactory::getDocument();
//$doc->addStyleSheet(JURI::root(true)  ."/modules/mod_travel/style/search.css");
$doc->addStyleSheet(JURI::root(true)    ."/modules/mod_travel/style/menu.css");
$doc->addStyleSheet(JURI::root(true)    ."/modules/mod_travel/style/footer.css");



require_once dirname(__FILE__) . '/helper.php';
require JModuleHelper::getLayoutPath('mod_travel', $params->get('layout', $params->get('tipo')));


